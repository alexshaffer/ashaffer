Main={toggle_nav:function(e){var nav=$('nav');if(nav.is(':visible')){nav.animate({opacity:0},500,function(){nav.hide();});$('.burger_icon').animate({opacity:1},500);}else{$('.burger_icon').animate({opacity:0},500);nav.show().animate({opacity:1},500);}},prev_portfolio_img:function(e){var self=$(this),img=self.next().find('img'),src=img.attr('src'),src_segments=src.split('screenshot_'),target=src_segments[src_segments.length-1].split('.')[0];number=--target;if(number>0&&self.prev().attr('data-total')!=1){self.next().next().show();}
if(number>0){img.attr('src',src_segments[0]+'screenshot_'+number+'.png');}
if(number<2){self.hide();}},next_portfolio_img:function(e){var self=$(this),img=self.prev().find('img'),src=img.attr('src'),src_segments=src.split('screenshot_'),target=src_segments[src_segments.length-1].split('.')[0];number=++target;if(number==self.prev().attr('data-total')){self.hide();}
if(number<=self.prev().attr('data-total')){self.prev().prev().show();img.attr('src',src_segments[0]+'screenshot_'+number+'.png');}},close_contact:function(e){$('#contact').css('top','-100%');},init:function(){$('.burger_icon, .close_nav, nav a').click(this.toggle_nav);$('.close_contact').click(this.close_contact);$('#home #portfolio .piece .arrow.left_arrow').click(this.prev_portfolio_img);$('#home #portfolio .piece .arrow.right_arrow').click(this.next_portfolio_img);}}
$(document).ready(function(){Main.init();});
