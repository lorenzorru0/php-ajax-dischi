const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: [],
        genreSelected: ''
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.albums = response.data;
        });

        axios.get('http://localhost:8888/php-ajax-dischi/api/index.php?genres=genres')
        .then((response) => {
            this.genres = response.data;
        });
    },
    methods: {
        albumFilter() {
            axios.get('http://localhost:8888/php-ajax-dischi/api/index.php',  {
                params: {
                    genre: this.genreSelected
                }
            })
            .then((response) => {
                this.albums = response.data;
            });
        }
    }
})