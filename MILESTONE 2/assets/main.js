const app = new Vue({
    el: "#app",
    data:{
        albums:[]
    },
    mounted() {
            axios
            .get('./API/database.php')
            .then(response => {
              console.log(response);
              this.albums = response.data
            }).catch(error => {
              console.log(error);
            })
        }
    });