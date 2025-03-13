@extends('layouts.layout')
@section('content')
<form action="{{ route('courses.store') }}" method="POST">
@csrf  
<div class="card">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">{{ $course->names }}</p>
                    
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <h5 class="card-title">Description</h5>
                    
                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">Edit course</a>
                    <form action="{{ route('course.destroy', $recipe->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete course</button>
                    </form>
                </div>
            </div>

endsection