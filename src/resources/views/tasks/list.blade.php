
@extends('layouts.main')

@section('title', 'Task List')

@section('content')
    <h1>Task List11234</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Due Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks->collection as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->title }} </td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td><a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-warning btn-lg active" role="button">Edit</a></td>
                    <td>
                        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg active">Delete</button>
                        </form>
                    </td>
                    <!-- <td><a href="{{ route('tasks.destroy', ['task' => $task->id]) }}" class="btn btn-danger btn-lg active" role="button">Delete</a></td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/tasks/create') }}" class="btn btn-success btn-lg active" role="button">Add Task</a>
@endsection