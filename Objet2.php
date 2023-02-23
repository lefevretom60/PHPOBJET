<style>
    .div{padding-left: 45%;}
    strong{color:red;}
    pre{
        border: 9px; 
        border-radius: 8px 3px 10px 9px;
    width:25%;
    }
</style>
<body>
    <?php
    class Perso{
    public $Pseudo;
    public $vie;
    public function __construct($pseudo) {
        $this->Pseudo = $pseudo;
        $this->vie = 100;
    }
    
    public function afficherInfo() {
        echo "Le perso ".$this->Pseudo." à ".$this->vie." point(s) de vie.";
    }
}
    ?>
<div class="div">
    <pre style="color:green" >
        class Personnage {
            public $pseudo;
            public $vie;
            
            public function __construct() {
                $this->vie = 100;
            }
        }
    </pre>
</div>
