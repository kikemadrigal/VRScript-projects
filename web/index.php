<?php include_once("document-start.php");
//Los requires estan en document-start.php

$records=[];
$votes=[];

if($game=="desconocido" || empty($game)){
    ?>
    <ul>
        <h3> Por favor, selecciona un juego </h3>
        <li><a href="index.php?game=ilustrations">Ilustrations</a></li>
        <li><a href="index.php?game=wulfgar">Wulfgar</a></li>
        <li><a href="index.php?game=arkandroid">Arkandroid</a></li>
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
}else if($game=="ilustrations"){
    $sqlite = new SQLite3("ilustrations.sql");
    function get_votes($sqlite){
        try {
            $votes=[];
            // Consultar los datos de la tabla
            $result = $sqlite->query("select * from ilustrations order by num_votes DESC limit 10;");
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $votes[] = $row;
            }
            $result->finalize();    
        } catch (Exception $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        } 
        return $votes;
    }
    $votes=get_votes($sqlite);
    $sqlite->close();
}else if($game=="arkandroid"){
    $sqlite = new SQLite3("arkandroid.sql");
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

if($game=="ilustrations"){  ?>
    <h4 class="text-center">Top 10 Ilustrations</h4>
    <a href="https://games.tipolisto.es/index.php?game=ilustrations" class="btn btn-primary mb-3">Actualizar</a>
    <table class='table'>
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Number of Votes</th>
        </tr>	
        </thead>
    <?php
    echo "<tbody>";
    foreach ($votes as $posicion=>$vote){
        echo "<tr>";
            echo "<td>{$vote['name']}</td>";
            echo "<td>{$vote['num_votes']}</td>";
        echo "</tr>";
    }
    echo "</tbody>";
}else if($game=="wulfgar"){
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
}else if($game=="arkandroid"){
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

