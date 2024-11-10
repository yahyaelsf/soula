<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\TCource;
use App\Models\TSubscription;
use App\Models\TUser;
use App\Models\TVedio;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    protected $model;

    public function __construct(TSubscription $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.subscription');
        $pageDescription = trans('navigation.subscription');

        return view('admin.subscriptions.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $subscription = null;

        if ($id) {
            $subscription = $this->model->findOrFail($id);
        }

        $inputs = [
            // [
            //     'name' => 's_title',
            //     'type' => 'text',
            //     'label' => __('general.title'),
            // ],
            // [
            //     'name' => 's_description',
            //     'type' => 'textarea',
            //     'label' => __('general.description'),
            //     'rows' => '2'
            // ]
        ];

         $courceLabels = ['' => 'اختار الكورس'] + TCource::isActive()->getSelects('s_title');
         $vedioLabels = ['' => 'اختار الفيديو'] + TVedio::isActive()->getSelects('s_title');
         $users = TUser::all();
        return response()->json(
            [
                'title' => trans('general.add_edit'),
                'page' => view('admin.subscriptions.form', compact('subscription', 'inputs','courceLabels','vedioLabels','users'))->render()
            ]
        );
    }

    public function store(Request $request)
    {
        $input = $request->except('s_cover');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/subscription');
        }

        if ($id = request('pk_i_id')) {
            $subscription = $this->model->find($id);
            $subscription->update($input);
        } else {
            $subscription = $this->model->create($input);
        }

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $subscription
        ]);
    }

    public function updateStatus(Request $request)
    {
        $subscription = $this->model->findOrFail($request->id);
        $subscription->b_enabled = (int)$request->enabled;
        $subscription->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(TSubscription $subscription)
    {
        $subscription->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $subscriptions = $this->model->select('t_subscriptions.*')->with(['cource','vedio','user'])->filter($filters)->distinct();

        return datatables($subscriptions)->addColumn('status_label', function($row){
            return trans('general.' . strtolower($row->status));
        })->addColumn('pay_label', function($row){
            return trans('general.' . strtolower($row->gateway));
        })->addColumn('actions_column', function ($row) {
            return view('admin.subscriptions.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
