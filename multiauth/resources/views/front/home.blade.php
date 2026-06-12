@extends('front.layouts.master')

@section('main_content')

<section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide bg-gradient-1">
                    <div class="container">
                        <div class="row align-items-center py-5">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h1 class="display-3 fw-bold mb-3">Fresh Organic Vegetables</h1>
                                <p class="lead mb-4">Get up to 50% off on fresh organic produce. Delivered to your doorstep!</p>
                                <a href="products.html" class="btn btn-success btn-lg">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('dist-front/images/Bell Pepper.jpg') }}" alt="Fresh Vegetables" class="rounded shadow hero-carousel-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide bg-gradient-1">
                    <div class="container">
                        <div class="row align-items-center py-5">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h1 class="display-3 fw-bold mb-3">Fresh Organic Vegetables</h1>
                                <p class="lead mb-4">Get up to 50% off on fresh organic produce. Delivered to your doorstep!</p>
                                <a href="products.html" class="btn btn-success btn-lg">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('dist-front/images/Green Apple.jpg') }}" alt="Fresh Fruits" class="rounded shadow hero-carousel-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide bg-gradient-1">
                    <div class="container">
                        <div class="row align-items-center py-5">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h1 class="display-3 fw-bold mb-3">Fresh Organic Vegetables</h1>
                                <p class="lead mb-4">Get up to 50% off on fresh organic produce. Delivered to your doorstep!</p>
                                <a href="products.html" class="btn btn-success btn-lg">Shop Now <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('dist-front/images/Orange.jpg') }}" alt="Healthy Products')}}" class="rounded shadow hero-carousel-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="feature-icon bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 avatar-circle-lg">
                        <i class="bi bi-truck text-success fs-2"></i>
                    </div>
                    <h5>Free Shipping</h5>
                    <p class="text-muted">Free delivery on orders over $50</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="feature-icon bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 avatar-circle-lg">
                        <i class="bi bi-clock-history text-success fs-2"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p class="text-muted">Customer support available anytime</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="feature-icon bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 avatar-circle-lg">
                        <i class="bi bi-shield-check text-success fs-2"></i>
                    </div>
                    <h5>Secure Payment</h5>
                    <p class="text-muted">100% secure payment methods</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="feature-icon bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-arrow-repeat text-success fs-2"></i>
                    </div>
                    <h5>Easy Returns</h5>
                    <p class="text-muted">30-day return guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Shop by Categories</h2>
            <p class="text-muted">Browse our top categories</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Fruits</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Vegetables</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Dairy</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Beverages</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Snacks</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center px-3 bg-success rounded-3 h-100 d-flex flex-column align-items-center justify-content-between">
                    <h6 class="text-white fw-bold mb-0">Bakery</h6>
                    <div class="icon">
                        <i class="bi bi-arrow-right text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="featured-products py-5 bg-light" id="deals">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Featured Products</h2>
            <p class="text-muted">Check out our best selling products</p>
        </div>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Green Apple.jpg') }}" alt="Fresh Green Apples" class="img-fluid w-100 h-100">
                            </div>
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-20%</span>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Fruits</p>
                            <h6 class="card-title">Fresh Green Apples</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                                <small class="text-muted ms-2">(4.5)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$4.99</span>
                                    <span class="text-muted text-decoration-line-through small ms-1">$6.99</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Coconuts.jpg') }}" alt="Fresh Coconuts" class="img-fluid w-100 h-100">
                            </div>
                            <span class="badge bg-success position-absolute top-0 end-0 m-2">New</span>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Dairy</p>
                            <h6 class="card-title">Farm Fresh Eggs (12)</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                                <small class="text-muted ms-2">(5.0)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$5.99</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Coconuts.jpg') }}" alt="Fresh Coconuts" class="img-fluid w-100 h-100">
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Fruits</p>
                            <h6 class="card-title">Fresh Coconuts</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                                <small class="text-muted ms-2">(4.0)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$3.49</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Tomato.jpg') }}" alt="Fresh Tomatoes" class="img-fluid w-100 h-100">
                            </div>
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-15%</span>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Vegetables</p>
                            <h6 class="card-title">Fresh Tomatoes</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                                <small class="text-muted ms-2">(4.2)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$2.99</span>
                                    <span class="text-muted text-decoration-line-through small ms-1">$3.49</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Orange.jpg') }}" alt="Fresh Oranges" class="img-fluid w-100 h-100">
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Fruits</p>
                            <h6 class="card-title">Fresh Oranges (6 pack)</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                                <small class="text-muted ms-2">(4.7)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$6.99</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Green Avocados.jpg') }}" alt="Fresh Avocados" class="img-fluid w-100 h-100">
                            </div>
                            <span class="badge bg-success position-absolute top-0 end-0 m-2">Organic</span>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Fruits</p>
                            <h6 class="card-title">Fresh Avocados</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                                <small class="text-muted ms-2">(4.3)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$8.99</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Bell Pepper.jpg') }}" alt="Fresh Bell Peppers" class="img-fluid w-100 h-100">
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Vegetables</p>
                            <h6 class="card-title">Fresh Bell Peppers</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                                <small class="text-muted ms-2">(5.0)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$3.99</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <a href="product-single.html" class="text-decoration-none text-dark">
                        <div class="position-relative">
                            <div class="product-image bg-light d-flex align-items-center justify-content-center overflow-hidden">
                                <img src="{{ asset('dist-front/images/Banana.jpg') }}" alt="Fresh Bananas')}}" class="img-fluid w-100 h-100">
                            </div>
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-30%</span>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-1">Fruits</p>
                            <h6 class="card-title">Fresh Bananas (Bunch)</h6>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                                <small class="text-muted ms-2">(4.6)</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-success fw-bold fs-5">$2.99</span>
                                    <span class="text-muted text-decoration-line-through small ms-1">$4.29</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-success position-absolute bottom-0 end-0 m-2">
                        <i class="bi bi-cart-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection