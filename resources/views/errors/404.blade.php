@extends('template.login')

@section('content')
   <div class="text-center">
      <a href="{{ route('task.index') }}">
         <h3 class="mb-3">Página não encontrada! <b>Clique para voltar ao site.</b></h3>
      </a>
      <img src="{{ asset('images/notfound.webp') }}" style="max-width: 100%; max-height: 100%;">
   </div>
@endsection
