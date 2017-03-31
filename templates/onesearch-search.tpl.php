<?php ?>
<form name="searchForm" role="search" method="get" action="<?php print $formurl; ?>" enctype="application/x-www-form-urlencoded; charset=utf-8" target="_self" >

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-9 col-xs-9" style="padding-right:5px">
            <input class="form-control form-text" type="text" name="onesearch" />
        </div>
        <div class="col-md-1 col-sm-2 col-xs-2">
            <button class="btn btn-default form-submit btn-primary" value="Search" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
    </div>
    </div>

</form>
