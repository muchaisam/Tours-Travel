@if(session('success'))
    <x-toast type="success" :message="session('success')" />
@endif

@if(session('error'))
    <x-toast type="error" :message="session('error')" />
@endif

@if(session('warning'))
    <x-toast type="warning" :message="session('warning')" />
@endif

@if(session('info'))
    <x-toast type="info" :message="session('info')" />
@endif

@if($errors->any())
    <x-toast type="error">
        <ul class="mb-0 ps-3">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-toast>
@endif
