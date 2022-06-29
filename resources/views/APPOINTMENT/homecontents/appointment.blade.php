@extends('mainlayout')
@section('page-level-css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="{{ route('pending.store') }}" class="mt-5 border p-4 bg-light shadow" method="POST">
                    @csrf
                    <h4 class="mb-5 text-secondary">Appointment</h4>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="email"  id="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="col-md-6">
                            <label>Contact number<span class="text-danger">*</span></label>
                            <input type="text" name="phone_number"  id="phone_number" class="form-control" placeholder="Enter Cntact number">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address"  class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Message<span class="text-danger">*</span></label>
                            <input type="text" name="message" id="message" class="form-control" placeholder="Enter Message">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary float-end" type="submit">Send</button>
                        </div>
                    </div>
                </form>
                <!--     <p class="text-center mt-3 text-secondary">If you have account, Please <a href="#">Login Now</a></p> -->
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
