<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MentorVideos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MentorVideo extends Controller
{
    public function store(Request $request, $group){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'video_embed' => 'required|url',
            // 'description_video' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_video = new MentorVideos();
            $mentor_video->mentor_id = $group;
            $mentor_video->video_embed = $request->video_embed;
            if (str_contains($request->video_embed, 'https://youtu.be/')) {
                $mentor_video->youtube_id = substr($request->video_embed, strrpos($request->video_embed, '/' ) + 1);
            } else {
                return Redirect::back()->withErrors('Video URL must be from Youtube');
            }
            $mentor_video->description = '';
            // $mentor_video->description = $request->description_video;
            $mentor_video->save();
            DB::commit();
            Log::notice('Mentor Video : '.$mentor_video->video_embed.' has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Mentor Video failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Created');
    }

    public function update(Request $request, $group, $id){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'video_embed' => 'required|url',
            // 'description_video' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $mentor_video = MentorVideos::find($id);
            $old_video_embed = $mentor_video->video_embed;
            $mentor_video->video_embed = $request->video_embed;
            if (str_contains($request->video_embed, 'https://youtu.be/')) {
                $mentor_video->youtube_id = substr($request->video_embed, strrpos($request->video_embed, '/' ) + 1);
            } else {
                return Redirect::back()->withErrors('Video URL must be from Youtube');
            }
            $mentor_video->description = '';
            // $mentor_video->description = $request->description_video;
            $mentor_video->updated_at = date('Y-m-d H:i:s');
            $mentor_video->save();
            DB::commit();
            Log::notice('Mentor Video : '.$old_video_embed.' to '.$mentor_video->video_embed.' has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Mentor Video failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Updated');
    }

    public function delete($group, $id){
        DB::beginTransaction();
        try {
            $mentor_video = MentorVideos::find($id);
            $old_video_embed = $mentor_video->video_embed;
            $mentor_video->delete();
            DB::commit();
            Log::notice('Mentor Video : '.$old_video_embed.' has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Mentor Video failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/mentor/'.$group.'/view')->withSuccess('Mentor Video Was Successfully Deleted');
    }
}
