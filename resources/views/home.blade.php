@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('create')}}" class="btn btn-primary">Create Article</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @if(!empty($data) && count($data)>0)
                                @foreach($data as $d)
                                    <tr>
                                        <td scope="row">{{$no++}}</td>
                                        <td>{{$d->title}}</td>
                                        <td>{{$d->body}}</td>
                                        <td>
                                            <a href="{{route('edit',$d->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{route('delete',$d->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">Tidak ada data</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
