<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'
            ?>

    <style>
        body {
            background-color: #bbdefb;
        }

        .button{
            background-color:#ff8a80;
            text-decoration:none;
            border-radius: 3px;
        }
    </style>



</head>



<body>
    <?php
        $name = $_GET["name"];
        

        echo "<h1>Hi! $name! as you can see this page was created using PHP</h1>";
    ?>

        <?php include 'includes/footer.php'
            ?>

        <h3><a href="../phpSample.rar" download class="button" >Download the source code of this website</a></h3>

</body>

</html>