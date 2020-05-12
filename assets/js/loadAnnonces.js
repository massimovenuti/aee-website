let page = 2;
$("#loadAnnonces").click(function () {
    $.ajax({
        type:"get",
        data: 'page=' + page,
        dataType: 'html',
        url : "assets/php/loadEvents.php",
        success: function(html){
            if(html !== "") {
                $("#annonces").append(html);
                page++;
            } else {
                document.getElementById("loadAnnonces").classList.add("hidden");
                document.getElementById("end").classList.remove("hidden");
            }
        }
    });
});