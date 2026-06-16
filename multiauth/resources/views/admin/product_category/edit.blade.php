@extends('admin.layouts.homemaster')

@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Edit User</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_product_category_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_product_category_update',$product_categories->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{$product_categories->name}}">
                                        </div>
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Show on Home</label>
                                            <Select  name="show_on_home"  class="form-select" >
                                                <option value="1" {{$product_categories->show_on_home == 1 ? 'selected': ''}}>Yes</option>
                                                <option value="0" {{$product_categories->show_on_home == 0 ? 'selected': ''}}>No</option>
                                            </Select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
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