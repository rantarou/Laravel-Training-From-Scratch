@extends('layouts.app')

@section('content')
    <a href="{{route('posts.index')}}" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%;" src="{{ asset('storage/cover_images/'.$post->cover_image)}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'no-wrap'])!!}
                <a href="{{ route('posts.edit', [$post->id])}}" class="btn btn-primary">Edit</a>
                {{Form::hidden('_method', 'DELETE') }}
                {{Form::submit('Delete',['class' => 'btn btn-danger']) }}
            {!!Form::close() !!}
        @endif
    @endif
@endsection
