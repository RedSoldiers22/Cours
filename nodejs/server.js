var http = require('http');
http.createServer(function(request,response){
    response.writeHead(200, {'Content-Type': 'text/plain' })
    response.end("Hello World\n")
}).listen(8080,"127.0.0.1")
console.log("serveur ecoute sur le port 8080")