@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Bienvenido!</h1>
    </div>

    <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card d-inline-block" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/1875/1875690.png" alt="Roles Icon">
        <div class="card-body">
          <a href="{{ route('rols.index') }}" class="btn btn-success btn-lg {{ Request::is('rols*') ? 'active' : '' }}">
            ROLES
          </a>
          <p class="card-text">Administrar Roles existentes</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card d-inline-block" style="width: 18rem;">
        <img class="card-img-top" src="https://dighital.com/wp-content/uploads/2020/09/AvatarUsersIcons-_-Shop-2-1.png" alt="Roles Icon">
        <div class="card-body">
          <a href="{{ route('users.index') }}" class="btn btn-success btn-lg {{ Request::is('users*') ? 'active' : '' }}">
            USUARIOS
          </a>
          <p class="card-text">Administrar Usuarios existentes</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card d-inline-block" style="width: 18rem;">
        <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/005/747/906/non_2x/info-icon-template-information-icon-colorful-free-vector.jpg" alt="Roles Icon">
        <div class="card-body">
          <a href="{{ route('photosDetails.index') }}" class="btn btn-success btn-lg {{ Request::is('rols*') ? 'active' : '' }}">
          INFO DE FOTOS
          </a>
          <p class="card-text">Administrar info fotos existentes</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card d-inline-block" style="width: 18rem;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLMzktwJntgio0Y3J-YiJBowm4q33tZJ4kTY4d6P-IwQ&s" alt="Roles Icon">
        <div class="card-body">
          <a href="{{ route('photos.index') }}" class="btn btn-success btn-lg {{ Request::is('users*') ? 'active' : '' }}">
            FOTOS
          </a>
          <p class="card-text">Administrar fotos existentes</p>
        </div>
      </div>
    </div>
  </div>
</div>
      




@endsection
