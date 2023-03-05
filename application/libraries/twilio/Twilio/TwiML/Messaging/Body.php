<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Messaging;

use Twilio\TwiML\TwiML;

class Body extends TwiML {
    /**
     * Body constructor.
     * 
     * @param string $message Message Body
     */
    public function __construct($message) {
        parent::__construct('Body', $message);
    }
}