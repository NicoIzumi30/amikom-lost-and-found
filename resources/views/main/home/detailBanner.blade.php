<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="text mt-3">
                <h2>{{$banner->title }}</h2>
            </div>
            <div class="text-center">
            <img src="{{asset('storage/announcement')}}/{{$banner->image}}" class="w-75 my-3" alt="">
            </div>
            <div class="text-justify mt-3">
                <p>{{$banner->description }}</p>
            </div>
        </div>
    </div>
</x-app-main-layout>