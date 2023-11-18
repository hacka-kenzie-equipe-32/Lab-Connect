<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    
    public function render($request, Throwable $error) {

        if($error instanceof ValidationException){
            return response()->json([
                'errors' => $error->validator->errors()
            ], 422);
        }

        if($error instanceof AppError) {
            return response()->json([
                'errors' => $error->getMessage()
            ], $error->getCode());
        }

        if($error instanceof AuthorizationException) {
            return response()->json([
                'errors' => 'User not authorized'
            ], 403);
        }

        if($error instanceof NotFoundHttpException) {
            return response()->json([
                'errors' => 'Route not found'
            ], 404);
        }

        if($error instanceof ModelNotFoundException) {
            $model = $error->getModel();
            $modelName = class_basename($model);

            $primaryKey = $error->getIds();

            $message = "No $modelName equal to '$primaryKey' was found.";

            return response()->json([
                'errors' => 'Route not found'
            ], 404);
        }

        
        // Log::error('Internal', [$error]);

        return response()->json([
            'message'=> 'An internal error occurred on the server'
        ], 500);
    }
}
