<?php
class FamousBirthdaysWidget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
        'famous_birthdays',
        'Svenska Namnsdagar'
    );
  }

  public function widget($args, $instance)
  {
    echo "<aside class=\"widget\">";
    echo FamousBirthdays::shortcode();
    echo "</aside>";
  }

  public function form($instance)
  {
    ?>
    <p>Click <a href="options-general.php?page=fambday">here</a> for Namnsdags settings</p>
    <?php
  }

}
