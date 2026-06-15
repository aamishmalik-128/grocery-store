@extends('admin.layouts.master')
@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Register Profile</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('registration_submit') }}" method="post"
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




