<?php
return array(
    // set your paypal credential
    'client_id' => 'ATf2IF2IgvDgcBNo1ul7FyTxW-pgwZ_vgyrYSnyDem0uiw5vuqcLFtXJO5pvQnOonH_bHlYPHUmt7pPO',
    'secret' => 'EKsWM9fCG2uERGKJ2D-vwr8pZH_jnGA_6WoFjmQtMNusrU5a-1tUCBozZaKJfr-DtRLHeBIqIIFqPXEL',

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
        'http.ConnectionTimeOut' => 30,

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