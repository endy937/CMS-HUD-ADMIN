@if ($errors->any())
<div {{ $attributes }}>
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
</div>
@endif