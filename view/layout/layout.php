<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        if(isset($tipe)){
    ?> 
        <h1>Halaman <?php echo $tipe; ?></h1>
        <div class="atas">
        <p>Hi , <?php echo $username ?></p>
        <a href="logout">Logout</a>
        </div>
        <br>
    <?php       
        }
    ?> 
    
    <?php echo $content; ?>
    

</body>

</html>