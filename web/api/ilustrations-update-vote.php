<?php
    //http://localhost/api/savescore.php?name=picha&score=1000
    header('Content-Type: application/json');
    $name=$_GET['name'];

    $database_file = '../ilustrations.sql';
    $sqlite = new SQLite3($database_file);
    $user_ip = $_SERVER['REMOTE_ADDR'];
    //Se consulta si la ip ya a votado
    $result = $sqlite->query("select ip from user_ilustrations WHERE ip='{$user_ip}'");
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $result->finalize(); 
    if($row){
        echo "Ya has votado, pulsa D para borrar tu voto.";
        exit;
    }

    //Obtenemos los votos para ese nombre
    $result = $sqlite->query("select name from ilustrations WHERE name='{$name}'");
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $result->finalize(); 
    if($row){
        //Si existe, actualizamos el numero de votos
        $sql="UPDATE ilustrations SET num_votes = num_votes + 1 WHERE name='{$name}';";
    }else{
        //Si no existe, lo creamos
        $sql="INSERT INTO ilustrations (name, num_votes, date) VALUES ('{$name}', 1, date('now'));";
    }
    $result = $sqlite->query($sql);
    $result->finalize();
    

    //Si no ha votado obtenemos el último id insertado
    $result = $sqlite->query("select id from ilustrations WHERE name='{$name}'");
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $result->finalize(); 
    $id=$row['id'];
    //Insertamos la ip del usuario que ha votado
    $sql="INSERT INTO user_ilustrations (ip, id_game, date) VALUES ('{$user_ip}', '{$id}', date('now'));";
    $result = $sqlite->query($sql);
    $result->finalize();


    //$data= json_encode("Voto hecho para {$name}");  
    echo "Voto hecho para {$name}";
?>