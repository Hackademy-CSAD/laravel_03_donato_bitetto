<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-danger">{{ $pippo['name'] }}</h5>

        <a href="{{ route('serie.show', ['name' => $pippo['name']]) }}" class="btn btn-primary">Go
            somewhere</a>
    </div>
</div>
