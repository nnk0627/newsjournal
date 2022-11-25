<?php

namespace App\Http\Controllers\Backend;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Auth;
use App\Http\Requests\PostFormRequest;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id', 'asc')->paginate(6);
        return view('backend.video.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.video.create');
    }

    public function store(Request $request)
    {
        $videos = new Video();
        $videos->title = $request->title;

        if ($request->hasfile('video')) {
            $video = $request->file('video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $path = public_path('videos/');
            $video->move($path, $videoName);
            $videos->video = $videoName;
        }

        $videos->save();

        return redirect('admin/video')->with('status', 'Created Successfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $videos = Video::find($id);
        return view('backend.video.edit', compact('videos'));
    }

    public function update(Request $request, $id)
    {
        $videos = Video::find($id);
        $videos->title = $request->title;


        if ($request->hasfile('video')) {
            $video = $request->file('video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $path = public_path('videos/');
            $video->move($path, $videoName);

            $prevvideo = $path . $videos->video;
            if (file_exists($prevvideo)) {
                unlink($prevvideo);
            }

            $videos->video = $videoName;
        }

        $videos->save();

        return redirect('admin/video')->with('video', $videos)->with('status', 'Update Successfully!');
    }

    public function destroy($id)
    {
        Video::findOrFail($id)->delete();
        return redirect('admin/video')->with('status', 'Deleted Successfully!'); 
    }
}