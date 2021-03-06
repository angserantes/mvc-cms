# Aplicación modelo vista controlador-CMS

1. Abrimos Laragon y generamos el esqueleto del proyecto con los diferentes directorios, que son los siguientes:
   Controller

   Model

   View

   Public

2. Nos logueamos usando en la consola mysql -u root
3. Generamos base de datos de hogwarts
4. Creamos la tabla de usuarios y noticias llamando a la base de datos
USE db_hogwarts;
5. creamos tabla de usuarios:

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(16) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `fecha_acceso` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `usuarios` tinyint(1) NOT NULL DEFAULT '0',
  `noticias` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

6. creamos la tabla para noticias:

USE db_hogwarts;
CREATE TABLE `noticias` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL DEFAULT '',
  `slug` varchar(36) DEFAULT '',
  `entradilla` varchar(128) DEFAULT '',
  `texto` longtext,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `fecha` datetime DEFAULT NULL,
  `autor` varchar(64) DEFAULT NULL,
  `imagen` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


7. Contraseñas encriptadas, obtener-hash.php

USE db_hogwarts;
INSERT INTO usuarios VALUES
    (1,"admin","$2y$12$B6IXl9ePQKKYdD37zUMwjuXNQsIrwD2b1voE6GCLAj.Kq0wI3ArEm?>",null,1,1,1),
    (2,"operador1","$2y$12$/LJ6ThylpqHhK4hbDvdFlOoOFjRPDVRVgre9EAiSaAexYEE8kOFre?>",null,1,0,1),
    (3,"operador2","$2y$12$mUjET9dsw5b0gGL2J4iL8Oo3PyOjJL3AHzefJwZ3Y3u6w.HUm/S8O?>
",null,0,0,1)
;

8. Completamos los archivos de controller, model y public

9. Resultado final:

![Inicio](https://i.ibb.co/rbjQV4Y/Fire-Shot-Capture-003-Noticias-de-Harry-Potter-mvc-test.png)

![Noticias](https://i.ibb.co/M5JL2Pq/Fire-Shot-Capture-005-Noticias-de-Harry-Potter-mvc-test.png)

![Acerca-de](https://i.ibb.co/tLRrKNy/Fire-Shot-Capture-007-Noticias-de-Harry-Potter-mvc-test.png)

![Admin](https://i.ibb.co/LYfGSvF/Fire-Shot-Capture-008-Panel-de-administraci-n-mvc-test.png)

Añadimos una nueva noticia llamada Dobby:

![Dobby](https://i.ibb.co/6Dz49nD/Fire-Shot-Capture-009-Noticias-de-Harry-Potter-mvc-test.png")

10. Creamos una página nueva de contacto: añadimos un nuevo archivo llamado contacto.php en el directorio app. Se modifica el header.php añadiendo  un li de contacto. Despúés en el AppController creamos una función nueva de la siguiente forma: 
    1.  public function contacto(){

        //Llamo a la vista
        $this->view->vista("app", "contacto");
    2. en index.php de la carpeta public en la parte del front-end añadimos lo siguiente:
           case "contacto":
        controller()->contacto();
        break;
    3. Creamos un formulario de Registro con JS
        Se visualizaría en el navegador de la siguiente forma:

        ![Contacto](https://i.ibb.co/t4JCs7S/Fire-Shot-Capture-013-Noticias-de-Harry-Potter-mvc-test.png)