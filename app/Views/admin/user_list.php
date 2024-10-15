<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <!-- End Page Header -->

    <!-- Stats -->
    <!-- End Stats -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-md">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="card-header-title">Daftar User</h4>
              <!-- Datatable Info -->
              <!-- End Datatable Info -->
            </div>
          </div>

          <!-- End Col -->
          <div class="col-auto">
            <!-- Filter -->
            <div class="row align-items-sm-center">
              <div class="col-sm-auto">
                <div class="row align-items-center gx-0">
                  <div class="col">
                    <span class="text-secondary me-2">Role :</span>
                  </div>
                  <!-- End Col -->
                  <div class="col-auto">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" autocomplete="off" data-target-column-index="4" data-target-table="datatable" data-hs-tom-select-options='{
                      "searchInDropdown": false,
                      "hideSearch": true,
                      "dropdownWidth": "10rem"
                    }'>
                        <option value="null" selected>Any</option>
                        <option value="admin">Admin</option>
                        <option value="Co-founder">Co-founder</option>
                        <option value="Designer">Designer</option>
                        <option value="Developer">Developer</option>
                        <option value="Director">Director</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->
              <div class="col-md">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                  </div>
                  <!-- End Search -->
                </form>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Filter -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>

          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th class="table-column-ps-0">User Name</th>
              <th>Fullname</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td class="table-column-ps-0">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0"><?= $user->username; ?></h5>
                    </div>
                  </div>
                </td>
                <td><?= $user->fullname; ?></td>
                <td><?= $user->email; ?></td>
                <td><?= $user->name; ?></td>
                <td>
                  <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-primary">Detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- End Table -->
      <!-- Footer -->
      <div class="card-footer">
        <!-- Pagination -->
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">

          <!-- Filter Data di Sebelah Kiri -->
          <div class="col-sm mb-2 mb-sm-0">
            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
              <span class="me-2">Showing:</span>

              <!-- Select -->
              <div class="tom-select-custom">
                <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                      "searchInDropdown": false,
                      "hideSearch": true
                    }'>
                  <option value="4">4</option>
                  <option value="6">6</option>
                  <option value="8" selected>8</option>
                  <option value="12">12</option>
                </select>
              </div>
              <!-- End Select -->

              <span class="text-secondary me-2">of</span>

              <!-- Pagination Quantity -->
              <span id="datatableWithPaginationInfoTotalQty"></span>
            </div>
          </div>

          <!-- Tombol Tambah Data di Sebelah Kanan -->
          <div class="col-sm-auto">
            <a href="<?= base_url('admin/tambah_user'); ?>" class="btn btn-success me-7">
            Tambah  <i class="bi bi-plus-circle"></i>
            </a>
          </div>

        </div>
      </div>
      <!-- End Footer -->
    </div>
    <!-- End Card -->
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <?= $this->include('templates/footer') ?>
  <!-- End Footer -->
</main>

<?= $this->endSection('page-content'); ?>