@extends('shop')
   
@section('content')
<h1>Order Summary</h1>
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
    <tfoot>
        <tr>
            <td></td>
            <td colspan="1">Total</td>
            <td>{{$quantity}}</td>
            <td>{{$total}}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right">
                <form action="{{route('session')}}" method="post">
                    @csrf
                <a href="{{ url('/home') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button type="submit" class="btn btn-info">Place Order <i class="fa fa-angle-right"></i></button>
                <input type="hidden" name="total" value="{{$total}}">
                <input type="hidden" name="productDetails" value="{{$productDetails}}">
            </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
   
