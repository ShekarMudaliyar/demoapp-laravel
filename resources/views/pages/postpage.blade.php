@extends('layouts.index')
@section('content')
   <h3>Posts</h3>
    @if (count($posts)>0)
        @foreach ($posts as $post)
   <a href="/posts/{{$post->id}}"> <div class="well">
    <h4>{{$post->title}}</h4>
    <p>{{$post->created_at}}</p>
    </div>
</a>
        @endforeach
    @else
        <h5>No Posts</h5>
    @endif

@endsection