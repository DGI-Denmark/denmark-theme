<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * @ingroup views_templates
 */
?>
<table class="<?php print $class; ?>"<?php print $attributes; ?>>
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <th class="views-field views-conference-list-date-widget"></th>
      <th class="views-field views-field-field-file-logo-fid"></th>
      <th class="views-field views-field-field-short-title-value"></th>
      <th class="views-field views-field-title"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr class="<?php print implode(' ', $row_classes[$count]); ?>">
        <td class="views-field views-conference-list-date-widget">
          <div class="date">
            <span class="month"><?php print ( $row['field_month_value'] ? date('M',strtotime($row['field_month_value'])) : "???" ); ?></span>
            <span class="day"><?php print $row['field_day_value']; ?></span>
          </div>
        </td>
        <td class="views-field views-field-field-file-logo-fid">
          <span class="logo"><?php print $row['field_file_logo_fid']; ?></span>
        </td>
        <td class="views-field views-field-field-short-title-value">
          <span class="short-title"><?php print $row['field_short_title_value']; ?></span>
        </td>
        <td class="views-field views-field-title">
          <div class="conference-name">
            <span class="title"><?php print $row['title']; ?></span>
            <span class="slogan"><?php print $row['field_slogan_value']; ?></span>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
