<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\StoreMusicController;
use App\Models\TCource;
use App\Models\TMusic;
use App\Models\TVedio;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    protected $model;

    public function __construct(TMusic $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.musics');
        $pageDescription = trans('navigation.musics');

        return view('admin.musics.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $music = null;

        if ($id) {
            $music = $this->model->findOrFail($id);
        }

        $inputs = [
            [
                'name' => 's_title',
                'type' => 'text',
                'label' => __('general.title'),
            ],
            // [
            //     'name' => 's_description',
            //     'type' => 'textarea',
            //     'label' => __('general.description'),
            //     'rows' => '2',
            //     'id' =>'summernote',
            //     'class' => 'summernote'
            // ]
        ];
         $courceLabels = ['' => 'اختار الكورس'] + TCource::isActive()->getSelects('s_title');
         $vedioLabels = ['' => 'اختار الفيديو'] + TVedio::isActive()->getSelects('s_title');

        return response()->json(
            [
                'title' => trans('general.add_edit'),
                'page' => view('admin.musics.form', compact('music', 'inputs','courceLabels','vedioLabels'))->render()
            ]
        );
    }

    public function store(StoreMusicController $request)
    {
        
        $input = $request->except(['s_music']);
        $localizable = $request->get('localizable');


        if ($request->hasFile('s_music')) {
            $input['s_music'] = $request->file('s_music')->store('uploads/musics');
        }

        if ($id = $request->get('pk_i_id')) {
            $music = $this->model->find($id);
            $music->update($input);
        } else {
            $music = $this->model->create($input);
        }

        $music->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $music
        ]);
    }

    public function updateStatus(Request $request)
    {
        $music = $this->model->findOrFail($request->id);
        $music->b_enabled = (int)$request->enabled;
        $music->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(TMusic $music)
    {
        $music->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $musics = $this->model->with(['cource','vedio'])->filter($filters)->distinct();

        return datatables($musics)->addColumn('actions_column', function ($row) {
            return view('admin.musics.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
