<?php
class Perso{
    private $vie = 100;
    private $pseudo;
    
    public function __construct($Pseudo) {
        $this->pseudo = $Pseudo;
    }
    
    public function attaque(Perso $perso) {
        echo"".$this->pseudo. "attaque" .$perso->getPseudo() . "";
        $perso->defense(50);
    }
    
    public function defense($degats){
        echo "".$this->pseudo." se défend a l' attaque de ".$degats." dégât(s)";
        $this->vie -= $degats;
        if ($this->vie <= 0){
            echo "".$this->pseudo." est mort(es)";
        }
        else {
            echo "".$this->pseudo." reste " . $this->vie . " point(s) de vie.";
        }
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    
    public function afficherInfos(){
        echo "Pseudo: ".$this->pseudo.", points de vie: ".$this->vie."";
    }
}
?>
