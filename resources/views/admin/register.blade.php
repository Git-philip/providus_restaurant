<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/auth.css')}}">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Register</title>
</head>

<body>
    <div class="form">
        <div class="form-icon">
            <img src="{{asset('img/user.jpeg')}}" alt="">
        </div>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="confirm-password" placeholder="Confirm password" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn form-control">
            </div>
            <div class="form-group d-flex justify-content-end">
                <a href="{{'/admin/login'}}">Already have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>