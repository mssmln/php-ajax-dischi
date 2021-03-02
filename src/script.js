let app = new Vue ({
  el: '#app',
  data: {
    dischi: []
  },
  mounted(){
    axios
    .get('src/partials-php/server.php')
    .then(response => {
      this.dischi = response.data;
      console.log(this.dischi);
    })
    .catch(error => alert('sth is wrong'))
  }
});
