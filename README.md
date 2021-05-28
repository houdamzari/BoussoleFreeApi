# Laravel Project
## Laravel basics :

![N|Solid](https://res.cloudinary.com/practicaldev/image/fetch/s--JoY1eRaD--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://embed-fastly.wistia.com/deliveries/9c85353a926f914df6d193b126374548.webp%3Fimage_crop_resized%3D1280x720)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Before we can start building our project, we need to talk about some basic concepts in Laravel. Let’s start by making some preparations, install the necessary software, create a new Laravel project, and then, we need to understand the MVC structure, which is commonly used by most of the web frameworks. And finally, we'll talk about Laravel Nova, the official admin panel for Laravel applications.

- [Laravel Tutorial #1: Setup the Project](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-1-setup-the-project/)
- [Laravel Tutorial #2: Routing](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-2-routing/)
- [Laravel Tutorial #3: The MVC Structure](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-3-the-mvc-structure/)
 - [Laravel Tutorial #4: Admin Panel](https://www.techjblog.com/index.php/2020/09/laravel-tutorial-4-admin-panel/)

## Installation

Laravel requires [Node.js](https://nodejs.org/) v10+ to run.

Creating the Laravel project named as BoussoleApiFree
```sh
composer create-project laravel/laravel BoussoleApiFree
```

Create the model we are going to be using
```sh
php artisan make:model Userrs -m
```
- -m (to generate the migration table and model)

Add firstname and lastname to the users table as strings : 
```sh
$table->string('firstname')
$table->string('lastname')
```
Add protected fillables to the model Userrs: 
```sh
Protected $fillable ["firstname","lastname"];
```
Configure the .env DB connection (I created a DB named boussolepro) :
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=boussolepro
DB_USERNAME=root
DB_PASSWORD=1234
```
Migrating everything into DB :
```sh
php artisan migrate 
```
Creating the controller :
```sh
php artisan make:controller UserrsController
```
## Routes and Controller configuration :

Creating 3 methods :
- index() :to return the main form in the '/' route 
 ```sh
public function index()
    {
        return view('form');
    }
```
    
- store() :to store the form data to the DB in the '/store-form' route
 ```sh
 public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|regex:/^[A-Z][^A-Z]*$/',
            'lastname' => 'required|regex:/[A-Z]+/',
    ]);

        $userr = new Userrs;
        $userr->firstname = $request->firstname;
        $userr->lastname = $request->lastname;
        $userr->save();
        return redirect('/redirect');
    }
```
- redirect():to get the form data stored in the '/redirect' route.
```sh
 public function redirect(){
        $users = DB::select('select * from userrs ORDER BY id DESC limit 1');
        return view('redirect',['user'=>$users]);
        }
```
- generatePDF(): to generate a PDF where the form data is stored in the '/generate-pdf' route.  
```sh
public function generatePDF()
    {
        $Userr = DB::select('select * from userrs ORDER BY id DESC limit 1');
            $data = [
                'firstname' => $Userr[0]->firstname,
                'lastname' => $Userr[0]->lastname,
            ];
            $pdf = PDF::loadView('myPDF', $data);
            return $pdf->download('pdf_file.pdf');
                                return redirect()->back();

    }
```

## Launching the project

- Configure the .env file to work on your own DATABASE.

- Run the following commands :
```sh
composer require
```
```sh
php artisan migrate
```
```sh
php artisan serve
```
- And get to this link : 
http://127.0.0.1:8000/
