## About This Project

This application uses the following tech stack:
 - The frontend is React.
 - The backend is Laravel.
 - These layers are connected by Inertia.
 - The database is SQLite.

The site itself is a simple form that creates a record representing a pen & paper rpg character.
This was my first time using Inertia and SQLite, and I hadn't used React or Laravel for years.
Learning how to assemble all the pieces was a fascinating experience.
If you'd like more insight into my learning process, check out captainslog.txt.


## Startup

To run the project you need these pre-requisites:
 - PHP up to date, with the fileinfo and sqlite extensions enabled.
 - Composer
 - Node and npm up to date

Once you have all that, run these commands in the project folder.  
Install packages:
 - `npm install --save`
 - `php composer.phar install`  (depending on your setup, you may need to follow the command-line installation steps at https://getcomposer.org/download/)

Create the database (answer 'yes' when asked to create the database, since it won't exist beforehand):
 - `php artisan migrate`
 - `php artisan db:seed`  
 
Run the project (both of these need to be running at the same time)
 - `npm run dev`
 - `php artisan serve`

The site will be served to localhost:8000.


## License

No license is provided for this project.
