<?php
include '../includes/header.php';
?>

<body>
    <div class="records">
        <div class="container">
            <div class="row">
                <iframe src="https://www.meteoblue.com/en/weather/widget/three/toulon-hy%c3%a8res-airport_france_6299477?geoloc=fixed&nocurrent=0&noforecast=1&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image" frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" class="meteo-widget"></iframe>
            </div>
        </div>

        <?php
        include '../includes/nav.php';
        ?>

        <div class="embed-responsive embed-responsive-16by9">
            <!-- youtube livecam -->
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gCimBI8Wh84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SRFk2fuP1CU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-1by1">
            <!-- windsup records -->
            <iframe class="embed-responsive-item" src="https://www.winds-up.com/api.php?id=2&set_obs_array=1&set_unite=1&output=embed&set_codeLive=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<?php
include '../includes/footer.php';
?>

</html>