# Publicar en Render

## 1. Subir el proyecto a GitHub

1. Abre el panel **Control de código fuente** de VS Code.
2. Pulsa **Publicar rama** o **Publicar en GitHub**.
3. Crea un repositorio nuevo, por ejemplo `amor-y-amistad`.
4. Si la página es solo para Darlyn, selecciona repositorio privado.
5. Confirma la publicación de todos los archivos del proyecto.

No subas el archivo `.env`. Está protegido por `.gitignore`.

## 2. Crear el servicio en Render

1. Entra a [render.com](https://render.com) y crea una cuenta con GitHub.
2. Selecciona **New +** y luego **Blueprint**.
3. Elige el repositorio `amor-y-amistad`.
4. Render detectará `render.yaml` y `Dockerfile`.
5. Pulsa **Apply** o **Deploy**.

Render construirá Laravel, instalará Composer, compilará Vite y generará una URL como:

`https://amor-y-amistad.onrender.com`

## 3. Después del despliegue

- La URL funciona aunque tu computador esté apagado.
- El plan gratuito puede tardar unos segundos en despertar después de un periodo sin visitas.
- Para actualizar la página, publica los cambios en GitHub y Render volverá a desplegarla automáticamente.
- No compartas claves, contraseñas ni archivos `.env`.

## Nota local

Para validar Docker en tu computador debes abrir Docker Desktop. El despliegue remoto de Render no depende de que Docker esté abierto localmente.
