<?php
function generatePortfolio($dir) {
    $files = glob($dir . "portfolio*/");

    echo '<div class="row">';
    for ($i = 1; $i <= count($files); $i++) {
        if ($i %5 == 0) {
            echo '</div>';
            echo '<div class="row">';
        }

        echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$i.'">';
        echo 'Web stránka '.$i;
        echo '</div>';

    }
    echo '</div>';
}
?>