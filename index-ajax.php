<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <main id="app">
        <div class="container-fluid bg-color" >
            <div class="w-60 centered pt-6">  
                <div class="carta row row-cols-5">
                    <div v-for="card in cards" class="col text-center text-light px-3 mb-3">
                        <div class="music h-100 c-wrapper p-3" style="background-color: #2E3A46" >
                            <img class="image-card w-100" :src="card.poster" alt="">
                            <h4>{{card.title}}</h4>
                            <h5>{{card.author}}</h5>
                            <h6>{{card.year}}</h6>
                        </div>
                    </div>
                </div>
                    <!-- <?php include_once __DIR__ . '/partials/card.php' ?> -->
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>