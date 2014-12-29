<?PHP
/*
 * Interface to abstract payment functionality
 */

interface PaymentRepository {

    public function all();

    public function find($id);

    public function charge(array $data);

}