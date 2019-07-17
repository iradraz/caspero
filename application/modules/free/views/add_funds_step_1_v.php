<?php $post_data = $this->input->post(); ?>
<div class="container">
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="1"
             aria-valuemin="0" aria-valuemax="100" style="width:1%">
            <span class="sr-only">70% Complete</span>
        </div>
    </div>
    <h3 class="text-center text-primary">Add funds into your account</h3>
    <form action="<?php echo base_url('/free/add_funds/2'); ?>" method="post">
        <div class="form-group text-info col-md-6">
            <label for="currency">Select Deposit Currency:</label>
            <select name="currency" style="display: block">
                <option value="<?php echo isset( $post_data['currency']); ?>" selected hidden><?php echo isset( $post_data['currency']); ?></option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="CAD">CAD</option>
                <option value="JPY">JPY</option>
            </select>
            <span class="text-danger"><?php echo form_error('currency'); ?></span>
        </div>
        <div class="form-group text-info col-md-6">
            <label for="amount">Amount:</label>
            <input type="number" step="0.01" class="form-control" id="amount" min="20" value="<?php echo set_value('amount'); ?>" placeholder="Enter amount of money to deposit" name="amount">
            <span class="text-danger"><?php echo form_error('amount'); ?></span>
        </div>
        <div class="form-group text-info col-md-6">
            <label for="creditcard">Credit Card Info:</label>
            <input type="" class="form-control" id="amount" placeholder="Credit Card #" name="creditcard">
            <label for="exp_date">Expiration Date:</label>
            <input type="number" step="1" min="1" max="12" class="form-control" id="expmm" placeholder="Expiration Month" name="exp_date_mm">
            <input type="number" step="1" min="2014" max="2040" class="form-control" id="expyyyy" placeholder="Expiration Year" name="exp_date_yyyy">
            <label for="exp_date">CVV:</label>
            <input type="number" step="1" min="100" max="999" class="form-control" id="cvv" placeholder="CVV" name="cvv">
        </div>
        <ul>
            <div>
                <button type="submit" class="btn btn-info">Proceed</button>
            </div>
        </ul>
    </form>

</div>