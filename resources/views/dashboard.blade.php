<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('As 100 principais criptomoedas por capitalização de mercado') }}
        </h2>
    </x-slot>

    <div class="container-fluid card p-2">
        <table class="m-2">
            <tr>
                <th class="pt-2 pb-2 card">Nome</th>
                <th>Preço</th>
                <th>24h%</th>
                <th>7d%</th>
                <th>Cap. de mercado</th>
                <th>Volume ( 24h )</th>
                <th>Ações em circulaçã </th>
            </tr>

            @foreach($data as $key)
                <tr>
                    <td class="pt-2 pb-2 card font-weight-bold">{{ $key['name'] }} {{ $key['symbol'] }}</td>
                    @foreach($key['quote'] as $key2 )
                    <td> ${{ number_format($key2['price'], 2) }}</td>

                    <td class="text-success @if ($key2['percent_change_24h'] < 0)
                        text-danger
                    @endif" >
                        {{ number_format($key2['percent_change_24h'], 2) }}%
                    </td>

                    <td class="text-success @if ($key2['percent_change_7d'] < 0)
                        text-danger
                    @endif">
                        {{ number_format($key2['percent_change_7d'], 2) }}%
                    </td>

                    <td> ${{ number_format($key2['market_cap'], 0) }}</td>
                    <td> ${{ number_format($key2['volume_24h'], 0) }}</td>
                    @endforeach
                    <td>{{ number_format($key['circulating_supply'], 0) }} {{ $key['symbol'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
