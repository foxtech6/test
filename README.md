

required: php7.1.26

How install:

- configure (apache2/nginx/docker): root path - _public/index.php_
- specify the database access in the file _config/db.php_

for example:
```php
return [
    'host' => 'localhost',
    'db'   => 'db_name',
    'user' => 'username',
    'pass' => 'password'
];
```

and execute commands:
```sh
#composer depends
$ composer install
#db migrations
$ php update 
```

[micro framework kernel](https://github.com/foxtech6/vc-kernel)
