<x-dashboard title="Our Orders">

    <a class="back-button" href="{{ route('admin.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>Back</span>
    </a>
    <section class="all-cart-section our-orders">


        <div class="container">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Customer Status</th>
                            <th>Pill</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>
                                    <h3 class="table-title">{{ $order->name }}</h3>
                                </td>
                                <td>
                                    <h3 class="table-email">{{ $order->email }}</h3>
                                </td>
                                <td>
                                    <h3 class="table-active success">Active</h3>
                                </td>
                                <td><span class="table-price">${{ number_format($order->total, 2) }}</span></td>
                                <td><span class="table-phone">{{ $order->phone }}</span></td>
                                <td><span class="table-adress">{{ $order->address }}</span></td>

                                {{-- Status Badge --}}
                                <td class="">
                                    {{-- <span class="badge badge-{{ $order->status }}">
                                    {{ ucfirst($order->status) }}
                                </span> --}}
                                    <button
                                        class="status-btn 
                                            @if ($order->status === 'confirmed') success
                                            @elseif($order->status === 'canceled') danger
                                            @elseif($order->status === 'pending') primary @endif"
                                        disabled>

                                        @if ($order->status === 'pending')
                                            <i class="fas fa-hourglass-half"></i>
                                        @endif

                                        {{ ucfirst($order->status) }}
                                    </button>

                                </td>

                                {{-- Actions --}}
                                <td class="actions">
                                    <form
                                        action="{{ route('admin.orders.action', ['order' => $order->id, 'action' => 'confirm']) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-success"
                                            onclick="return confirm('Confirm this order?')">
                                            <i class="fas fa-check"></i> Confirm
                                        </button>
                                    </form>

                                    <form
                                        action="{{ route('admin.orders.action', ['order' => $order->id, 'action' => 'cancel']) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-danger" style="background-color:red "
                                            onclick="return confirm('Cancel this order?')">
                                            <i class="fas fa-times"></i> Cancel
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No orders available.</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
        {{ $orders->links() }}
    </section>


    @push('styles')
    <style>
      .status-btn {
    padding: 4px 10px;
    font-size: 0.85rem;
    border: none;
    border-radius: 4px;
    cursor: not-allowed;
    color: #fff;
    font-weight: bold; /* Makes the text bold */
}

.status-btn.success {
    background-color: #28a745;
}

.status-btn.danger {
    background-color: #dc3545;
}

.status-btn.primary {
    background-color: #007bff;
}

      </style>
    @endpush

</x-dashboard>
