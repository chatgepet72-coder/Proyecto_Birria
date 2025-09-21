<?php $u = Auth::user(); ?>
<aside class="w-64 shrink-0 p-4 space-y-1">
  <a class="menu-item" href="/src/plataforma/app"> Panel</a>
  <a class="menu-item" href="/src/plataforma/app/materias"> Materias</a>
  <a class="menu-item" href="/src/plataforma/app/horario"> Horario</a>
  <a class="menu-item" href="/src/plataforma/app/calificaciones"> Calificaciones</a>
  <a class="menu-item" href="/src/plataforma/app/encuestas"> Encuestas</a>
  <a class="menu-item" href="/src/plataforma/app/becas"> Becas</a>
  <a class="menu-item" href="/src/plataforma/app/anuncios"> Anuncios</a>
  <?php if (Gate::any(['maestro','admin'])): ?>
    <div class="mt-4 text-xs uppercase tracking-wider text-slate-500">Gestión</div>
    <?php if (Gate::is('maestro')): ?><a class="menu-item" href="/src/plataforma/app/materias?mine=1"> Mis cursos</a><?php endif; ?>
    <?php if (Gate::is('admin')):   ?><a class="menu-item" href="/src/plataforma/app/admin"> Administración</a><?php endif; ?>
  <?php endif; ?>
</aside>
<style>
.menu-item{display:block;padding:.6rem .8rem;border-radius:.6rem}
.menu-item:hover{background:rgba(15,23,42,.06)} .dark .menu-item:hover{background:rgba(255,255,255,.06)}
</style>
