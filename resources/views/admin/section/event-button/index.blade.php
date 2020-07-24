<div class="form-group">
    <label class="col-md-3 control-label"></label>
    <div class="col-md-8">
        {{ Form::submit('Сохранить',['class'=>'btn btn-primary']) }}
        <span></span>
        <a class="btn btn-default" href="{{ redirect()->getUrlGenerator()->previous() }}">Назад</a>
    </div>
</div>