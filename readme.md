# simple Laravel Blog with voyager admin template
# in your project dir create new laravel app
composer create-project --prefer-dist laravel/laravel blogpost

# then add homestead
composer require laravel/homestead

# make homestead file
vendor/bin/homestead make

# edit env 
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

# open /etc/hosts add new string 
nano /etc/hosts
192.168.10.10  homestead.test

# edit db connection in ide:
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

# run vm machine 
vagrant up

# connect
vagrant ssh

# and install voyager admin template
cd code
composer require tcg/voyager
npm i
php artisan voyager:install --with-dummy

# now app is available
# frontend
http://homestead.test

## backend with dummy user :
http://homestead.test/admin

email: admin@admin.com
password: password
