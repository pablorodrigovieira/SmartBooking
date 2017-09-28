<!-- Modal -->
<div id="chooseTableModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" id="teste">

    <!-- Modal content-->
    <div id="landscape" class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title title-red">Choose a Table</h3>
        </div>
        <div class="modal-body" id="restaurant">
            <div class="row">
              <div class="col-md-12 col-xs-12"  >
                <div class="row pad3">
                  <div class="col-md-2 col-md-offset-3 col-xs-2 col-xs-offset-3">
                      <a class="<?php echo $tableN01Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img  data-id="1" class="seats2" src="/images/1.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                      <a class="<?php echo $tableN02Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="2" class="seats2" src="/images/2.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                     <a class="<?php echo $tableN03Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="3" class="seats2" src="/images/3.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                      <a class="<?php echo $tableN04Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="4" class="seats2" src="/images/4.svg"></img></a>
                  </div>
                </div>
                <div class="row pad3">
                  <div class="col-md-2 col-md-offset-3 col-xs-2 col-xs-offset-3">
                      <a class="<?php echo $tableN05Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="5" class="seats4" src="/images/5.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                      <a class="<?php echo $tableN06Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="6" class="seats4" src="/images/6.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                     <a class="<?php echo $tableN07Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="7" class="seats4" src="/images/7.svg"></img></a>
                  </div>
                </div>
                <div class="row pad3" style="margin-bottom: 5%">
                  <div class="col-md-3 col-md-offset-3 col-xs-3 col-xs-offset-3">
                     <a class="<?php echo $tableN08Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="8" class="seats6" src="/images/8.svg"></img></a>
                  </div>
                  <div class="col-md-3 col-xs-3">
                     <a class="<?php echo $tableN09Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="9" class="seats6" src="/images/9.svg"></img></a>
                  </div>
                  <div class="col-md-2 col-xs-2">
                      <a class="<?php echo $tableN10Status; ?> table" href="#" data-toggle="modal" data-target="#bookingConfirmationModal"><img data-id="10" class="seats4" src="/images/10.svg"></img></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script>

  //Pass the table id with click
  var table_no;
  $(".table").click(function(event)
  {
    table_no = $(event.target).data("id");
    $("#table").val(table_no);
  });
  
</script>
<?php 
  include("includes/booking_confirmation.php");
?>