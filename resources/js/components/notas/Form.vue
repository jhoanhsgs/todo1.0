<template>
    <div class="w-full sm:w-8/12 md:w-5/12 p-5 bg-white">
        <h1 class="text-3xl text-center fonr-bold py-4 text-gray-800">Crear nota</h1>

    <form action="" method="POST" v-on:submit.prevent="saveNotas()">
        <div class="d-block flex px-2 py-4">
            <input type="text" v-model="notas" placeholder="Nueva nota" name="todo"
            class="text-xl p-2 mr-2 w-10/12 border-b-2 border-green-500">

            <input type="submit" value="save" class="bg-green-500 w-2/12">

        </div>
    </form>

    </div>
</template>

<script>
export default {
    data() {
        return {
            notas: ''
        }
    },
    methods: {
        saveNotas() {
            axios.post('/api/store', {todo: this.notas, })
            .then(response => {console.log(response)})
            .catch(error => {console.log(error.response)});
            this.notas = '';

            this.$router.push('/');
        }
    }
}
</script>
