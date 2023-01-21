<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- css file  -->
    <link rel="stylesheet" href="assets/CSS/style.css?v=<?php echo time(); ?>">
    <style>
        * {
            margin-inline: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
            
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Particle JS Effect -->
    <div id="particles-js"></div>
    <script src="assets/JS/particles.min.js?v=<?php echo time(); ?>"></script>
    <script src="assets/JS/app.js?v=<?php echo time(); ?>"></script>

    <div class="mainContent">

        <!-- navigation bar  -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand animate-character" href="index.php" style="color: white;font-size:2rem;">Basic Banking Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"><button class="btn btn-lg">Home</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php"><button class="btn btn-lg">Customers</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transactions.php"><button class="btn btn-lg">Transactions</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="Container">
            <div class="row" style="width: 100%;">
                <div class="col-md-5">
                    <center class="text">
                        <p class="animate-character">Give Money & Get Money <br> Simple way to transfer</p>
                    </center>

                </div>
                <div class="col-md-7">
                    <center>
                        <img src="assets/images/bank4.webp" alt="" class="vert-move" style="height:500px; width:500px; ">
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
