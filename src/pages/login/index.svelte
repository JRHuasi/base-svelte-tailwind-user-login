<script>
  import { user } from '../_stores/userStore'
  import { goto } from '@roxi/routify'
  import Fa from 'svelte-fa'
  import { faUser } from '@fortawesome/free-solid-svg-icons'

  import Arroba from '../_components/svg/Arroba.svelte'
  import Entrar from '../_components/svg/Entrar.svelte'
  import Candado from '../_components/svg/Candado.svelte'

  let usuario = [{nombre: '', clave: ''}];
  
  const login = async () => {
    const url = 'http://localhost/construcciones-escolares-svelte/back/login.php';
    const datos =  new FormData();
    datos.append('nombre', usuario.nombre);
    datos.append('clave', usuario.clave);
    const res = await fetch(url, {
      method: 'POST',
      body: datos
    }).then(response => {
      return response.json();
    }).then((datos) => {
      localStorage.setItem("usuario", JSON.stringify(datos))
      $user.nombre = datos.UserNombre;
      $user.apellido = datos.UserApellido;
      $user.usuario = datos.UserUsuario;
      $user.tipo = datos.UserTipo;
      $user.ip = datos.UserUltimoAcceso;
      $goto('/')
    });
  }

  // let prodFetch = fetchData(produri)
</script>

<!-- component -->
<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
<p>Está hecho hasta el login´con una base MySQL</p>
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
  <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-lg w-full max-w-md">
    <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">Construcciones Escolares</div>
    <div class="relative mt-10 h-px bg-gray-300">
      <div class="absolute left-0 top-0 flex justify-center w-full -mt-2">
        <span class="bg-white px-4 text-xs text-gray-500 uppercase">Ingrese su usuario y contraseña</span>
      </div>
    </div>
    <div class="mt-10">
      <form on:submit|preventDefault={login}>
        <!-- <form> -->
        <div class="flex flex-col mb-6">
          <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Nombre de Usuario:</label>
          <div class="relative">
            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
              <span>
                <Arroba />
              </span>              
            </div>
           
            <input type="nombre" name="nombre" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Usuario" bind:value={usuario.nombre} />
          </div>
        </div>
        <div class="flex flex-col mb-6">
          <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Contraseña:</label>
          <div class="relative">
            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
              <span>
                <Candado />
              </span>
            </div>

            <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Contraseña" bind:value={usuario.clave}/>
          </div>
        </div>

        <div class="flex items-center mb-6 -mt-4">
          <div class="flex ml-auto">
            <a href="." class="inline-flex text-xs sm:text-sm text-blue-500 hover:text-blue-700">¿Olvidó la clave?</a>
          </div>
        </div>

        <div class="flex w-full">
          <button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
            <span class="mr-2 uppercase">Entrar</span>
            <span>
              <Entrar />
            </span>
          </button>
        </div>
      </form>
    </div>
    <div class="flex justify-center items-center mt-6">
      <a href="." target="_blank" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">
        <span>
          <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
          </svg>
        </span>
        <span class="ml-2">You don't have an account?</span>
      </a>
    </div>
  </div>
</div>
