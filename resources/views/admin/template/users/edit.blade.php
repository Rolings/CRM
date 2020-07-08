@extends('admin.app')
@section('title',__('admin.users'))

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
                                        Edit user</h6>
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
                                <div class="body-nest" id="Blank_Page_Content">
                                    <div class="row">
                                        {{ Form::model($model, ['route' =>['admin.users.update',$model->id],'class'=>'form-horizontal','role'=>'form','method'=>'PUT','enctype'=>'multipart/form-data']) }}
                                            @include('admin.template.users.fields')
                                        {{ Form::close() }}
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