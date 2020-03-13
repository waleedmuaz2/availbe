@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
    <div class="container pt-90 pb-50">
      <div class="section-content pt-100">
        <div class="row"> 
          <div class="col-md-12">
            <h3 class="title text-white">Shop Checkout</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="section-content">
        <div class="row mt-30">
          <form id="checkout-form" action="#">
            <div class="col-md-6">
              <div class="billing-details">
                <h3 class="mb-30">Billing Details</h3>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="checkuot-form-fname">First Name</label>
                    <input id="checkuot-form-fname" type="email" class="form-control" placeholder="First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="checkuot-form-lname">Last Name</label>
                    <input id="checkuot-form-lname" type="email" class="form-control" placeholder="Last Name">
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="checkuot-form-cname">Company Name</label>
                      <input id="checkuot-form-cname" type="email" class="form-control" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                      <label for="checkuot-form-email">Email Address</label>
                      <input id="checkuot-form-email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <label for="checkuot-form-address">Address</label>
                      <input id="checkuot-form-address" type="email" class="form-control" placeholder="Street address">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="checkuot-form-city">City</label>
                    <input id="checkuot-form-city" type="email" class="form-control" placeholder="City">
                  </div>
                  <div class="form-group col-md-6">
                    <label>State/Province</label>
                    <select class="form-control">
                      <option>Select Country</option>
                      <option>Australia</option>
                      <option>UK</option>
                      <option>USA</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="checkuot-form-zip">Zip/Postal Code</label>
                    <input id="checkuot-form-zip" type="email" class="form-control" placeholder="Zip/Postal Code">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Country</label>
                    <select class="form-control">
                      <option>Select Country</option>
                      <option>Australia</option>
                      <option>UK</option>
                      <option>USA</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="shipping-details">
                <h3 class="mb-30"> Ship to a different address?
                  <span class="checkbox pull-right mt-0">
                    <label>
                      <input type="checkbox" id="checkbox-ship-to-different-address" value="option1" aria-label="...">
                    </label>
                  </span>
                </h3>
                <div id="checkout-shipping-address">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-fname2">First Name</label>
                      <input id="checkuot-form-fname2" type="email" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-lname2">Last Name</label>
                      <input id="checkuot-form-lname2" type="email" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="checkuot-form-cname2">Company Name</label>
                        <input id="checkuot-form-cname2" type="email" class="form-control" placeholder="Company Name">
                      </div>
                      <div class="form-group">
                        <label for="checkuot-form-email2">Email Address</label>
                        <input id="checkuot-form-email2" type="email" class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <label for="checkuot-form-address2">Address</label>
                        <input id="checkuot-form-address2" type="email" class="form-control" placeholder="Street address">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-city2">City</label>
                      <input id="checkuot-form-city2" type="email" class="form-control" placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                      <label>State/Province</label>
                      <select class="form-control">
                        <option>Select Country</option>
                        <option>Australia</option>
                        <option>UK</option>
                        <option>USA</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-zip2">Zip/Postal Code</label>
                      <input id="checkuot-form-zip2" type="email" class="form-control" placeholder="Zip/Postal Code">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Country</label>
                      <select class="form-control">
                        <option>Select Country</option>
                        <option>Australia</option>
                        <option>UK</option>
                        <option>USA</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Order Notes</label>
                  <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h3>Your order</h3>
              <table class="table table-striped table-bordered tbl-shopping-cart">
                <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="http://placehold.it/285x300"></a></td>
                    <td><a href="#">Steering Wheels</a> x 2</td>
                    <td><span class="amount">$36.00</span></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="http://placehold.it/285x300"></a></td>
                    <td><a href="#">Super Plus Spark</a> x 3</td>
                    <td><span class="amount">$115.00</span></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="http://placehold.it/285x300"></a></td>
                    <td><a href="#">Intercooloers</a> x 1</td>
                    <td><span class="amount">$68.00</span></td>
                  </tr>
                  <tr>
                    <td>Cart Subtotal</td>
                    <td>&nbsp;</td>
                    <td>$180.00</td>
                  </tr>
                  <tr>
                    <td>Shipping and Handling</td>
                    <td>&nbsp;</td>
                    <td>Free Shipping</td>
                  </tr>
                  <tr>
                    <td>Order Total</td>
                    <td>&nbsp;</td>
                    <td>$250.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <h3>Payment Information</h3>
              <div class="payment-method">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option1" checked>
                    Direct Bank Transfer </label>
                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option2" checked>
                    Cheque Payment </label>
                  <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option3" checked>
                    PayPal Payment </label>
                  <p>Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="text-right"> <a class="btn btn-default">Place Order</a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection