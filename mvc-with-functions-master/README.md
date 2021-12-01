# MVC with Functions
This practical looks at moving from an application built using flat PHP files to an MVC structure that uses functions to structure code. You need a good grasp of basic function concepts - arguments, parameters, returning values etc. before attempting this.

* We will base this on the solution from week 4, where we implemented CRUD functionality using the films database. If you don't have this work, you can view it at https://github.com/CIT2202/films-single-table-crud/tree/solutions.
* You will need the films database we have worked with previously. If you don't, you can download it from https://github.com/CIT2202/sql-joins/blob/master/films-db.sql. Import this table using phpmyadmin and check it has worked.

I have done quite a lot of the work for you already. If you have a look in the models folder, there is a file, *film-model.php*. This contains a number of functions for working with a film database table e.g. *getFilmById*, *saveFilm*, *deleteFilms* etc. If you look in the views folder, there is a file *list-view.php*. This file contains code for outputting a list of films.

* Change the connection settings in *film-model.php* so they match your database.
* Open *browseable-list.php* in a web browser. Make sure it works.
* Open *browseable-list.php* in a text editor. See how it uses both *film-model.php* and *list-view.php*

```php
<?php
include "models/film-model.php";
$films = getAllFilms();
$title = "List all films";
include "views/list-view.php";
?>
```

* Take a moment to really understand how the code in these files has been organised.
  - *browseable-list.php* is your controller.
  - *film-model.php* is the model.
  - *list-view.php* is the view.

* Now try and do something similar for a details page i.e. re-factor the *details.php* file we have looked at previously to use an MVC structure.
  * This page should call the function *getFilmById()* in the *film-model.php* file to retrieve data from the database.
  * *details.php* should include a view file to output the details for the selected film. You will need to create this file, *details-view.php*. Save this in the *views* folder.

* Try and use an MVC structure to implement create functionality i.e. inserting data into a database. Again there are already functions in the model that will help you.  
