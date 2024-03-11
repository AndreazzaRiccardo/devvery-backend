<div class="container">
    <h2 style="margin: 2rem 0; text-align: center; ">Buongiorno {{ $email->name }}</h2>

    <p>E stato eseguito un ordine dal totale di <strong>{{ $order->total_amount }}€</strong> dal signore
        <strong>{{ $customer->first_name }} {{ $customer->last_name }}</strong>.</p>
    <p>Il numero dell'ordine è <strong>{{ $order->id }}</strong>.</p>
    <p>Il recapito telefonico è: <strong>{{ $customer->phone }}</strong></p>
    <p>L'indirizzo è: <strong>{{ $customer->address }}</strong>.</p>

    <hr>

    <h3>Il Team di <strong style="color: #01222b; font-size: 2rem">De<span style="color: #fdb633">vv</span>ery</strong></h3>
</div>
