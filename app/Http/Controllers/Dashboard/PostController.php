<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        $total_row = Post::all()->count();
        return  view('posts/index', compact('posts','total_row'));
    }

    public function liveSearch(Request $request)
    {
    if($request->ajax())
    {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
    $posts = DB::table('posts')
        ->where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orderBy('id', 'desc')
        ->paginate(5);

    $total_row_search = DB::table('posts')
        ->where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orderBy('id', 'desc')
        ->get();   // I can't find true syntax to Avoid repetition
    }

    else
    {
    $posts = DB::table('posts')
        ->orderBy('id', 'asc')
        ->paginate(5);

    $total_row_search = DB::table('posts')
        ->orderBy('id', 'asc')
        ->get();
    }
    
    $total_row = count($total_row_search);
    $output = view('posts/tableRowsSearch', compact('posts','total_row'))->__toString();
    $header = view('posts/tableHeaderSearch')->__toString();

    $dataFromSearch = array(
        'table_header' => $header,
        'table_data'   => $output,
        'total_data'   => $total_row
    );
    return $dataFromSearch;
    
    }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $post = new post;
        $post->title = request()->input('title');
        $post->description = request()->input('description');
        $post->user_id =  auth()->id();
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return View('posts/show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return View('posts/edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = Post::findOrFail($id);
        $post->title = request()->title;
        $post->description = request()->description;
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('posts.index'));
    }
}
