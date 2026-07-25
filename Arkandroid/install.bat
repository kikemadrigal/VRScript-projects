rem comprimimos todos los archivos en ua app con ziptool
CD ./app
ZIPTOOL /C /Y Arkandroid.app 
ZIPTOOL /A Arkandroid.app ./*.*
CD..

rem Copiamos la aplicación a la carpeta de aplicaciones
move ./app/Arkandroid.app $SYSTEM:/apps/Arkandroid.app
rem Copiamos la base ded datos a la carpeta de aplicaciones
rem copy ./app/arkandroid.db $SYSTEM:/apps/arkandroid.db

rem Creamos el archivo lanzador
echo "[Desktop Entry]" > Arkandroid.desktop
echo "Version=1.4" >> Arkandroid.desktop
echo "Terminal=false" >> Arkandroid.desktop
echo "Type=Application" >> Arkandroid.desktop
echo "Name=Arkandroid" >> Arkandroid.desktop
echo "Exec=$SYSTEM:/apps/Arkandroid.app" >> Arkandroid.desktop
echo "Icon=$SYSTEM:/apps/Arkandroid.app/app.png" >> Arkandroid.desktop
echo "Categories=Games" >> Arkandroid.desktop
echo "Keywords=arkandroid;Arkandroid" >> Arkandroid.desktop
echo "."

rem Creamos el lanzador o acceso directo o lin del escritorio
copy Arkandroid.desktop $SYSTEM:/user/desktop/Arkandroid
move Arkandroid.desktop $SYSTEM:/desktop/Arkandroid