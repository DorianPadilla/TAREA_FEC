<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <aside class="aside">
            <div class="logo-name">
                <ion-icon name="menu-outline" id="logo"></ion-icon>
                <span>EcoCultivos</span>
            </div>
            <nav class="navegation">
                <button class="button">
                    <ion-icon name="home-outline"></ion-icon>
                    <span> <a href="#">Dashboard</a>
                </button>


                <button class="button">
                    <ion-icon name="person-outline"></ion-icon>
                    <span> <a href="#">Customers</a>
                    </span>
                </button>



                <button class="button">
                    <ion-icon name="home-outline"></ion-icon>
                    <span> <a href="#">Messages</a></span>
                </button>



                <button class="button">
                    <ion-icon name="help-circle-outline"></ion-icon>
                    <span> <a href="#">help</a></span>
                </button>



                <button class="button">
                    <ion-icon name="settings-outline"></ion-icon>
                    <span> <a href="#">settings</a></span>
                </button>



                <button class="button">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <span> <a href="#">password</a></span>
                </button>



                <button class="button">
                    <ion-icon name="log-out-outline"></ion-icon>
                    <span> <a href="#">Sing Out</a></span>
                </button>


            </nav>
        </aside>
        <nav id="navbar">
            <button class="button">
                <ion-icon name="rose-outline"></ion-icon>
                <span> <a href="#"></a></span>
            </button>
            <div class="img">
                <img src="img\3.jpg" alt="USER">
            </div>
        </nav>
    </div>




    <script src=" js/dashboard.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>