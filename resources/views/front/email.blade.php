@include('layouts.css')
<div class="container">
    <div class="row gutters">
    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    		<div class="card" style="  background: #272E48;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;">
    			<div class="card-body p-0">
    				<div class="invoice-container" style="padding: 1rem;margin: 0.8rem 0 0 0;
                    display: inline-block;
                    font-size: 1.6rem;
                    font-weight: 700;
                    color: #bcd0f7;
                    max-width: 130px;font-size: 0.8rem;
    color: #8a99b5;
    margin: 0;
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 180%;
    background: #1a233a;
    text-align: right;
    font-size: 0.8rem;
    padding: 1rem 0 0 0;
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;">
    					<div class="invoice-header" style="margin: 0.8rem 0 0 0;
                        display: inline-block;
                        font-size: 1.6rem;
                        font-weight: 700;
                        color: #bcd0f7;
                        max-width: 130px;font-size: 0.8rem;
    color: #8a99b5;
    margin: 0;">

    						<!-- Row start -->
    						<div class="row gutters">
    							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    								<a href="" class="invoice-logo" style="margin: 0.8rem 0 0 0;
                                    display: inline-block;
                                    font-size: 1.6rem;
                                    font-weight: 700;
                                    color: #bcd0f7;
                                    max-width: 130px;">
    									BILLING DETAILS
    								</a>
    							</div>
    							<div class="col-lg-6 col-md-6 col-sm-6">
    								<address class="text-right">
    									SKYGM Inc, 45 NorthWest Street.<br>
    									Sunrise Blvd, San Francisco.<br>

    								</address>
    							</div>
    						</div>
    						<!-- Row end -->

    						<!-- Row start -->
    						<div class="row gutters">
    							<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    								<div class="invoice-details" style=" margin: 1rem 0 0 0;
                                    padding: 1rem;
                                    line-height: 180%;
                                    background: #1a233a;
                                    text-align: right;
    font-size: 0.8rem;">
    									<address>
    										{{$info['name']}}<br>
    										{{$info['address']}}
    									</address>
    								</div>
    							</div>
    							<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    								<div class="invoice-details">
    									<div class="invoice-num" style=" text-align: right;
                                        font-size: 0.8rem;">
    										<div>{{$info['email']}}</div>
    										{{-- <div>January 10th 2020</div> --}}
    									</div>
    								</div>
    							</div>
    						</div>
    						<!-- Row end -->

    					</div>

    					<div class="invoice-body" style=" padding: 1rem 0 0 0;">

    						<!-- Row start -->
    						<div class="row gutters">
    							<div class="col-lg-12 col-md-12 col-sm-12">
    								<div class="table-responsive">
    									<table class="table custom-table m-0" style=" border: 1px solid #2b3958;    background: #1a243a;
                                        color: #bcd0f7;
                                        font-size: .75rem;">
    										<thead style="background: #2f71c1;">
    											<tr>
    												<th style=" border: 0;
                                                    color: #ffffff;">Items</th>
                                                    <th style=" border: 0;
                                                    color: #ffffff;">Image</th>
    												<th style=" border: 0;
                                                    color: #ffffff;">Product ID</th>
    												<th style=" border: 0;
                                                    color: #ffffff;">Quantity</th>
    												<th style=" border: 0;
                                                    color: #ffffff;">Sub Total</th>
    											</tr>
    										</thead>
    										<tbody>
                                                @foreach($cart as $item)
    											<tr>
    												<td>
    													{{$item->name}}
    													<p class="m-0 text-muted">
    														Reference site about Lorem Ipsum, giving information on its origins.
    													</p>
    												</td>
                                                    <td class="product-thumbnail">
                                                        <img
                                                                src="{{asset($item->options->img)}}"
                                                                class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                                alt="img" width="100" height="100"></td>
    												<td>{{$item->id}}</td>
    												<td>{{$item->quantity}}</td>
    												<td>{{number_format($item->price)}} VNĐ</td>
    											</tr>
                                                @endforeach
    											<tr>
    												<td>&nbsp;</td>
    												<td colspan="2">
    													<p>

    														Shipping &amp; Handling<br>
    														Tax<br>
    													</p>
    													<h5 class="text-success" style=" color: #c0d64a !important;"><strong>Grand Total</strong></h5>
    												</td>
    												<td>
    													<p>

    														30,000 VNĐ<br>
    														15,000 VNĐ<br>
    													</p>
    													<h5 class="text-success"><strong>{{number_format($total)}} VNĐ</strong></h5>
    												</td>
    											</tr>

    										</tbody>
    									</table>
    								</div>
    							</div>
    						</div>
    						<!-- Row end -->

    					</div>

    					<div class="invoice-footer" style=" text-align: center;
                        font-size: 0.7rem;
                        margin: 5px 0 0 0;">
    						Thank you for shopping at Skygm.
    					</div>

    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
