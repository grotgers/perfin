<?php

namespace App\Console\Commands;

use FreeCurrencyApi\FreeCurrencyApi\FreeCurrencyApiException;
use Illuminate\Console\Command;

use FreeCurrencyApi\FreeCurrencyApi\FreeCurrencyApiClient;

class ImportCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:currency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Free Currency Api Client Importer';

    /**
     * Execute the console command.
     *
     * @throws FreeCurrencyApiException
*/
    public function handle(FreeCurrencyApiClient $freeCurrencyApiClient): void
    {
        $currencies = 'USD,EUR,MXN';

        $currenciesResponse = $freeCurrencyApiClient->currencies([ 'currencies' => $currencies ]);

    }
}
