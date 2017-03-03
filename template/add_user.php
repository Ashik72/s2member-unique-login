<div id="form_container">
<?php

  _e(self::Error());

 ?>
  <form id="form_16956" class="appnitro"  method="post" action="">
        <div class="form_description">
  </div>
    <ul >

        <li id="li_1" >
  <label class="description" for="fname">First Name </label>
  <div>
    <input id="element_1" name="fname" class="element text medium" type="text" maxlength="255" value=""/>
  </div>
  </li>		<li id="li_2" >
  <label class="description" for="lname">Last Name </label>
  <div>
    <input id="element_2" name="lname" class="element text medium" type="text" maxlength="255" value=""/>
  </div>
  </li>		<li id="li_3" >
  <label class="description" for="uname">Username </label>
  <div>
    <input id="element_3" name="uname" class="element text medium" type="text" maxlength="255" value=""/>
  </div>
  </li>		<li id="li_4" >
  <label class="description" for="password">Password </label>
  <div>
    <input id="element_4" name="password" class="element text medium" type="password" maxlength="255" value=""/>
  </div>
  </li>		<li id="li_6" >
  <label class="description" for="email">Email </label>
  <div>
    <input id="element_6" name="email" class="element text medium" type="text" maxlength="255" value=""/>
  </div>
  </li>


<?php

if (empty($coupons_array)) {
  ?>
  <li id="li_5" >
  <label class="description" for="coupon">Coupon </label>
  <div>
    <input id="element_5" name="coupon" class="element text medium" type="text" maxlength="255" value=""/>
  </div>
  </li>
  <?php
} else {
  ?>
  <li id="li_7" >
  <label class="description" for="coupon">Coupon </label>
  <div>
  <select class="element select medium" id="element_7" name="coupon">

<?php

  foreach ($coupons_array as $key => $coupon) {

    if (empty($coupon['code']))
      continue;

    _e('<option value="'.$coupon['code'].'" >'.$coupon['code'].'</option>');
  }

 ?>
  </select>
  </div>
  </li>
  <?php
}
 ?>


        <li class="buttons">
        <input type="hidden" name="form_id" value="16956" />
        <input type="hidden" name="s2_level" value="<?php _e($atts['level']); ?>" />
        <input type="hidden" name="use_meta_email" value="<?php _e($atts['use_meta_email']); ?>" />

      <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
  </li>
    </ul>
  </form>
</div>
