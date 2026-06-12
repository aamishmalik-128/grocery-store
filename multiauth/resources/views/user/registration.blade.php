<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
@include('user.top')

    <h2>Register Now</h2>


    @if($errors->any())
      @foreach($errors->all() as $error)
       {{$error}}
       @endforeach
    @endif

    @if(session('success'))
    {{session('success')}}
    @endif

    @if(session('error'))
    {{session('error')}}
    @endif



    
    <form action="{{route('registration_submit')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" placeholder="Name"/>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Email"/>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Password"/>
                </td>
            </tr>
            <tr>
                <td>Confirmm Password:</td>
                <td>
                    <input type="password" name="confirm_password" placeholder="Confirm Password"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Submit</button>
                    
                </td>
            </tr>
        </table>
    </form>
</body>
</html>