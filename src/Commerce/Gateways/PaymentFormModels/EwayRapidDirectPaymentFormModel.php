<?php

namespace Commerce\Gateways\PaymentFormModels;

/**
 * Eway Rapid direct payment form model.
 *
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   Commerce\Gateways\PaymentFormModels
 * @since     1.1
 */
class EwayRapidDirectPaymentFormModel extends CreditCardPaymentFormModel
{
	public $encryptedCardNumber;
	public $encryptedCardCvv;

	public function populateModelFromPost($post)
	{
		parent::populateModelFromPost($post);
		if (isset($post['encryptedCardNumber']))
		{
			$this->encryptedCardNumber = $post['encryptedCardNumber'];
		}
		if (isset($post['encryptedCardCvv']))
		{
			$this->encryptedCardCvv = $post['encryptedCardCvv'];
		}
	}

}