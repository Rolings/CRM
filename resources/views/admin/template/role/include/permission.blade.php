<section id="flip-scroll">
    <table class="table table-bordered table-striped cf">
        <thead class="cf">
        <tr>
            <th class="numeric">Названия</th>
            <th class="numeric">Guard</th>
            <th class="numeric"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($permissions as $permission)
            <tr>
                <td class="numeric">{{ $permission->route }}</td>
                <td class="numeric">
                    {{ $guardName[$permission->guard_name] }}
                </td>
                <td class="numeric">
                    <div class="pull-right">
                        {!! Form::checkbox('permission[]', $permission->id, isset($model)?$model->permissions->find($permission->id):null,['id'=>$permission->id]) !!}
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
</section>
@include('admin.section.event-button.index')