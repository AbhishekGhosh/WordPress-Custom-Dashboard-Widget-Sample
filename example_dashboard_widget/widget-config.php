<?php
/**
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */
    $number = ( isset( $_POST['number'] ) ) ? stripslashes( $_POST['number'] ) : '';
    self::update_dashboard_widget_options(
            self::wid,                                  //The  widget id
            array(                                      //Associative array of options & default values
                'example_number' => $number,
            )
    );

?>
<p>This is an example dashboard widget!</p>
<p>This is the configuration part of the widget, and can be found and edited from <tt><?php echo __FILE__ ?></tt></p>
<input type="text" name="number" />
