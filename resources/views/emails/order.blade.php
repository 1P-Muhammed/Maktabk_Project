<h2>New Order Received</h2>

<h3>Customer Information:</h3>
<p><strong>Name:</strong> {{ $orderData['name'] }}</p>
<p><strong>Phone:</strong> {{ $orderData['phone'] }}</p>
<p><strong>Address:</strong> {{ $orderData['address'] }}, {{ $orderData['city'] }}</p>
<p><strong>Country:</strong> {{ $orderData['country'] }}</p>
@if($orderData['postal'])
    <p><strong>Postal Code:</strong> {{ $orderData['postal'] }}</p>
@endif

<h3>Order Items:</h3>
<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #f8f9fa;">
            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Product</th>
            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Quantity</th>
            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Price</th>
            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orderData['cart'] as $item)
            <tr>
                <td style="padding: 10px; border: 1px solid #dee2e6;">
                    {{ $item['name'] }}
                </td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $item['quantity'] }}</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">LE{{ number_format($item['price'], 2) }}</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">LE{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr style="background-color: #f8f9fa;">
            <td colspan="3" style="padding: 10px; border: 1px solid #dee2e6; text-align: right;"><strong>Total:</strong></td>
            <td style="padding: 10px; border: 1px solid #dee2e6;">
                LE{{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $orderData['cart'])), 2) }}
            </td>
        </tr>
    </tfoot>
</table> 