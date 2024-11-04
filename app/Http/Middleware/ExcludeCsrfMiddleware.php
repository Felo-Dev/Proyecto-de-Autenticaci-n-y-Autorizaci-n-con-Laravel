<?php

// app/Http/Kernel.php

namespace App\Http;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ExcludeCsrfMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware($this->registerMiddleware())
    ->withExceptions($this->registerExceptions())
    ->create();

private function registerMiddleware()
{
    return function (Middleware $middleware) {
        // Grupo de middleware para las rutas web
        $middleware->group('web', [
           
        ]);

        // Grupo de middleware para las rutas API
        $middleware->group('api', [
            ExcludeCsrfMiddleware::class,
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ]);
    };
}

/**// app/Http/Middleware/ExcludeCsrfMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExcludeCsrfMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Omitir CSRF en API
        return $next($request);
    }
}
 * Register the exception handling configuration.
 *
 * @param  \Illuminate\Foundation\Configuration\Exceptions  $exceptions
 * @return \Closure
 */
private function registerExceptions()
{
    return function (Exceptions $exceptions) {
        
    };
}