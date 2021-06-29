<script>
	import { user } from './_stores/userStore'
    import { goto } from '@roxi/routify'


    if(localStorage.getItem('usuario')){
      user.setUser(JSON.parse(localStorage.getItem('usuario')));
    }
    if(!$user) $goto('/login')
    console.log($user);

</script>

<h1>HOME</h1>
{$user.UserNombre}
