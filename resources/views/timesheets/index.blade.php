<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Timesheets</h1>
    <a href="{{ route('timesheet.create') }}">Create Timesheet</a>
    <br>
    <a href="{{ route('home.index') }}">Homepage</a>
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Details</th>
            </tr>
            @foreach ($timesheets as $timesheet)
            <tr>
                <td>{{$timesheet->id}}</td>
                <td>{{$timesheet->task_name}}</td>
                <td>
                    <a href="{{route('timesheet.edit', ['timesheet'=> $timesheet])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('timesheet.delete', ['timesheet'=> $timesheet])}}">
                        @csrf
                        @method("post")
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="{{route('timesheet.details', ['timesheet'=> $timesheet->id])}}">
                        @csrf
                        <input type="submit" value="View Details">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div>
    <form method="GET" action="{{ route('timesheet.index') }}">
        <div>
            <label for="task_name">Task Name:</label>
            <input type="text" id="task_name" name="task_name" value="{{ request('task_name') }}">
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="{{ request('date') }}">
        </div>
        <div>
            <label for="hours">Hours:</label>
            <input type="number" id="hours" name="hours" value="{{ request('hours') }}">
        </div>
        <button type="submit">Filter</button>
    </form>
    </div>
</body>
</html>