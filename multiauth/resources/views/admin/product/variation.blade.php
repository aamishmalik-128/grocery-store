@extends('admin.layouts.homemaster')

@section('page_main_content')


    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1> Product Variation for {{$product->name}}</h1>
                <div class="ml-auto">
                    <a href="{{route('admin_product_index')}}" class="btn btn-primary"> All Products</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_product_variation_store',[$product->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        

                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="name">Label</label>
                                            <input type="text" name="label"  class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-6 mb-3">
                                            <label for="slug">Sales Price</label>
                                            <input type="text" name="sales_price"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-4 mb-3">
                                            <label for="slug">regular Price</label>
                                            <input type="text" name="regular_price"  class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4 mb-3">
                                            <label for="phone">Stock</label>
                                            <input type="text" name="stock" class="form-control"> </input>
                                        </div>
                                        <div class="form-group col-lg-4 mb-3">
                                            <label for="phone">Sort Order</label>
                                            <input type="integer" name="sort_order" class="form-control"> </input>
                                        </div>

                                    </div>

                                    



                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Label</th>
                                            <th>Sales Price</th>
                                            <th>Regular Price</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($product_variations as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->label}}</td>
                                            <td>$ {{$item->sale_price}}</td>
                                            <td>$ {{$item->regular_price}}</td>
                                            <td>{{$item->stock}}</td>
                                            <td>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modal_{{$loop->iteration}}" class="btn btn-warning btn-sm"  >
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{route('admin_product_variation_delete',$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" >
                                                <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal_{{$loop->iteration}}" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{route('admin_product_variation_update',$item->id)}}" method="POST">
                                                                @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <div class="col-md-4"><label class="form-label">Label</label></div>
                                                                        <input class="form controll" name="label" value={{$item->label}}></input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="col-md-4"><label class="form-label">Sales Price</label></div>
                                                                        <input class="form controll" name="sales_price" value={{$item->sale_price}}></input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="col-md-4"><label class="form-label">Regular Price</label></div>
                                                                        <input class="form controll" name="regular_price" value={{$item->regular_price}}></input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="col-md-4"><label class="form-label">Stock</label></div>
                                                                        <input class="form controll" name="stock" value={{$item->stock}}></input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="col-md-4"><label class="form-label">Stock</label></div>
                                                                        <input class="form controll" name="sort_order" value={{$item->sort_order}}></input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>

                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

