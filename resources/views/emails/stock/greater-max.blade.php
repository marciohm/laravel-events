@component('mail::message')
# Olá

O estoque de {{$product->name}} está acima do máximo permitido

Estoque atual: {{$product->stock}}

Estoque maximo: {{$product->stock_max}}

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
