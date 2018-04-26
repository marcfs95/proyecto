#Estructuració d'usuaris

---

###Tipus 

A la nostra aplicació hi entrarán diferents tipus de usuaris :

1. *Administrador general* 
2. *Administrador de projecte* (probablement un de cada grup)
3. *Programador*
4. *Maquetador*
5. *Client*

Cada usuari disposara d'un landing page diferent, adequat a les seves necesitats. Aquesta estructura es fara amb les plantilles blade propies de laravel on es poden crear components i anar insertant com si d'un trencaclosques es tractás.
Per exemple , tendrem principal.blade.php i dedins podrem anar afegint trossos de codi com ***nav_admin.blade.php*** o ***nav_client.blade.php*** en funció de quin usuari s'ha logeat.

Aquesta decisió de quins privilegis té vendra donat per el **ROLE** que l'usuari té associat dins la nostra aplicació.

###Peticions

Totes les peticions es realitzarán per http i serán gestionades per el middleware asssociat a cada ruta (`segurament middleware web -> per defecte`). A no ser que sigui un accés a API de l'aplicació. 


###Vista (AdminLTE)

####Vista general :
A la vista inicial tots els usuaris excepte els client disposaran de una vista on es mostrara un llistat de tots els projectes existents. Es podria dividir el llistat en fases (acabat, iniciat, en cola, maquetant, programant..). Les notes associades al projecte.

    `Menu Lateral`
            1. Crear nou projecte
            3. Crear nova pàgina plantilla.
            4. Crear nou mòdul plantilla

- Administrador de projectes:
  1. Tendra la opció de crear un nou projecte, clonacio des de repositori o BD de la plantilla, les dues accions han d'estar disponibles.
  2. Tendrá l'opció de crear pàgines o moduls. S'haurá de pujar per tal de poder insertar-la dins la BD.
  3. Ha de poder crear una plantilla nova a partir de les pagines i moduls dels que disposam, es a dir, primer s'haurán de crear i pujar (si són arxius nous) els elements fills per tal de poder crear l'estructura final i guardar-la com a plantilla.
  4. Podra associar usuaris al projecte? o tots associats directament?.
  5. Crear tasques -> es podria mirar API de trello per interactuar.
  6. Crear notes.

`Menu lateral`
    - Projectes : desplegable amb totes les accions possibles damunt un projecte.
            1. Crear nou projecte
            2. Associar usuaris a projecte
            3. Crear nova pàgina plantilla.
            4. Crear nou mòdul plantilla
            
    - Usuaris de la aplicacio : mostrara una vista amb la informacio dels usuaris, no clients. Si se estás a un projecte concret si s'hauria de mostrar els clients i les seves dades associades.
    - 
    

  

