@extends('layouts.app')
@section('page-content')

<section id="contact" class="account">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">
    
    <div class="background-wrapper">

        <h2 class="text-center"><strong>Leave a review</strong></h2>

        <div class="container h-100 review-box">

            <form action="{{ route('feedback.save') }}" method="post">
                {{ csrf_field() }}
                <div class="review-question-block">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <script>
                                    var message = '{!! session()->get('message') !!}';
                                    toastr['success'](message);
                                </script>
                            </div>
                        @endif
                    <h5 class="review-question">Are you rating a Recruitment Firm or Company internal recruitment team?</h5>

                    <div class="d-flex flex-column flex-md-row justify-content-between">

                        <input type="radio" name="team" value="recruiter" id="recruiter">
                        <label for="recruiter" class="colored-question-button">Recruiter</label>

                        <input type="radio" name="team" id="internalTeam">
                        <label for="internalTeam" value="internalTeam" class="colored-question-button">Company internal team</label>

                    </div>

                </div>

                <div class="review-question-block input-block">

                    <label for="firm">Name of Recruitment Firm:</label>
                    <input type="text" name="firm" id="firm" placeholder="Start typing and pre-populated menu pops up" required>

                </div>

                <div class="review-question-block input-block">

                    <label for="employer">Name of hiring employer:</label>
                    <input type="text" name="employer" id="employer" placeholder="Start typing and pre-populated menu pops up" required>

                </div>

                <div class="review-question-block">

                    <h5 class="review-question">Where you successful or unsuccessful?</h5>

                    <div class="d-flex flex-column flex-md-row justify-content-between">

                        <input type="radio" name="successful" id="unsuccessful">
                        <label for="unsuccessful" class="colored-question-button">Unsuccessful</label>

                        <input type="radio" name="successful" id="successful">
                        <label for="successful" class="colored-question-button">Successful</label>

                    </div>

                </div>

                <div class="review-question-block input-block">

                    <label for="recruitment">First name of recruitment contact?</label>
                    <input type="text" name="recruitment" id="recruitment" placeholder="Free text box" required>

                </div>

                <div class="review-question-block input-block">

                    <label for="regarding">Date of contact regarding this role?</label>
                    <div class="input-icon right">
                        <i class="fa fa-angle-down"></i>
                        <input type="text" name="regarding" data-date="20{{ date('y-m-d') }}" style="height: 44px;" class="date date-picker form-control input-lg" id="regarding" data-date-format="yyyy-mm-dd" required>
                    </div>
                </div>

                <div class="review-question-block input-block">

                    <h5 class="review-question">Overall experience with this Recruiter?</h5>

                    <div class="rating">
                        <label>
                          <input type="radio" name="stars" value="1" />
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="2" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="3" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>   
                        </label>
                        <label>
                          <input type="radio" name="stars" value="4" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="5" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                    </div>

                </div>

                <div class="review-question-block input-block">

                    <label for="recomend">Would you recommend this Recruiter to your family, friends and colleagues?</label>
                    <div class="w-100 d-flex justify-content-between">
                        <span class="pl-1">0</span>
                        <span class="pl-1">1</span>
                        <span class="pl-1">2</span>
                        <span class="pl-1">3</span>
                        <span class="pl-1">4</span>
                        <span class="pl-1">5</span>
                        <span class="pl-1">6</span>
                        <span class="pl-1">7</span>
                        <span class="pl-1">8</span>
                        <span class="pl-1">9</span>
                        <span class="pl-1">10</span>
                    </div>
                    <input type="range" name="recomend" id="recomend" min="0" max="10">
                    <div class="w-100 d-flex justify-content-between">
                        <span class="likely-span">Not likely</span>
                        <span class="likely-span">Very likely</span>
                    </div>
                </div>

                <div class="review-question-block input-block">

                    <label for="recomend1">Would you recommend this Recruiter to your family, friends and colleagues?</label>
                    <div class="w-100 d-flex justify-content-between">
                        <span class=""><img src="assets/images/0.png"></span>
                        <span class=""><img src="assets/images/1.png"></span>
                        <span class=""><img src="assets/images/2.png"></span>
                        <span class=""><img src="assets/images/3.png"></span>
                        <span class=""><img src="assets/images/4.png"></span>
                        <span class=""><img src="assets/images/5.png"></span>
                        <span class=""><img src="assets/images/6.png"></span>
                        <span class=""><img src="assets/images/7.png"></span>
                        <span class=""><img src="assets/images/8.png"></span>
                        <span class=""><img src="assets/images/9.png"></span>
                        <span class=""><img src="assets/images/10.png"></span>
                    </div>
                    <input type="range" name="recomend1" id="recomend1" min="0" max="10">
                    <div class="w-100 d-flex justify-content-between">
                        <span class="likely-span">Not likely</span>
                        <span class="likely-span">Very likely</span>
                    </div>
                </div>

                <div class="review-question-block input-block">

                    <label for="reviewTitle">The title of review</label>
                    <input type="text" name="reviewTitle" id="reviewTitle" placeholder="The title of your review" required>

                </div>

                <div class="review-question-block input-block mb-5">

                    <label for="reviewTitle">Write your review</label>
                    <textarea type="text" name="reviewtext" id="reviewtext" placeholder="This is where you write your review. Explain what happened, and leave out offensive 
                    words. Keep your feedback honest, helpful, and constructive. " required></textarea>

                </div>

                <div class="review-question-block">

                    <h5 class="review-question mb-5">Could you share more about your experience? <u>optional</u></h5>

                    <h5 class="review-question">Candidate Management</h5>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">Quality of the communication with your Recruiter</h5>

                        <div class="rating">
                            <label>
                            <input type="radio" name="stars1" value="1" />
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars1" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars1" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="stars1" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars1" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                        </div>

                    </div>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">Quality of the feedback provided</h5>

                        <div class="rating">
                            <label>
                            <input type="radio" name="stars2" value="1" />
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars2" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars2" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="stars2" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars2" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                        </div>

                    </div>


                </div>

                <div class="review-question-block">

                    <h5 class="review-question">Candidate Service</h5>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">Efficiency of the process</h5>

                        <div class="rating">
                            <label>
                            <input type="radio" name="stars3" value="1" />
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars3" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars3" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="stars3" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars3" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                        </div>

                    </div>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">Quality of information and support provided</h5>

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

                    </div>


                </div>

                <div class="review-question-block">

                    <h5 class="review-question">Candidate Care</h5>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">How valued did you feel throughout the process?</h5>

                        <div class="rating">
                            <label>
                            <input type="radio" name="stars5" value="1" />
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars5" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars5" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="stars5" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars5" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                        </div>

                    </div>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question">How well did you feel you were treated through the process?</h5>

                        <div class="rating">
                            <label>
                            <input type="radio" name="stars6" value="1" />
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars6" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars6" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                            </label>
                            <label>
                            <input type="radio" name="stars6" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                            <label>
                            <input type="radio" name="stars6" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            </label>
                        </div>

                    </div>


                </div>

                <div class="review-question-block">

                    <h5 class="review-question">Recruiter added value</h5>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question pt-2">In-depth market knowledge</h5>

                        <div class="d-flex justify-content-between added-value-buttons">

                            <input type="radio" name="added_value" id="yes">
                            <label for="yes" class="colored-question-button">Yes</label>

                            <input type="radio" name="added_value" id="no">
                            <label for="no" class="colored-question-button">No</label>

                            <input type="radio" name="added_value" id="notSure">
                            <label for="notSure" class="colored-question-button">Not sure</label>

                        </div>

                    </div>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question pt-2">Detailed interview preparation</h5>

                        <div class="d-flex justify-content-between added-value-buttons">

                            <input type="radio" name="interview_preparation" id="yes1">
                            <label for="yes1" class="colored-question-button">Yes</label>

                            <input type="radio" name="interview_preparation" id="no1">
                            <label for="no1" class="colored-question-button">No</label>

                            <input type="radio" name="interview_preparation" id="notSure1">
                            <label for="notSure1" class="colored-question-button">Not sure</label>

                        </div>

                    </div>

                    <div class="d-flex pl-0 pl-md-3 input-block inline-stars-rating-block">

                        <h5 class="review-question pt-2">Supporting you on how things could have gone better</h5>

                        <div class="d-flex justify-content-between added-value-buttons">

                            <input type="radio" name="have_gone_better" id="yes2">
                            <label for="yes2" class="colored-question-button">Yes</label>

                            <input type="radio" name="have_gone_better" id="no2">
                            <label for="no2" class="colored-question-button">No</label>

                            <input type="radio" name="have_gone_better" id="notSure2">
                            <label for="notSure2" class="colored-question-button">Not sure</label>

                        </div>

                    </div>

                </div>

                <div class="review-question-block input-block mb-5">

                    <label for="reviewRating">Review rating</label>
                    <textarea type="text" name="reviewRating" id="reviewRating" placeholder="Review rating" required></textarea>

                </div>

                <input type="submit" value="Submit rating" class="submit-rating-btn" id="btn_submit">

            </form>

        </div>

</section>	

<script src={{ url('assets/js/pages/feedback.js') }}></script>

@endsection