Main_Url={url:function(url)
{var host_segments=window.location.hostname.split('.');if(host_segments.length==4)
{var local=true;for(var i=host_segments.length-1;i>=0;i--){if(isNaN(host_segments[i])){local=false;}};if(local){return'http://'+window.location.hostname+'/ashaffer/public/'+url;}else{return window.location.origin+'/'+url;}}
else
{return window.location.origin+'/'+url;}},};Main_Ajax={send_message:function(attr)
{$.ajax({type:'POST',url:Main_Url.url('ajax_main/send_message'),data_Type:'json',data:{first_name:attr.first_name,last_name:attr.last_name,email:attr.email,mobile:attr.mobile,message:attr.message,},success:attr.success,error:attr.error});},};Main={toggle_nav:function(e){var nav=$('nav');if(nav.is(':visible')){nav.animate({opacity:0},500,function(){nav.hide();});$('.burger_icon').animate({opacity:1},500);}else{$('.burger_icon').animate({opacity:0},500);nav.show().animate({opacity:1},500);}},prev_portfolio_img:function(e){var self=$(this),img=self.next().find('img'),src=img.attr('src'),src_segments=src.split('screenshot_'),target=src_segments[src_segments.length-1].split('.')[0];number=--target;if(number>0&&self.prev().attr('data-total')!=1){self.next().next().show();}
if(number>0){img.attr('src',src_segments[0]+'screenshot_'+number+'.png');}
if(number<2){self.hide();}},next_portfolio_img:function(e){var self=$(this),img=self.prev().find('img'),src=img.attr('src'),src_segments=src.split('screenshot_'),target=src_segments[src_segments.length-1].split('.')[0];number=++target;if(number==self.prev().attr('data-total')){self.hide();}
if(number<=self.prev().attr('data-total')){self.prev().prev().show();img.attr('src',src_segments[0]+'screenshot_'+number+'.png');}},close_contact:function(e){$('#contact').css({'top':'-100%','height':'0px'});$('.close_contact').hide();},show_contact:function(e){$('#contact').css({'top':'0','height':'100%'});$('.close_contact').show();var nav=$('nav');if(nav.is(':visible')){Main.toggle_nav();}},focus_mobile_input:function(e){$($('#contact .mobile_input input')[0]).focus();},send_message:function(e){var mobile_input=$('input[name="mobile[]"]'),mobile="("+$(mobile_input[0]).val()+") "+$(mobile_input[1]).val()+"-"+$(mobile_input[2]).val();Main_Ajax.send_message({first_name:$('input[name="first_name"]').val(),last_name:$('input[name="last_name"]').val(),email:$('input[name="email"]').val(),mobile:mobile,message:$('textarea[name="message"]').val(),success:function(data){if(data){Main.close_contact();Main.notification('Message Sent','success');}else{Main.notification('Message could not be Sent','error');}},error:function(data){Main.notification('Message could not be Sent','error');}})},check_character:function(e){console.log(e.keyCode);},notification:function(message,status){$('body .notification').remove();var html='<div class="notification '+status+'"><p>'+message+'</p></div>'
$('body').append(html);$('body .notification').animate({opacity:1},3000,function(){$('body .notification').animate({opacity:0,height:0},500,function(){$('body .notification').remove();});})},init:function(){$('.burger_icon, .close_nav, nav a').click(this.toggle_nav);$('nav .contact, button.contact').click(this.show_contact);$('.close_contact').click(this.close_contact);$('#home #portfolio .piece .arrow.left_arrow').click(this.prev_portfolio_img);$('#home #portfolio .piece .arrow.right_arrow').click(this.next_portfolio_img);$('#contact .mobile_input input').click(function(e){return false;});$('#contact .mobile_input input').keydown(this.check_character);$('#contact .mobile_input').click(this.focus_mobile_input);$('#contact button').click(this.send_message);}}
$(document).ready(function(){Main.init();});
