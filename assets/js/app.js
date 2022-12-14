const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
            newTask: '',
        }
    },
    methods: {
        readTasks(url) {
            axios.get(url).then(response => {
                this.tasks = response.data

            }).catch(err => {
                console.log(err.message);
            })
        },
        addTask() {
            const data = {
                task: this.newTask,
            }

            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then((response) => {
                    this.tasks = response.data
                    this.newTask = ''

                }).catch(err => {
                    console.log(err.message);
                })
        },
        removeTask(index) {
            const data = {
                indice: index,
            }

            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then((response) => {
                    this.tasks = response.data

                }).catch(err => {
                    console.log(err.message);
                })
        },
        changeDone(index) {
            const data = {
                changeDone: index,
            }

            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then((response) => {
                    this.tasks = response.data

                }).catch(err => {
                    console.log(err.message);
                })
        }

    },
    mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')




