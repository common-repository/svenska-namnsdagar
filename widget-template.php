<?php
$famousBirthdays = FAMBDAY_get_instance();
$birthdaysToday  = FamousBirthdaysUtility::get_birthdays_today();
?>
<div style="color:<?php echo $famousBirthdays->settings->primary_text_color . ';background-color:' .$famousBirthdays->settings->body_background_color; ?>;" class="famous-birthdays-container">
  <div style="color:<?php echo $famousBirthdays->settings->date_text_color . ';background-color:' .$famousBirthdays->settings->header_background_color; ?>;" class="famous-birthdays-header">
    <?php
    $timestamp = current_time('timestamp');
    echo date('d/m', $timestamp);
    ?>
  </div>
 <div class="famous-birthdays-content">
     <a href="http://dejavuproduction.se" target="_blank"><p style="text-align:center;font-weight:bold;">
    <?php
      echo $famousBirthdays->settings->title;
    ?>
    </p></a>
    <?php
      if (is_array($birthdaysToday) && count($birthdaysToday) > 0) {
        foreach($birthdaysToday as $famousPerson) {
          echo '<p>' . $famousPerson . '</p>';
        }
      } else {
        echo '<p>There are no birthdays to display.</p>';
      }
    ?>
  </div>
  <div style="color:<?php echo $famousBirthdays->settings->date_text_color . ';background-color:' .$famousBirthdays->settings->header_background_color; ?>;" class="famous-birthdays-footer">
    &nbsp;
  </div>
</div>
