@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <br><br>

                    @php
                        $queryString = http_build_query([
                        'access_key' => 'c97abe58b34e41a5d29d8e4d3633b6db'
                        ]);

                        $ch = curl_init(sprintf('%s?%s', 'https://api.marketstack.com/v1/tickers/aapl/eod', $queryString));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $json = curl_exec($ch);
                        curl_close($ch);

                        $apiResult = json_decode($json, true);
                        var_dump($apiResult);
                        // foreach ($apiResult['data'] as $stocksData) {
                        // echo sprintf('Ticker %s has a day high of %s on %s', $stockData['symbol'], $stockData['high'], $stockData['date'] );
                        // }
                    @endphp



           
                    

                </div>
            </div>
        </div>
    </div>
</div>


@endsection



