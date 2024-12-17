<?php 
include 'header.php';
?>

<main class="container py-5">
    <section class="d-flex align-items-center">
        <div class="flex-shrink-0 me-4">
            <img src="img/1.png" alt="Добро пожаловать" class="img-fluid" style="max-width: 400px; border-radius: 10px;">
        </div>
        <div class="text-start">
            <h1 class="display-4 fw-bold">Добро пожаловать в VetCare</h1>
            <p class="lead text-muted">Здесь заботятся о здоровье ваших питомцев с душой и профессионализмом.</p>
            <a href="about_us.php" class="btn btn-primary btn-lg mt-3">Узнать больше</a>
        </div>
    </section>

    <section class="row py-5">
        <div class="col-md-4">
            <div class="card shadow-sm border-light">
                <img src="img/service1.png" class="card-img-top" alt="Услуга 1">
                <div class="card-body">
                    <h5 class="card-title">Вакцинация</h5>
                    <p class="card-text">Защитите вашего питомца с помощью проверенных вакцин.</p>
                    <a href="info.php" class="btn btn-primary btn-lg mt-3">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-light">
                <img src="img/service2.png" class="card-img-top" alt="Услуга 2">
                <div class="card-body">
                    <h5 class="card-title">Стационар</h5>
                    <p class="card-text">Профессиональный уход для вашего любимца в тяжелых ситуациях.</p>
                    <a href="info.php" class="btn btn-primary btn-lg mt-3">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-light">
                <img src="img/service3.png" class="card-img-top" alt="Услуга 3">
                <div class="card-body">
                    <h5 class="card-title">Консультации</h5>
                    <p class="card-text">Получите экспертное мнение от наших лучших ветеринаров.</p>
                    <a href="info.php" class="btn btn-primary btn-lg mt-3">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
include 'footer.php';
?>
