<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Digital Signage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">

<div class="container">

    <img src="https://www.megamidia.com.br/wp-content/themes/megamidia2020/img/megamidia.png" alt="">     

    <form>            
        <div class="erro erro-1">
            <p>Usuário ou senha incorretos.</p>
        </div>
        <div class="erro erro-2">
            <p>Sua sessão expirou, por favor, faça login novamente.</p>
        </div>
      <div class="form-group">
        <label for="Login">Login</label>   
          <input type="text" name="nome" class="nome form-control" required/>        
      </div>
      <div class="form-group">     
        <label for="Senha">Senha</label>   
          <input type="password" name="senha" class="senha form-control" required/>        
      </div> 

      <div class="form-group">
        <button class="btn btn-primary">Conectar </button>
      </div>
    </form>

  </div>

<script>
 
    const urlParams = new URLSearchParams(window.location.search);
    const erro = urlParams.get('erro');   

    if(erro == 1){
        document.querySelector('.erro-1').classList.add('active');
    }else if( erro == 2){
        document.querySelector('.erro-2').classList.add('active');
    }

</script>

<script type="module" src="formLogin.js"></script>

</body>
</html>