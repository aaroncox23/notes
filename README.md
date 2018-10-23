# Quick Notes App

## Getting Started
This is a simple Laravel and Bootstrap Framework application, if you are familar with how to set these up then do it your way but if not here's a quick setup guide.

### Step 1 - Installation

>*Run all commands from the root of the project folder*

Get Laravel up and running with:
```bash
composer install    
```
Once that has finished run npm:
```bash
npm install
```

### Step 2 - Running the Application
You'll need to get your `.env` setup so it'll work with whatever hosting setup you have.

Below is a sample of what is in `.env.example` that comes with the project and this contains the setup information 
we require.
```dotenv
APP_NAME=Notes
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=notes
DB_USERNAME=root
DB_PASSWORD=
```
Fill in all `DB` sections so they match your hosting environment.

Then to generate a secure `APP_KEY` use the following command:
```bash
php artisan key:generate
```
This is used to authenticate laravel and seed the encryption system it uses.

### Step 3 Migrating and Seeding the Database
To migrate and seed the database, firstly make sure that you have directed your `DB` flagged headers in your `.env` 
to an existing database your have already setup.

Once you have ensure this run the following command to seed and migrate your database.
```bash
php artisan migrate
```

And wait for it to finish.

### Starting the application
Once you have everything installed, setup and linked you have to boot with these commands in 
different 
terminals.
#### Laravel
```bash
php artisan serve
```
This boots the Laravel Environment on your local machine and gets you started with a basic local development 
web server.
#### Front End 
```bash
npm run prod
```
This starts Laravel Mix and automatically compiles Javascript and Stylesheets into easy to reference single files 
which we reference in our webpages.
