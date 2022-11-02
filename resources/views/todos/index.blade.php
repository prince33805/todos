<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- <link rel="shortcut icon" href="images/favicon.jpg" type=""> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <style>
        body {
            text-align: center;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <h1 class="py-3">Todo List</h1>
    <div class="flex justify-between border-b py-3">
        <h3 class="text-2xl ">What next you need To-Do</h3>
    </div>

    <form method="post" action="{{ url('store') }}" class="">
        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title" />
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
        </div>

        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded bg-success text-white" />
        </div>
    </form>

    <div class="flex justify-between border-b py-5 ">
        <h3 class="text-2xl">All Your Todos</h3>
        <table class="table table-striped center" style="width: 50%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Complete</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todo as $todo)
                    <tr>
                        <th scope="row">{{ $todo->id }}</th>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        @if ($todo->completed == '1')
                            <td><a class="btn btn-success me-2 " href="{{ url('completed', $todo->id) }}"> Completed
                                @else
                            <td><a class="btn btn-secondary me-2 " href="{{ url('completed', $todo->id) }}"> Not Completed
                        @endif
                        </a></td>
                        <td><a class="btn btn-warning me-2 " href="{{ url('edit', $todo->id) }}">Edit</a></td>
                        <td><a class="btn btn-danger me-2 " href="{{ url('delete', $todo->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
