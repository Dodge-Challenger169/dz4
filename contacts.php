<?php 
include 'header.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-4" style="font-family: 'Unbounded', sans-serif;">Контакты</h1>
        <p class="lead text-muted">Свяжитесь с нами для любых вопросов или предложений. Мы всегда рады помочь!</p>
    </section>

    <section class="row align-items-center mb-5">
        <div class="col-md-6">
            <div class="contact-info">
                <h2 class="fw-bold mb-4" style="font-family: 'Jost', sans-serif;">Свяжитесь с нами</h2>
                <p><strong>Адрес:</strong> ул. Центральная, д. 25, г. Москва</p>
                <p><strong>Телефон:</strong> <a href="tel:+74951234567" class="text-primary">+7 (495) 123-45-67</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@vetcare.ru" class="text-primary">info@vetcare.ru</a></p>
                <p><strong>Часы работы:</strong> Пн-Пт 9:00 - 18:00</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48314.40723725757!2d37.57356272620734!3d55.75124478376396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab5c4dbe5d315%3A0x7b2456d291f26e6b!2sMoscow%2C%20Russia!5e0!3m2!1sen!2sru!4v1700000000000!5m2!1sen!2sru" 
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section class="contact-form" style="border: 1px rgb(201, 148, 134) solid; border-radius:10px; background-image:url(img/bg.png); background-size: cover; color: white;">
        <div class="text-center mb-4">
            <h2 class="fw-bold" style="font-family: 'Unbounded', sans-serif; padding: 20px;  ">Напишите нам</h2>
            <p style="font-family: 'Unbounded', sans-serif; padding: 20px;  ">Заполните форму и мы свяжемся с вами в ближайшее время</p>
        </div>
        <form action="submit_contact.php" method="post" class="p-4 p-md-5 rounded-3 shadow">
            <div class="mb-4">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Иван Иванов" required>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Ваш email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" required>
            </div>
            <div class="mb-4">
                <label for="message" class="form-label">Сообщение</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Ваше сообщение..." required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Отправить</button>
            </div>
        </form>
    </section>
</main>

<?php 
include 'footer.php';
?>
