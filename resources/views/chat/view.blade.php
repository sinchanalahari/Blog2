@extends('layouts.app')

@section('content')
    <div class="container">

<div class="row">
    <div class="col-3"></div>

        <!-- Users box-->
        <div class="col-6 px-0">
            <div class="bg-white">

                <div class="bg-gray px-4 py-2 bg-light">
                    <p class="h5 mb-0 py-1">Recent</p>
                </div>

                <div class="messages-box">
                    <div class="list-group rounded-0">
                        @foreach($users as $user)
                            <a href="{{route('Chat.show',$user->id)}}" class="list-group-item list-group-item-action active text-white rounded-0 mb-1">
                                <div class="media"><img src="{{ url('storage/'.$user->image) }}" alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">{{$user->name}}</h6><small class="small font-weight-bold">25 Dec</small>
                                        </div>
                                        <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat Box-->
    </div>
    <div class="col-3"></div>
</div>


@endsection

