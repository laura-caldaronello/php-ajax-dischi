var app = new Vue({
    el: '#myapp',
    data: {
        logoPath: 'img/Spotify_logo.png',
        database: []
    },
    mounted() {
        axios
        .get('http://localhost/php-ajax-dischi/server.php')
        .then(got => {
            this.database = got.data;
        });
    }
});
Vue.config.devtools = true;