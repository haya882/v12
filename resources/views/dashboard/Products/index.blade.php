<x-dashboard>


    <h1 style= "top: 10%; left: 17%; position: absolute;">All Products </h1>
     @if (session()->has('msg'))
         <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('msg') }}

            <a class="back-button" href="{{ route('admin.products.create') }} ">
                {{-- <button > --}}
                <i class="fas fa-plus"></i>
                <span>Add New</span>
                {{-- </button> --}}
            </a>
         </div>
    @endif




    <section class="all-cart-section">
        <div class="container">

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>

                <tbody>
                    <tr>
                        @forelse($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img width="100" class="table-img" src="{{ $product->img_path }}" />
                            </td>
                            <td><span class="table-title">{{ $product->name }}</span></td>
                            <td> ${{ $product->price }}</td>
                            <td> {{ $product->quantity  }}</td>
                            <td> {{  $product->category }}</td>
                            <td class="actions">
                                <a class="update" href="{{ route('admin.products.edit', $product->id) }}">
                                    <button><i class="fas fa-edit"></i>Edit</button>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline; margin-left: 10px;" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="delete"><button type="submit" onclick="return confirm('Are You Sure?')"><i class="fas fa-trash"></i>Delete</button></a>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
<td colspan="7" class="text-center "> No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </section>



</x-dashboard>
