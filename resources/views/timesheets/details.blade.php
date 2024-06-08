<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Timesheet Details</h1>
    <p><strong>Timesheet ID:</strong> {{ $timesheet->id }}</p>
    <p><strong>Task Name:</strong> {{ $timesheet->task_name }}</p>
    <p><strong>Date:</strong> {{ $timesheet->date }}</p>
    <p><strong>Hours:</strong> {{ $timesheet->hours }}</p>
    <p><strong>Project ID:</strong> {{ $timesheet->project_id }}</p>
    <p><strong>User ID:</strong> {{ $timesheet->user_id }}</p>
    <a href="{{ route('timesheet.index') }}">View all Timesheets</a>
    <br>
    <a href="{{ route('home.index') }}">Homepage</a>
</body>
</html>