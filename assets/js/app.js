const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
            task: '',
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
                task : this.task,
              }

            axios
            .post(this.api_url, data,{
                headers: {'Content-Type': 'multipart/form-data'}
            })
            .then((response) => {
                this.tasks = response.data

            }).catch(err => {
                console.log(err.message);
            })
        },
        removeTask(index) {
            const data = {
                task : this.task,
                indice : index,
              }

            axios
            .post(this.api_url, data,{
                headers: {'Content-Type': 'multipart/form-data'}
            })
            .then((response) => {
                this.tasks = response.data

            }).catch(err => {
                console.log(err.message);
            })
        },


    },
    mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')




