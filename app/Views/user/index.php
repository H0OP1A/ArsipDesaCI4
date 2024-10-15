<?= $this->extend('templates/index');?>

<?= $this->section('page-content');?>

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Dashboard User</h1>
          </div>
          <!-- End Col -->
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
    <!-- End Content -->

    <!-- Footer -->
    <?= $this->include('templates/footer')?>
    <!-- End Footer -->
  </main>

<?= $this->endSection('page-content');?>