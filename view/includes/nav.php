<div class="col" style="padding: 3%">
    <center>
        <a href="../pages/observation.php" class="btn btn-secondary btn-lg active" style="margin-right: 3%;" role="button" aria-pressed="true">
            Observation
            <i class="fas fa-wind"></i></a>

        <a href="../pages/prevision.php" class="btn btn-primary btn-lg active" style="margin-right: 3%;" role="button" aria-pressed="true">
            Prévision
            <i class="far fa-chart-bar"></i></a>

        <!-- <select class="btn btn-primary btn-lg active" id="spotSelect">
            <option value="Almanarre">Almanarre</option>
            <option value="Bergerie">Bergerie</option>
            <option value="Sixfour">Sixfour</option>
            <option value="Jai">Jai</option>
        </select> -->
    </center>
</div>

<script>
    $(document).ready(function() {
        $("#spotSelect").change(function() {
            alert($("#spotSelect").val());
            var spot = $("#spotSelect").val()
        });


        // function createUrl(spot) {
        //     /* 
        //     a refaire plus propre avec le json des spots
        //     je retoune le iframe
        //     */
        //     let url = '< iframe scrolling = "no" seamless = "seamless" style = "border: none; width: 100%; overflow: hidden; height: 315px;" src = "https://www.windguru.cz/widget-fcst-iframe.php?s=501005&amp;m=501005&amp;uid=wg_fwdg_14_14_1585255748195&amp;wj=knots&amp;tj=c&amp;odh=0&amp;doh=24&amp;fhours=240&amp;vt=forecasts&amp;lng=fr&amp;p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING&amp;hostname=localhost&amp;url=http%3A%2F%2Flocalhost%2Fmeteo%2Fview%2Fpages%2Fprevision.php" id = "iFrameResizer1" > < /iframe>'

        //     if (spot = "Bergerie") {
        //         url
        //     }
        // }
    });
</script>