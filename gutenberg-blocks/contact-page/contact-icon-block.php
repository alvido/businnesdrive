<section class="contact">
    <div class="container">
        <div class="wrapper">
            <div class="contact__info">
                <h2><?php the_field( 'contact_title' ); ?></h2>
                <p><?php the_field( 'description' ); ?></p>
                <div class="contact__links">
                    <a href="tel:<?php the_field( 'phone_number' ); ?>">
                                <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.88498 0.511025C2.05996 0.336313 2.27006 0.200783 2.50138 0.113415C2.7327 0.0260465 2.97994 -0.0111645 3.22672 0.00424771C3.47351 0.0196599 3.7142 0.0873434 3.93285 0.202813C4.15149 0.318282 4.34311 0.478901 4.49498 0.674025L6.28998 2.98002C6.61898 3.40302 6.73498 3.95402 6.60498 4.47402L6.05798 6.66402C6.0297 6.77745 6.03123 6.89627 6.06242 7.00893C6.09361 7.1216 6.1534 7.22429 6.23598 7.30702L8.69298 9.76402C8.77582 9.84678 8.87868 9.90667 8.99153 9.93786C9.10439 9.96906 9.22341 9.97049 9.33698 9.94203L11.526 9.39503C11.7826 9.33086 12.0504 9.32588 12.3093 9.38045C12.5681 9.43502 12.8111 9.54772 13.02 9.71002L15.326 11.504C16.155 12.149 16.231 13.374 15.489 14.115L14.455 15.149C13.715 15.889 12.609 16.214 11.578 15.851C8.93917 14.9226 6.54325 13.4119 4.56798 11.431C2.58727 9.45604 1.07659 7.06048 0.147983 4.42202C-0.214017 3.39202 0.110983 2.28502 0.850983 1.54502L1.88498 0.511025Z"
                                              fill="#3E5680" />
                                    </svg>
                                </span>
                        <?php the_field( 'phone_number' ); ?>
                    </a>
                    <a href="mailto:<?php the_field( 'email' ); ?>">
                                <span>
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.3335 0.666687H1.66683C0.933496 0.666687 0.340163 1.26669 0.340163 2.00002L0.333496 10C0.333496 10.7334 0.933496 11.3334 1.66683 11.3334H12.3335C13.0668 11.3334 13.6668 10.7334 13.6668 10V2.00002C13.6668 1.26669 13.0668 0.666687 12.3335 0.666687ZM12.3335 3.33335L7.00016 6.66669L1.66683 3.33335V2.00002L7.00016 5.33335L12.3335 2.00002V3.33335Z"
                                            fill="#3E5680" />
                                    </svg>
                                </span>
                        <?php the_field( 'email' ); ?>
                    </a>
                    <a href="javascript:void(0);">
                                <span>
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 16C6 16 12 10.314 12 6C12 4.4087 11.3679 2.88258 10.2426 1.75736C9.11742 0.632141 7.5913 0 6 0C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 2.37122e-08 4.4087 0 6C0 10.314 6 16 6 16ZM6 9C5.20435 9 4.44129 8.68393 3.87868 8.12132C3.31607 7.55871 3 6.79565 3 6C3 5.20435 3.31607 4.44129 3.87868 3.87868C4.44129 3.31607 5.20435 3 6 3C6.79565 3 7.55871 3.31607 8.12132 3.87868C8.68393 4.44129 9 5.20435 9 6C9 6.79565 8.68393 7.55871 8.12132 8.12132C7.55871 8.68393 6.79565 9 6 9Z"
                                            fill="#3E5680" />
                                    </svg>
                                </span>
                        <?php the_field( 'location_title' ); ?>

                    </a>
                </div>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="1234" title="Contact form"]'); ?>

        </div>
    </div>
</section>