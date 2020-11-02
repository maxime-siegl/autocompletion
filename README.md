# autocompletion
barre de recherche

La base de données a été remplie à partir de données récupérées grâce à l'API webservice de MediaWiki.
Il s'agit de 50 résultats comprenant les noms de philosophes et les extraits d'articles qui leur sont associés.

Les fichiers data.js et insert_into_db.php ont pour unique fonction d'insérer le contenu des fichiers json
provenant de l'API dans la base MySQL. Ils n'ont pas vocation à être réutilisés dans le code dès lors que
autocompletion.sql est généré.
