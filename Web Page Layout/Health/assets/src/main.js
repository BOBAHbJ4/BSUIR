$(function () {
    var fx = {
        "initModal": function () {
            if ($(".modal-window").length == 0) {
                $("<div>").addClass("overlay").appendTo("body");
                return $("<div>").addClass("modal-window").appendTo("body");
            } else {
                return $(".modal-window");
            }
        }
    }
    $(".slider-item__btn").click(function () {
        var id = $(this).attr("data-pic-id");
        var modal = fx.initModal();
        $("<a>").attr("href", "#").addClass("modal-close").html("&times;").click(function (event) {
            event.preventDefault();
            modal.remove();
            $(".overlay").remove();
        }).appendTo(modal);
        var item=$("#item-"+id).text();
        var pic=$("#"+id).clone();
        var content=$(this).attr("data-content");
        modal.append(item);
        modal.append(pic);
        modal.append(content);
    });
});