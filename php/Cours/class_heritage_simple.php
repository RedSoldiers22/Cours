<?php
// 1ere manière de faire l'héritage
class Robot {
    public function greet(){
        return "Hello";
    }
}

// Android hérite de Robot
class Android extends Robot {

}

// héritage simple
// j'executé la méthode du parent
$android= new Android();
echo $android-greet();


//////////////////////////////////////////////////


// 2ème manière de faire l'héritage
class Robot {
    public function greet(){
        return "Hello";
    }
}

class Android extends Robot {

}

class Robot {
    // surcharge ou override de la méthode greet()
    public function greet(){
        return "Hi";
    }
    
}

$robot = new Robot();
echo $robot->greet(); // Hello
$android = new Android();
echo $android->greet(); // Hi
// hérite avec surchage

// OU

class Robot {
    public function greet(){
        return "Hello";
    }
}

class Android extends Robot {
    // !! On ne peut pas utiliser le $this dans le fils !!

    // surcharge ou override de la méthode greet()
    public function greet(){
        // pour pouvoir executer la fonction greet du père
        // il faudra utiliser l'opérateur ::
        $greeting = parent::greet();
        return $greeting." from android";
    }

}

$android = new Android();
echo $android->greet(); // Hi




?>