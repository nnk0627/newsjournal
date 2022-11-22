<?php

namespace App\Http\Controllers\Backend;

use App\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Auth;
use App\Http\Requests\PostFormRequest;

class SiteController extends Controller
{

    public function index()
    {
        $sites = Site::orderBy('id', 'asc')->paginate(6);
        return view('backend.site.index', compact('sites'));
    }

    public function create()
    {
        return view('backend.site.create');
    }

    public function store(Request $request)
    {

        $sites = new Site();
        $sites->title = $request->title;

        if($request->hasfile('image')){
            $image = $request->file('image');
            $imgName = time() . '_' . $image->getClientOriginalName();
            $path = public_path('images/');
            $image->move($path, $imgName);
            $sites->image = $imgName;
        }

       $sites->save();
  
       return redirect('admin/site')->with('status', 'Created Successfully!');
            
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $sites = Site::find($id);
        return view('backend.site.edit', compact('sites'));
    }

    public function update(Request $request, $id)
    {

        $sites = Site::find($id);
        $sites->title = $request->title;
     

        if($request->hasfile('image')){
            $image = $request->file('image');
            $imgName = time() . '_' . $image->getClientOriginalName();
            $path = public_path('images/');
            $image->move($path, $imgName);

            $previmg = $path . $sites->image;
            if(file_exists($previmg)){
                unlink($previmg);
            }

            $sites->image = $imgName;
        }

        $sites->save();
        
       return redirect('admin/site')->with('site',$sites)->with('status', 'Update Successfully!');
        
    }

    public function destroy($id)
    {
        Site::findOrFail($id)->delete();
        return redirect('admin/site')->with('status', 'Deleted Successfully!'); 
    }
}
