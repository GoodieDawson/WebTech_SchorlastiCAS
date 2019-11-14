<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link type="text/css" rel="stylesheet" href="../css/admin_forms.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Home - Admin</title>
</head>
<body>

    <div class="container">
        <h2>Update Flicks</h2>

        <div class="wrapper">
            <nav class="tabs">
                <div class="selector"></div>
                <a href="index.php" class="active"><i class="fas fa-plus"></i>Add</a>
                <a href="index.php"><i class="far fa-edit"></i>Update</a>
                <a href="index.php"><i class="fas fa-trash-alt"></i>Delete</a>
            </nav>
        </div>

        <h1>Insert an Entry!</h1>

        <div class="fields">
            <div>
                <input value="ADD A CINEMA" type="button" id="add_a_cinema" />
            </div>
            <br/>
            <div>
                <input value="ADD A THEATRE" type="button" id="add_a_theatre" />
            </div>
            <br/>
            <div>
                <input value="ADD A MOVIE" type="button" id="add_a_movie" />
            </div>
        </div>

    </div>

    <script type="text/javascript" src="../js/admin_page_nav.js"></script>
</body>
</html>