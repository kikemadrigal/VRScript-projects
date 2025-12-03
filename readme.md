# VRScript games

## El caballero de la vara

<a href="https://github.com/kikemadrigal/VRScript-projects/tree/main/Wulfgarl">Haz click aquí para ver sus datos</a>

<img src="docs/caballerovara.png" width="400">

## TilesManager

El objetivo es crear un juego en GL_Program con VRScript utilizando un gestor de tiles creado con código VRScript.

El mapa puede provenir de un archivo vgs (creado con el programa gamesaurus de MSXVR) o un archivo TMX (creado con el programa Tiled) 

<img src="docs/tilesManager.png" width="400">

## filesManager

Es un GL_Program de VRScript que permite crear archivos de texto, binarios y manejar archivos XML y JSON.

<img src="docs/filesManager.png" width="400">

## Postal navidad 2025

Es un GL_Program de VRScript para participar en el concurso de postales de la web MSXVR.

En el pequeño programa se utilzan estados, animaciones y sonidos.

<img src="docs/postal-navidad-2025.png" width="400">

## Arkanoid

Son 3 aplicaciones: arkonid VRScript personal, arkanoid gamesaurus personal, arkanoid Alberto.

<img src="docs/arkanoid.png" width="400">

## Helicopter

Testeo de movimiento de cámara en un fondo de 4000 px.

<img src="docs/helicopter1.PNG" width="400">

<img src="docs/helicopter2.PNG" width="400">

## Lili the Cat

Ejemplo básico de creación de un juego, son 2 proyectos, uno sencillo y otro avanzado.

En el avanzado se hereda de la clase app que tiene los arrays de los enemigos, el player, la música, etc, también se crea un botón con su evento onclick.

<img src="docs/lili1.PNG" width="400">

<img src="docs/lili2.PNG" width="400">

<img src="docs/lili3.PNG" width="400">


## platform-gamesaurus

Es un juego gamsaurus de plataformas con 3 pantallas, en el que se investiga como importarlo a un GL_program de VRScript.

Una vez importado, obtenemos el objeto mapper y sus layers con el conjunto de tiles por layer.

<img src="docs/platform-gamesaurus.png" width="400">


# Entorno de desarrollo

1. Instala samba
   
   Abre OpenBox en tu MSXVR

   <img src="docs/samba1.PNG" width="400">

   Abre el terminal

   <img src="docs/samba2.PNG" width="400">

   Actualiza la fuente de los paquetes con sudo apt-get update

   <img src="docs/samba10.PNG" width="400">

   Instala samba con "sudo apt install samba"

    <img src="docs/samba3.PNG" width="400">

   Dirígete al directorio /etc/samba y abre el archivo smb.conf con nano:

    <img src="docs/samba4.PNG" width="400">

   Dentro del archivo smb.conf baja hasta abajo y agrega la siguiente linea:

    ```	
    [global]
    netbios name= MSXVR
    server string= The MSXVR file center
    workgroup = WORKGROUP

    [MSXVR]
    path =/mnt/usb_1
    comment = No comment
    browsable = yes
    writeable = yes
    create mask = 0777
    directory mask = 0777
    public = no
   ```	


    <img src="docs/samba5.PNG" width="400">

    Crea un nuevo usuario para samba con "sudo smbpasswd -a msxvr" y ponle la contraseña msxvr:

    <img src="docs/samba6.PNG" width="400">


    Reinica el MSXVR de un botonazo.

    Una vez reiniciado escribe en el terminal de openbox "ifconfig" para ver la dirección ip, también es posible ver la dirección ip esbiendo en el terminal "hostname -I":

    <img src="docs/samba7.PNG" width="400">


    Vamos a windows y en el explorador de archivos ponemos la ip del MSXVR, en mi caso escribo en la barra de direcciones \\192.168.1.19:


   <img src="docs/samba9.PNG" width="400">

    Ya podemos abrir el vscode.

    # Programado con Inteligencia artificial

    ## Vscode + complementos IA

    Aunque lo suyo es trabajar con github copilot, a mi me gusta windsurf o cursor ya que no necesitan unua cuenta de github:

    <img src="docs/vscode1.PNG" width="400">

    <img src="docs/vscode2.PNG" width="400">

    ## Google NotebookLM

    Accede a <a href="https://notebooklm.google.com/">https://notebooklm.google.com/</a>

    Registrate con tu cuenta de google y crea un nuevo cuaderno:

    <img src="docs/ia1.PNG" width="400">

    Ve añadiendo vídeos de VRScript:

    <img src="docs/ia2.PNG" width="400">

    Haz el cuestionario para ver lo que sabes:

    <img src="docs/ia3.PNG" width="400">

    Si quieres, puedes hacerle alguna pregunta con mi cuaderno:

    <a href="https://notebooklm.google.com/notebook/8bd20ba3-c1b3-4b95-82a2-b2dc479e4502" target="_blanck">VR script notebooklm<a>

    