# Web Page Layout.
> Basic information about Web applications, Web services. Architecture of Web applications of Web services. Designing Web applications. Design of site management systems. Database design for Web applications and Web services. Features of writing Web application code. Introduction to the XML language, the basic mechanisms of the language. The structure and content of the XML document. Namespace. XSL, XSLT as a means to represent and transform data in XML format.Fundamentals of security in the development of Web sites. Features of the use of frameworks in the development of site management systems.

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
