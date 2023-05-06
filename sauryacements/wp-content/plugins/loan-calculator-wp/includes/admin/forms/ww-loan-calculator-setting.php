<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Settings Page
 *
 * Handle settings
 *
 * @package Loan Calculator
 * @since 1.0.0
 */

// Get Loan Calculator Setting From Option Table.
$loan_all_setting_data = get_option( "ww_loan_option" );


/* START : Fetch Color Setting */
$back_ground_color = isset( $loan_all_setting_data['back_ground_color'] ) ? $loan_all_setting_data['back_ground_color'] : "";
$selected_color = isset( $loan_all_setting_data['selected_color'] ) ? $loan_all_setting_data['selected_color'] : "";
$background_light_color = isset( $loan_all_setting_data['background_light_color'] ) ? $loan_all_setting_data['background_light_color'] : "";
$border_color = isset( $loan_all_setting_data['border_color'] ) ? $loan_all_setting_data['border_color'] : "";
/* END : Fetch Color Setting */

/* START : Amount Field Value Setting */
$interested_rate = isset( $loan_all_setting_data['interested_rate'] ) ? $loan_all_setting_data['interested_rate'] : "";
$ballon_per = isset( $loan_all_setting_data['ballon_per'] ) ? $loan_all_setting_data['ballon_per'] : "";
$loan_term = isset( $loan_all_setting_data['loan_term'] ) ? $loan_all_setting_data['loan_term'] : "";
$loan_amount = isset( $loan_all_setting_data['loan_amount'] ) ? $loan_all_setting_data['loan_amount'] : "";
$loan_amount_min_value = isset( $loan_all_setting_data['loan_amount_min_value'] ) ? $loan_all_setting_data['loan_amount_min_value'] : "";
$loan_amount_max_value = isset( $loan_all_setting_data['loan_amount_max_value'] ) ? $loan_all_setting_data['loan_amount_max_value'] : "";
$loan_term_min_value = isset( $loan_all_setting_data['loan_term_min_value'] ) ? $loan_all_setting_data['loan_term_min_value'] : "";
$loan_term_max_value = isset( $loan_all_setting_data['loan_term_max_value'] ) ? $loan_all_setting_data['loan_term_max_value'] : "";
$interest_rate_min_value = isset( $loan_all_setting_data['interest_rate_min_value'] ) ? $loan_all_setting_data['interest_rate_min_value'] : "";
$interest_rate_max_value = isset( $loan_all_setting_data['interest_rate_max_value'] ) ? $loan_all_setting_data['interest_rate_max_value'] : "";

$monthly_rate = isset( $loan_all_setting_data['monthly_rate'] ) ? $loan_all_setting_data['monthly_rate'] : "";
$application_fee = isset( $loan_all_setting_data['application_fee'] ) ? $loan_all_setting_data['application_fee'] : "";
$application_fee_heading = isset( $loan_all_setting_data['application_fee_heading'] ) ? $loan_all_setting_data['application_fee_heading'] : "";
$monthly_fee_heading = isset( $loan_all_setting_data['monthly_fee_heading'] ) ? $loan_all_setting_data['monthly_fee_heading'] : "";
$total_regular_fees = isset( $loan_all_setting_data['total_regular_fees']  ) ? $loan_all_setting_data['total_regular_fees'] : "";
$total_fees = isset( $loan_all_setting_data['total_fees'] ) ? $loan_all_setting_data['total_fees'] : "";
/* END : Amount Field Value Setting */


/* START : Calculation Result */
$regular_repayment_heading = isset( $loan_all_setting_data['regular_repayment_heading'] ) ? $loan_all_setting_data['regular_repayment_heading'] : "";
$per_month_heading = isset( $loan_all_setting_data['per_month_heading'] ) ? $loan_all_setting_data['per_month_heading'] : "";
$years_heading = isset( $loan_all_setting_data['years_heading'] ) ? $loan_all_setting_data['years_heading'] : "";
$total_interests_payable_heading = isset( $loan_all_setting_data['total_interests_payable_heading'] ) ? $loan_all_setting_data['total_interests_payable_heading'] : "";
$over_heading = isset( $loan_all_setting_data['over_heading'] ) ? $loan_all_setting_data['over_heading'] : "";
$ballon_amt_heading = isset( $loan_all_setting_data['ballon_amt_heading'] ) ? $loan_all_setting_data['ballon_amt_heading'] : "";
/* END : Calculation Result */

