<script>
  import { user } from '../_stores/userStore'
  import { onMount } from 'svelte';
  
  async function fetchData(uri) {
    const res = await fetch('http://localhost/construcciones-escolares-svelte/back/get-users.php');
    const data = await res.json();
    if (res.ok) {
      return data;
    } else {
      throw new Error(data);
    }
  }

  let prodFetch = fetchData();

  const updateUsuario = async (id, name) => {
    const updateRoute = `http://localhost/construcciones-escolares-svelte/back/update-user-name.php?id=${id}`;
    const data = new FormData();
    data.append('nombre', name);
    let res = await fetch(updateRoute, {
      method: "POST",
      body: data
    })
  }
</script>

{#await prodFetch}
  <p class="font-bold text-2xl">Cargando...</p>
{:then usuarios}
  <p>LISTA</p>
  {#each usuarios as usuario}
     <p class="mb-3"><input type="text" bind:value={usuario.UserUsuario} on:change={()=>updateUsuario(usuario.UserID, usuario.UserUsuario)}></p>
     <p>{usuario.UserID}</p>
  {/each}
{/await}