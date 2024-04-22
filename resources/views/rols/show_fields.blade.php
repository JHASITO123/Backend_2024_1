<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre del Rol:') !!}
    <p>{{ $rol->name }}</p>

<!-- Name Field -->
<div class="col-sm-12">
    <!-- Usuarios con este Rol -->
@if ($rol->users->isNotEmpty())
    <h4>Usuarios con este Rol</h4>
    <ul>
        @foreach ($rol->users as $users)
            <li><a href="../users/{{ $users->id }}">{{ $users->name}}</a> 
            </li>
            @endforeach
    </ul>
    @else
        <p>No hay usuarios con este Rol</p>
    @endif
</div>

