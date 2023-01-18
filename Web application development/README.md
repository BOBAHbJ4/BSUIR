# Web Page Layout.
> JavaScript basics: syntax and semantics; programming paradigms and basic principles of algorithmization; basic programming techniques. JavaScript templates: application of the basic API; application of the Web API; design of client web applications; development of individual components of client web applications. Tools, libraries and frameworks: fundamentals of application in the development of client web applications.
## The project is rewritten in php, a local OpenServer with a phpmyadmin database is used as the server.

[OLD PROJECT](https://bobahbj4.github.io/BSUIR/Web%20Page%20Layout/Health/Index.html)
-----------------------------------------------------
![Illustration for the project](https://github.com/BOBAHbJ4/BSUIR/blob/main/Web%20application%20development/view.gif)
_____________________
### js code example Modal window
```javascript
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
		$(document).mouseup(function (event) {
		if ($(".modal-window").has(event.target).length === 0){
			event.preventDefault();
			modal.remove();
			$(".overlay").remove();
		}
		});
        var item=$("#item-"+id).text();
        var pic=$("#"+id).clone();
        var content=$(this).attr("data-content");
        modal.append(item);
        modal.append(pic);
        modal.append(content);
    });	
});
```
