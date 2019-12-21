@extends('layouts.app')

@section('content')
    <a href="{{route('posts.index')}}" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'no-wrap'])!!}
        <a href="{{ route('posts.edit', [$post->id])}}" class="btn btn-primary">Edit</a>
        {{Form::hidden('_method', 'DELETE') }}
        {{Form::submit('Delete',['class' => 'btn btn-danger']) }}
    {!!Form::close() !!}
@endsection
