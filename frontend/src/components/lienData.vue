<template>
    <router-link :to="{ name: 'update', params: { id: itemId } }">Mettre à jour</router-link>
  </template>
  
  <script>
 // Assurez-vous de l'importation correcte ici

  export default {
    props: {
      itemId: Number, // Vous pouvez ajuster le type en fonction de vos besoins
    },
    methods: {
      allerVersPageMiseAJour() {
        this.router.push({ name: 'update', params: { id: this.itemId } });
      },
    },
  };
  </script>
  
  