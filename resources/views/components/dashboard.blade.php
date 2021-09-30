<link rel="stylesheet" href="{{ asset('css/dash.css') }}">
<div class="row">
  <div class="max-width-25 col-3">

    <div class="dash">

    </div>
    <div class="container full">
      <div class="non-color">
        <h1 class="text-center">Baguga</h1>
        <hr>
      </div>
      <ul class="list-group pt-3">
        <li class="list-group-item dash-up active">
          <a href="/dash" class="text-decoration-none">
            <i class="fas fa-desktop ml-1 mr-4"> </i><span>Dashboard</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="/user" class="text-decoration-none">
            <i class="fas fa-users ml-1 mr-4"> </i><span>Users</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-receipt ml-1 mr-4"> </i><span>Receipt</span>
          </a>
        </li>

        <li class="list-group-item dash-up">
          <a href="/receivable" class="text-decoration-none">
            <i class="fas fa-file-invoice-dollar ml-1 mr-4"> </i><span>Receivable</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-clipboard-list ml-1 mr-4"> </i><span>Projects</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-user-astronaut ml-1 mr-4"> </i><span>Customers</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-tags ml-1 mr-4"> </i><span>Tags</span>
          </a>
        </li>
        <li class="list-group-item dash-up">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-tasks ml-1 mr-4"> </i><span>Tasks</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col left-div p-5" style="height: 100vh; background-color: #fff">
    {{ $slot }}
  </div>

</div>
