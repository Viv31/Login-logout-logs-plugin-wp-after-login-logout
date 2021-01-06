<table border="1" align="center" style="margin-top:200px; ">
	<tr>
		<th>Sno</th>
		<th>IP</th>
		<th>Username</th>
		<th>Event</th>
		<th>Time</th>
	</tr>
<?php
global $wpdb;
   $get_logs ="SELECT * FROM Login_audit";
   $log_data = $wpdb->get_results($get_logs);  
  /* print_r($log_data);
   die;*/
   if($log_data!=""){
   foreach ($log_data as $Data) {
      ?>
      <tr>
      <td><?php echo $Data->id; ?></td> 
      <td><?php echo $Data->ip; ?></td>
      <td><?php echo $Data->username; ?></td>
      <td><?php echo $Data->event; ?></td>
      <td><?php echo $Data->event_time; ?></td>
  </tr>
      <?php
   }
   }
   else{
   	?>
   	<tr>
   		<td>No data Found</td>
   	</tr>

   	<?php
   }
   ?>

</table>