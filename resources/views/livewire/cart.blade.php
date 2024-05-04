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
            @foreach ($carts as $cart)
            <tr>
                <td>{{ $cart['name'] }}</td>
                <td>{{ $cart['price'] }}</td>
                <td>{{ $cart['quantity'] }}</td>
                <td><button class="btn btn-danger">X</button></td>
            </tr>
            @endforeach
        </table>

    </div>
</section>
