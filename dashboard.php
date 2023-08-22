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
                    <span>
                        <a href="dashboard.php"> Dashboard</a>
                    </span>
                </button>

                <button class="button">
                    <ion-icon name="person-outline"></ion-icon>
                    <span id="corte"> Cortes</span>
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
                    <span id="cerrar-sesion"> <a href="#">Sing Out</a></span>
                </button>
            </nav>
        </aside>
        <section class="contenido">
            <article class="cortes">
                <div class="corte">
                    <h1>Corte Diario</h1>
                    <p id="corte-diario">20.200000</p>
                </div>

                <div class="corte">
                    <h1>Corte Semanal</h1>
                    <p id="corte-semanl">20.200000</p>
                </div>
                <div class="corte">
                    <h1 id="corte-total">Corte Total</h1>
                    <p> 53.223000</p>
                </div>
            </article>
        </section>
        <nav id="navbar">
            <button class="button">
                <ion-icon name="rose-outline"></ion-icon>
                <span> <a href="#"></a></span>
            </button>
            <button class="img">
                <ion-icon name="person-circle-outline"></ion-icon>
                <span><a href="#"></a></span>
            </button>
        </nav>

    </div>



    <script src=" js/dashboard.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>