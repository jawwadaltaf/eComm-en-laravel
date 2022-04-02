@extends('layouts.master')
@section('content')
<div class="custom-product">
	
 <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
  @csrf
  <div class="form-group">
    <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label><br/>
    <input type="radio" value="Cash" name="payment" /> <span>Online Payment</span><br/>
    <input type="radio" value="Cash" name="payment" /> <span>EMI Payment</span><br/>
    <input type="radio" value="Cash" name="payment" /> <span>Payment On Delivery</span>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
  </div>
</div>
@endsection
