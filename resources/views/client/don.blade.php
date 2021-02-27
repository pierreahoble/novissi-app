@extends('client.main')


@section('contenu')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Faire un Don</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/"">Accueil</a></li>
                            <li class="breadcrumb-item active"> Ajouter votre montant </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->



    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  faire le don ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-lg-12">
                            <div class="contact-form-wrap">

                                <form  action="{{route('validerLeDon')}}" method="post">
                                    <!-- <form id="contact-form" action="assets/php/mail.php" method="post"> -->
                                        @csrf
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="nom" type="text" placeholder="Nom">
                                            </div>
                                            <div class="contact-inner">
                                                <input  name="prenom" type="text" placeholder="Prénoms">
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="montant" type="number" placeholder="Montant à payer">
                                        </div>
                                        <div class="contact-inner">
                                            <select name="mode" >
                                                <option value="moov">Moov</option>
                                                <option value="tgcel">Togocel</option>
                                                <option value="rib">Banque</option>
                                            </select>
                                            {{-- <input name="con_subject" type="number" placeholder="Montant à payer"> --}}
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="commentaire" placeholder="Votre commentaire"></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Envoyé message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            {{-- <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">San Francisco</h5>
                                <ul class="conact-info__list">
                                    <li>58 Howard Street #2 San Francisco, CA 941</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.sanfrancisco@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">New York</h5>
                                <ul class="conact-info__list">
                                    <li>58 Howard Street #14 New York</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.newyork@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+47)1221 09878</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Russia</h5>
                                <ul class="conact-info__list">
                                    <li>The Courtyard Building 11 Curtain Road, Russia</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Conact us info End  ====================--> --}}






            <!--========== Call to Action Area Start ============-->
            {{-- <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--========== Call to Action Area End ============-->




        </div>





    </div>


    
@endsection