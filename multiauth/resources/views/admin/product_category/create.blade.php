@extends('admin.layouts.homemaster')

@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Create User</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_product_category_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_product_category_store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Show on Home</label>
                                            <Select  name="show_on_home"  class="form-select" >
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
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