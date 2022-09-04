<?php

       $email = $_GET['f_email'];

    echo "
    <!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title> </title>

</head>
<body>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
     
      <script>
        
		       swal({

		  title: 'ExtraNet',
		  text: 'Deseja realmente desativar esta conta?',
		  icon: 'warning',
		  buttons: ['Cancelar', 'Desativar'],
		  dangerMode: true,

		}).then((willDelete) => {
		  if (willDelete) {
		        window.location.href = '../control/desativar_fun.php?estado=desativar&f_email=$email';
		  }
		  else{
		  	   window.location.href = 'funcionario.php';
		  }        

		});
        
      </script>

      </body>

</html>
    ";



?>