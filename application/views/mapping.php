
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="row gutter-xs">
            <div class="col-xs-5">
              <div class="card">
                
                <div class="card-body" id="checkboxlist1">
                  <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th><input type="checkbox" name="vechile_no" class="selectall1"></th>
                        <th>Vechile No</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $session_data = $this->session->all_userdata();  // All Session Data Shows

                      $this->db->where("login_id", $session_data['id']);

                      $value = $this->db->query("SELECT * FROM car_vendor_master where login_id = '".$session_data['id']."'")->result();
                   
                      //echo "<pre>";print_r($value);


                      for($pr=0;$pr < count($value);$pr++) { ?>
                      <tr>
                        <td><input type="checkbox" name="vechile_no"></td>
                        <td><?=$value[$pr]->vechile_no; ?></td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-xs-2">
              <div class="card" align="center">
                <button class="btn btn-info">ALLOCATE</button> 
              </div>
            </div>
            <div class="col-xs-5">
              <div class="card">
                <div class="card-body" id="checkboxlist2">
                  <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th><input type="checkbox" name="driver_name" class="selectall2"></th>
                        <th>Driver Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $session_data = $this->session->all_userdata();  // All Session Data Shows

                      $this->db->where("login_id", $session_data['id']);

                      $value = $this->db->query("SELECT * FROM driver_master where login_id = '".$session_data['id']."'")->result();
                   
                      //echo "<pre>";print_r($value);


                      for($pr=0;$pr < count($value);$pr++) { ?>
                      <tr>
                        <td><input type="checkbox" name="" class="checkbox2"></td>
                        <td><?=$value[$pr]->driver_name; ?></td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    var $assign = jQuery.noConflict();

    $assign('.selectall1').on('change', function(e) {
        var $inputs = $assign('#checkboxlist1 input[type=checkbox]');
        if(e.originalEvent === undefined) {
            var allChecked = true;
            $inputs.each(function(){
                allChecked = allChecked && this.checked;
            });
            this.checked = allChecked;
        } else {
            $inputs.prop('checked', this.checked);
        }
    });

    $assign('.selectall2').on('change', function(e) {
        var $inputs = $assign('#checkboxlist2 input[type=checkbox]');
        if(e.originalEvent === undefined) {
            var allChecked = true;
            $inputs.each(function(){
                allChecked = allChecked && this.checked;
            });
            this.checked = allChecked;
        } else {
            $inputs.prop('checked', this.checked);
        }
    });

    $assign('#checkboxlist1 input[type=checkbox]').on('change', function(){
        $assign('.selectall1').trigger('change');
    });

    $assign('#checkboxlist2 input[type=checkbox]').on('change', function(){
        $assign('.selectall2').trigger('change');
    });

    </script>
    
  

    