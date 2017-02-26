<?php

if (!defined('ABSPATH'))
  exit;


add_action( 'tf_create_options', 'wp_expert_custom_options_s2member_unique_login', 150 );

function wp_expert_custom_options_s2member_unique_login() {


	$titan = TitanFramework::getInstance( 's2member_unique_login_opts' );
	$section = $titan->createAdminPanel( array(
		    'name' => __( 's2Member Login Limits', 'pmpro_nhpa' ),
		    'icon'	=> 'dashicons-forms'
		) );

	$tab = $section->createTab( array(
    		'name' => 'General Options'
		) );


    $tab->createOption([
      'name' => 'Membership level and allowed logins (membership_level|allowed_login)',
      'id' => 'membership_level_allowed_login',
      'type' => 'textarea',
      'desc' => '(int) membership_level| (int) allowed_login <br>[Ex - 1|3]<br> [Each rule on separate lines]',
      'default' => ''
      ]);


      $tab->createOption([
        'name' => 'Login Limit Exceeded Page',
        'id' => 'limit_exceeded_link',
        'type' => 'text',
        'desc' => '[The error page link where user will be redirected if they exceed their login limit]',
        'default' => '.'
        ]);


        $tab->createOption([
          'name' => 'Notification Code',
          'type' => 'custom',
          'custom' => '<strong>Add this code to s2Member (Pro) > API/Notifications > Signup Notifications </strong><br><br> <code>'.get_site_url().'/?coupon_notifier=1&&coupon=%%coupon_code%%&sid=%%subscr_id%%</code>',
          ]);

          $tab->createOption([
            'name' => 'Let User Define EOT',
            'id' => 'user_define_eot',
            'type' => 'enable',
            'default' => false,
            'desc' => 'Let User Define EOT',
            ]);


            $tab->createOption([
              'name' => 'Maximum EOT Time/EOT Time [(int) in days]',
              'id' => 'max_eot_time_define',
              'type' => 'text',
              'desc' => 'If above option is enabled, it will not let user define EOT more than specified here. If above option is not enabled, this time will be used to allocate new EOT.',
              'default' => ''
              ]);


              $tab->createOption([
                'name' => 'Do not let EOT increase more than once',
                'id' => 'one_time_increase',
                'type' => 'enable',
                'default' => false,
                'desc' => 'If enabled, only once EOT can be increased.',
                ]);



		$section->createOption( array(
  			  'type' => 'save',
		) );


		/////////////New

/*		$embroidery_sub = $section->createAdminPanel(array('name' => 'Embroidering Pricing'));


		$embroidery_tab = $embroidery_sub->createTab( array(
    		'name' => 'Profiles'
		) );


		$wp_expert_custom_options['embroidery_tab'] = $embroidery_tab;

		return $wp_expert_custom_options;
*/
}


 ?>
