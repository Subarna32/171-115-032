
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper2">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Hotel <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" value="<?=set_value('Hotel_name')?>" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hotel Name</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Contact</th>     
                        <th>Room Number</th>
                        <th>Room Description</th>
                        <th>Room Type</th>
                        <th>Price</th>
                        <th>Image1</th>
                        <th>Image2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_hotel as $hotel) { ?> 
						<tr>
							<td><?=$hotel['ID']?></td>
							<td><?=$hotel['Hotel_name']?></td>
							<td><?=$hotel['Description']?></td>
							<td><?=$hotel['Address']?></td>
							<td><?=$hotel['Phone']?></td>
							<td><?=$hotel['Room_no']?></td>
							<td><?=$hotel['Room_description']?></td>
							<td><?=$hotel['Room_Type']?></td>
							<td><?=$hotel['Price']?></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$hotel['Photo1']?>" alt="" /></td>
							<td><img style="width:50px ; height:50px;" src="<?=base_url()?>images/<?=$hotel['Photo2']?>" alt="" /></td>
							<td>
								<a href="<?=base_url()?>hotel/edit_hotel/<?=$hotel['ID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
								<a href="<?=base_url()?>hotel/delete_hotel/<?=$hotel['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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