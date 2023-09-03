<template>
  <div>
    <InsertData/>
  </div>
  
  <div>
    <DataList :dataList="dataList" @item-clicked="handleItemClicked"/>
    
  </div>
  <div>
    <UpdateData :itemId="selectedItemId"/>
  </div>
</template>

<script>
import  DataList from './components/Datalist.vue';

import InsertData from './components/InsertData.vue';
import UpdateData from './components/updateData.vue';

export default {
  components: {
    DataList,
    InsertData,
    UpdateData
},
data() {
    return {
      dataList: [], // Vos données de liste
      selectedItemId: null, // ID de l'élément sélectionné
    }
  },
  methods: {
    handleItemClicked(id) {
      this.selectedItemId = id; // Mettre à jour l'ID de l'élément sélectionné
    },
  },
 
};
</script>




