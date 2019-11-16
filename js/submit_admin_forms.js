$(document).ready(function() {

    // Adding a Cinema
    $("#add_cinema").click(function() {
        var cinema_name = $("#cinema_name").val();
        var cinema_address = $("#cinema_address").val();
        var cinema_telephone = $("#cinema_telephone").val();
        var cinema_email = $("#cinema_email").val();
        var cinema_post = $("#cinema_post").val();

        if (cinema_name == "" || cinema_address == "" || cinema_telephone == "" || cinema_email == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            c_name: cinema_name,
            c_address: cinema_address,
            c_telephone: cinema_telephone,
            c_email: cinema_email,
            cinema_post: cinema_post
        }, function(data, status) {
            if (data == 1) {
                alert("Cinema added successfully");
            } else {
                alert("Unsuccessful submission.");
            }

            $('#add_cinema_form').each(function() {
                this.reset();
            });
        });
    });

    // Adding a theatre
    $("#add_theatre").click(function() {

        var theatre_name = $("#theatre_name").val();
        var theatre_cinema = $("#theatre_cinema").val();
        var theatre_post = $("#theatre_post").val();
        if (theatre_name == "" || theatre_cinema == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            t_name: theatre_name,
            t_cinema: theatre_cinema,
            theatre_post: theatre_post
        }, function(data, status) {
            if (data == 1) {
                alert("Theatre added successfully.");
            } else {
                alert("Unsuccessful submission.");
            }

            $('#add_theatre_form').each(function() {
                this.reset();
            });
        });
    });


    // $('#movie_selection').selectize();

    $("#movie_selection").change(function() {
        $movie_selection = $("#movie_selection");
        $('#movie_id').prop('readonly', false);
        $('#movie_id').prop("placeholder", "Movie ID: " + $movie_selection.val());
        $('#movie_id').prop('readonly', true);
        $('#movie_update_post').val($movie_selection.val());
    });

    $("#get_movie_data_btn").click(function() {

        var movie_id = $("#movie_selection").val();
        var get_movie_data = $("#get_movie_data").val();

        $.get("../../common/submit_admin_forms.php", {
            m_id: movie_id,
            get_movie_data: get_movie_data
        }, function(data, status) {
            $("#movie_title").val(JSON.parse(data)[0]);
            $("#movie_genre").val(JSON.parse(data)[1]);
            $("#movie_about").val(JSON.parse(data)[2]);
            $("#movie_theatre").val(JSON.parse(data)[3]);
            alert("Select new movie cover!");
        });

        // $movie_title = $("#movie_title").val();
        // $movie_genre = $("#movie_genre").val();
        // alert($movie_genre)
        // $movie_about = $("#movie_about").val();
        // $movie_theatre = $("#movie_theatre").val();
        // $movie_cover = $("#movie_cover").val();
        // alert($movie_cover.val())


    });
});