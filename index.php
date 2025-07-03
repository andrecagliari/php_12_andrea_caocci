<?php
// Classe astratta
abstract class Categoria {
    abstract public function getMyCategory(); // deve essere public
}

// Classi figlie
class Attualita extends Categoria {
    public function getMyCategory() {
        echo "Categoria: Attualità\n";
    }
}

class Sport extends Categoria {
    public function getMyCategory() {
        echo "Categoria: Sport\n";
    }
}

class Gossip extends Categoria {
    public function getMyCategory() {
        echo "Categoria: Gossip\n";
    }
}

class Storia extends Categoria {
    public function getMyCategory() {
        echo "Categoria: Storia\n";
    }
}

// Uso delle classi
$cat1 = new Attualita();
$cat1->getMyCategory();

$cat2 = new Sport();
$cat2->getMyCategory();

$cat3 = new Gossip();
$cat3->getMyCategory();

$cat4 = new Storia();
$cat4->getMyCategory();
