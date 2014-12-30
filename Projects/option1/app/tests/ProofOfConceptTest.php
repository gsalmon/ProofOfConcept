<?php
class ProofOfConceptTest extends TestCase
{
/*
 * @test
 */
    public function testPagesControllerDisplayCheckout()
    {
        //Testing the checkout page...
        $this->get('checkout');

        //Is it getting our project name?
        $this->assertViewHas('projectName');
    }

    public function testStripePaymentRepositoryCharge()
    {
        $testArray = [
            'stripeEmail' => 'test@test.com',
            'stripeToken' => 'testtoken',
            'stripeTokenType' => 'test',
            'amount' => '100'
        ];
        $testObject = App::make('StripePaymentRepository');

        //Test to make sure we get a payment object back from making a charge
        $this->assertInstanceOf('Payment',$testObject->charge($testArray));
    }
}