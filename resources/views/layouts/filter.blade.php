<div class="card-body" style="padding-bottom: 8px !important">
  <div class="collapse" id="collapseExample">
      @if (isset($url) && array_key_exists('index', $url))
        {!! Form::open(['route' => $url['index'],'method' => 'GET']) !!}
        <div class="form-row">
          <div class="form-group col-md-12">
            {!! Form::text('search', null,['class' => 'form-control', 'placeholder' => 'Search']) !!}
          </div>
        </div>

        {{-- Contoh kalo ada array filter dari fungsi index --}}
        {{-- @if (in_array('nama', $data['filter']))
          <div class="form-row">
            <div class="form-group col-md-12">
              {!! Form::text('nama', null,['class' => 'form-control', 'placeholder' => 'nama']) !!}
            </div>
          </div>
        @endif --}}

        @if (isset($filter))
          @if (in_array('date_range', $filter))
            <div class="form-row">
              <div class="form-group col-md-12">
                {!! Form::text('date_range', null,['class' => 'form-control', 'placeholder' => 'Tanggal','id' => 'tgl-range','autocomplete' => 'off']) !!}
              </div>
            </div>        
          @endif
          
          @if (in_array('status_approve', $filter))
            <div class="form-row">
              <div class="form-group col-md-12">
                {!! Form::select('status_approve', $data['list_status_approve'], null,['class' => 'form-control select2', 'placeholder' => 'Pilih Status Approve']) !!}
              </div>
            </div>        
          @endif

          @if (in_array('approved_by', $filter))
            <div class="form-row">
              <div class="form-group col-md-12">
                {!! Form::select('approved_by', $data['list_user'], null,['class' => 'form-control select2', 'placeholder' => 'Pilih Approved By']) !!}
              </div>
            </div>        
          @endif

          @if (in_array('created_by', $filter))
            <div class="form-row">
              <div class="form-group col-md-12">
                {!! Form::select('created_by', $data['list_user'], null,['class' => 'form-control select2', 'placeholder' => 'Pilih Created By']) !!}
              </div>
            </div>        
          @endif
        @endif

        <div class="text-right">
          <button class="btn btn-primary mr-1 btn-submit" type="submit">Cari</button>
        </div>
        {!! Form::close() !!}
      @endif
  </div>
</div>
