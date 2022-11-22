<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use App\Site;
use App\Slider;
use App\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(Request $request, Category $id)
    {
        // $posts = Post::where('category_id',$request->category)->with('category')->get();

        $categories=Category::all();

        // $posts = Post::where('category_id','=',$id)->orderby('id', 'asc')->paginate(6);
        $posts = Post::orderby('id', 'asc')->orderby('id', 'asc')->paginate(6);
        $category=Category::find($id);
        
        $slider = Post::where('slideshow',1)->get();

        $sites = Site::all();

        // if($request->has('category')){
        //     $category=Category::find($request->category);
        //     $posts=$category->posts;
        // }else{
        //         $posts= Post::latest()->paginate(15);
        // } 
        
        // $posts = Post::latest()->paginate(15);
        $latestposts= Post::orderBy('created_at', 'desc')->paginate(6); 


        return view('frontend.index', compact('posts','categories','category','sites','latestposts','slider'));

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::orderby('id', 'asc')->take(4)->get();

        $categories=Category::all();
        $sites = Site::all();
        return view('frontend.show', compact('post','categories','posts','sites'));
    }
    
    public function about()
    {
        $categories=Category::all();
        $sites = Site::all();
        return view('frontend.about',compact('categories','sites'));
    }

    public function contact()
    {
        $posts = Post::orderby('id', 'asc')->paginate(6);
        $categories=Category::all();
        $posts = Post::where('slideshow',1)->get();
        // $slider = Slider::where('status',0)->get();
        $sites = Site::all();
        return view('frontend.contact',compact('posts','categories','sites'));
    }

    public function blog()
    {
        $posts = Post::orderby('id', 'asc')->paginate(6);
        $categories=Category::all();
        $posts = Post::where('status',1)->get();
        $slider = Post::where('slideshow',1)->get();
        // $slider = Slider::where('status',1)->get();
        $sites = Site::all();
        return view('frontend.blog', compact('posts','categories','sites','slider'));
    }

     public function family($id)
    {
        $posts = Post::where('category_id','=',$id)->orderby('id', 'asc')->paginate(6);
        $category=Category::find($id);
        $categories=Category::all();
        $sites = Site::all();
        return view('frontend.family', compact('posts','categories','category','sites'));
    }

}
