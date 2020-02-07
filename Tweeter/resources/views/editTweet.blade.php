@extends('layouts.app')
@section('content')

<h1 class = "title" > Edit Tweet </h1>

<h3>{{$tweets->content}}</h3>

<form action="/profile/edit" method="GET">
    @csrf
<input type= "hidden" name="author" value="{{ Auth::user()->name }}">
<textarea name="content" value="Tweets here" style="width: 40vw; height: 20vh; display: block; resize: none;"></textarea>
<button name ="id" type= "submit" value="{{$tweets->id}}"> Edit Tweet </button>
</form>
@endsection