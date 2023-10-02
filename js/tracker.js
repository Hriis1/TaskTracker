$(document).ready(function()
{
    $("#form-new").submit(function(event)
    {
        //Prevents the form from reloading the page
        event.preventDefault();

        var form = $(this);
        var task = $("#task").val();
        var formData = form.serialize();

        $.ajax({
            url: "include/log.php",
            data: formData,
            success: function (response) {
                alert(response);
            }
        });
    });
});