<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
    }
    
    public function handlePayment()
    {
        require_once('application/libraries/stripe-php/init.php');

        \Stripe\Stripe::setApiKey("SECRET KEY GOES HERE");

        try {
            $charge = \Stripe\Charge::create([
                "amount" => "Amount here" * 100,
                "currency" => "usd",
                "source" => $this->input->post('token')
            ]);

            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            // Check whether the charge is successful
            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {

                return ['status' => 1, 'message' => 'Transaction Complete' , 'transaction_id' => $chargeJson['balance_transaction']];
            }
        } catch (\Stripe\Exception\CardException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (\Stripe\Exception\RateLimitException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (\Stripe\Exception\AuthenticationException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (\Stripe\Exception\ApiErrorException $e) {
            return ['status' => 0, 'message' => $e->getError()->message];
        } catch (Exception $e) {
            return ['status' => 0, 'message' => "Payment Failed!Something went wrong"];
        }

        return false;
    }
}