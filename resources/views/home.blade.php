@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-1">
                            <img src="{{url('/img/splash1.jpg')}}"  height="50px" width="50px" class="rounded-circle" alt="">
                        </div>
                        <div class="col-11">
                            <p style="margin-bottom: unset">Name</p>
                            <p style="margin-bottom: unset">Date</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5>Caption</h5>
                </div>
                <div class="card-footer">
                    <img src="{{url('/img/splash1.jpg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
