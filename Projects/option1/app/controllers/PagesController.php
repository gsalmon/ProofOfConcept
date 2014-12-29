<?PHP

class PagesController extends BaseController{

    protected  $project_name;
    protected $layout = 'layouts.master';

    public function __construct()
    {
        $this->project_name = Config::get('app.project_name');
    }

	public function home(){
		return View::make('hello')->with('projectName', $this->project_name);
	}

    /**
     * @param bool $dataIn
     *
     * Used to display the checkout view.  If dataIn is an array it is merged to the existing data array
     *
     * @return mixed
     */
    public function display_checkout($dataIn = false){
        $this->layout->title = 'Checkout';
        $data = array(
            'projectName' => $this->project_name,
            'items' => User::find(Auth::id())->items,
            'totalPrice' => Auth::user()->items->sum('price')
        );

        if($dataIn && is_array($dataIn)) {
            $data = array_merge($data,$dataIn);
        }
        return View::make('checkout',$data);
    }

    /**
     * Called after response from stripe payment gateway.
     * Creates a new stripe payment repository and adds a charge (transaction) entry to the database.
     * Finally, displays the 'complete' view.
     *
     * @return mixed
     */
    public function process_checkout()
    {
        if (Input::get('stripeToken')) {
            $amount = Auth::user()->items->sum('price');
            $stripePayment = App::make('StripePaymentRepository');
            $stripePayment->charge([
                'stripeEmail' => Input::get('stripeEmail'),
                'stripeToken' => Input::get('stripeToken'),
                'stripeTokenType' => Input::get('stripeTokenType'),
                'amount' => $amount
            ]);
            $data = array(
                'projectName' => $this->project_name,
                'totalPrice' => $amount

            );
            return View::make('complete', $data);
        } else {
            return View::make('unknownerror');
        }
    }
}