<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center mb-3">
      <div class="flex-fill">
        <div class="fw-bold fs-19px text-theme">Profile Details</div>
        <p>Full information about your Profile</p>
      </div>
    </div>
    <div class="row">
      <!-- Name -->
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="full_name">Fullname</label>
          <input type="text" class="form-control"
            placeholder="Full Name"
            value="{{ $user->name ?? '-' }}"
            disabled>

        </div>
      </div>
      <!-- Batalyon -->
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="batalyon_id">Phone Number</label>
          <input type="text" class="form-control"
            placeholder="Email"
            value="{{ $user->email ?? '-' }}"
            disabled>
        </div>
      </div>
      <!-- Rank -->
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="rank_id">Satuan</label>
          <input type="text" class="form-control"
            placeholder="Role"
            value="{{ $user->role ?? '-' }}"
            disabled>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="rank_id">Batalyon</label>
          <input type="text" class="form-control"
            placeholder="Role"
            value="{{ $user->role ?? '-' }}"
            disabled>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="rank_id">Rank</label>
          <input type="text" class="form-control"
            placeholder="Role"
            value="{{ $user->role ?? '-' }}"
            disabled>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="form-group mb-3">
          <label class="form-label"
            for="rank_id">Regu</label>
          <input type="text" class="form-control"
            placeholder="Role"
            value="{{ $user->role ?? '-' }}"
            disabled>
        </div>
      </div>
    </div>
  </div>

  <div class="card-arrow">
    <div class="card-arrow-top-left"></div>
    <div class="card-arrow-top-right"></div>
    <div class="card-arrow-bottom-left"></div>
    <div class="card-arrow-bottom-right"></div>
  </div>
</div>