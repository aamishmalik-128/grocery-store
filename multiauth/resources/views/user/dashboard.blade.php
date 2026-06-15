@include('front.home')
<div class="container">
    <h1>Welcome, {{ Auth::guard('web')->user()->name }} to the User Dashboard</h1>
</div>

