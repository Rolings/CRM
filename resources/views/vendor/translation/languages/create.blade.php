@include('admin.app')
@section('title','Переводы')

@section('content')
    @include('translation::nav')
    @include('translation::notifications')

    <div class="panel w-1/2">

        <div class="panel-header">

            {{ __('translation::translation.add_language') }}

        </div>

        <form action="{{ route('languages.store') }}" method="POST">

            <fieldset>

                <input type="hidden" name="_token" value="{{ csrf_ken() }}">

                <div class="panel-body p-4">

                    @include('translation::forms.text', ['field' => 'name', 'label' => __('translation::translation.language_name'), ])

                    @include('translation::forms.text', ['field' => 'locale', 'label' => __('translation::translation.locale'), ])

                </div>

            </fieldset>

            <div class="panel-footer flex flex-row-reverse">

                <button class="button button-blue">
                    {{ __('translation::translation.save') }}
                </button>

            </div>

        </form>

    </div>

@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
@endsection
@section('script_after')
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
@endsection

