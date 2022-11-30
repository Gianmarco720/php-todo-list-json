const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'script.php'
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
    },
    mounted() {
        this.callApi(this.api_url);
    }
}).mount('#app')