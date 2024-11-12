@if(session('toast'))
    <div class="toast {{ session('toast')['type'] }}">
        <div class="column">
            <i class="fa-solid fa-circle-check"></i>
            <span>{{ session('toast')['message'] }}</span>
        </div>
        <i class="fa-solid fa-xmark"></i>
    </div>
@endif
