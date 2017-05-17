$(document).ready(function () {

 var link = $(".menu-link");
 var link_active = $('meny-link_active');
 var menu = $('.menu')



 link.click(function(){
 	link.toggleClass('meny-link_active');
 	menu.toggleClass('menu-active');

 });



  link_active.click(function(){
 	link_active.removeClass('meny-link_active');
 });

});