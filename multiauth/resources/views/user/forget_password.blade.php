<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @include('user.top')
    <h2>Forgot Password</h2>
    @if($errors->any())
    @foreach($error->all() as $error)
    <div style="color:red">{{$error}}</div>
    @endforeach
    @endif

    @if(session('success'))
    {{session('success')}}
    @endif
    @if(session('error'))
    {{session('error')}}
    @endif

    <form action="{{route('forget_password_submit')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Email"/>
                </td>
            </tr>
                <td></td>
                <td>
                    <button type="submit">Submit</button>
                    <div>
                        <a href="{{route('login')}}">Back to Login Page</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>