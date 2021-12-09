const app = new Vue({
    el: "#app",
    data:{
        albums:[]
    },
    mounted() {
            axios
            .get('http://localhost:8888/php/php-ajax-dischi/API/database.php')
            .then(response => {
              console.log(response);
              this.albums = response.data
            }).catch(error => {
              console.log(error);
            })
        }
    });