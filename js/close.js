	$(document).ready(function() {
	    $("#open").click(function() {
	        $("#contacts").css('visibility', 'visible');
	    });
	    $("#close").click(function() {
	        $("#contacts").css('visibility', 'hidden');
	    });
	})
    
    /* защита от копипаста*/
   // document.ondragstart = noselect; 
    // запрет на перетаскивание 
    //document.onselectstart = noselect; 
    // запрет на выделение элементов страницы 
    //document.oncontextmenu = noselect; 
    // запрет на выведение контекстного меню 
    //document.onkeydown = noselect; 
    //function noselect() {return false;} 
