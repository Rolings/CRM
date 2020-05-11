@extends('admin.app')
@section('title','Разрешения')


@section('content')
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <span class="entypo-layout"></span>
                            <span>Роли</span>
                        </h2>
                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li><span class="entypo-home"></span></li>
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a href="#" title="Sample page 1">Роли</a></li>
                <li class="pull-right">
                    <div class="input-group input-widget">
                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>
            <!-- END OF BREADCRUMB -->
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="tableStaticClose">
                            <div class="title-alt">
                                <h6>Basic Responsive Tables</h6>

                                <div class="titleClose">
                                    <a class="gone" href="#tableStaticClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#tableStatic">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="tableStatic">
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-sm-12">
                                        <a href="{{ route('admin.permissions.create') }}" class="btn btn-success dropdown-toggle pull-right" title="Filter using the Filter API">Добавить</a>
                                    </div>
                                </div>
                                <section id="flip-scroll">
                                    <table class="table table-bordered table-striped cf">
                                        <thead class="cf">
                                        <tr>
                                            <th class="numeric">Названия</th>
                                            <th class="numeric">Guard</th>
                                            <th class="numeric"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($permissions as $permission)
                                            @isset ($permission->id)
                                                <tr>
                                                    <td class="numeric">{{ $permission->route }}</td>
                                                    <td class="numeric">
                                                        {{ $guardName[$permission->guard_name] }}
                                                    </td>
                                                    <td class="numeric">
                                                        <div class="pull-right">
                                                            <a class="btn btn-success" href="{{ route('admin.permissions.edit',$permission->id) }}">Редактировать</a>
                                                            <a class="btn btn-danger" href="{{ route('admin.permissions.destroy',$permission->id) }}">Удалить</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                {{ Form::open(['url'=>route('admin.permissions.store')]) }}
                                                <tr>
                                                    <td class="numeric">{{ $permission->route }}</td>
                                                    <td class="numeric">
                                                        {{ Form::hidden('route', $permission->route) }}
                                                        {{ Form::select('guard_name',$guardName,[],['id'=>'guard_name','class'=>'form-control']) }}
                                                    </td>
                                                    <td class="numeric">
                                                        <div class="pull-right">
                                                            <button type="submit" class="btn btn-success">Создать</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                {{ Form::close() }}

                                            @endisset
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /END OF CONTENT -->

            <!-- FOOTER -->
            <div class="footer-space"></div>
            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate"></p>
                    <p id="clock"></p>
                </div>
                <div class="copyright">Make with Love
                    <span class="entypo-heart"></span>2014 <a href="http://gamatechno.com">Thesmile</a> All Rights Reserved</div>
                <div class="devider-footer"></div>

            </div>
            <!-- / END OF FOOTER -->

        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/js/button/ladda/ladda.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/js/footable/css/footable-demos.css') }}">
@endsection