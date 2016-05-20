<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Chrisbjr\ApiGuard\Models\ApiKey;
use App\Http\Requests;

class ApiKeyController extends Controller
{
    protected $apiKey;

    /**
     * ApiKeyController constructor.
     * @param ApiKey $apiKey
     */
    public function __construct(ApiKey $apiKey)
    {
        $this->middleware('auth');
        $this->middleware('lang');

        $this->apiKey = $apiKey;
    }

    /**
     * Create a new api token.
     *
     * TODO: implement session to the view.
     * TODO: Build api key limit that the user can have max. 5 keys.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function makeKey(Request $request)
    {
        $id         = auth()->user()->id;
        $create     = $this->apiKey->make($id);
        $insertedId = $create->id;

        $serviceInsert          = $this->apiKey->find($insertedId);
        $serviceInsert->service = $request->get('service');
        $serviceInsert->save();

        $token = $this->apiKey->find($insertedId);

        session()->flash('message', 'Token created');
        session()->flash('token', $token->key);
        return redirect()->back(302);
    }

    public function revokeKey()
    {

    }
}
