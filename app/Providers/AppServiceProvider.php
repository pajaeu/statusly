<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

		VerifyEmail::toMailUsing(function (User $user, string $url) {
			return (new MailMessage)
				->subject('Confirm your email address')
				->view('mail.verify', [
					'title' => 'Confirm your email address',
					'user' => $user,
					'url' => $url
				]);
		});

		ResetPassword::toMailUsing(function (User $user, string $token) {
			return (new MailMessage)
				->subject('Reset your password')
				->view('mail.reset-password', [
					'title' => 'Reset your password',
					'user' => $user,
					'url' => url(route('password.reset', [
						'token' => $token,
						'email' => $user->getEmailForPasswordReset(),
					], false)),
				]);
		});
    }
}
