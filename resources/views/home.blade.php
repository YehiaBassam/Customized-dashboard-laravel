@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>{{ __('You are logged in!') }}</h5>
                        <h4>Welcome <span class="text-danger">{{Auth::user()->name}}</span></h4>
                    <br>
                    <a class="btn btn-primary mt-1" href="{{route('posts.index')}}">Go To dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
