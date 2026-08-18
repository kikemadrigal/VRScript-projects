rem Quitamos la aplicación a la carpeta de aplicaciones
echo ""
echo "Borrando wulfgarl.app de $System:/apps/"
del $SYSTEM:/apps/wulfgarl.app

rem Quitamos el lanzador o acceso directo o lin del escritorio
rem del $SYSTEM:/user/desktop/wulfgarl
rem del $SYSTEM:/desktop/wulfgarl

rem Quitamos la base ded datos a la carpeta de aplicaciones
rem del $SYSTEM:/apps/wulfgarl.db
echo "La aplicacion wulfgarl.app ha sido desinstalada."
echo "Borra el acceso directo del escritorio pinchando con el boton derecho sobre el icono del escritorio."
echo "y selecciona -Borrar seleccionado-, pulse una tecla para salir."
pause
