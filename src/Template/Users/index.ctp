

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #f2f2f2">

      <!-- Sidebar - Brand -->
      <?php echo $this->Html->link('<img src="/test-blog/img/images/cooky-black.png" style="width: 150px; height:auto;">', array('controller'=>'pages'),array('escape'=>false, 'class'=>'sidebar-brand d-flex align-items-center justify-content-center')) ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="background:#666666">

        <li class='nav-item active' ><?= $this->Html->link(__('New User'), ['action' => 'add'],array('class'=>'nav-link', 'style'=>'color:black')) ?></li>
        <hr class="sidebar-divider" style="background:#666666">
        <li class='nav-item active'><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index'], array('class'=>'nav-link', 'style'=>'color:black')) ?></li>
        <hr class="sidebar-divider" style="background:#666666">
        <li class='nav-item active'><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add'], array('class'=>'nav-link', 'style'=>'color:black')) ?></li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background:#f2f2f2">


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= h($current_user_name) ?> </span>
                <img class="img-profile rounded-circle" src="http://www.clker.com/cliparts/n/l/p/q/K/L/blue-user-icon.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-item" onclick="profile_user()">
                  <img src="https://library.kissclipart.com/20180904/ese/kissclipart-user-icon-png-clipart-computer-icons-user-66fe7db07b02eb73.jpg" style="height="20" width="20">
                  Profile
                </div>
                <div class="dropdown-divider"></div>
                <?php echo $this->Html->link('<img src="https://cdn1.iconfinder.com/data/icons/materia-arrows-symbols-vol-3/24/018_128_arrow_exit_logout-512.png" style="height="20" width="20""/> Logout',array('controller'=>'users','action'=>'logout'),array('escape'=>false, 'class'=>'dropdown-item'))?>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       <div class="container-fluid">

          <!-- Page Heading -->
          
         
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">List Users</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th scope="col"><?= __('id') ?></th>
                        <th scope="col"><?= __('username') ?></th>
                        <th scope="col"><?= __('email') ?></th>
                        <th scope="col"><?= __('password') ?></th>
                        <th scope="col"><?= __('name') ?></th>
                        <th scope="col"><?= __('date') ?></th>
                        <th scope="col"><?= __('created') ?></th>
                        <th scope="col"><?= __('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
          
                  <tbody>
                      <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->name) ?></td>
                            <td><?= h($user->date) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
        
       
       
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script type="text/javascript">
        function profile_user() {
            
            alert('Name: <?= h("$current_user_name") ?>\n Username: <?=h("$current_user_uname")?>\n Email: <?= h("$current_user_email")?>\n Birthday: <?= h("$current_user_date")?>');
        }
    </script>
  <?php
    echo $this->Html->script(array(
    'jquery.min', 'bootstrap.bundle.min', 'jquery.easing.min','sb-admin-2.min', 'jquery.dataTables.min', 'dataTables.bootstrap4.min', 'datatables-demo')); 
    ?>
    
</body>

</html>
