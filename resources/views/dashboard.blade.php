<x-app-layout>

    <div class="flex justify-center items-center h-full w-full mt-10">
        <div class="grid-column">
            @for ($i = 0; $i < 9; $i++)
                <div class="grid-item">
                    <div class="product-image">
                        hello
                    </div>
                    <div class="bottom-container">
                        <div class="like-button">hi</div>
                        <div class="share-button">hi</div>
                    </div>
                </div>
            @endfor
          </div>
    </div>
</x-app-layout>
