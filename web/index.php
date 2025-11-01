<?php include_once("document-start.php");
//Los requires estan en document-start.php

$records=[];

if($game=="desconocido" || empty($game)){
    
  
    ?>
    <ul>
        <h3> Por favor, selecciona un juego </h3>
        <li><a href="index.php?game=wulfgar">Wulfgar</a></li>
        <li><a href="index.php?game=arkanoid" style="cursor: not-allowed;pointer-events: none;">Arkanoid</a></li>
        <li><a href="index.php?game=lili" style="cursor: not-allowed;pointer-events: none;">Lili the cat</a></li>
    </ul>
    <?php
}else if($game=="wulfgar"){
    $sqlite = new SQLite3("wulfgardb.sql");
    function get_records($sqlite){
        try {
            $records=[];
            // Consultar los datos de la tabla
            $result = $sqlite->query("select * from records order by score DESC limit 10;");
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $records[] = $row;
            }
            $result->finalize();    
        } catch (Exception $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        } 
        return $records;
    }
    $records=get_records($sqlite);
    $sqlite->close();
}
if (count($records)==0 || count($records)==0) {
    //die("No hay records");
}else{
    ?>
    <h4 class="text-center">Top 10</h4>
    <table class='table'>
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Score</th>
            <th scope="col">Date</th>
        </tr>	
        </thead>
    <?php
    echo "<tbody>";
    foreach ($records as $posicion=>$record){
        echo "<tr>";
            echo "<td>{$record['name']}</td>";
            echo "<td>{$record['score']}</td>";
            echo "<td>{$record['date']}</td>";
        echo "</tr>";
    }
    echo "</tbody>";
}
   
 
    

include_once("document-end.php");

