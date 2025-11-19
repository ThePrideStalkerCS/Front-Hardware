<x-layout>
    <x-slot:heading>Products</x-slot:heading>
    <x-slot:content>
        
        <div class="space-y-4">
            @foreach ($products as $product)
                <a href="/product/{{ $product['id'] }}" class="block px-4 py-6 border borderr-gray-200 rounded-lg">

                    <div class=" text-bold text-blue-500 text-sm"> {{$product->category->name}} </div>
                     <div>
                        <b>{{ $product['name'] }}</b> : Costs ${{ $product['price'] }} 
                     </div>
                </a>
            @endforeach

            <div>
                
                    {{ $products->links() }}
                
            </div>
            </div>
    </x-slot:content>

</x-layout>
