@if($errors->any())
<div class="admin-alert" style="background:#fef2f2;border-left-color:#ef4444;color:#991b1b;">
    <ul class="mb-0 ps-3">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif