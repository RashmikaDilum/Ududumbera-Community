<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');
        
        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->setIndent(true);
        $xml->startDocument('1.0', 'UTF-8');
        
        $xml->startElement('urlset');
        $xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        // Static Pages
        $urls = [
            ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => url('/products'), 'priority' => '0.9', 'changefreq' => 'daily'],
            ['loc' => url('/services'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => url('/how-its-made'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => url('/our-story'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => url('/contact'), 'priority' => '0.7', 'changefreq' => 'yearly'],
        ];

        foreach ($urls as $urlDef) {
            $xml->startElement('url');
            $xml->writeElement('loc', $urlDef['loc']);
            $xml->writeElement('changefreq', $urlDef['changefreq']);
            $xml->writeElement('priority', $urlDef['priority']);
            $xml->endElement(); // url
        }

        // Add all products dynamically
        $products = Product::all();
        foreach ($products as $product) {
            $xml->startElement('url');
            $xml->writeElement('loc', url("/products/{$product->slug}"));
            $xml->writeElement('lastmod', $product->updated_at->tz('UTC')->toAtomString());
            $xml->writeElement('changefreq', 'daily');
            $xml->writeElement('priority', '0.9');
            $xml->endElement(); // url
        }

        $xml->endElement(); // urlset
        $xml->endDocument();

        file_put_contents(public_path('sitemap.xml'), $xml->outputMemory());

        $this->info('Sitemap generated successfully!');
    }
}
