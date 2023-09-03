<template>
  <div>
    <InsertData/>
  </div>
  
  <div>
    <DataList />
    
  </div>
</template>

<script>
import  DataList from './components/Datalist.vue';

import InsertData from './components/InsertData.vue';

export default {
  components: {
    DataList,
    InsertData
  }
};
</script>
