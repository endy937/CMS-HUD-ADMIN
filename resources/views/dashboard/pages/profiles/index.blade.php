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
                            <div class="profile-img">
                                <img src="{{ asset('assets/img/user/profile.jpg') }}" alt="">
                            </div>
                            <!-- profile info -->
                            <h4>{{ Auth::user()->name }}</h4>
                            <div class="mb-3 text-inverse text-opacity-50 fw-bold mt-n2">
                                {{ Auth::user()->email }}
                            </div>
                            <hr class="mt-4 mb-4">

                            <!-- Change Password -->
                            <div class="fw-bold mb-3 fs-16px">Change Password</div>
                            <div class="d-flex align-items-center mb-1">
                                <a href="#" class="btn btn-sm btn-outline-theme fs-10px">Change</a>
                            </div>
                        </div>
                    </div>
                    <!-- END profile-sidebar -->
                    <!-- BEGIN profile-content -->
                    <div class="profile-content">
                        <div class="profile-content-container">
                            <div class="row gx-4">
                                <div class="col-xl-100">
                                    <div class="tab-content p-0">
                                        <!-- BEGIN tab-pane -->
                                        <div class="tab-pane fade show active" id="profile-post">
                                            <div class="card mb-1">
                                                <div class="card-body">
                                                    <!-- post header -->
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div class="flex-fill">
                                                            <div class="fw-bold fs-19px text-theme">Profile Settings
                                                            </div>
                                                            <p>Update your profile settings</p>
                                                        </div>
                                                    </div>
                                                    <div class="profile-img-list">
                                                        @if ($data->count() > 0)

                                                            {{-- <div class="justify-between mb-5">
                                                                    <a href="{{ route('profile_create') }}"
                                                                        class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Tambah</a>
                                                                </div> --}}

                                                            @foreach ($data as $item)
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Full
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->full_name ?? '-' }}"
                                                                                placeholder="Nama lengkap" disabled>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="col-xl-6">
                                                                            <div class="form-group mb-3">
                                                                                <label class="form-label"
                                                                                    for="full_name">Phone
                                                                                    Number</label>
                                                                                <input type="text"
                                                                                    class="form-control" id=""
                                                                                    name=""
                                                                                    value="{{ $item->phone_number ?? '-' }}"
                                                                                    placeholder="" disabled>
                                                                            </div>
                                                                        </div> --}}
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Date Of
                                                                                Birth</label>
                                                                            <input type="date" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->date_of_birth ?? '-' }}"
                                                                                placeholder="" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Satuan</label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->satuan->name ?? '-' }}"
                                                                                placeholder="" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Batalyon</label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->batalyon->name ?? '-' }}"
                                                                                placeholder="" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Rank</label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->rank->name ?? '-' }}"
                                                                                placeholder="" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label"
                                                                                for="full_name">Regu</label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name=""
                                                                                value="{{ $item->regu->name ?? '-' }}"
                                                                                placeholder="" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-3 mt-2">
                                                                        <a href="{{ route('profile_edit', $item->id) }}"
                                                                            class="btn btn-outline-theme">
                                                                            Update Profile
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="text-center d-flex flex-column align-items-center"
                                                                style="min-height: 290px;">
                                                                <p>You don't have any profile data yet</p>
                                                                <a href="{{ route('profile_create') }}"
                                                                    class="text-theme text-decoration-none">
                                                                    Create a Profile Now
                                                                </a>
                                                            </div>

                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- card-arrow (dekorasi, tidak mengganggu klik) -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                            </div>
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
            <!-- card-arrow besar luar -->
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
    <!-- END #content -->
</x-app-layout>
