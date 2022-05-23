<?php
class Bois implements Inflammable, Flottable {
    public function enflammer() {
        echo "Je brule et fait des braises";
    }
        public function flotter() {
        echo "Je flotte";
    }
}

?>