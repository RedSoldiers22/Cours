const fs = require("fs-extra")
const unzip = require("unzip") // nom i zlib --save

fs.createReadStream("input.zip").pipe(unzip.Extract({output: "input2.txt"}))