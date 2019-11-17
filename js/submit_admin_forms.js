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

    // Displaying cinema data
    $("#cinema_selection").change(function() {
        var cinema_selection = $("#cinema_selection");
        $('#cinema_id').prop('readonly', false);
        $('#cinema_id').prop("placeholder", "Cinema ID: " + cinema_selection.val());
        $('#cinema_id').prop('readonly', true);
        $('#cinema_update_post').val(cinema_selection.val());
    });

    // Loading cinema data
    $("#get_cinema_data_btn").click(function() {

        var cinema_id = $("#cinema_selection").val();
        var get_cinema_data = $("#get_cinema_data").val();

        $.get("../../common/submit_admin_forms.php", {
            c_id: cinema_id,
            get_cinema_data: get_cinema_data
        }, function(data, status) {
            $("#cinema_name").val(JSON.parse(data)[0]);
            $("#cinema_address").val(JSON.parse(data)[1]);
            $("#cinema_telephone").val(JSON.parse(data)[2]);
            $("#cinema_email").val(JSON.parse(data)[3]);
        });
    });

    //Updating a cinema
    $("#update_cinema").click(function() {
        var cinema_name = $("#cinema_name").val();
        var cinema_address = $("#cinema_address").val();
        var cinema_telephone = $("#cinema_telephone").val();
        var cinema_email = $("#cinema_email").val();
        var cinema_update_post = $("#cinema_update_post").val();

        if (cinema_name == "" || cinema_address == "" || cinema_telephone == "" || cinema_email == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            c_name: cinema_name,
            c_address: cinema_address,
            c_telephone: cinema_telephone,
            c_email: cinema_email,
            cinema_update_post: cinema_update_post
        }, function(data, status) {
            if (data == 1) {
                alert("Cinema updated successfully.");
            } else {
                alert("Unsuccessful update.");
            }

            $('#update_cinema_form').each(function() {
                this.reset();
            });
            $("#cinema_id").empty();
            $("#cinema_selection").empty();
            window.location.reload();
        });
    })

    // Deleting a Cinema
    $("#delete_cinema").click(function() {

        var cinema_id = $("#cinema_id_entry").text();
        var cinema_delete_post = $("#cinema_delete_post").val();

        if (cinema_id == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            c_id: cinema_id,
            cinema_delete_post: cinema_delete_post
        }, function(data, status) {
            alert(data);
            window.location.reload();
        });
    });

    // Adding a Theatre
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

    // Displaying theatre data
    $("#theatre_selection").change(function() {
        var theatre_selection = $("#theatre_selection");
        $('#theatre_id').prop('readonly', false);
        $('#theatre_id').prop("placeholder", "Theatre ID: " + theatre_selection.val());
        $('#theatre_id').prop('readonly', true);
        $('#theatre_update_post').val(theatre_selection.val());
    });

    // Loading theatre data
    $("#get_theatre_data_btn").click(function() {

        var theatre_id = $("#theatre_selection").val();
        var get_theatre_data = $("#get_theatre_data").val();

        $.get("../../common/submit_admin_forms.php", {
            t_id: theatre_id,
            get_theatre_data: get_theatre_data
        }, function(data, status) {
            $("#theatre_name").val(JSON.parse(data)[0]);
            $("#theatre_cinema").val(JSON.parse(data)[1]);
        });
    });

    // Updating a theatre
    $("#update_theatre").click(function() {

        var theatre_name = $("#theatre_name").val();
        var theatre_cinema = $("#theatre_cinema").val();
        var theatre_update_post = $("#theatre_update_post").val();
        if (theatre_name == "" || theatre_cinema == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            t_name: theatre_name,
            t_cinema: theatre_cinema,
            theatre_update_post: theatre_update_post
        }, function(data, status) {
            if (data == 1) {
                alert("Theatre updated successfully.");
            } else {
                alert("Unsuccessful update.");
            }

            $('#update_theatre_form').each(function() {
                this.reset();
            });
            $("#theatre_id").empty();
            $("#theatre_selection").empty();
            window.location.reload();
        });
    });

    // Deleting a Theatre
    $("#delete_theatre").click(function() {

        var theatre_id = $("#theatre_id_entry").text();
        var theatre_delete_post = $("#theatre_delete_post").val();

        if (theatre_id == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            t_id: theatre_id,
            theatre_delete_post: theatre_delete_post
        }, function(data, status) {
            alert(data);
            window.location.reload();
        });
    });

    // Displaying movie data
    $("#movie_selection").change(function() {
        var movie_selection = $("#movie_selection");
        $('#movie_id').prop('readonly', false);
        $('#movie_id').prop("placeholder", "Movie ID: " + movie_selection.val());
        $('#movie_id').prop('readonly', true);
        $('#movie_update_post').val(movie_selection.val());
    });

    // Loading movie data
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
    });

    // Deleting a Movie
    $("#delete_movie").click(function() {

        var movie_id = $("#movie_id_entry").text();
        var movie_delete_post = $("#movie_delete_post").val();

        if (movie_id == "") {
            return;
        }

        $.post("../../common/submit_admin_forms.php", {
            m_id: movie_id,
            movie_delete_post: movie_delete_post
        }, function(data, status) {
            alert(data);
            window.location.reload();
        });
    });
});