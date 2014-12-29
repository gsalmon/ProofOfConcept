<?PHP

use ItemRepository as Item;

class ItemController extends BaseController{
    protected $data = [];

    public function __construct(ItemRepository $items)
    {
        $this->items = $items;
    }

    public function getIndex()
    {
        $all = $this->items->all();
        return View::make('orders', compact('all'));
    }

    public  function getItems($userId)
    {


    }


}