<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampa($studenti){
            for($i=0; $i<3; $i++){
                foreach($studenti[$i] as $studente){
                    echo "<h2>$studente </h2>";
                }
                echo "<br>";
            }
        }

        $studente1 = array("nome" => "Josè", "cognome" => "Ciardi", "voti" => array(rand(2,10), rand(2,10), rand(2,10)));
        $studente2 = array("nome" => "Mattia", "cognome" => "Nannucci", "voti" => array(rand(2,10), rand(2,10), rand(2,10)));
        $studente3 = array("nome" => "Enrico", "cognome" => "Giovannoni", "voti" => array(rand(2,10), rand(2,10), rand(2,10)));
        $studenti = array($studente1, $studente2, $studente3);

        stampa($studenti);

    ?>
    
</body>
</html>