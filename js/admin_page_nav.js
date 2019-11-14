var tabs = $('.tabs');
var selector = $('.tabs').find('a').length;
//var selector = $(".tabs").find(".selector");
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
$(".selector").css({
    "left": activeItem.position.left + "px",
    "width": activeWidth + "px"
});

$(".tabs").on("click", "a", function(e) {
    e.preventDefault();
    $('.tabs a').removeClass("active");
    $(this).addClass('active');
    var activeWidth = $(this).innerWidth();
    var itemPos = $(this).position();
    $(".selector").css({
        "left": itemPos.left + "px",
        "width": activeWidth + "px"
    });

    var current_tab = $(this).text();

    $("#add_a_cinema").prop('value', 'UPDATE A CINEMA');
    $("#add_a_cinema").prop('id', 'Update');
    $("#add_a_cinema").prop('onClick', function() {
        alert('ss');
        return "window.location = 'update_forms/update_cinema.php'";
    });
});