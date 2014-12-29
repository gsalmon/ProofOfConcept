<?PHP namespace App\Providers;
/*
 * Service provider to bind repositories
 * If you wish to change ORMs you must create new ORM specific repositories and bind them here
 */

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('repositories\ItemRepository','repositories\EloquentItemRepository');
    }

}