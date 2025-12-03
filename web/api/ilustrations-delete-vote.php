<?php
    //http://localhost/api/savescore.php?name=picha&score=1000
    header('Content-Type: application/json');

    $database_file = '../ilustrations.sql';
    $sqlite = new SQLite3($database_file);

    //1 obtenemos el id_game que es la ilustración que ha votado
    $sql="SELECT id_game FROM user_ilustrations WHERE ip='{$_SERVER['REMOTE_ADDR']}' ORDER BY date DESC LIMIT 1;";
    $result = $sqlite->query($sql);
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $result->finalize(); 
    $id=$row['id_game'];
    
    //Descontamos un voto a la ilustración
    $sql="UPDATE ilustrations SET num_votes = num_votes - 1 WHERE id='{$id}';";
    $result = $sqlite->query($sql);
    $result->finalize(); 

    //SVamos a borrar los user_ilustrations correspondientes a la ip
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $sql="DELETE FROM user_ilustrations WHERE ip='{$user_ip}';";
    $result = $sqlite->query($sql);
    $result->finalize();


    //$data= json_encode("Voto hecho para {$name}");  
    echo "Votos borrados";
?>