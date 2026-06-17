@extends('admin.layouts.homemaster')

@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Create Product</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_product_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_product_store')}}" method="POST" enctype="multipart/form-data">
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
                                            <label for="slug">Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control" required>
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="product_category">Category</label>
                                            <select name="product_category"  class="form-select">
                                                @foreach($product_categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="show_on_home">Show On Home</label>
                                            <select name="show_on_home"  class="form-select">
                                              
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="phone">Description</label>
                                            <textarea type="text" name="description " row='6' class="form-control editor h_100 "></textArea>
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="short_description">Short Description</label>
                                            <textarea type="text" name="short_description" row='4' class="form-control h_100"></textArea>
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