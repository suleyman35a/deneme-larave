@extends('backend.admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Hoş Geldiniz</h3>
            <h6 class="font-weight-normal mb-0">Sistemde herhangi bir sıkıntı bulunmamaktadır<span class="text-primary">3 adet okunmayan mesaj var</span></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Today (19 Eylül 2023)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">Ekim - Kasım</a>
                <a class="dropdown-item" href="#">Kasım - Aralık</a>
                <a class="dropdown-item" href="#">Aralık - Ocak</a>
                <a class="dropdown-item" href="#">Ocak - Şubat</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="images/15.jpg" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                </div>
                <div class="ml-2">
                  <h4 class="location font-weight-normal">İzmir</h4>
                  <h6 class="font-weight-normal">Türkiye</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Günlük Hizmet Alan Danışan</p>
                <p class="fs-30 mb-2">20</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Hizmet Alan Danışan</p>
                <p class="fs-30 mb-2">100</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Yapılan Konsültasyon</p>
                <p class="fs-30 mb-2">25</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Danışman Sayısı</p>
                <p class="fs-30 mb-2">15</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Danışmanlar</p>
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>Danışman</th>
                    <th>Günlük Hizmet</th>
                    <th>Tarih</th>
                    <th>Durum</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Fevzi</td>
                    <td class="font-weight-bold">5</td>
                    <td>21.09.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td>Halit</td>
                    <td class="font-weight-bold">3</td>
                    <td>22.09.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td>Şeyda</td>
                    <td class="font-weight-bold">0</td>
                    <td>22.09.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                    <td>Adnan</td>
                    <td class="font-weight-bold">7</td>
                    <td>20.09.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                    <td>Mert</td>
                    <td class="font-weight-bold">6</td>
                    <td>26.08.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                  </tr>
                  <tr>
                    <td>Ayşe </td>
                    <td class="font-weight-bold">1</td>
                    <td>27.08.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                    <td>Fatma </td>
                    <td class="font-weight-bold">5</td>
                    <td>26.08.2023</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Notifications</p>
            <ul class="icon-data-list">
              <li>
                <div class="d-flex">
                  <img src="images/faces/face1.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">Isabella Becker</p>
                    <p class="mb-0">Sales dashboard have been created</p>
                    <small>9:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face2.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">Adam Warren</p>
                    <p class="mb-0">You have done a great job #TW111</p>
                    <small>10:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                <img src="images/faces/face3.jpg" alt="user">
               <div>
                <p class="text-info mb-1">Leonard Thornton</p>
                <p class="mb-0">Sales dashboard have been created</p>
                <small>11:30 am</small>
               </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face4.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">George Morrison</p>
                    <p class="mb-0">Sales dashboard have been created</p>
                    <small>8:50 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face5.jpg" alt="user">
                  <div>
                  <p class="text-info mb-1">Ryan Cortez</p>
                  <p class="mb-0">Herbs are fun and easy to grow.</p>
                  <small>9:00 am</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
@endsection
