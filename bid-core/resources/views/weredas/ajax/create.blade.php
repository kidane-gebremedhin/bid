<div class="col-md-12">
  <div class="col-md-8">
   {{Form::open(array("route"=>"weredas.store", "method"=>"POST", "class"=>"post"))}}
   <label class="nextUrl" nextUrl="{{route('weredas.index')}}" />
   <div class="panel panel-success">
    <div class="panel-heading">
      <h4>
       {{App\Global_var::getLangString('Create_New_Wereda', $language_strings)}}
       <a href="{{route('weredas.index')}}" class="get btn btn-success btn-sm pull-right"><i class="fa fa-eye"></i> 
        <strong>{{App\Global_var::getLangString('List', $language_strings)}} </strong></a> </h4>
      </div>
      <div class="panel-body">
        <div class="col-md-8" style="padding-top:15px;">
          <div class="col-md-12 form-group">
           <label class="label-control col-md-4">{{App\Global_var::getLangString('Region', $language_strings)}}</label>
           <div class="col-md-8">
            {!! Form::select('regionId', [''=>'']+$regions,null, array('class'=>'select2 form-control regionId'));!!}
          </div>
        </div>
        <div class="col-md-12 form-group">
           <label class="label-control col-md-4">{{App\Global_var::getLangString('Zone', $language_strings)}}</label>
           <div class="col-md-8">
            {!! Form::select('zoneId', [''=>'']+$zones,null, array('class'=>'select2 form-control zoneId'));!!}
          </div>
        </div>
        <div class="col-md-12 form-group">
         <label class="label-control col-md-4">{{App\Global_var::getLangString('Name', $language_strings)}}</label>
         <div class="col-md-8">
           {{ Form::text('name', null, array('class'=>'form-control', 'required'=>'true'))}}
         </div>
       </div>
       <div class="col-md-12 form-group">
         <label class="col-md-4 control-label"> {{App\Global_var::getLangString('Remark', $language_strings)}}</label>
         <div class="form-group col-md-8">
           {!! Form::textarea('remark', null, array('class'=>'form-control', 'rows'=>'3', 'id'=>'remark'));!!}
         </div>
       </div>

       <div class="col-md-12 form-group text-center">
          <button type="submit" class="btn btn-primary btn-md">
           <i class="fa fa-save"></i> {{App\Global_var::getLangString('Save', $language_strings)}}
         </button>
        </div>

      </div>

 
</div>

</div>
{{Form::close()}}
</div>
</div>

