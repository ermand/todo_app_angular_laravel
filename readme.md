## ToDo App in Angular and Laravel

### Description
Applications allows to add new ToDo items, complete them, and edit uncompleted ones.

### Installation
- Clone application locally.

- Go to application's directory
    > `cd Project/Path`

- Run the below composer command in terminal
    > `composer update`

- Open project in editor and change mysql database credentials in file: `app/config/database.php` line

        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'todos',
            'username'  => 'root',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),

- Create a new database named `todos` in your local mysql.
*__Note:__ Make sure that the database user configured in database.php has access rights on newly created table `todos`*

- Run below command for adding tables by laravel migration.
    > `php artisan migrate`

- Run below command to seed todos table with some dummy data.
    > `php artisan db:seed`

- Open terminal in app folder and run the below command to start artisan's server.
    > `php artisan serve`

- Open browser to URL: http://localhost:8000/

- ToDo app should be opened and all todos are listed.
