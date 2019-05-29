
# Instruction:
* 1: Create a new Database @ ```http://localhost/phpMyAdmin/server_databases.php```, name it ```artapils```
* 2: Now config db info @ ```/.env```.
* 3: Create Migrations for creating table, @ project folder in the terminal: >php artisan make:migration create_articles_table --create=articles
* 4: Now create table schema @ ```/databases/...create_articles_tables```, follow inst [1].
* 5: To fix the string length Error with sqldb @ ```/app/Providers/AppServiceProvider.php```, follow inst [2].
* 6: Create table seed @ terminal, >```php artisan make:seeder ArticlesTableSeeder```
* 7: Create Article seeds @ ```/database/seeds/ArticlesTableSeeder.php```, follow inst [3].
* 8: Create Database seeds @ ```/database/seeds/DatabaseTableSeeder.php```, follow inst [4].
* 9: Generate factory article seeds @ terminal, >php artisan make:factory ArticlesFactory
* 10: Now @ ```/database/factories/ArticlesFactory.php```, follow inst [5].
* 11: Now run model @ terminal, >```php artisan make:model Article```.
* 12: >```php artisan migrate```
* 13: >```php artisan db:seed```
* 14: For article CRUD, @ terminal >```php artisan make:controller ArticleController --resource```
* 15: Create Route to Article @ /routes/api.php, follow inst [6].
* 16: Create article resource @ terminal, >```php artisan make:resource Article```
* 17: Create the CRUD func @ ```/app/Http/Controllers/ArticleController.php```, follow inst [7].
* 18: Go to postman & check out the api @ ```http:localhost/api/articles```
* 19: Now to restrict or display certain fields of the articles, go to @
```/app/Http/Resources/Article.php```, follow inst [8].
* 20: Now for pure json content @ ```/app/Providers/AppServiceProviders```, follow inst [9].



### Person 
* >```php artisan make:model Person -mf```
* >```php artisan migrate```
* >```php artisan make:seed PersonTableSeeder```
* >```php artisan db:seed```
* >```php artisan make:controller PersonController```
* >```php artisan make:resource PersonResource```
* >```php artisan make:resource PersonResourceCollection --collection```
* >```php artisan make:controller Api/v1/PersonController```

* >```php artisan make:resource v2/PersonResource```
* >```php artisan make:controller Api/v2/PersonController```
* >