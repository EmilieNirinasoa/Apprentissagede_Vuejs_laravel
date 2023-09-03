<template>
  <form @submit.prevent="submitData">
    <label for="nom">Nom:</label>
    <input v-model="nom" id="nom" type="text" placeholder="Nom">
    <label for="prenom">Prénom:</label>
    <input v-model="prenom" id="prenom" type="text" placeholder="Prénom">
    <button type="submit">Ajouter</button>
  </form>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      nom: '',
      prenom: '',
    };
  },
  methods: {
    async submitData() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/insertion', {
          nom: this.nom,
          prenom: this.prenom,
        });

        console.log(response.data.message); // Confirme que les données ont été insérées

        // Réinitialisez les champs du formulaire après l'insertion
        this.nom = '';
        this.prenom = '';
      } catch (error) {
        console.error('Erreur lors de l\'insertion des données :', error);

        // Affichez une alerte d'erreur
        alert('Erreur lors de l\'insertion des données.');
      }
    },
  },
};
</script>
