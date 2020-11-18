@extends('admin.app')
@section('title','Разрешения')

@section('content')
    <div class="wrap-fluid" id="app">
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

                    <form action="{{ route('languages.translations.index', ['language' => $language]) }}" method="get">
                    <div class="body-nest" id="tableStatic">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-sm-12">


                                <div class="panel-header">

                                    {{ __('translation.translations') }}

                                    <div class="row">

                                        @include('vendor.translation.forms.search', ['name' => 'filter', 'value' => Request::get('filter')])

                                        @include('vendor.translation.forms.select', ['name' => 'language', 'items' => $languages, 'submit' => true, 'selected' => $language])

                                        <div class="sm:hidden lg:flex items-center">

                                            @include('vendor.translation.forms.select', ['name' => 'group', 'items' => $groups, 'submit' => true, 'selected' => Request::get('group'), 'optional' => true])

                                            <a href="{{ route('languages.translations.create', $language) }}" class="button">
                                                {{ __('translation.add') }}
                                            </a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <section id="flip-scroll">
                            <table class="table table-bordered table-striped cf">
                                <thead class="cf">
                                <tr>
                                    <th class="w-1/5 uppercase font-thin">{{ __('translation.group_single') }}</th>
                                    <th class="w-1/5 uppercase font-thin">{{ __('translation.key') }}</th>
                                    <th class="uppercase font-thin">{{ config('app.locale') }}</th>
                                    <th class="uppercase font-thin">{{ $language }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($languages as $language => $name)
                                    @if ($translations)
                                        @foreach($translations as $type => $items)

                                            @if ($items)
                                                @foreach($items as $group => $translation)
                                                    @if ($translation)
                                                       @foreach($translation as $key => $value)
                                                            @if(!is_array($value[config('app.locale')]))
                                                                <tr>
                                                                    <td>{{ $group }}</td>
                                                                    <td>{{ $key }}</td>
                                                                    <td>{{ $value[config('app.locale')] }}</td>
                                                                    <td>
                                                                        <translation-input
                                                                                initial-translation="{{ $value[$language]??'' }}"
                                                                                language="{{ $language }}"
                                                                                group="{{ $group }}"
                                                                                translation-key="{{ $key }}"
                                                                                route="{{ config('translation.ui_url') }}">
                                                                        </translation-input>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </section>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .panel-body td {
            font-weight: 200;
            vertical-align: top;
        }
        .panel-body td textarea {
            overflow-wrap: inherit;
            border-style: none;
            resize: none;
            background-color: transparent;
            color: #606f7b;
            width: 100%;
            font-weight: 200;
            height: auto;
            padding: 0;
        }
        .flex {
            display: flex;
        }
        button, input, optgroup, select, textarea {
            font-family: inherit;
        }
        .panel-body td textarea:focus {
            outline: 0;
        }
        button, input, optgroup, select, textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }
    </style>
@endsection
@section('script_before')
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
@endsection