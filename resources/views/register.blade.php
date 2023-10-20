<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SmartApps Registration Form</title>
</head>

<body>
    <p>Smart Apps Registration Form</p>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">
        </div>
        <div>
            <label for="profile_image">Upload Profile Image</label>
            <input type="file" name="profile_img">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>

</body>

</html>