/* START : Tab Field Setting */
$loan_feature_product_heading = isset( $loan_all_setting_data['loan_feature_product_heading']) ? $loan_all_setting_data['loan_feature_product_heading'] : "";
$video_heading = isset($loan_all_setting_data['video_heading']) ? $loan_all_setting_data['video_heading'] : "";
$loan_table_heading = isset( $loan_all_setting_data['loan_table_heading'] ) ? $loan_all_setting_data['loan_table_heading'] : "";
$repayment_chart_heading = isset( $loan_all_setting_data['repayment_chart_heading'] ) ? $loan_all_setting_data['repayment_chart_heading'] : "";
$youtube_video_link = isset( $loan_all_setting_data['youtube_video_link'] ) ? $loan_all_setting_data['youtube_video_link'] : "";

/* END : Tab Field Setting */

/* START : Calculator Disclaimer Setting*/
$contact_info_heading = isset( $loan_all_setting_data['contact_info_heading'] ) ? $loan_all_setting_data['contact_info_heading'] : "";
$contact_popup_button_heading = isset( $loan_all_setting_data['contact_popup_button_heading'] ) ? $loan_all_setting_data['contact_popup_button_heading'] : "";
$calculator_disclaimer_heading = isset( $loan_all_setting_data['calculator_disclaimer_heading'] ) ? $loan_all_setting_data['calculator_disclaimer_heading'] : "";
$calculator_disclaimer_description = isset( $loan_all_setting_data['calculator_disclaimer_description'] ) ? $loan_all_setting_data['calculator_disclaimer_description'] : "";
$contact_popup_content = isset( $loan_all_setting_data['contact_popup_content'] ) ? $loan_all_setting_data['contact_popup_content'] : "";

/* END :  Calculator Disclaimer Setting*/

/* START : Tooltip Setting */
$loan_amount_tooltip = isset( $loan_all_setting_data['loan_amount_tooltip'] ) ? $loan_all_setting_data['loan_amount_tooltip'] : "";
$loan_terms_tooltip = isset( $loan_all_setting_data['loan_terms_tooltip'] ) ? $loan_all_setting_data['loan_terms_tooltip'] : "";
$interest_rates_tooltip = isset( $loan_all_setting_data['interest_rates_tooltip'] ) ? $loan_all_setting_data['interest_rates_tooltip'] : "";
/* END : Tooltip Setting */

/* START : Header Link Section*/
$print_label = isset( $loan_all_setting_data['print_label'] ) ? $loan_all_setting_data['print_label'] : "";
$about_this_calculator = isset( $loan_all_setting_data['about_this_calculator'] ) ? $loan_all_setting_data['about_this_calculator'] : "";
$calculator_popup_content = isset( $loan_all_setting_data['calculator_popup_content'] ) ? $loan_all_setting_data['calculator_popup_content'] : "";
$print_option_heading = isset( $loan_all_setting_data['print_option_heading'] ) ? $loan_all_setting_data['print_option_heading'] : "";


/* END : Header Link Section */

/* START : Calculation Fee Setting Enable */
$calculation_fee_setting_enable = isset( $loan_all_setting_data['calculation_fee_setting_enable'] ) ? $loan_all_setting_data['calculation_fee_setting_enable'] : "";
$calculator_heading = isset( $loan_all_setting_data['calculator_heading'] ) ? $loan_all_setting_data['calculator_heading'] : "";
$print_option_enable = isset( $loan_all_setting_data['print_option_enable'] ) ? $loan_all_setting_data['print_option_enable'] : "";

/* END : Calculation Fee Setting Enable */

/* START : Delete Setting */
$delete_data_enable = isset( $loan_all_setting_data['delete_data_enable'] ) ? $loan_all_setting_data['delete_data_enable'] : "";
$disable_font_awesome = isset( $loan_all_setting_data['disable_font_awesome'] ) ? $loan_all_setting_data['disable_font_awesome'] : "";
/* END : Delete Setting */


/* START : Tab Enable Settings */
$enable_repayment_chart =isset( $loan_all_setting_data['enable_repayment_chart'] ) ? $loan_all_setting_data['enable_repayment_chart'] : "";
$enable_video_tab =isset( $loan_all_setting_data['enable_video_tab'] ) ? $loan_all_setting_data['enable_video_tab'] : "";
$enable_loan_mortisation_tab =isset( $loan_all_setting_data['enable_loan_mortisation_tab'] ) ? $loan_all_setting_data['enable_loan_mortisation_tab'] : "";
/* END : Tab Enable Settings */

?>

<!-- . begining of wrap -->
<div class="wrap">
    <?php
echo "<h2>" . esc_html__(' Loan Calculator', 'loan-calculator-wp' ) . "</h2>";
?>
    <?php

