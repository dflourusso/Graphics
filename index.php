<?php
include "Tpl.php";
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<h4>Demonstração das OS-m do ano de 2013</h4>
            <?php
            $tpl = new Tpl();
            $props = array(
                array('Jan', 300),
                array('Fev', 400),
                array('Mar', 500),
                array('Abr', 100),
                array('Mai', 900),
                array('Jun', 600),
                array('Jul', 700),
                array('Ago', 500),
                array('Set', 600),
                array('Out', 800),
                array('Nov', 200),
                array('Dez', 800),
            );
            $grafico = $tpl->sample($props);
            echo $grafico;
            ?>
</body>
</html>