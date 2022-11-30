const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'script.php',
            newTask: ""
        }
    },
    methods: {
        callApi(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response.data);
                    this.tasks = response.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        },
        addTasks() {
            const data = {
                newTask: this.newTask
            }
            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(resp => {
                    this.tasks = resp.data;
                    thisnewTask = "";
                })
                .catch(err => {
                    console.error(err.message);
                })
        },
    },
    mounted() {
        this.callApi(this.api_url);
    },
}).mount('#app')