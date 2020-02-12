<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0 auto;
            }


            .content {
                width: 1280px;
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Task List</h1>
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
                                <td><a href="/tasks/edit/{{ $task->id }}" class="btn btn-warning btn-lg active" role="button">Edit</a></td>
                                <td><a href="/tasks/delete/{{ $task->id }}" class="btn btn-danger btn-lg active" role="button">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/tasks/create') }}" class="btn btn-success btn-lg active" role="button">Add Task</a>
            </div>
        </div>
    </body>
</html>
