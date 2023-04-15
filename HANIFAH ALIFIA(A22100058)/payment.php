<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM PAY</title>
    <link rel="stylesheet" href="css/payment.css" type="text/css">
    <script src="js/javascript.js" type="text/javascript"></script>
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="container">
    <h1 style="margin:30px;">PAYMENT</h1>
    <form class="" action="payment.html" method="post">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Nama">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Pelayanan Service">
      <input required class="input-form-number laf" type="number" name="" value="1" placeholder="Jumlah" ng-model="jumlah">
      <input required class="input-form-number laf" type="number" name="" value="{{100000}}" placeholder="Harga" ng-model="harga">
      <input disabled required class="input-form-value" type="number" name="" value="{{jumlah*harga*10/100}}" placeholder="Total sudah termasuk Diskon" ng-model="total">
      <textarea class="input-form" cols="5" rows="5" name="comment" placeholder="Catatan" required></textarea>
      </textarea>
      <button class="btn-form-pay">Pay</button>
      <button class="btn-form-change" id="myBtn">Batal</button>
    </form>
  </div>
   <!-- footer -->
	<footer>
		<div class="footer">
			<small>Copyright &copy; 2023 - Hanifah Alifia. All Rights Reserved.</small>
		</div>
	</footer>
    
  </body>
</html>
