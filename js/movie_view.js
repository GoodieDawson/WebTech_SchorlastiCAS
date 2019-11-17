$(document).ready(function() {

    $(".movie-card").click(function() {

        var movie_id = $(this).children('div').prop("id");

        $("#overlay").load("../common/movie_payment.php", {
            movie_id: movie_id
        }, function(data, status) {
            document.getElementById("overlay").style.display = "block";
        });
    });

    // Close payment when clicking outside
    $("body").click(function(e) {
        if (e.target.id == "container" || $(e.target).parents("#wrapper").length) {

        } else {
            off();
        }
    });

    function on() {
        document.getElementById("overlay").style.display = "block";
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }

});