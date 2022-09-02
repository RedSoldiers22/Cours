// node est un gestionnaire d'events

let events = require('events')
// création d'un event
let eventsEmitter = new events.EventEmitter();
// l'event écoute la réception d'un event "message"
eventsEmitter.on("message", function(){ 
    console.log("message reçu")
})
console.log("j'écoute l'event message")
// émission d'un event message
setTimeout( function(){ eventsEmitter.emit('message')},5000)