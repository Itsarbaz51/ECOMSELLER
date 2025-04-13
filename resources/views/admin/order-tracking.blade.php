<x-admin-layout title="Order Tracking">

    <div class="max-w-lg mx-auto mt-10">
        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('track') }}" method="GET" class="space-y-4 p-6">
            <h2 class="text-xl font-semibold">Track Your Order</h2>
            <input type="number" name="order_id" placeholder="Enter Order ID"
                   class="border border-gray-300 p-2 rounded w-full" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Track</button>
        </form>

        @if(session('order'))
            @php $order = session('order'); @endphp
            <div class="mt-6 bg-white shadow p-4 rounded">
                <h3 class="text-lg font-semibold mb-2">Order Details</h3>
                <p><strong>Status:</strong> {{ $order->status }}</p>
                @if($order->status == 'delivered')
                    <p><strong>Delivered on:</strong> {{ $order->delivery_date }}</p>
                @elseif($order->status == 'cancelled')
                    <p><strong>Cancelled on:</strong> {{ $order->cancelled_date }}</p>
                @endif

                <div class="mt-4">
                    <h4 class="font-medium">Shipping Address</h4>
                    <p>{{ $order->name }}, {{ $order->phone }}</p>
                    <p>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}</p>
                    <p>{{ $order->country }} - {{ $order->zip }}</p>
                </div>
            </div>
        @endif
    </div>

</x-admin-layout>
