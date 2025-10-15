<x-app-layout>
  <div class="card">
    <div class="card-body p-0">
      <!-- BEGIN profile -->
      <div class="profile">
        <!-- BEGIN profile-container -->
        <div class="profile-container">
          <!-- BEGIN profile-sidebar -->
          <div class="profile-sidebar">
            <div class="desktop-sticky-top">
              <div class="card">
                <div class="card-body p-1">
                  <div class="profile-img">
                    <img src="{{ asset('assets/img/user/profile.jpg') }}"
                      onerror="this.onerror=null; this.src='{{ asset('img/no-pict.jpg') }}'"
                      alt="Profile Picture"
                      class="img-fluid w-100"
                      style="height: 100%; object-fit: cover;">
                  </div>
                </div>
                <div class="card-arrow">
                  <div class="card-arrow-top-left"></div>
                  <div class="card-arrow-top-right"></div>
                  <div class="card-arrow-bottom-left"></div>
                  <div class="card-arrow-bottom-right"></div>
                </div>
              </div>
              <!-- profile info -->
              <h4 class="pt-2">{{ Auth::user()->name }}</h4>
              <div class="mb-3 text-inverse text-opacity-50 fw-bold mt-n2">
                {{ Auth::user()->email }}
              </div>
              <hr class=" mb-3">
            </div>
          </div>
          <!-- END profile-sidebar -->

          <!-- BEGIN profile-content -->
          <div class="profile-content">
            <ul class="profile-tab nav nav-tabs nav-tabs-v2">
              <li class="nav-item">
                <a href="#account-details" class="nav-link active" data-bs-toggle="tab">
                  <div class="nav-field">Account</div>
                </a>
              </li>
              <li class="nav-item">
                <a href="#profile-details" class="nav-link" data-bs-toggle="tab">
                  <div class="nav-field">Profile</div>
                </a>
              </li>
            </ul>
            <div class="profile-content-container">
              <div class="row gx-4">
                <div class="">
                  <div class="tab-content p-0">
                    <!-- BEGIN tab-pane -->
                    <div class="tab-pane fade show active" id="account-details">
                      <x-account-details :user="$user" />
                    </div>
                    <!-- END tab-pane -->

                    <!-- BEGIN tab-pane -->
                    <div class="tab-pane fade" id="profile-details">
                      <x-profile-details :user="$user" />
                    </div>
                    <!-- END tab-pane -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END profile-content -->
        </div>
        <!-- END profile-container -->
      </div>
      <!-- END profile -->
    </div>
    <div class="card-arrow">
      <div class="card-arrow-top-left"></div>
      <div class="card-arrow-top-right"></div>
      <div class="card-arrow-bottom-left"></div>
      <div class="card-arrow-bottom-right"></div>
    </div>
  </div>

  <!-- END #content -->
  <script src="assets/plugins/lity/dist/lity.min.js"></script>
</x-app-layout>