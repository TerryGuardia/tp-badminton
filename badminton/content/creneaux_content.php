<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">PLANING</span>
                        <span class="section-heading-lower">JEU LIBRE</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        foreach ($array as $key => $value) {
                            echo "<li class='list-unstyled-item list-hours-item d-flex'>
                                $key
                                <span class='ms-auto'>$value</span>
                                </li>";
                        }
                        ?>
                        <!-- <li class="list-unstyled-item list-hours-item d-flex">
                            Sunday
                            <span class="ms-auto">Closed</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Monday
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Tuesday
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Wednesday
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Thursday
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Friday
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Saturday
                            <span class="ms-auto">9:00 AM to 5:00 PM</span>
                        </li> -->
                    </ul>
                    <p class="address mb-3">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av.Jean Mermoz, 34200 Montpellier
                        </em>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.78869124157!2d3.890837835724157!3d43.61094115525144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e9982b11%3A0xc6dd43f58630d399!2sLyc%C3%A9e%20Jean%20Mermoz!5e0!3m2!1sfr!2sfr!4v1672836140351!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p class="mt-2">
                        <small><em>Contact</em></small>
                        <br />
                        (+33)6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'equipe_content.php';
?>