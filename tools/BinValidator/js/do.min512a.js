$(".header .menubtn").click((function(){$(".header .mobnav").css("display","flex").addClass("animated").addClass("rollIn"),$("html, body").css("overflow","hidden")})),$(".mobnav .close").click((function(){$(".header .mobnav").removeClass("animated").removeClass("rollIn").hide(1),$("html, body").css("overflow","unset")})),$(".header .mobnav ul a:not(.navbtn)").click((function(){$(".mobnav .close").click()})),$(".mobnav a.navbtn").click((function(){$(".mobnav .close").click()}));