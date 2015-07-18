Main={toggle_nav:function(e){var nav=$('nav');if(nav.is(':visible')){nav.animate({opacity:0},500,function(){nav.hide();});}else{nav.show().animate({opacity:1},500);}},init:function(){$('.burger_icon, .close_nav').click(this.toggle_nav);}}
$(document).ready(function(){Main.init();});
Main={toggle_nav:function(e){var nav=$('nav');if(nav.is(':visible')){nav.animate({opacity:0},500,function(){nav.hide();});}else{nav.show().animate({opacity:1},500);}},init:function(){$('.burger_icon, .close_nav').click(this.toggle_nav);}}
$(document).ready(function(){Main.init();});
