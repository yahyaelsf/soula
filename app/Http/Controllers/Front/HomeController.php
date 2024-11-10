<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\TBrand;
use App\Models\TCource;
use App\Models\TSlider;
use App\Models\TSubscription;
use App\Models\TUser;
use App\Models\TVedio;
use App\Services\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $first_section = TBrand::first();
        $second_section = TBrand::skip(1)->take(1)->first();
        $third_section = TBrand::skip(2)->take(1)->first();
        $forth_section = TBrand::skip(3)->take(1)->first();
        $fifth_section = TBrand::skip(4)->take(1)->first();
        $sixth_section = TBrand::skip(5)->take(1)->first();
        $sliders = TSlider::active()->get();
        $cources = TCource::orderBy('pk_i_id','asc')->take(3)->get();
        return view('front.home',compact('first_section','second_section','third_section','cources','forth_section','fifth_section','sixth_section','sliders'));
    }
    public function cources(){
        $cources = TCource::all();
        return view('front.cources' ,compact('cources'));
    }
    public function courceDetials($id){
        $cource = TCource::findOrFail($id);
        $vedios = TVedio::where('fk_i_cource_id',$cource->pk_i_id)->get();
        $user = Auth::user();
        $user_id = Auth::id();
        $subscriptions = TSubscription::where('fk_i_user_id',$user_id)
                        ->where('fk_i_cource_id',$cource->pk_i_id)
                        ->where('status','success')->get();
        return view('front.cource_detials',compact('cource','vedios','subscriptions'));
    }
    public function subscription(Request $request){
            if($request->has('cource_id')){
                $cource_item = TCource::findOrFail($request->cource_id);
                foreach($cource_item->vedios as $item){
                    $subscription = new Subscription($request, $item ,$cource_item);
                    $data = $subscription->createSubscription('50');
                }
                return redirect()->route('cources')->with(['message' => 'لقد تم تقديم طلبك الاشتراك بنجاح']);
            }elseif($request->has('vedio_id')){
                $vedio = TVedio::findOrFail($request->vedio_id);
                $cource = $vedio->cource;
            $subscription = new Subscription($request, $vedio ,$cource);
            $data = $subscription->createSubscription('60');
             return redirect()->route('cources')->with(['message' => 'لقد تم تقديم طلبك الاشتراك بنجاح']);
            }
             return redirect()->route('cources');

    }


    public function register(Request $request){
        TUser::create($request->all());
         return redirect(route('home'));
    }
        public function logging(Request $request)
    {
        $email = trim($request->get('email'));
        $password = $request->get('password');
        $user = TUser::where('s_email',$email)->first();
        if (auth('web')->attempt(['s_email' => $email, 'password' => $password], false)) {
            return response()->json(['success'=>true,'href_link'=> route('home') ]);
        }
        return response()->json(['success'=>false ,'data'=> __('خطا بالايميل أو كلمة المرور')]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');

    }
}
