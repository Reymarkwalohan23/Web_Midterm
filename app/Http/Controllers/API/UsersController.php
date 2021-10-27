<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Applicationform;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $applicationform = Applicationform::all();

        if (count($applicationform) > 0) {
            return response()->json($applicationform, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no applicationform in the database'], 404);
        }
    }
}
?>