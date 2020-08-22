@extends('layouts.dashboard')

@section('content')
<form class="bg-white p-4" method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input name="title" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" type="text" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Create Note</button>
</form>
@endsection