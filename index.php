<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- VUE-->
     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <header>
            <div class="ms_head d-flex justify-content-center">
                <h1 class="m-3 text-white">DISCOGRAPHY</h1>
                <img class="m-4" src="img/spotify-logo.png" alt="logo">
            </div>
        </header>
        <div class="ms_wrapper">
            <main class="container">
                <div class="row row-cols-3">
                    <div class="col p-3" v-for="(disco, index) in dischi" :key="index">
                        <div class="card ms_card h-100" style="width: 18rem;">
                            <img class="p-4" :src="disco.poster" alt="poster-cd">
                            <div class="card-body text-center">
                                <h3> {{disco.title}} </h3>
                                <p> {{disco.author}} </p>
                                <p> {{disco.year}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>  
    </div>

   <script src="js/script.js"></script>
</body>
</html>