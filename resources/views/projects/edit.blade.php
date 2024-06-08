<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Project</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ route('project.update', ['project'=>$project]) }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $project->name }}" required>
        </div>
        <div>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="{{ $project->department }}" required>
        </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ $project->start_date }}" required>
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ $project->end_date }}" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ $project->status }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>