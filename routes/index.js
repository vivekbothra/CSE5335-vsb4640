var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {

  res.render('index');
});

router.get('/json', function(req, res) {

  res.json({

    "places":[
    {"id":1,"lat":44.5403,"lon":-79.5463,"Letter": "A",
      "Freq": 20},
    {"id":2,"lat":45.5403,"lon":-78.5463,"Letter" : "B",
      "Freq": 12},
    {"id":3,"lat":45.5403,"lon":-76.5463,"Letter" : "C",
      "Freq": 47},
    {"id":4,"lat":45.5403,"lon":-77.5463,"Letter" : "D",
      "Freq": 34},
      {"id":5,"lat":45.5403,"lon":-80.5463,"Letter" : "E",
        "Freq" : 54},
      {"id":6,"lat":45.5403,"lon":-75.5463,"Letter" : "F",
        "Freq" : 21},
      {"id":7,"lat":45.5403,"lon":-74.5463,"Letter" : "G",
        "Freq" : 57},
      {"id":8,"lat":45.5403,"lon":-73.5463,"Letter" : "H",
        "Freq" : 31},
      {"id":9,"lat":44.5403,"lon":-74.5463,"Letter" : "I",
        "Freq" : 17},
      {"id":10,"lat":43.5403,"lon":-74.5463,"Letter" : "J",
        "Freq" : 5}

  ]




  });
});








module.exports = router;
