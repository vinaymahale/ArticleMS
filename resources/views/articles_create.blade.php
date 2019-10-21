@extends('master')

@section('title','Add Article')

@section('content')

<br/>
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form" action="{{route('articles.store')}}" method="POST">
  <div class="form-group">
    <label for="name">Article Name : </label>
    <input type="text" class="form-control" name="name" placeholder="Article Name">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control rounded-0" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
