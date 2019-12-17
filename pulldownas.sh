git pull gh master
composer install
drush rsync @artscicornell.prod.as:%files/ ~/Sites/drupal-vm-cd/sites/scholsie/web/sites/default/files -y
drush @artscicornell.prod.as sql:dump > ~/Sites/drupal-vm-cd/sites/scholsie/web/asacquia.sql -y
drush @drupalvm.scholsie.as sql-drop -y
drush @drupalvm.scholsie.as sql-cli < ~/Sites/drupal-vm-cd/sites/scholsie/web/asacquia.sql
drush @drupalvm.scholsie.as dis securepages -y
drush @drupalvm.scholsie.as vset --yes file_public_path 'sites/default/files'
drush @drupalvm.scholsie.as vset --yes file_private_path 'sites/default/files/private'
drush @drupalvm.scholsie.as vset --yes file_temporary_path '/tmp'
drush @drupalvm.scholsie.as vset --yes preprocess_css FALSE
drush @drupalvm.scholsie.as vset --yes preprocess_js FALSE
drush @drupalvm.scholsie.as vset --yes jquery_update_jquery_version 1.9
drush @drupalvm.scholsie.as vset --yes jquery_update_jquery_admin_version 1.8
drush @drupalvm.scholsie.as cc all -y
drush @drupalvm.scholsie.as uli
