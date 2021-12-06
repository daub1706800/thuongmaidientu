<?php
/**
 * Define custom fields for widgets
 * 
 * @package Niva Store Pro
 */

function niva_store_widgets_show_widget_field( $instance = '', $widget_field = '', $niva_store_widget_field_value = '' ) {
    
    extract( $widget_field );
    $niva_store_widget_field_wrapper  = isset( $niva_store_widget_field_wrapper ) ? $niva_store_widget_field_wrapper : '';
    $niva_store_widget_field_relation = isset( $niva_store_widget_field_relation ) ? $niva_store_widget_field_relation : array();
    $niva_store_widget_relation_json  = wp_json_encode( $niva_store_widget_field_relation );
    $niva_store_widget_relation_class = ( $niva_store_widget_field_relation ) ? 'niva_store_widget_field_relation' : '';


    switch ( $niva_store_widgets_field_type ) {

        /**
         * title field
         */
        case 'title' :
        ?>
            <p class="bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="text" value="<?php echo esc_html( $niva_store_widget_field_value ); ?>" />

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * text field
         */
        case 'text' :
        ?>
            <p class="bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="text" value="<?php echo esc_html( $niva_store_widget_field_value ); ?>" />

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * text Area
         */
        case 'textarea' :
        ?>
            <p class="bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <textarea class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="text" value="<?php echo esc_html( $niva_store_widget_field_value ); ?>">
                    <?php echo esc_html( $niva_store_widget_field_value ); ?>
                </textarea>

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * number field
         */
        case 'number' :
        ?>
            <p>
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <input name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="number" step="1" min="1" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" value="<?php echo esc_html( $niva_store_widget_field_value ); ?>" class="small-text" />

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * url field
         */
        case 'url' :
        ?>
            <p>
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="text" value="<?php echo esc_url( $niva_store_widget_field_value ); ?>" />

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * checkbox
         */
        case 'checkbox' :
        ?>
            <p class="bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                <input id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" type="checkbox" value="1" class="widefat <?php echo esc_attr( $niva_store_widget_relation_class ); ?>" data-relations="<?php echo esc_attr( $niva_store_widget_relation_json ) ?>" <?php checked( '1', $niva_store_widget_field_value ); ?>/>
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?></label>

                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
            </p>
        <?php
            break;

        /**
         * select field
         */
        case 'select' :
        ?>
            <p class="bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                   <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                <?php } ?>
                <select name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" class="widefat <?php echo esc_attr( $niva_store_widget_relation_class ); ?>" data-relations="<?php echo esc_attr( $niva_store_widget_relation_json ) ?>">
                    <?php foreach ( $niva_store_widgets_field_options as $select_option_name => $select_option_title ) { ?>
                        <option value="<?php echo esc_attr( $select_option_name ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $select_option_name ) ); ?>" <?php selected( $select_option_name, $niva_store_widget_field_value ); ?>><?php echo esc_html( $select_option_title ); ?></option>
                    <?php } ?>
                </select>
            </p>
        <?php 
            break;

        /**
         * category dropdown field
         */
        case 'category_dropdown' :
            $select_field = 'name="'. esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ) .'" id="'. esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ) .'" class="widefat"';
        ?>
                <p class="post-cat bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                    <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                    <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                       <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                    <?php }

                        $dropdown_args = wp_parse_args( array(
                            'taxonomy'          => 'category',
                            'show_option_none'  => __( '- - Select Category - -', 'niva-store' ),
                            'selected'          => esc_attr( $niva_store_widget_field_value ),
                            'show_option_all'   => '',
                            'orderby'           => 'id',
                            'order'             => 'ASC',
                            'show_count'        => 0,
                            'hide_empty'        => 1,
                            'child_of'          => 0,
                            'exclude'           => '',
                            'hierarchical'      => 1,
                            'depth'             => 0,
                            'tab_index'         => 0,
                            'hide_if_empty'     => false,
                            'option_none_value' => 0,
                            'value_field'       => 'slug',
                        ) );

                        $dropdown_args['echo'] = false;

                        $dropdown = wp_dropdown_categories( $dropdown_args );
                        $dropdown = str_replace( '<select', '<select ' . $select_field, $dropdown );
                        echo $dropdown;
                    ?>
                </p>
        <?php
            break;

        /**
         * woocommerce category dropdown field
         */
        case 'woo_category_dropdown' :
            if ( niva_store_is_active_woocommerce() ) {
                $select_field = 'name="'. esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ) .'" id="'. esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ) .'" class="widefat"';
        ?>
                <p class="post-cat bz-widget-field-wrapper <?php echo esc_attr( $niva_store_widget_field_wrapper ); ?>">
                    <label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label>
                    <?php if ( isset( $niva_store_widgets_description ) ) { ?>
                       <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
                    <?php }
                        $dropdown_args = wp_parse_args( array(
                            'taxonomy'          => 'product_cat',
                            'show_option_none'  => __( '- - Select Category - -', 'niva-store' ),
                            'selected'          => esc_attr( $niva_store_widget_field_value ),
                            'show_option_all'   => '',
                            'orderby'           => 'id',
                            'order'             => 'ASC',
                            'show_count'        => 0,
                            'hide_empty'        => 1,
                            'child_of'          => 0,
                            'exclude'           => '',
                            'hierarchical'      => 1,
                            'depth'             => 0,
                            'tab_index'         => 0,
                            'hide_if_empty'     => false,
                            'option_none_value' => '',
                            'value_field'       => 'slug',
                        ));
                        $dropdown_args['echo'] = false;
                        $dropdown = wp_dropdown_categories( $dropdown_args );
                        $dropdown = str_replace( '<select', '<select ' . $select_field, $dropdown );
                        echo $dropdown;
                    ?>
                </p>
        <?php
            }
            break;

        /**
         * upload widget field
         */
        case 'upload':
        $image = $image_class = "";
        if ( $niva_store_widget_field_value ) { 
            $image          = '<img src="'.esc_url( $niva_store_widget_field_value ).'" style="max-width:100%;"/>';
            $image_class    = ' hidden';
        }
        ?>
        <div class="attachment-media-view">

            <p>
                <span class="field-label"><label for="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>"><?php echo esc_html( $niva_store_widgets_title ); ?>:</label></span>
            </p>
            
            <div class="placeholder<?php echo esc_attr( $image_class ); ?>">
                <?php esc_html_e( 'No image selected', 'niva-store' ); ?>
            </div>
            <div class="thumbnail thumbnail-image">
                <?php echo $image; ?>
            </div>

            <div class="actions bz-clearfix">
                <button type="button" class="button bz-delete-button align-left"><?php esc_html_e( 'Remove', 'niva-store' ); ?></button>
                <button type="button" class="button bz-upload-button alignright"><?php esc_html_e( 'Select Image', 'niva-store' ); ?></button>
                
                <input name="<?php echo esc_attr( $instance->get_field_name( $niva_store_widgets_name ) ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $niva_store_widgets_name ) ); ?>" class="upload-id" type="hidden" value="<?php echo esc_url( $niva_store_widget_field_value ); ?>"/>
            </div>

            <?php if ( isset( $niva_store_widgets_description ) ) { ?>
               <span class="field-description"><em><?php echo wp_kses_post( $niva_store_widgets_description ); ?></em></span>
            <?php } ?>

        </div>
        <?php
            break;

    }
}

function niva_store_widgets_updated_field_value( $widget_field, $new_field_value ) {

    extract( $widget_field );

    if ( $niva_store_widgets_field_type == 'number') {
        return absint( $new_field_value );
    } elseif ($niva_store_widgets_field_type == 'title' ) {
        return wp_kses_post( $new_field_value );
    } elseif ( $niva_store_widgets_field_type == 'url' ) {
        return esc_url_raw( $new_field_value );
    } elseif ( $niva_store_widgets_field_type == 'multicheckboxes' ) {
        $multicheck_list = array();
        if ( is_array( $new_field_value ) ) {
            foreach ( $new_field_value as $key => $value ) {
                $multicheck_list[esc_attr( $key )] = esc_attr( $value );
            }
        }
        return $multicheck_list;
    }elseif ( $niva_store_widgets_field_type == 'textarea') {
        return stripslashes( wp_filter_post_kses( addslashes( $new_field_value ) ) ); // wp_filter_post_kses() expects slashed
    } else {
        return sanitize_text_field( $new_field_value );
    }

    // adds sanitization callback function : textarea
}