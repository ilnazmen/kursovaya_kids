$(document).ready(function() {

    //E-mail Ajax Send
    $("form").submit(function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: th.serialize()
        }).done(function() {
            alert("Ваши данные отправлены, скоро мы с вами свяжемся");
            setTimeout(function() {
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});

