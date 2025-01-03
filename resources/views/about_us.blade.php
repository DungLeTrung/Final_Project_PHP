@extends('layouts.main')

@section('title', 'About Us')

@section('content')

<div class="banner-about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 text-overlay-home-page">
                <h2>About Us</h2>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid row w-100">
        <div class="container flex flex-col col-12 my-5">
            <div class="travel-component-about-us container d-flex flex-column align-items-center py-5 col-md-10">
                <div class="row w-100 justify-content-center">
                    <!-- Phần ảnh, chỉ hiển thị trên màn hình md trở lên -->
                    <div class="images-section col-md-7 d-none d-md-block position-relative">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/home_page_1.jpg') }}" alt="Desert" class=" main-image-about-us">
                            <img src="{{ asset('images/home_page_2.png') }}" alt="Mountains" class=" sub-image-about-us">
                        </div>
                    </div>

                    <!-- Phần text -->
                    <div class="text-section-about-us col-md-5 text-center">
                        <h2>With <span class="highlight-about-us">NgaoduVietnam</span>, immerses you in majestic space and unique
                            cultural features</h2>
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus
                                donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        </div>
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container flex flex-col col-12 my-5">
            <div class="travel-component-about-us container d-flex flex-column align-items-center py-5 col-md-10">
                <div class="row w-100 justify-content-center">
                    <div class="text-section-about-us col-md-7 text-center">
                        <h2>With <span class="highlight-about-us">NgaoduVietnam</span>, immerses you in majestic space and unique
                            cultural features</h2>
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus
                                donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        </div>
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                        </div>
                    </div>
                    <div class="images-section-about-us col-md-5 d-none d-md-block">
                        <div class="image-responsive-about-us">
                            <img src="{{ asset('images/home_page_3.png') }}" alt="Mountains" class="img-fluid full-width-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container flex flex-col col-12 my-5">
            <div class="travel-component-about-us container d-flex flex-column align-items-center py-5 col-md-10">
                <div class="row w-100">
                    <div class="images-section-about-us d-flex col-12 justify-content-center">
                        <img src="{{ asset('images/about_us_1.jpg') }}" alt="Mountains" class="img-fluid full-width-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="container flex flex-col col-12 my-5">
            <div class="travel-component-about-us container d-flex flex-column align-items-center py-5 col-md-10">
                <div class="row w-100">
                    <div class="text-section-about-us col-md-7">
                        <h2>Experience the traditional cultural beauties of Vietnam</h2>
                    </div>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="text-section-about-us col-md-6 text-center">
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus
                                donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        </div>
                        <div class="images-section-about-us col-md-12 d-none d-md-block">
                            <div class="image-responsive-about-us">
                                <img src="{{ asset('images/about_us_2.jpg') }}" alt="Mountains" class="img-fluid full-width-img">
                            </div>
                        </div>
                    </div>
                    <div class="text-section-about-us col-md-6 text-center">
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus
                                donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        </div>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="quote-section-about-us mt-3 d-flex justify-content-center">
                            <div class="quote-icon-about-us me-3">
                                <span>❝</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes.</p>
                        </div>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="images-section-about-us col-md-12 d-none d-md-block">
                            <img src="{{ asset('images/about_us_3.jpg') }}" alt="Mountains" class="img-fluid full-width-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection
