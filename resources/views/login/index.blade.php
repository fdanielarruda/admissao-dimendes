@extends('template.login')

@section('content')
   <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Seja Bem-Vindo!</h1>
   </div>

   <form method="POST" action="{{ route('auth') }}" class="user">
      @csrf

      <div class="form-group">
         <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email...">
      </div>

      <div class="form-group">
         <input type="password" class="form-control form-control-user" id="password" name="password"
            placeholder="Senha...">
      </div>

      <button type="submit" class="btn btn-primary btn-user btn-block">
         Login
      </button>
   </form>

   <hr>
   
   <div class="text-center">
      <a class="small" href="{{ route('register') }}">Crie uma conta!</a>
   </div>
@endsection
