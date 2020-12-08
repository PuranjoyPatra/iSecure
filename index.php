<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
 {
    header("location:login.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['usrname']; ?> to our Website.</title>
</head>

<body>
    <?php include "partial/_nav.php"; ?>
    <div class="container mt-3">
        <h1>Welcome - <?php echo $_SESSION['usrname']; ?> to our Website </h1>
        <!-- demo text  -->
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem velit explicabo ipsam est consectetur iure
            incidunt dolor enim eaque sint fuga quod quasi minima quos eius, officiis tempore beatae a.
            Quis facere atque magnam repudiandae error iusto, culpa illum reiciendis voluptatem reprehenderit sequi
            cumque dolorum nostrum quod alias maxime iure architecto soluta quae tempora eligendi neque quibusdam.
            Mollitia, ullam quo.
            Illo adipisci quis incidunt repellat tenetur dignissimos, animi reprehenderit, repellendus magni nam atque?
            Quasi, autem repellat, qui debitis aut molestiae, neque ducimus exercitationem officiis eaque fugiat
            quibusdam? Dolor, ipsa. Totam.
            Nostrum ducimus ut velit sit voluptatibus? Expedita, possimus dignissimos! Itaque nisi tempora harum? Ea
            nostrum deserunt qui distinctio sequi magni dolorem commodi delectus vero quis! Aperiam maiores asperiores
            iure eos!
            Assumenda consectetur aut laudantium illum laborum natus corporis at, facere saepe sunt sapiente rerum enim
            aperiam unde dolorem voluptate nostrum, perspiciatis doloremque consequatur. Veritatis quaerat vel commodi
            libero tempore nesciunt.
            Atque nesciunt soluta voluptas blanditiis. Ea, nemo dicta adipisci voluptatum odit soluta quis tempore
            inventore numquam aperiam? Esse illo debitis similique ullam, beatae, quae laborum eveniet aperiam hic
            facere dicta?
            Officiis consequuntur distinctio, iste, saepe dolore vitae, voluptatem at omnis atque dolorum eum debitis?
            Repellendus officia beatae, similique doloribus alias odio delectus et nam eum, non, dolores soluta repellat
            dolorem?
            Rerum facilis mollitia voluptatibus ipsa consectetur facere quis. Ut, error totam obcaecati iure saepe
            voluptatem iusto sint dolores optio recusandae perferendis possimus labore. Ipsa possimus deleniti
            aspernatur aliquam? Inventore, doloribus?
            Reprehenderit repudiandae, aspernatur at, hic eveniet molestiae accusantium id voluptatibus voluptas nostrum
            eligendi sunt accusamus deserunt veritatis quia harum reiciendis error tempora quos veniam suscipit
            perspiciatis? Sit nobis sapiente vero.
            Tempore, sed. Laboriosam enim minima et deserunt sunt, non sed assumenda eveniet aperiam tempora, maxime,
            sit eum itaque sapiente accusantium maiores modi hic ea! Expedita officiis aspernatur repellendus non natus.
            Cumque dolores, quos minima velit asperiores quisquam beatae, a itaque accusamus recusandae explicabo
            temporibus aliquam veniam debitis dolorum odio sapiente consectetur omnis aspernatur nam! Cumque aut
            blanditiis velit iste quisquam.
            Recusandae eaque at sit, id eum, vel eos architecto accusamus est doloremque, sapiente itaque. Vitae
            voluptates labore tempora et, corporis aspernatur doloremque expedita molestias! Possimus deleniti assumenda
            odit quae modi.</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>