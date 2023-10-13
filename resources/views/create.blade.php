<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>
<body>
    <h1>Create Task</h1>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="3" required></textarea>
        <br>
        <button type="submit">Create Task</button>
    </form>

</body>
</html>