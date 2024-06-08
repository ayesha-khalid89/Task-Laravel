<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('user.update', ['user'=>$user])}}">
        @csrf 
        @method('post')
        <div>
            <label>First Name: </label>
            <input type="text" name="first_name" placeholder="First Name" value="{{$user->first_name}}">
        </div>
        <div>
            <label>Last Name: </label>
            <input type="text" name="last_name" placeholder="Last Name" value="{{$user->last_name}}">
        </div>
        <div>
            <label>Date of Birth: </label>
            <input type="date" name="date_of_birth" placeholder="Date of Birth" value="{{$user->date_of_birth}}">
        </div>
        <div>
            <label>Gender: </label>
            <input type="text" name="gender" placeholder="Gender" value="{{$user->gender}}">
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Email" value="{{$user->email}}">
        </div>
        <div>
            <label>Password: </label>
            <input type="text"name="password" placeholder="Password" value="{{$user->password}}">
        </div>
        <div>
            <input type="submit" value="Update User">
        </div>
    </form>
</body>
</html>