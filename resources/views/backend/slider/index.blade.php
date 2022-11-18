<!-- //Add New Slide -->

<!-- @foreach($sliders as $slider)
{{$slider->title}} 

@endforeach -->
<!-- <a href="{{route('slides.create')}}">Add New Slide</a>


<div style="margin-top:30px;">

@foreach($sliders as $slider)

    <img src="{{url('images')}}/{{$slider->photo}}" alt="{{$slider->title}}" width="250" height="150">

<a href="{{ route('slides.edit', $slider->id) }}" class="btn btn-block btn-info">Edit</a>


{!! Form::open(['method' => 'DELETE', 'route' => ['slides.destroy', $slider->id] ]) !!}
  <button class="btn btn-block btn-danger" type="submit">Delete</button>
{!! Form::close() !!}

<br>

@endforeach
</div> -->

@extends('backend.layouts.master')

@section('title', 'View Posts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/slider/create') }}" class="btn btn-primary mb-3 float-right">
                <i class="fa fa-plus-circle mr-1"></i>
                Create New slider
            </a>
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
                        <th>Photo</th>
                        
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ asset('images/blogimg/' . $slider->photo) }}" style="width: 100px;"></td>
                        <td>{{ $post->created_at->format('d - m - Y') }}
                        <td>
                            <a href="{{ url("admin/slider/$slider->id/edit") }}" class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ url("admin/slider/$slider->id/delete") }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $posts->links() }}
    </div>
</div>

@endsection