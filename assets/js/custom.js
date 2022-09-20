$( ".search-form .search-form-btns .icon-search" ).click(function() {
    $(".search-form .search-form-btns .icon-search").css("display", "none");
    $(".search-form .search-form-btns .icon-cross").css("display", "block");
    $(".search-form").css("width", "100%");
    $(".search-form input").css("display", "flex");
    $(".search-form button").css("display", "flex");
    $(".navbar-menu").css("display", "none");
});

$( ".search-form .search-form-btns .icon-cross" ).click(function() {
    $(".search-form .search-form-btns .icon-cross").css("display", "none");
    $(".search-form .search-form-btns .icon-search").css("display", "block");
    $(".search-form").css("width", "20%");
    $(".search-form input").css("display", "none");
    $(".search-form button").css("display", "none");
    $(".navbar-menu").css("display", "block");
});


document.getElementById("year").innerHTML = new Date().getFullYear();