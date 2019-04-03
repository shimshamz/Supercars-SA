$(document).ready(function() {
    $(".btn-toggle-navbar").on("click", function() {
        $(".navbar ul.navbar-btns").toggleClass("toggled");
    })
})

$(window).scroll(function() {
    parallax();
})

function parallax() {
    let wScroll = $(window).scrollTop();
    let calcScroll = 50 + wScroll*0.12;
    if (calcScroll >= 200) {
        calcScroll = 200;
    }
    $('.img').css('background-position', 'center '+calcScroll+'%')
}

