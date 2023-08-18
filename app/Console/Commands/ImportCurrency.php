<?php

namespace App\Console\Commands;

use App\Contracts\Repositories\CurrencyRepository;
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
    public function handle(
        FreeCurrencyApiClient $freeCurrencyApiClient,
        CurrencyRepository $currencyRepository
    ): void
    {
        $currencies = 'USD,EUR,MXN';

        $currenciesResponse = $freeCurrencyApiClient->currencies([ 'currencies' => $currencies ]);

        foreach ($currenciesResponse['data'] as $currencyNameResponse => $currencyResponse)
        {
            $currencyRepository->updateOrCreate([
                'name' => $currencyNameResponse
            ], [
                'symbol'         => $currencyResponse['symbol'],
                "symbol_native"  => $currencyResponse['symbol_native'],
                "decimal_digits" => $currencyResponse['decimal_digits'],
                "rounding"       => $currencyResponse['rounding'],
                "code"           => $currencyResponse['code'],
                "name_plural"    => $currencyResponse['name_plural']
            ]);
        }

    }
}
