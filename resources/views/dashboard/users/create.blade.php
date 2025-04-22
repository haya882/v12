<x-dashboard title="Add New User">
    {{-- <h1 style="top: 10%; left: 17%; position: absolute;">Add New User</h1> --}}

    <a class="back-button" href="{{ route('admin.users.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Users</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content"></div>
        <div class="container">
            <div class="product-group">
                @include('dashboard.users._form', ['roles' => $roles, 'action'=>"create"])
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        function showImg(event) {
            var reader = new FileReader();
            var preview = document.getElementById('preview');
            reader.onload = function () {
                preview.src = reader.result;
                preview.style.display = 'block';
                preview.style.width = '150px';
                preview.style.maxHeight = '120px';
                preview.style.objectFit = 'contain';
            }
            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            } else {
                preview.style.display = 'none';
            }
        }
    </script>
        @endpush
</x-dashboard>
