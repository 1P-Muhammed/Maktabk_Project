<h2>New Contact Message</h2>
<p><strong>Name:</strong> {{ $contactData['name'] }}</p>
<p><strong>Email:</strong> {{ $contactData['email'] }}</p>
<p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $contactData['message'] }}</p>

@if(count($contactData['cart']) > 0)
    <h3>Cart Items:</h3>
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
            @foreach($contactData['cart'] as $item)
                <tr>
                    <td style="padding: 10px; border: 1px solid #dee2e6;">
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width: 50px; height: 50px; object-fit: cover;">
                        {{ $item['name'] }}
                    </td>
                    <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $item['quantity'] }}</td>
                    <td style="padding: 10px; border: 1px solid #dee2e6;">${{ number_format($item['price'], 2) }}</td>
                    <td style="padding: 10px; border: 1px solid #dee2e6;">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="background-color: #f8f9fa;">
                <td colspan="3" style="padding: 10px; border: 1px solid #dee2e6; text-align: right;"><strong>Total:</strong></td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">
                    ${{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $contactData['cart'])), 2) }}
                </td>
            </tr>
        </tfoot>
    </table>
@endif
