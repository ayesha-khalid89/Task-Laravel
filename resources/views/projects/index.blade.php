<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projects</h1>
    <a href="{{ route('project.create') }}">Create Project</a>
    <br>
    <a href="{{ route('home.index') }}">Homepage</a>
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->status}}</td>
                <td>
                    <a href="{{route('project.edit', ['project'=> $project])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('project.delete', ['project'=> $project])}}">
                        @csrf
                        @method("post")
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="{{route('project.details', ['project'=> $project->id])}}">
                        @csrf
                        <input type="submit" value="View Details">
                    </form>
                </td>
                <td>
                    <form action="{{ route('project.assign', $project->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Join Project</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div>
    <form method="GET" action="{{ route('project.index') }}">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ request('name') }}">
        </div>
        <div>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="{{ request('department') }}">
        </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}">
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}">
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ request('status') }}">
        </div>
        <button type="submit">Filter</button>
    </form>
    </div>
</body>
</html>