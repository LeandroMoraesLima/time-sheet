<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>
<div class="woocommerce-billing-fields">
	
	<div class="woocommerce-billing-fields__field-wrapper">
		<?php
			$fields = $checkout->get_checkout_fields( 'billing' );

$fields2 = array(
	'billing_first_name' => $fields['billing_first_name'],
	'billing_last_name' => $fields['billing_last_name'],
	'billing_address_1' => $fields['billing_address_1'],
	'billing_address_2' => $fields['billing_address_2'],
	'billing_city' => $fields['billing_city'],
	'billing_state' => $fields['billing_state'],
	'billing_postcode' => $fields['billing_postcode'],
	'billing_phone' => $fields['billing_phone'],
	'billing_email' => $fields['billing_email'],
	'billing_cnpj' => $fields['billing_cnpj'],
	'billing_company' => $fields['billing_company'],
	'billing_country' => $fields['billing_country'],

);

			foreach ( $fields2 as $key => $field ) {
				$field['placeholder'] = $field['label'];
				$field['label'] = '';

				if ( isset( $field['country_field'], $fields[ $field['country_field'] ] ) ) {
					$field['country'] = $checkout->get_value( $field['country_field'] );
				}
				if( $key == 'billing_first_name' ){
					$field['class'][0] = 'form-row-first'; //form-roaw-last //form-row-first //form-row-wide
				}
				if( $key == 'billing_last_name' ){
					$field['class'][0] = 'form-row-last';
				}
				if( $key == 'billing_address_1' ){
					$field['class'][0] = 'form-row-wide'; 
				}
				if( $key == 'billing_address_2' ){
					$field['class'][0] = 'form-row-wide'; 
				}
				if( $key == 'billing_city' ){
					$field['class'][0] = 'form-row-wide'; 
				}
				if( $key == 'billing_state' ){
					$field['class'][0] = 'form-row-wide'; 
				}
				if( $key == 'billing_postcode' ){
					$field['class'][0] = 'form-row-first'; 
				}
				if( $key == 'billing_phone' ){
					$field['class'][0] = 'form-row-last'; 
				}
				if( $key == 'billing_email' ){
					$field['class'][0] = 'form-row-first'; 
				}
				if( $key == 'billing_cnpj' ){
					$field['class'][0] = 'form-row-last';
					$field['placeholder'] = 'CNPJ';
				}
				if( $key == 'billing_company' ){
					$field['class'][0] = 'form-row-wide'; 
				}
				if( $key == 'billing_country' ){
					$field['class'][0] = 'form-row-wide'; 
				}


				woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
			}
		?>
	</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ) ?> type="checkbox" name="createaccount" value="1" /> <span><?php _e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>
