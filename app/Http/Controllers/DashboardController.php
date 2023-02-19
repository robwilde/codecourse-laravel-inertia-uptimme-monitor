<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Site $site)
    {
        return inertia()->render('Dashboard', [
            'site' => $site,
            'sites' => Site::get(),
        ]);
    }
}
