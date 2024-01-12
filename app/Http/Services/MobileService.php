<?php

namespace App\Http\Services;

use Phattarachai\LaravelMobileDetect\Agent;

class MobileService
{
    public function mobile($file, $data)
    {
        $agent = new Agent();
        if ($agent->isMobile() || $agent->isPhone()) {
            return view($file, compact($data));
        }
    }
}
