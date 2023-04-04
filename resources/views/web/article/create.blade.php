@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row mt-5">
      <div class="col">
      <div class="card" style="margin:20px;">
         <div class="card-header">Create New Articles</div>
            <div class="card-body">

                  <form action="{{ url('web/article/home') }}" method="post">
                  {!! csrf_field() !!}
                  <label>Title</label></br>
                  <input type="text" name="title"  class="form-control"></br>
                  <label>Content</label></br>
                  <input type="text" name="content" class="form-control"></br>
                  <input type="submit" value="Save" class="btn btn-success"></br>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>
@stop
