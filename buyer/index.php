<?php require('header.php');?>
<script>
  $(function(){$("*[divPage-html]").each(function(){var t=$(this).attr("divPage-html"),u=this.id;jQuery.ajax({url:t,success:function(t){$("#"+u).html(t)},error:function(n,c,i){var s=n.status+": "+n.statusText;$("#"+u).html(t+"-"+s)}})})});
 </script>































<?php require('footer.php');?>
