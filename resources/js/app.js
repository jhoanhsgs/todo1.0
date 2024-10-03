import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import FormComponent from './components/notas/Form.vue';
import ListComponent from './components/notas/List.vue';
import EditComponent from './components/notas/Edit.vue';
import LoginComponent from './components/Login.vue';


// Rutas
const routes = [
    {
        path: '/login',
        component: LoginComponent,
    },
    {
        path: '/form',
        component: FormComponent,
    },
    {
        path: '/',
        component: ListComponent,
    },
    {
        path: '/list/:id',
        component: EditComponent,
    }
];

// Crear el router
const router = createRouter({
    history: createWebHistory(), // Usar el historial web
    routes, // Definir las rutas
});


const app = createApp({});

// Usar el router
app.use(router);


app.mount('#app');

