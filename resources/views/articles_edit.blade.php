@extends('master')

@section('title','Edit Article')

@section('content')

<br/>
<div class="container">

<form class="form" action="{{url('articles', [$articles->id])}}" method="POST">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Article Name : </label>
    <input type="text" class="form-control" name="name" value="{{$articles->name}}" readonly>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content">{{$articles->content}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
