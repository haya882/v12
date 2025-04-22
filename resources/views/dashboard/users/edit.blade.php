<x-dashboard title="Edit User">
    <h1 style="top: 10%; left: 17%; position: absolute;">Edit User</h1>

    <a class="back-button" href="{{ route('admin.users.index') }}">
        <i class="fas fa-long-arrow-left"></i>
        <span>All Users</span>
    </a>

    <section class="addProduct">
        <div class="spacial-content"></div>
        <div class="container">
            <div class="product-group">
                @include('dashboard.users._form', ['user' => $user, 'roles' => $roles, 'action'=>"update"])
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
        document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('togglePassword');
        const fields = document.getElementById('passwordFields');
        if (toggle) {
            toggle.addEventListener('change', function () {
                fields.style.display = this.checked ? 'flex' : 'none';
            });
        }
    });
    </script>
    
    @endpush
</x-dashboard>
