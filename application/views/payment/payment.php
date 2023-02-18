<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                        Payment Succeed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
                        Payment Failed
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form action="" method="post" id="checkout_form" class="main-form">

                        <input type="hidden" id="payment_method" value="stripe">

                        <div id="payment_section">
                            <h3 class="mb-3 mt-5">Payment</h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="stripe-tab" data-target="stripe" data-bs-toggle="tab" href="#stripe" role="tab" aria-controls="stripe" aria-selected="true">Stripe</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="paypal-tab" data-target="paypal" data-bs-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">Paypal</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="stripe" role="tabpanel" aria-labelledby="stripe-tab">
                                    <div class="m-5 row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="card_expiry_month" class="control-label">Card Number</label>
                                                <input type="text" class="form-control" id="card_number" name="card_number" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="card_expiry_month" class="control-label">Card Expiry Month</label>
                                                <input type="text" class="form-control" id="card_expiry_month" name="card_expiry_month" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="card_expiry_month" class="control-label">Card Expiry Year</label>
                                                <input type="text" class="form-control" id="card_expiry_year" name="card_expiry_year" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="card_expiry_month" class="control-label">Card CVC Number</label>
                                                <input type="text" class="form-control" id="card_cvc_number" name="card_cvc_number" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade m-5" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                    Paypal Selected
                                </div>
                            </div>
                        </div>

                        <button type="submit" id="checkout_submit">Checkout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script><script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr('data-target');
        $('#payment_method').val(target);
    });

    //checkout process
    $(document).on('submit', '#checkout_form', function (e) {

        e.preventDefault();

        let submitBtn = $('#checkout_submit');

        let formData = new FormData(this);
        let method = this.method;
        let action = this.action;

        let card_number = $('#card_number').val();
        let cvc = $('#card_cvc_number').val();
        let exp_mont = $('#card_expiry_month').val();
        let exp_year = $('#card_expiry_year').val();

        let payment_method = $('#payment_method').val();

        if(payment_method === "paypal") {
            window.location.href = "<?= site_url('paypal') ?>";
        } else {

            Stripe.setPublishableKey("<?= $this->config->item('stripe_publishable_key') ?>");
            Stripe.createToken({
                number: card_number,
                cvc: cvc,
                exp_month: exp_mont,
                exp_year: exp_year
            }, stripeResponseHandler);

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    console.log(response.error.message);
                } else {
                    var token = response['id'];
                    formData.append('stripeToken', token);

                    sendRequest();
                }
            }

        }

        function sendRequest() {
            let endpoint;
            if(payment_method === "paypal"){
                endpoint = '<?= site_url('paypal') ?>';
            }else{
                endpoint = '<?= site_url('stripe') ?>';
            }

            $.ajax({
                type: method,
                url: endpoint,
                data: formData,
                beforeSend: function () {
                    submitBtn.text('processing...');
                },
                complete: function(){
                    submitBtn.text('Checkout');
                },
                contentType: false,
                processData: false,
                success: function (data) {
                    let response = JSON.parse(data);
                    let status = Number(response.status);
                    let message = response.message;

                    if (status === 1) {

                        console.log(message);
                        $('.alert-success').removeClass('d-none');

                    } else {
                        $('.alert-danger').removeClass('d-none');
                        console.log(message);

                    }
                },
                error: function () {
                    console.log('An error occurred while processing your request');
                }
            });
        }
    });

</script>

</div>
   
</body>
</html> 
