   

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
                        <th>Vendor Name</th>
                        <th>Vechile No</th>
                        <th>Vendo Capacity</th>
                        <th>Vendor MNo</th>
                        <th>Action</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Vendor Name</th>
                        <th>Vechile No</th>
                        <th>Vendo Capacity</th>
                        <th>Vendor MNo</th>
                        <th>Action</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 

                      $session_data = $this->session->all_userdata();  // All Session Data Shows

                      $this->db->where("login_id", $session_data['id']);

                      $value = $this->db->query("SELECT * FROM car_vendor_master where login_id = '".$session_data['id']."'")->result();
                   
                      //echo "<pre>";print_r($value);


                      for($vm=0;$vm < count($value);$vm++) { ?>
                      <tr>
                        
                        <td><?=$value[$vm]->vendor_name; ?></td>
                        <td><?=$value[$vm]->vechile_no; ?></td>
                        <td><?=$value[$vm]->vendor_capacity; ?></td>
                        <td><?=$value[$vm]->vendor_mno; ?></td>
                        <td>
                          <div class="col-xs-3 col-md-2">
                              <button class="btn btn-warning" onclick="editroster(<?= $value[$vm]->vendor_id;?>)"> <span class="icon icon-pencil"></span></button>
                              <button class="btn btn-danger" onclick="deletevendormaster(<?= $value[$vm]->vendor_id;?>)"> <span class="icon icon-trash-o"></span></button>
                          </div>  
                        </td>
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
            <h4 class="modal-title">Edit Person Roster</h4>
          </div>
          <div class="modal-body">
            <form id="vendorform">
              <div class="form-group">
                <label class="control-label">Vendor Name</label>
                <input class="form-control" type="hidden" name="login_id">
                <input class="form-control" type="hidden" name="vendor_id">
                <input class="form-control" type="text" name="vendor_name">
              </div>
              <div class="form-group">
                <label class="control-label">Vechile No</label>
                <input class="form-control" type="text" name="vechile_no">
              </div>
              <div class="form-group">
                <label class="control-label">Vendor Capacity</label>
                <input class="form-control" type="text" name="vendor_capacity">
              </div>
              <div class="form-group">
                <label class="control-label">Vendor MNo</label>
                <input class="form-control" type="text" name="vendor_mno">
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
                    <input class="form-control" type="text" name="vendorname" placeholder="Vendor Name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="vechileno" placeholder="Vechile No">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="vendorcapacity" placeholder="Vendor Capacity">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="vendormno" placeholder="Vendor_MNo">
                  </div>
                  <?php $session_data = $this->session->all_userdata(); ?>
                  <input type="hidden" name="login_id" value="<?=$session_data['id'];?>"> 
                  <button type="button" class="btn  btn-warning btn-block" onclick="add_vendor_master()">Save</button>
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
        //  url = "<?php echo site_url('records/update_person_roster')?>";

        $.ajax({
          url : "<?php echo site_url('records/ajax_edit_vendor_master/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {

              $('[name="vendor_id"]').val(data[0].vendor_id);
              $('[name="vendor_name"]').val(data[0].vendor_name);
              $('[name="vechile_no"]').val(data[0].vechile_no);
              $('[name="vendor_capacity"]').val(data[0].vendor_capacity);
              $('[name="vendor_mno"]').val(data[0].vendor_mno);
              $('[name="login_id"]').val(data[0].login_id);
              
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
      url = "<?php echo site_url('records/update_vendor_master')?>";
    }

     // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#vendorform').serialize(),
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

  function deletevendormaster(id)
  {
   // alert(id)

    if(confirm('Are you sure delete this data?'))
    {
      // ajax delete data from database
        $.ajax({
          url : "<?php echo site_url('records/delete_vendor_master')?>/"+id,
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

  function add_vendor_master()
  {
      $.ajax({
        url : "<?php echo site_url('records/add_vendor_master')?>",
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
  

    