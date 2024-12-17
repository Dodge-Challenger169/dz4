<?php 
include 'header.php';
?>

<main class="container py-5">
    <section class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-4" style="font-family: 'Unbounded', sans-serif;">О нас</h1>
        <p class="lead text-muted mb-4">Мы — команда профессионалов, которые заботятся о здоровье ваших питомцев. В VetCare работают ветеринары с большим опытом и любовью к животным.</p>
    </section>

    <section class="text-center py-5">
        <h2 class="fw-bold mb-4">Наша команда</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="img/veterinar1.jpg" alt="Доктор Иванова" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 class="fw-bold">Иванова Мария</h4>
                    <p class="text-muted">Главный ветеринар</p>
                    <p>Мария имеет 10 лет опыта работы в ветеринарной медицине. Специализируется на экстренной помощи и диагностике заболеваний.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="img/veterinar2.png" alt="Доктор Петров" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 class="fw-bold">Петров Александр</h4>
                    <p class="text-muted">Ветеринар-хирург</p>
                    <p>Александр — хирург с 8-летним опытом. Он выполняет сложнейшие операции и всегда заботится о своем пациенте.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="img/veterinar3.jpg" alt="Доктор Смирнова" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 class="fw-bold">Смирнова Ирина</h4>
                    <p class="text-muted">Ветеринар-терапевт</p>
                    <p>Ирина — опытный терапевт, специализирующийся на лечении внутренних заболеваний. Она всегда находит индивидуальный подход к каждому питомцу.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center py-5">
        <h2 class="fw-bold mb-4">Как работает наша клиника?</h2>
        <p class="text-muted mb-4">Посмотрите видео, чтобы понять, почему наши пациенты всегда получают лучшее лечение.</p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=YKZGwtdZGdQ&ab_channel=%D0%A0%D0%B0%D1%81%D0%BA%D0%B0%D0%B4%D1%80%D0%BE%D0%B2%D0%BA%D0%B0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="text-center py-5 ">
        <h2 class="fw-bold mb-4">Отзывы наших клиентов</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p class="text-muted">"Отличная клиника! Очень внимательные врачи. Мой питомец всегда в надежных руках!"</p>
                    <h5 class="fw-bold">Елена, владелица собаки</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p class="text-muted">"Спасибо за профессионализм и заботу! Мой кот прошел курс лечения, и теперь чувствует себя отлично!"</p>
                    <h5 class="fw-bold">Александр, владелец кота</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p class="text-muted">"Очень довольна, что выбрала вашу клинику. Лечение прошло быстро и эффективно!"</p>
                    <h5 class="fw-bold">Марина, владелица попугая</h5>
                </div>
            </div>
        </div>
    </section>

</main>

<?php 
include 'footer.php';
?>
