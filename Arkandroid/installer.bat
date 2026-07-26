SET ECHO ON

rem comprimimos todos los archivos en ua app con ziptool
CD ./app
ZIPTOOL /C /Y Arkandroid.app 
ZIPTOOL /A Arkandroid.app ./*.*
CD..

rem Copiamos la aplicación a la carpeta de aplicaciones
move ./app/Arkandroid.app $SYSTEM:/apps/Arkandroid.app
rem Copiamos la base ded datos a la carpeta de aplicaciones
rem copy ./app/arkandroid.db $SYSTEM:/apps/arkandroid.db

rem rem Creamos el archivo lanzador
rem echo "[Desktop Entry]" > Arkandroid.desktop
rem echo "Version=1.4" >> Arkandroid.desktop
rem echo "Terminal=false" >> Arkandroid.desktop
rem echo "Type=Application" >> Arkandroid.desktop
rem echo "Name=Arkandroid" >> Arkandroid.desktop
rem echo "Exec=$SYSTEM:/apps/Arkandroid.app" >> Arkandroid.desktop
rem echo "Icon=$SYSTEM:/apps/Arkandroid.app/app.png" >> Arkandroid.desktop
rem echo "Categories=Games" >> Arkandroid.desktop
rem echo "Keywords=arkandroid;Arkandroid" >> Arkandroid.desktop
rem echo "."
rem 
rem rem Creamos el lanzador o acceso directo o lin del escritorio
rem copy Arkandroid.desktop $SYSTEM:/user/desktop/Arkandroid
rem move Arkandroid.desktop $SYSTEM:/desktop/Arkandroid