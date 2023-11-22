<x-layout>

    <div class="container mt-5">
        <div class="row">
            <h1 class="col-12 text-center">TITOLO</h1>

            @foreach ($products as $product)
            <div class="col-12 col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="card mb-3 image-card background-card font-color-white " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{Storage::url($product->cover)}}" class="img-fluid rounded-start" alt="Copertina Articolo">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{ $product->title }}</h5>
                                        <p class="card-text">{{Str::limit($product->description), 200}}</p>
                                        <p class="card-text"><small class="font-color-white ">Inserito il: {{$product->created_at->format('d/m/Y')}}</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-overlay">
                            {{--    <a class="underline-none" href="{{route('product.show', $product)}}"><button class="css-button-sliding-to-top--grey--dark">Scopri di più</button></a>

                                <a class="underline-none" href="{{route($product->category->name)}}"><button class="css-button-sliding-to-top--grey--dark">Scopri di più</button></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</x-layout>