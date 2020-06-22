$('#btn_login_details').click(function(){
  
  var error_rfc='';
  var error_razon='';

  if($.trim($('#rfc').val()).length == 0 ){
    error_rfc = 'El rfc es requerido';
   $('#error_RFC').text(error_rfc);
   $('#rfc').css("border-color","red");
   $('#rfc').addClass('invalid');
  }else{
    error_rfc= '';
    $('#error_RFC').text(error_rfc);
    $('#rfc').css("border-color","#ced4da");
    $('#rfc').removeClass('invalid');
  }


  if($.trim($('#razon').val()).length == 0){
    error_razon = 'Escribe el nombre o razon social';
   $('#error_razon').text(error_razon);
   $('#razon').css("border-color","red");
   $('#razon').addClass('invalid');
  }else{
    error_razon= '';
    $('#error_razon').text(error_razon);
    $('#razon').css("border-color","#ced4da");
    $('#razon').removeClass('invalid');
  }

  if(error_rfc != '' || error_razon != '')
  {
    return false;
  }else{
    $('#list_login_details').removeClass('active active_tab1');
    $('#list_login_details').removeAttr('href data-toggle');
    $('#login_details').removeClass('active');
    $('#list_login_details').addClass('inactive_tab1');
    $('#list_personal_details').removeClass('inactive_tab1');
    $('#list_personal_details').addClass('active_tab1 active');
    $('#list_personal_details').attr('href', '#personal_details');
    $('#list_personal_details').attr('data-toggle', 'tab');
    $('#personal_details').removeClass('fade');
  }



  //var error_email = '';
  //var error_password = '';
  //var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  //if($.trim($('#email').val()).length == 0)
  //{
   //error_email = 'Email is required';
   //$('#error_email').text(error_email);
   //$('#email').addClass('has-error');
  //}
  //else
  //{
   //if (!filter.test($('#email').val()))
   //{
    //error_email = 'Invalid Email';
    //$('#error_email').text(error_email);
    //$('#email').addClass('has-error');
   //}
   //else
   //{
    //error_email = '';
    //$('#error_email').text(error_email);
    //$('#email').removeClass('has-error');
   //}
  //}
  
  //if($.trim($('#password').val()).length == 0)
  //{
   //error_password = 'Password is required';
   //$('#error_password').text(error_password);
   //$('#password').addClass('has-error');
  //}
  //else
  //{
   //error_password = '';
   //$('#error_password').text(error_password);
   //$('#password').removeClass('has-error');
  //}

  //if(error_email != '' || error_password != '')
  //{
   //return false;
  //}
  //else
  //{
   //$('#list_login_details').removeClass('active active_tab1');
   //$('#list_login_details').removeAttr('href data-toggle');
   //$('#login_details').removeClass('active');
   //$('#list_login_details').addClass('inactive_tab1');
   //$('#list_personal_details').removeClass('inactive_tab1');
   //$('#list_personal_details').addClass('active_tab1 active');
   //$('#list_personal_details').attr('href', '#personal_details');
   //$('#list_personal_details').attr('data-toggle', 'tab');
   //$('#personal_details').addClass('active in');
  //}
 });


