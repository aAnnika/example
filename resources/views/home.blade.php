<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body style="background-color:var(--primary-color);">
<x-heading>

</x-heading>
<main>

    <!-- Первый ряд карточек -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/vaccination.jpg" class="card-img-top" alt="vaccination">
                        <div class="card-body">
                            <h5 class="card-title">Вакцинация</h5>
                            <p class="card-text">Вакцинация поможет вашему питомцу прожить долгую и счастливую жизнь, не подвергаясь опасным заболеваниям</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/sterilization.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Стерилизация (Кастрация)</h5>
                            <p class="card-text">Стерилизация (кастрация) предотвращает нежелательную беременность, снижает агрессивность и риск заболеваний, улучшает поведение.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/surgery.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Хирургия</h5>
                            <p class="card-text">Хирургия в ветеринарии включает операции для лечения травм, заболеваний и коррекции аномалий, улучшая здоровье животных.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Второй ряд карточек -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/consultation.jpg" class="card-img-top" alt="vaccination">
                        <div class="card-body">
                            <h5 class="card-title">Консультация</h5>
                            <p class="card-text">Консультация в ветеринарии дает рекомендации по уходу, питанию и профилактике заболеваний, обеспечивая здоровье питомца.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/pet_store.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Зоомагазин</h5>
                            <p class="card-text">Зоомагазин предлагает товары для животных: корма, игрушки, аксессуары, средства ухода и витамины.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/pharmacy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Вет аптека</h5>
                            <p class="card-text">Ветаптека предлагает медикаменты, витамины, препараты для профилактики и лечения заболеваний животных.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer></x-footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

