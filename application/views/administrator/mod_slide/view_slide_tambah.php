<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Slide</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_slide',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul</th>   <td><input type='text' class='form-control' name='a'></td></tr>
                    <tr><th width='120px' scope='row'>Judul Inggris</th>   <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th width='120px' scope='row'>Keterangan</th>   <td><textarea id='editor1' class='form-control' name='c' style='height:260px' required></textarea></td></tr>
                    <tr><th width='120px' scope='row'>Keterangan Inggris</th>   <td><textarea id='editor2' class='form-control' name='d' style='height:260px' required></textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                    <td><input type='file' class='form-control' name='e'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/photo'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
