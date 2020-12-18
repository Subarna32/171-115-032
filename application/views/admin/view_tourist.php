
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Tourist Attraction <b>Details</b></h2></div>
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
                        <th>Place Name</th>
                        <th>Description</th>
                        <th>Short Description</th>
                        <th>Image1</th>
                        <th>Image2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_tourist as $tourist) { ?> 
						<tr>
							<td><?=$tourist['ID']?></td>
							<td><?=$tourist['Name']?></td>
							<td><?=$tourist['Description']?></td>
							<td><?=$tourist['Sdescription']?></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$tourist['Image1']?>" alt="" /></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$tourist['Image2']?>" alt="" /></td>
							<td>
								<a href="<?=base_url()?>admin/edit_tourist/<?=$tourist['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>admin/delete_tourist/<?=$tourist['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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