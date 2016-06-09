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
     * TODO: needs to be tested with PHPUNIT.
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

    /**
     * Revoke a key from the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function revokeKey()
    {
        return redirect()->back(302);
    }

    /**
     * Get the apikey
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getKey()
    {
        // TODO: Needs phpunit testing.
        // TODO: Mailing logic needs to be implemented.
        // TODO: Set flash session to the view.

        $id = auth()->user()->id;
        $this->apiKey->find($id);

        return redirect()->back(302);
    }

    /**
     * Delete a api key out off the system.
     *
     * @param int $id the database id off the api key.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteKey($id)
    {
        // TODO: needs phpunit.
        // TODO: set flash message to the view.
        $this->apiKey->destroy($id);
        session()->flash('message', 'The api key is deleted.');

        return redirect()->back(302);
    }

}
