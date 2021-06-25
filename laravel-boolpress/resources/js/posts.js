var app = new Vue({
    el: '#root',
    data: {
        title: 'Ciao sono il titolo da Vue.js',
        posts: []
    },
    mounted () {
        axios.get('http://127.0.0.1:8000/api/posts')
        .then(result => {
            this.posts = result.data.posts;
            console.log(this.posts);
        });
    }
})