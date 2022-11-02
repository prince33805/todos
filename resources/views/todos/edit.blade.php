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
        <h3 class="text-2xl ">Edit Id : {{$todo->id}}</h3>
    </div>

    <form method="post" action="{{ url('update', $todo->id) }}" class="">
        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"  value="{{ $todo->title }}"/>
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description" >{{$todo->description}}</textarea>
        </div>

        <div class="py-1" >
            <input type="button" onclick="history.back();" value="Back" class="p-2 border rounded bg-secondary text-white" />
            <input type="submit" value="Update" class="p-2 border rounded bg-success text-white" />
        </div>
    </form>

</body>

</html>
