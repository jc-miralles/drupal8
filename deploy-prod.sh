# Mettre le site en maintenance
drush sset system.maintenance_mode 1

# Sauvegarder la base de données
drush sql-dump > db/bu.sql

#Récupérer le code
git pull origin master

#Faire le buidl
composer install --no-dev

#Mettre à jour la BD
drush updb -y

#Export des configs de prod
drush csex prod -y

# Ajout des configs de prod à la branche Master.
# git add config/prod
# git commit -m "Mise à jour des sonfigs de prod"
# git push origin master

#Import des configs communes
drush cim -y

#Vider le cache
drush cr

# remettre le site en ligne
drush sset system.maintenance_mode 0
