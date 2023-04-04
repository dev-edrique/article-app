@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
<div class="container">
   <div class="row mt-5">
      <div class="col">
         <div class="card" style="margin:20px;">
            <div class="card-header">Article Page
               <a style="float:right;" class="btn btn-primary" href="{{ route('home.index') }}">Back</a>
            </div>
               <div class="card-body">
                     <div class="card-body">
                     <h5 class="card-title">Title : {{ $articles->title }}</h5>
                     <p class="card-text">Content : {{ $articles->content }}</p>
               </div>
               </hr>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection