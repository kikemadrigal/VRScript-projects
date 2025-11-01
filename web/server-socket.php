<?php
//Escribe en el terminal php -f c:\Users\kikem\Desktop\arkanoid\php\server-socket.php
set_time_limit(0); // No se cierra el script por tiempo de ejecución
// Set establece el host y el puerto
$host = 'https://arkanoid.tipolisto.es';
$port = '80';

// Se crea el socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("No se puede crear el socket\n");

// Se enlaza el socket al host y puerto
socket_bind($socket, $host, $port) or die("No se puede enlazar el socket\n");

// Empieza la escucha
socket_listen($socket, 5) or die("No se puede escuchar el socket\n");
echo "Servidor escuchando en $host:$port\n";

// Se reciben las peticiones
while (true) {
    $clientSocket = socket_accept($socket);
    
    // Se leen los datos del cliente
    $input = socket_read($clientSocket, 1024);
    echo "Recibido: $input\n";
    // Se procesa la información (en este caso, simplemente se devuelve)
    $output = "Server kike-server-spckets: $input\n";
    
    // Se manda respuesta al cliente
    socket_write($clientSocket, $output, strlen($output)) or die("No se puede escribir el mensaje\n");
    
    
    socket_close($clientSocket);
}

socket_close($socket);
// Fin del script

?>