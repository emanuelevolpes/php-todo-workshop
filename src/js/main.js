const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todos: []
        }
    },
    methods: {
        getTodos() {
            axios
                .get(this.apiUrl)
                .then((response) => {
                    this.todos = response.data
                })
        }
    },
    created() {
        //lettura dei todo
        this.getTodos();
    }
}).mount('#app');