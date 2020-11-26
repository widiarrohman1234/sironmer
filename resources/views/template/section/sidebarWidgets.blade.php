      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        
        <!-- Cari Kategori -->
        <div class="card my-4">
          <h5 class="card-header">Cari Nama Kategori</h5>
          <div class="card-body">
            <div class="form-group">
            <select name="kategori" class="form-control select2" style="width: 100%;" >
              <option selected="selected" >Pilih Kategori</option>
                @foreach($list_kategori as $kategori)
                  <option value="">{{$kategori->nama}}</option>
                @endforeach 
            </select>
            </div>
          </div>
        </div>

        <!-- Cari Pertanyaan -->
        <div class="card my-4">
          <h5 class="card-header">Cari Pertanyaan</h5>
          <div class="card-body">
            <div class="form-group">
            <label for="" class="control-label">Petanyaan</label>
            <input type="text" name="pertanyaan" class="form-control">
          </div>
          <button class="btn btn-dark float-right">Cari</button>
          </div>
        </div>

        <!-- Cari Jawaban -->
        <div class="card my-4">
          <h5 class="card-header">Cari Jawaban</h5>
          <div class="card-body">
            <div class="form-group">
            <label for="" class="control-label">Jawaban</label>
            <input type="text" name="jawaban" class="form-control">
          </div>
          <button class="btn btn-dark float-right">Cari</button>
          </div>
        </div>
        
      </div>