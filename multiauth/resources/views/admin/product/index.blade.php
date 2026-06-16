@extends('admin.layouts.homemaster')
@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between align-items-center">
                <h1>Products</h1>
                <div class="ml-auto">
                        <a href="{{route('admin_product_create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Add Products</a>
                    </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm" id='example1'>
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                @if($product->photo != '')
                                                <img src="{{asset('uploads/'.$product->photo)}}" width="150px"/>
                                                @else
                                                <img src="{{asset('uploads/default.png')}}" width="150px"/>
                                                @endif
                                            </td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->slug}}</td>
                                            <td>{{$product->category->name ?? 'N/A' }}</td>
                                            <td>
                                                <a href="{{route('admin_product_edit',$product->id)}}" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                                                <a href="{{route('admin_product_delete',$product->id)}}" class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure?')"> <i class="fas fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
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




