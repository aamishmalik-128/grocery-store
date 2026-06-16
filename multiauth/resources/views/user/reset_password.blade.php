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
                                <form method="POST" action="{{ route('reset_password_submit', [$token, $email]) }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Re-Type Password" value="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg w_100_p">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
   

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password</title>
</head>
<body>
    @include('user.top')
    <h2>Reset password</h2>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">{{$error}}</div>
    @endforeach
    @endif

    @if(session('success'))
    {{session('success')}}
    @endif
    @if(session('error'))
    {{session('error')}}
    @endif

    <form action="{{ route('reset_password_submit', [$token, $email]) }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Password"/>
                </td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
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
</html> --}}