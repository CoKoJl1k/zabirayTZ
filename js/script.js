
$(document).ready(function(){
    checkDate();
});

$("#NumberCard").change(function(){
    let id_card = $("#NumberCard option:selected" ).val();
    $.ajax({
        type: "POST",
        url: "get_card.php",
        data: {id_card: id_card}
    }).done(function(dataString) {
        if(dataString){
            let dataObj = $.parseJSON(dataString)
            $("#ExpireDate").val(dataObj.expire_date);
            checkDate();
        }
    });
});

function toDate(dateStr) {
    let parts = dateStr.split("-")
    return new Date(parts[0], parts[1] - 1, parts[2],23,59,59)
}

function checkDate(){
    let cur_date = new Date();
    let select_date = toDate($("#ExpireDate").val());
    let number_card = $("#NumberCard option:selected" ).text();;
    if(cur_date > select_date ) {
        $("#Message").html("<span style='color:red'>Карта "+number_card+" является более не действительной на "+cur_date+
            " так как срок ее действия прошел СРОК "+select_date+"</span>");
    }else {
        $("#Message").html("<span style='color:green'>Срок действия карты проверен.<span>");
    }
}

