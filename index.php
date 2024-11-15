<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Crear</title>



    <!-- Google fonts Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 


  <style>

font-family: 'Montserrat', sans-serif;
font-weight: 100;


    html {
      height: 100%;
    }
    .flex-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    width: 70%;
    padding: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   
}
.form-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}



#div1 {
  display: flex;
  flex-direction: row;
  gap: 10px;

}

#div2 {
  display: flex;
  flex-direction: row;
  gap: 10px;
}
#div3 {
  display: flex;
  flex-direction: column;
  gap: 10px;

}

input[type=submit] {
  background-color:dodgerblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=text],  textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background: #f1f1f1;
}

  #myForm{
    justify-content: center;

    width: 75%;
  }

  #h1{
    font-weight: bold;
   
  } 

  .error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
  </style>




</head>

<body >

  <div>

    <div>

</html>
      <form id="myForm" method="POST" onsubmit="return validateForm()">
      <h1 id="h1">Conctacta con nostros</h1>

<div  id="div1">
         <br> <input class="mt-2 form-control" type="text" name="Nombres" id="Nombres" placeholder="Nombre *" >  <br>
         <span id="name-error" class="error-message"></span>

         <br> <input class="mt-2 form-control" type="text" name="Emails"  id="Emails" placeholder="Email *" > <br>
         <span id="email-error" class="error-message"></span>

</div>



<div  id="div2">
        <br> <input class="mt-2 form-control" type="text" name="Telf" id="Telf" placeholder="telefono"> <br>

        <br> <input class="mt-2 form-control" type="text" name="Asuntos"id="Asuntos" placeholder="Asunto"> <br>


        </div>


        <div  id="div3">
       
     <br> <input class="mt-2 form-control" type="textarea" name="Comentarios" id="Comentarios" style="height:150px" placeholder="Comentarios *" >
     <span id="comentarios-error" class="error-message"></span>



        <div  >
        <input type="checkbox" id="politicas" name="politicas" >
      <label for="politicas" >He leido la <span style="color: dodgerblue">politica de privacidad</span>  </label><br>
      <span id="politicas-error" class="error-message"></span>

        </div>
        <div  >
          <input  type="submit" name="enviar" value="enviar"  id="enviar">
        
          </div>
      </form>

    </div>
  </div>
</body>

</html>
<script>

function validateForm() {
  let nombre = document.forms["myForm"]["Nombres"].value;
  const nameError = document.getElementById("name-error");
  nameError.textContent = "";

  let email = document.forms["myForm"]["Emails"].value;
  const emailError = document.getElementById("email-error");
  emailError.textContent = "";

  let comentarios = document.forms["myForm"]["Comentarios"].value;
const comentariosError = document.getElementById("comentarios-error");
  comentariosError.textContent = "";

  let politicas = document.forms["myForm"]["politicas"].checked;
  const politcasError = document.getElementById("politicas-error");
  politcasError.textContent = "";



  let Telf = document.forms["myForm"]["Telf"].value;
  let Asunto = document.forms["myForm"]["Asuntos"].value;



  let isValid = true;



  if (nombre == "") {
    nameError.textContent =
            "Por favor el campo Nombre  no puede ir vacio.";
        isValid = false;

  }

  

  if (email == "") {
    emailError.textContent =
            "Por favor el campo Email no puede ir vacio.";
        isValid = false;


  }



if (comentarios == "") {
  comentariosError.textContent =
            "Por favor el campo Comentarios no puede ir vacio.";
        isValid = false;


  }


if (!politicas) {
  politcasError.textContent =
            "Por favor el campo Comentarios no puede ir vacio.";
        isValid = false;


  }


  return isValid;
}



$(document).ready(function(){
    $('#myForm').submit(function(){
        var data = $(this).serialize();

        $.ajax({
            url: "UsuarioCrear.php",
            type: "POST",
            data: data,
            success: function( data )
            {
              alert('correcto');
            },
            error: function(){
                alert('ERRO');
            }
        });

        return false;
    });
});












</script>