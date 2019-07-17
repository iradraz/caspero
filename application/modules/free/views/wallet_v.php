<?php $session_data = $this->session->userdata(); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">  
                <div class="card-body">
                    <h5 class="card-title"><?php echo $session_data['user_firstname']; ?> Caspero Wallet</h5>
                    <p class="card-text">Reviewing your wallet data</p>

                </div>
            </div>
        </div>
    </div>
</div>