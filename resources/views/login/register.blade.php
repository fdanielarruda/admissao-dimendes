@extends('template.login')

@section('content')
   <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Crie sua conta!</h1>
   </div>

   <form method="POST" action="{{ route('store_user') }}" class="user">
      @csrf

      <div class="form-group">
         <input type="text" id="name" name="name" placeholder="Nome"
            class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}">

         @error('name')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
         @enderror
      </div>

      <div class="form-group">
         <input type="email" id="email" name="email" placeholder="Email"
            class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}">

         @error('email')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
         @enderror
      </div>

      <div class="form-group">
         <input type="password" id="password" name="password" placeholder="Senha"
            class="form-control form-control-user @error('password') is-invalid @enderror" value="{{ old('password') }}">

         @error('password')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
         @enderror
      </div>

      <button type="submit" class="btn btn-primary btn-user btn-block bg-primary mb-3">
         <span class="h6 font-weight-bold">Cadastre-se</span>
      </button>
   </form>

   <hr>

   <div class="text-center mt-3">
      <a href="{{ route('login') }}">Já possui uma conta? Faça login!</a>
   </div>
@endsection
