<x-app-layout>
  <div class="container">
    <h2 class="mb-4">Edit User</h2>
    <div class="card">
      <div class="card-body">
        <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST">
          @csrf
          @method('PUT')
          @include('dashboard.components.form-user', ['user' => $user])
          <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Cancel</a>
          <button type="submit" class="btn btn-outline-primary">Update</button>
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

</x-app-layout>