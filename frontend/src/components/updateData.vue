<template>
<form @submit.prevent="mettreAJourRessource(this.itemId, nouvellesDonnees)">
    <label for="nom">Nom:</label>
    <input v-model="nom" id="nom" type="text" placeholder="Nom">
    <label for="prenom">Prénom:</label>
    <input v-model="prenom" id="prenom" type="text" placeholder="Prénom">
    <button type="submit">Mettre à jour</button>
</form>

  </template>
  
  <script>
  import axios from 'axios';
  export default {
    props: {
    itemId: Number, // Vous pouvez ajuster le type en fonction de vos besoins
  },
  methods: {
    async mettreAJourRessource(id, nouvellesDonnees) {
        try {
            const response = await axios.put(`http://127.0.0.1:8000/api/update/${id}`, nouvellesDonnees);
            console.log(response.data.message); // Confirme que la ressource a été mise à jour
        } catch (error) {
            console.error('Erreur lors de la mise à jour de la ressource :', error);
        }
    }
}

  };
  </script>
  