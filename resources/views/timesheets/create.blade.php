<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Create Timesheet</h1>
    <form action="{{ route('timesheet.store') }}" method="POST">
        @csrf
        <div>
            <label for="project_id">Project:</label>
            <select name="project_id" id="project_id" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="task_name">Task Name:</label>
            <input type="text" id="task_name" name="task_name" required>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="hours">Hours:</label>
            <input type="number" id="hours" name="hours" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>