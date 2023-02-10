<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogWidgets;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogWidget extends Controller
{
    public function store(Request $request, $id){
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'position' => 'required',
            'link' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog_widget = new BlogWidgets();
            $blog_widget->blog_id = $id;
            $blog_widget->title = $request->title;
            $blog_widget->description = $request->description;
            $blog_widget->position = $request->position;
            $blog_widget->link = $request->link;
            $blog_widget->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$id.'/view')->withSuccess('Blog Widget Was Successfully Created');
    }

    public function edit($group){
        
    }

    public function update(Request $request, $group){
        
    }

    public function delete($blog_id, $id){
        DB::beginTransaction();
        try {
            $blog_widget = BlogWidgets::find($id);
            $blog_widget->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$blog_id.'/view')->withSuccess('Blog Widget Was Successfully Deleted');
    }
}
