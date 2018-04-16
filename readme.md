Yuu LTE Specs
===========

More Document 
-------------------------
Open more document in 
/public/mdwiki/

Program Include 
-------------------------
* laravel 5.5
* [Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) 
* YuuLte lib

Server Requirements (Laravel framework )
-------------------------
The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension


Installing Yuu LTE
-------------------------
* Clone or download from [git](https://github.com/yughoz/yuuLTE)
* Create empty database mysql Ex : yuuDB
* Use PHP's built-in development server to serve your application, you may use the serve Artisan command.  Running laravel migration
```bash
  php artisan migrate
```
* This command will start a development server at http://localhost:8000:
```bash
  php artisan serve

  #if you use Virtual Server
  #php artisan serve --host=YourVirualIP --port=8000

  #ex : 
  php artisan serve --host=192.168.1.20 --port=8000
```
* Open http://localhost:8000/public/login for the first time click register
* And than login 
