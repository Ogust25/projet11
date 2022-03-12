<?php

$host = 'localhost';
$dbname = 'projet11';
$username = 'phpmyadmin';
$password = 'apache2luxe';


$sql = "SELECT Noms,Prix,Images FROM Produits INNER JOIN Categories WHERE Sources = id_cat";
try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Karla:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f5e209f987.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-header  flex-col justify-center h-full xl:h-full  sm:h-28 ">
        <!-- background img/video -->
        <section class="hero-wrapper -z-50 min-w-full min-h-full sm:bg-hidden h-full sm:h-40 fixed">
            <div class="img h-full sm:hidden"></div>
            <div class=" hidden sm:flex"> <video loop muted="muted " autoplay>
                    <source src="./assets/images/video_cafe.mp4" />
                </video>
            </div>
        </section>

        <!-- barre nav -->
        <nav class="flex items-center justify-between flex-wrap bg-hidden p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>Shuffle café</span>
                </a>
            </div>

            <div class="block lg:hidden">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2  text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-8 w-8" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <!-- <li class="mr-3">
                  <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                </li> -->
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#propos">A PROPOS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">SPCIALITES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">NOS CAFES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">NOS DESSERTS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">CONTACT</a>
                    </li>
                </ul>
            </div>


        </nav>
        <!-- ...... -->

        <div class="flex h-screen xl:h-screen md:h-96 items-center  bg-hidden font-serif ">
            <h1 class="mx-5 text-2xl sm:text-3xl md:text-5xl xl:text-8xl uppercase text-white cinzel">
                <p class="">Welcome to </p>
                <p class="p-4 mx-2 md:mx-28 ">THE SHUFFLE</p>
            </h1>
        </div>

    </header>
    <main class="stretch">

        <!-- A Propos -->
        <section id="propos" class="
        karla
        md:flex
        flex-row
        justify-center
        ">
            <div class=" flex-col   m-8">
                <div class="text-2xl xl:text-5xl">
                    <p>A propos</p>
                    <p>The Shuffle</p>
                </div>
                <div>
                    <p class="text-justify italic w-5/6 text-lg xl:text-2xl">Certains pensent qu'on ne changera pas le
                        monde...Nous si.
                        Et avec l'acte le plus quotidien du monde : en buvant le café!
                        Nos cafés 100% biologique des meilleurs producteurs du monde.
                        Nos pâtisseries 100% fait maison avec les ingrédients français.
                        Les amateurs du régime sans sucre et sans lactose trouverons aussi leur bonheur.
                        Ainsi vous régalant, vous réalisez un acte de bienveillance pour vous et pour la planète.
                    </p>
                </div>
            </div>

            <div>
                <img class=" p-8" src="./assets/images/image_a_propos.jpg" alt="" />
            </div>

        </section>

        <!-- Spécialités -->
        <section id="specialites" class=" 
        h-full
        flex 
        flex-col
        justify-center
        items-center
        font-serif 
        text-white">

            <p>SPECIALITES</p>
            <P>Kopi Luwak (Indonésie)</P>
            <P>Blue Mountain (Jamaïque)</P>
            <P>Kona Coffee (Hawaï)</P>
            <P>Le Bourbon Pointu (La Réunion)</P>
        </section>

        <!-- Carouselle Cafés -->
        <section id="cafes">
            <h2 class="cinzel text-xl p-4">Nos cafés</h2>
            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- Espresso -->
                    <div class="carousel-item active relative float-left w-full">
                        <img
                        src="./assets/images/cafés/espresso.png"
                        class="block w-full"
                        alt="espresso"
                        />
                        <p class="text-center cinzel pt-2">Espresso</p>
                        <p class="text-center cinzel pb-2">5€</p>
                    </div>
                    <!-- Americano -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/americano.png"
                        class="block w-full"
                        alt="americano"
                        />
                        <p class="text-center cinzel pt-2">Americano</p>
                        <p class="text-center cinzel pb-2">8€</p>
                    </div>
                    <!-- Latte -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/latte.png"
                        class="block w-full"
                        alt="latte"
                        />
                        <p class="text-center cinzel pt-2">Latte</p>
                        <p class="text-center cinzel pb-2">10€</p>
                    </div>
                    <!-- Cappuchino -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/cappuchino.png"
                        class="block w-full"
                        alt="cappuchino"
                        />
                        <p class="text-center cinzel pt-2">Cappuchino</p>
                        <p class="text-center cinzel pb-2">12€</p>
                    </div>
                    <!-- Macchiato -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/macchiato.png"
                        class="block w-full"
                        alt="macchiato"
                        />
                        <p class="text-center cinzel pt-2">Macchiato</p>
                        <p class="text-center cinzel pb-2">12€</p>
                    </div>
                    <!-- Moccacino -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/moccacino.png"
                        class="block w-full"
                        alt="moccacino"
                        />
                        <p class="text-center cinzel pt-2">Moccacino</p>
                        <p class="text-center cinzel pb-2">13€</p>
                    </div>
                    <!-- Flate White -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/flat_white.png"
                        class="block w-full"
                        alt="flat white"
                        />
                        <p class="text-center cinzel pt-2">Flat White</p>
                        <p class="text-center cinzel pb-2">13€</p>
                    </div>
                    <!-- Corretto -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets1/images/cafés/corretto.png"
                        class="block w-full"
                        alt="corretto"
                        />
                        <p class="text-center cinzel pt-2">Corretto</p>
                        <p class="text-center cinzel pb-2">11€</p>
                    </div>
                    <!-- Café Glacé -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/cafe_glace.png"
                        class="block w-full"
                        alt="café glacé"
                        />
                        <p class="text-center cinzel pt-2">Café glacé</p>
                        <p class="text-center cinzel pb-2">14€</p>
                    </div>
                    <!-- Frappé -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/frappe.png"
                        class="block w-full"
                        alt="Frappé"
                        />
                        <p class="text-center cinzel pt-2">Frappé</p>
                        <p class="text-center cinzel pb-2">14€</p>
                    </div>
                    <!-- RAF -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/RAF.png"
                        class="block w-full"
                        alt="RAF"
                        />
                        <p class="text-center cinzel pt-2">RAF</p>
                        <p class="text-center cinzel pb-2">14€</p>
                    </div>
                    <!-- Irish -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/cafés/irish.png"
                        class="block w-full"
                        alt="irish"
                        />
                        <p class="text-center cinzel pt-2">Irish</p>
                        <p class="text-center cinzel pb-2">15€</p>
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Anecdotes -->
        <section id="anecdotes" class="w-screen p-10 text-lg text-white">
            <div class="flex items-center">
                <img src="./assets/images/coffee.svg" alt="cafe">
                <h2 class="cinzel text-2xl">Le saviez-vous ?</h2>
            </div>
            <p>Le café est la deuxième marchandise la plus échangée dans le monde derrière le pétrole.</p>
            <p>Le café a un impact positif sur la mémoire à court terme, psychotechnique ainsi que sur le QI. Des études scientifiques ont mis en évidence une corrélation entre ces effets positifs et la quantité consommée de café.</p>
            <p>Le café le plus cher du monde est produit à partir de baies de café préalablement digérées par des éléphants et récupérées dans leurs excréments. Ce café très prisé coûte aux alentours de 1 000 euros le kilo.</p>
            <p>Le Brésil est le principal pays producteur du monde, il représente 40 % de la production mondiale de café. Au cours des trois dernières années, le pays a produit chaque année entre 45 et 50 millions de sacs de 60 kg de café.</p>
        </section>

        <!-- Carouselle Desserts -->
        <section id="desserts">
            <h2 class="cinzel text-xl p-4">Nos desserts</h2>
            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- Gateaux -->
                    <div class="carousel-item active relative float-left w-full">
                        <img
                        src="./assets/images/desserts/gateaux.png"
                        class="block w-full"
                        alt="Gateaux"
                        />
                        <p class="text-center cinzel pt-2">Gateaux</p>
                        <p class="text-center cinzel pb-2">10€</p>
                    </div>
                    <!-- Glace -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/desserts/glace.png"
                        class="block w-full"
                        alt="Glace"
                        />
                        <p class="text-center cinzel pt-2">Glace</p>
                        <p class="text-center cinzel pb-2">12€</p>
                    </div>
                    <!-- Macaron -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/desserts/macaron.png"
                        class="block w-full"
                        alt="Macaron"
                        />
                        <p class="text-center cinzel pt-2">Macaron</p>
                        <p class="text-center cinzel pb-2">4€</p>
                    </div>
                    <!-- Tiramisu -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/desserts/tiramisu.png"
                        class="block w-full"
                        alt="Tiramisu"
                        />
                        <p class="text-center cinzel pt-2">Tiramisu</p>
                        <p class="text-center cinzel pb-2">11€</p>
                    </div>
                    <!-- Muffin -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/desserts/muffin.png"
                        class="block w-full"
                        alt="muffin"
                        />
                        <p class="text-center cinzel pt-2">Muffin</p>
                        <p class="text-center cinzel pb-2">11€</p>
                    </div>
                    <!-- Tarte -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./assets/images/desserts/tarte.png"
                        class="block w-full"
                        alt="tarte"
                        />
                        <p class="text-center cinzel pt-2">Tarte</p>
                        <p class="text-center cinzel pb-2">10€</p>
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Formulaire -->
        <section id="formulaire" class="flex flex-col-reverse h-screen justify-evenly items-center">
            <img src="./assets/images/cafetiere.jpg" alt="caf">
            <form method="post" class="w-screen flex justify-center items-center">
                <h2 class="font-bold text-3xl pb-5">CONTACTEZ-NOUS</h2>
                <div class="w-5/6">
                    <input class="w-full h-14 border pl-2" placeholder="Entrez votre Nom" name="nom" type="text" pattern="[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$" required>
                    <p class="invisible">Error</p>
                </div>
                <div class="w-5/6">
                    <input class="w-full h-14 border pl-2" placeholder="Entez une adresse email valide" name="email" type="email" pattern="[a-z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$" required>
                    <p class="invisible">Error</p>
                </div>
                <textarea class="w-5/6 h-60 border pl-2 pt-2" placeholder="Entrez votre message" name="message" required></textarea>
                <div>
                    <p class="invisible">bravo</p>
                    <input class="text-white px-6 py-2 text-xl" type="submit" value="Envoyer">
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="w-screen h-screen flex flex-col justify-between px-10 py-7 text-white text-lg sm:flex-wrap sm:flex-row">
        <section>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-github pr-2 text-2xl"></i>
                <p>ELENAGIR</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-linkedin pr-2 text-2xl"></i>
                <p>ELENA-GIRARD</p>
            </div>
            <hr>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-github pr-2 text-2xl"></i>
                <p>OGUST25</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-linkedin pr-2 text-2xl"></i>
                <p>AUGUST-GROS</p>
            </div>
        </section>
        <section class="flex items-center">
            <img class="w-2/4 h-auto" src="./assets/images/coeur.png" alt="grains de café en form de coeur">
            <ul>
                <li>Plan :</li>
                <li><a href="#">A PROPOS</a></li>
                <li><a href="#">SPECIALITES</a></li>
                <li><a href="#">NOS CAFES</a></li>
                <li><a href="#">NOS DESSERTS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </section>
        <section>
            <p>Contact :</p>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-location-dot pr-2 text-2xl text-center"></i>
                <p>144 Av. des Champs-Élysées<br>75008 Paris</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-mobile-screen-button pr-2 text-2xl text-center"></i>
                <p>06.45.25.31.25</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-envelope pr-2 text-2xl text-center"></i>
                <p>shuffle@hello.fr</p>
            </div>
        </section>
        <p class="text-center">Copyright &copy;2022 All rights reserved</p>
    </footer>

<script src="./js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>

<?php

	if($stmt === false){
		die("Erreur");
	}
}catch (PDOException $e){
  	die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>