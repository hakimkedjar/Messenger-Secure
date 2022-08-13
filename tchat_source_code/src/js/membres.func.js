$(document).ready(function() {
    $("div.membre a.select.no-friend").click(function(e) {
        e.preventDefault();       
        var urlParams = new URLSearchParams($(this).attr("href"));
        var reciever = urlParams.get("user");
        $.post("ajax/invite.php", { reciever: reciever }, function() {
            location.reload(true)
        });
    });
});
