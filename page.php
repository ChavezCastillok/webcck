<?php

class Page {
    // atributos
    public $content;
    public $title = 'Chavez Castillo Kevin';
    public $keywords = 'Chavez Castillo Kevin, desarrollador web, php';
    public $buttons = array(
        'CCKevin' => 'index.php',
        'Dev...lab' => 'zonered.php',
        'Mi Blog' => 'blog.php'
    );

    // operaciones o metodos
    public function __set($name, $value){
        $this->$name = $value;
    }

    public function Display(){
        echo "<!DOCTYPE html>\n";
        echo "<html>\n<head>\n";
        $this -> DisplayTitle();
        $this -> DisplayKeywords();
        $this -> DisplayStyles();
        echo "</head>\n<body id='agrupar'>\n";
        $this -> DisplayHeader();
        $this -> DisplayMenu($this->buttons);
        echo $this->content;
        $this -> DisplayFooter();
        echo "</body>\n</html>\n";
    }

    public function DisplayTitle(){
        echo '<title> '.$this->title.' </title>';
    }

    public function DisplayKeywords(){
        echo "<meta name=\"keywords\" content=\"".htmlentities($this->keywords)."\">\n";
    }

    public function DisplayStyles(){
        echo "<link rel=\"stylesheet\" href=\"styles/estilos1.css\">\n";
    }

    public function DisplayHeader(){
        ?>
        <header id="cabecera">
            <img id='logo' src="images/logoCk.png" width="120" height="120">
            <h1 id="titulo"><?php echo $this->title; ?></h1>
        </header>
        <?php
    }

    public function DisplayMenu($buttons){
        echo "<nav id='menu'>\n";
        echo "<h2 class='titulomenu'>Páginas</h2>\n";
        echo "<ul>\n";
        foreach ($buttons as $name=>$url){
            $this->DisplayButton($name, $url, /*!$this->IsURLCurrentPage($url)*/); // revisar porque no funca
        }
        echo "</ul>\n";
        echo "</nav>\n";
    }

    public function IsURLCurrentPage($url){
        if(strpos($_SERVER('PHP_SELF'), $url) === false){
            return false;
        } else {
            return true;
        }
    }

    public function DisplayButton($name, $url, $active = true){
        if ($active) {
            echo '<li><a href="'.htmlentities($url).'">'.$name.'</a></li>';
        } else {
            echo '<li>'.$name.'</li>';
        }
    }

    public function DisplayFooter(){
        ?>
        <footer id="pie">
            <small>Ubicación: <em>San Cristóbal, Venezuela.</em></small><br>
            <small>Contacto vía Email: <a id='mail' href="mailto:socialcck@outlook.com">socialcck@outlook.com</a></small><br>
            <small>07/2018 - <?php echo date('m/Y'); ?></small>
        </footer>
        <?php
    }
}

?>