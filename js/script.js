$('document').ready(function()
{ 
  
  $("#closeb").live("click", function () {
			$('#cerrarb').hide("swing"); //oculto mediante id
			/*$('.target').hide(); //muestro mediante clase*/
  });
  
  
  /* validation */
  $("#login-form").validate({
      rules:
   {
   password: {
   required: true,
   },
   user_name: {
            required: true,
            /*email: true*/
            },
    },
       messages:
    {
            password:{
                      required: "Por Favor Ingrese su Clave de Acceso."
                     },
            user_name: "Por Favor ingrese su Nombre de Usuario.",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'login_process.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Validando ...');
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      $("#btn-nada").html('<img src="btn-ajax-loader.gif" width="50" /> &nbsp; Validando...');
      setTimeout(' window.location.href = "home.php"; ',4000);
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
         });
     }
     }
   });
    return false;
  }
    /* login submit */
});



		

