@extends('layouts.app')

@section('page-content')
<section id="contact" class="account">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">

    <div class="background-wrapper">

        <img class="body-left-element" src="assets/images/body-left-element.png">

        <img class="body-right-element" src="assets/images/figure2.png">

        <div class="container">

            <div class="main-box-shadow bg-white account-reviews-main-block">

                <div class="account-reviews-header">

                    <img class="account-header-back prh-back img-fluid w-100" src="assets/images/starbucks-back.png">

                    <div class="prh-content d-flex justify-content-between flex-column flex-lg-row align-items-center">

                        <div class="arh-avatar d-flex flex-column flex-sm-row align-items-center align-items-sm-start">

                            <img src="assets/images/starbucks.png" alt="`" title="" class="mr-0 mr-sm-3 align-self-center">

                            <div class="single-place-h-card">

                                <div class="d-flex">

                                    <h5 class="mb-2 mr-3"><strong>Starbucks Ltd</strong></h5>

                                    <p class="f-12 mb-2 align-self-end">United States</p>

                                </div>

                                <div class="d-flex input-block flex-row mb-0 justify-content-between">

                                    <form action="#">

                                        <div class="rating">
                                            <label>
                                            <input type="radio" name="stars4" value="1" />
                                            <span class="icon">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="stars4" value="2" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="stars4" value="3" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>   
                                            </label>
                                            <label>
                                            <input type="radio" name="stars4" value="4" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="stars4" value="5" />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            </label>
                                        </div>

                                    </form>

                                    <h4 class=><strong>4.2</strong></h4>

                                </div>

                            </div>

                        </div>

                        <div class="arh-details account-numbers">

                            <button class="arh-img-btn"><i class="fa fa-camera"></i></button>

                        </div>

                    </div>

                </div>

                <div class="account-reviews-body row mx-0">

                    <div class="row mx-0">

                        <div class="col-md-7 mb-5">

                            <div class="single-review-reviews-card main-box-shadow d-flex flex-column bg-white py-3 px-4 bg-light">

                                <div class="d-flex align-self-start mb-3">

                                    <h3 class="w-100 theme-txt-color text-bold mr-4">

                                        Reviews

                                    </h3>

                                    <p class="f-15 w-100 mb-0 align-self-center">1240 reviews</p>

                                </div>

                                <form action="#" class="mb-3">

                                    <input type="radio" id="excellent" name="reviewsaverage" value="excellent">
                                    <label for="excellent" class="f-15">Excellent</label><br>
                                    <input type="radio" id="great" name="reviewsaverage" value="great">
                                    <label for="great" class="f-15">Great</label><br>
                                    <input type="radio" id="average" name="reviewsaverage" value="average">
                                    <label for="average" class="f-15">Average</label><br>
                                    <input type="radio" id="poor" name="reviewsaverage" value="poor">
                                    <label for="poor" class="f-15">Poor</label><br>
                                    <input type="radio" id="bad" name="reviewsaverage" value="bad">
                                    <label for="bad" class="f-15">Bad</label><br>

                                </form>

                            </div>

                        </div>

                        <div class="col-md-5 single-honest-review mb-5 h-100">

                            <div class="main-box-shadow input-block p-4 mb-0">

                                <h5 class="mb-4 text-center"><strong>Would you like to learn about 
                                    your reviewers?</strong></h5>

                                <p class="f-15 mb-3 text-center mb-5">We can generate a user report that will reflect your audience and give you valuable insights.
                                </p>

                                <button class="reverse-style-submit">Learn more</button>

                            </div>

                        </div>

                    </div>

                    <div class="row mx-0">

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="main-box-shadow single-place-review-card bg-white">

                                <div class="single-h d-flex flex-column flex-sm-row">

                                    <img src="assets/images/profile1.png" alt="`" title="" class="mr-3">

                                    <div class="d-flex flex-column align-self-sm-center">

                                        <h5 class="card-title w-100 mb-0"><strong>Richard Gellen</strong></h5>

                                        <div class="w-100 text-left d-flex">

                                            <p class="f-15 mb-md-0 mr-3"><i class="fa fa-map-marker-alt theme-blue-color"></i> US</p>

                                            <p class="f-15 mb-md-0 ml-2"><i class="fa fa-thumbs-up theme-blue-color"></i> 8 reviews</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="s-body">

                                    <div class="d-flex flex-column flex-sm-row justify-content-between">

                                        <div class="card-rating d-flex justify-content-start">

                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>

                                        </div>

                                        <p class="f-15">

                                            8hours

                                        </p>

                                    </div>

                                    <h5 class="font-weight-normal">Excellent communication </h5>

                                    <p class="f-15 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo….
                                    </p>


                                </div>

                                <div class="s-footer d-flex justify-content-between">

                                    <button><i class="fa fa-thumbs-up theme-blue-color"></i></button>

                                    <button class="f-15"><i class="fa fa-share-alt mr-2 theme-blue-color"></i>Share</button>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>

</section>
@endsection