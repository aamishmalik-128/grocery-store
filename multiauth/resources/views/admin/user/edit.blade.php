@extends('admin.layouts.homemaster')

@section('page_main_content')



    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Edit User</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_user_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-3">
                                <form action="{{route('admin_user_update',$user->id)}}" method="POST" enctype="multipart/form-data" class="compact-form">
                                    @csrf

                                    <div class="row g-2">
                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="photo">Existing Photo</label>
                                            <div>
                                                @if($user->photo != '')
                                                <img src="{{asset('uploads/'.$user->photo)}}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 4px;">
                                                @else
                                                <img src="{{asset('uploads/default.png')}}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 4px;">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="photo">Change Photo</label>
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{$user->name}}">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required value="{{$user->email}}">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" required value="{{$user->phone}}">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="country">Country</label>
                                            <input type="text" name="country" id="country" class="form-control" value="{{$user->country}}">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="city">City</label>
                                            <input type="text" name="city" id="city" class="form-control" value="{{$user->city}}">
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="state">State</label>
                                            <input type="text" name="state" id="state" class="form-control" value="{{$user->state}}">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="zip">Zip</label>
                                            <input type="text" name="zip" id="zip" class="form-control" value="{{$user->zip}}">
                                        </div>

                                        

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="0">Pending</option>
                                                <option value="1">Active</option>
                                                <option value="2">Suspend</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .compact-form .form-group label {
            margin-bottom: 0.25rem;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .compact-form .form-control,
        .compact-form .form-select {
            padding: 0.375rem 0.6rem;
            font-size: 0.9rem;
        }
        .compact-form .row.g-2 {
            margin-bottom: 0.25rem;
        }
    </style>

@endsection