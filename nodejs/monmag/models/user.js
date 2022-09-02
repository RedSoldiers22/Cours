
var mongoose = require('mongoose'),
    Schema = mongoose.Schema;

var UserSchema = new Schema({
  	username: 	String,
  	password: 	String,
  	email: 		String,
});

mongoose.model('User', UserSchema);
// User est le nom de la collection dans mongodb en minuscule et au pluriel (users)
