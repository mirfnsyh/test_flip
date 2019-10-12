<?php 
require_once 'config/Config.php';

$addConfig = new Config();// add Config Setting

$config = $addConfig->ListConfig();

?>

<!-- DataTales Example -->
<div class="col-xs-12 col-sm-8">
	<div class="col-xs-12 own_button_position">
		<a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#myModal">
		    <span class="icon text-white-50">
		      <i class="fas fa-plus"></i>
		    </span>
		    <span class="text">Post Data</span>
		  </a>
	</div>
</div>

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Check Data</th>
          <th>Transactions Id</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Bank Code</th>
          <th>Account Number</th>
          <th>Beneficiary Name</th>
          <th>remark</th>
          <th>Time Served</th>
          <th>Fee</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
    	  <th>Check Data</th>
          <th>Transactions Id</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Bank Code</th>
          <th>Account Number</th>
          <th>Beneficiary Name</th>
          <th>remark</th>
          <th>Time Served</th>
          <th>Fee</th>
        </tr>
      </tfoot>
      <tbody>
      	<?php 
      		while($data = mysqli_fetch_array($listData)) {
		?>
			<tr>
				<td>
					 <a href="<?php echo $config['base_url']  ?>?page=checkData&id=<?php echo $data['id']; ?>&transactions_id=<?php echo $data['transactions_id']; ?>" class="btn btn-sm btn-primary btn-icon-split" >
					    <span class="icon text-white-50">
					      <i class="fas fa-redo"></i>
					    </span>
					    <span class="text">Check</span>
					  </a>
				</td>
				<td><?php echo $data['transactions_id']; ?></td>
				<td><?php echo $data['amount']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td><?php echo $data['bank_code']; ?></td>
				<td><?php echo $data['account_number']; ?></td>
				<td><?php echo $data['beneficiary_name']; ?></td>
				<td><?php echo $data['remark']; ?></td>
				<td><?php echo $data['time_served']; ?></td>
				<td><?php echo $data['fee']; ?></td>
			</tr>
		<?php
			}
      	?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Post Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
			<form method="POST" action="<?php echo $config['base_url'] ?>?page=postData">
				<div class="form-group">
				      <label>Bank Code :</label>
				      <input type="text" class="form-control" name="bank_code" value="" required>
			    </div>
			    <div class="form-group">
				      <label>Account Number :</label>
				      <input type="text" class="form-control" name="account_number" value="" required>
			    </div>
			    <div class="form-group">
				      <label>Amount :</label>
				      <input type="text" class="form-control" name="amount" value="" required>
			    </div>
			    <div class="form-group">
				      <label>Remark :</label>
				      <textarea class="form-control" name="remark" required></textarea>
			    </div>
			    <div class="form-group">
			    	<input type="submit" name="submit" value="Post" class="btn btn-primary">
			    </div>
			</form>
		<!-- end Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>