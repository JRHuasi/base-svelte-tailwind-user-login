import { writable } from 'svelte/store'

const createUser = () => {
  const { subscribe, set} = writable(false)
  return {
    subscribe,
    setUser: (user) => set(user)
  }
  // if(localStorage.getItem('usuario')){
  //   const datos = JSON.parse(localStorage.getItem('usuario'));
  //   console.log("estoy")
  //   user.nombre = datos.UserNombre;
  //   user.apellido = datos.UserApellido;
  //   user.usuario = datos.UserUsuario;
  //   user.tipo = datos.UserTipo;
  //   user.ip = datos.UserUltimoAcceso;    
  // }else{

  // }
}

export const user = createUser();