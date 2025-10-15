    <x-app-layout>

    	<!-- BEGIN #content -->
    	<!-- BEGIN row -->
    	<div class="container">
    		<h2 class="mb-4">Users Management</h2>

    		<div class="card">
    			<div class="card-body">
    				<table id="users" class="table table-striped text-nowrap w-100">
    					<thead>
    						<tr>
    							<th>#</th>
    							<th>Username</th>
    							<th>Name</th>
    							<th>Role</th>
    							<th>Action</th>
    						</tr>
    					</thead>
    					<tbody>
    						@foreach($users as $index => $user)
    						<tr>
    							<td style="text-align:center; vertical-align:middle">{{ $index + 1 }}</td>
    							<td><strong class="text-theme fw-bold ">{{ $user->username }}</strong><br>
    								<small>{{ $user->email }}</small>
    							</td>
    							<td style="vertical-align:middle;">{{ $user->name ?? '-' }}</td>
    							<td style="vertical-align:middle;">{{ $user->role ?? '-' }}</td>
    							<td style="vertical-align:middle;">
    								<div class="menu-item dropdown dropdown-mobile-full">
    									<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
    										<div class="menu-icon fs-23px"><i class="bi bi-sliders2"></i></div>
    										<div class="menu-badge bg-theme"></div>
    									</a>
    									<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
    										<a href="{{ route('dashboard.users.account', $user->id) }}"
    											class="dropdown-item d-flex align-items-center text-primary">
    											DETAIL
    											<i class="bi bi-info-square ms-auto text-primary fs-16px my-n1"></i>
    										</a>
    										<a href="{{ route('dashboard.users.edit', $user->id) }}"
    											class="dropdown-item d-flex align-items-center">
    											EDIT
    											<i class="bi bi-pencil-square ms-auto text-theme fs-16px my-n1"></i>
    										</a>

    										<a class="dropdown-item d-flex align-items-center text-danger" data-bs-toggle="modal"
    											data-bs-target="#deleteModal{{ $user->id }}">DELETE <i class="bi bi-trash3 ms-auto text-danger fs-16px my-n1"></i></a>
    									</div>
    								</div>

    								{{-- Modal Konfirmasi Delete --}}
    								<div class="modal" id="deleteModal{{ $user->id }}" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    									<div class="modal-dialog modal-dialog-centered">
    										<div class="modal-content">
    											<div class="modal-header">
    												<h5 class="modal-title">Delete Confirmation</h5>
    												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    											</div>
    											<div class="modal-body">
    												Are you sure you want to permanently delete <span class="fw-bold text-danger">{{ $user->name }}</span>?
    											</div>
    											<div class="modal-footer">
    												<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
    												<form method="POST" action="{{ route('dashboard.users.destroy', $user->id) }}">
    													@csrf
    													@method('DELETE')
    													<button type="submit" class="btn btn-danger btn-sm">Yes, Delete</button>
    												</form>
    											</div>
    										</div>
    									</div>
    								</div>
    							</td>
    						</tr>
    						@endforeach
    					</tbody>
    				</table>
    			</div>
    			<div class="card-arrow">
    				<div class="card-arrow-top-left"></div>
    				<div class="card-arrow-top-right"></div>
    				<div class="card-arrow-bottom-left"></div>
    				<div class="card-arrow-bottom-right"></div>
    			</div>
    		</div>
    	</div>
    	<!-- END row -->

    	@php $success = session()->pull('success'); @endphp
    	@if($success)
    	<div style="position: fixed; top: 1rem; right: 1rem; z-index: 9999;">

    		<div class="toast" data-autohide="false">
    			<div class="toast-header">
    				<i class="far fa-bell text-muted me-2"></i>
    				<strong class="me-auto">Users</strong>
    				<!-- <small>Create</small> -->
    				<button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    			</div>
    			<div class="toast-body">
    				<!-- {{ session('success') }} -->
    				{{$success}}
    			</div>
    		</div>


    		@@include('./partial/script.html', {"script": [ "assets/plugins/lity/dist/lity.min.js" ]})
    		<script>
    			document.addEventListener('DOMContentLoaded', function() {
    				const toastElList = [].slice.call(document.querySelectorAll('.toast'))
    				toastElList.map(function(toastEl) {
    					const toast = new bootstrap.Toast(toastEl)
    					toast.show()
    				})
    			});
    		</script>
    		@endif


    		@push('scripts')
    		<script>
    			$(document).ready(function() {
    				$('#users').DataTable({
    					dom: 'Bfrtip',
    					buttons: [{
    						text: 'Add User',
    						className: "{{ 'btn btn-outline-theme' }}",
    						action: function() {
    							window.location.href = "{{ route('dashboard.users.create') }}";
    						}
    					}]

    				});
    			});
    		</script>
    		@endpush

    		<!-- END #content -->
    </x-app-layout>