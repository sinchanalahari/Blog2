@extends('layouts.app')

@section('content')
    <div class="row flex-row chat mt-7">
    <div class="col-lg-4">
        <div class="card  bg-secondary">
            <form class="card-header mb-3">
                <div class="input-group input-group-alternative">
                    <input type="text" class="form-control" placeholder="Search contact">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                    </div>
                </div>
            </form>
            <div class="list-group list-group-chat list-group-flush">
                <a href="javascript:;" class="list-group-item active bg-gradient-primary">
                    <div class="media">
                        <img alt="Image" src="../assets/img/faces/christian.jpg" class="avatar">
                        <div class="media-body ml-2">
                            <div class="justify-content-between align-items-center">
                                <h6 class="mb-0 text-white">Charlie Watson
                                    <span class="badge badge-success"></span>
                                </h6>
                                <div>
                                    <small>Typing...</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript:;" class="list-group-item">
                    <div class="media">
                        <img alt="Image" src="../assets/img/faces/team-2.jpg" class="avatar shadow">
                        <div class="media-body ml-2">
                            <div class="justify-content-between align-items-center">
                                <h6 class="mb-0">Jane Doe</h6>
                                <div>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </div>
                            <span class="text-muted text-small col-10 p-0 text-truncate d-block">Computer users and programmers</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:;" class="list-group-item">
                    <div class="media">
                        <img alt="Image" src="../assets/img/faces/team-3.jpg" class="avatar shadow">
                        <div class="media-body ml-2">
                            <div class="justify-content-between align-items-center">
                                <h6 class="mb-0">Mila Skylar</h6>
                                <div>
                                    <small class="text-muted">24 min ago</small>
                                </div>
                            </div>
                            <span class="text-muted text-small col-10 p-0 text-truncate d-block">You can subscribe to receive weekly...</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:;" class="list-group-item">
                    <div class="media">
                        <img alt="Image" src="../assets/img/faces/team-4.jpg" class="avatar shadow">
                        <div class="media-body ml-2">
                            <div class="justify-content-between align-items-center">
                                <h6 class="mb-0">Sofia Scarlett</h6>
                                <div>
                                    <small class="text-muted">7 hours ago</small>
                                </div>
                            </div>
                            <span class="text-muted text-small col-10 p-0 text-truncate d-block">It’s an effective resource regardless..</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:;" class="list-group-item">
                    <div class="media">
                        <img alt="Image" src="../assets/img/faces/team-5.jpg" class="avatar shadow">
                        <div class="media-body ml-2">
                            <div class="justify-content-between align-items-center">
                                <h6 class="mb-0">Tom Klein</h6>
                                <div>
                                    <small class="text-muted">1 day ago</small>
                                </div>
                            </div>
                            <span class="text-muted text-small col-10 p-0 text-truncate d-block">Be sure to check it out if your dev pro...</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card card-plain">
            <div class="card-header d-inline-block">
                <div class="row">
                    <div class="col-md-10">
                        <div class="media align-items-center">
                            <img alt="Image" src="../assets/img/faces/christian.jpg" class="avatar shadow">
                            <div class="media-body">
                                <h6 class="mb-0 d-block">Charlie Watson</h6>
                                <span class="text-muted text-small">last seen today at 1:53am</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-3">
                        <button class="btn btn-link btn-text" type="button" data-toggle="tooltip" data-placement="top" title="Video call">
                            <i class="ni ni-book-bookmark"></i>
                        </button>
                    </div>
                    <div class="col-md-1 col-3">
                        <div class="dropdown">
                            <button class="btn btn-link text-primary" type="button" data-toggle="dropdown">
                                <i class="ni ni-settings-gear-65"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="ni ni-single-02"></i> Profile
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="ni ni-notification-70"></i> Mute conversation
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="ni ni-key-25"></i> Block
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="ni ni-button-power"></i> Clear chat
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="ni ni-fat-remove"></i> Delete chat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-start">
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    It contains a lot of good lessons about effective practices
                                </p>
                                <div>
                                    <small class="opacity-60"><i class="far fa-clock"></i> 3:14am</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end text-right">
                    <div class="col-auto">
                        <div class="card bg-gradient-primary text-white">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    Can it generate daily design links that include essays and data visualizations ?<br>
                                </p>
                                <div>
                                    <small class="opacity-60">3:30am</small>
                                    <i class="ni ni-check-bold"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <span class="badge text-default">Wed, 3:27pm</span>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    Yeah! Responsive Design is geared towards those trying to build web apps
                                </p>
                                <div>
                                    <small class="opacity-60"><i class="far fa-clock"></i> 4:31pm</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end text-right">
                    <div class="col-auto">
                        <div class="card bg-gradient-primary text-white">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    Excellent, I want it now !
                                </p>
                                <div>
                                    <small class="opacity-60">4:40pm</small>
                                    <i class="ni ni-check-bold"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    You can easily get it; The content here is all free
                                </p>
                                <div>
                                    <small class="opacity-60"><i class="far fa-clock"></i> 4:42pm</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end text-right">
                    <div class="col-auto">
                        <div class="card bg-gradient-primary text-white">
                            <div class="card-body p-2">
                                <p class="mb-1">
                                    Awesome, blog is important source material for anyone who creates apps? <br>
                                    beacuse these blogs offer a lot of information about website development.
                                </p>
                                <div>
                                    <small class="opacity-60">4:46pm</small>
                                    <i class="ni ni-check-bold"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="col-12 p-0">
                                    <img src="../assets/img/theme/img-1-1200x1000.jpg" alt="Rounded image" class="img-fluid rounded mb-1">
                                </div>
                                <div>
                                    <small class="opacity-60"><i class="far fa-clock"></i> 4:47pm</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end text-right">
                    <div class="col-auto">
                        <div class="card bg-gradient-primary text-white">
                            <div class="card-body p-2">
                                <p class="mb-0">
                                    At the end of the day … the native dev apps is where users are
                                </p>
                                <div>
                                    <small class="opacity-60">4:47pm</small>
                                    <i class="ni ni-check-bold"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-auto">
                        <div class="card ">
                            <div class="card-body p-2">
                                <div class="spinner">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                                <p class="d-inline-block mr-2 mb-1 mt-1">
                                    Typing...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-block">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <input class="form-control" placeholder="Your message" type="text">
                        <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="ni ni-send"></i>
                      </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

