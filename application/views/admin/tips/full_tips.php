<script>
function goBack() {
    window.history.back();
}
</script>





<?php foreach ($tips_list as $row){ ?>
<br />
<table>
  <tr>
    <td>Title</td>
    <td style="width:5px">:</td>
    <td><?php echo $row->title; ?></td>
  </tr>
  <tr>
    <td>Summary</td>
    <td>:</td>
    <td><?php echo $row->summary; ?></td>
  </tr>
  <tr>
    <td>Author</td>
    <td>:</td>
    <td>  <?php echo $row->name_author; ?></td>
  </tr>
  <tr>
    <td>Tips Description</td>
    <td>:</td>
    <td> <?php echo $row->tips_desc; ?></td>
  </tr>
</table>
<?php }?>

<button onclick="goBack()">Go Back</button>



<!-- End -->
    