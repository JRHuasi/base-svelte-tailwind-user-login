<script>
	import { user } from './_stores/userStore'
    import { goto } from '@roxi/routify'


    if(localStorage.getItem('usuario')){
      user.setUser(JSON.parse(localStorage.getItem('usuario')));
    }
    if(!$user) $goto('/login')
    console.log($user);

</script>

<h1 class="text-loco font-bold font-rale">HOME</h1>
{$user.UserNombre}
<div class="btn btn-blu">Botón</div>

<div class="flex flex-wrap-reverse stretch text-center">
  <div class="bg-blue-300 p-4 m-2">1</div>
  <div class="bg-blue-300 p-4 m-2">2</div>
  <div class="bg-blue-300 p-4 m-2">3</div>
  <div class="bg-blue-300 p-4 m-2">4</div>
  <div class="bg-blue-300 p-4 m-2">5</div>
  <div class="bg-blue-300 p-4 m-2">6<br>6<br>6<br>6<br>6<br></div>
</div>