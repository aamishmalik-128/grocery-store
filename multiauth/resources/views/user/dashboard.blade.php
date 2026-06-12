
@include('user.top')

<h2> wellcome {{Auth::guard('web')->user()->name}} to the User Dashboard</h2>
