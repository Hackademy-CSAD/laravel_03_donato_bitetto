<x-layout title="{{$detail['name']}}">

    <div class="container">
        <div class="row ">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $detail['name'] }}</h5>
                        <p>
                            {{ $detail['description'] }}
                        </p>
                        <p>
                            {{ $detail['year'] }}
                        </p>
                    </div>
                </div>

            </div>
            
        </div>
        
    </div>

</x-layout>