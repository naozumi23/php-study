<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <!-- CSSファイルのリンクタグを生成 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                <form action = "{{ route('tasks.complete', $task->id) }}" method = "post">
                    @csrf
                    <button type = "submit">Complete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <h2>Add a task</h2>
    <form action = "{{ route('tasks.add') }}" method = "post">
        @csrf
        <input type = "text" name = "title" placeholder = "Title">
        <input type = "text" name = "description" placeholder = "Description">
        <button type = "submit">Add</button>
</body>
</html>