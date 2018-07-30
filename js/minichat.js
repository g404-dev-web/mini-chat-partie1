setInterval(function() {
    $.get('/mini-chat-lundi/partials/messages.php', function(htmlMessages) {
        $('#messages').html(htmlMessages);

        window.scrollTo(0, 9999);
    });
}, 2000);