
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Emergency Service <b>Details</b></h2></div>
                 
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Organization/Service Name</th>
                        <th>Address</th>
						<th>Phone</th>
                        <th>Type</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emergency_service as $service) { ?> 
						<tr>
							<td><?=$service['ID']?></td>
							<td><?=$service['Organization_name']?></td>
							<td><?=$service['Address']?></td>
							<td><?=$service['Phone']?></td>
							<td><?=$service['Type']?></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$service['ImagePath']?>" alt="" /></td>
							<td>
								<a href="<?=base_url()?>admin/edit_emergency_service/<?=$service['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>admin/delete_emergency_service/<?=$service['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
							</td>
						</tr>		 
					<?php } ?>     
                </tbody>
            </table>
            
        </div>
    </div>  
</div>   
</section>
<br>
<br>