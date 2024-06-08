<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Project Details</h1>
    <p><strong>Project ID:</strong> {{ $project->id }}</p>
    <p><strong>Name:</strong> {{ $project->name }}</p>
    <p><strong>Department:</strong> {{ $project->department }}</p>
    <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
    <p><strong>End Date:</strong> {{ $project->end_date }}</p>
    <p><strong>Status:</strong> {{ $project->status }}</p>
    <a href="{{ route('project.index') }}">View all Projects</a>
    <br>
    <a href="{{ route('home.index') }}">Homepage</a>
</body>
</html>