<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - UTEC</title>
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
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .category-filter {
            transition: all 0.3s ease;
        }
        .category-filter:hover {
            background-color: var(--ut-green-600);
            color: white;
        }
        .category-filter.active {
            background-color: var(--ut-green-700);
            color: white;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">

    <?php include 'navbar.php'; ?>

    <!-- Courses Header -->
    <div style="background:linear-gradient(180deg,var(--ut-green-800),var(--ut-green-900));" class="text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight mb-4" data-aos="fade-up">Nuestros Cursos</h1>
            <p class="text-xl text-emerald-100 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Explora nuestra amplia oferta académica diseñada para impulsar tu carrera profesional
            </p>
        </div>
    </div>

    <!-- Courses Filter -->
    <div class="bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-semibold text-gray-900">Filtrar por categoría</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    <button class="category-filter active px-4 py-2 rounded-full text-sm font-medium bg-[var(--ut-green-100)] text-[var(--ut-green-800)]">Todos</button>
                    <button class="category-filter px-4 py-2 rounded-full text-sm font-medium bg-gray-200 text-gray-800">Tecnología</button>
                    <button class="category-filter px-4 py-2 rounded-full text-sm font-medium bg-gray-200 text-gray-800">Ingeniería</button>
                    <button class="category-filter px-4 py-2 rounded-full text-sm font-medium bg-gray-200 text-gray-800">Negocios</button>
                    <button class="category-filter px-4 py-2 rounded-full text-sm font-medium bg-gray-200 text-gray-800">Diseño</button>
                    <button class="category-filter px-4 py-2 rounded-full text-sm font-medium bg-gray-200 text-gray-800">Ciencias</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Grid -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Aquí siguen tus tarjetas de cursos (sin cambios) -->
                <!-- ... -->
            </div>
            <div class="mt-12 flex justify-center" data-aos="fade-up">
                <button class="bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] text-white px-6 py-3 rounded-md text-lg font-semibold transition duration-150 ease-in-out">
                    Cargar más cursos
                </button>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md p-8 md:p-12" data-aos="fade-up">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                    <div class="mb-8 lg:mb-0">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">¿Quieres recibir nuestras novedades?</h2>
                        <p class="text-gray-600">Suscríbete a nuestro boletín y recibe información sobre nuevos cursos, descuentos y eventos académicos.</p>
                    </div>
                    <div>
                        <form class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Tu correo electrónico" class="flex-grow px-4 py-3 border border-gray-300 rounded-md focus:ring-[var(--ut-green-600)] focus:border-[var(--ut-green-600)]">
                            <button type="submit" class="bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] text-white px-6 py-3 rounded-md text-sm font-semibold transition duration-150 ease-in-out whitespace-nowrap">Suscribirse</button>
                        </form>
                        <p class="mt-3 text-xs text-gray-500">
                            Nos preocupamos por la protección de tus datos. Lee nuestra 
                            <a href="#" class="text-[var(--ut-green-700)] hover:underline">Política de Privacidad</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.querySelector('[aria-controls="mobile-menu"]').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        feather.replace();

        const filterButtons = document.querySelectorAll('.category-filter');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
