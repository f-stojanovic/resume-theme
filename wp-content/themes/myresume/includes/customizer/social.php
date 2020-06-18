<?php

function ju_social_customizer_section($wp_customize) {
	$wp_customize->add_section('ju_social_section', array(
		'title' => __('Social Settings', 'myresume'),
		'priority' => 30
	));

	$wp_customize->add_setting('ju_email_handle', array(
		'default' => ''
	));

	$wp_customize->add_setting('ju_github_handle', array(
		'default' => ''
	));

	$wp_customize->add_setting('ju_linkedin_handle', array(
		'default' => ''
	));

	$wp_customize->add_setting('ju_skype_handle', array(
		'default' => ''
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ju_email_handle',
			array(
				'label'    => __( 'Email', 'myresume' ),
				'section'  => 'ju_social_section',
				'settings' => 'ju_email_handle'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ju_github_handle',
			array(
				'label'    => __( 'GitHub URL', 'myresume' ),
				'section'  => 'ju_social_section',
				'settings' => 'ju_github_handle'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ju_linkedin_handle',
			array(
				'label'    => __( 'LinkedIn URL', 'myresume' ),
				'section'  => 'ju_social_section',
				'settings' => 'ju_linkedin_handle'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ju_skype_handle',
			array(
				'label'    => __( 'Skype name', 'myresume' ),
				'section'  => 'ju_social_section',
				'settings' => 'ju_skype_handle'
			)
		)
	);
}