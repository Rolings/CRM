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
                        {!! Form::checkbox('name', 'value', true,['id'=>$permission->id]) !!}
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
</section>