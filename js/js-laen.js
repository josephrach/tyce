/*==================================================================================
    ANIMASI NAVBAR PARALLAX
====================================================================================*/

$("document").ready(function(){
    $(".gambar-artikel").css("background-image : url('../img/product/jennie-airport-fashion.jpg');");
    $("img").addClass("img-responsive");
	});
	
/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

/*==================================================================================
    PERUBAHAN IKON KETIKA MENU LOGIN SINKRON DGN DB
====================================================================================*/

	let statusLogin = false ;
	function gantiLogin (satusLogin){
			if (statusLogin === false){
					$(".menu_login").html(" <span class="material-icons">perm_identity</span> ");
				}
			else {
					$("menu_login").html("Log In")
				}
		}
		
	gantiLogin();

/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

/*==================================================================================
    contoh pembatas
====================================================================================*/
/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
