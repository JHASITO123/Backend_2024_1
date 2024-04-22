<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Role Id Field -->
<div class="col-sm-12">
    {!! Form::label('role_id', 'Rol de este usuarios:') !!}
    <p>
      <a href="../rols/{{ $user->role_id}}" class= 'btn btn-outline-info'> {{ $user->role->name }}</a>
    </p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $user->phone_number }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- TokenActual -->
<div class="col-sm-12">
    {!! Form::label('Token', 'Token:') !!}
    <p>{{ $user->remember_Token }}</p>
</div>

<!-- solicitar Token -->
<div class="col-sm-12">
    <form method="POST" action="{{ route('generate-token', $user) }}">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-primary">Generar Token</button>
    </form>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

<!-- Fotos con la misma descripción -->
<div class="col-sm-12">
@if ($user->photos->isNotEmpty())
    <h4>Fotos del usuario</h4>
    <ul>
        @foreach ($user->photos as  $photo)
        <li>
            <img src="{{asset($photo->url)}}" alt="" style="with: 20%;">
            <a href="{{route('photos.show', $photo->id)}}">{{ $photo-url }}</a>

        </li>
        @endforeach
    </ul>
    @else
    <p>El usuario no tiene fotos asociadas</p>
    @endif
</div>