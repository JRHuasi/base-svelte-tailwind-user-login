import { writable } from 'svelte/store'

const createUser = () => {
  const { subscribe, set} = writable(false)
  return {
    subscribe,
    setUser: (user) => set(user),
    logout: () => set(false)
  }
}

export const user = createUser();