
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="text-right m-b">
            <button class="btn btn-info"  data-toggle="modal" data-target="#modalDividerVertical" type="button"><span class="icon icon-plus"></span>&#160;&#160;&#160;ADD&#160;</button>
            <br>
          </div>
          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                
                <div class="card-body">
                  <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Reporting Head</th>
                        <th>Repoting Head MNo</th>
                        <th>Gender</th>
                        <th>MNo</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Reporting Head</th>
                        <th>Repoting Head MNo</th>
                        <th>Gender</th>
                        <th>MNo</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 

                      $session_data = $this->session->all_userdata();  // All Session Data Shows

                      $this->db->where("login_id", $session_data['id']);

                      $value = $this->db->query("SELECT * FROM person_roster where login_id = '".$session_data['id']."'")->result();
                   
                      //echo "<pre>";print_r($value);


                      for($pr=0;$pr < count($value);$pr++) { ?>
                      <tr>
                        
                        <td><?=$value[$pr]->person_name; ?></td>
                        <td><?=$value[$pr]->person_address; ?></td>
                        <td><?=$value[$pr]->person_designation; ?></td>
                        <td><?=$value[$pr]->person_department; ?></td>
                        <td><?=$value[$pr]->person_reporting_head; ?></td>
                        <td><?=$value[$pr]->person_repoting_head_mno; ?></td>
                        <td><?=$value[$pr]->person_gender; ?></td>
                        <td><?=$value[$pr]->person_mno; ?></td>
                        <td>
                          <div class="col-xs-3 col-md-2">
                              <button class="btn btn-warning" onclick="editroster(<?= $value[$pr]->person_id;?>)"> <span class="icon icon-pencil"></span></button>
                              <button class="btn btn-danger" onclick="deleteroster(<?= $value[$pr]->person_id;?>)"> <span class="icon icon-trash-o"></span></button>
                          </div>  
                        </td>
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
    <div id="modalSignUpSm" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h4 class="modal-title">Edit Person Roster</h4>
          </div>
          <div class="modal-body">
            <form id="rosterform">
              <div class="form-group">
                <label class="control-label">Person Name</label>
                
                <input class="form-control" type="hidden" name="person_id">
                <input class="form-control" type="text" name="person_name">
              </div>
              <div class="form-group">
                <label class="control-label">Person Address</label>
                <input class="form-control" type="text" name="person_address">
              </div>
              <div class="form-group">
                <label class="control-label">Person Designation</label>
                <input class="form-control" type="text" name="person_designation">
              </div>
              <div class="form-group">
                <label class="control-label">Person Department</label>
                <input class="form-control" type="text" name="person_department">
              </div>
              <div class="form-group">
                <label class="control-label">Person Reporting Head</label>
                <input class="form-control" type="text" name="person_reporting_head">
              </div>
              <div class="form-group">
                <label class="control-label">Person Repoting Head MNo</label>
                <input class="form-control" type="text" name="person_repoting_head_mno">
              </div>
              <div class="form-group">
                <label class="control-label">Person Gender</label>
                <input class="form-control" type="text" name="person_gender">
              </div>
              <div class="form-group">
                <label class="control-label">Person MNo</label>
                <input class="form-control" type="text" name="person_mno">
              </div>
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">&#160;Save&#160;</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="modalDividerVertical" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row pos-r">
              <div class="col-sm-12" data-toggle="match-height">
                <form id="additionform" autocomplete="off">
                  <h4>Person Record Addition</h4>
                  <div class="form-group">
                    <input class="form-control" type="text" name="personname" placeholder="Person Name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="personaddress" placeholder="Person Address">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="persondesignation" placeholder="Person Designation">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="persondepartment" placeholder="Person Department">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="personreportinghead" placeholder="Person Reporting Head">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="personrepotinghead_mno" placeholder="Person Repoting Head_MNo">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="persongender">
                      <option selected>Select Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>

                  </div>
                  <?php $session_data = $this->session->all_userdata(); ?>
                  <input type="hidden" name="login_id" value="<?=$session_data['id'];?>"> 
                  <div class="form-group">
                    <input class="form-control" type="text" name="personmno" placeholder="Person MNo">
                  </div>
                  <button type="button" class="btn  btn-warning btn-block" onclick="add_person_roster()">Save</button>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    var save_method;
    var table;
    function editroster(id)
    {

      save_method = 'edit';

      var url;
      if(save_method == 'add')
      {
        url = "<?php echo site_url('records/add_person_record')?>";
      }
      else
      {
        url = "<?php echo site_url('records/update_person_roster')?>";

        $.ajax({
          url : "<?php echo site_url('records/ajax_edit_person_roster/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {

              $('[name="person_id"]').val(data[0].person_id);
              $('[name="person_name"]').val(data[0].person_name);
              $('[name="person_address"]').val(data[0].person_address);
              $('[name="person_designation"]').val(data[0].person_designation);
              $('[name="person_department"]').val(data[0].person_department);
              $('[name="person_reporting_head"]').val(data[0].person_reporting_head);
              $('[name="person_repoting_head_mno"]').val(data[0].person_repoting_head_mno);
              $('[name="person_gender"]').val(data[0].person_gender);
              $('[name="person_mno"]').val(data[0].person_mno);
              $('[name="login_id"]').val(data.login_id);


              $('#modalSignUpSm').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('Edit Person Roster'); // Set title to Bootstrap modal title

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
    }    
  }

  function save()
  {

    var url;
    if(save_method == 'add')
    {
      url = "<?php echo site_url('index.php/book/book_add')?>";
    }
    else
    {
      url = "<?php echo site_url('records/update_person_roster')?>";
    }

     // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#rosterform').serialize(),
          dataType: "JSON",
          success: function(data)
          {
             $('#modalSignUpSm').modal('hide');
             location.reload();// for reload a page
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error adding / update data');
          }
      });
  }

  function deleteroster(id)
  {
    if(confirm('Are you sure delete this data?'))
    {
      // ajax delete data from database
        $.ajax({
          url : "<?php echo site_url('records/delete_person_roster')?>/"+id,
          type: "POST",
          dataType: "JSON",
          success: function(data)
          {
             
             location.reload();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error deleting data');
          }
      });

    }
  }

  function add_person_roster()
  {
      $.ajax({
        url : "<?php echo site_url('records/add_person_record')?>",
        type: "POST",
        data: $('#additionform').serialize(),
        dataType: "JSON",
        success: function(data)
        {
          $('#modalDividerVertical').modal('hide');
          location.reload(); // for reload a page
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
      });
     
  }
  </script>
  

    