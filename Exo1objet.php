<pre>
    <?php
class USER {
    private $Nom;
    private $Prenom;
    
    public function  afficheUser() {
        echo "je suis un User<p>";
        echo "Mon nom est ".$this->Nom;
        echo "Mon prénom est ".$this->Prenom;

    }
    public function setNOM($NvxNom) {
    return $this->Nom = $NvxNom ;  
    }
    public function setPrenom($NvxPrenom) {
    return $this->Prenom = $NvxPrenom ;
    }
}
?>

</pre>
