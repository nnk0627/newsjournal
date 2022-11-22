@extends('backend.layouts.master')

@section('title', 'View Site')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/site/create')}}" class="btn btn-primary float-right mb-3"><i class="fa fa-plus-circle mr-1"></i>Create New Logo&Name</a>
        </div> 
    </div>        
    <div class="row justify-content-center">
        <div class="col-12">
             @include('alerts')
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Created at</th>
                        <th>Actions</th>                
                    </tr>
               </thead>
                <tbody>
                    @foreach($sites as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->image}}
                            <img src="{{ asset('images/' . $item->image) }}" style="width: 100px;" alt="Logo Image">
                        </td>
                      
                        <td>{{ $item->created_at->format('d - m - Y') }}
                        <td>
                            <a href="{{ url("admin/site/$item->id/edit") }}" class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/site/$item->id/delete") }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection