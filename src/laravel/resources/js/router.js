import { createRouter, createWebHistory } from 'vue-router';
import RestaurantIndex from './components/restaurant/index.vue';
import RestaurantCreate from './components/restaurant/create.vue';


const routes = [
    { path: '/restaurants', name: 'restaurant-index', component: RestaurantIndex },
    { path: '/restaurants/creat', name: 'restaurant-create', component: RestaurantCreate }
]
  
const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;