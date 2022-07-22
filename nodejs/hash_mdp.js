const bcrypt = require('bcrypt');
const salt = bcrypt.genSaltSync(10);

// Hash Password

const hash = bcrypt.hashSync('kergac29', salt);
console.log(hash);

const isValidPass = bcrypt.compareSync('kergac29', hash);
console.log(isValidPass);
