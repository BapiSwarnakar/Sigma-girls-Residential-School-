<style>


.{
  margin: 0
}

.regcontainer {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 80vh;
  background-color: whitesmoke;
}

.regcontainer h1 {
  color: white;
  font-family: sans-serif;
  margin: 10px;
}

.registartion-form {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 600px;
  color: rgb(255, 255, 255);
  font-size: 14px;
  font-family: arial;
  background-color: #39b4fa;
  padding: 10px;
}

.registartion-form input,
.registartion-form select,
.registartion-form textarea {
  border: none;
  padding: 5px;
  margin-top: 10px;
  font-family: sans-serif;
}

.registartion-form input:focus,
.registartion-form textarea:focus {
  box-shadow: 3px 3px 10px rgb(228, 228, 228), -3px -3px 10px rgb(224, 224, 224);
}

.registartion-form .submit {
  width: 100%;
  padding: 8px 0;
  font-size: 20px;
  color: white;
  background-color: #0466dd;
  border-radius: 5px;
}

.registartion-form .submit:hover {
  box-shadow: 3px 3px 6px rgb(0, 214, 0);
}
</style>
<!--------------css for reg form   onsubmit="return formValidation()" ------------>





<div class="regcontainer">
  <h2>Payment & Donation</h2>
  <h4>Have You Paid Membership Fee? <a href="#">Update Details Now</a></h4>
   

   

  <form name="submit_pay" class=""  method="post" action="<?php echo base_url() ?>Welcome_ctrl/save_pay" >
   
    <table class="registartion-form">
      <tr>
        <td><label for="name">Payment Date:</label></td>
        <td> <input Class="form-control" type="date" name="pay_date" id="pay_date" placeholder="Payment Date" value="<?= set_value('pay_date'); ?>">
             <h5 style="color: #b00b0b"><?php echo form_error('pay_date'); ?></h5>
        </td>
      </tr>
      
      <tr>
        <td><label for="phoneNumber">Amount :</label></td>
        <td> <input Class="form-control" type="number" name="amount" id="amount" value="<?= set_value('amount'); ?>">
          <h5 style="color: #b00b0b"><?php echo form_error('amount'); ?></h5>

        </td>
      </tr>
      
      
      <tr>
        <td><label for="work">Payment Purpose</label></td>
        <td>
          <select name="purpose" id="purpose" Class="form-control">
            <option value="">Select Purpose</option>
            <option value="Membeship Fee">Membeship Fee</option>
            <option value="Donation">Donation</option>
            <option value="Other">Other</option>
          </select>
        </td>
      </tr>

      <tr>
        <td><label for="work">Payment Method</label></td>
        <td>
          <select name="method" id="method" Class="form-control">
            <option value="">Select Payment Method</option>
            <option value="Cash">Cash</option>
            <option value="Cheque or Demand Draft">Cheque or Demand Draft</option>
            <option value="Account Transfer">Acount Transfer</option>
            <option value="UPI">UPI / Gpay /Phone Pay</option>
            <option value="Other">Other</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="batch">Transaction ID</label></td>
        <td>
         <input Class="form-control" type="text" name="tran_id" id="tran_id" value="<?= set_value('tran_id'); ?>">
        </td>
      </tr>
      <tr>
        <td><label for="batch">Transaction Attachment (If Any)</label></td>
        <td>
         <input Class="form-control" type="file" name="tran_img" id="tran_img" >
        </td>
      </tr>
      <tr>
        <td><label for="batch">Transaction Detail</label></td>
        <td>
         <input Class="form-control" type="textarea" name="tran_dtl" id="tran_dtl" >
        </td>
      </tr>
        <script type="text/javascript">
          function myfun(){
             document.getElementById("name").value = <?php echo $name;?>; 
                  }
        </script>

       
      <input type="text" name="name" id="name"  onloadeddata="myfun()">
      <input type="text" name="id" id="id"  value="<?= set_value('$id'); ?>">
      <tr>
        <td ></td><td> <input  type="submit" name="submit_pay" class="submit" value="  Submit Payment Details " /></td>
      </tr>
    </table>
  </form>
</div>

<br>
