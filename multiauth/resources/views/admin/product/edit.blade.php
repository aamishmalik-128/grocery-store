@extends('admin.layouts.homemaster')

@section('page_main_content')



    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Edit Product</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_product_index')}}" class="btn btn-primary"><i class="fas fa-eye"></i> All Items</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-3">
                                <form action="{{route('admin_product_update',$products->id)}}" method="POST" enctype="multipart/form-data" class="compact-form">
                                    @csrf

                                    <div class="row g-2">
                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="photo">Existing Photo</label>
                                            <div>
                                                @if($products->photo != '')
                                                <img src="{{asset('uploads/'.$products->photo)}}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 4px;">
                                                @else
                                                <img src="{{asset('uploads/default.png')}}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 4px;">
                                                @endif
                                            </div>
                                            
                                        </div>
                                       <div class="form-group col-lg-3 col-md-6 col-12 mb-2">
                                            <label for="photo">Change Photo</label>
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-3 col-md-6 col-12 mb-2 w-50">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required value="{{$products->name}}">
                                        </div>
                                        
                                    
                                    

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="slug">Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control" required>
                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="product_category">Category</label>
                                            <select name="product_category" class="form-select">
                                                @foreach($product_categories as $item)
                                                <option value="{{$item->id}}" {{ $products->product_category == $item->id ? 'selected' : '' }}>
                                                    {{$item->name}}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="description">Description</label>
                                            <textarea type="text" name="description" row='6' class="form-control editor h_100 "></textArea>
                                        </div>
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="show_on_home">Show On Home</label>
                                            <select name="show_on_home" class="form-select">
                                                
                                                <option value="1" {{$products->show_on_home == 1 ?'selected': ''}}>Yes</option>
                                                <option value="0" {{$products->show_on_home == 0 ?'selected': ''}}>No</option>


                                            </select>

                                        </div>

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="short_description">Short Description</label>
                                            <textarea type="text" name="short_description" row='4' class="form-control h_100"></textArea>
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