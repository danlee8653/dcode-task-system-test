
@extends('layouts.main')

@section('title', 'Create Task')

@section('content')
    <h1>Create Task</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form id="task-form" method="post" action="{{ route('tasks.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" rows="4" cols="50" name="description" form="task-form">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="text" name="due_date" class="form-control" id="due_date" placeholder="Enter Due Date" value={{ old('due_date') }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection