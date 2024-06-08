<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('user.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>First Name: </label>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div>
            <label>Last Name: </label>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>
        <div>
            <label>Date of Birth: </label>
            <input type="date" name="date_of_birth" placeholder="Date of Birth">
        </div>
        <div>
            <label>Gender: </label>
            <input type="text" name="gender" placeholder="Gender">
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div>
            <label>Password: </label>
            <input type="text"name="password" placeholder="Password">
        </div>
        <div>
            <input type="submit" value="Save a new User">
        </div>
    </form>
</body>
</html>