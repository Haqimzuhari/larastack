<x-layout>
    <div class="h-screen bg-center bg-no-repeat bg-contain" style="background-image:url('https://designstripe-secure.imgix.net/scene-snapshots/4803eefd-e24d-494a-8032-2c981666e8f9/1645155956609/default?auto=format&fit=clip&h=850&mark=%2Fwatermark.png&markfit=max&markalign=middle%2Ccenter&markw=1&markh=1&s=ba4d2802c01489414ce63aa5efaf50fa')">
        <div class="w-full h-full space-y-10 bg-white/30 flex_col_center">
            <a href="{{ route('index') }}" class="flex_center"><x-logo.icon-name size="2xl"/></a>
            <p class="font-serif text-6xl font-black text-center text-black">Something interesting<br> going on!</p>
            @auth
                <div class="space-x-2 flex">
                    <form method="post" action="{{ route('sign-out') }}">
                        @csrf
                        <button type="submit" name="sign_out" class="px-3 py-4 btn btn_outline_primary">Sign Out</button>
                    </form>
                    <a href="{{ route('dashboard') }}" class="px-3 py-4 btn btn_primary">Dashboard</a>
                </div>
            @endauth

            @guest
                <a href="{{ route('sign-in') }}" class="px-3 py-4 btn btn_outline_primary">Get Started</a>
            @endguest
        </div>
    </div>
</x-layout>
