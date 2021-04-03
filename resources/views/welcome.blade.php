@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h2 class="text-center my-5">List Article's</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        @if(!empty($data) && count($data)>0)
            @foreach($data as $d)
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://image.freepik.com/free-vector/content-author-writer-job-concept_74855-7064.jpg" alt="{{$d->title}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$d->title}}</h4>
                        <p class="card-text">{{$d->body}}... <a href="#" class="card-link">Read more</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        @else 
            <span>Article is empty! <a href="{{route('create')}}" class="card-link">Create an Article</a></span>
        @endif
    </div>
</div>
@endsection
