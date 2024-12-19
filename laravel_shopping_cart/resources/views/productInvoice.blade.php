<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

    <div class="card">
  <div class="card-header">
  Invoice
  <strong>{{$order[0]->created_at}}</strong> 
    <span class="float-right"> Order_Id: <strong>{{$order_number}}</strong></span>
     <br> <span class="float-right"> Payment method: <strong>{{$order[0]->payment_method}}</strong></span>
  </div>
  <div class="card-body">
  <div class="row mb-4">
  <div class="col-sm-6">
  <h6 class="mb-3">From:</h6>
  <div>
  <strong>Webz Poland</strong>
  </div>
  <div>Madalinskiego 8</div>
  <div>71-101 Szczecin, Poland</div>
  <div>Email: info@webz.com.pl</div>
  <div>Phone: +48 444 666 3333</div>
  </div>
  
  <div class="col-sm-6">
  <h6 class="mb-3">To:</h6>
  <div>
  <strong>Bob Mart</strong>
  </div>
  <div>Attn: Daniel Marek</div>
  <div>43-190 Mikolow, Poland</div>
  <div>Email: marek@daniel.com</div>
  <div>Phone: +48 123 456 789</div>
  </div>
  
  
  
  </div>
  
  <div class="table-responsive-sm">
  <table class="table table-striped">
  <thead>
  <tr>
    
  <th class="center">#</th>

  <th>Item</th>
  <th>Author</th>
  
  <th class="right">Unit Cost</th>
    <th class="center">Qty</th>
  <th class="right">Total</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($orderdetails as $item)
  <tr>

  <td class="center">{{$item->id}}</td>
  <td class="left strong">{{$item->name}}</td>
  <td class="left">{{$item->author}}</td>
  
  <td class="right">{{$item->price}}</td>
    <td class="center">{{$item->quantity}}</td>
  <td class="right">{{$item->price * $item->quantity}}</td>
  
  </tr>
  @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th colspan="4" >total</th>
        <th>454</th>
        <th>{{$order[0]->total_amount}}</th>
    </tr>
  </tfoot>
  </table>
  </div>
  <div class="row">
  <div class="col-lg-4 col-sm-5">
  
  </div>
  
  <div class="col-lg-4 col-sm-5 ml-auto">
  {{-- <table class="table table-clear">
  <tbody>
  <tr>
  <td class="left">
  <strong>Subtotal</strong>
  </td>
  <td class="right">$8.497,00</td>
  </tr>
  <tr>
  <td class="left">
  <strong>Discount (20%)</strong>
  </td>
  <td class="right">$1,699,40</td>
  </tr>
  <tr>
  <td class="left">
   <strong>VAT (10%)</strong>
  </td>
  <td class="right">$679,76</td>
  </tr>
  <tr>
  <td class="left">
  <strong>Total</strong>
  </td>
  <td class="right">
  <strong>$7.477,36</strong>
  </td>
  
  </tr>
        
 
  </tbody>
  </table> --}}
  
  </div>
  
  </div>
  
  </div>
  </div>
  </div>

</body>
</html>