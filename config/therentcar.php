<?php

return [
    "vehicle_unique_number_prefix" => env("VEHICLE_UNIQUE_NUMBER_PREFIX", "TRC"),

    "whatsapp_number" => env("WHATSAPP_NUMBER", ""),

    "whatsapp_appended_phone" => env("WHATSAPP_API_URL", "https://api.whatsapp.com/send/?phone=") . env("WHATSAPP_NUMBER", ""),
];
