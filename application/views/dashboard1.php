  

      <div class="layout-content">
        <div class="layout-content-body">
          <div class="row">
            <div class="col-md-12">
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="demo-form-wrapper">
                  
                  <?php echo form_open_multipart('excelhandler/import_data1', 'class="form form-horizontal"');?>  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">Person Roster</label>
                    <div class="col-sm-5">
                      <input id="form-control" name="userfile1" id="userfile1" class="btn btn-default" type="file" required>
                    </div>
                    <div class="col-sm-1">
                      <a href='<?=base_url();?>assets/personroaster.xlsx' target="_blank"><span class="icon icon-file-excel-o"></span></a>
                    </div>
                    <div class="col-sm-1">
                    
                     <button class="file-upload-btn btn btn-primary" type="submit">Upload</button>
                    </div>
                    <?php

                      $session_data = $this->session->all_userdata();
                      $person_roster = $this->db->query("SELECT * FROM person_roster where login_id = '".$session_data['id']."'")->result();
          
                      if(count($person_roster) > 0){

                    ?>
                    <div class="col-sm-2"><img width="15%"src="<?=base_url();?>assets/img/tick.gif"></div> 
                    <?php  

                      }


                    ?>
                  </div>
                  </form>
                  <?php echo form_open_multipart('excelhandler/import_data2', 'class="form form-horizontal"');?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">Vendor Master</label>
                    <div class="col-sm-5">
                      <input id="form-control" name="userfile2" id="userfile2" class="btn btn-default" type="file" required>
                    </div>
                    <div class="col-sm-1">
                      <a href='<?=base_url();?>assets/vendorroaster.xlsx' target="_blank"><span class="icon icon-file-excel-o"></span></a>
                    </div>
                    <div class="col-sm-1">
                      <button class="file-upload-btn btn btn-primary" type="submit" name= "submit" >Upload</button>
                      
                    </div>
                    
                    <?php

                      $car_vendor_master = $this->db->query("SELECT * FROM car_vendor_master where login_id = '".$session_data['id']."'")->result();
          
                      if(count($car_vendor_master) > 0){

                    ?>

                    <div class="col-sm-2"><img width="15%"src="<?=base_url();?>assets/img/tick.gif"></div> 
                    <?php  

                      }


                    ?>
                  </div>
                  </form>
                   <?php echo form_open_multipart('excelhandler/import_data3', 'class="form form-horizontal"');?> 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">Driver Master</label>
                    <div class="col-sm-5">
                      <input id="form-control-4" name="userfile3" id="userfile3" class="btn btn-default" type="file" required>
                    </div>
                    <div class="col-sm-1">
                      <a href='<?=base_url();?>assets/driverroaster.xlsx' target="_blank"><span class="icon icon-file-excel-o"></span></a>
                    </div>
                    <div class="col-sm-1">
                    
                      <button class="file-upload-btn btn btn-primary" type="submit">Upload</button>
                    </div>
                    <?php

                      $driver_master = $this->db->query("SELECT * FROM driver_master where login_id = '".$session_data['id']."'")->result();
          
                      if(count($driver_master) > 0)  {

                    ?>
                    <div class="col-sm-2"><img width="15%"src="<?=base_url();?>assets/img/tick.gif"></div> 
                    <?php  

                      }


                    ?>
                  </div>
                  </form>
                  
               
              </div>
            </div>
            <div class="col-sm-12">
              <div class="demo-form-wrapper">
                  <div class="form-group">
                    <div class="col-sm-5">
                      
                    </div>
                    <?php  if((count($driver_master) > 0) && (count($person_roster) > 0) && (count($car_vendor_master) > 0)){ ?>
                    <div class="col-sm-7">
                      <button class="btn btn-info" onclick="location.href='<?php echo base_url();?>dashboard/dashboard2'">Proceed</button> 
                    </div>
                    <?php } ?>  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.4.0</small>
          <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
        </div>
      </div>
    </div>
    <div class="theme">
      <div class="theme-panel theme-panel-collapsed">
        <div class="theme-panel-controls">
          <button class="theme-panel-toggler" title="Expand theme panel ( ] )" type="button">
            <span class="icon icon-cog icon-spin" aria-hidden="true"></span>
          </button>
        </div>
        <div class="theme-panel-body">
          <div class="custom-scrollbar">
            <div class="custom-scrollbar-inner">
              <h5 class="theme-heading">
                <a href="http://demo.madebytilde.com/elephant/buy" class="btn btn-primary btn-block">Buy Elephant Now!</a>
              </h5>
              <ul class="theme-settings">
                <li class="theme-settings-heading">
                  <div class="divider">
                    <div class="divider-content">Theme Settings</div>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Header fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar sticky*</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar collapsed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Footer fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-description">
                  <span>
                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached. <a href="page-layouts.html">Learn more</a></span>
                </li>
              </ul>
              <hr class="theme-divider">
              <ul class="theme-variants">
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-1/" title="Theme 1">
                    <img class="img-responsive" src="img/f420a3cea0fb04862eb630f5a54b2733.jpg" alt="Theme 1">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="index.html" title="Theme 2">
                    <img class="img-responsive" src="img/3dd124286157b729cc38d9bd7045e384.jpg" alt="Theme 2">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-3/" title="Theme 3">
                    <img class="img-responsive" src="img/35e0765272cd421a5352331003ae2ab1.jpg" alt="Theme 3">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-4/" title="Theme 4">
                    <img class="img-responsive" src="img/4fcb4322807f1fd92aa3140adb37d4d9.jpg" alt="Theme 4">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-5/" title="Theme 5">
                    <img class="img-responsive" src="img/b787e62313c23880e0797bfbbc3d150c.jpg" alt="Theme 5">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-6/" title="Theme 6">
                    <img class="img-responsive" src="img/7489e404fb5088d63e5a5d55b27d546c.jpg" alt="Theme 6">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-7/" title="Theme 7">
                    <img class="img-responsive" src="img/972b6c5882a45ee73d83a90a9852660c.jpg" alt="Theme 7">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-8/" title="Theme 8">
                    <img class="img-responsive" src="img/0100e8b81ad03f81a64a0a5f49c5be41.jpg" alt="Theme 8">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-9/" title="Theme 9">
                    <img class="img-responsive" src="img/69ece2eb60bdd2126e2acf27af43aa9b.jpg" alt="Theme 9">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-10/" title="Theme 10">
                    <img class="img-responsive" src="img/2ef1cfdcf1da5256d7b994983bd8d457.jpg" alt="Theme 10">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-11/" title="Theme 11">
                    <img class="img-responsive" src="img/cca2226fdaba079b321ba5cf05ba0adc.jpg" alt="Theme 11">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-12/" title="Theme 12">
                    <img class="img-responsive" src="img/7a4ee939781f6165006cff1b5b8096d4.jpg" alt="Theme 12">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div 

      <!-- End Page -->
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.4.0</small>
          <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
        </div>
      </div>
    </div>
    <div class="theme">
      <div class="theme-panel theme-panel-collapsed">
        <div class="theme-panel-controls">
          <button class="theme-panel-toggler" title="Expand theme panel ( ] )" type="button">
            <span class="icon icon-cog icon-spin" aria-hidden="true"></span>
          </button>
        </div>
        <div class="theme-panel-body">
          <div class="custom-scrollbar">
            <div class="custom-scrollbar-inner">
              <h5 class="theme-heading">
                <a href="http://demo.madebytilde.com/elephant/buy" class="btn btn-primary btn-block">Buy Elephant Now!</a>
              </h5>
              <ul class="theme-settings">
                <li class="theme-settings-heading">
                  <div class="divider">
                    <div class="divider-content">Theme Settings</div>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Header fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar sticky*</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar collapsed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Footer fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-description">
                  <span>
                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached. <a href="page-layouts.html">Learn more</a></span>
                </li>
              </ul>
              <hr class="theme-divider">
              <ul class="theme-variants">
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-1/" title="Theme 1">
                    <img class="img-responsive" src="img/f420a3cea0fb04862eb630f5a54b2733.jpg" alt="Theme 1">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="index.html" title="Theme 2">
                    <img class="img-responsive" src="img/3dd124286157b729cc38d9bd7045e384.jpg" alt="Theme 2">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-3/" title="Theme 3">
                    <img class="img-responsive" src="img/35e0765272cd421a5352331003ae2ab1.jpg" alt="Theme 3">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-4/" title="Theme 4">
                    <img class="img-responsive" src="img/4fcb4322807f1fd92aa3140adb37d4d9.jpg" alt="Theme 4">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-5/" title="Theme 5">
                    <img class="img-responsive" src="img/b787e62313c23880e0797bfbbc3d150c.jpg" alt="Theme 5">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-6/" title="Theme 6">
                    <img class="img-responsive" src="img/7489e404fb5088d63e5a5d55b27d546c.jpg" alt="Theme 6">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-7/" title="Theme 7">
                    <img class="img-responsive" src="img/972b6c5882a45ee73d83a90a9852660c.jpg" alt="Theme 7">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-8/" title="Theme 8">
                    <img class="img-responsive" src="img/0100e8b81ad03f81a64a0a5f49c5be41.jpg" alt="Theme 8">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-9/" title="Theme 9">
                    <img class="img-responsive" src="img/69ece2eb60bdd2126e2acf27af43aa9b.jpg" alt="Theme 9">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-10/" title="Theme 10">
                    <img class="img-responsive" src="img/2ef1cfdcf1da5256d7b994983bd8d457.jpg" alt="Theme 10">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-11/" title="Theme 11">
                    <img class="img-responsive" src="img/cca2226fdaba079b321ba5cf05ba0adc.jpg" alt="Theme 11">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.madebytilde.com/elephant-v1.4.0/theme-12/" title="Theme 12">
                    <img class="img-responsive" src="img/7a4ee939781f6165006cff1b5b8096d4.jpg" alt="Theme 12">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="theme-panel-footer">
          <a class="rounded sq-36 bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;t=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device" title="Share on Facebook" target="_blank">
            <span class="icon icon-facebook"></span>
          </a>
          <a class="rounded sq-36 bg-twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;text=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;via=madebytilde" title="Tweet" target="_blank">
            <span class="icon icon-twitter"></span>
          </a>
          <a class="rounded sq-36 bg-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on Google+" target="_blank">
            <span class="icon icon-google-plus"></span>
          </a>
          <a class="rounded sq-36 bg-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;title=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&amp;summary=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.&amp;source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on LinkedIn" target="_blank">
            <span class="icon icon-linkedin"></span>
          </a>
          <a class="rounded sq-36 bg-pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&amp;media=http://demo.madebytilde.com/elephant.jpg&amp;description=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner." title="Pin it" target="_blank">
            <span class="icon icon-pinterest-p"></span>
          </a>
          <a class="rounded sq-36 bg-default" href="mailto:?subject=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&body=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Send email" target="_blank">
            <span class="icon icon-envelope-o"></span>
          </a>
        </div>
      </div>
    </div>
