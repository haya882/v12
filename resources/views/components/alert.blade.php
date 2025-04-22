@foreach (['success', 'error', 'warning', 'info'] as $type)
    @if (session()->has($type))
        <div class="custom-toast {{ $type }}">
            <span class="message">{{ session($type) }}</span>
            <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
        </div>
    @endif
@endforeach
