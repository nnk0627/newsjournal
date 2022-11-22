@extends('backend.layouts.master')

@section('title', 'View Sliders')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/slider/create')}}" class="btn btn-primary float-right mb-3"><i class="fa fa-plus-circle mr-1"></i>Create New Slider</a>
        </div> 
    </div>        
    <div class="row justify-content-center">
        <div class="col-12">
             @include('alerts')
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Heading</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Actions</th>                
                    </tr>
               </thead>
                <tbody>
                    @foreach($slider as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->heading }}</td>
                        <td>{{ $item->image}}
                            <img src="{{ asset('images/' . $item->image) }}" style="width: 100px;" alt="Slider Image">
                        </td>
                       <td>
                             @if ($item->status == '1')
                                hidden
                            @else
                                visible
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d - m - Y') }}
                        <td>
                            <a href="{{ url("admin/slider/$item->id/edit") }}" class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/slider/$item->id/delete") }}" class="btn btn-danger btn-sm">
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