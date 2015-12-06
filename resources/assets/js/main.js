console.log('\'Allo \'Allo! from main.js');

$(function(){
  // Auto hide flash messages 
  $('div.alert').not('.alert-danger').delay(3000).slideUp(300);
});