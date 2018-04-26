
#Canvis

###Laravel Mix

- Dins *resources/assets* hi tendrem tots es nostres .css, .js i imatges associades al projecte, aquests arxius es compilaran en un sol arxiu executant `npm run dev`.
> Nota : en passar a producció s'executara `npm run production` que finalment deixara els arxius tambe minificats (optimitzats).També executant `npm run watch` fa lo mateix que dev pero se queda escoltant per canvis a qualque css o js, i es compila automàticament, domes fent falta refrescar es navegador per veure canvis.
- Per les imatges i tot lo generat per un usuari com avatars i arxius d'accés públic es disposará dins *storage/app/public* on haurem de crear un accés directe de *public/storage -> storage/app/public* executant la comanda `php artisan storage:link`

###Mail

- Simplement s'ha creat la carpeta Mail dins dins l'aplicacio, amb una clase NotifyEmail, que sera on hi haura l'email de notificacions que enviarem als client per exemple. Dins aquesta carpeta centralitzarem tot lo que son emails.

