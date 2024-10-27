<?

namespace App\Http\Controllers;

class PostController extends Controller
{
	public function show()
	{
		return view('post.show', [
			'title' => 'POST',
			'text' => 'page content'
		]);
	}
}