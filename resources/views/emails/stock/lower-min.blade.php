@component('mail::message')
# Olá

O estoque de {{$product->name}} está abaixo do mínimo permitido

Estoque atual: {{$product->stock}}

Estoque mínimo: {{$product->stock_max * 0.10}}

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
