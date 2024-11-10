<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCourceRequest;
use App\Models\TCource;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    protected $model;

    public function __construct(TCource $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.cources');
        $pageDescription = trans('navigation.cources');

        return view('admin.cources.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $cource = null;

        if ($id) {
            $cource = $this->model->findOrFail($id);
        }

        $inputs = [
            [
                'name' => 's_title',
                'type' => 'text',
                'label' => __('general.title'),
            ],
            [
                'name' => 's_description',
                'type' => 'textarea',
                'label' => __('general.description'),
                'rows' => '2',
                'id' =>'summernote',
                'class' => 'summernote'
            ]
        ];


        return response()->json(
            [
                'title' => trans('general.add_edit'),
                'page' => view('admin.cources.form', compact('cource', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreCourceRequest $request)
    {

        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/cources');
        }

        if ($id = $request->get('pk_i_id')) {
            $cource = $this->model->find($id);
            $cource->update($input);
        } else {
            $cource = $this->model->create($input);
        }

        $cource->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $cource
        ]);
    }

    public function updateStatus(Request $request)
    {
        $cource = $this->model->findOrFail($request->id);
        $cource->b_enabled = (int)$request->enabled;
        $cource->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(TCource $cource)
    {
        $cource->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $cources = $this->model->select('t_cources.*')->filter($filters)->distinct();

        return datatables($cources)->addColumn('actions_column', function ($row) {
            return view('admin.cources.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
