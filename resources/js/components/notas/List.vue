<template>
    <div class="w-full sm:w-8/12 md:w-5/12 p-5 bg-white">
        <div v-for="nota in notas" :key="nota.id">
            <div class="flex justify-content-center p-2 border-b-2 border-gray-300 my-2">
                <input
                    type="checkbox"
                    :checked="checkComplete(nota.estado)"
                    @click="completeNota(nota)">
                <p class="mx-2 mt-1 text-gray-900">{{ nota.titulo }}</p>

                <div class="ml-auto flex items-center space-x-4">
                    <router-link :to="'/list/' + nota.id" class="flex items-center">
                        <svg class="h-6 w-6 text-green-500" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                            <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                        </svg>
                    </router-link>

                    <form @submit.prevent="deleteNota(nota.id)">
                        <button type="submit">
                            <svg class="h-6 w-6 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/><line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <input type="text" placeholder="Nueva nota" name="todo"
            class="text-xl p-2 mr-2 w-10/12 border-b-2 border-green-500">

            <input type="submit" value="save" class="bg-green-500 w-2/12">
    </div>
</template>

<script>

export default {

    data() {

        return {
            notas: []
        };
    },
    methods: {
        getNotas() {

            axios.get('/api/list')
                .then(response => {
                    this.notas = response.data;
                })
                .catch(error => {
                    console.log('Error fetching notas:', error.response);
                });
        },
        deleteNota(id) {
            axios.delete('/api/list/' + id)
                .then(response => {
                    console.log('Nota deleted:', response);
                    this.notas = this.notas.filter(nota => nota.id !== id);

                })
                .catch(error => {
                    console.log('Error deleting nota:', error.response);
                });
        },
        completeNota(nota) {
            const complete = nota.estado === 0 ? 1 : 0;
            axios.put('/api/list/' + nota.id, {
                titulo: nota.titulo,
                estado: complete
            })
            .then(response => {
                console.log('Nota updated:', response);
                nota.estado = complete;
            })
            .catch(error => {
                console.log('Error updating nota:', error.response);
            });
        },
        checkComplete(param) {
            return param === 1;
        }
    },
    created() {
        this.getNotas();
    }
}
</script>
