<?php
/**
 * Advanced PHP 7 eCommerce Website (https://22digital.agency)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * @copyright Copyright (c) 22 Digital (https://22digital.agency)
 * @copyright Copyright (c) Justin Hartman (https://justinhartman.blog)
 * @author    Justin Hartman <justin@hartman.me> (https://justinhartman.blog)
 * @link      https://github.com/justinhartman/complete-php7-ecom-website GitHub Project
 * @since     0.1.0
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 */

/**
 * Load the bootstrap file.
 */
//require '/electro/config/bootstrap.php';

/**
 * Load the template files.
 */
include 'inc/header.php';
include 'inc/nav.php';
?>

<!-- SHOP CONTENT -->
<section id="content">
    <div class="content-blog">
        <div class="container">
            <div class="row">
                <div class="page_header text-center">
                    <h2>Compte</h2>
                    <p><?php echo getenv('STORE_TAGLINE'); ?></p>
                </div>
                <div class="col-md-12">
                    <div class="row shop-login">
                        <div class="col-md-6">
                            <div class="box-content">
                                <h3 class="heading text-center">Je suis un client</h3>
                                <div class="clearfix space40"></div>

                                <form class="logregform" method="post" action="loginprocess.php">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Adresse E-mail</label>
                                                <input type="email" name="email" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <a class="pull-right" href="#">(Mot de passe oublié?)</a>
                                                <label>Mot de passe</label>
                                                <input type="password" name="password" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="remember-box checkbox">
                                                    <label for="rememberme">
                                                    <input type="checkbox" id="rememberme" name="rememberme">se souvenir de moi
                                                </label>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="button btn-md pull-right">se connecter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-content">
                                <h3 class="heading text-center">Nouveau client?</h3>
                                <div class="clearfix space40"></div>

                                <form class="logregform" method="post" action="registerprocess.php">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Adresse E-mail</label>
                                                <input type="email" name="email" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Mot de passe</label>
                                                <input type="password" name="password" value="" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>confirmer le mot de passe</label>
                                                <input type="password" name="passwordagain" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="space20"></div>
                                            <button type="submit" class="button btn-md pull-right">Inscription</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
