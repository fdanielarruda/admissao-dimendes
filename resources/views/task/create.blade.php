@extends('template.layout')

@section('title_page', 'Nova Tarefa')

@section('content')
   <form method="POST" action="{{ isset($task) ? route('task.update', $task->id) : route('task.store') }}">
      @csrf

		{{-- EDIT METHOD --}}
		@if (isset($task))
			{{ method_field('PUT') }}
		@endif

      <div class="mb-3">
         <label for="title" class="form-label">Título da Tarefa</label>

         <input 
				type="text" 
				name="title" 
				id="title"
				class="form-control @error('title') is-invalid @enderror" 
				value="{{ old('title', isset($task) ? $task->title : '') }}" 
			/>

         @error('title')
            <div class="invalid-feedback">
					{{ $message }}
				</div>
         @enderror
      </div>

      <div class="mb-3">
         <label for="description" class="form-label">Descrição</label>

         <textarea 
				name="description" 
				id="description"
				class="form-control @error('description') is-invalid @enderror"
			>{{ old('description', isset($task) ? $task->description : '') }}</textarea>

         @error('description')
            <div class="invalid-feedback"> 
					{{ $message }} 
				</div>
         @enderror
      </div>

      <button type="submit" class="btn btn-primary">
         <i class="fas fa-fw fa-plus"></i>
         Salvar Tarefa
      </button>

		<a class="btn btn-danger" href="{{ route('task.index') }}">
         <i class="fas fa-fw fa-plus"></i>
         Cancelar
      </a>
   </form>
@endsection
