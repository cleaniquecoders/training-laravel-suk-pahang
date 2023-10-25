## CRUD

-   [x] Controller
-   [x] Route
-   [x] View
-   [x] Eloquent
    -   [x] Paginate
    -   [x] Create
    -   [x] Update
    -   [x] Delete
-   [x] Policy
-   [x] Seeder
-   [x] Artisan
-   [x] Package
    -   [x] Spatie - Laravel Permission
    -   [x] Laravel Pint - Laravel Pint is an opinionated PHP code style fixer for minimalists.
    -   [x] Larastan - Adds code analysis to Laravel improving developer productivity and code quality.

### Controller

Create a single method controller:

```bash
php artisan make:controller WelcomeController --invokable
```

Create resource controller with binding model:

```bash
php artisan make:controller UserController --model=User
```

### Route

Create route using closure:

```php
Route::get('/', function() {
    return view('welcome');
});
```

Create route using view only:

```php
Route::view('/', 'welcome');
```

Create route using single method / invokable controller:

```php
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);
```

Create resource controller routes:

```php
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);
```

### View

Looping:

```php
@foreach($users as $user)
...
@endforeach
```

Control Structure:

```php
@if(...)
...
@endif
```

```php
@can('delete', $user)
...
@endcan
```

### Eloquent

Get all data:

```php
$users = User::all();
// OR
$users = User::get();
```

Paginate data:

```php
$users = User::paginate();
```

Create new record:

```php
$user = User::create([
    'name' => 'Nasrul',
    'email' => 'nasrul@gmail.com',
]);
```

Update record:

```php
User::where('email', 'nasrul@gmail.com')
    ->update([
        'name' => 'Nasrul Hazim',
    ]);
// OR
$user->update([
    'name' => 'Nasrul Hazim',
]);
```

Delete record:

```php
User::where('email', 'nasrul@gmail.com')->delete();
// OR
$user->delete();
```

### Artisan

List of available commands:

```bash
php artisan
```

Create new seeder:

```bash
php artisan make:seeder PermissionSeeder
```

Create new controllers:

```bash
php artisan make:controller UserController --model=User
```

Create new policy:

```bash
php artisan make:policy UserPolicy --model=User
```

### Seeder

Create new seeder:

```bash
php artisan make:seeder PermissionSeeder
```

Seed data:

```bash
php artisan db:seed
```

Seed specific seeder:

```bash
php artisan db:seed --class=PermissionSeeder
```
