<?

namespace App\Http\Controllers;

class UserController extends Controller
{
	public function show()
	{
		return view('user.show', ['name' => 'ilnur' , 'surname' => 'salachov']);
	}

	public function all()
	{
		return view('user', ['name' => 'ilnur' , 'surname' => 'salachov']);
	}
}