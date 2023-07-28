<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)){
            if (view()->exists('errors.' . $exception->getStatusCode())) {
                $errors = $exception->getMessage();
                return response()->view('errors.' . $exception->getStatusCode(), compact('errors'), $exception->getStatusCode());
            }
        }
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if($request->expectsJson())
        {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $guard = Arr::get($exception->guards(), 0);

        switch($guard)
        {
            case 'razen_politik':
                $login = 'razen-politik.login';
                break;
            case 'pengguna':
                $login = 'pengguna.login';
                break;
            default:
                $login = 'razen-politik.login';
                break;
        }

        return redirect()->guest(route($login));
    }
}
