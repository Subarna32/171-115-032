
<section id="main-content">
	<section class="wrapper">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
		<?php echo $this->session->flashdata('message'); ?>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Bookings <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" value="<?=set_value('bookings_name')?>" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        
						<th>Name</th>
						<th>Email</th>
						<th>Contact</th>
                        <th>Room No</th>
                        <th>Room Type</th>
                        <th>Date</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view_bookings as $bookings) { ?> 
						<tr>
							
							<td><?=$bookings['Name']?></td>
							<td><?=$bookings['Email']?></td>
							<td><?=$bookings['Mobile']?></td>
							<td><?=$bookings['Room_no']?></td>
							<td><?=$bookings['Room_Type']?></td>
							<td><?=$bookings['date']?></td>
							<td>
								<a href="<?=base_url()?>hotel/delete_bookings/<?=$bookings['ID']?>" onclick="return checkdelete()" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
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