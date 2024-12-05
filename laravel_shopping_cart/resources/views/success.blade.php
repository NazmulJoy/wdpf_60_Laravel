@extends('shop')
   
@section('content')
<h1>Your order has been placed</h1>
<h1>Your Order Summary</h1>
<table id="cart" class="table table-bordered" style="width: 50%">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @php $total = 0; @endphp
        @php $quantity = 0; 
        $productDetails = 'sample';
        @endphp
            @foreach(session('cart') as $id => $details)
                 
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images') }}/{{ $details['image'] }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">{{ $details['quantity'] }} @php $quantity += $details['quantity']; @endphp</td>
                    
                    <td data-th="Subtotal" class="text-center"> {{ $details['price'] * $details['quantity'] }} @php $total += $details['price'] * $details['quantity']; @endphp </td>
                    
                </tr>
            @endforeach
        @endif
    </tbody>
    
</table>
@endsection
   
