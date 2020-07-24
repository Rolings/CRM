@extends('admin.app')
@section('title','Role')

@section('content')

    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            @include('admin.section.page-title.index')
            @include('admin.section.breadcrumb.index')
            <div class="content-wrap">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="nest" id="tabClose">
                                <div class="title-alt">
                                    <h6>
                                        Tabs</h6>
                                    <div class="titleClose">
                                        <a class="gone" href="#tabClose">
                                            <span class="entypo-cancel"></span>
                                        </a>
                                    </div>
                                    <div class="titleToggle">
                                        <a class="nav-toggle-alt" href="#tab">
                                            <span class="entypo-up-open"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="body-nest" id="tab">
                                    {{ Form::model($model, ['route' =>['admin.roles.update',$model->id],'class'=>'form-horizontal','role'=>'form','method'=>'PATCH']) }}
                                    <div id="wizard-tab">
                                        <h2>Role</h2>
                                        <section>
                                            @include('admin.template.role.fields',collect('permissions','guardName'))
                                        </section>

                                        <h2>Permission for role</h2>
                                        <section>
                                            @include('admin.template.role.include.permission',collect('permissions','guardName','model'))
                                        </section>

                                        {{ Form::close() }}
                                    </div>
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
    <link rel="stylesheet" href="{{ asset('admin/js/wizard/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/wizard/jquery.stepy.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/tabs/acc-wizard.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/profile.css') }}">
@endsection
@section('script_after')
    <script type="text/javascript" src="{{ asset('admin/js/wizard/build/jquery.steps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/wizard/jquery.stepy.js') }}"></script>
    <script>
        $(function() {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "slideLeft"
            });

            $("#wizard_vertical").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical"
            });

            $("#wizard-tab").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "none",
                enableFinishButton: false,
                enablePagination: false,
                enableAllSteps: true,
                titleTemplate: "#title#",
                cssClass: "tabcontrol"
            });

            //stepy
            $('#transition-duration-demo').stepy({
                duration: 400,
                transition: 'fade'
            });

        });
    </script>
@endsection