@extends('master')

@section('title','HomePage')

@section('content')

<br/>
<div class="container">
<a href="{{ route('articles.create') }}"><button type="button" class="btn btn-primary">ADD ARTICLE</button></a>
</div>

<div class="container">

@if(session('success'))
<br>
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

<div class="container">
<br>
<table class="table table-striped">
<thead>
<tr>
<th>Article Name</th>
<th>Posted</th> 
<th colspan=3></th> 
</tr>
</thead>
<tbody>
@foreach($articles as $article)
<tr>
<td><strong>{{ $article->name}}</strong></td>
<td>{{ $article->created_at->diffForHumans() }} </td>
<td><a href="{{route('articles.show',$article->id)}}"><button type="button" class="btn btn-primary">VIEW</button></a></td>
<td><a href="{{route('articles.edit',$article->id)}}"><button type="button" class="btn btn-primary">EDIT</button></a></td>
<td><form action="{{url('articles', [$article->id])}}" method="POST">
    		<input type="hidden" name="_method" value="DELETE">
   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</button>
</form></td>
</tr>
@endforeach
</table>

{{ $articles->links() }}

</div>
@endsection
