let page = 2;
$("#loadEvents").click(function () {
    $.ajax({
        type: "get",
        data: 'page=' + page,
        dataType: 'html',
        url: "assets/php/loadEvents.php",
        success: function (html) {
            if (html !== "") {
                $("#events").append(html);
                page++;
            } else {
                document.getElementById("loadEvents").classList.add("hidden");
                document.getElementById("end").classList.remove("hidden");
            }
        }
    });
});