/* START : Tab Setting Active */
$general_settings_Screen = ( ( !isset($_GET['action'] ) ) || ( isset( $_GET['action'] ) && 'general_settings' == $_GET['action'] ) ) ? true : false;
$display_settings_Screen = ( isset($_GET['action'] ) && 'display_settings' == $_GET['action']) ? true : false;
$default_value_Screen = ( isset($_GET['action'] ) && 'default_value' == $_GET['action'] ) ? true : false;
$calculation_Screen = ( isset($_GET['action'] ) && 'calculation' == $_GET['action'] ) ? true : false;
$tab_setting_Screen = ( isset( $_GET['action'] ) && 'tab_setting' == $_GET['action'] ) ? true : false;
$calculator_disclaimer_Screen = ( isset($_GET['action'] ) && 'calculator_disclaimer' == $_GET['action'] ) ? true : false;
$tooltip_Screen = ( isset( $_GET['action'] ) && 'tooltip' == $_GET['action'] ) ? true : false;

$delete_Screen = ( isset( $_GET['action'] ) && 'misc_setting' == $_GET['action'] ) ? true : false;

/* END : Tab Setting Active */

?>                  
    <!-- beginning of the plugin options form -->
    <!-- START : Loan Calculator Setting Tab -->
     <h2 class="nav-tab-wrapper">
        <a href="<?php echo esc_url( add_query_arg(array('action' => 'general_settings') , admin_url('admin.php?page=ww_loan_calculator_page'))); ?>" class="nav-tab<?php if ($general_settings_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('General Settings','loan-calculator-wp'); ?></a> 
        <a href="<?php echo esc_url( add_query_arg(array('action' => 'display_settings' ) , admin_url('admin.php?page=ww_loan_calculator_page') ) ); ?>" class="nav-tab<?php if ($display_settings_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Display Settings','loan-calculator-wp'); ?></a> 
        <a href="<?php echo esc_url( add_query_arg( array( 'action' => 'default_value' ) , admin_url('admin.php?page=ww_loan_calculator_page') ) ); ?>" class="nav-tab<?php if ( $default_value_Screen ) echo ' nav-tab-active'; ?>"><?php esc_html_e('Default Value Settings','loan-calculator-wp'); ?></a>   
        <a href="<?php echo esc_url( add_query_arg( array( 'action' => 'tab_setting' ) , admin_url('admin.php?page=ww_loan_calculator_page' ) ) ); ?>" class="nav-tab<?php if ($tab_setting_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Tab Field','loan-calculator-wp'); ?></a>  
        <a href="<?php echo esc_url( add_query_arg( array('action' => 'calculator_disclaimer' ) , admin_url('admin.php?page=ww_loan_calculator_page'))); ?>" class="nav-tab<?php if ($calculator_disclaimer_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Contact Us / Disclaimer','loan-calculator-wp'); ?></a> 
        <a href="<?php echo esc_url(add_query_arg(array('action' => 'misc_setting') , admin_url('admin.php?page=ww_loan_calculator_page'))); ?>" class="nav-tab<?php if ($delete_Screen) echo ' nav-tab-active'; ?>"><?php esc_html_e('Misc Settings','loan-calculator-wp'  ); ?></a> 
    </h2>
    <!-- END : Loan Calculator Setting Tab -->

        <!-- START : Loan Calculator Form -->
    <form name="loan_calculator_form" action="options.php" method="POST" >
        <?php
        settings_fields( 'ww_loan_calculaor_option' );
        do_settings_sections( 'ww_loan_calculaor_option' );
        ?>  
        <table class="form-table sa-manage-level-product-box" id="calculation_fee" style="display: <?php echo ($general_settings_Screen) ? esc_html( 'table' ): esc_html( 'none' ); ?>"> 
            <tbody>
                <?php
                $calculation_fee_display="style=display:none;";
                if($calculation_fee_setting_enable == 1){
                    $calculation_fee_display="";
                }
                $print_option_display_heading="style=display:none;";
                    if($print_option_enable == 1){
                    $print_option_display_heading="";
                }
                ?>      
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'General Settings', 'loan-calculator-wp' ); ?>  </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Configure calculator general settings.','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculation_fee_setting_enable_lbl"><strong><?php esc_html_e( 'Shortcode', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <code><?php esc_html_e('[loan_calculator]', 'loan-calculator-wp'); ?></code><br />
                        <?php esc_html_e( 'Copy this shortcode and add in any post or page', 'loan-calculator-wp' ); ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculator_heading"><strong><?php esc_html_e( 'Calculator Heading Title', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[calculator_heading]' id='calculator_heading' maxlength="300" value='<?php esc_attr_e( $calculator_heading,'loan-calculator-wp' );?>' class="regular-text" /> <br />
                        <span class="description"><?php esc_html_e( 'Display calculator heading title', 'loan-calculator-wp' ); ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_this_calculator"><strong><?php esc_html_e( 'About This Calculator Label', 'loan-calculator-wp' ); ?></strong></label>                                            
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[about_this_calculator]' id='about_this_calculator' maxlength="100" value='<?php esc_attr_e( $about_this_calculator,'loan-calculator-wp' );?>' class="regular-text" /><br />
                        <span class="description"><?php esc_html_e( 'Display on top right of the calculator', 'loan-calculator-wp' ); ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculator_popup_content"><strong><?php esc_html_e( 'About Calculator Popup Content', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <?php
                        $settings = array(
                            'textarea_name' => 'ww_loan_option[calculator_popup_content]',
                            'textarea_rows' => '10',
                            'tinymce' => true,
                            'media_buttons' => false,
                            'wpautop' => true,
                        );
                        wp_editor( $calculator_popup_content, 'ww_loan_option_calculator_popup_content', $settings );
                        ?><br />
                        <span class="description"><?php esc_html_e( 'Enter the about calculator information which will be displayed on click of About us calculator label', 'loan-calculator-wp' ); ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="print_option_enable"><strong><?php esc_html_e('Enable Print Option', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[print_option_enable]' id='print_option_enable' value='<?php esc_attr_e( '1','loan-calculator-wp' );?>' <?php echo ( $print_option_enable == 1) ? esc_html( "checked" ) : ""; ?> class="regular-text">
                        <label for="print_option_enable"><?php esc_html_e('Enable Print Option', 'loan-calculator-wp'); ?></label>
                        <br />
                        <?php esc_html_e( 'Check this box to enable print option. It will be visible on top right of the calculator', 'loan-calculator-wp' ); ?>
                    </td>
                </tr>
                <tr class='print-option-heading' <?php esc_attr_e( $print_option_display_heading,'loan-calculator-wp' );?>>
                    <th scope="row">
                        <label for="print_option_heading"><strong><?php esc_html_e( 'Print Option Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[print_option_heading]' id='print_option_heading' value='<?php esc_attr_e ($print_option_heading,'loan-calculator-wp' );?>' class="regular-text"> 
                    </td>
                </tr>                                    
            </tbody>
        </table>

        <table class="form-table sa-manage-level-product-box" id="color" style="display: <?php echo ( $display_settings_Screen ) ? esc_html( 'table' ): esc_html( 'none' ); ?>"> 
            <tbody>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Display Color Settings', 'loan-calculator-wp' ); ?></h2>
                            <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Customize the calculator look. Change the background color, hover color, border color etc...','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr id="backbround-color-section" >
                    <th scope="row">
                        <label for="back_ground_color"><strong><?php esc_html_e( 'Background Color', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='color' name='ww_loan_option[back_ground_color]' id='back_ground_color' value='<?php esc_attr_e( $back_ground_color,'loan-calculator-wp' );?>' class="regular-text">
                    </td>
                </tr>
                <tr id="selected-color" >
                    <th scope="row">
                        <label for="selected_color"><strong><?php esc_html_e( 'Selected Color', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='color' name='ww_loan_option[selected_color]' id='selected_color' value='<?php esc_attr_e( $selected_color, 'loan-calculator-wp' );?>' class="regular-text">
                    </td>
                </tr>
                <tr id="background-light-sec" >
                    <th scope="row">
                        <label for="background_light_color"><strong><?php esc_html_e( 'Background Light Color', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='color' name='ww_loan_option[background_light_color]' id='background_light_color' value='<?php esc_attr_e( $background_light_color,'loan-calculator-wp' );?>' class="regular-text">
                    </td>
                </tr>
                <tr id="border-color" >
                    <th scope="row">
                        <label for="border_color"><strong><?php esc_html_e( 'Border Color', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='color' name='ww_loan_option[border_color]' id='border_color' value='<?php esc_attr_e( $border_color,'loan-calculator-wp' );?>' class="regular-text">
                    </td>
                </tr>
            </tbody>
        </table>
                
        <table class="form-table sa-manage-level-product-box" id="amount" style="display: <?php echo ($default_value_Screen) ? esc_html( 'table' ): esc_html( 'none' ); ?>"> 
            <tbody>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e('Default Value for Amount Text Field', 'loan-calculator-wp'); ?></h2>
                            <div class="heading-tooltip-section">
                            <?php esc_html_e('Set the default value for all amount text fields','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr id="loan-amount" >
                    <th scope="row">
                        <label for="loan_amount"><strong><?php esc_html_e('Loan Amount ', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[loan_amount]' id='loan_amount' min="1000" max="1000000" value='<?php esc_attr_e($loan_amount,'loan-calculator-wp' );?>' class="regular-text">
                    </td>
                </tr>
                <tr id="loan-amount-min" >
                    <th scope="row">
                        <label for="loan_amount_min_value"><strong><?php esc_html_e('Loan Amount Min Value', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[loan_amount_min_value]' id='loan_amount_min_value' min="1000" max="1000000"   value='<?php esc_attr_e( $loan_amount_min_value,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr id="loan-amount-max" >
                    <th scope="row">
                        <label for="loan-amount-max_lbl"><strong><?php esc_html_e( 'Loan Amount Max Value', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[loan_amount_max_value]' id='loan_amount_max_value' maxlength="10"  value='<?php esc_attr_e( $loan_amount_max_value,'loan-calculator-wp' );?>' class="regular-text" min="1000" max="1000000" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="loan_amount_tooltip"><strong><?php esc_html_e( 'Loan Amount Tooltip', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <textarea name="ww_loan_option[loan_amount_tooltip]" id="loan_amount_tooltip" rows="4" cols="50"><?php esc_attr_e( $loan_amount_tooltip,'loan-calculator-wp' );?></textarea>
                        
                    </td>
                </tr>
                <tr id="loan-term" >
                    <th scope="row">
                        <label for="loan_term"><strong><?php esc_html_e( 'Loan Term', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <!--  <input type='number' name='ww_loan_option[loan_term]' id='loan_term' min="1" max="999" value='<?php echo $loan_term; ?>' class="regular-text">-->
                        <select name="ww_loan_option[loan_term]" id="loan_term" class="regular-text" >
                            <option value="<?php esc_attr_e('12','loan-calculator-wp');?>" <?php echo ( $loan_term == "12") ?  esc_html( "selected" ) : ""; ?>><?php esc_html_e('12','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('24','loan-calculator-wp');?>" <?php echo ($loan_term == "24") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('24','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('36','loan-calculator-wp');?>" <?php echo ($loan_term == "36") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('36','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('48','loan-calculator-wp');?>" <?php echo ($loan_term == "48") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('48','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('60','loan-calculator-wp');?>" <?php echo ($loan_term == "60") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('60','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('72','loan-calculator-wp');?>" <?php echo ($loan_term == "72") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('72','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('84','loan-calculator-wp');?>" <?php echo ($loan_term == "84") ? esc_html( "selected" ) : ""; ?>><?php esc_html_e('84','loan-calculator-wp');?></option>
                        </select>
                    </td>
                </tr>
                <tr id="loan-term-min" >
                    <th scope="row">
                        <label for="loan_term_min_value"><strong><?php esc_html_e('Loan Term Min Value', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <select name="ww_loan_option[loan_term_min_value]" id="loan_term_min_value" class="regular-text" >
                            <option value="<?php esc_attr_e('12','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "12") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('12','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('24','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "24") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('24','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('36','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "36") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('36','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('48','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "48") ?esc_html( "selected" )  : ""; ?>><?php esc_html_e('48','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('60','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "60") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('60','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('72','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "72") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('72','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('84','loan-calculator-wp');?>" <?php echo ($loan_term_min_value == "84") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('84','loan-calculator-wp');?></option>
                        </select>
                    </td>
                </tr>
                <tr id="loan-term-max" >
                    <th scope="row">
                        <label for="loan_term_max_value"><strong><?php esc_html_e('Loan Term Max Value', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <select name="ww_loan_option[loan_term_max_value]" id="loan_term_max_value" class="regular-text" >
                            <option value="<?php esc_attr_e('12','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "12") ? esc_html( "selected" )  : "";?>><?php esc_html_e('12','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('24','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "24") ? esc_html( "selected" )   : ""; ?>><?php esc_html_e('24','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('36','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "36") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('36','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('48','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "48") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('48','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('60','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "60") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('60','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('72','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "72") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('72','loan-calculator-wp');?></option>
                            <option value="<?php esc_attr_e('84','loan-calculator-wp');?>" <?php echo ($loan_term_max_value == "84") ? esc_html( "selected" )  : ""; ?>><?php esc_html_e('84','loan-calculator-wp');?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="loan_terms_tooltip"><strong><?php esc_html_e( 'Loan Terms Tooltip', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <textarea name="ww_loan_option[loan_terms_tooltip]" id="loan_terms_tooltip" rows="4" cols="50"><?php esc_attr_e( $loan_terms_tooltip,'loan-calculator-wp' ); ?></textarea>
                        
                    </td>
                </tr>
                <tr id="ballon_amt_per" >
                    <th scope="row">
                        <label for="ballon_per"><strong><?php esc_html_e( 'Ballon Percentage', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[ballon_per]' id='ballon_per'  min="<?php esc_attr_e( '1' ,'loan-calculator-wp' ); ?>" max="<?php esc_attr_e( '100' ,'loan-calculator-wp' ); ?>" value='<?php esc_attr_e( $ballon_per,'loan-calculator-wp' ); ?>' class="regular-text">
                    </td>
                </tr>
                <tr id="interested-rate" >
                    <th scope="row">
                        <label for="interested_rate"><strong><?php esc_html_e( 'Interested Rate', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[interested_rate]' id='interested_rate'min="<?php esc_attr_e( '1' ,'loan-calculator-wp' ); ?>" max="<?php esc_attr_e( '100' ,'loan-calculator-wp' ); ?>"  value='<?php esc_attr_e($interested_rate,'loan-calculator-wp'); ?>' class="regular-text" step="0.1">
                    </td>
                </tr> 
                <tr id="interest_rate_min_value" >
                    <th scope="row">
                        <label for="interest-rate-min_lbl"><strong><?php esc_html_e('Interest Rate Min Value', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[interest_rate_min_value]' id='interest_rate_min_value' maxlength="7"  value='<?php esc_attr_e(
                        $interest_rate_min_value,'loan-calculator-wp' ); ?>' class="regular-text" step="0.1"> 
                    </td>
                </tr>
                <tr id="interest-rate-max" >
                    <th scope="row">
                        <label for="interest_rate_max_value"><strong><?php esc_html_e( 'Interest Rate Max Value', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[interest_rate_max_value]' id='interest_rate_max_value' maxlength="7"  value='<?php esc_attr_e( $interest_rate_max_value,'loan-calculator-wp' ); ?>' class="regular-text" step="0.1"> 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="interest_rates_tooltip"><strong><?php esc_html_e( 'Interest Rates Tooltip', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <textarea name="ww_loan_option[interest_rates_tooltip]" id="interest_rates_tooltip" rows="4" cols="50"><?php esc_attr_e( $interest_rates_tooltip,'loan-calculator-wp' ); ?></textarea>
                    </td>
                </tr>
                <tr id="application-fee" >
                    <th scope="row">
                        <label for="application_fee"><strong><?php esc_html_e( 'Application Fee', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[application_fee]' id='application_fee'  min="1" max="50000" value='<?php esc_attr_e( $application_fee,'loan-calculator-wp' ); ?>' class="regular-text">
                    </td>
                </tr>
                <tr id="monthly-rate" >
                    <th scope="row">
                        <label for="monthly_rate"><strong><?php esc_html_e( 'Monthly Rate', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='number' name='ww_loan_option[monthly_rate]' id='monthly_rate'  min="1" max="50000" value='<?php esc_attr_e( $monthly_rate,'loan-calculator-wp' ); ?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Default Text for Calculation Result', 'loan-calculator-wp' ); ?></h2> 
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Set the calculation results labels','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="regular_repayment_heading"><strong><?php esc_html_e( 'Regular Repayment Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[regular_repayment_heading]' id='regular_repayment_heading' maxlength="200" value='<?php esc_attr_e( $regular_repayment_heading,'loan-calculator-wp' ); ?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="total_interests_payable_heading"><strong><?php esc_html_e( 'Total Interest Payable Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[total_interests_payable_heading]' id='total_interests_payable_heading' maxlength="200" value='<?php esc_attr_e( $total_interests_payable_heading,'loan-calculator-wp' ); ?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="ballon_amt_heading"><strong><?php esc_html_e( 'Balloon Amount Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[ballon_amt_heading]' id='ballon_amt_heading' maxlength="200" value='<?php esc_attr_e( $ballon_amt_heading,'loan-calculator-wp' ); ?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Fee Calculation Settings ', 'loan-calculator-wp' ); ?>  </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Show application fees, monthly fees, total regular fees and total fees. Customize each fees label.','loan-calculator-wp'  ); ?>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculation_fee_setting_enable_lbl"><strong><?php esc_html_e( 'Enable Fee Calculation', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[calculation_fee_setting_enable]' id='calculation_fee_setting_enable' value='1' <?php echo ($calculation_fee_setting_enable == 1) ?  esc_html( 'checked' ): ""; ?> class="regular-text" >
                        <label for="calculation_fee_setting_enable"><?php esc_html_e( 'Enable Fee Calculation', 'loan-calculator-wp' ); ?></label><br /><?php esc_html_e( 'Display Application fees, monthly fees, total regular fees and total fees below calculator result', 'loan-calculator-wp' ); ?>
                    </td>
                </tr>
                <tr id="application_fee_heading_lbl" <?php esc_attr_e( $calculation_fee_display,'loan-calculator-wp' ); ?> class='calculation-fee-display-section'>
                    <th scope="row">
                        <label for="application_fee_heading"><strong><?php esc_html_e( 'Application Fee Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[application_fee_heading]' id='application_fee_heading' value='<?php esc_attr_e( $application_fee_heading,'loan-calculator-wp' ); ?>' maxlength="50" class="regular-text">
                    </td>
                </tr>
                <tr id="common-heading" <?php esc_attr_e( $calculation_fee_display,'loan-calculator-wp' ); ?> class='calculation-fee-display-section'>
                    <th scope="row">
                        <label for="monthly_fee_heading"><strong><?php esc_html_e( 'Monthly Fee Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[monthly_fee_heading]' id='monthly_fee_heading' value='<?php esc_attr_e( $monthly_fee_heading,'loan-calculator-wp' ); ?>' maxlength="50" class="regular-text">
                    </td>
                </tr>
                <tr id="common-heading" <?php esc_attr_e( $calculation_fee_display,'loan-calculator-wp' ); ?> class='calculation-fee-display-section'>
                    <th scope="row">
                        <label for="total_regular_fees"><strong><?php esc_html_e('Total Regular Fees Label', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[total_regular_fees]' id='total_regular_fees' value='<?php esc_attr_e( $total_regular_fees,'loan-calculator-wp' ); ?>' maxlength="50" class="regular-text">
                    </td>
                </tr>
                <tr id="common-heading" <?php esc_attr_e( $calculation_fee_display,'loan-calculator-wp' ); ?> class='calculation-fee-display-section'>
                    <th scope="row">
                        <label for="total_fees"><strong><?php esc_html_e( 'Total Fees Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[total_fees]' id='total_fees' value='<?php esc_attr_e( $total_fees,'loan-calculator-wp' ); ?>' maxlength="50" class="regular-text">                    
                    </td>
                </tr>
            </tbody>
        </table>
                
        <table class="form-table sa-manage-level-product-box" id="tab" style="display: <?php echo ($tab_setting_Screen) ? esc_html( 'table' ) : esc_html( 'none' ); ?>"> 
            <tbody>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Tab Settings Field', 'loan-calculator-wp' ); ?> </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Enable individual tab based on your need','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="enable_repayment_chart"><strong><?php esc_html_e( 'Enable Repayment Chart Tab', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[enable_repayment_chart]' id='enable_repayment_chart' value='1' <?php echo ($enable_repayment_chart == 1) ? esc_html( 'checked' ) : ""; ?> class="regular-text"  > &nbsp;<label for="enable_repayment_chart"><?php esc_html_e( 'Enable Repayment Chart Tab', 'loan-calculator-wp' ); ?></label>
                    </td>
                </tr>
                <?php
                    $enable_repayment_chart_display = ($enable_repayment_chart ==1)?'':"style=display:none";
                    $enable_video_tab_display = ($enable_video_tab ==1)?'':"style=display:none";
                    $enable_loan_mortisation_tab_display = ($enable_loan_mortisation_tab ==1)?'':"style=display:none";
                ?>
                <tr class="repayment_chart_heading_lbl" <?php echo esc_attr($enable_repayment_chart_display);?> >
                    <th scope="row" class="enable_repayment_lbl">
                        <label for="repayment_chart_heading"><strong><?php esc_html_e('Repayment Chart Tooltip', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300" >
                        <input type='text' name='ww_loan_option[repayment_chart_heading]' id='repayment_chart_heading' maxlength="60" value='<?php esc_attr_e( $repayment_chart_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>                    
                <tr >
                    <th scope="row">
                        <label for="enable_loan_mortisation_tab"><strong><?php esc_html_e( 'Enable Loan Mortisation Tab', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[enable_loan_mortisation_tab]' id='enable_loan_mortisation_tab' value='1' <?php echo ($enable_loan_mortisation_tab == 1) ? esc_html( 'checked' ) : ""; ?> class="regular-text" onclick="return hideshow_loan_table_field();"> &nbsp;<label for="enable_loan_mortisation_tab"><?php esc_html_e( 'Enable Loan Mortisation Tab', 'loan-calculator-wp' ); ?></label>
                    </td>
                </tr>
                <tr class="loan_table_heading_lbl" <?php esc_attr_e( $enable_loan_mortisation_tab_display,'loan-calculator-wp' );?>>
                    <th scope="row">
                        <label for="loan_table_heading"><strong><?php esc_html_e( 'Loan Amortisation Table Tooltip', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[loan_table_heading]' id='loan_table_heading' maxlength="60" value='<?php esc_attr_e( $loan_table_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="enable_video_tab"><strong><?php esc_html_e( 'Enable Video Tab', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[enable_video_tab]' id='enable_video_tab' value='1' <?php echo ($enable_video_tab == 1) ? esc_html( 'checked' ) : ""; ?> class="regular-text" >&nbsp; <label for="enable_video_tab"><?php esc_html_e('Enable Video Tab', 'loan-calculator-wp'); ?></label>
                    </td>
                </tr>
                <tr class="video_heading_lbl" <?php echo esc_attr( $enable_video_tab_display);?>>
                    <th scope="row">
                        <label for="video_heading"><strong><?php esc_html_e( 'Video Tab Tooltip', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[video_heading]' id='video_heading' maxlength="60" value='<?php esc_attr_e( $video_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr class="video_heading_lbl" <?php esc_attr_e($enable_video_tab_display,'loan-calculator-wp');?>>
                    <th scope="row">
                        <label for="youtube_video_link"><strong><?php esc_html_e( 'Youtube Video Link', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[youtube_video_link]' id='youtube_video_link' maxlength="200" value='<?php esc_attr_e( $youtube_video_link,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>                
            </tbody>
        </table>
        
        <table class="form-table sa-manage-level-product-box" id="calculator_disclaimer" style="display: <?php echo ($calculator_disclaimer_Screen) ? esc_html( 'table' ) : esc_html( 'none' ); ?>"> 
            <tbody>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Contact Us Settings - Setup Contact Form', 'loan-calculator-wp' ); ?> </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e('Contact form setting.','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>                
                <tr>
                    <th scope="row">
                        <label for="contact_info_heading"><strong><?php esc_html_e( 'Contact Info Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[contact_info_heading]' id='contact_info_heading' maxlength="150" value='<?php esc_attr_e( $contact_info_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_popup_button_heading"><strong><?php esc_html_e( 'Contact Popup Button Label', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[contact_popup_button_heading]' id='contact_popup_button_heading' maxlength="200" value='<?php esc_attr_e( $contact_popup_button_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_popup_content"><strong><?php esc_html_e('Contact Form Content', 'loan-calculator-wp'); ?></strong></label>
                    </th>
                    <td width="300">
                        <textarea name="ww_loan_option[contact_popup_content]" id="contact_popup_content" rows="4" cols="50"><?php esc_attr_e( $contact_popup_content,'loan-calculator-wp' );?></textarea><br />
                        <?php esc_html_e( 'Here you can enter any contact form shortcode. If you are using contact form 7, then enter contact form 7 shotcode', 'loan-calculator-wp' ); ?>
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Calculator Disclaimer Settings ', 'loan-calculator-wp' ); ?> </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Show disclaimer notice at the end of calculator.','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculator_disclaimer_heading"><strong><?php esc_html_e( 'Calculator Disclaimer', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='text' name='ww_loan_option[calculator_disclaimer_heading]' id='calculator_disclaimer_heading' maxlength="50" value='<?php esc_attr_e( $calculator_disclaimer_heading,'loan-calculator-wp' );?>' class="regular-text" > 
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="calculator_disclaimer_description"><strong><?php esc_html_e( 'Calculator Disclaimer Description', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <?php
                        $settings = array(
                            'textarea_name' => 'ww_loan_option[calculator_disclaimer_description]',
                            'textarea_rows' => '10',
                            'tinymce' => true,
                            'media_buttons' => false,
                            'wpautop' => true,
                        );
                        wp_editor( $calculator_disclaimer_description, 'calculator_disclaimer_description', $settings );
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
            
        <table class="form-table sa-manage-level-product-box" id="delete_settings" style="display: <?php echo ( $delete_Screen ) ? esc_html( 'table' ) : esc_html( 'none' ); ?>"> 
            <tbody>
                <tr>
                    <td colspan="2"><h2><?php esc_html_e( 'Plugin Misc Settings.', 'loan-calculator-wp' ); ?> </h2>
                        <div class="heading-tooltip-section">
                            <?php esc_html_e( 'Misc Settings','loan-calculator-wp'  ); ?>
                        </div>
                    </td>
                </tr>
                    <tr>
                    <th scope="row">
                        <label for="delete_setting_enable_lbl"><strong><?php esc_html_e( 'Delete Data On Uninstall', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[delete_data_enable]' id='delete_setting' value='1' <?php echo ( $delete_data_enable == 1 ) ? esc_html( 'checked' ) : ""; ?> class="regular-text" > &nbsp;&nbsp;<label for="delete_setting"><?php esc_html_e( 'Check this box if you want to delete all settings data on plugin uninstall', 'loan-calculator-wp' ); ?></label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="delete_setting_enable_lbl"><strong><?php esc_html_e( 'Disable Font Awesome CSS', 'loan-calculator-wp' ); ?></strong></label>
                    </th>
                    <td width="300">
                        <input type='checkbox' name='ww_loan_option[disable_font_awesome]' id='disable_font_awesome' value='1' <?php echo ( $disable_font_awesome == 1 ) ? esc_html( 'checked' ) : ""; ?> class="regular-text" > &nbsp;&nbsp;<label for="disable_font_awesome"><?php esc_html_e( 'Check this box if you want to disable font awesome css on plugin install', 'loan-calculator-wp' ); ?></label>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="form-table sa-manage-level-product-box" id="save_setting"> 
            <tbody>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="button button-primary loan-submit-btn" name="loan_calculator_setting" value="Save Changes" id="loan_calculator_setting" onclick="return check_selected_type();">
                    </td>
                </tr>
            </tbody>
        </table>
    </form><!-- END : Loan Calculator Form -->
</div><!-- .end of wrap -->

