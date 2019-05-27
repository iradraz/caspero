
<div class="container">
    <h3 class="text-center text-info">Registration Form</h3>
    <form action="<?php echo base_url('/user/register'); ?>" method="post">
        <div class="form-group text-info">
            <label for="first">*First Name:</label>
            <input type="first" class="form-control" id="first" placeholder="Enter email" name="first">
            <label for="last">*Last Name:</label>
            <input type="last" class="form-control" id="last" placeholder="Enter email" name="last">
        </div>
        <div class="form-group text-info">
            <label for="phone">Phone Number:</label>
            <input type="phone" class="form-control" id="phone" placeholder="Enter email" name="phone">
        </div>
        <div class="form-group text-info">
            <label for="email">*Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group text-info">
            <label for="pwd">*Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>