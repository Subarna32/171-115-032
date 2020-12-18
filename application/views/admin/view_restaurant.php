
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper2">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-lg-4"><h2>Restaurant <b>Details</b></h2></div>
                
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Restaurant Name</th>
                        <th>Description</th>
                        <th>Short Description</th>
                        <th>Address</th>
                        <th>Contact</th>
						<th>Cuisine</th>
						<th>Business Hours</th>
                        <th>Menu</th>
                        <th>Image1</th>
                        <th>Image2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_restaurant as $restaurant) { ?> 
						<tr>
							<td>
								<a href="<?=base_url()?>admin/edit_restaurant/<?=$restaurant['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>admin/delete_restaurant/<?=$restaurant['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
							</td>
							<td><?=$restaurant['ID']?></td>
							<td><?=$restaurant['Restaurant_Name']?></td>
							<td><?=$restaurant['Description']?></td>
							<td><?=$restaurant['Sdescription']?></td>
							<td><?=$restaurant['Address']?></td>
							<td><?=$restaurant['Phone']?></td>
							<td><?=$restaurant['Cuisine']?></td>
							<td><?=$restaurant['Business_hours']?></td>
							<td>
								<a href="<?=base_url()?>pdf/<?=$restaurant['Pdf']?>" class="view" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
							</td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$restaurant['Image1']?>" alt="" /></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$restaurant['Image2']?>" alt="" /></td>
							
							
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