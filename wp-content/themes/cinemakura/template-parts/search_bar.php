<!-- <div class="mt-5 center-content">
<div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</div> -->
<div class="row justify-content-center mt-5">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' );?>" class="card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input name="s" id="s" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search for a discussion or movie">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>