<?php include('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Customers</h1>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
						<tr>
								<th width="10">#</th>
								<th>Photo</th>
								<th width="220">Caption</th>
								<th width="70">Name</th>
 								<th width="100">Date created</th>
 								<th width="100">Date Update</th>
								<th width="100">Change Status</th>
								<th width="90">Date & Time</th>
 								<th width="80">Action</th>
 							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT t1.postId, t1.user_id, t1.caption, t1.d_c, t1.d_u, t1.imagePost, t1.status,
	 													t2.user_id, t2.email FROM post t1 INNER JOIN tbl_user t2 ON t1.user_id = t2.user_id ORDER BY postId DESC ");															
							
							$statement->execute();
							 $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
							 foreach ($result as $row) {
								 $i++;
								 ?>
								<tr class="<?php if($row['status']==1) {echo 'bg-g';}else {echo 'bg-r';} ?>">
									<td><?php echo $i; ?></td>
									<td style="width:82px;"><img src="../images/<?php echo $row['imagePost']; ?>" alt="<?php echo $row['caption']; ?>" style="width:80px;"></td>
									<td><?php echo $row['caption']; ?></td> 
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['d_c']; ?></td>
									<td><?php echo $row['d_u']; ?></td> 
									<td>
										<?php if($row['status']==1) {echo 'Post';} else {echo 'Pending';} ?></td>
									<td>
										<a href="post-change-status.php?id=<?php echo $row['postId']; ?>" class="btn btn-success btn-xs">Change Status</a>
									</td>
						  			<td>										
										<a href="#" class="btn btn-danger btn-xs" data-href="post-delete.php?id=<?php echo $row['postId']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td> 
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this Product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>