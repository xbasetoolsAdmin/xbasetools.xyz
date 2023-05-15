<thead>
    <tr>
      <th scope="col" >Country</th>
      <th scope="col" >State</th>
      <th scope="col" >Windows</th>
      <th scope="col" >Ram</th>
      <th scope="col">Access</th>
      <th scope="col">Detect Hosting</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  <tbody>
                                                                     </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content"> <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
          <span aria-hidden="true">&times;</span></button>
        <heading class="modal-title" id="myModalLabel"></heading>    </div>
      <div class="modal-body" id="modelbody">  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content"> <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
          <span aria-hidden="true">&times;</span></button>
      <heading class="modal-title" id="myModalLabel"></heading> </div>
      <div class="modal-body" id="modelbody"> </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  
$('#filterbutton').click(function () {
 
  $("#table tbody tr").each(
    function() {var ck1 = $.trim( $(this).find("#rdp_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#rdp_windows").text().toLowerCase() );var ck3 = $.trim( $(this).find("#rdp_access").text().toLowerCase() );var ck4 = $.trim( $(this).find("#rdp_hosting").text().toLowerCase() );var ck5 = $.trim( $(this).find("#rdp_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="rdp_country"]').val().toLowerCase() );var val2 = $.trim( $('select[name="rdp_windows"]').val().toLowerCase() );var val3 = $.trim( $('select[name="rdp_access"]').val().toLowerCase() );var val4 = $.trim( $('input[name="rdp_hosting"]').val().toLowerCase() );var val5 = $.trim( $('select[name="rdp_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || (ck2 != val2 && val2 != '' ) || (ck3 != val3 && val3 != '' ) || ck4.indexOf(val4)==-1 || (ck5 != val5 && val5 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});

  function buythistool(id){

    bootbox.confirm("Are you sure?", 
                    function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=rdps",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#rdp"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

</script>
