@extends('APPOINTMENT.admin.layouts.index')
@section('sidebar')
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src=" {{ asset('/img/logo-logo-removebg-preview.png') }} " id="logo" alt="website logo ">
            </div>
            <div class="sidebar-brand-text mx-3">APPOINTMENT <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Hompage
        </div>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('manage.index') }}">
                <i class="fa-solid fa-pen-ruler"></i>
                <span>Manage</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('contact.index') }}">
                <i class="fa-solid fa-message"></i>
                <span>Message</span></a>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pending.index') }}">
                <i class="fa-solid fa-user-clock"></i>
                <span>Request Appointments</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('confirm.index') }}">
                <i class="fa-solid fa-user-check"></i>
                <span>Confirmed Appointments</span></a>
        </li>

      {{--   <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Appointments</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('pending.index') }}">Request Appointments</a>
                    <a class="collapse-item" href="{{ route('confirm.index') }}">Approved Appointments</a>

                </div>
            </div>
        </li>
 --}}



    </ul>
    <!-- End of Sidebar -->
@endsection
