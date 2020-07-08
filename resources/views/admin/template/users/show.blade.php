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
                                            <img src="{{$user->publicAvatar}}" alt="" class="img-circle img-responsive img-profile" width="200" height="200">
                                        </li>
                                        <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Joined</strong>
                                            </span> {{ $user->created_at }}
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-xs-12 col-sm-8 profile-name">
                                    <h2>{{ $user->first_name }} {{ $user->last_name }}
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
                                        <dd> @if($user->active)
                                                <span class="status-metro status-active" title="Active">Active</span>
                                            @else
                                                <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                            @endif
                                        </dd>

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

                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                </div>
                                <div class="col-sm-4 emphasis">
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