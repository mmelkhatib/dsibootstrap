<?php
/**
 * @file
 * Template for the 1 column panel layout.
 *
 * This template provides a three column 25%-50%-25% panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 */
?>

<section>
  <div class="page-header-wrapper row">
    <div class="container-fluid">
      <?php print $content['page_header']; ?>
    </div>
  </div>
  <div class="page-content-wrapper row">
    <div class="container-fluid">
        <?php print $content['page_content']; ?>
    </div>
  </div>
</section>
