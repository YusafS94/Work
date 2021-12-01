<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="film-update.php" method="post">

    <!-- <input type="hidden"> creates a hidden text field i.e. not visible to the user
        we use it to store the id number of the selected film -->
    <input type="hidden" name="id" value="<?php echo $film["id"];?>">

    <div>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo $film["title"];?>">
    </div>
    <div>
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" value="<?php echo $film["year"];?>">
    </div>
    <div>
    <label for="duration">Duration:</label>
    <input type="text" id="duration" name="duration" value="<?php echo $film["duration"];?>">
    </div>
    <div>
    <p>Please enter an id number for the certificate. 1 = U, 2 = PG, 3 = 12, 4 = 15, 5 = 18. We will look at a better way of doing this later in the course.</p>
    <label for="certificate">Certificate:</label>
    <input type="text" id="certificate" name="certificate" placeholder=" e.g. 2 for PG" value="<?php echo $film["certificate_id"];?>">
    </div>

    <input type="submit" name="submitBtn" value="Update film details">
</form>
</body>
</html>