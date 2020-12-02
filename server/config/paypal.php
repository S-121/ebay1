<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AU56shJiHzoP5a3Mz9I7dCmCmFpP1lRx1q-u09XFSk9s0bvT_z-FL-CWCg8wYiVQdNcwbb1RpLc6FWB5'),
    'secret' => env('PAYPAL_SECRET','EOYbYhQA4q-MNik4nLiPkRBGSJoH0sIlWLvN8-2mWq7lJRiNrV4wPyRqfE8g0N7SHO2G0ugUa_lT88RD'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];