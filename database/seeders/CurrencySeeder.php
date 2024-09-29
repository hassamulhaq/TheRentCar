<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $currencies = [
            ['name' => 'United Arab Emigrates', 'code' => 'AED', 'symbol' => 'د.إ'],
            ['name' => 'US Dollar', 'code' => 'USD', 'symbol' => '$'],
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€'],
            ['name' => 'British Pound', 'code' => 'GBP', 'symbol' => '£'],
            ['name' => 'Japanese Yen', 'code' => 'JPY', 'symbol' => '¥'],
            ['name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => '$'],
            ['name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => '$'],
            ['name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF'],
            ['name' => 'Chinese Yuan', 'code' => 'CNY', 'symbol' => '¥'],
            ['name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr'],
            ['name' => 'New Zealand Dollar', 'code' => 'NZD', 'symbol' => '$'],
            ['name' => 'Mexican Peso', 'code' => 'MXN', 'symbol' => '$'],
            ['name' => 'Singapore Dollar', 'code' => 'SGD', 'symbol' => '$'],
            ['name' => 'Hong Kong Dollar', 'code' => 'HKD', 'symbol' => '$'],
            ['name' => 'Norwegian Krone', 'code' => 'NOK', 'symbol' => 'kr'],
            ['name' => 'South Korean Won', 'code' => 'KRW', 'symbol' => '₩'],
            ['name' => 'Turkish Lira', 'code' => 'TRY', 'symbol' => '₺'],
            ['name' => 'Russian Ruble', 'code' => 'RUB', 'symbol' => '₽'],
            ['name' => 'Indian Rupee', 'code' => 'INR', 'symbol' => '₹'],
            ['name' => 'Brazilian Real', 'code' => 'BRL', 'symbol' => 'R$'],
            ['name' => 'South African Rand', 'code' => 'ZAR', 'symbol' => 'R'],
            ['name' => 'Philippine Peso', 'code' => 'PHP', 'symbol' => '₱'],
            ['name' => 'Czech Koruna', 'code' => 'CZK', 'symbol' => 'Kč'],
            ['name' => 'Indonesian Rupiah', 'code' => 'IDR', 'symbol' => 'Rp'],
            ['name' => 'Malaysian Ringgit', 'code' => 'MYR', 'symbol' => 'RM'],
            ['name' => 'Hungarian Forint', 'code' => 'HUF', 'symbol' => 'Ft'],
            ['name' => 'Icelandic Krona', 'code' => 'ISK', 'symbol' => 'kr'],
            ['name' => 'Croatian Kuna', 'code' => 'HRK', 'symbol' => 'kn'],
            ['name' => 'Bulgarian Lev', 'code' => 'BGN', 'symbol' => 'лв'],
            ['name' => 'Romanian Leu', 'code' => 'RON', 'symbol' => 'lei'],
            ['name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr'],
            ['name' => 'Polish Zloty', 'code' => 'PLN', 'symbol' => 'zł'],
            ['name' => 'Thai Baht', 'code' => 'THB', 'symbol' => '฿'],
            ['name' => 'Israeli Shekel', 'code' => 'ILS', 'symbol' => '₪'],
            ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => 'ر.س'],
            ['name' => 'Ukrainian Hryvnia', 'code' => 'UAH', 'symbol' => '₴'],
            ['name' => 'Chilean Peso', 'code' => 'CLP', 'symbol' => '$'],
            ['name' => 'Colombian Peso', 'code' => 'COP', 'symbol' => '$'],
            ['name' => 'Peruvian Sol', 'code' => 'PEN', 'symbol' => 'S/']
        ];

        Currency::insert($currencies);
    }
}
