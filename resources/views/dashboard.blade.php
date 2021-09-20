<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('As 100 principais criptomoedas por capitalização de mercado') }}
        </h2>
    </x-slot>

    <div class="container-fluid card p-2">

    <div class="card m-2">
        <div class="card-body">
        </div>
    </div>

    @foreach($data as $key)
        <div class="card border m-2">
            <div class="card-body">
                {{ $key['name'] }}
                @foreach($key['quote'] as $key2 )
                    {{ number_format($key2['price'], 2) }}
                @endforeach
            </div>
        </div>  
    @endforeach

    
        
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">24h%</th>
                <th scope="col">7d%</th>
                <th scope="col">Cap. de mercado</th>
                <th scope="col">Volume 24h</th>
                <th scope="col">Ações em circulação</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $key)
                <tr>
                    <td> {{ $key['name'] }} </td>
                    @foreach($key['quote'] as $key2 )
                        <td>$ {{ number_format($key2['price'], 2) }} </td>
                    @endforeach
                </tr>
            @endforeach

                <tr>
                    <th scope="row">1</th>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>24h%</td>
                    <td>7d%</td>
                    <td>Cap.de Mercado</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    </div>
</x-app-layout>