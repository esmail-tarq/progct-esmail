@extends('SiteOne.master')
@section('content')
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->


        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="{{route('site1.postcontact')}}">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email"  id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>

                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control"  name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>

                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>

                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->


                         <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>







@stop
