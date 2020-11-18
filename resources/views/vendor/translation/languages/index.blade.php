@extends('admin.app')
@section('title','Переводы')


@section('content')
    <div  id="app" class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="row">
                <div id="paper-top">
                    <!-- CONTENT -->
                    <!--TITLE -->
                    <div class="row">
                        <div id="paper-top">
                            <div class="col-sm-3">
                                <h2 class="tittle-content-header">
                                    <span class="entypo-layout"></span>
                                    <span>Переводы</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--/ TITLE -->

                    <!-- BREADCRUMB -->
                    <ul id="breadcrumb">
                        <li><span class="entypo-home"></span></li>
                        <li><i class="fa fa-lg fa-angle-right"></i></li>
                        <li><a href="#" title="Sample page 1">Переводы</a></li>
                        <li class="pull-right">
                            <div class="input-group input-widget">
                                <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                            </div>
                        </li>
                    </ul>
                    @include('translation::notifications')
                    <div class="content-wrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="nest" id="tableStaticClose">
                                    <div class="title-alt">
                                        <h6>Разрешения</h6>

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
                                                <a href="{{ route('languages.create') }}" class="button">
                                                    {{ __('translation.add') }}
                                                </a>
                                            </div>
                                        </div>
                                        <section id="flip-scroll">
                                            <table class="table table-bordered table-striped cf">
                                                <thead class="cf">
                                                <tr>
                                                    <th  class="numeric">{{ __('translation.language_name') }}</th>
                                                    <th  class="numeric">{{ __('translation.locale') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($languages as $language => $name)
                                                        <tr>
                                                            <td class="numeric">
                                                                {{ $name }}
                                                            </td>
                                                            <td class="numeric">
                                                                <a href="{{ route('languages.translations.index', $language) }}">
                                                                    {{ $language }}
                                                                </a>
                                                            </td>
                                                        </tr>
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
                </div>
            </div>
        </div>
    </div>

@endsection

@section('style')

@endsection

@section('script_before')

@endsection
@section('script_after')
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
@endsection