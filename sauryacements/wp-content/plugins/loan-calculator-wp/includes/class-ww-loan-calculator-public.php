<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Pulic Class
 * 
 * Handles Loan Calculator
 *
 * @package Loan Calculator
 * @since 1.0.0
 */
class WW_Loan_Calculator_Public {

	public function __construct() {

	}

	/**
	 * Loan Calculator Shortcode 
	 *
	 * Handle to Loan Calculator Shortcode 
	 * 
	 * @package Loan Calculator
	 * @since 1.0.0
	 */
	public function ww_loan_calculator_shortcode_fn( $att, $content ) {

		// Fetch Loan Calculator setting data from option table and pass in script.
		$loan_all_setting_data = get_option( "ww_loan_option" );

		$loan_amount_min_value = isset( $loan_all_setting_data['loan_amount_min_value'] ) ? $loan_all_setting_data['loan_amount_min_value'] : "";

		$loan_amount_max_value = isset( $loan_all_setting_data['loan_amount_max_value'] ) ? $loan_all_setting_data['loan_amount_max_value'] : "";

		$loan_term_min_value = isset( $loan_all_setting_data['loan_term_min_value'] ) ? $loan_all_setting_data['loan_term_min_value'] : "";

		$loan_term_max_value = isset( $loan_all_setting_data['loan_term_max_value'] ) ? $loan_all_setting_data['loan_term_max_value'] : "";

		$monthly_rate = isset( $loan_all_setting_data['monthly_rate'] ) ? $loan_all_setting_data['monthly_rate'] : "";

		$application_fee = isset( $loan_all_setting_data['application_fee'] )? $loan_all_setting_data['application_fee'] : "";

		$back_ground_color = isset( $loan_all_setting_data['back_ground_color'] ) ? $loan_all_setting_data['back_ground_color'] : "";

		$interest_rate_min_value = isset( $loan_all_setting_data['interest_rate_min_value'] ) ? $loan_all_setting_data['interest_rate_min_value'] : "";

		$interest_rate_max_value = isset( $loan_all_setting_data['interest_rate_max_value'] ) ? $loan_all_setting_data['interest_rate_max_value'] : "";

		$calculation_fee_setting_enable = isset( $loan_all_setting_data['calculation_fee_setting_enable'] ) ? $loan_all_setting_data['calculation_fee_setting_enable'] : "";

		// If repayment chat is enabled then only enqueue chart js
		if( isset( $loan_all_setting_data['enable_repayment_chart'] ) && $loan_all_setting_data['enable_repayment_chart'] == 1 ) {

			// Chart JS
			wp_enqueue_script( 'loan-calculator-chart-js' );			

		}
		$disable_font_awesome = isset( $loan_all_setting_data['disable_font_awesome'] ) ? $loan_all_setting_data['disable_font_awesome'] : "";

		// If Disable font awesome is disable then only enqueue font awesome CSS
		if(empty($disable_font_awesome) && $disable_font_awesome ==""){
			// Font Awesome
			wp_enqueue_style('loan-calculator-font-awesome-script');
		}

		// Custom CSS
		wp_enqueue_style( 'loan-calculator-frontend-style' );

		// Setting data is passed in js file using Localize 
		$setting_data = array(
			'loan_amount_min_value' =>  $loan_amount_min_value,
			'loan_amount_max_value'   => $loan_amount_max_value,
			'loan_term_min_value'      => $loan_term_min_value,
			'loan_term_max_value' => $loan_term_max_value,
			'monthly_rate' => $monthly_rate,
			'application_fee' => $application_fee,
			'back_ground_color' => $back_ground_color,
			'interest_rate_min_value'=> $interest_rate_min_value,
			'interest_rate_max_value' => $interest_rate_max_value,
			'calculation_fee_setting_enable'=> $calculation_fee_setting_enable
		);

		wp_localize_script( 'loan-calculator-frontend-script', 'setting_data', $setting_data );
		wp_enqueue_script( 'loan-calculator-frontend-script' );

		ob_start();
		include_once( WW_LOAN_CALCULATOR_ADMIN . '/forms/ww-loan-calculator-loan-process-form.php');
		$html = ob_get_clean();

		return $html;
	}

	/**
	 * Adding Hooks
	 *
	 * @package Loan Calculator
	 * @since 1.0.0
	 */
	function add_hooks() {

		// Add Calculator Shortcode
		add_shortcode( 'loan_calculator',array( $this, 'ww_loan_calculator_shortcode_fn' ) );
	}
}