const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: []
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/api/')
        .then((response) => {
            this.albums = response.data;
        });

        
    }
})