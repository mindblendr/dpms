<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{

    public function verify(Request $request)
    {
        $user = User::findOrFail($request->id);
    
        if ($user->email_verified_at) {
            return '';
        }
        
        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException();
        }
    
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
    
        return redirect(url('/'));
    }

    public function resend(Request $request) {
        $fields = $request->validate([ 'email' => 'required|string']);
        $user = User::where($fields)->first();
        $user->sendEmailVerificationNotification();

        return response([
            'message' => 'Verification link sent!'
        ]);
    }
}
