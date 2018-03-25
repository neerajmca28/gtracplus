
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav level-1">
                <li class="sidenav-search">
                  <form class="sidenav-form" action="http://demo.madebytilde.com/">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
                <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#103;</span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Dashboards</li>
                    
                    <li><a href="<?php echo base_url();?>dashboard/personrosterrecord">Person Roster</a></li><li><a href="<?php echo base_url();?>dashboard/vendormasterrecord">Vendor Master</a></li>
                    <li><a href="<?php echo base_url();?>dashboard/drivermasterrecord">Driver Master</a></li>
                  </ul>
                  <li class="sidenav-item">
                    <a href="<?php echo base_url();?>dashboard/mappingrecord">
                      <span class="sidenav-icon icon icon-works">&#103;</span>
                    <span class="sidenav-label">Mapping</span>
                    </a>
                  </li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>