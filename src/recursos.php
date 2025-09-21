<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recursos - UTEC</title>
  <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    :root{
      --ut-green-900:#0c4f2e;
      --ut-green-800:#12663a;
      --ut-green-700:#177a46;
      --ut-green-600:#1e8c51;
      --ut-green-500:#28a55f;
      --ut-green-100:#e6f6ed;
    }
    .resource-card:hover{
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0,0,0,.1), 0 10px 10px -5px rgba(0,0,0,.04);
    }
    .resource-category{
      position:absolute; top:1rem; right:1rem; padding:.25rem .5rem;
      border-radius:9999px; font-size:.75rem; font-weight:600;
    }
    .brand-link{ color:var(--ut-green-900); }
    .brand-link.active, .brand-link:hover{ border-color:var(--ut-green-600); color:var(--ut-green-700); }
  </style>
</head>
<body class="font-sans antialiased text-gray-800">

  <?php
    // Opcional: pasa la pestaña activa al navbar
    // $active = 'recursos';
    include 'navbar.php';
  ?>

  <!-- Hero -->
  <div class="text-white" style="background:linear-gradient(180deg, var(--ut-green-800), var(--ut-green-900))">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6" data-aos="fade-up">Recursos Académicos</h1>
        <p class="text-lg md:text-xl text-white/80 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
          Material complementario para potenciar tu aprendizaje
        </p>
      </div>
    </div>
  </div>

  <!-- Resources Section -->
  <div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Explora Nuestros Recursos</h2>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Biblioteca digital, webinars, guías y más</p>
      </div>

      <!-- Tabs -->
      <div class="mb-10" data-aos="fade-up">
        <div class="border-b border-gray-200">
          <nav class="-mb-px flex flex-wrap gap-6" id="tabs">
            <button data-filter="*" class="brand-link border-b-2 border-[var(--ut-green-600)] py-4 px-1 font-medium text-sm">Todos</button>
            <button data-filter="biblioteca" class="brand-link border-b-2 border-transparent py-4 px-1 font-medium text-sm">Biblioteca</button>
            <button data-filter="webinar" class="brand-link border-b-2 border-transparent py-4 px-1 font-medium text-sm">Webinars</button>
            <button data-filter="guia" class="brand-link border-b-2 border-transparent py-4 px-1 font-medium text-sm">Guías</button>
            <button data-filter="plantilla" class="brand-link border-b-2 border-transparent py-4 px-1 font-medium text-sm">Plantillas</button>
          </nav>
        </div>
      </div>

      <!-- Grid -->
      <div id="grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- 1 Guía -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-category="guia">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/13" alt="Guía de IA">
            <span class="resource-category bg-[var(--ut-green-100)] text-[var(--ut-green-700)]">Guía</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Guía Completa de Inteligencia Artificial</h3>
            <p class="text-gray-600 mb-4">Conceptos fundamentales, algoritmos y casos de uso prácticos.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="file-text" class="w-4 h-4 mr-1"></i><span>PDF, 120 páginas</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Descargar <i data-feather="download" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 2 Webinar -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-aos-delay="100" data-category="webinar">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/14" alt="Webinar Desarrollo Web">
            <span class="resource-category bg-purple-100 text-purple-800">Webinar</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Tendencias en Desarrollo Web 2023</h3>
            <p class="text-gray-600 mb-4">Tecnologías y metodologías más demandadas.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="video" class="w-4 h-4 mr-1"></i><span>2h 15min</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Ver ahora <i data-feather="play" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 3 Plantilla -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-aos-delay="200" data-category="plantilla">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/15" alt="Plantilla Proyecto">
            <span class="resource-category bg-green-100 text-green-800">Plantilla</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Plantilla para Gestión de Proyectos Ágiles</h3>
            <p class="text-gray-600 mb-4">Estructura para planificar, ejecutar y dar seguimiento.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="file" class="w-4 h-4 mr-1"></i><span>Excel, Notion</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Descargar <i data-feather="download" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 4 Biblioteca -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-category="biblioteca">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/16" alt="Libro Programación">
            <span class="resource-category bg-yellow-100 text-yellow-800">Biblioteca</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Fundamentos de Programación en Python</h3>
            <p class="text-gray-600 mb-4">Libro introductorio con ejercicios.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="book" class="w-4 h-4 mr-1"></i><span>ePub, PDF</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Acceder <i data-feather="external-link" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 5 Guía -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-aos-delay="100" data-category="guia">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/17" alt="Cheatsheet SQL">
            <span class="resource-category bg-[var(--ut-green-100)] text-[var(--ut-green-700)]">Guía</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Cheatsheet de Comandos SQL</h3>
            <p class="text-gray-600 mb-4">Resumen visual de los comandos más usados.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="file-text" class="w-4 h-4 mr-1"></i><span>PDF, 2 páginas</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Descargar <i data-feather="download" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 6 Webinar -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md resource-card transition relative"
             data-aos="fade-up" data-aos-delay="200" data-category="webinar">
          <div class="relative h-48 overflow-hidden">
            <img class="w-full h-full object-cover" src="http://static.photos/education/640x360/18" alt="Webinar Cloud">
            <span class="resource-category bg-purple-100 text-purple-800">Webinar</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Migración a la Nube: Mejores Prácticas</h3>
            <p class="text-gray-600 mb-4">Experiencias reales y lecciones aprendidas.</p>
            <div class="flex justify-between items-center">
              <div class="flex items-center text-sm text-gray-500">
                <i data-feather="video" class="w-4 h-4 mr-1"></i><span>1h 45min</span>
              </div>
              <a href="#" class="text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)] font-medium flex items-center">
                Ver ahora <i data-feather="play" class="w-4 h-4 ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Paginación (decorativa) -->
      <div class="mt-12 flex justify-center" data-aos="fade-up">
        <nav class="flex items-center space-x-2">
          <button class="px-3 py-1 rounded-md bg-[var(--ut-green-600)] text-white font-medium">&lt;</button>
          <button class="px-3 py-1 rounded-md bg-[var(--ut-green-600)] text-white font-medium">1</button>
          <button class="px-3 py-1 rounded-md bg-gray-200 text-gray-700 font-medium hover:bg-gray-300">2</button>
          <button class="px-3 py-1 rounded-md bg-gray-200 text-gray-700 font-medium hover:bg-gray-300">3</button>
          <button class="px-3 py-1 rounded-md bg-gray-200 text-gray-700 font-medium hover:bg-gray-300">&gt;</button>
        </nav>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
        <div class="mb-8 lg:mb-0" data-aos="fade-right">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Recibe nuevos recursos</h2>
          <p class="text-lg text-gray-600 mb-6">Suscríbete para recibir guías y webinars en tu correo.</p>
        </div>
        <div data-aos="fade-left">
          <form class="sm:flex">
            <input type="email" placeholder="Tu correo electrónico" class="w-full px-5 py-3 placeholder-gray-500 focus:ring-[var(--ut-green-600)] focus:border-[var(--ut-green-600)] sm:max-w-xs border-gray-300 rounded-md" required>
            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
              <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[var(--ut-green-600)]">
                Suscribirse
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <!-- Scripts -->
  <script>
    // AOS
    AOS.init({ duration:800, once:true });
    // Feather
    feather.replace();

    // Menú móvil: el botón y el contenedor viven en navbar.php
    const menuBtn = document.querySelector('nav button[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');
    if(menuBtn && mobileMenu){
      menuBtn.addEventListener('click', ()=>{
        const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
        menuBtn.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
      });
    }

    // Tabs (filtros)
    const tabs = document.querySelectorAll('#tabs [data-filter]');
    const cards = document.querySelectorAll('#grid [data-category]');
    tabs.forEach(tab=>{
      tab.addEventListener('click', ()=>{
        // estilos activos
        tabs.forEach(t=>{
          t.classList.remove('active');
          t.style.borderColor = 'transparent';
          t.style.color = 'var(--ut-green-900)';
        });
        tab.classList.add('active');
        tab.style.borderColor = 'var(--ut-green-600)';
        tab.style.color = 'var(--ut-green-700)';

        const filter = tab.getAttribute('data-filter');
        cards.forEach(card=>{
          const cat = card.getAttribute('data-category');
          const show = (filter === '*') || (filter === cat);
          card.classList.toggle('hidden', !show);
        });
      });
    });
  </script>
</body>
</html>
