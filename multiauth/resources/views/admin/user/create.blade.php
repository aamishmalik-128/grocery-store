@extends('admin.layouts.homemaster')

@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Create User</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_user_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_user_store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="photo">Photo</label>
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="country">Country</label>
                                            <input type="text" name="country" id="country" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="city">City</label>
                                            <input type="text" name="city" id="city" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="state">State</label>
                                            <input type="text" name="state" id="state" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="zip">Zip</label>
                                            <input type="text" name="zip" id="zip" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="0">Pending</option>
                                                <option value="1">Active</option>
                                                <option value="2">Suspend</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
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

@endsection