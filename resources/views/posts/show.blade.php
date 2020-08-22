@extends('layouts.dashboard')

@section('content')
<div class="card bg-dark">
  <h3 class="card-header">Note details</h3>
  <div class="card-body">
  <h4 class="text-cyan d-inline-block mb-2">Numbers : </h4> <span class="text-black h4" style="margin-bottom: 20px !important">{{$post->id}}</span><br>
  <h4 class="text-cyan d-inline-block mb-2">title : </h4> <span class="text-black h4">{{$post->title}}</span><br>
  <h4 class="text-cyan d-inline-block mb-2">description : </h4> <span class="text-black h4">{{$post->description}}</span><br>
  <a href={{route('posts.index')}} class="btn btn-primary mt-3">back to your Notes</a>
  </div>
</div>
@endsection