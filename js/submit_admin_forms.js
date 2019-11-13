$(document).ready(function() {

    $("#add_cinema").click(function() {

        var cinema_name = $("#cinema_name").val();
        var cinema_address = $("#cinema_address").val();
        var cinema_telephone = $("#cinema_telephone").val();
        var cinema_email = $("#cinema_email").val();

        if (cinema_name == "" || cinema_address == "" || cinema_telephone == "" || cinema_email == "") {
            return;
        }

        $.post("../common/submit_admin_forms.php", {
            c_name: cinema_name,
            c_address: cinema_address,
            c_telephone: cinema_telephone,
            c_email: cinema_email
        }, function(data, status) {
            alert(data);
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


    $("#add_theatre").click(function() {

        var theatre_name = $("#theatre_name").val();
        var theatre_cinema = $("#theatre_cinema").val();
        if (theatre_name == "" || theatre_cinema == "") {
            return;
        }

        $.post("../common/submit_admin_forms.php", {
            t_name: theatre_name,
            t_cinema: theatre_cinema
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

});