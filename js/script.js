const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: []
        };
    },
    mounted() {
        axios
        .get("http://localhost/Boolean/php-dischi-json/server.php")
        .then((resp) => {
            this.dischi = resp.data.result;
        })
    }
}).mount("#app");