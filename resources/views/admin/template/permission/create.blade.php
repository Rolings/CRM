@extends('admin.app')
@section('title','Разрешения')

@section('content')

    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            @include('admin.section.page-title.index')
            @include('admin.section.breadcrumb.index')
            <div class="content-wrap">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- BLANK PAGE-->
                            <div style="margin:-20px 15px;" class="nest" id="Blank_PageClose">
                                <div class="title-alt">
                                    <h6>
                                        Create Permission</h6>
                                    <div class="titleClose">
                                        <a class="gone" href="#Blank_PageClose">
                                            <span class="entypo-cancel"></span>
                                        </a>
                                    </div>
                                    <div class="titleToggle">
                                        <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                            <span class="entypo-up-open"></span>
                                        </a>
                                    </div>

                                </div>
                                <div class="body-nest">
                                    <div class="row">
                                        <div class="col-md-9 personal-info">
                                            <h3>Permission</h3>
                                            {{ Form::model(null, ['route' =>['admin.permissions.store'],'class'=>'form-horizontal','role'=>'form']) }}
                                                @include('admin.template.permission.fields',compact('data'))
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF BLANK PAGE -->

                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/css/profile.css') }}">
@endsection