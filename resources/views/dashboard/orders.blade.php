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
                                  <h3 class="table-active success">Active</h3> {{-- You can change this logic if needed --}}
                              </td>
                              <td>
                                  <span class="table-price">${{ number_format($order->total, 2) }}</span>
                              </td>
                              <td>
                                  <span class="table-phone">{{ $order->phone }}</span>
                              </td>
                              <td>
                                  <span class="table-adress">{{ $order->address }}</span>
                              </td>
                              <td class="actions">
                                  <a href="#">
                                      <button>
                                          <i class="fas fa-hourglass-half"></i>
                                          {{ ucfirst($order->status) }}
                                      </button>
                                  </a>
                              </td>
                          </tr>
                      @empty
                          <tr>
                              <td colspan="7" class="text-center">No orders available.</td>
                          </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </section>

  {{ $orders->links() }} 
</x-dashboard>
