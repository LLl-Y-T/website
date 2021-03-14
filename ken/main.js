$(function() {
    $("#bt").change(function() {

        $("#load").html("<img src='img/loader.gif' alt='Loading' style='margin-top:20px;'>");

        $("#form").ajaxForm({
            target: '#load'
        }).submit();
    });
});