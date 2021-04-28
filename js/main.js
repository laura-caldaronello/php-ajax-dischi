var app = new Vue({
    el: '#myapp',
    data: {
        logoPath: 'img/Spotify_logo.png',
        database: [],
        artist: ''
    },
    mounted() {
        axios
        .get('http://localhost/php-ajax-dischi/server.php')
        .then(got => {
            this.database = got.data;
        });
    },
    methods: {
        callArtist: function() {
            axios
            .get('http://localhost/php-ajax-dischi/server.php',
            {params: {
                artist: this.artist,
            }})
            .then(got => {
                this.database = got.data;
            });
        }
    }
});
Vue.config.devtools = true;