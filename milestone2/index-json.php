
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    
     <header>
        <img class="logo" src="./img/spotify-logo.png" alt="logo">       
     </header>

    <div id="root">
        <main>
            <div class="my_container">
                 <div  v-for="database in array" class="card">
                     <img :src="database.poster" alt="poster">
                     <h2> {{ database.title }} </h2>
                     <h4> {{ database.author }} </h4>
                     <h4> {{ database.year }} </h4>
                 </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
