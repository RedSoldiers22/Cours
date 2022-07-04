function retour (donnees, callbak){
    console.log(donnees)
    let r="ddd"; let s=2;
    callbak(r,s)
    //  function(req,res){console.log(req,":",res)})(r,s)
}

retour("coucou", function(req,res){
    console.log(req,":",res)
})