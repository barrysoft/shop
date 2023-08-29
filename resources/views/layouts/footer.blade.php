<!-- site__footer -->
<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contactez Nous</h5>
                            <div class="footer-contacts__text">
                            </div>
                            <ul class="footer-contacts__contacts">
                                <li>
                                    <i class="footer-contacts__icon fas fa-globe-americas"></i>
                                    Nongo Conteyah
                                </li>
                                <li>
                                    <i class="footer-contacts__icon far fa-envelope"></i>
                                    sgiautomobiles@yahoo.fr
                                </li>
                                <li>
                                    <i class="footer-contacts__icon fas fa-mobile-alt"></i>
                                    +(224) 620-39-30-53 / 621-20-77-08
                                </li>
                                <li><i class="footer-contacts__icon far fa-clock"></i> Lun-Sam 8:30 - 17:30</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links"><h5 class="footer-links__title">
                                Information</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">À propos de nous</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Informations de livraison</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Politique de confidentialité</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Termes & conditions Conditions</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Contactez-nous</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Mon Compte</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Mon compte</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Voir le panier</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Suivre ma commande</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="#" class="footer-links__link">Commande</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Newsletter</h5>
                            <div class="footer-newsletter__text">
                            </div>
                            <form action="#" class="footer-newsletter__form">
                                <label class="sr-only" for="footer-newsletter-address">Adresse Email</label>
                                <input type="text" class="footer-newsletter__form-input form-control"
                                       id="footer-newsletter-address" placeholder="Email Address...">
                                <button class="footer-newsletter__form-button btn btn-primary">S'abonner</button>
                            </form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">
                                Suivez-nous sur les réseaux sociaux
                            </div>
                            <ul class="footer-newsletter__social-links">
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                    <a href="https://themeforest.net/user/kos9" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                    <a href="https://themeforest.net/user/kos9" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                    <a href="https://themeforest.net/user/kos9" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                    <a href="https://themeforest.net/user/kos9" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                {{--<div class="site-footer__copyright">
                    <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                </div>--}}
                <div class="site-footer__payments">
                    <img src="{{asset('assets/images/payments.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- site__footer / end -->
@stack('scripts')
