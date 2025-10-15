<x-app-layout>
  <div class="container">
    <h2 class="mb-4">Create User</h2>

    <div class="card">
      <div class="card-body">
        <form action="{{ route('dashboard.users.store') }}" method="POST">
          @csrf
          @include('dashboard.components.form-user')
          <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Cancel</a>
          <button type="submit" class="btn btn-outline-primary">Create</button>
        </form>
      </div>
      <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordFields = [
        document.getElementById('password'),
        document.getElementById('password_confirmation')
      ];
      const icon = this.querySelector('i');

      // Cek tipe dari salah satu saja (misalnya yang pertama)
      const isPassword = passwordFields[0].type === 'password';

      passwordFields.forEach(field => {
        field.type = isPassword ? 'text' : 'password';
      });

      // Ubah icon
      if (isPassword) {
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
      } else {
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
      }
    });
  </script>
</x-app-layout>