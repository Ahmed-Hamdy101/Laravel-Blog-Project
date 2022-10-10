<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts =Post::all();
        return    view('posts/index' , compact('posts'));
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { // صفحة create

        $categories=Category::all();
        return view('posts/create' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {  
        $title = $request->title ;      
        $content = $request->content;      
        $category_id = $request->category_id;      

 $posts = Post::create([
        'title' => $title,
        'content' => $content,
        'category_id' => $category_id
    ]);
    
    return " <p class='alert alert-success bg-success'> Success </p>"; 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post,$id)
    { 
        $post=Post::where('id',$id)->first();
        // dd($post);
        return  view('posts/show',compact('post'));

    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post , $id)
    { 
         $post=Post::where('id',$id)->first();
         $categories=Category::all();
         return  view('posts/edit' , compact('post','categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post ,$id)
    {

        $post = Post::where('id',$id)->update(
         [  'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id
         ]   );

        return "update single by id " ;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post ,$id)
    {
        Post::destroy($id);
        return "remove single by id : {$id}" ;

    }
}
