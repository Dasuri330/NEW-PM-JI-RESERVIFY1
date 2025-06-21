<?php
session_start();
$isLoggedIn = isset($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | PM&JI Reservify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/styles/about.css">
    <?php if ($isLoggedIn): ?>
        <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/pages/customer/components/top_header.css">
        <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/pages/customer/components/footer.css">
    <?php else: ?>
        <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/components/top-header.css">
        <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/components/footer.css">
    <?php endif; ?>
    <link rel="stylesheet" href="/NEW-PM-JI-RESERVIFY/components/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if ($isLoggedIn) {
        include $_SERVER['DOCUMENT_ROOT'] . '/NEW-PM-JI-RESERVIFY/pages/customer/components/top_header.php';
    } else {
        include $_SERVER['DOCUMENT_ROOT'] . '/NEW-PM-JI-RESERVIFY/components/top-header.php';
    }
    ?>

    <!-- Main Content Section -->
    <main class="container" style="margin-top: 120px; margin-bottom: 120px;">
        <div class="row">
            <!-- Sidebar / Side Panel Column -->
            <aside class="col-md-2">
                <div class="side-panel">
                    <ul>
                        <li><a href="/NEW-PM-JI-RESERVIFY/about.php" class="active">About PM&JI</a></li>
                        <li><a href="/NEW-PM-JI-RESERVIFY/faq.php">FAQ</a></li>
                        <li><a href="/NEW-PM-JI-RESERVIFY/terms-and-condition.php">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Main Content Column -->
            <section class="col-md-10">
                <!-- Card container for main content only -->
                <div class="card p-4">
                    <!-- Our History Section -->
                    <section id="history-section" class="mb-4" style="text-align: justify">
                        <h1>About PM&JI</h1>
                        <hr class="custom-hr">
                        <p>
                            <strong>PM&JI Reservify</strong> is a premier photography service provider based in the
                            Philippines, specializing in capturing unforgettable moments through the lens of a camera.
                            <strong>PM&JI</strong> was founded in 2019 with a deep passion for capturing life’s most
                            precious moments through the art of photography. As an independent photography company,
                            PM&JI
                            is dedicated to preserving memories in vivid detail, specializing in high-quality images for
                            a
                            variety of events, including birthdays, weddings, anniversaries, baptisms, corporate
                            gatherings,
                            and beyond.
                        </p>
                        <p>
                            Our team has a keen eye for detail and an unwavering commitment to excellence, striving to
                            create stunning visual narratives that reflect the unique essence of each occasion. Whether
                            you’re planning an intimate gathering or a grand celebration, PM&JI is here to provide a
                            seamless photography experience, from initial consultation to the delivery of beautifully
                            edited
                            images.
                        </p>
                    </section>

                    <section id="history-section" class="mb-4" style="text-align: justify">
                        <h1>About PM&JI Reversify</h1>
                        <hr class="custom-hr">
                        <p>
                            <strong>PM&JI Reservify</strong> is a premier photography service provider based in the
                            Philippines, specializing in capturing unforgettable moments through the lens of a camera.
                            <strong>PM&JI</strong> was founded in 2019 with a deep passion for capturing life’s most
                            precious moments through the art of photography. As an independent photography company,
                            PM&JI
                            is dedicated to preserving memories in vivid detail, specializing in high-quality images for
                            a
                            variety of events, including birthdays, weddings, anniversaries, baptisms, corporate
                            gatherings,
                            and beyond.
                        </p>
                        <p>
                            Our team has a keen eye for detail and an unwavering commitment to excellence, striving to
                            create stunning visual narratives that reflect the unique essence of each occasion. Whether
                            you’re planning an intimate gathering or a grand celebration, PM&JI is here to provide a
                            seamless photography experience, from initial consultation to the delivery of beautifully
                            edited
                            images.
                        </p>
                    </section>
                </div>
            </section>
        </div>
    </main>

    <?php
    if ($isLoggedIn) {
        include $_SERVER['DOCUMENT_ROOT'] . '/NEW-PM-JI-RESERVIFY/pages/customer/components/footer.php';
    } else {
        include $_SERVER['DOCUMENT_ROOT'] . '/NEW-PM-JI-RESERVIFY/components/footer.html';
    }
    ?>
</body>

</html>