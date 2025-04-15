<x-dashboard>

    <h1 style="top: 10%; left: 17%; position: absolute;">All Payments</h1>

    @if (session()->has('msg'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <span aria-hidden="true">&times;</span>
        </div>
    @endif

    {{-- زر إضافة مدفوعات جديدة --}}
    <a class="back-button" href="{{ route('admin.payments.create') }}">
        <i class="fas fa-plus"></i>
        <span>Add New Payment</span>
    </a>

    <section class="all-cart-section">
        <div class="container">

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>

                <tbody>
                    @forelse($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->amount }} $</td>
                            <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                            <td>
                                <span class="status {{ $payment->status == 'paid' ? 'paid' : 'pending' }}">
                                    {{ ucfirst($payment->status) }}
                                </span>
                            </td>
                            <td class="actions">
                                <a class="update" href="{{ route('admin.payments.show', $payment->id) }}">
                                    <button><i class="fas fa-eye"></i>View</button>
                                </a>
                                <form action="{{ route('admin.payments.destroy', $payment->id) }}" method="POST" style="display: inline; margin-left: 10px;">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="delete">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this payment?')">
                                            <i class="fas fa-trash"></i>Delete
                                        </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </section>

    {{-- {{ $payments->links() }} --}}

</x-dashboard>
