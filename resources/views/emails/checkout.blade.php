<h2>New Order Received</h2>
<p><strong>Name:</strong> {{ $data['firstName'] }} {{ $data['lastName'] }}</p>
<p><strong>Address:</strong> {{ $data['address'] }}, {{ $data['city'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Country:</strong> {{ $data['country'] }}</p>
<p><strong>Postal Code:</strong> {{ $data['postal'] ?? 'N/A' }}</p>
