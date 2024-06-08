<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User</h1>
    <a href="{{ route('user.create') }}">Create User</a>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Details</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>
                    <a href="{{route('user.edit', ['user'=> $user])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('user.delete', ['user'=> $user])}}">
                        @csrf
                        @method("post")
                        <input type="submit" value="Delete">
                    </form>
                    
                </td>
                <td>
                <form action="{{route('user.details', ['user'=> $user->id])}}">
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
    <form method="GET" action="{{ route('user.index') }}">
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ request('first_name') }}">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="{{ request('gender') }}">
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ request('date_of_birth') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{ request('email') }}">
        </div>
        <button type="submit">Filter</button>
    </form>
    </div>
</body>
</html>