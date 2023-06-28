<?php
        // Paramètres de la requête
        $apiKey = 'd2b8b37c240649b01bcb090c6768fdb9'; // Remplacez par votre clé d'API WeatherWP
        $city = 'Paris';
        $country = 'France';
        $language = 'fr';

        // Construire l'URL de l'API avec les paramètres
        $url = "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city={$city}&country={$country}&language={$language}&key={$apiKey}";

        // Effectuer la requête
        $response = file_get_contents($url);
?>
<?php get_header() ?>
<section>
    <div class="row d-flex justify-content-center my-5">
        <div class="my-5">
            <form method="GET">
                <label class="mt-3" for="city">Ville :</label>
                <input class="form-control" type="text" name="city" id="city" required>

                <label class="mt-3" for="country">Pays :</label>
                <input class="form-control" type="text" name="country" id="country" required>
                <button class="btn btn-outline-danger my-3" type="submit">Obtenir la météo</button>
            </form>
        </div>
        <?php
        // Vérifier la réponse
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['city'], $_GET['country'])) {
        if ($response) {
            // Traiter les données JSON de la réponse
            $weatherData = json_decode($response, true);

            // Accéder aux données météorologiques
            $temperature = $weatherData['temp'];
            $icon = $weatherData['icon'];
            $description = $weatherData['description'];
            ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="<?= $icon; ?>" alt="Conditions métheorologiques">
                    <h5 class="card-title text-capitalize"><?= $city = $_GET['city'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-capitalize"><?= $country = $_GET['country'] ?></h6>
                    <p class="card-text text-capitalize"><?php
                        // Construction du texte à afficher
                        $weatherText = "Météo de {$city} - {$temperature}°C";

                        // Afficher les données météorologiques
                        echo $weatherText;
                        ?>
                    </p>
                </div>
            </div>
            <?php
        } else {
            echo "Erreur lors de la récupération des données météorologiques.";
        }}
        ?>
    </div>
</section>

<?php get_footer() ?>


