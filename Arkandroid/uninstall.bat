rem Quitamos la aplicación a la carpeta de aplicaciones
echo ""
echo "Borrando Arkanoid.app de $System:/apps/"
del $SYSTEM:/apps/Arkandroid.app

rem Quitamos el lanzador o acceso directo o lin del escritorio
rem del $SYSTEM:/user/desktop/Arkandroid
rem del $SYSTEM:/desktop/Arkandroid

rem Quitamos la base ded datos a la carpeta de aplicaciones
rem del $SYSTEM:/apps/arkandroid.db
echo "La aplicacion Arkandroid.app ha sido desinstalada."
echo "Borra el acceso directo del escritorio pinchando con el boton derecho sobre el icono del escritorio."
echo "y selecciona -Borrar seleccionado-, pulse una tecla para salir."
pause
