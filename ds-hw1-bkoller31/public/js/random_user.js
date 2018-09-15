var randuserApp = new Vue ({
  el: '#randomUser',
  data:  {
    user_info: {
      results: [
    {
      "gender": '',
        "name": {
        "title": '',
        "first": '',
        "last": ''
      },
      "location": {
        "street": '',
        "city": '',
        "state": '',
        "postcode": '',
        "coordinates": {
          "latitude": '',
          "longitude": ''
        },
        "timezone": {
          "offset": '',
          "description": ''
        }
      },
      "email": '',
      "login": {
        "uuid": '',
        "username": '',
        "password": '',
        "salt": '',
        "md5": '',
        "sha1": '',
        "sha256": ''
      },
      "dob": {
        "date": '',
        "age": ''
      },
      "registered": {
        "date": '',
        "age": ''
      },
      "phone": '',
      "cell": '',
      "id": {
        "name": '',
        "value": ''
      },
      "picture": {
        "large": '',
        "medium": '',
        "thumbnail": ''
      },
      "nat": ''
    }
  ],
  "info": {
    "seed": '',
    "results": '',
    "page": '',
    "version": ''
    }
  }
},

  methods: {


    fetchResults () {
      fetch('https://randomuser.me/api/')
      .then( response => response.json())
      .then( json => {randuserApp.results = json})
      .catch ( err => {
        console.log('RESULTS FETCH ERROR:');
        console.log(err);

      })
    },
    agenumber: function (){
      return moment().diff(moment(this.user_info.dob.date),'years');
    },
  },

  created () {
    this.fetchResults();
  }
})
