<?php
    //echo "This is small project to learn PHP";
    require 'components/header.php'  // bắt buộc phải có
?>
<h1>Enter your feedback here</h1>
<form action="">
<div class="mb-3">
    <input type="text" class="form-control" name="name" placeholder="What is your name?" >
</div>
<div class="mb-3">
    <input type="email" class="form-control" name="email" placeholder="Enter your email" >
</div>
<div class="mb-3">
    <textarea class="form-control" name="feedback" placeholder="Enter your feedback" rows="2"></textarea>
</div>
<div class="mb-3">
    <input type="submit" class="btn btn-primary" name="submit" value="Send">
</div>
</form>
<?php include 'components/footer.php'; ?>  <!--không bắt buộc -->
