

<?php include "header.php";?>

<style>
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_paginate .paginate_button.disabled:active {

    color: var(--font-color);

}
.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#rdp_data_filter{
  color: var(--font-color);
}
#rdp_data_length{
  color: var(--font-color);
}
#rdp_data_paginate{
  color: var(--font-color);
}
#rdp_data_info{
  color: var(--font-color);
}
</style>


<div class="rdp_data.html" id="rdp"></div>

             






















<?php include "footer.php";?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="divPage.min.js"></script>


</body>
</html>
