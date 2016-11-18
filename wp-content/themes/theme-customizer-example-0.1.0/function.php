function tcx_register_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting(
        'tcx_link_color',
        array(
            'default'     => '#000000'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'tcx' ),
                'section'    => 'colors',
                'settings'   => 'tcx_link_color'
            )
        )
    );

}
add_action( 'customize_register', 'tcx_register_theme_customizer' );
