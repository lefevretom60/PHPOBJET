<pre>
    <?php
    echo "objet3.php";
class Perso {
    //propriété
    private $Pseudo;
    private $Vie;
    
    //Methode
    public function __construct($Pseudo){
        $this->Vie = 100;
        $this->Pseudo = $Pseudo;
    }

    public function  afficheVie() {
        echo "Mon pseudo sera ".$this->Pseudo;
        echo "Mon nombre de point de vie est ".$this->Vie;
    }
}
?>
</pre>
