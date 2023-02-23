<style>
    .div{padding-left: 43%;}
    strong{color:blue;}
    pre{
        border: 3px solid lightgray;
        box-sizing: border-box;
        border-radius: 8px 3px 10px 9px;
    width:25%;}
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
