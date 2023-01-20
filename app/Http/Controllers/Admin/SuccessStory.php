<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SuccessStory extends Controller
{
    public function index(){
        $success_stories = SuccessStories::get();
        return view('admin.success-stories.index', ['success_stories' => $success_stories]);
    }

    public function create(){
        return view('admin.success-stories.create');
    }

    public function store(Request $request){
        $rules = [
            'story_name_en' => 'required',
            'story_badge1_en' => 'required',
            'story_badge2_en' => 'nullable',
            'story_badge3_en' => 'nullable',
            'story_badge4_en' => 'nullable',
            'story_description_en' => 'required',
            'story_thumbnail_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt_en' => 'required',
            'story_achievement_img_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_en' => 'required',
            'story_video_link_en' => 'required|url',
            'story_name_id' => 'required',
            'story_badge1_id' => 'required',
            'story_badge2_id' => 'nullable',
            'story_badge3_id' => 'nullable',
            'story_badge4_id' => 'nullable',
            'story_description_id' => 'required',
            'story_thumbnail_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt_id' => 'required',
            'story_achievement_img_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_id' => 'required',
            'story_video_link_id' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $success_stories_en = new SuccessStories();
            $success_stories_en->group = date('YmdHis');
            $success_stories_en->name = $request->story_name_en;
            $success_stories_en->badge_1 = $request->story_badge1_en;
            $success_stories_en->badge_2 = $request->story_badge2_en;
            $success_stories_en->badge_3 = $request->story_badge3_en;
            $success_stories_en->badge_4 = $request->story_badge4_en;
            $success_stories_en->description = $request->story_description_en;
            if ($request->hasFile('story_thumbnail_en')) {
                $file_en = $request->file('story_thumbnail_en');
                $file_format_en = $request->file('story_thumbnail_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-thumbnail-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->thumbnail = $fileName_en;
            }
            $success_stories_en->thumbnail_alt = $request->story_alt_en;
            if ($request->hasFile('story_achievement_img_en')) {
                $file_en = $request->file('story_achievement_img_en');
                $file_format_en = $request->file('story_achievement_img_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-achievement-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->achievement_image = $fileName_en;
            }
            $success_stories_en->achievement_alt = $request->story_achievement_alt_en;
            $success_stories_en->video_link = $request->story_video_link_id;
            $success_stories_en->status = 'active';
            $success_stories_en->lang = 'en';
            $success_stories_en->save();

            $success_stories_id = new SuccessStories();
            $success_stories_id->group = $success_stories_en->group;
            $success_stories_id->name = $request->story_name_id;
            $success_stories_id->badge_1 = $request->story_badge1_id;
            $success_stories_id->badge_2 = $request->story_badge2_id;
            $success_stories_id->badge_3 = $request->story_badge3_id;
            $success_stories_id->badge_4 = $request->story_badge4_id;
            $success_stories_id->description = $request->story_description_id;
            if ($request->hasFile('story_thumbnail_id')) {
                $file_id = $request->file('story_thumbnail_id');
                $file_format_id = $request->file('story_thumbnail_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-thumbnail-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->thumbnail = $fileName_id;
            }
            $success_stories_id->thumbnail_alt = $request->story_alt_id;
            if ($request->hasFile('story_achievement_img_id')) {
                $file_id = $request->file('story_achievement_img_id');
                $file_format_id = $request->file('story_achievement_img_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-achievement-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->achievement_image = $fileName_id;
            }
            $success_stories_id->achievement_alt = $request->story_achievement_alt_id;
            $success_stories_id->video_link = $request->story_video_link_id;
            $success_stories_id->status = 'active';
            $success_stories_id->lang = 'id';
            $success_stories_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories')->withSuccess('Success Stories Was Successfully Created');
    }

    public function edit($group){
        $success_stories = SuccessStories::where('group', $group)->get();
        return view('admin.success-stories.update', ['success_stories' => $success_stories]);
    }

    public function update($group, Request $request){
        $rules = [
            'story_name_en' => 'required',
            'story_badge1_en' => 'required',
            'story_badge2_en' => 'nullable',
            'story_badge3_en' => 'nullable',
            'story_badge4_en' => 'nullable',
            'story_description_en' => 'required',
            // 'story_thumbnail_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt_en' => 'required',
            // 'story_achievement_img_en' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_en' => 'required',
            'story_video_link_en' => 'required|url',
            'story_name_id' => 'required',
            'story_badge1_id' => 'required',
            'story_badge2_id' => 'nullable',
            'story_badge3_id' => 'nullable',
            'story_badge4_id' => 'nullable',
            'story_description_id' => 'required',
            // 'story_thumbnail_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_alt_id' => 'required',
            // 'story_achievement_img_id' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'story_achievement_alt_id' => 'required',
            'story_video_link_id' => 'required|url',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories_en = $success_stories[0];
            $success_stories_en->name = $request->story_name_en;
            $success_stories_en->badge_1 = $request->story_badge1_en;
            $success_stories_en->badge_2 = $request->story_badge2_en;
            $success_stories_en->badge_3 = $request->story_badge3_en;
            $success_stories_en->badge_4 = $request->story_badge4_en;
            $success_stories_en->description = $request->story_description_en;
            if ($request->hasFile('story_thumbnail_en')) {
                if ($old_image_path_en = $success_stories_en->thumbnail) {
                    $file_path = public_path('uploaded_files/success-stories/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('story_thumbnail_en');
                $file_format_en = $request->file('story_thumbnail_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-thumbnail-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->thumbnail = $fileName_en;
            }
            $success_stories_en->thumbnail_alt = $request->story_alt_en;
            if ($request->hasFile('story_achievement_img_en')) {
                if ($old_image_path_en = $success_stories_en->achievement_image) {
                    $file_path = public_path('uploaded_files/success-stories/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_en = $request->file('story_achievement_img_en');
                $file_format_en = $request->file('story_achievement_img_en')->getClientOriginalExtension();
                $destinationPath_en = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_en->group;
                $fileName_en = 'Success-Stories-achievement-en-'.$time.'.'.$file_format_en;
                $file_en->move($destinationPath_en, $fileName_en);
                $success_stories_en->achievement_image = $fileName_en;
            }
            $success_stories_en->achievement_alt = $request->story_achievement_alt_en;
            $success_stories_en->video_link = $request->story_video_link_id;
            $success_stories_en->updated_at = date('Y-m-d H:i:s');
            $success_stories_en->save();

            $success_stories_id = $success_stories[1];
            $success_stories_id->name = $request->story_name_id;
            $success_stories_id->badge_1 = $request->story_badge1_id;
            $success_stories_id->badge_2 = $request->story_badge2_id;
            $success_stories_id->badge_3 = $request->story_badge3_id;
            $success_stories_id->badge_4 = $request->story_badge4_id;
            $success_stories_id->description = $request->story_description_id;
            if ($request->hasFile('story_thumbnail_id')) {
                if ($old_image_path_id = $success_stories_id->thumbnail) {
                    $file_path = public_path('uploaded_files/success-stories/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('story_thumbnail_id');
                $file_format_id = $request->file('story_thumbnail_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-thumbnail-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->thumbnail = $fileName_id;
            }
            $success_stories_id->thumbnail_alt = $request->story_alt_id;
            if ($request->hasFile('story_achievement_img_id')) {
                if ($old_image_path_id = $success_stories_id->achievement_image) {
                    $file_path = public_path('uploaded_files/success-stories/'.$old_image_path_id);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file_id = $request->file('story_achievement_img_id');
                $file_format_id = $request->file('story_achievement_img_id')->getClientOriginalExtension();
                $destinationPath_id = public_path().'/uploaded_files/success-stories';
                $time = $success_stories_id->group;
                $fileName_id = 'Success-Stories-achievement-id-'.$time.'.'.$file_format_id;
                $file_id->move($destinationPath_id, $fileName_id);
                $success_stories_id->achievement_image = $fileName_id;
            }
            $success_stories_id->achievement_alt = $request->story_achievement_alt_id;
            $success_stories_id->video_link = $request->story_video_link_id;
            $success_stories_id->updated_at = date('Y-m-d H:i:s');
            $success_stories_id->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories/'.$group.'/edit')->withSuccess('Success Stories Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            if ($old_image_path_en = $success_stories[0]->thumbnail) {
                $file_path_en = public_path('uploaded_files/success-stories/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_en = $success_stories[0]->achievement_image) {
                $file_path_en = public_path('uploaded_files/success-stories/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $success_stories[1]->thumbnail) {
                $file_path_id = public_path('uploaded_files/success-stories/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            if ($old_image_path_id = $success_stories[1]->achievement_image) {
                $file_path_id = public_path('uploaded_files/success-stories/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $success_stories[0]->delete();
            $success_stories[1]->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories')->withSuccess('Success Stories Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories[0]->status = 'inactive';
            $success_stories[1]->status = 'inactive';
            $success_stories[0]->save();
            $success_stories[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $success_stories = SuccessStories::where('group', $group)->get();
            $success_stories[0]->status = 'active';
            $success_stories[1]->status = 'active';
            $success_stories[0]->save();
            $success_stories[1]->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/success-stories');
    }
}
