<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if (!empty($row)): ?>
    <div class="<?php print $classes[$id]; ?>">
      <?php print $row; ?>
    </div>
  <?php else: ?>
    <?php unset($rows[$id]); ?>
  <?php endif; ?>
<?php endforeach; ?>
