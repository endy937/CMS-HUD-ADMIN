@csrf

{{-- Username --}}
<div class="row mb-3">
  <div class="col-md-6">
    <label for="username" class="form-label">Username</label>
    <input
      type="text"
      name="username"
      id="username"
      class="form-control form-control-lg @error('username') is-invalid @enderror"
      value="{{ old('username', $user->username ?? '') }}">
    @error('username')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  {{-- Name --}}
  <div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      name="name"
      id="name"
      class="form-control form-control-lg @error('name') is-invalid @enderror"
      value="{{ old('name', $user->name ?? '') }}">
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>

{{-- Email --}}
<div class="form-group row mb-3">
  <label for="email" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-4">
    <input
      type="email"
      name="email"
      id="email"
      class="form-control form-control-lg @error('email') is-invalid @enderror"
      value="{{ old('email', $user->email ?? '') }}">
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>

{{-- Password --}}
<div class="form-group row mb-3">
  <label for="password" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-4">
    <div class="input-group">
      <input
        type="password"
        name="password"
        id="password"
        class="form-control form-control-lg @error('password') is-invalid @enderror">
      <button type="button" class="btn btn-outline-secondary" id="togglePassword">
        <i class="bi bi-eye"></i>
      </button>
      @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
</div>

{{-- Confirm Password --}}
<div class="form-group row mb-3">
  <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
  <div class="col-sm-4">
    <div class="input-group">
      <input
        type="password"
        name="password_confirmation"
        id="password_confirmation"
        class="form-control form-control-lg">
    </div>
  </div>
</div>