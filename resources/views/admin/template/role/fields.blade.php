<div class="form-group">
    {{ Form::label('name', 'Name',['class'=>'col-lg-3 control-label']) }}
    <div class="col-lg-8">
        {{ Form::text('name',old('name'),['id'=>'name','class'=>'form-control']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('guard_name', 'Guard name',['class'=>'col-lg-3 control-label']) }}
    <div class="col-lg-8">
        {{ Form::select('guard_name',$guardName,$model->guard_name??[],['id'=>'guard_name','class'=>'form-control']) }}
    </div>
</div>
@include('admin.section.event-button.index')