<?php
/** @var array|null $user */
$user = $user ?? ($_SESSION['user'] ?? ['name'=>'Profesor']);
?>
<!-- Bienvenida -->
<div class="bg-gradient-to-r from-primary-500 to-primary-700 rounded-xl p-6 text-white mb-6" data-aos="fade-up">
  <h2 class="text-2xl font-bold mb-1">¡Bienvenido, <?= htmlspecialchars($user['name'] ?? 'Profesor') ?>!</h2>
  <p class="opacity-90">Administra tus clases, estudiantes y calificaciones desde aquí.</p>
</div>

<!-- KPIs -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
  <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border-l-4 border-primary-500" data-aos="fade-up">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-neutral-500 dark:text-neutral-400 text-sm">Clases asignadas</p>
        <h3 class="text-2xl font-bold mt-1">4</h3>
      </div>
      <div class="p-3 rounded-lg bg-primary-50 dark:bg-neutral-700">
        <i data-feather="book" class="text-primary-600"></i>
      </div>
    </div>
  </div>

  <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border-l-4 border-emerald-500" data-aos="fade-up" data-aos-delay="50">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-neutral-500 dark:text-neutral-400 text-sm">Estudiantes totales</p>
        <h3 class="text-2xl font-bold mt-1">87</h3>
      </div>
      <div class="p-3 rounded-lg bg-emerald-50 dark:bg-neutral-700">
        <i data-feather="users" class="text-emerald-600"></i>
      </div>
    </div>
  </div>

  <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border-l-4 border-amber-500" data-aos="fade-up" data-aos-delay="100">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-neutral-500 dark:text-neutral-400 text-sm">Tareas por revisar</p>
        <h3 class="text-2xl font-bold mt-1">24</h3>
      </div>
      <div class="p-3 rounded-lg bg-amber-50 dark:bg-neutral-700">
        <i data-feather="clipboard" class="text-amber-600"></i>
      </div>
    </div>
  </div>

  <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border-l-4 border-purple-500" data-aos="fade-up" data-aos-delay="150">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-neutral-500 dark:text-neutral-400 text-sm">Próxima clase</p>
        <h3 class="text-2xl font-bold mt-1">9:00 AM</h3>
      </div>
      <div class="p-3 rounded-lg bg-purple-50 dark:bg-neutral-700">
        <i data-feather="clock" class="text-purple-600"></i>
      </div>
    </div>
  </div>
</div>

<!-- Dos columnas: Próximas clases / Tareas por revisar -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
  <section class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-xl font-bold">Próximas clases</h2>
      <a href="/src/plataforma/app/maestro/horario" class="text-primary-700 dark:text-primary-300 text-sm">Ver horario</a>
    </div>

    <div class="space-y-4">
      <div class="flex items-center justify-between p-3 border border-neutral-100 dark:border-neutral-700 rounded-lg">
        <div class="flex items-center gap-3">
          <div class="p-2 rounded-lg bg-rose-50 dark:bg-neutral-700"><i data-feather="book" class="text-rose-600"></i></div>
          <div>
            <h3 class="font-medium">Matemáticas Avanzadas</h3>
            <p class="text-sm text-neutral-500 dark:text-neutral-400">Aula 302 — 9:00–11:00</p>
          </div>
        </div>
        <a href="#" class="p-2 rounded-full hover:bg-neutral-100 dark:hover:bg-neutral-700">
          <i data-feather="chevron-right" class="text-neutral-400"></i>
        </a>
      </div>

      <div class="flex items-center justify-between p-3 border border-neutral-100 dark:border-neutral-700 rounded-lg">
        <div class="flex items-center gap-3">
          <div class="p-2 rounded-lg bg-purple-50 dark:bg-neutral-700"><i data-feather="book" class="text-purple-600"></i></div>
          <div>
            <h3 class="font-medium">Física Moderna</h3>
            <p class="text-sm text-neutral-500 dark:text-neutral-400">Aula 205 — 14:00–16:00</p>
          </div>
        </div>
        <a href="#" class="p-2 rounded-full hover:bg-neutral-100 dark:hover:bg-neutral-700">
          <i data-feather="chevron-right" class="text-neutral-400"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-xl font-bold">Tareas por revisar</h2>
      <a href="/src/plataforma/app/maestro/calificar" class="text-primary-700 dark:text-primary-300 text-sm">Ver todas</a>
    </div>

    <div class="space-y-4">
      <div class="flex items-start justify-between p-3 border border-neutral-100 dark:border-neutral-700 rounded-lg">
        <div class="flex items-start gap-3">
          <div class="p-2 rounded-lg bg-amber-50 dark:bg-neutral-700 mt-1"><i data-feather="clipboard" class="text-amber-600"></i></div>
          <div>
            <h3 class="font-medium">Proyecto de Física</h3>
            <p class="text-sm text-neutral-500 dark:text-neutral-400">Entrega: 15 de marzo</p>
            <div class="flex items-center gap-2 mt-2">
              <div class="w-full bg-neutral-200 dark:bg-neutral-700 rounded-full h-1.5">
                <div class="bg-amber-500 h-1.5 rounded-full" style="width:24%"></div>
              </div>
              <span class="text-xs text-neutral-500 dark:text-neutral-400">24/87</span>
            </div>
          </div>
        </div>
        <a href="#" class="p-2 rounded-full hover:bg-neutral-100 dark:hover:bg-neutral-700">
          <i data-feather="chevron-right" class="text-neutral-400"></i>
        </a>
      </div>

      <div class="flex items-start justify-between p-3 border border-neutral-100 dark:border-neutral-700 rounded-lg">
        <div class="flex items-start gap-3">
          <div class="p-2 rounded-lg bg-primary-50 dark:bg-neutral-700 mt-1"><i data-feather="clipboard" class="text-primary-600"></i></div>
          <div>
            <h3 class="font-medium">Examen parcial</h3>
            <p class="text-sm text-neutral-500 dark:text-neutral-400">Entrega: 10 de marzo</p>
            <div class="flex items-center gap-2 mt-2">
              <div class="w-full bg-neutral-200 dark:bg-neutral-700 rounded-full h-1.5">
                <div class="bg-primary-500 h-1.5 rounded-full" style="width:87%"></div>
              </div>
              <span class="text-xs text-neutral-500 dark:text-neutral-400">76/87</span>
            </div>
          </div>
        </div>
        <a href="#" class="p-2 rounded-full hover:bg-neutral-100 dark:hover:bg-neutral-700">
          <i data-feather="chevron-right" class="text-neutral-400"></i>
        </a>
      </div>
    </div>
  </section>
</div>
