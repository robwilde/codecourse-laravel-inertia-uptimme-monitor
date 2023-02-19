<?php

namespace App\Observers;

use App\Models\Site;
use Illuminate\Support\Arr;

class SiteObserver
{
    public function creating(Site $site): void
    {
        $parsed = parse_url($site->domain);

        $site->scheme = Arr::get($parsed, 'scheme');
        $site->domain = Arr::get($parsed, 'host');
    }

    public function updating(Site $site): void
    {
        if (array_key_exists('default', $site->getDirty())) {
            $site->user->sites()->whereNot('id', $site->id)->update(['default' => false]);
        }
    }
}
