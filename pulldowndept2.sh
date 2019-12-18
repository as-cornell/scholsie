git pull gh master
composer install
drush -y rsync @artscicornell.prod."$1":%files/ ~/Sites/drupal-vm-cd/sites/scholsie/web/sites/dept2/files
drush @artscicornell.prod."$1" sql:dump > ~/Sites/drupal-vm-cd/sites/scholsie/web/deptacquia.sql -y
drush @drupalvm.scholsie.dept2 sql-drop -y
drush @drupalvm.scholsie.dept2 sql-cli < ~/Sites/drupal-vm-cd/sites/scholsie/web/deptacquia.sql
drush @drupalvm.scholsie.dept2 updb -y
drush @drupalvm.scholsie.dept2 dis simplesamlphp_auth -y
drush @drupalvm.scholsie.dept2 dis securepages -y
drush @drupalvm.scholsie.dept2 vset --yes file_public_path 'sites/dept2/files'
drush @drupalvm.scholsie.dept2 vset --yes file_private_path 'sites/dept2/files/private'
drush @drupalvm.scholsie.dept2 vset --yes file_temporary_path '/tmp'
drush @drupalvm.scholsie.dept2 vset --yes preprocess_css FALSE
drush @drupalvm.scholsie.dept2 vset --yes preprocess_js FALSE
drush @drupalvm.scholsie.dept2 vset --yes jquery_update_jquery_version 1.9
drush @drupalvm.scholsie.dept2 vset --yes jquery_update_jquery_admin_version 1.8
drush @drupalvm.scholsie.dept2 cc all -y
drush @drupalvm.scholsie.dept2 uli
