var randuserApp = new Vue ({
  el: '#randomUser',
  data:  {
    user_info: {
        name:"",
        location:"",
        dob:"",
        email:"",
        picture:""

  }
},

  methods: {

    pretty_date: function(d){
      return moment (d).format('l');
    },

    fetchResults () {
      fetch('https://randomuser.me/api/')
      .then( response => response.json())
      .then( json => {randuserApp.user_info = json.results[0]})
      .catch ( err => {
        console.log('RESULTS FETCH ERROR:');
        console.log(err);

      })

    },
    agecalc: function (){
      return moment().diff(moment(this.user_info.dob.date),'years');
    },
  },

  created: function () {
    this.fetchResults();
  }
})
