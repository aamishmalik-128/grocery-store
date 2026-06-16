@extends('admin.layouts.loginmaster')
@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Profile</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('profile_submit') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            @if (Auth::guard('web')->user()->photo == null)
                                                <img src="{{ asset('uploads/default.png') }}"
                                                    class="profile-photo w_100_p">
                                            @else
                                                <img src="{{ asset('uploads/' . Auth::guard('web')->user()->photo) }}"
                                                    class="profile-photo w_100_p">
                                            @endif
                                            <input type="file" name='photo' class="mt_10" name="photo">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="mb-4">
                                                <label class="form-label">Name *</label>
                                                <input type="text" class="form-control" name="name" value="{{Auth::guard('users')->user()->name}}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Email *</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{Auth::guard('web')->user()->email}}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Retype Password</label>
                                                <input type="password" class="form-control" name="confirm_password">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label"></label>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
    </div>
@endsection















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
@include('user.top')

    <h2>Profile Page</h2>


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



    
    <form action="{{route('profile_submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Existing Photo</td>
                <td>
                    @if(Auth::guard('web')->user()->photo ==null)
                     No photo Found
                    @else
                    <img src="{{asset('uploads/'.Auth::guard('web')->user()->photo)}}" style="width:100px; height:auto" >
                    @endif
                </td>
            </tr>
            <tr>
                <td>Change Photo</td>
                <td>
                    <input type="file" name="photo"/>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" placeholder="Name" value="{{Auth::guard('web')->user()->name}}"/>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" placeholder="Email" value="{{Auth::guard('web')->user()->email}}"/>
                </td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>
                    <input type="text" name="phone"  value="{{Auth::guard('web')->user()->phone}}"/>
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address"  value="{{Auth::guard('web')->user()->address}}"/>
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <input type="text" name="country" placeholder="Country" value="{{Auth::guard('web')->user()->country}}"/>
                </td>
            </tr>
            <tr>
                <td>State:</td>
                <td>
                    <input type="text" name="state" placeholder="state" value="{{Auth::guard('web')->user()->state}}"/>
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <input type="text" name="city" placeholder="city" value="{{Auth::guard('web')->user()->city}}"/>
                </td>
            </tr>
            <tr>
                <td>Zip:</td>
                <td>
                    <input type="text" name="zip" placeholder="Zip" value="{{Auth::guard('web')->user()->zip}}"/>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Password" />
                </td>
            </tr>
             <tr>
                <td>Confirm Password:</td>
                <td>
                    <input type="password" name="confirm_password" placeholder="Password" />
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <button type="submit">Update Data</button>
                    
                </td>
            </tr>
        </table>
    </form>
</body>
</html> --}}