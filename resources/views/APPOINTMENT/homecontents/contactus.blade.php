@extends('mainlayout')
@section('page-level-css')
<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

@endsection


@section('contents')
<div class="container d-flex justify-content-center align-items-center">
    <section class="mb-4 col-8">
        <h2 class="h1-responsive font-weight-bold text-center my-5 text-brown">Contact Us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>



        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">

                <form action="{{ route('contact.store') }}" id="contactform" method="post">
@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" name="name" class="form-control">
                                <label for="name">Your Name</label>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" name="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" name="message" rows="3" class="form-control md-textarea"></textarea>
                                <label for="message">Your Message</label>

                            </div>

                        </div>

                    </div>

                    <div class="text-center text-md-left">
                        <button class="btn btn-brown" type="submit">Send</button>

                    </div>

                </form>

            </div>

            <div class="col-md-3 text-center text-primary">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x text-brown"></i>
                        <p class="text-dark">Calauan, Laguna, Philippines</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x text-brown"></i>
                        <p class="text-dark">+ 639 965 521 032</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x text-brown"></i>
                        <p class="text-dark">krysialee023@gmail.com</p>
                    </li>

                </ul>

            </div>

        </div>
    </section>

</div>

@endsection
