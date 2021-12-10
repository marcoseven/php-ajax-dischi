<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Vue Dischi</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="contentHeader">
			<img id="logo-Spotify" src="./assets/img/spotify-logo.svg" alt="logo Spotify" />
		</div>
        </div>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <div id="app">  
            <div class="container">
                <div class="contentMain">
                    <div class="row">
                        <div class="SearchBox w-50">
                            <label for="genre">Scegli il genere: </label>
                            <select
                                name="genre"
                                id="genre"
                                v-model="genreSelected"
                                @change="SearchBoxGenre"
                            >
                                <option value="All">All</option>
                                <option value="Rock">Rock</option>
                                <option value="Pop">Pop</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Metal">Metal</option>
                            </select>
                        </div>
                        <div class="SearchBox w-50">
                            <label for="author">Scegli l'artita: </label>
                            <select
                                name="author"
                                id="author"
                                v-model="authorSelected"
                                @change="SearchBoxAuthor"
                            >
                                <option value="All">All</option>
                                <option value="Bon Jovi">Bon Jovi</option>
                                <option value="Queen">Queen</option>
                                <option value="Sting">Sting</option>
                                <option value="Steve Gadd Band">Steve Gadd Band</option>
                                <option value="Iron Maiden">Iron Maiden</option>
                                <option value="Eric Clapton">Eric Clapton</option>
                                <option value="Deep Purple">Deep Purple</option>
                                <option value="Metallica">Metallica</option>
                                <option value="Dave Weckl">Dave Weckl</option>
                                <option value="Michael Jackson">Michael Jackson</option>
                            </select>
                        </div>
                    </div>
                    <div class="row cards">
                        <div class="col-2" v-for="disc in discs">
                            <div class="card">
                                <img :src="disc.poster" alt="immagine disco musicale">
                                <h2 class="fs-5 fw-bolder">{{disc.title.toUpperCase()}}</h2>
                                <div class="card-body">
                                    <div>
                                        <h4>{{disc.author}}</h4>
                                        <h4>{{disc.year}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

    <!-- script|axios-vue.js-app.js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src="./assets/js/app.js"></script>
    <!-- /script|axios-vue.js-app.js -->
</body>
</html>