
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partials._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Daftar Berita</h4>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark" style="text-align: center">
                    <tr>
                      <th>Judul</th>
                      <th>Berita</th>
                      <th>Editor</th>
                      <th>Tanggal Pembuatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center">
                    @foreach ($indexBerita as $data)
                      <tr>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->body}}</td>
                        <td>{{$data->editor}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt fa-2x"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt fa-2x"></i>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          {{-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div> --}}
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</body>

</html>
