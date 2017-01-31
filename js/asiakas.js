$(function() {
   $('#search').keypress(function(e){
       console.log(e.which);
       if(e.which === 13){
           $(this).parents("form:first").submit();
       }
   }); 
});


