@extends('layouts.app')

@section('content')

<section class="section bg-secondary">
    <div class="container">
        <div class ="card card-profile shadow nt-300">
    </div>
</section>
<div class="px-4">
    <div class="row justify-content-center" >
        <div class="col-lg-12 text-center">
            <div class="card-profile-image" style="background-image: url('/img/splash7.jpg');">
                <div class="card-header big-info" style="background-image: url('/img/splash11.jpg');" height="2000px" width="2000px">
                <a href="#">
                    <img class="rounded-circle"  src="{{url('/img/splash10.jpg')}}" height="200px" width="200px" lazy="loaded">
                </a>
            </div>
        </div>

    <div class="text-center mt-5"><h3>Jessica Jones
            <span class="font-weight-light">, 27</span></h3>
        <div class="h6 font-weight-300">
            <i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2">

            </i>Solution Manager - Creative Tim Officer</div><div><i class="ni education_hat mr-2">

            </i>University of Computer Science</div></div><div class="mt-5 py-5 border-top text-center">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                <a href="#">Show more</a>
            </div>
        </div>
        </div>
    </div>
@endsection
