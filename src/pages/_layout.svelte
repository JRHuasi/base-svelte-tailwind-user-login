<!-- routify:options preload="proximity" -->
<script>
  
  import { metatags } from '@roxi/routify'
  import NavBar from './_components/NavBar.svelte';
  metatags.title = 'Construcciones Escolares'
  metatags.description = 'Gobierno de la Provincia de Tucumán'
</script>
<NavBar />
<slot />