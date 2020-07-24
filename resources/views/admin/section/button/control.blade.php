<div class="pull-right">
    @if(isset($create))
        <div class="row" style="margin-bottom:10px;">
            <div class="col-sm-12">
                <a href="{{ $create }}" class="btn btn-success dropdown-toggle pull-left">Добавить</a>
            </div>
        </div>
    @endif
        @if (isset($show))
            <a class="btn btn-warning" href="{{ $show }}">Посмотреть</a>
        @endif
    @if (isset($delete))
        {{ Form::open(['url' =>$delete,'class'=>'pull-right margin-right']) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    @endif
    @if (isset($edit))
        <a class="btn btn-success" href="{{ $edit }}">Редактировать</a>
    @endif


</div>

