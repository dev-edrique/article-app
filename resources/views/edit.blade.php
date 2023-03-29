@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="card border-0 p-3" style="margin:20px;">
  <div class="card-header border-0">Update Article<a style="float:right;" class="btn btn-primary" href="{{ route('home.index') }}">Back</a></div>
  <div class="card-body">
       
      <form action="{{ url('home/' .$articles->id) }}" method="post">
      {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$articles->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" value="{{$articles->title}}" class="form-control"></br>
        <label>Content</label></br>
        <input type="text" name="content" value="{{$articles->content}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success" style="width:100%"></br>
    </form>
    
  </div>
</div>
</div>
@stop