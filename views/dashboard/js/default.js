$(function () {

    $.get("dashboard/xhrGetListings", function (o) {
        for (var i = 0; i < o.length; i++) {
            $('#listInserts').append('<div>' + o[i].id + '&nbsp;' + o[i].text + ' <a class="del" rel="' + o[i].id + '" href="#">Delete</a></div>');
        }
        $('.del').click(function () {
            delItem = $(this);
            delItem.parent().remove();
            var id = $(this).attr('rel');

            $.post("dashboard/xhrDeleteListing", {'id': id}, function (o) {
            }, 'json');

            return false;
        });

    }, 'json');

    $("#randomInsert").submit(function () {
        var url = $(this).attr('action');
        console.log(data);
        //alert("Url=" + url);
        var data = $(this).serialize();
        //alert("Data:" + data);
        $.post(url, data, function (o) {
            $('#listInserts').append('<div>' + o.id + '&nbsp;' + o.text + ' <a class="del" rel="' + o.id + '" href="#">Delete</a></div>');
        }, 'json');
        return false;
    });
});  