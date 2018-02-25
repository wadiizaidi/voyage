@extends('layout.app')
@section('contenue')
 <section id="fh5co-services" data-section="services" style="background-image: url(images/full_image_3.jpg);" data-stellar-background-ratio="0.5">
         <div id="n"></div>
         
<center>
    <a></a>
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="POST" action="{{ route('posts') }}">
            	 {{ csrf_field() }}
                <span class="contact100-form-title">
                    Deposer un programme
                </span>              
                   <div class="wrap-input100 validate-input" data-validate="saisir LE LIEU DE DEPART">
                    <input class="input100" type="text" name="lieu_dep" placeholder="LIEU DEPART">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="SAISIR LE LIEU D ARRIVEE">
                    <input class="input100" type="TEXT" name="lieu_arr" placeholder="LIEU D ARRIVEE">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="saisir La date de depart">
                    <input class="input100" type="date" name="datevo">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                 </div>
                <div class="wrap-input100 validate-input" data-validate="saisir LE temps de depart">
                    <input class="input100" type="TIME" name="tempvo">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                
                   <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                   </div>
                

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Valider
                    </button>
                     <button class="contact100-form-btn" type="reset">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </center>>

    </section>
    @stop
