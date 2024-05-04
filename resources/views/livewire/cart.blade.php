
<div>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Cart</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! session('message') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                @foreach ($carts as $index => $cart)
                <tr>
                    <td>{{ $cart['name'] }}</td>
                    <td>{{ $cart['price'] }}</td>
                    <td>{{ $cart['quantity'] }}</td>
                    <td><button wire:click="removeFromCart({{ $index }})" class="btn btn-danger">X</button></td>
                </tr>
                @endforeach
            </table>

        </div>
    </section>
</div>
