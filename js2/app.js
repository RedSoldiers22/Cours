// déclarer variables
var nom = 123

// peut additionner chaine
"aze"="aze" // = azeaze

// tableau
var tab = [1,2,"23"]
tab[0] // récupérer infos

// objet -> variable qui contient des infos avec des clés
var eleve={
    nom:'Jean',
    moyenne:[15,12]
}
eleve.nom // récupérer infos
eleve.moyenne[0]

// -----------------conditions--------------------------
if(condition){

}else if (condition){

}else{
    
}

for(var i=0; i<tab.length;i++){

}

// -----------------------fonctions------------------------
var demo = function(a,b){ // si appelle qu'une fonction -> b = undefined

}
demo(1,2)

// fonctions s'appellent plus simplement
azeaze.toUpperCase() // met en majuscule
azeaze.length // compte le nombre de caractère (6)
var a =[1,2,3]
a.push(4) // ajoute 4 au tableau
a.join(", ") // ajoute des virgules et un espace entre chaque -> [1, 2, 3, 4]

// portée des variables
// les var déclarés à l'intérieur d'un fonction ne sont pas accessibles en dehors
// MAIS les fonctions ont accés aux var déclarées depuis l'extérieur

var b=3;
var demo = function(){
    return 3 * b
} // 3*3=9

// si pas de var devant dans une fonction considère que cela change la var
// si var devant dans la fonction ne change pas la var extérieur
var a=1
var demo=function(){
    var a=1 // ne change pas a
    a=1 // change a
}

// --------------------les classes------------------------------
// pas vraiment de classes, langage orienté objet
// créé plutôt des prototypes (propriété particulière)

var eleve = {
    nom:"Eleve",
    moyenne: function(){
        return 10
    },
    present: function(){
        return this.nom + "présent"
    }
}

var jean = Object.create(eleve)
jean.nom="Jean"

// si je tape jean.nom me donne "Jean" car déja définit
// si je crée nouvelle élève var marc = Object.create(eleve)
// comme nom n'est pas définit va chercher dans var eleve nom et renvoi "Eleve"

// peut rajouter des propriété directement à l'objet jean
jean.parler = function () {return 'Salut'}
// ajouter la propriété parler à  l'objet jean

// les prototypes peuvent être modifiées à n'importe quel moment
eleve.present = function () {return 'Salut'}
// change la function present dans eleve


//------------------constructeur----------------------
var Eleve = function (nom){ // nom -> paramètre
    this.nom = nom
}

Eleve.prototype.moyenne = function(){ // ajoute la fonction au deux éléves qui sont issues du prototype Eleve
    return 10
}

var jean = new Eleve('Jean')
var jean = new Eleve('Marc')

// méthode statiques
var Session = {
    get: function(){}
}

Session.get


//---------------------héritage----------------------
var Eleve = function (nom){ // nom -> paramètre
    this.nom = nom
}

Eleve.prototype.present = function(){
    return this.nom + " présent"
}

var Delegue = function(nom){
    Eleve.call(this, nom)
    this.role= "delegue"
}

Delegue.prototype = Object.create(Eleve.prototype) // raccorde le prototype Delegue au prototype Eleve et importe SES infos
Delegue.prototype.constructor = Delegue // redéfinit le constructeur Delegue sur Delegue

Delegue.prototype.moyenne = function(){ // ajouter au prototype "moyenne"
    return 15
}

// toute les objets créés auront systématiquement le prototype Object
// l'héritage comme cela est très peu utilisé

// Nouvelle syntaxe:
function Personne(prenom, nom, age, genre, interets) {
    this.nom = {
      prenom,
      nom
    };
    this.age = age;
    this.genre = genre;
    this.interets = interets;
  };

Personne.prototype.saluer = function() {
    alert('Salut! Je suis ' + this.nom.prenom + '.');
  };

  // this n'a pas forcément le même sens qu'en PHP


  //---------------------for/forEach-----------------------
  
  
