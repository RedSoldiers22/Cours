function retour (donnees, callbak){
    console.log(donnees)
    callbak()
}

retour("coucou",function(){console.log('zyva')})

// pareil que

//(function(){console.log('zyva')})()