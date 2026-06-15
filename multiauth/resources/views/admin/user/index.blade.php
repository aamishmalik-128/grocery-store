@extends('admin.layouts.master')
@section('page_main_content')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between align-items-center">
                <h1>Users</h1>
                <div class="ml-auto">
                        <a href="{{route('admin_user_create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> All Items</a>
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                @if($user->photo != '')
                                                <img src="{{asset('uploads/'.$user->photo)}}" width="50"/>
                                                @else
                                                <img src="{{asset('uploads/default.png')}}" width="50"/>
                                                @endif
                                            </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>
                                                @if($user->status ==0)
                                                <span class='badge bg-success'> Active</span>
                                                @elseif($user->status==1)
                                                <span class='badge bg-danger'>Pending</span>
                                                @else
                                                <span class='badge bg-warning'>Suspended</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin_user_edit',$user->id)}}" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                                                <a href="{{route('admin_user_delete',$user->id)}}" class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure?')"> <i class="fas fa-trash"></i> </a>
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




