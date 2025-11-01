<?php
    //http://localhost/api/savescore.php?name=picha&score=1000
    header('Content-Type: application/json');
    $name=$_GET['name'];
    $score=$_GET['score'];
    $records=[];
    $database_file = '../wulfgardb.sql';
    $sqlite = new SQLite3($database_file);

    $result = $sqlite->query("select name from records WHERE name='{$name}'");
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $result->finalize(); 
    if ($row['name']==$name) {
        echo "Ya tienes un record con ese nombre";
        exit();
    }

    $sql="insert into records (name, score, date) values ( '{$name}', {$score}, datetime('now','localtime'));";
    $result = $sqlite->query($sql);
    $result->finalize(); 
    $data= json_encode("Ok");  
    echo "ok pichon";
?>