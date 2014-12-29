<?PHP
/*
 * Eloquent-specific payment repository
 */
class EloquentPaymentRepository implements PaymentRepository {

    public function all()
    {
        return Item::all();
    }

    public function find($id)
    {
        return Item::find($id);
    }

}