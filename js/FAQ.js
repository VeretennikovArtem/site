$(document).ready(function(){
var op = $('.opas');
var op1 = $('.opas1');
var op2 = $('.opas2');
var op3 = $('.opas3');
var op4 = $('.opas4');	
var qweA = $('.questionA');
var qweB = $('.questionB ');
var qweC = $('.questionC ');
var qweD = $('.questionD ');
var qweE = $('.questionE ');



 qweA.click(function(){


 qweA.toggleClass("activ") ;
 op.toggleClass("act") ;
 
 });


  qweB.click(function(){
 qweB.toggleClass("activ") ;
 op1.toggleClass("act") ;
 });
  

  qweC.click(function(){
 qweC.toggleClass("activ") ;
 op2.toggleClass("act") ;
 });

 qweD.click(function(){
 qweD.toggleClass("activ") ;
 op3.toggleClass("act") ;
 });


  qweE.click(function(){
 qweE.toggleClass("activ") ;
 op4.toggleClass("act") ;
 });
   });
 