@extends('template.login')

@section('content')
   <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Seja Bem-Vindo(a)!</h1>
   </div>

   <form method="POST" action="{{ route('auth') }}" class="user">
      @csrf

      <div class="form-group">
         <input type="email" required class="form-control form-control-user" id="email" name="email" placeholder="Email...">
      </div>

      <div class="form-group">
         <input type="password" required class="form-control form-control-user" id="password" name="password" placeholder="Senha...">
      </div>

      <button type="submit" class="btn btn-primary btn-user btn-block bg-primary mb-3">
         <span class="h6 font-weight-bold">Login</span>
      </button>
   </form>

   <hr>
   
   <div class="text-center mt-3">
      <a href="{{ route('register') }}">Crie uma conta!</a>
   </div>
@endsection
