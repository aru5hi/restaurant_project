Follow the steps to create the migrations:
1. Install composer and xampp
2. got to command prompt/terminal and copy paste the followng command in c:/xampp/htdocs
      composer create-project laravel/laravel new 5.7
3. A folder named "new" is created. now write this command
          cd new
4. Now got to te new folder using file explorer, copy the 4 migration files in new/databses 
5 Go to command prompt type the followng
      php artisan migrate
      
 6 Tables are created!
