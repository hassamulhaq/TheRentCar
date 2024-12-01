<?php

namespace App\Console\Commands;

use App\Models\Vehicle;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapCommand extends Command
{
    protected $signature = 'generate:sitemap';

    protected $description = 'Generate sitemap for the site';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add static URLs manually (optional)
        $sitemap->add(Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setLastModificationDate(now()));


        Vehicle::all()->each(function ($vehicle) use ($sitemap) {
            $sitemap->add(Url::create(route('vehicles.view', $vehicle->slug))
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setLastModificationDate($vehicle->updated_at));
        });

        // Optionally, add more routes or models here

        // Write the sitemap to the public directory
        $sitemap->writeToFile(public_path('sitemap_index.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
