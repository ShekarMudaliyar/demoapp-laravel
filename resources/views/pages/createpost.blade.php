@extends('layouts.index')
@section('content')
<div style="margin-top:2em;" >
{{ Form::open(['action' => 'PostsController@store','method'=>'POST']) }}
<div class="form-group">
    {{Form::label('title',"Title:")}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class="form-group">
    {{Form::label('title',"Body:")}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}}
</div>
{{Form::submit('Submit',['class'=>'btn btn-dark'])}}
{{ Form::close() }}
</div>
@endsection