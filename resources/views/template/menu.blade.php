<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('task.index') }}">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Dimendes</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <li class="nav-item">
      <a class="nav-link" href="{{ route('task.index') }}">
         <i class="fas fa-fw fa-tasks"></i>
         <span>Tarefas</span></a>
   </li>

	<li class="nav-item">
      <a class="nav-link" href="{{ route('task.create') }}">
         <i class="fas fa-fw fa-plus"></i>
         <span>Nova Tarefa</span></a>
   </li>
   
	<li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
         <i class="fas fa-fw fa-arrow-left"></i>
         <span>Sair</span></a>
   </li>

   <hr class="sidebar-divider d-none d-md-block">

   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
</ul>
