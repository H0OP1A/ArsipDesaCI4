<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<main id="content" role="main" class="main">
<div class="content container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <!-- Profile Cover -->
          <div class="profile-cover">
            <div class="profile-cover-img-wrapper">
              <img class="profile-cover-img" src="<?= base_url();?>dashboard/img/1920x400/img1.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Profile Cover -->

          <!-- Profile Header -->
          <div class="text-center mb-5">
            <!-- Avatar -->
            <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
              <img class="avatar-img" src="<?= base_url();?>/img/<?= user()->user_image; ?>" alt="Image Description">
              <span class="avatar-status avatar-status-success"></span>
            </div>
            <!-- End Avatar -->

            <h1 class="page-header-title">Welcome, <?= user()->username; ?> </h1>

            <!-- List -->
            
            <!-- End List -->
          </div>
          <!-- End Profile Header -->

          <!-- Nav -->
          <!-- End Nav -->

          <div class="row">
            <div class="col-lg-4">
              <!-- Card -->
              <!-- End Card -->

              <!-- Sticky Block Start Point -->
              <div id="accountSidebarNav"></div>

              <!-- Card -->
              <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
                     "parentSelector": "#accountSidebarNav",
                     "breakpoint": "lg",
                     "startPoint": "#accountSidebarNav",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 20
                   }'>
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-header-title">Profile</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <ul class="list-unstyled list-py-2 text-dark mb-0">
                    <li class="pb-0"><span class="card-subtitle">About</span></li>
                    <li><i class="bi-person dropdown-item-icon"></i> <?= user()->username; ?></li>
                    <?php if (user()->fullname) :?>
                    <li><i class="bi-person-circle dropdown-item-icon"> </i><?= user()->fullname; ?></li>
                    <?php endif;?>
                    <li><i class="bi-at dropdown-item-icon"></i><?= user()->email; ?></li>

                  </ul>
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->
            </div>

            <div class="col-lg-8">
              <div class="d-grid gap-3 gap-lg-5">
                <!-- Card -->
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-header-title">Activity stream</h4>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="contentActivityStreamDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="contentActivityStreamDropdown">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height" style="height: 30rem;">
                    <!-- Step -->
                
                    <!-- End Step -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer">
                    <a class="link link-collapse" data-bs-toggle="collapse" href="#collapseActivitySection" role="button" aria-expanded="false" aria-controls="collapseActivitySection">
                      <span class="link-collapse-default">View more</span>
                      <span class="link-collapse-active">View less</span>
                    </a>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->

            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    
  <!-- End Content -->

  <!-- Footer -->
  <?= $this->include('templates/footer') ?>
  <!-- End Footer -->

</main>


<?= $this->endSection('page-content'); ?>