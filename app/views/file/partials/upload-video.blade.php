<!-- Modal -->
<div class="modal fade" id="uploadVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">UPLOAD VIDEO FILE</h4>
      </div>
      {{ Form::open(['url'=>URL::to('upload-video'),'enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
      <div class="modal-body">
        <div class="form-group">
          <label class="col-sm-3 control-label">Enter a title</label>
          <div class="col-sm-9">
             {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter video title'])}}
          </div>
        </div>
<!--         <div class="form-group">
          <label class="col-sm-3 control-label">Select type</label>
          <div class="col-sm-9">
             {{ Form::select('file_type',['youtube'=>'Youtube link', 'uservideo'=>'Video file'],null,['class'=>'form-control'])}}
          </div>
        </div> -->
        <div class="form-group" id="youtubeURL">
          <label  class="col-sm-3 control-label">Youtube URL</label>
          <div class="col-sm-9">
            {{ Form::text('url_path', null, ['class'=>'form-control','placeholder'=>'Enter URL/file Path ','required'])}}<br>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
      </div>
      {{ Form::close()}}
    </div>
  </div>
</div>
