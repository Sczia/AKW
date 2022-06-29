@extends('mainlayout')
@section('page-level-css')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endsection
@section('contents')

<div class="container ">
    <div class="row custom-section d-flex align-items-center ">
        <div class="col-12 col-lg-4 ">
            <h2>Appointment</h2>
            <p>Make your own appointment link for everyone to use. It is simple to schedule appointments for your own agendas. </p>
            <a href= "{{ route('login') }}" >Start</a>

        </div>
        <div class="col-12 col-lg-8 ">
            <img src="/img/appoinments-removebg-preview.png" alt=" Team process banner ">
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
</script>

@endsection
