<template>
<button @click="supprimerRessource()">Supprimer</button>

</template>
<script>
import axios from 'axios';

export default{
    props: {
    itemId: Number, // Vous pouvez ajuster le type en fonction de vos besoins
  },
    methods: {
    async supprimerRessource() {
        try {
            
            
            const response = await axios.delete(`http://127.0.0.1:8000/api/ressource/${this.itemId}`);
            console.log(response.data.message); // Confirme que la ressource a été supprimée
        } catch (error) {
            console.error('Erreur lors de la suppression de la ressource :', error);
        }
    }
}

}

</script>