<?php
/* Template Name: Strona główna */ 

get_header(); ?>


<section id="top-site-heading" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col banner-col">
                <h1><strong>Firmowa&nbsp;strona&nbsp;internetowa</strong><br>Zaistniej&nbsp;w&nbsp;sieci i&nbsp;niech&nbsp;czas zrobi&nbsp;swoje!</h1>
                <h3>Jesteś właścicielem małej lub średniej firmy i chcesz zaistnieć w internecie? Szukasz profesjonalnej i niedrogiej usługi tworzenia stron internetowych?<br><br>Zgłoś się do nas!</h3>
                <a href="<?php echo site_url('/oferta'); ?>
" class="strona-button">Więcej...</a>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Co robimy?</h2>
                <h4>Tworzymy Państwa miejsce w sieci!</h4>
                <p>Specjalizujemy się w tworzeniu stron internetowych dla małych i średnich firm. Oferujemy kompleksową obsługę, od projektu graficznego, przez programowanie, po optymalizację i pozycjonowanie. Nasze strony są responsywne, czyli dostosowane do różnych urządzeń i rozdzielczości ekranu. Używamy nowoczesnych technologii i narzędzi, takich jak HTML5, CSS3, JavaScript, WordPress, Bootstrap i inne.</p>
                <p>Naszym celem jest stworzenie strony internetowej, która będzie nie tylko ładna i funkcjonalna, ale także skuteczna w przyciąganiu i zatrzymywaniu klientów. Dlatego dbamy o to, aby nasze strony były:</p>
                <ul>
                    <li><strong>atrakcyjne</strong> - zwracamy uwagę na estetykę i ergonomię, dobieramy odpowiednie kolory, czcionki, zdjęcia i elementy graficzne</li>
                    <li><strong>intuicyjne</strong> - zapewniamy łatwą nawigację i przejrzystą strukturę, umożliwiamy szybkie znalezienie informacji i kontaktu</li>
                    <li><strong>perswazyjne</strong> - podkreślamy zalety i korzyści z oferty, budujemy zaufanie i wiarygodność, zachęcamy do podjęcia akcji</li>
                    <li><strong>zoptymalizowane</strong> - stosujemy zasady SEO (Search Engine Optimization), czyli optymalizacji pod kątem wyszukiwarek internetowych, takie jak Google czy Bing. Dzięki temu nasze strony mają lepszą widoczność i pozycję w wynikach wyszukiwania.</li>
                </ul>
                <p>Nasza oferta jest elastyczna i dopasowana do indywidualnych potrzeb i budżetu każdego klienta. Możemy stworzyć stronę internetową od podstaw lub odświeżyć istniejącą. Możemy również zająć się utrzymaniem i aktualizacją strony, dodawaniem treści i funkcjonalności. Niezależnie od tego, jaką masz wizję swojej strony internetowej, my ją zrealizujemy!</p>
            </div>
        </div>
    </div>
</section>

<section id="why-we" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Dlaczego my?</h2>
                <h4>Współpraca z nami to przede wszystkim:</h4>
            </div>
        </div>
        <div class="row assets-row">
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Wiedza i doświadczenie</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-piggy-bank"></i>
                <h3>Atrakcyjne ceny</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-headset"></i>
                <h3>Wsparcie na każdym etapie</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-bullseye"></i>
                <h3>Indywidualne podejście</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <i class="fa-solid fa-circle-info"></i>
                <h3>Rzetelne doradztwo</h3>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
            <i class="fas fa-bed"></i>
                <h3>Spokój i bezpieczeństwo</h3>
            </div>
        </div>

    </div>

</section>

<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-5 d-none d-lg-flex image-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pracujacy-zespol.webp" alt="Pracujący zaspół">
            </div>
            <div class="col-12 col-lg-7 text-col">
                <h2>O nas</h2>
                <p>Naszą misją jest dostarczanie:</p>
                <ul>
                    <li><i class="fa-solid fa-bullseye"></i>indywidualnych</li>
                    <li><i class="fa-solid fa-money-bill-trend-up"></i>efektywnych</li>
                    <li><i class="fa-solid fa-piggy-bank"></i>przystępnych</li>
                </ul>
                <p>rozwiązań webowych, które spełniają oczekiwania naszych klientów i ich użytkowników. Nie ograniczamy się do gotowych szablonów, ale tworzymy strony od podstaw, dopasowując je do branży, celu i charakteru firmy.</p>
                <a href="<?php echo site_url('/o-nas'); ?>
" class="strona-button">Czytaj dalej...</a>
            </div>
        </div>
    </div>
</section>

<section id="fp-contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 text-col">
                <h2>Skontaktuj się!</h2>
                <p>Jeśli jesteś zainteresowany naszą ofertą, skontaktuj się z nami już dziś! Wypełnij formularz kontaktowy na naszej stronie lub zadzwoń do nas pod numer telefonu. Przygotujemy dla Ciebie bezpłatną wycenę i przedstawimy propozycję współpracy.</p>
                <p>Nie czekaj dłużej! Zaufaj nam i daj nam stworzyć stronę internetową dla Twojej firmy! Z nami osiągniesz sukces w internecie!</p>
                <a href="tel:+48602726478" class="strona-button">Zadzwoń!</a>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-flex image-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kontakt-smartfon-koperta.webp" alt="Telefon i koperta">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>