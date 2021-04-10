
composer global require laravel/installer

composer create-project --prefer-dist laravel/laravel blog "6.*"


php artisan serve

php artisan make:Controller PostsController

mysql -u root


php artisan make:model Post

php artisan make:migration create_posts_table

php artisan migrate

php artisan make:migration add_title_to_posts_table

php artisan migrate

php artisan migrate:rollback

php artisan migrate

php artisan migrate:fresh

php artisan help make:model

php artisan make:model Project -mc

php artisan make:model Assignment -mc

php artisan migrate

php artisan tinker

$assignment = new App\Assignmnet;

$assignment->body = 'Finish school work';
$assignment->save();
App\Assignmnet::all();

npm -v

npm install 

npm run dev

npm run watch

php artisan make:model Article -m

php artisan migrate

7 Restfull Controller Action

index, show, create, store, edit, update, destory

php artisan help make:controller





