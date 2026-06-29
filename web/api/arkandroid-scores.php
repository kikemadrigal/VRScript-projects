<?php
    header('Content-Type: application/json');
    //$usuario=$_GET['name'];
    //$maxScore=$_GET['score'];
    $records=[];
    $database_file = '../arkandroid.sql';
    $sqlite = new SQLite3($database_file);
  
    $result = $sqlite->query("select * from records order by score DESC limit 10;");
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $records[] = $row;
    }
    $result->finalize(); 
    $data= json_encode($records);  
    echo $data;
?>