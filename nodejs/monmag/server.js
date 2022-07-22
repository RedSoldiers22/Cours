const dotenv = require('dotenv'); // npm i dotenv 
dotenv.config();
const jwt = require('jsonwebtoken');
const express = require('express');
const app = express();
var mongoose = require('mongoose');
require('./models/user.js');
var User = mongoose.model('User');
var bcrypt = require('bcryptjs'); //
var cors = require('cors'); //

app.use(cors());

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

app.use(express.static("public"));

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname + "/public/index.html"));
});

var db = mongoose.connect('mongodb://localhost/afpauser');
//----------------------------- Generation du TOKEN ------
// en lisant la clé privé sous .env 
// la clé est créée par =>require('crypto').randomBytes(64).toString('hex')
// sous le shell node.
// créer un fihier .env et ajouter TOKEN_SECRET = le Token
//--------------------------------------------------------
function generateAccessToken(user) {
  // expire apres 5minutes
  return jwt.sign(user, process.env.TOKEN_SECRET, { expiresIn: '5m' });
}

//-------------------middleware de verification ------
function authenticateToken(req, res, next) {
  const token = req.headers['x-access-token']
  if (token == null) { return res.sendStatus(401) } // if there isn't any token


 
  jwt.verify(token, process.env.TOKEN_SECRET, (err, user) => {
    if (err) return res.sendStatus(403)
    req.user = user
    next() // pass the execution off to whatever request the client intended
  })
}

app.post ('/user/signup', (req,res) => 
{
 User.findOne({ email: req.body.email })
  .exec((err, user) => {
      if (err) {
        res.status(500).send({ message: err });
      }
      if (user) {
        res.status(400).send({ message: "Failed! Email is already in use!" });
      } else {
        var salt = bcrypt.genSaltSync(10);
        var hash = bcrypt.hashSync(req.body.password, salt);
        var user = new User({
          name: req.body.name,
	        password: hash,
          email: req.body.email
        });
    user.save(function(err) {
    if (err) return handleError(err); 
      res.status(200).send(user);
    })
    } 
  }) // end exec
}); // end post 


// test du token
app.get('/api/userOrders', authenticateToken ,  function(req, res) {
	console.log("OK TU PASSES!!");
  res.send('ok');
})

app.listen(8092);
console.log('8092');
