<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{

    public function rootView(Request $request): string
    {
        if( str_contains($request->route()->getPrefix(), config('project.app_admin_name')) ) {
            return "admin";
        }

        if( str_contains($request->route()->getPrefix(), config('project.app_client_name')) ) {
            return "client";
        }

        return "public";
    }

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            //
        ];
    }
}
