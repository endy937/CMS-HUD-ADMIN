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
                                                            <p>Update your profile settings aduh</p>
                                                        </div>
                                                    </div>
                                                    <div class="profile-img-list">
                                                        <form action="{{ route('profile_store') }}" method="POST"
                                                            class="space-y-4">
                                                            @csrf
                                                            {{-- jika sedang edit, kirimkan id ke request --}}
                                                            @if ($data)
                                                                <input type="hidden" name="id"
                                                                    value="{{ $data->id }}">
                                                            @endif

                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label" for="full_name">Full
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" name="full_name"
                                                                            value="{{ old('full_name', $data->full_name ?? '') }}"
                                                                            placeholder="Enter full name">
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label"
                                                                            for="phone_number">Phone
                                                                            Number</label>
                                                                        <input type="text" class="form-control"
                                                                            id="phone_number" name="phone_number"
                                                                            value="{{ old('phone_number', $data->phone_number ?? '') }}"
                                                                            placeholder="Phone number">
                                                                    </div>
                                                                </div> --}}

                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label" for="">Date
                                                                            Of
                                                                            Birth</label>
                                                                        <input type="date" class="form-control"
                                                                            id="" name="date_of_birth"
                                                                            value="{{ old('date_of_birth', $data->date_of_birth ?? '') }}"
                                                                            placeholder="date_of_birth">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label"
                                                                            for="full_name">Satuan</label>
                                                                        <select name="satuan_id" class="form-select"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Pilih satuan</option>
                                                                            @foreach ($satuan as $row)
                                                                                <option value="{{ $row->id }}"
                                                                                    @selected(old('satuan_id', $data->satuan_id ?? '') == $row->id)>
                                                                                    {{ $row->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label"
                                                                            for="full_name">Batalyon</label>
                                                                        <select name="batalyon_id" class="form-select"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Pilih batalyon</option>
                                                                            @foreach ($batalyon as $row)
                                                                                <option value="{{ $row->id }}"
                                                                                    @selected(old('batalyon_id', $data->batalyon_id ?? '') == $row->id)>
                                                                                    {{ $row->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label"
                                                                            for="full_name">Rank</label>
                                                                        <select name="ranks_id" class="form-select"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Pilih rank</option>
                                                                            @foreach ($ranks as $row)
                                                                                <option value="{{ $row->id }}"
                                                                                    @selected(old('ranks_id', $data->ranks_id ?? '') == $row->id)>
                                                                                    {{ $row->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label"
                                                                            for="full_name">Regu</label>
                                                                        <select name="regus_id" class="form-select"
                                                                            required>
                                                                            <option value="" disabled selected>
                                                                                Pilih regu</option>
                                                                            @foreach ($regu as $row)
                                                                                <option value="{{ $row->id }}"
                                                                                    @selected(old('regus_id', $data->regus_id ?? '') == $row->id)>
                                                                                    {{ $row->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-3 mt-2">
                                                                    <a href="{{ route('profile_index') }}"
                                                                        class="btn btn-outline-theme">Kembali</a>
                                                                    <button type="submit"
                                                                        class="btn btn-outline-theme">Simpan</button>
                                                                </div>
                                                        </form>
                                                    </div>

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
