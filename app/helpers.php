<?php


if (!function_exists('generateWhatsAppLink')) {
    function generateWhatsAppLink($vehicle): string
    {
        $phone = config('therentcar.whatsapp_appended_phone');
        $message = urlencode("Hello, I would like to book the vehicle: {$vehicle->title}, ID: {$vehicle->unique_number}");

        return "https://api.whatsapp.com/send?phone={$phone}&text={$message}";
    }
}
