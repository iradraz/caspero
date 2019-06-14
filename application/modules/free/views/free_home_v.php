
<?php $session_data = $this->session->userdata(); ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">  
                <div class="card-body">
                    <h5 class="card-title">Home Page for <?php echo $session_data['user_firstname']; ?></h5>
                    <p class="card-text">The system is under construction, please give us a Feedback here</p>
                    <a href="<?php echo base_url('/free/feedback'); ?>" class="card-link">Feedback our service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Caspero Wallet</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Soon you will be able to see all the transaction transparently</p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Capero Notes</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Make sure you subscribe for our latest updates!.</p>
                    <a href="<?php echo base_url('/free/subscribe'); ?>" class="card-link">Subscribe!</a>
                </div>
            </div>
        </div>
    </div>

    
    