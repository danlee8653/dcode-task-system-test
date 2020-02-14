
@extends('layouts.main')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form id="task-form" method="post" action="{{ url("/tasks/$task->id") }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ old('title') !== null ? old('title') : $task->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" rows="4" cols="50" name="description" form="task-form">{{ old('description') !== null ? old('description') : $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="text" name="due_date" class="form-control" id="due_date" placeholder="Enter Due Date" value="{{ old('due_date') !== null ? old('due_date') : $task->due_date }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection