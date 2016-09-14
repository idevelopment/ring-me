<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Update the profile information.
     *
     * @param  Requests\ProfileValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Requests\ProfileValidator $input)
    {
        // User information
        User::find(auth()->user()->id)->update($input->except(['_token', 'avatar']));

        // User image information.
        if (Input::file()) {
            $image    = Input::file('avatar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path     = public_path('avatars/' . $filename);
            
            //Image::make($image->getRealPath())->resize(80, 80)->save($path);
            $image->move(public_path('avatars'), $filename);

            $avatar         = User::find(auth()->user()->id);
            $avatar->avatar = $filename;
            $avatar->save();
        }

        session()->flash('message', 'Your profile information has been updated.');
        return redirect()->back(302);
    }

    /**
     * Update your password.
     *
     * @param  Requests\PasswordValidation $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSecurity(Requests\PasswordValidation $input)
    {
        $data['password'] = bcrypt($input->password);

        User::find(auth()->user()->id)->update($data);
        session()->flash('message', 'Your password has been updated.');

        return redirect()->back(302);
    }
}
