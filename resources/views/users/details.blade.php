<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Details</h1>
    <p><strong>User ID:</strong> {{ $user->id }}</p>
    <p><strong>First Name:</strong> {{ $user->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $user->last_name }}</p>
    <p><strong>Date of Birth:</strong> {{ $user->date_of_birth }}</p>
    <p><strong>Gender:</strong> {{ $user->gender }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Password:</strong> {{ $user->password }}</p>
    <a href="{{ route('user.index') }}">View all User</a>
    <br>
    <a href="{{ route('home.index') }}">Homepage</a>
</body>
</html>