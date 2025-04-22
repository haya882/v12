<form action="{{ $action === 'update' ? route('admin.users.update', $user->id) : route('admin.users.store') }}"
    method="POST" enctype="multipart/form-data" class="form grid">
    @csrf
    @if ($action == 'update' )
        @method('PUT')
    @endif

    <!-- Name -->
    <div class="form-row">
        <div class="form-item">
            <label>Name</label>
            <input type="text" name="name" class="form-control form-input @error('name') is-invalid @enderror"
                value="{{ old('name', $user->name ?? '') }}" placeholder="Enter name" />
            @error('name')
                <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Email -->
    <div class="form-row">
        <div class="form-item">
            <label>Email</label>
            <input type="email" name="email" class="form-control form-input @error('email') is-invalid @enderror"
                value="{{ old('email', $user->email ?? '') }}" placeholder="Enter email" />
            @error('email')
                <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Password Section -->
    @if ($action === 'create')
        <div class="form-row">
            <div class="form-item" style="width: 48%;">
                <label>Password</label>
                <input type="password" name="password" class="form-input @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-item" style="width: 48%;">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-input @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                @error('password_confirmation')
                    <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                @enderror
            </div>
        </div>
    @elseif ($action === 'update' && auth()->user()->is_super_admin)
        <!-- Checkbox to toggle password -->
        <div class="form-row">
                <div class="form-item">
                    <label>
                        <input type="checkbox" id="togglePassword">Change Password?
                    </label>
                </div>
        </div>

        <div class="form-row" id="passwordFields" style="display: none;">
            <div class="form-item" style="width: 48%;">
                <label>Password</label>
                <input type="password" name="password" class="form-input @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-item" style="width: 48%;">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-input @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                @error('password_confirmation')
                    <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                @enderror
            </div>
        </div>
    @endif

    <!-- Role -->
    <div class="form-row">
        <div class="form-item">
            <label>Role</label>
            <select name="type" class="form-input @error('type') is-invalid @enderror">
                <option value="">-- Select Role --</option>
                @foreach ($roles as $key => $role)
                    <option value="{{ $key }}" {{ old('type', $user->type ?? '') == $key ? 'selected' : '' }}>
                        {{ $role }}
                    </option>
                @endforeach
            </select>
            @error('type')
                <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Avatar -->
    <div class="form-row">
        <div class="form-item">
            <label>Avatar</label>
            <input type="file" onchange="showImg(event)" name="avatar"
                class="form-input @error('avatar') is-invalid @enderror" />
            @error('avatar')
                <div class="alert alert-danger mt-2 p-2"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
            @enderror
            <img id="preview"
            src="{{ $action === 'update' && $user->avatar ? asset('images/' . $user->avatar) : '' }}"
            style="width: 120px; max-height: 100px; object-fit: contain; margin-top: 10px; {{ $action === 'update' && $user->avatar ? '' : 'display: none;' }}"
            alt="Image preview will appear here" />
        </div>
    </div>

    <!-- Submit -->
    <div class="form-row">
        <div class="form-item add">
            <button class="add">{{ $action == 'update' ? '✏️Update' : '➕ Add' }}</button>
        </div>
    </div>
</form>

@push('scripts')
<script>
    function showImg(event) {
        var reader = new FileReader();
        var preview = document.getElementById('preview');
        reader.onload = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
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
