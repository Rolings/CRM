@extends('admin.app')

@section('title', __('backend.translations'))

@section('content')

    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">


            {{--<p>Warning, translations are not visible until they are exported back to the app/lang file, using <code>php artisan translation:export</code> command or publish button.</p>--}}
            <div class="alert alert-success success-import" style="display:none;">
                @lang('backend.done_save2') <strong class="counter">N</strong> @lang('backend.done_save3')
            </div>
            <div class="alert alert-success success-find" style="display:none;">
                @lang('backend.done_save4') <strong class="counter">N</strong> @lang('backend.items')!
            </div>
            <div class="alert alert-success success-publish" style="display:none;">
                @lang('backend.done_save') '{{ $group }}'!
            </div>
            <div class="alert alert-success success-publish-all" style="display:none;">
                @lang('backend.done_save5')
            </div>
            @if(Session::has('successPublish'))
                <div class="alert alert-info">
                    {{ Session::get('successPublish') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('backend.groups')
                </div>

                <div class="panel-body">

                    @if(isset($group))
                        <div>
                            <a href="{{ route('admin.translations.index') }}"
                               class="btn btn-primary pull-right">@lang('backend.back')</a>
                            <form class="form-inline form-publish" method="POST"
                                  action="{{action('\Barryvdh\TranslationManager\Controller@postPublish', $group) }}"
                                  data-remote="true" role="form">
                                @csrf
                                <button data-dialog="@lang('backend.save_translation1') '{{ $group }}'? @lang('backend.save_translation2')"
                                        type="submit" class="btn btn-info"
                                        data-disable-with="Publishing.."> @lang('backend.publish_translate')
                                </button>
                            </form>

                        </div>
                        <br>
                    @endif

                    <form role="form" method="POST"
                          action="{{action('\Barryvdh\TranslationManager\Controller@postAddGroup') }}">
                        @csrf
                        <div class="form-group">
                            <p>@lang('backend.choose_group')</p>
                            <select name="group" id="group" class="form-control group-select">
                                @foreach($groups as $key => $value)
                                    <option value="{{$key}}" @if($key == $group) selected @endif >{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('backend.enter_new_group')</label>
                            <input type="text" class="form-control" name="new-group"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="add-group"
                                   value="@lang('backend.add_new_group')"/>
                        </div>
                    </form>

                    @if($group)
                        <form action="{{ action('\Barryvdh\TranslationManager\Controller@postAdd', [$group]) }}"
                              method="POST"
                              role="form">
                            @csrf
                            <div class="form-group">
                                <label>@lang('backend.add_new_key')</label>
                                <textarea class="form-control" rows="3" name="keys"
                                          placeholder="@lang('backend.key_placeholder')"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="@lang('backend.add_keys')" class="btn btn-success">
                            </div>
                        </form>
                        <hr>
                        <h4>@lang('backend.total'): {{ $numTranslations }}, @lang('backend.changed')
                            : {{ $numChanged }}</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="15%">@lang('backend.key')</th>
                                    @foreach ($locales as $locale)
                                        <th>{{$locale }}</th>
                                    @endforeach
                                    @if ($deleteEnabled)
                                        <th>&nbsp;</th>
                                    @endif
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($translations as $key => $translation)
                                    <tr id="translate-{{ $key }}">
                                        <td>{{ $key }}</td>
                                        @foreach ($locales as $locale)
                                            @php $t = isset($translation[$locale]) ? $translation[$locale] : null @endphp

                                            <td>
                                                <a href="#edit"
                                                   class="editable status-{{ $t ? $t->status : 0 }} locale-{{ $locale }}"
                                                   data-locale="{{ $locale }}" data-name="{{ $locale . "|" . $key }}"
                                                   id="username" data-type="textarea" data-pk="{{ $t ? $t->id : 0 }}"
                                                   data-url="{{ $editUrl }}"
                                                   data-title="@lang('backend.enter_translation')">{{ $t ? htmlspecialchars_decode(htmlentities($t->value, ENT_QUOTES, 'UTF-8', false)) : '' }}</a>
                                            </td>
                                        @endforeach
                                        @if ($deleteEnabled)
                                            <td>
                                                <a href="{{ action('\Barryvdh\TranslationManager\Controller@postDelete', [$group, $key]) }}"
                                                   class="delete-key btn btn-xs btn-danger"
                                                   data-confirmed="@lang('backend.delete_translation') '{{ $key }}?"><span
                                                            class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>

            @if(!$group)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @lang('backend.supported_locales')
                    </div>

                    <div class="panel-body">

                        <fieldset>
                            <form class="form-add-locale" method="POST" role="form" enctype="multipart/form-data"
                                  action="{{ route('admin.locale.add') }}">
                                @csrf
                                <div class="form-group">
                                    <p>
                                        @lang('backend.enter_new_key'):
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">Id:</span>
                                                <input type="text" name="new-locale" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">Name:</span>
                                                <input type="text" name="locale_name" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">Flag:</span>
                                                <input type="file" name="locale_flag" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success btn-block"
                                                    data-disable-with="Adding..">@lang('backend.add_new_locale')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>
                                @lang('backend.current_supported'):
                            </p>
                            <form class="form-remove-locale form-horizontal" method="POST" role="form"
                                  action="{{ route('admin.locale.remove') }}">
                                @csrf
                                <div class="col-sm-6 col-sm-offset-3">
                                    @foreach($locales as $locale)
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                {{$locale}}
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                            <div class="col-sm-1">
                                                @if(count($locales) > 1)
                                                    <input type="submit" name="remove-locale[{{ $locale }}]"
                                                           value="&times;"
                                                           class="btn btn-danger btn-xs"
                                                           data-disable-with="..."
                                                           data-dialog="@lang('backend.delete_locale_confirm')"/>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group-separator col-xs-12"></div>
                                    @endforeach
                                </div>
                            </form>

                        </fieldset>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        @lang('backend.import') / @lang('backend.export')
                    </div>

                    <div class="panel-body">
                        <fieldset>
                            <form class="form-inline form-publish-all" method="POST"
                                  action="{{ action('\Barryvdh\TranslationManager\Controller@postPublish', '*') }}"
                                  data-remote="true" role="form">
                                @csrf
                                <button data-dialog="@lang('backend.publish_all_confirm')" type="submit"
                                        class="btn btn-turquoise"
                                        data-disable-with="Publishing.."><i class="fa fa-save"></i>
                                    <span>@lang('backend.publish_all')</span>
                                </button>
                            </form>
                        </fieldset>

                        <fieldset>
                            <form class="form-inline form-gs-import" method="POST"
                                  action="{{ route('admin.gs.import') }}"
                                  data-remote="true" role="form">
                                @csrf
                                <button data-dialog="@lang('backend.gs_import_confirm')" type="submit"
                                        class="btn btn-success"
                                        data-disable-with="Publishing.."><i class="fa fa-desktop"></i><i
                                            class="fa fa-arrow-left"></i><i class="fa fa-table"></i>
                                    <span>@lang('backend.gs_import')</span>
                                </button>
                            </form>
                        </fieldset>

                        <fieldset>
                            <form class="form-inline form-gs-export" method="POST"
                                  action="{{route('admin.gs.export') }}"
                                  data-remote="true" role="form">
                                @csrf
                                <button data-dialog="@lang('backend.gs_export_confirm')" type="submit"
                                        class="btn btn-info"
                                        data-disable-with="Publishing.."><i class="fa fa-desktop"></i><i
                                            class="fa fa-arrow-right"></i><i class="fa fa-table"></i>
                                    <span>@lang('backend.gs_export')</span>
                                </button>
                            </form>
                        </fieldset>
                    </div>
                </div>

            @endif
        </div>
    </div>
@endsection

@section('styles')
@endsection
@section('script_after')
    <script>
        $(document).ready(function ($) {

            $.ajaxSetup({
                beforeSend: function (xhr, settings) {
                    console.log('beforesend');
                    settings.data += "&_token={{ csrf_token() }}";
                }
            });
            $('.group-select').on('change', function () {
                var group = $(this).val();
                if (group) {
                    window.location.href = '{{ route('admin.translations.view') }}/' + $(this).val();
                } else {
                    window.location.href = '{{ route('admin.translations.index') }}';
                }
            });

            $("a.delete-key").click(function (event) {
                event.preventDefault();
                var _this = $(this);
                dialog(_this.data('confirmed'),
                    function () {
                        var row = _this.closest('tr');
                        var url = _this.attr('href');
                        var id = row.attr('id');
                        $.post(url, {id: id}, function () {
                            row.remove();
                        });
                    }
                );
            });

            $('.form-import').on('ajax:success', function (e, data) {
                $('div.success-import strong.counter').text(data.counter);
                $('div.success-import').slideDown();
                window.location.reload();
            });

            $('.form-find').on('ajax:success', function (e, data) {
                $('div.success-find strong.counter').text(data.counter);
                $('div.success-find').slideDown();
                window.location.reload();
            });

            $('.form-publish').on('ajax:success', function (e, data) {
                $('div.success-publish').slideDown();
            });

            $('.form-publish-all').on('ajax:success', function (e, data) {
                $('div.success-publish-all').slideDown();
            });
            $('.form-gs-import, .form-gs-export').on('ajax:success', function (e, data) {
                window.location.reload();
            });

        })
    </script>
@endsection