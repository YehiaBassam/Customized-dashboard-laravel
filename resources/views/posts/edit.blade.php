@extends('layouts.dashboard')

@section('content')
<form class="bg-white p-4" method="POST" action="{{route('posts.update',['post'=>$post->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
    <textarea name="description" type="text" class="form-control">{{$post->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">update note</button>
</form>
@endsection