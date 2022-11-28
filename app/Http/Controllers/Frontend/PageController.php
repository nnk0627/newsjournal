<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use App\Site;
use App\Video;
use App\Slider;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnValue;

class PageController extends Controller
{
    public function index(Request $request, Category $id)
    {
        // $posts = Post::where('category_id',$request->category)->with('category')->get();

        $categories=Category::all();

        // $posts = Post::where('category_id','=',$id)->orderby('id', 'asc')->paginate(6);
        $politicsposts = Post::where('category_id','1')->orderBy('id','desc')->paginate(6);
        $businessposts = Post::where('category_id','2')->orderBy('id','desc')->paginate(6);
        $articlesposts = Post::where('category_id','3')->orderBy('id','desc')->paginate(6);
        $interviewsposts = Post::where('category_id','4')->orderBy('id','desc')->paginate(6);
        $lifestyleposts = Post::where('category_id','5')->orderBy('id','desc')->paginate(6);
        $weatherposts = Post::where('category_id','6')->orderBy('id','desc')->paginate(6);

        $posts = Post::orderby('id', 'asc')->orderby('id', 'asc')->limit(4)->get();
        $category=Category::find($id);
        
        $slider = Post::where('slideshow',1)->get();

        $sites = Site::all();
        $latestposts= Post::orderBy('created_at', 'desc')->take(4)->get();        

        return view('frontend.index', compact('posts','categories','category','sites',
        'latestposts','slider','politicsposts','businessposts','articlesposts','interviewsposts',
        'lifestyleposts','weatherposts'));

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::orderby('id', 'asc')->take(4)->get();

        $categories=Category::all();
        $sites = Site::all();
        return view('frontend.show', compact('post','categories','posts','sites'))
            ->with('i',(request()->input('page', 1) - 1)*5);
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
        $slider = Post::where('slideshow',1)->get();
        // $slider = Slider::where('status',0)->get();
        $sites = Site::all();
        return view('frontend.contact',compact('posts','categories','sites','slider'));
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

    public function video()
    {
        $posts = Post::orderby('id', 'asc')->paginate(6);
        $categories=Category::all();
        $slider = Post::where('slideshow',1)->get();
        // $slider = Slider::where('status',0)->get();
        $sites = Site::all();
        $videos = Video::all();
        return view('frontend.video',compact('posts','categories','videos','slider','sites'));
    }

    public function search(Request $request){
       
        $categories=Category::all();
        $slider = Post::where('slideshow',1)->get();
        $sites = Site::all(); 

        // Check for search input
        if (request('search')) {
            $posts = Post::where('title', 'like', '%' . request('search') . '%')->get();
            
        } else {
            $posts = Post::all();
        }
           
        // Return the search view with the resluts compacted
        return view('frontend.search', compact('posts','categories','slider','sites'));
    }
    
}
