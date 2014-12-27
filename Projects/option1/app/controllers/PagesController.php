<?PHP

class PagesController extends BaseController{

	public function home(){
		$projectName = "Proof of Concept";
		return View::make('hello')->with('projectName', $projectName);
	}
}