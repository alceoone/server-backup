# membuat Model + Database 
php artisan make:model namaDatabase --migration
# refresh database
php artisan migrate:refresh --seed
php artisan passport:install
# Link Stirage
php artisan storage:link
# Link Stirage
php artisan make:controller NamaController --resource
php artisan make:migration add_active_to_app_details_table --table=app_details
php artisan make:migration add_active_to_users_table --table=users# server-backup
# server-backup
mysql -u root -p
CREATE DATABASE serverbackup;
qazwsxedc1Q@
# server-backup
/var/www/html/backup-server/server-backup
