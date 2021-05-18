@extends('layouts.app')

@section('page-content')
<section id="contact">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">
    <img class="detail-2" src="assets/images/detail2.png">

    <div class="container contact-us-container">

        <div class="row">

            <div class="col-md-6">

                <div class="contact-us-left-empty-box"></div>

                <div class="contact-us-left-box">

                    <h2>Contact <strong>Us</strong></h2>

                    <ul class="pl-0">

                        <li>

                            <a href="tel:"><img src="assets/images/phone-contact.svg" alt="Phone" />+123456789</a>

                        </li>

                        <li>

                            <a href="mailto:"><img src="assets/images/email-contact.svg" alt="Email" />info@logohere.com</a>

                        </li>

                    </ul>

                </div>

                <img class="left-side-frame" src="assets/images/frame.png">

            </div>

            <div class="col-md-6">

                <div class="">

                    <h2 class="text-center">Get in <strong>Touch</strong></h2>

                    <form action="#" class="contact-us-form d-flex flex-column">

                        <input name="name" type="text" id="contact-name" placeholder="Full name">

                        <input name="email" type="email" id="contact-email" placeholder="Email">

                        <textarea name="message" type="message" id="contact-message" placeholder="Message" rows="70"></textarea>

                        <input type="submit" value="Send" class="p-0">

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection