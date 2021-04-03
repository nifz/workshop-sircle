@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Article</div>
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <textarea name="body" class="form-control" rows="4" placeholder="Body">{{$data->body}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
