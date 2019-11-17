<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- CSS -->
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link type="text/css" rel="stylesheet" href="../css/admin_forms.css"></link>
    <title>Home - Admin</title>
</head>
<body>

    <div class="container">
        <h2>Modify Flicks</h2>

        <div class="wrapper">
            <nav class="tabs">
                <div class="selector"></div>
                <a href="index.php" class="active"><i class="fas fa-plus"></i>Add</a>
                <a href="index.php"><i class="far fa-edit"></i>Update</a>
                <a href="index.php"><i class="fas fa-trash-alt"></i>Delete</a>
            </nav>
        </div>

        <h1 id="flick_action">Insert an Entry!</h1>

        <div class="home-fields">
            <br/>
            <div>
                <a id="add_a_cinema" href="add_forms/add_cinema.php"> ADD A CINEMA </a>
            </div>
            <br/>
            <div>
                <a id="add_a_theatre" href="add_forms/add_theatre.php"> ADD A THEATRE </a>
            </div>
            <br/>
            <div>
                <a id="add_a_movie" href="add_forms/add_movie.php"> ADD A MOVIE </a>
            </div>
            <br/>
            <div>
                <a id="add_a_showtime" href="add_forms/add_showtime.php"> ADD A SHOWTIME </a>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="../js/admin_page_nav.js"></script>
</body>
</html>