<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RunProcessController extends Controller
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        if (php_sapi_name() != 'cli') {
            if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
                dump('9. Loading controller RunProcess method construct');
            }
        }
    }

    /**
     * Load method
     */
    public function load(Request $request)
    {
        if (php_sapi_name() != 'cli') {
            if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
                dump('10. Loading controller RunProcess method load');
            }

            if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
                (new User())->getInfo();
                dump('11. Return response data or view');
            }
        }
    }
}
