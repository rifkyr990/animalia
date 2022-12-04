const navEl = document.querySelector('.navbar');
const navLight = document.querySelector('.nav-link');
const darkPage = document.querySelector('.formLogin');

window.addEventListener('scroll', () => {
    if (scrollY >= 600) {
        navEl.classList.add('bg-dark');


    } else if (scrollY < 600) {
        navEl.classList.remove('bg-dark');
    }
});

// show password
feather.replace({
    'aria-hidden': 'true'
});

$(".togglePassword").click(function (e) {
    e.preventDefault();
    let type = $(this).parent().parent().find(".password").attr("type");
    console.log(type);
    if (type == "password") {
        $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
        $(this).parent().parent().find(".password").attr("type", "text");
    } else if (type == "text") {
        $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
        $(this).parent().parent().find(".password").attr("type", "password");
    }
});
