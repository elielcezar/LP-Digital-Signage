<?php

include '../config.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$dbChar", $username, $password);

    $sql = 'SELECT name,
                    email,
                    phone,
                    message
                    FROM leads
                    ORDER BY name';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Could not connect to the database $dbname :" . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
            const token = sessionStorage.getItem('loggedUser');
            if(!token){window.open("index.php?erro=2", "_self");}
        </script> 
        <title>Leads Digital Signage</title>                
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">     
    </head>
    <body class="leads">
        <div class="container">
            
            <header><h1>Leads Digital Signage</h1></header>

            <div class="wrapper">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $q->fetch()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']) ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><?php echo htmlspecialchars($row['message']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <a href="export.php" class="btn btn-primary">Exportar Contatos</a>
    </body>
</div>

<script>    
    if(token){
        const wrapper = document.querySelector('.container');
        wrapper.classList.add('show');
    }
</script>  
</html>