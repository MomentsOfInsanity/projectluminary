
<div class="container">
    <h1 class="text-center my-4">Our Memory Lane</h1>
    <div class="timeline">
        <?php foreach ($milestones as $milestone){ ?>
            <div class="timeline-item left ?>">
                <div class="content">
                    <h5><?php echo $milestone->title; ?></h5>
                    <p><?php echo $milestone->description; ?></p>
                    <p class="date"><?= date('F j, Y', strtotime($milestone->date)); ?></p>
                    <?php if ($milestone->image){ ?>
                        <img src="<?= base_url('uploads/' . $milestone->image); ?>" class="img-fluid mt-2" alt="<?php echo $milestone->title ?>">
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
