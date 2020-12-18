# Mettre le site en maintenance
drush sset system.maintenance_mode 1

#Récupérer le code
git pull origin master

#Faire le buidl
composer install --no-dev

#Mettre à jour la BD
drush udb -y

#Export des configs de prod
drush csex prod -y

#Import des configs communes
drush cim -y

#Vider le cache
drush cr

# remettre le site en ligne
drush sset system.maintenance_mode 0
