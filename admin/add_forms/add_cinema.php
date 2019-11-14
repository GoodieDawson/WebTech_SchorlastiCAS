<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/submit_admin_forms.js"></script>
    <link type="text/css" rel="stylesheet" href="../../css/admin_forms.css"></link>
    <title>Add a New Cinema</title>
</head>
<body>

    <div class="container">
        <h2>New Cinema</h2>
        <h1>Add a new cinema!</h1>
    
        <form action="" method="POST" id="add_cinema_form">
            <div class="fields">
                <span>
                    <input name="cinema_name" id="cinema_name" placeholder="Cinema name" type="text" required />
                </span>
                <br />
                <span>
                    <input name="cinema_address" id="cinema_address" placeholder="Address" type="text" required />
                </span>
                <br />
                <span>
                    <input name="cinema_telephone" id="cinema_telephone" placeholder="Telephone" type="text" required />
                </span>
                <br />
                <span>
                    <input name="cinema_email" id="cinema_email" placeholder="Email" type="email" required />
                </span>
            </div>
            <div class="submit">
                <input class="submit" value="Submit" type="button" id="add_cinema" />
            </div>
        </form>
    </div>

</body>
</html>