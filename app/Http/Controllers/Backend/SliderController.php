<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\File;
use App\Slider;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::all();
        return view('backend.slider.index', compact('slider'));
        
    }

    public function create(){
        return view('backend.slider.create');
        
    }

    public function store(Request $request){
        $slider = new Slider;
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $slider->image = $filename;
        }
        $slider->status = $request->input('status')==true ? '1':'0';
        $slider->save();
        return redirect('admin/slider')->with('status','Slider Added Successfully');

    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasFile('image')){

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $path = public_path('images/');
            $file->move($path, $filename);

            $previmg = $path . $slider->image;
            if(file_exists($previmg)){
                unlink($previmg);
            }

            $slider->image = $filename;
        }
        $slider->status = $request->input('status')==true ? '1':'0';
        $slider->save();
        
       return redirect('admin/slider')->with('slider',$slider)->with('status', 'Update Successfully!');
        
    }

    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        return redirect('admin/slider')->with('status', 'Deleted Successfully!'); 
    }
}
