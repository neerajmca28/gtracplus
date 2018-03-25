
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
                        <th>Driver Name</th>
                        <th>Driver MNo</th>
                        <th>Action</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Driver Name</th>
                        <th>Driver MNo</th>
                        <th>Action</th> 
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 

                      $session_data = $this->session->all_userdata();  // All Session Data Shows

                      $this->db->where("login_id", $session_data['id']);

                      $value = $this->db->query("SELECT * FROM driver_master   where login_id = '".$session_data['id']."'")->result();
                   
                      //echo "<pre>";print_r($value);


                      for($dm=0;$dm < count($value);$dm++) { ?>
                      <tr>
                        
                        <td><?=$value[$dm]->driver_name; ?></td>
                        <td><?=$value[$dm]->driver_mno  ; ?></td>
                        <td>
                          <div class="col-xs-3 col-md-2">
                              <button class="btn btn-warning" onclick="editroster(<?= $value[$dm]->driver_id;?>)"> <span class="icon icon-pencil"></span></button>
                              <button class="btn btn-danger" onclick="deleteroster(<?= $value[$dm]->driver_id;?>)"> <span class="icon icon-trash-o"></span></button>
                          </div>  
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
            <h4 class="modal-title">Edit Driver Master</h4>
          </div>
          <div class="modal-body">
            <form id="rosterform">
              <div class="form-group">
                <label class="control-label">Driver Name</label>
                <input class="form-control" type="hidden" name="driver_id">
                <input class="form-control" type="text" name="driver_name">
              </div>
              <div class="form-group">
                <label class="control-label">Driver MNo</label>
                <input class="form-control" type="text" name="driver_mno">
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
                    <input class="form-control" type="text" name="drivername" placeholder="Driver Name">
                  </div>
                  <?php $session_data = $this->session->all_userdata(); ?>
                  <input type="hidden" name="login_id" value="<?=$session_data['id'];?>"> 
                  <div class="form-group">
                    <input class="form-control" type="text" name="drivermno" placeholder="Driver MNo">
                  </div>
                  <button type="button" class="btn  btn-warning btn-block" onclick="add_driver_master()">Save</button>
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
          url : "<?php echo site_url('records/ajax_edit_driver_master/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {

              $('[name="driver_id"]').val(data[0].driver_id);
              $('[name="driver_name"]').val(data[0].driver_name);
              $('[name="driver_mno"]').val(data[0].driver_mno);
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
      url = "<?php echo site_url('records/update_driver_master')?>";
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
          url : "<?php echo site_url('records/delete_driver_master')?>/"+id,
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

  function add_driver_master()
  {
      $.ajax({
        url : "<?php echo site_url('records/add_driver_master')?>",
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

    