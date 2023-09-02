<template>
    <div>
      <h2>Liste de données</h2>
      <ul>
        <li v-for="item in dataList" :key="item.id">{{ item.nom }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    data() {
      return {
        dataList: []
      };
    },
    mounted() {
      // Effectuez une requête HTTP pour récupérer les données de votre API Laravel
      this.fetchData();
    },
    methods: {
      async fetchData() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/donnees'); // Assurez-vous que l'URL correspond à votre route API Laravel
          this.dataList = response.data;
        } catch (error) {
          console.error('Une erreur s\'est produite lors de la récupération des données', error);
        }
      }
    }
  };
  </script>
  