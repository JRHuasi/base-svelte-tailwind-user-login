<script>
  import { Router } from "@roxi/routify";
  import { routes } from "../.routify/routes";
</script>

<style  global>
  @import "../assets/global.css";
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;0,600;1,100&display=swap');
  @tailwind base;
  @tailwind components;
  @tailwind utilities;

  .btn {
    @apply font-bold py-2 px-4 rounded;
  }

  .btn-blue{
    @apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @apply bg-blue-700;
  }
</style>

<Router {routes} />