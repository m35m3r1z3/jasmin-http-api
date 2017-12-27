<?php

if (!function_exists('jasmin')) {
    /**
     * Get the Jasmin instance
     *
     * @return \Mannysoft\Jasmin\Jasmin
     */
    function jasmin()
    {
        return app(\Mannysoft\Jasmin\Jasmin::class);
    }
}

if (!function_exists('send_sms')) {
    
    function send_sms()
    {
        return hanap()->send_sms();
    }
}