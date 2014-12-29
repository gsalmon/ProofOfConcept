<?PHP
/*
 * Eloquent specific item repository
 */
class EloquentItemRepository implements ItemRepository {

    public function all()
    {
        return Item::all();
    }

    public function find($id)
    {
        return Item::find($id);
    }

}