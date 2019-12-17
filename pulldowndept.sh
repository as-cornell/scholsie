git pull gh master
composer install
drush rsync @artscicornell.prod."$1":%files/ ~/Sites/drupal-vm-cd/sites/scholsie/web/sites/dept/files -y
drush @artscicornell.prod."$1" sql:dump > ~/Sites/drupal-vm-cd/sites/scholsie/web/deptacquia.sql -y
drush @drupalvm.scholsie.dept sql-drop -y
drush @drupalvm.scholsie.dept sql-cli < ~/Sites/drupal-vm-cd/sites/scholsie/web/deptacquia.sql
drush @drupalvm.scholsie.dept updb -y
drush @drupalvm.scholsie.dept dis securepages -y
drush @drupalvm.scholsie.dept vset --yes file_public_path 'sites/dept/files'
drush @drupalvm.scholsie.dept vset --yes file_private_path 'sites/dept/files/private'
drush @drupalvm.scholsie.dept vset --yes file_temporary_path '/tmp'
drush @drupalvm.scholsie.dept vset --yes preprocess_css FALSE
drush @drupalvm.scholsie.dept vset --yes preprocess_js FALSE
drush @drupalvm.scholsie.dept vset --yes jquery_update_jquery_version 1.9
drush @drupalvm.scholsie.dept vset --yes jquery_update_jquery_admin_version 1.8
drush @drupalvm.scholsie.dept cc all -y
drush @drupalvm.scholsie.dept uli
