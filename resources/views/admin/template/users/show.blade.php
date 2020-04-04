@extends('admin.app')
@section('title', $user->first_name.' '.$user->last_name )

@section('content')
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            @include('admin.section.page-title.index')
            @include('admin.section.breadcrumb.index')
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-4 text-center">

                                    <ul class="list-group">
                                        <li class="list-group-item text-left">
                                            <span class="entypo-user"></span>&nbsp;&nbsp;Profile
                                        </li>
                                        <li class="list-group-item text-center">
                                            <img src="http://api.randomuser.me/portraits/men/10.jpg" alt="" class="img-circle img-responsive img-profile">

                                        </li>
                                        <li class="list-group-item text-center">
                                            <span class="pull-left">
                                                <strong>Ratings</strong>
                                            </span>


                                            <div class="ratings">

                                                <a href="#">
                                                    <span class="fa fa-star"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="fa fa-star"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="fa fa-star"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="fa fa-star"></span>
                                                </a>
                                                <a href="#">
                                                    <span class="fa fa-star-o"></span>
                                                </a>

                                            </div>


                                        </li>

                                        <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Joined</strong>
                                            </span>2.13.2014
                                        </li>
                                        <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Last seen</strong>
                                            </span>Yesterday
                                        </li>
                                        <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Nickname</strong>
                                            </span>themesmile
                                        </li>

                                    </ul>

                                </div>
                                <div class="col-xs-12 col-sm-8 profile-name">
                                    <h2>Dave Mattew
                                        <span class="pull-right social-profile">
                                            <i class="entypo-facebook-circled"></i>  <i class="entypo-twitter-circled"></i>  <i class="entypo-linkedin-circled"></i>  <i class="entypo-github-circled"></i>  <i class="entypo-gplus-circled"></i>
                                        </span>
                                    </h2>
                                    <hr>

                                    <dl class="dl-horizontal-profile">
                                        <dt>User Id</dt>
                                        <dd>{{ $user->id }}</dd>

                                        <dt>First Name</dt>
                                        <dd>{{ $user->first_name }}</dd>

                                        <dt>Last Name</dt>
                                        <dd>{{ $user->last_name }}</dd>

                                        <dt>Email</dt>
                                        <dd>{{ $user->email }}</dd>

                                        <dt>Phone</dt>
                                        <dd>{{ $user->phone }}</dd>

                                        <dt>Active</dt>
                                        <dd>{{ $user->is_active }}</dd>

                                    </dl>
                                    <hr>
                                    <h5>
                                        <span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;Recent Activities</h5>

                                    <div class="table-responsive">
                                    </div>

                                </div>

                            </div>
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>20,7K</strong>
                                    </h2>
                                    <p>
                                        <small>Followers</small>
                                    </p>
                                    <button class="btn btn-success btn-block">
                                        <span class="fa fa-plus-circle"></span>&nbsp;&nbsp;Follow
                                    </button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>245</strong>
                                    </h2>
                                    <p>
                                        <small>Following</small>
                                    </p>
                                    <button class="btn btn-info btn-block">
                                        <span class="fa fa-user"></span>&nbsp;&nbsp;View Profile
                                    </button>
                                </div>
                                <div class="col-sm-4 emphasis">
                                    <h2>
                                        <strong>43</strong>
                                    </h2>
                                    <p>
                                        <small>Likes</small>
                                    </p>
                                    <button class="btn btn-default btn-block">
                                        <span class="fa fa-user"></span>&nbsp;&nbsp;Likes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('style')
    <link rel="stylesheet" href="{{ asset('admin/css/profile.css') }}">
@endsection