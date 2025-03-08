@extends('Common.layouts.default')
@section('section')

    <style>
        /* Slider container */
        .slider {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }

        /* Slide container */
        .slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        /* Individual slide */
        .slide {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Navigation buttons */
        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            z-index: 1;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        /* Dot navigation (optional) */
        .dot-container {
            text-align: center;
            padding: 10px;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

    </style>

    <section id="featured-products" class="product-store">
        <div class="container-md">
            <div class="slider">
                <!-- Slides container -->
                <div class="slides">
                    <div class="slide"><img src="{{ asset('Common/images/card-image1.jpg') }}" alt="Slide 1"></div>
                    <div class="slide"><img src="{{ asset('Common/images/card-image1.jpg') }}" alt="Slide 2"></div>
                    <div class="slide"><img src="{{ asset('Common/images/card-image1.jpg') }}" alt="Slide 3"></div>
                </div>
                <!-- Navigation arrows -->
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
            <!-- Dot navigation (optional) -->
            <div class="dot-container">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
    <section id="featured-products" class="product-store">
        <div class="container-md">
            <div class="display-header d-flex align-items-center justify-content-between">
                <h2 class="section-title text-uppercase">Featured Products</h2>
                <div class="btn-right">
                    <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                </div>
            </div>
            <div class="product-content padding-small">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                    <div class="col mb-4">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="latest-products" class="product-store py-2 my-2 py-md-5 my-md-5 pt-0">
        <div class="container-md">
            <div class="display-header d-flex align-items-center justify-content-between">
                <h2 class="section-title text-uppercase">Latest Products</h2>
                <div class="btn-right">
                    <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                </div>
            </div>
            <div class="product-content padding-small">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                    <div class="col mb-4 mb-3">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-3">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-3">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-3">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 mb-3">
                        <div class="product-card position-relative">
                            <div class="card-img">
                                <img src="{{ asset('Common/images/card-image1.jpg') }}" alt="product-item"
                                    class="product-image img-fluid">
                                <div class="cart-concern position-absolute d-flex justify-content-center">
                                    <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                            data-bs-target="#modallong">
                                            <svg class="shopping-carriage">
                                                <use xlink:href="#shopping-carriage"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-target="#modaltoggle"
                                            data-bs-toggle="modal">
                                            <svg class="quick-view">
                                                <use xlink:href="#quick-view"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- cart-concern -->
                            </div>
                            <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                                <h3 class="card-title fs-6 fw-normal m-0">
                                    <a href="index.html">Running shoes for men</a>
                                </h3>
                                <span class="card-price fw-bold">$99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        const updateSlider = () => {
            // Move the slides container to show the current slide
            document.querySelector('.slides').style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update dot styles
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        };

        // Next slide function
        const nextSlide = () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        };

        // Previous slide function
        const prevSlide = () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        };

        // Navigation button events
        document.querySelector('.next').addEventListener('click', nextSlide);
        document.querySelector('.prev').addEventListener('click', prevSlide);

        // Dot navigation event
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateSlider();
            });
        });

        // Auto-slide every 3 seconds
        setInterval(nextSlide, 3000);

        // Initialize the slider
        updateSlider();
    </script>
@stop
