Proyecto Integrador PHP
Talent Camp CRUD

Pasos que hice para crear el proyecto.
Creé el proyecto por bash.
controlador - app/http/controller
modelo - app/http/Models
vista - Resources/views/client
database - migrations
Creé el primer modelo con php artisan make:model Client -mcr.
Luego la tablas para la base de datos. La agregue en el file .env (DB_DATABASE=talent-camp-crud
DB_USERNAME=root).
Agregué el comando php artisan migrate para migrar la database
Para los estilos utilicé bootstrap 5, modifique el welcome.blade.
En la carpeta views cree una carpeta llamada themes para conectar bootstrap (llamado base.blade.php).
Conecté el welcome.blade junto a base.clade.
En routes/web agregue la ruta del controlador llamado ClientController.php.
Con php artisan route:list cree las diferentes rutas para client.
En views cree la carpeta client donde estan los dos files form.blade e index.blade.
En estos dos archivos creo los diferentes forms para crear el CRUD. En ambos archivos ademas de ClientController.php, estan las diferentes validaciones correspondientes.

DEMOSTRACION (no me sale el audio!)
chrome-extension://igkkmokkmlbkkgdnkkancbonkbbmkioc/preview/preview.html?id=1666906321480
