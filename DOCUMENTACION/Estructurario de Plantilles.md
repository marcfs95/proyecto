# Estructuració del sistema de plantilles

---

### <center>1. Persistència</center>

Les plantilles/estructura estarán enmagatzemades a la base de dades com atribut de projecte en format JSON. A partir d'aquí un usuari en crear un nou Projecte tendrá accés a crear una estructura des de '0' o d'un projecte ja existent. Decidit aixó la lògica s'encarregara de crear una estructura d'arbre (determinadea pel JSON) al projecte, ruta proporcionada per l'usuari per local i després pujarlo a un repositori o podríem donar l'opció de guardarla directament dins el repositori?.

Els mòduls de codi es guardaran dins un camp BLOB (mediumblob o longblob).

`mysql> CREATE TABLE modulo(`

    -> id int not null auto_increment primary key,
    -> nombre varchar(50),
    -> titulo varchar(50),
    -> contenido mediumblob,
    -> tipo varchar(50));`

És a dir, un projecte tendra la seva informació sobre la seva estructura (atribut estructura) la qual ens servirá per copiarla a altres nous projectes, opció de clonació.

### 2. Accés

Es disposará d'una API establerta a la nostra aplicació amb les rutes adequeades (api.php), aquesta petició serà *stateless* i s'accedirà al middleware (api) establert a l'aplicació abans de gestionar la petició en si mateixa, aquest middleware (filtre) s'encarregara de determinar si l'accés es correcte.

Aquest accés al ser sense estat s'haurà de gestionar mitjançant tokens per sabre si l'usuari es qui diu ser, qui gestiona aquesta part serà el middleware anteriorment mencionat.

És a dir, que en accedir un **`usuari(no client)`** a la nostra aplicació se li asignará un token expirable i realitzar les peticions a la nostra api aquesta comprovara si el token es l'adequat.