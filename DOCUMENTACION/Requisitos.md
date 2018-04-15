# <center>Requisits de l'aplicació.</center>

### <center>Projecte</center>

- Crear nou projecte.
- Eliminar projecte.
- Informació de nom , empresa que sol.licita el projecte, client amb accés .
- Informació d'estat.
- Informació de quins usuaris hi treballen.
- Informació d'idiomes.
- Informació d'arxius (localització o llistar-los al dashboard).
- Informació de la estructura que té el projecte per poder ser clonada i adoptada per projectes veniders.
- Llistat de requeriments acordats amb client.

> Tota la informació d'estructura de projecte estará dins l'atribut propi de la base de dades, simplement es recorrerá aquest JSON i es creará l'estructura d'arbre. 

- Mostrar informació de l'estructura de carpetes.

### <center>Plantilla / Estructura</center>

- Crear plantilla, aquest procés ve determinat prèviament per la creació d'un projecte, des d'on sí es podrá crear una plantilla/estructura nova creant pàgina i associant-li els mòduls pertinents.
- CRUD de pàgines i mòduls


---

## Usuaris de l'aplicació
### <center>Client</center> 

- Veure informació rellevant del projecte.
- Creació de notes al projecte de forma global o local a les pàgines d'aquest.
- Recepció d'email pel qual entrera a la nostra applicació mitjançant el link proporcionat per validar una pàgina. Se enviara un email per cada pàgina a validar?
- Validació de textes Excel.
- Validació de pàgines del projecte en fase dev.
- Validar el projecte per poder passar-lo a producció.
- Veure els requisits establerts inicialment i presupostats.
- Afegits : podria tenir un contacte directe a través de slack, es client podria solicitar una invitació i així accedir a sa aplicació.

### <center>Administrador de projectes</center>

- Crear projecte.-> Plus : crear instruccions per consola, 
    > crear proyecto 'nombre' 'plantilla_albellons'
- Eliminar projecte.
- Informació de projecte.
- Gràfics amb dades.
- Dates aprox. d'entrega.
- Establir fase en que es troba el projecte.
- Veure notes associades, crear-ne i modificar-ne. Així com associar tasques a als usuaris del projecte.
- Limitar temps de les tasques associades?
- Estimacions de temps.


### <center>Administrador</center>

- Informació completa dels projectes.
- Accés a través de la api. /api/admin/info/projecte_albellons

### <center>Usuaris (maquetadors, programadors)</center>

- Crear projecte.-> Plus : crear instruccions per consola, 
    > crear proyecto 'nombre' 'plantilla_albellons'
- Informació de projecte.
- Gràfics amb dades.
- Dates aprox. d'entrega.
- Veure notes associades al projecte. Aixi com les associades a si mateix.
- Pujar arxius. 