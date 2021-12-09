



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card-container {
            background: green;
        }
    </style>
    
</head>
<body>
    <div id="app">
        <header>
        <div>
            <img class="logo" src="https://loghi-famosi.com/wp-content/uploads/2020/09/Logo-della-Spotify.png" alt="">
        </div>
        </header>
        <main>
        <div class="container">
            <div class="card" v-for="(album, index) in albums" :key="index" class="album">
                <div class="card-container">
                    <img :src="album.poster">
                    <h3>{{album.title}}</h3>
                    <p>{{album.author}}</p>
                    <p>{{album.year}}</p>
                </div>    
            </div>
        </div>
        </main>
    </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
<script src="./assets/main.js"></script>

</body>
</html>