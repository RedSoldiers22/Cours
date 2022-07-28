
/*
 recherche de manière dichotomique la position d'un élément val 
 dans une table tab d'entiers uniques triés dans l'ordre croissant.

 Le prinsipe est de couper la table en 2 puis vérifier si on doit rechercher dans la partie 
 inférieure ou la partie supérieure. puis recommancer l'opération sur cette 
 partie jusqu'a trouvé l'égalite entre la valeur demandée et la valeur dans le tableau
 
 Si cette valeur n'existe pas renvoyer -1 

*/
var recherche = function (tab,val) {
    var indb = 0 ;
    var indh = tab.length ;
    var indm = Math.floor((indh-indb)/2)
    var found = false; 
    console.log("bas:"  , indb )
    console.log("haut:" , indh )
    console.log("milieu:"  , indm )

    while( (found == false) && (indb <= indh )) {
        if (val < tab[indm]) {
            indh = indm - 1 ;
        } else if ( val > tab[indm]) {
            indb = indm + 1 ;
        } else {
            found = true ;
        }
        indm = Math.floor( (indb+indh) / 2)
    }

    if (found == true) { 
       return indm ; 
    } else {
        return -1 
    }
}
module.exports = recherche
