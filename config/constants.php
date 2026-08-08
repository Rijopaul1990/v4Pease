<?php

/*
|--------------------------------------------------------------------------
| Application Constants
|--------------------------------------------------------------------------
|
| Central place for feature toggles and fixed values. Access with
| config('constants.KEY'), e.g. config('constants.SHOW_SEND_QUOTATION').
|
*/

return [

    // Show/hide the "Send Quotation" feature (header button + modal) across the site.
    'SHOW_SEND_QUOTATION' => true,

    // Recipient e-mail address for quotation requests (and other admin notifications).
    'ADMIN_EMAIL' => env('ADMIN_EMAIL', 'v4peacecounselling@gmail.com'),

];
