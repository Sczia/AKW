<div class=" container ">
    <header class="head my-3 ">
        <nav class="navbar navbar-expand-lg navbar-light head__custom-nav ">
            <a class="navbar-brand d-flex align-items-center " href="# ">
                <img src="{{ $logo->path }} " alt="website logo ">
              <span>{{ $title->title }}</span>

            </a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarNav ">
                <span><img src="/IMAGE/menu.png " alt=" "></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav ">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('appointment') }}">Appointment</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('contactus') }}">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
