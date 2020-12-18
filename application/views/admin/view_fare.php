
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Fare <b>Details</b></h2></div>
                   
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Fare(in TK)</th>
                        <th>Distance From</th>
                        <th>Distance To</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_fare as $fare) { ?> 
						<tr>
							<td><?=$fare['ID']?></td>
							<td><?=$fare['Name']?></td>
							<td><?=$fare['Fare']?></td>
							<td><?=$fare['Distance_frm']?></td>
							<td><?=$fare['Distance_to']?></td>
							<td>
								<a href="<?=base_url()?>admin/edit_fare/<?=$fare['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>admin/delete_fare/<?=$fare['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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