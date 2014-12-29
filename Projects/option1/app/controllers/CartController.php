<?PHP

use ItemRepository as Item;

class CartController extends BaseController{
    protected $data = [];

    public function index(){
       // $this->data['items'] = Items::find()
    }

    /**
     * Return a list of all items for a particular userID
     *
     * @return ItemArray
     */
    public  function getItems($userId)
    {
        return Item::find($userId)->items;

    }
}