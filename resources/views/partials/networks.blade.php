<div class="grid grid-cols-4">
    @php
        $networks = [
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'http://www.linkedin.com/company/',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/'
         ];
    @endphp

    @foreach($networks as $key => $network)
        @if(env(strtoupper($key).'_handle', '') !== '')
            <a href="{{ $network }}{{ env(strtoupper($key).'_handle') }}" class="text-white hover:text-red-primary" target="_blank">
                @include("icons.{$key}")
            </a>
        @endif
    @endforeach
</div>