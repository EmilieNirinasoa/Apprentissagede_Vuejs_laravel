// router.js
import { createRouter, createWebHistory } from 'vue-router';
 // Remplacez par vos composants de page
import DatalistVue from './components/Datalist.vue';
import * as Vue from 'vue';
import AppVue from './App.vue';
import UpdateDataVue from './components/updateData.vue';
import updateDataVue from './components/updateData.vue';

const routes = [
  {
    path: '/',
    name: 'Datalist',
    component: AppVue,
  },
  {
    path: '/update/:id',
    name: 'update',
    component: UpdateDataVue,
    props: true,
  },
  // Ajoutez vos autres routes ici
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});
// const User = {
//   template: '<div>Utilisateur {{ $route.params.id }}</div>'
// }
// const router = new VueRouter({
//   routes: [
//     { path: '/utilisateur/:id', component: updateDataVue }
//   ]
// })


export default router;
