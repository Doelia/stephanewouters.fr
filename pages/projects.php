<!doctype html>
<html lang="en">

<?php require('includes/head.php'); ?>
<?php require('includes/dataset_projects.php'); ?>

<body data-bs-theme="light">

<div class="container position-relative p-3 p-sm-5">
    <div class="d-flex gap-3 align-items-center">
        <a href="/">
            <img src="avatar.png" alt="" width="75" height="75">
        </a>
        <div>
            <h1 class="fs-3 fw-bold mb-0">Stéphane Wouters</h1>
            <div class="fw-light opacity-50">@doelia</div>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="fst-italic opacity-50 text-body text-decoration-none small">
            <i class="fa-solid fa-arrow-left-long fw-light me-1"></i>
            Back to portfolio
        </a>
        <h2 class="text-uppercase fw-bold fs-5">ALL PROJECTS</h2>
    </div>

    <?php foreach ($years as $year): ?>
        <div class="fade-in mt-4">

            <div class="d-flex align-items-center gap-2">
                <h3 class="text-uppercase fw-bold opacity-25 my-3"><?= $year ?></h3>
                <hr class="col border-gray opacity-10" />
            </div>

            <div class="row">
            <?php foreach ($projects_per_year[$year] as $project): ?>
                <div class="col-4 my-2">
                    <div>

                        <h4 class="m-0 fs-6 fw-bold"><?= $project['name'] ?></h4>

                        <div class="d-flex flex-wrap gap-1 mt-3 opacity-75" style="zoom: .75">
                            <?php foreach ($project['technologies'] as $title => $args): ?>
                                <div class="rounded-1 d-flex align-items-center small <?= $args[0] ?>">
                                    <div class="px-1"> <i class="text-white <?= $args[1] ?>"></i> </div>
                                    <div class="px-2 bg-white bg-opacity-75 text-dark">
                                        <?= $title ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <p class="mb-2 mt-2 fw-light opacity-75"><?= $project['description'] ?></p>

                        <div class="d-flex gap-3 small">
                            <?php foreach ($project['links'] as $title => $link): ?>
                                <a href="<?= $link[1] ?>" class="text-body fw-bold text-hover-animated">
                                    <i class="<?= $link[0] ?> me-1"></i>
                                    <?= $title ?>
                                </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
