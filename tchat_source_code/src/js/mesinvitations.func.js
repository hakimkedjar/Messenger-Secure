$(document).ready(function() {
    $("div.membre a.accept").click(function(e) {
        e.preventDefault();       
        var urlParams = new URLSearchParams($(this).attr("href"));
        var sender = urlParams.get("user");
        $.post("ajax/accept_invite.php", { sender: sender }, function() {
            location.reload(true)
        });
    });

    $("div.membre a.refuse").click(function(e) {
        e.preventDefault();       
        var urlParams = new URLSearchParams($(this).attr("href"));
        var sender = urlParams.get("user");
        $.post("ajax/refuse_invite.php", { sender: sender }, function() {
            location.reload(true)
        });
    });
});
