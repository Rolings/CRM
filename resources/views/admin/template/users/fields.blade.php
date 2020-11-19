<!-- left column -->
<div class="col-md-3">
    <div class="text-center">
        <img src="{{$model->publicAvatar??'http://placehold.it/150'}}" class="avatar img-circle" alt="avatar" width="200"  height="200">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-primary btn-file">
                    Browse
                    {{ Form::file('avatar') }}
                </span>
            </span>
            <input type="text" class="form-control">
        </div>
    </div>
</div>
<!-- edit form column -->
<div class="col-md-9 personal-info">
    <h3>Personal info</h3>

    <div class="form-group">
        {{ Form::label('first_name', 'First name:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::text('first_name',old('first_name'),['id'=>'first_name','class'=>'form-control']) }}
        </div>
        @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('last_name', 'Last name:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::text('last_name',old('last_name'),['id'=>'last_name','class'=>'form-control']) }}
        </div>
        @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::email('email',old('email'),['id'=>'email','class'=>'form-control']) }}
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::text('phone',old('phone'),['id'=>'phone','class'=>'form-control']) }}
        </div>
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('role', 'Role:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::select('role_id',$roles->pluck('name','id'),old('role_id'),['id'=>'role','class'=>'form-control']) }}
        </div>
        @error('role_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::password('password',['id'=>'password','class'=>'form-control']) }}
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('confirm_password', 'Confirm password:',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {{ Form::password('confirm_password',['id'=>'confirm_password','class'=>'form-control']) }}
        </div>
        @error('confirm_password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('active', 'Active',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {!! Form::checkbox('active', 1, old('active'),['id'=>'active']) !!}
        </div>
        @error('active')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label('notification', 'Notification',['class'=>'col-lg-3 control-label']) }}
        <div class="col-lg-8">
            {!! Form::checkbox('notification', 1, old('notification'),['id'=>'notification']) !!}
        </div>
        @error('notification')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    @include('admin.section.event-button.index')
</div>

