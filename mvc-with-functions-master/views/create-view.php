<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new film</title>
</head>
<body>
    <form action="save.php" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="year">Year</label>
            <input type="text" name="year" id="year">
        </div>
        <div>
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration">
        </div>
        <div>
            <p>Please enter an id number for the certificate. (1 = U, 2 = PG, 3 = 12, 4 = 15, 5 = 18). We will look at a better way of doing this later in the course.</p>
            <label for="certificate">Certificate:</label>
            <input type="text" name="certificate" id="certificate" placeholder="e.g 2 for PG">
        </div>
        <input type="submit" name="submitBtn" value="Add Film">
    </form>