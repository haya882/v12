<x-dashboard title="All Categories">


    {{-- <h1 style="top: 10%; left: 17%; position: absolute;">All Categories</h1> --}}


@include('components.alert')


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
                            <img src="{{ asset('images/' . $category->image()->first()?->path) }}" alt="{{ $category->name }}" height="100" width="100">
                            @else
                            <span>No Image</span>
                            @endif
                        </td>
                        <td><span class="table-title">{{ $category->name }}</span></td>
                        <td> {{ $category->products->count() }}</td>
                        <td class="actions">
                            <a class="update" href="{{ route('admin.categories.edit', $category->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline; margin-left: 10px;">
                                @csrf
                                @method('DELETE')
                                <a href="" class="delete">
                                <button type="submit"  onclick="return confirm('Are You Sure?')">
                                    <i class="fa-solid fa-trash table-trash"></i> Delete
                                </button>
                                </a>
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

    {{ $categories->links() }}


</x-dashboard>
