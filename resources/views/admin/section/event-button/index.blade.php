<div class="form-group">
    {!! Form::hidden('action','') !!}
    <label class="col-md-3 control-label"></label>
    <div class="col-md-8">
        {{ Form::submit('Сохранить',['class'=>'btn btn-primary btn-lg']) }}
        <span></span>
        {{ Form::submit('Сохранить и продолжить',['class'=>'btn btn-info btn-lg','data-action'=>'continue']) }}
        <span></span>
        <a class="btn btn-default text-uppercase btn-lg  " href="{{ redirect()->getUrlGenerator()->previous() }}">Назад</a>
    </div>
</div>