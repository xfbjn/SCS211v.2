<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- Team 1 - Bootstrap Brain Component -->
  <section class="bg-dark py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h1 class="text-secondary mb-4 display-5 text-center">OUR STAFF</h1>
          <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-4 gy-lg-0 gx-xxl-5 p-2">
        <?php
        $people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
        $people = $people_obj["people"];
        $count = 0; // Counter for columns
        ?>
        <?php foreach ($people as $row) { ?>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
              <div class="card-body p-0">
                <figure class="m-0 p-0">
                  <img class="img-fluid" loading="lazy" src="./assets/img/team-img-1.jpg" alt="">
                  <figcaption class="m-0 p-4">
                    <div>
                      <!-- เพิ่ม element img เพื่อแสดงรูปภาพ -->
                      <img src="<?= $row["image"] ?>" class="img-fluid mx-auto d-block shadow" style="width: 200px; height: auto; margin-bottom: 1em; border-radius: 25px;">
                      <hr>
                      <!-- ปรับขนาดรูปภาพตามที่ต้องการ และเพิ่ม margin-bottom เพื่อเว้นบรรทัด -->
                    </div>
                    <h4 class="mb-1"><?= $row["name"] ?><hr></h4>
                    <p class="text-secondary mb-0"><strong>Education: </strong><?= $row["education"] ?></p>
                    <p class="text-secondary mb-0"><strong>Role: </strong><?= $row["role"] ?></p>
                    <i class="bi bi-envelope-at-fill"><a href="mailto:<?= $row["email"] ?>"><?= $row["email"] ?></a></i>
                    <p class="text-secondary mb-0"><strong>Phone: </strong><?= $row["phone"] ?></p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>

          <?php
          $count++;
          // Start a new row after every 4 columns
          if ($count % 4 == 0) {
            echo '</div><div class="row gy-4 gy-lg-0 gx-xxl-5 p-2">';
          }
          ?>
        <?php } ?>
      </div>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>