function addLink() {
    document.getElementById("alert").innerHTML = ""
    if (document.getElementById("inputUrl").value == "") {
        document.getElementById("alert").innerHTML = "Введите ссылку"
    } else {
        $.ajax({
            type: "POST",
            url: "add_link",
            dataType: "html",
            data: {
                link: document.getElementById("inputUrl").value
            }
        }).done(function (result)
        {
            $('#tabLinks').remove();
            $('#allLinks').html(result);
        });
    }
}
