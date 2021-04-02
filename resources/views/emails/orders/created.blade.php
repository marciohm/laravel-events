@component('mail::message')
# Olá {{$user->name}}

Sua compra foi realizada com sucesso.

Order: {{$order->id}}

Total: {{$order->total}}
The body of your message.

@component('mail::button', ['url' => ''])
Veja aqui os detalhes da compra realizada
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent