<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-xl-12">

        <div class="card">
            <div class="card-body" style="padding: 15px 20px;">
                <h5 class="card-title" style="color:#012970; font-size:15px; margin-bottom: 12px;">Profile Information</h5>

                <div class="row mb-1">
                    <div class="col-lg-3 col-md-4" style="color:#4154f1; font-weight:600; font-size:14px;">Username</div>
                    <div class="col-lg-9 col-md-8" style="font-size:14px;">
                        <?= esc(session()->get('username')) ?>
                        &nbsp;<span class="badge bg-danger" style="font-size:11px;"><?= esc(session()->get('role')) ?></span>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-lg-3 col-md-4" style="color:#4154f1; font-weight:600; font-size:14px;">Email</div>
                    <div class="col-lg-9 col-md-8" style="color:#4154f1; font-size:14px;"><?= esc(session()->get('email')) ?></div>
                </div>

                <div class="row mb-1">
                    <div class="col-lg-3 col-md-4" style="color:#4154f1; font-weight:600; font-size:14px;">Login Time</div>
                    <div class="col-lg-9 col-md-8" style="font-size:14px;"><?= esc(session()->get('login_time')) ?></div>
                </div>

                <div class="row mb-1">
                    <div class="col-lg-3 col-md-4" style="color:#4154f1; font-weight:600; font-size:14px;">Status</div>
                    <div class="col-lg-9 col-md-8">
                        <?php if (session()->get('isLoggedIn')): ?>
                            <span class="badge bg-success" style="font-size:11px;"><i class="bi bi-check-circle"></i> Sudah Login</span>
                        <?php else: ?>
                            <span class="badge bg-danger" style="font-size:11px;">Belum Login</span>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>