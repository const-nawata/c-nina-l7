<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProcessLang
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
		$locale = session('current_locale', 'en');
		App::setLocale( $locale );
        return $next( $request );
    }
}
