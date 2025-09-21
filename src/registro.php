<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear cuenta — UTEC</title>
  <link rel="icon" type="image/x-icon" href="/static/favicon.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    :root{
      --ut-green-900:#0c4f2e; --ut-green-800:#12663a; --ut-green-700:#177a46;
      --ut-green-600:#1e8c51; --ut-green-500:#28a55f; --ut-green-100:#e6f6ed;
    }
    .bg-ut{ background: linear-gradient(180deg, var(--ut-green-800), var(--ut-green-900)); }
  </style>
</head>
<body class="min-h-screen bg-ut text-white">
  <div class="max-w-6xl mx-auto px-4 py-10 md:py-16">
    <header class="flex items-center gap-3 mb-10">
      <a href="index.html" class="inline-flex items-center gap-3">
        <img src="http://static.photos/education/200x200/1" alt="UTEC" class="w-12 h-12 rounded-sm ring-2 ring-white/20" />
        <div>
          <h1 class="text-2xl font-extrabold tracking-tight">UTEC</h1>
          <p class="text-white/70 text-sm -mt-1">saber hacer para competir</p>
        </div>
      </a>
    </header>

    <div class="grid lg:grid-cols-2 gap-8 items-stretch">
      <section class="hidden lg:block"></section>

      <section class="rounded-2xl bg-white text-gray-800 p-6 sm:p-8 lg:p-10 shadow-xl">
        <div class="mb-6">
          <h2 class="text-2xl font-bold text-[var(--ut-green-800)]">Crear cuenta</h2>
          <p class="text-sm text-gray-500">Regístrate con tu correo institucional</p>
        </div>

        <form id="regForm" action="/auth/registro" method="post" novalidate class="space-y-5">
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700" for="nombre">Nombre</label>
              <input id="nombre" name="nombre" type="text" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[var(--ut-green-600)] focus:ring-[var(--ut-green-600)]"/>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700" for="apellido">Apellido</label>
              <input id="apellido" name="apellido" type="text" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[var(--ut-green-600)] focus:ring-[var(--ut-green-600)]"/>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700" for="email">Correo institucional</label>
            <input id="email" name="email" type="email" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[var(--ut-green-600)] focus:ring-[var(--ut-green-600)]" placeholder="nombre.apellido@utec.edu"/>
            <p id="emailErr" class="mt-1 text-sm text-red-600 hidden">Ingresa un correo válido.</p>
          </div>

          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700" for="pass">Contraseña</label>
              <input id="pass" name="pass" type="password" minlength="6" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[var(--ut-green-600)] focus:ring-[var(--ut-green-600)]" placeholder="Mínimo 6 caracteres"/>
              <p id="passErr" class="mt-1 text-sm text-red-600 hidden">Mínimo 6 caracteres.</p>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700" for="pass2">Repetir contraseña</label>
              <input id="pass2" name="pass2" type="password" minlength="6" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-[var(--ut-green-600)] focus:ring-[var(--ut-green-600)]"/>
              <p id="pass2Err" class="mt-1 text-sm text-red-600 hidden">Las contraseñas no coinciden.</p>
            </div>
          </div>

          <button type="submit" class="w-full inline-flex items-center justify-center gap-2 rounded-lg px-4 py-3 font-semibold text-white bg-[var(--ut-green-600)] hover:bg-[var(--ut-green-700)] focus:ring-2 focus:ring-offset-2 focus:ring-[var(--ut-green-500)]">
            <i data-feather="user-plus" class="w-5 h-5"></i> Registrarme
          </button>

          <p class="text-sm text-gray-600 text-center">
            ¿Ya tienes cuenta? <a href="login.html" class="font-semibold text-[var(--ut-green-700)] hover:text-[var(--ut-green-900)]">Iniciar sesión</a>
          </p>
        </form>
      </section>
    </div>
  </div>

  <script>
    feather.replace();
    const form = document.getElementById('regForm');
    form.addEventListener('submit', (e)=>{
      const email = document.getElementById('email');
      const p1 = document.getElementById('pass');
      const p2 = document.getElementById('pass2');
      let ok = true;

      document.getElementById('emailErr').classList.add('hidden');
      document.getElementById('passErr').classList.add('hidden');
      document.getElementById('pass2Err').classList.add('hidden');

      if(!/^\S+@\S+\.\S+$/.test(email.value)){ document.getElementById('emailErr').classList.remove('hidden'); ok=false; }
      if(!p1.value || p1.value.length<6){ document.getElementById('passErr').classList.remove('hidden'); ok=false; }
      if(p1.value !== p2.value){ document.getElementById('pass2Err').classList.remove('hidden'); ok=false; }

      if(!ok) e.preventDefault();
    });
  </script>
</body>
</html>
