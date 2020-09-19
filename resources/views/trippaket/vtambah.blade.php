<!-- Menghubungkan dengan view template master -->
@extends('admin.admin')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', $page)
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ @$action }}">
          {{ csrf_field() }}
          @if($btn=='edit')                 
              {{ method_field('PUT') }}
          @endif
          <div class="card-body">
            <div class="form-group">
              <label for="judul">Paket Wisata</label>
              <select name="paket" id="paket" class="form-control" class="form-control">
                <option value="">Pilih Paket Wisata</option>
                @foreach($items as $item)
                  <option value="{{$item->id_paket_wisata}}" <?= ($item->id_paket_wisata==@$pw->id_paket) ? "selected" : ''?>>
                    {{$item->judul_paket_wisata}}
                  </option>
                @endforeach
              </select> 
              @if($errors->has('paket'))
                  <div class="text-danger">
                      {{ $errors->first('paket')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control" value="{{ @$pw->judul }}" placeholder="judul..">
 
              @if($errors->has('judul'))
                  <div class="text-danger">
                      {{ $errors->first('judul')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$pw->deskripsi }}</textarea>
              @if($errors->has('deskripsi'))
                  <div class="text-danger">
                      {{ $errors->first('deskripsi')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="jadwal">Jadwal</label>
              <select name="jadwal" id="jadwal" class="form-control" class="form-control">
                @php ($data = ['Penentuan waktu bebas','Penentuan waktu ditentukan'])
                <option value="">Pilih Penentuan Waktu Wisata</option>
                @for($i = 0; $i < count($data); $i++)
                  <option value="{{$data[$i]}}" <?= ($data[$i]==@$pw->jadwal_trip) ? 'selected' : ''?>>{{$data[$i]}}</option>
                @endfor
              </select> 
              @if($errors->has('jadwal'))
                  <div class="text-danger">
                      {{ $errors->first('jadwal')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="sifattrip">Sifat Trip</label>
              <select name="sifattrip" id="sifattrip" class="form-control" class="form-control">
                @php ($data = ['Private dan tidak digabung dengan peserta lainnya','Digabung dengan peserta lainnya'])
                <option value="">Pilih Sifat Trip</option>
                @for($i = 0; $i < count($data); $i++)
                  <option value="{{$data[$i]}}" <?= ($data[$i]==@$pw->sifat_trip) ? 'selected' : ''?>>{{$data[$i]}}</option>
                @endfor
              </select> 
              @if($errors->has('sifattrip'))
                  <div class="text-danger">
                      {{ $errors->first('sifattrip')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="meetingpoint">Meeting Point</label>
              <input type="text" name="meetingpoint" id="meetingpoint" class="form-control" value="{{ @$pw->meeting_point }}" placeholder="malang..">
              @if($errors->has('meetingpoint'))
                  <div class="text-danger">
                      {{ $errors->first('meetingpoint')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="destinasi">Destinasi Wisata</label>
              <select name="destinasi[]" id="destinasi" class="duallistbox" multiple="multiple">
                  @foreach($items2 as $item)
                    <option value="{{$item->id_destinasi_wisata}}" <?= (in_array($item->id_destinasi_wisata, $eid_destinasi_wisata)) ? 'selected' : ''?>>{{$item->nama_destinasi_wisata}}</option>
                  @endforeach
                  </select>
              @if($errors->has('destinasi'))
                  <div class="text-danger">
                      {{ $errors->first('destinasi')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="jadwal_perjalanan">Jadwal Perjalanan</label>
              <textarea name="jadwal_perjalanan" id="jadwal_perjalanan" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$pw->jadwal_perjalanan }}</textarea>
              @if($errors->has('jadwal_perjalanan'))
                  <div class="text-danger">
                      {{ $errors->first('jadwal_perjalanan')}}
                  </div>
              @endif
            </div>
            <div class="form-group">
              <label for="termcondition">Trem & Condition</label>
              <textarea name="termcondition" id="termcondition" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$pw->termcondition }}</textarea>
              @if($errors->has('termcondition'))
                  <div class="text-danger">
                      {{ $errors->first('termcondition')}}
                  </div>
              @endif
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ @$btn }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{asset('theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#deskripsi').summernote();
    $('#jadwal_perjalanan').summernote();
    $('#termcondition').summernote();

    $('.duallistbox').bootstrapDualListbox()
  })
</script>
@endsection