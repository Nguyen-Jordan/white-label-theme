(function($) {
    $(document).ready(function() {
        // Récupérer les valeurs de la ville et du pays depuis le widget
        var city = $('.cnalps-weather-widget .weather-title').text().split('à')[1].trim();
        var country = $('.cnalps-weather-widget .weather-title').text().split(',')[1].trim();

        // Construire l'URL de l'API avec les valeurs de la ville et du pays
        var apiUrl = 'https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=' + encodeURIComponent(city) + '&country=' + encodeURIComponent(country) + '&language=fr&key=d2b8b37c240649b01bcb090c6768fdb9';

        // Effectuer la requête AJAX vers l'API météo
        $.ajax({
            url: apiUrl,
            dataType: 'json',
            success: function(response) {
                // Récupérer les données météo depuis la réponse JSON
                var temperature = response.temp;
                var icon = response.icon;
                var description = response.description;

                // Injecter les données météo dans le bloc HTML
                $('.cnalps-weather-widget').append('<div class="weather-info row d-flex justify-content-center">' +
                    '<div class="col temperature">' + temperature + '°C</div>' +
                    '<div class="col icon"><img src="' + icon + '" alt="Weather Icon"></div>' +
                    '<div class="col description">' + description + '</div>' +
                    '</div>');
            },
            error: function() {
                console.log('Erreur lors de la récupération des données météo.');
            }
        });
    });
})(jQuery);
