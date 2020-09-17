<?php
include '../includes/header.php';
?>

<body>
    <div class="records">
        <!-- <div class="row">
                <center>
                    <iframe src="https://www.meteoblue.com/en/weather/widget/daily/toulon-hy%c3%a8res-airport_france_6299477?geoloc=fixed&days=5&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=monochrome&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windgust=0&winddirection=0&uv=0&humidity=0&precipitation=0&precipitation=1&precipitationprobability=0&spot=0&pressure=0&layout=light" frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%; height: 242px"></iframe>
                </center> -->


        <?php
        include '../includes/nav.php';
        ?>

        <div>
            <div class=" logo-prev-source align-items-center">
                <center>
                    <img style="margin: auto;" src="/public/pictures/logo_windsup.png" alt="Logo windsup">
                </center>
            </div>

            <iframe src="https://www.winds-up.com/api.php?id=2&set_width=100%&set_height=300&set_obs=&set_obs_array=&set_previs=1&set_webcam=&set_map=&set_logo=&set_txt=&set_unite=1&output=embed&set_codeLive=1" width="100%" height="300" scrolling=no frameborder=0></iframe>
        </div>

        <div>
            <div class="logo-prev-source">
                <center>
                    <img style="margin: auto;" src="/public/pictures/windguru_logo.png" alt="Logo windguru">
                </center>
            </div>

            <script id="wg_fwdg_14_14_1585255748195">
                (function(window, document) {
                    var loader = function() {
                        var arg = ["s=501005", "m=501005", "uid=wg_fwdg_14_14_1585255748195", "wj=knots", "tj=c", "odh=0", "doh=24", "fhours=240", "vt=forecasts", "lng=fr",
                            "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING"
                        ];
                        var script = document.createElement("script");
                        var tag = document.getElementsByTagName("script")[0];
                        script.src = "https://www.windguru.cz/js/widget.php?" + (arg.join("&"));
                        tag.parentNode.insertBefore(script, tag);
                    };
                    window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                })(window, document);
            </script>
        </div>

        <div>
            <script id="wg_fwdg_14_52_1585257697391">
                (function(window, document) {
                    var loader = function() {
                        var arg = ["s=14", "m=52", "uid=wg_fwdg_14_52_1585257697391", "wj=knots", "tj=c", "odh=0", "doh=24", "fhours=240", "vt=forecasts", "lng=fr",
                            "p=WINDSPD,GUST,MWINDSPD,SMER,TMP,CDC,APCP1,RATING"
                        ];
                        var script = document.createElement("script");
                        var tag = document.getElementsByTagName("script")[0];
                        script.src = "https://www.windguru.cz/js/widget.php?" + (arg.join("&"));
                        tag.parentNode.insertBefore(script, tag);
                    };
                    window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                })(window, document);
            </script>

        </div>

        <div>
            <iframe width="100%" height="450" src="https://embed.windy.com/embed2.html?lat=42.999&lon=6.130&zoom=11&level=surface&overlay=wind&menu=&message=&marker=true&calendar=&pressure=&type=map&location=coordinates&detail=true&detailLat=43.062&detailLon=6.124&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
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