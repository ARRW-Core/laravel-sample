<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return the view with the posts variable
        return view('blog.index', [
            'posts' => Post::all()->sortByDesc('id')
        ]);

        //return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //returns the view for creating a new post
        return view('blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the request
        $this->validate($request, [
            'title' => 'required|unique:posts,title|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            'image' => ['mimes:jpg,jpeg,png', 'max:2048'],
            'min_to_read' => 'min:0|max:60'
        ]);
        //add data from request to a Post object using Post::create()
        Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => $this->uploadImage($request),
            'is_published' => $request->is_published === 'on'
        ]);




//        $post = new Post();
//        $post->title = $request->title;
//        $post->excerpt = $request->excerpt;
//        $post->body = $request->body;
//        $post->is_published = $request->is_published === 'on';
//        $post->save();

        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //returns id without view
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function uploadImage(Request $request)
    {

        if ($request->hasFile('image')) {
//            $request->validate([
//                'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            return $imageName;
        }
    }
}
