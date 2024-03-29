<x-layout>

    
    
    <div class="container">
        <div class="row ">
            @foreach ($series as $serie)
                <div class="col-4 mt-4">
                    
                    <x-card :pippo="$serie"/>
    
                </div>
            @endforeach
        </div>
    
    </div>


</x-layout>

