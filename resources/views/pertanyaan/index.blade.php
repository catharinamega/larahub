<div class="card">
              <div class="card-header">
                <h3 class="card-title">Condensed Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th style="width: 10px">#</th>
                      <th>pertanyaan_ID</th>
                      <th>judul</th>
                      <th>profil_ID</th>
                      <th>isi</th>
                      <th>created_at</th>
                      <th>updated_at</th>
                      <th>sum_like</th>
                      <th>sum_dislike</th>
                      <th>sum_vote</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                   
                  @foreach($pertanyaan as $key => $pertanyaan)
                    <tr>
                      
                    <td> {{ $key+1}} </td>
                      <td> {{ $pertanyaan->pertanyaan_ID }}</td>
                      <td> {{ $pertanyaan->judul }}</td>
                      <td> {{ $pertanyaan->profil_ID }}</td>
                      <td> {{ $pertanyaan->isi }}</td>
                      <td> {{ $pertanyaan->created_at }}</td>
                      <td> {{ $pertanyaan->updated_at }}</td>
                      <td> {{ $pertanyaan->sum_like }}</td>
                      <td> {{ $pertanyaan->sum_dislike }}</td>
                      <td> {{ $pertanyaan->sum_vote }}</td>
                      <td> 
                      <a href="/pertanyaan/{{$pertanyaan->pertanyaan_ID}}" class="btn btn-sm btn-info">show</a>
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>













