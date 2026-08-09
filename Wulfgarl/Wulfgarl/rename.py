import os

for archivo in os.listdir('.'):
    if archivo.endswith('.pic'):
        nombre_sin_ext = os.path.splitext(archivo)[0]
        nuevo_nombre = f"{nombre_sin_ext}.pi"
        os.rename(archivo, nuevo_nombre)
        print(f"Renombrado: {archivo} -> {nuevo_nombre}")