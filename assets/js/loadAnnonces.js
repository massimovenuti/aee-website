let offset = 4;
$("#loadAnnonces").click(function () {
    $.ajax({
        type:"get",
        data: 'offset=' + offset,
        dataType: 'html',
        url : "assets/php/loadAnnonces.php",
        success: function(html){
            if(html !== "") {
                $("#annonces").append(html);
                offset += 4;
            } else {
                document.getElementById("loadAnnonces").classList.add("hidden");
                document.getElementById("end").classList.remove("hidden");
            }
        }
    });
});