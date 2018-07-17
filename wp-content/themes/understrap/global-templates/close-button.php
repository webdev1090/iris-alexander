<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

?>

	<div class="close-button">
    <?php
            if (is_page('introduction')) {
                echo "<a href='" . home_url() ."/#section-2'><img src='". get_template_directory_uri() ."/img/close.png'  alt='Close Button'></a>";
            } elseif (is_single()) {
                echo "<a href='" . home_url() ."/#section-4'><img src='". get_template_directory_uri() ."/img/close-dark.png'  alt='Close Button'></a>";
            } else {
            }
         ?>
 </div>
