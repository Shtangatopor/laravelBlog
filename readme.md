##  in your project dir create new laravel app then add homestead with composer and run it
composer create-project --prefer-dist laravel/laravel blogpost
composer require laravel/homestead
vendor/bin/homestead make

# edit env file
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://homestead.test

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret

# add new string to: /etc/hosts 
nano /etc/hosts
192.168.10.10  homestead.test

## edit db connection in ide:
General :
localhost
root
secret
homestead

Shh:ssl :
host 127.0.0.1
proxy user : vagrant
port : 2222
auth type: key pair(ssh)
/home/otaky/project/blogPost/.vagrant/machines/blogpost/virtualbox/private_key

## run vm machine and install package
vagrant up
vagrant ssh
cd code
composer require tcg/voyager
npm i
php artisan voyager:install --with-dummy

##now app is available
## frontend
http://homestead.test

## backend
http://homestead.test/admin

##with dummy user :
email: admin@admin.com
password: password
