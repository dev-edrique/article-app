@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                Write an Article
                <a href="{{ route('home.create') }}" style="float:right;" class="btn btn-success btn-sm" title="Add New Article">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
 
                        @foreach($articles as $item)
                        <div class="card">
                            <h5 class="card-header">Article {{ $item->id }}
                                <div style="float: right;">
                                    <a href="{{ route('home.edit' , $item->id) }}" title="Edit Article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/articles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Article" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form></h5>
                                </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->content }}</p>
                                <a href="{{ route('home.show' , $item->id) }}" title="View Article"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                
                            </div>
                        </div>
                        @endforeach

                        {{ $articles->onEachSide(1)->links(); }}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
