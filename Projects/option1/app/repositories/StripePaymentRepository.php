<?PHP
/*
 * Stripe-specific payment repository
 */


class StripePaymentRepository implements PaymentRepository {

    public function all()
    {
        return Payment::all();
    }

    public function find($id)
    {
        return Payment::find($id);
    }

    /*
     * @param bool $data
     *
     * Creates a new payment entry using data in $data array, returns the new entry.
     *
     * @return mixed
     */
    public function charge(array $data)
    {
        return Payment::create([
                'amount' =>  $data['amount'],
                'user_id' =>  Auth::user()->id,
                'token' => $data['stripeToken'],
                'token_type' => $data['stripeTokenType'],
                'email' => $data['stripeEmail']
            ]);
    }
}