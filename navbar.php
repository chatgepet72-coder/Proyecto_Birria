<!-- Navbar -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0 flex items-center">
          <img class="h-10 w-auto" src="http://static.photos/education/200x200/1" alt="UTEC Logo">
          <span class="ml-2 text-xl font-bold" style="color:var(--ut-green-900)">UTEC</span>
        </div>
        <div class="hidden md:ml-10 md:flex md:space-x-8">
          <a href="index.php" class="border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Inicio</a>
          <a href="cursos.php" class="border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Cursos</a>
          <a href="docentes.php" class="border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Docentes</a>
          <a href="recursos.php" class="border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Recursos</a>
        </div>
      </div>
      <div class="hidden md:ml-6 md:flex md:items-center">
        <a href="login.html"
           class="bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
           Iniciar Sesión
        </a>
      </div>
      <div class="-mr-2 flex items-center md:hidden">
        <button type="button" aria-controls="mobile-menu" aria-expanded="false"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[var(--ut-green-600)]">
          <i data-feather="menu"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="md:hidden hidden" id="mobile-menu">
    <div class="pt-2 pb-3 space-y-1">
      <a href="index.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-700 hover:bg-gray-50">Inicio</a>
      <a href="cursos.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-700 hover:bg-gray-50">Cursos</a>
      <a href="docentes.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-700 hover:bg-gray-50">Docentes</a>
      <a href="recursos.html" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-700 hover:bg-gray-50">Recursos</a>
      <div class="pt-4 pb-3 border-t border-gray-200 px-3">
        <a href="login.html" class="w-full inline-block text-center bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] text-white px-4 py-2 rounded-md text-sm font-medium transition">Iniciar Sesión</a>
      </div>
    </div>
  </div>
</nav>
