<?php
/** set your paypal credential **/
return array(
'client_id' =>'ARTpPDYU4qsNOVf0dukQj8GyUik2R5qN0oLumYUzOQkVSmTJuxRn4X4_DraTfMKOxfT9a0omS945SzkK',
'secret' =>'EMI_gTrMz6vKM-0_L2v31U8k1J3_X_ivML6Y5TFDLXRGF9VVYCW_HTiranII_FilVqZ_OdaIzAhDPaJp',
/**
* SDK configuration 
*/
'settings' => array(
    /**
    * Available option 'sandbox' or 'live'
    */
    'mode' => 'sandbox',
    /**
    * Specify the max request time in seconds
    */
    'http.ConnectionTimeOut' => 1000,
    /**
    * Whether want to log to a file
    */
    'log.LogEnabled' => true,
    /**
    * Specify the file that want to write on
    */
    'log.FileName' => storage_path() . '/logs/paypal.log',
    /**
    * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    *
    * Logging is most verbose in the 'FINE' level and decreases as you
    * proceed towards ERROR
    */
    'log.LogLevel' => 'FINE'
    ),
);