@if (isset($show))
    <div class="pull-right">
        <a class="btn btn-success" href="{{ $show }}">Редактировать</a>
    </div>
@endif
@if(isset($create))
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-12">
            <a href="{{ $create }}" class="btn btn-success dropdown-toggle pull-right" title="Filter using the Filter API">Добавить</a>
        </div>
    </div>
@endif
@if (isset($delete))
    <div class="pull-right">
        {{ Form::open(['url' =>$delete]) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endif
@if (isset($edit))
    <div class="pull-right">
        <a class="btn btn-success" href="{{ $edit }}">Редактировать</a>
    </div>
@endif