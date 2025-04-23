<x-dashboard title="My Profile">
  @include('components.alert')

  <section class="admin-profile">
      <div class="spacial-content"></div>
      <div class="container grid">
          <div class="profile-group">
              <div class="profile-img">
                  <label for="file-upload" class="custom-file-upload">
                      <i class="fas fa-camera"></i>
                  </label>
                  <input id="file-upload" type="file" accept="image/*" style="display: none;" />
                  <img id="profile-image" src="{{ asset('images/' . auth()->user()->avatar) }}" alt="profile image"
                      style="max-width: 150px; max-height: 150px; object-fit: cover; border-radius: 50%;">
              </div>
          </div>

          <div class="profile-group">
              <div class="form grid">
                  @csrf
                  @method('PUT')

                  <!-- Name -->
                  <div class="form-item">
                      <label>Name</label>
                      <input type="text" name="name" placeholder="Enter your name"
                          value="{{ old('name', Auth::user()->name) }}" class="form-input" id="name">
                  </div>

                  <!-- Email -->
                  <div class="form-item">
                      <label>Email</label>
                      <input type="email" name="email" placeholder="Enter your email"
                          value="{{ old('email', Auth::user()->email) }}" class="form-input" id="email">
                  </div>

                  <h2 class="section-title">Update Your Password</h2>

                  <!-- Current Password -->
                  <div class="form-item">
                      <label>Current Password</label>
                      <input type="password" name="current_password" placeholder="Current Password"
                          class="form-input" id="current_password">
                  </div>

                  <!-- New Password -->
                  <div class="form-item">
                      <label>New Password</label>
                      <input type="password" name="password" placeholder="New Password" class="form-input"
                          id="password">
                  </div>

                  <!-- Confirm Password -->
                  <div class="form-item">
                      <label>Confirm Password</label>
                      <input type="password" name="password_confirmation" placeholder="Confirm Password"
                          class="form-input" id="password_confirmation">
                  </div>

                  <div class="form-item add">
                      <button class="shopping-cart" type="button" onclick="submitProfile()">Update</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

  @push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script>
          document.getElementById('file-upload').addEventListener('change', function(event) {
              const file = event.target.files[0];
              if (file && file.type.startsWith('image/')) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      document.getElementById('profile-image').src = e.target.result;
                  };
                  reader.readAsDataURL(file);
              }
          });

          function submitProfile() {
              const formData = new FormData();
              const fileInput = document.getElementById('file-upload');

              formData.append('name', document.getElementById('name').value);
              formData.append('email', document.getElementById('email').value);
              formData.append('current_password', document.getElementById('current_password').value);
              formData.append('password', document.getElementById('password').value);
              formData.append('password_confirmation', document.getElementById('password_confirmation').value);
              formData.append('_token', '{{ csrf_token() }}');
              formData.append('_method', 'PUT');

              if (fileInput.files.length > 0) {
                  formData.append('avatar', fileInput.files[0]);
              }

              $.ajax({
                  url: '{{ route('admin.profile.update') }}',
                  type: 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    window.location.href = '{{ route('admin.profile') }}';                      
                  },
                  error: function(xhr, status, error) {
                    window.location.href = '{{ route('admin.profile') }}';                      

                  }
              });
          }
      </script>
  @endpush
</x-dashboard>
