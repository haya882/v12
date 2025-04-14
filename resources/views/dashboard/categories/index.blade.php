<x-dashboard>


    <h1 style="top: 10%; left: 17%; position: absolute;">All Categories </h1>
    @if (session()->has('msg'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>

    </div>
    @endif
    {{-- </button> --}}
    <a class="back-button" href="{{ route('admin.categories.create') }} ">
        {{-- <button > --}}
        <i class="fas fa-plus"></i>
        <span>Add New</span>
        {{-- </button> --}}
    </a>



    <section class="all-cart-section">
        <div class="container">

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Product Count</th>
                    <th>Actions</th>
                </tr>
                

                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($category->image()->first())
                            <img src="{{ asset('images/' . $category->image()->first()?->path) }}" alt="{{ $category->name }}" style="width: 40px; height: 40px;">
                            @else
                            <span>No Image</span>
                            @endif
                        </td>
                        <td><span class="table-title">{{ $category->name }}</span></td>
                        <td></td>
                        <td class="actions">
                            <a class="update" href="{{ route('admin.categories.edit', $category->id) }}">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline; margin-left: 10px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete" onclick="return confirm('Are You Sure?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                    @endforelse
                </tbody>


            </table>

        </div>

    </section>

    {{-- {{ $categories->links() }} --}}

</x-dashboard>