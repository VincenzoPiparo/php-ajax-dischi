Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        array: []
    },
    methods: {
        getDatabaseApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone2/server.php')
            .then((response) => {
                this.array = response.data;
                console.log(response.data);
            })
        }
    },
    created: function() {
        this.getDatabaseApi();
    }
});