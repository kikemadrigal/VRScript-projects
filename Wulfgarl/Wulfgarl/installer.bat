
rem SET ECHO OFF

pause "Instala la aplicacion escribiendo installer.bat en la linea de comandos (DOS) o si estas en la linea de comandos pulsa enter"

rem comprimimos todos los archivos en ua app con ziptool
echo "Comprimiendo y creando Wulfgarl.app"
CD ./project
ZIPTOOL /C /Y Wulfgarl.app 
ZIPTOOL /A Wulfgarl.app ./*.*
CD..

rem Copiamos la aplicación a la carpeta de aplicaciones
echo "Moviendo la carpeta Wulfgarl a $SYSTEM:/apps/"
move ./project/Wulfgarl.app $SYSTEM:/apps/Wulfgarl.app
rem Copiamos la base ded datos a la carpeta de aplicaciones
rem copy ./app/Wulfgarl.db $SYSTEM:/apps/Wulfgarl.db
echo "Ahora ve al escritorio y en archivo quita el aspa de crear enlaces automaticamente y vuelvela a poner, pulsa una tecla para salir"
pause

rem rem Creamos el archivo lanzador
rem echo "[Desktop Entry]" > Wulfgarl.desktop
rem echo "Version=1.4" >> Wulfgarl.desktop
rem echo "Terminal=false" >> Wulfgarl.desktop
rem echo "Type=Application" >> Wulfgarl.desktop
rem echo "Name=Wulfgarl" >> Wulfgarl.desktop
rem echo "Exec=$SYSTEM:/apps/Wulfgarl.app" >> Wulfgarl.desktop
rem echo "Icon=$SYSTEM:/apps/Wulfgarl.app/app.png" >> Wulfgarl.desktop
rem echo "Categories=Games" >> Wulfgarl.desktop
rem echo "Keywords=Wulfgarl;Wulfgarl" >> Wulfgarl.desktop
rem echo "."
rem 
rem rem Creamos el lanzador o acceso directo o lin del escritorio
rem copy Wulfgarl.desktop $SYSTEM:/user/desktop/Wulfgarl
rem move Wulfgarl.desktop $SYSTEM:/desktop/Wulfgarl

system

