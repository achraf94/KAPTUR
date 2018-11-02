
<link rel="stylesheet" href="<?php echo base_url()."assets/node_modules/chosen-js/chosen.css"?>">
<script src="<?php echo base_url()."assets/node_modules/jquery\dist/jquery.js"?>"></script>
<script src="<?php echo base_url()."assets/node_modules/chosen-js/chosen.jquery.js"?>"></script>

<select class="chosen">

<?php foreach($issues as $row){
?>
<option <?php echo $row->Issue_ID;?> > <?php echo $row->Issue_Descr;?> </option>
<?php
}?>

</select>

<script>

$(function(){
$(".chosen").chosen({width:400});
});

</script>