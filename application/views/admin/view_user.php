
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>User <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" value="<?=set_value('Name')?>" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>	
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_user as $user) { ?> 
						<tr>
							
							<td><?=$user['ID']?></td>
							<td><?=$user['Name']?></td>
							<td><?=$user['Email']?></td>
							<td><?=$user['Mobile']?></td>
							<td><?=$user['Type']?></td>
							<td>
								<a href="<?=base_url()?>admin/edit_user/<?=$user['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>admin/delete_user/<?=$user['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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