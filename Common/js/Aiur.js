var base_url = window.location.origin;
var Data = {};
var GlobalId = 0;
var GlobalValue = "";
var GlobalEdit = 0;//0: desactivado, 1:desc Obj Estra, 2: Indicador Estra 3:Indicador Ope
function SendPost(data, action, controller, successCallback) {
    //alert("sending is ready to go");
    $('#loading').removeAttr("hidden");
    $.ajax({
        type: "POST",
        url: base_url + '/' + controller + '/' + action,
        content: "application/json; charset=utf-8",
        dataType: "json",
        data: data,
        success: successCallback,
        error: function (xhr, textStatus, errorThrown) {
            // TODO: Show error
            alert('Error[ '+textStatus+' ]: '+errorThrown);
        },
        complete: function () {
            $('#loading').attr("hidden","hidden");
        }
    });
}

function GetPartialViewG(data, action, controller, successCallback) {
    $.get('' + controller + '/' + action, data, successCallback)
    .fail(function () {
        alert("sending has been get some errors");
    });
}

//------------------- SERVER MESSAGES MANAGEMENT ------------------------
var aIdErrorModes = ["alert-success", "alert-danger", "alert-warning", "alert-info"];

var ResponseAlert = function (/*oSelector,*/ cMensaje,idError) {

    var html = '<div class="alert ' + aIdErrorModes[idError] + ' float-message">' +
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> ×</button>'+
            //'<a href="#" class="btn btn-xs btn-success pull-right">Clear imported data</a>'+
            '<strong>@Msg:</strong>'+cMensaje+
            '</div>';

    $(/*oSelector*/'#float-messages-container').prepend(html);
    $('.float-message').delay(3000).fadeOut(1000);
}