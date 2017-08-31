<?php
    include("includes/booking_management.php");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4 class="text-center">Select a Date</h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
                    <input type="date" class="form-control">
                </div>
               <br>
               <h4 class="text-center">Or Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bookingManagementModal"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h4 class="text-center">Bookings List</h4>
                <!--http://secondtruth.github.io/startmin/pages/index.html-->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Phone</th>
                                <th>Date/Time</th>
                                <th>People</th>
                                <th>Table</th>
                                <th>Status</th>
                            </tr>
                            <tbody>
                                <tr class="info">
                                    <td>1</td>
                                    <td>0405002255</td>
                                    <td>31/08/2017 - 20:30</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>Not Seated</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>0405002255</td>
                                    <td>31/08/2017 - 20:30</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>Seated</td>
                                </tr>
                                <tr class="info">
                                    <td>1</td>
                                    <td>0405002255</td>
                                    <td>31/08/2017 - 20:30</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>Finished</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>0405002255</td>
                                    <td>31/08/2017 - 20:30</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>Canceled</td>
                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

