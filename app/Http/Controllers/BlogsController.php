<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    // //
    // public function index(){
    //     $blogs = Blog::all();
    //     return view('blogs.index', compact('blogs'));
    // }

    // public function create(){
    //     return view('blogs.create');
    // }

    // public function store(Request $request){
    //     $input = $request->all();
    //     $blog = Blog::create($input);
    //     // $blog = new Blog();
    //     // $blog->title = $request->title;
    //     // $blog->body = $request->body;
    //     // $blog->save();
    //     return redirect('/blogs');
    // }
     //Display a listing of the resource. 
     public function index() 
     { 
         return view('blogs.index')->with('blogs',Blog::all());
     }
 
     //Show the form for creating a new resource.
     public function create()
     {
         $blog = new Blog();
 
         return view('blogs.create')->with(compact('blog'));
     }
 
     //Store a newly created resource in storage.
     public function store(Request $request)
     {
         Blog::create($request->all());
 
         return redirect(route('blog-index'))->with('message','Blog successfully created.');
     }
 
     //Display the specified resource.
     public function show(Blog $blog)
     {
         // In an admin panel, I usually don't need this method. It's often more efficient to
         // show the customer data in the edit view.
     }
 
     //Show the form for editing the specified resource.
     public function edit(Blog $blog)
     {
         return view('blogs.edit')->with(compact('blog'));
     }
 
     //Update the specified resource in storage.
     public function update(Request $request, Blog $blog)
     {
         $blog->update($request->all());
 
         return redirect(route('blog-index'))->with('message','Blog successfully updated.');
     }
 
     //Remove the specified resource from storage.
     public function destroy(Blog $blog)
     {
         $blog->delete();
 
         return redirect(route('blog-index'))->with('message','Blog successfully removed.');
     }
}
