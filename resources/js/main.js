import { createApp } from 'vue'; // Importa createApp desde Vue
import axios from 'axios';
import swal from 'sweetalert';

// Define la aplicación Vue
const app = createApp({
    data() {
        return {
            usuario: '',
            contraseña: ''
        };
    },
    methods: {
        iniciarSesion() {
            axios.post('/api/login', {
                email: this.usuario,
                password: this.contraseña,
            })
            .then(response => {

                if(response.status === 200){
                    swal('iniciado correctamente', 'Datos correctos', 'success')
                    .then(response => {
                        localStorage.setItem('logged', true)
                        window.location.href = 'http://localhost:8000'
                    });
                }


        })
        .catch(error => {
            let er = error.response.data.errors
            let mensaje = "Error no identificado";

            if(er.HasOwnProperty('email')){
                mensaje = er.email[0];
            }else {
                mensaje = er.contraseña[0];
            }

            swal('Error', mensaje, 'error');

        });

        }
    }
});

app.mount('#app_login'); // Monta la aplicación en el elemento con id app_login




/*
try {
                console.log("Iniciando sesión con:", this.usuario, this.clave);
                const response = await axios.post('/api/login', {
                    email: this.usuario,
                    password: this.clave
                });
                // Aquí puedes manejar la redirección o cualquier lógica adicional
                console.log('Login exitoso:', response.data);
            } catch (error) {
                console.error('Error al iniciar sesión:', error);
            }

*/
