<?php
  // Si se está renderizando dentro de index.php, no repetir navbar/footer
  $__is_embedded = isset($_SERVER['SCRIPT_NAME']) && basename($_SERVER['SCRIPT_NAME']) === 'index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes - UTEC</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        :root{
          --ut-green-900:#0c4f2e;
          --ut-green-800:#12663a;
          --ut-green-700:#177a46;
          --ut-green-600:#1e8c51;
          --ut-green-100:#e6f6ed;
        }
        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .specialty-chip {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* ====== NUEVO: Tarjeta con mayor contraste, similar a Cursos ====== */
        .docente-card{
          background-color:#ffffff;               /* light */
          border-radius: .75rem;
          box-shadow: 0 10px 22px -10px rgba(0,0,0,.2);
          transition: transform .18s ease, box-shadow .22s ease, background-color .2s ease, border-color .2s ease;
          border: 1px solid rgba(0,0,0,.06);
        }
        .docente-card:hover{
          transform: translateY(-4px);
          box-shadow: 0 18px 28px -12px rgba(0,0,0,.28);
        }

        /* Modo oscuro: más contraste contra el fondo */
        body.dark .docente-card{
          background-color:#1f2937;              /* zinc-800 aprox */
          border-color: rgba(255,255,255,.06);
          box-shadow: 0 10px 24px -12px rgba(0,0,0,.6);
        }
        body.dark .docente-card:hover{
          box-shadow: 0 20px 30px -12px rgba(0,0,0,.75);
        }

        /* Chips legibles en dark */
        body.dark .specialty-chip.bg-\[var\(--ut-green-100\)\]{
          background-color:#064e3b !important;   /* emerald-900 */
          color:#86efac !important;              /* emerald-300 */
        }
        body.dark .specialty-chip.bg-green-100{ background-color:#064e3b !important; color:#86efac !important; }
        body.dark .specialty-chip.bg-purple-100{ background-color:#312e81 !important; color:#c7d2fe !important; }
        body.dark .specialty-chip.bg-yellow-100{ background-color:#78350f !important; color:#fde68a !important; }

        /* Botón "Ver cursos" coherente en dark */
        .btn-docente{
          background:#f3f4f6; color:#111827;
          border-radius:.5rem; font-weight:600;
          transition: background-color .15s ease, color .15s ease, box-shadow .2s ease, transform .15s ease;
          box-shadow: 0 4px 10px -6px rgba(0,0,0,.2);
        }
        .btn-docente:hover{ background:#e5e7eb; transform: translateY(-1px); }
        body.dark .btn-docente{ background:#374151; color:#e5e7eb; box-shadow: 0 6px 16px -10px rgba(0,0,0,.6); }
        body.dark .btn-docente:hover{ background:#4b5563; }

        /* Secciones claras del archivo cuando se usa standalone */
        body.dark .bg-white{ background-color:#111827 !important; }
        body.dark .text-gray-900{ color:#f3f4f6 !important; }
        body.dark .text-gray-600{ color:#d1d5db !important; }
        body.dark .text-gray-500{ color:#9ca3af !important; }

        
    </style>
</head>
<body class="font-sans antialiased text-gray-800">

    <?php if (!$__is_embedded) include 'navbar.php'; ?>

    <!-- Hero Section -->
    <div style="background:linear-gradient(180deg,var(--ut-green-800),var(--ut-green-900));" class="text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6" data-aos="fade-up">Nuestros Docentes</h1>
                <p class="text-lg md:text-xl text-emerald-100 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Conoce a nuestro equipo de profesionales expertos en sus áreas de conocimiento.
                </p>
            </div>
        </div>
    </div>

    <!-- Teachers Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Cuerpo Docente</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Profesionales con amplia experiencia académica y laboral</p>
            </div>

            <!-- Teachers Filter -->
            <div class="mb-12 flex justify-center" data-aos="fade-up">
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-[var(--ut-green-800)] bg-[var(--ut-green-100)] rounded-l-lg border border-[var(--ut-green-100)] hover:bg-white focus:z-10 focus:ring-2 focus:ring-[var(--ut-green-600)] focus:bg-white active">Todos</button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-[var(--ut-green-600)] focus:text-[var(--ut-green-800)]">Tecnología</button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-[var(--ut-green-600)] focus:text-[var(--ut-green-800)]">Ingeniería</button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-[var(--ut-green-600)] focus:text-[var(--ut-green-800)]">Negocios</button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-[var(--ut-green-600)] focus:text-[var(--ut-green-800)]">Ciencias</button>
                </div>
            </div>

            <!-- Teachers Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Teacher 1 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/4" alt="Dr. Javier López">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Dr. Javier López</h3>
                                <p class="text-[var(--ut-green-700)]">Inteligencia Artificial</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">PhD en Ciencias de la Computación con 15 años de experiencia en investigación y desarrollo de sistemas de IA.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">Machine Learning</span>
                            <span class="specialty-chip bg-green-100 text-green-800">Deep Learning</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">Visión por Computador</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>

                <!-- Teacher 2 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/5" alt="Ing. María Fernández">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Ing. María Fernández</h3>
                                <p class="text-[var(--ut-green-700)]">Desarrollo de Software</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Ingeniera en Sistemas con 10 años de experiencia en desarrollo web full stack y arquitectura de software.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">JavaScript</span>
                            <span class="specialty-chip bg-green-100 text-green-800">React</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">Node.js</span>
                            <span class="specialty-chip bg-yellow-100 text-yellow-800">AWS</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>

                <!-- Teacher 3 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/6" alt="Dr. Carlos Ruiz">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Dr. Carlos Ruiz</h3>
                                <p class="text-[var(--ut-green-700)]">Ciberseguridad</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Experto en seguridad informática con certificaciones CISSP y CEH. Consultor para empresas Fortune 500.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">Ethical Hacking</span>
                            <span class="specialty-chip bg-green-100 text-green-800">Pentesting</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">Forensia Digital</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>

                <!-- Teacher 4 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/7" alt="MSc. Laura Gómez">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">MSc. Laura Gómez</h3>
                                <p class="text-[var(--ut-green-700)]">Data Science</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Científica de datos con experiencia en análisis predictivo y machine learning aplicado a negocios.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">Python</span>
                            <span class="specialty-chip bg-green-100 text-green-800">Pandas</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">TensorFlow</span>
                            <span class="specialty-chip bg-yellow-100 text-yellow-800">SQL</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>

                <!-- Teacher 5 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/8" alt="Ing. Roberto Sánchez">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Ing. Roberto Sánchez</h3>
                                <p class="text-[var(--ut-green-700)]">Cloud Computing</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Especialista en arquitecturas cloud con certificaciones AWS, Azure y Google Cloud.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">AWS</span>
                            <span class="specialty-chip bg-green-100 text-green-800">Azure</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">DevOps</span>
                            <span class="specialty-chip bg-yellow-100 text-yellow-800">Kubernetes</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>

                <!-- Teacher 6 -->
                <div class="docente-card teacher-card overflow-hidden transition duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-16 h-16 rounded-full object-cover" src="http://static.photos/people/200x200/9" alt="Dra. Ana Torres">
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900">Dra. Ana Torres</h3>
                                <p class="text-[var(--ut-green-700)]">Blockchain</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Investigadora en tecnologías distribuidas y contratos inteligentes. PhD en Criptografía.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="specialty-chip bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">Ethereum</span>
                            <span class="specialty-chip bg-green-100 text-green-800">Solidity</span>
                            <span class="specialty-chip bg-purple-100 text-purple-800">Smart Contracts</span>
                        </div>
                        <button class="w-full btn-docente py-2 px-4 flex items-center justify-center">
                            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> Ver cursos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Nuestros Docentes en Números</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Calidad académica respaldada por datos</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center bg-white p-8 rounded-lg shadow-sm" data-aos="fade-up">
                    <div class="text-5xl font-bold text-[var(--ut-green-700)] mb-2">98%</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Evaluación Positiva</h3>
                    <p class="text-gray-500">De nuestros estudiantes recomiendan a nuestros docentes</p>
                </div>
                <div class="text-center bg-white p-8 rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl font-bold text-[var(--ut-green-700)] mb-2">15+</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Años de Experiencia</h3>
                    <p class="text-gray-500">Promedio de experiencia profesional de nuestro equipo</p>
                </div>
                <div class="text-center bg-white p-8 rounded-lg shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl font-bold text-[var(--ut-green-700)] mb-2">50+</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Certificaciones</h3>
                    <p class="text-gray-500">Entre nuestro cuerpo docente en tecnologías líderes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div style="background:linear-gradient(180deg,var(--ut-green-800),var(--ut-green-900));" class="text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl mb-6" data-aos="fade-up">¿Quieres unirte a nuestro equipo docente?</h2>
                <p class="text-lg text-emerald-100 max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">Buscamos profesionales apasionados por la enseñanza y la tecnología.</p>
                <button class="bg-white text-[var(--ut-green-800)] hover:bg-gray-100 px-6 py-3 rounded-md text-lg font-semibold transition duration-150 ease-in-out" data-aos="fade-up" data-aos-delay="200">Enviar solicitud</button>
            </div>
        </div>
    </div>

    <?php if (!$__is_embedded) include 'footer.php'; ?>

    <script>
        // Animaciones e iconos
        AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
        feather.replace();
    </script>
</body>
</html>
