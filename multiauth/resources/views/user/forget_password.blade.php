@extends('admin.layouts.loginmaster')

@section('page_main_content')


        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Reset Password</h4>
                            </div>
                            <div class="card-body card-body-auth">
                                <form method="POST" action="{{route('forget_password_submit')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg w_100_p">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <a href="{{route('login')}}">
                                                Back to login page
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection


    {{-- <h2>Forget Password</h2>
    
    <form action="{{route('admin_forget_password_submit')}}" method="post">
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
                        <a href="{{route('admin_login')}}">Back to Login Page</a>
                    </div>
                </td>
            </tr>
        </table>
    </form> --}}





{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    @extends('admin.layouts.master')
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
</html> --}}