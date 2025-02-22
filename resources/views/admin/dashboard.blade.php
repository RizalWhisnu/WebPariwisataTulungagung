@extends('layouts.backend.master')
@section('title')
    Tulungagung - Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row pt-5">
        <h2 class="m-auto" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif"><strong>Admin Dashboard</strong></h2>
    </div>
</div>
<div class="main-section">
    <div class="dashbord">
        <div class="icon-section">
            <i class="fas fa-chart-area"></i><br>
            Districts
            <p>{{ $districts->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.district.index') }}">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-green">
        <div class="icon-section">
            <i class="fas fa-atlas"></i><br>
            Placetype
            <p>{{ $placetypes->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.type.index') }}">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-orange">
        <div class="icon-section">
            <i class="fa fa-info-circle" aria-hidden="true"></i><br>
                Places
                <p>{{ $places->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.place.index') }}">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-user" aria-hidden="true"></i><br>
            Guides
            <p>{{ $guides->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.guide.index') }}">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-red">
        <div class="icon-section">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
            Package
            <p>{{ $packages->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.package.index') }}">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-skyblue">
        <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            Users
            <p>{{ $users->count() }}</p>
        </div>
        <div class="detail-section">
            <a href="{{ route('admin.users.index') }}">More Info </a>
        </div>
    </div>
</div>
 @endsection

