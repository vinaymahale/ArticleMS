@extends('master')

@section('title','View Article')

@section('content')

<br/>
<div class="container">

<form class="form">
  <div class="form-group">
    <label for="name">Article Name : </label>
    <input type="text" class="form-control" value="{{$articles->name}}" readonly>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" readonly>{{$articles->content}}</textarea>
  </div>
</form>
</div>

@endsection
