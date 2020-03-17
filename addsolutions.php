<?php
require_once('navibar.php');
?>


<link rel="stylesheet" href="css/bootstrap-textarea.css">
<link rel="stylesheet" href="css/tags.css">
<script type="text/javascript" src="js/tags-script.js"></script>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Wiedza jest dla nas najważniejsza!</h2>
                        <div class="page_link">
                            <a href="index.html">Szukaj</a>
                            <a href="contact.html">Zaloguj</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">

            <form action="upload.php" method="post" >

                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <h3 class="mb-30 title_color">Dodaj opracowanie</h3>
            
                        <div class="mt-10">
                            <input type="text" name="Title" placeholder="Tytuł " onfocus="this.placeholder = 'Wpisz'" onblur="this.placeholder = 'Tytuł'" required class="single-input">
                        </div>


                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="ti-location-pin" aria-hidden="true"></i></div>
                            <input type="text" name="Tags" placeholder="Tagi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="ti-map" aria-hidden="true"></i></div>
                            <div class="form-select"  id="default-select2">
                                <select name="Category">
                                    <option value="1">Kategoria</option>
                                    <option value="Medycyna">Zarządzanie</option>
                                    <option value="IT">IT</option>
                                    <option value="Ekonomia">Ekonomia</option>
                                    <option value="Matematyka">Matematyka</option>
                                    <option value="Organizacja">Organizacja</option>
                                    <option value="Fizyka">Fizyka</option>
                                    <option value="Fizyka">Ekologia</option>
                                    <option value="inna">inna</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="ti-location-arrow" aria-hidden="true"></i></div>
                            <div class="form-select"  id="default-select2">
                                <select name="Category">
                                    <option value="1">Branza</option>
                                    <option value="Medycyna">Medycyna</option>
                                    <option value="IT">IT</option>
                                    <option value="Ekonomia">Bankowość</option>
                                    <option value="Matematyka">Motoryzacja</option>
                                    <option value="Organizacja">Handel</option>
                                    <option value="Fizyka">Turystyka</option>
                                    <option value="Fizyka">inna</option>
                                </select>
                            </div>
                        </div>

                        <!--Material textarea-->
                        <div class="input-group-icon mt-10">
                            <div class="md-form amber-textarea active-amber-textarea">

                                <textarea id="form19" name="TextArea" class="md-textarea form-control" placeholder="Dodaj opis swojego opracowania " rows="3" style="margin-top: 0px;margin-bottom: 0px;height: 342px;"></textarea>

                            </div>
                        </div>
                        <div class="input-group-icon mt-5 w-50 ">
                        <div style="float-left">
                            <input type="text" name="Autor" placeholder="Autor " onfocus="this.placeholder = 'Wpisz'" onblur="this.placeholder = 'Autor'" required class="single-input">
                            
                            </div>
                            <div style="float-left">
                            <input type="text" name="opiekun" placeholder="Opiekun naukowy " onfocus="this.placeholder = 'Wpisz'" onblur="this.placeholder = 'Opiekun naukowy'" required class="single-input">
                            </div>
                        </div>
                        
                        <!--Material textarea


                        <div class="mt-10">
                            <textarea class="single-textarea " placeholder="Opis" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                        </div>-->



                    </div>
                    <div class="col-lg-4 col-md-5 mt-sm-30 element-wrap">
                        <div class="single-element-widget">
                            <h3 class="mb-30 title_color">Ustawienia</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>Dokument publiczny</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="default-switch" checked>
                                    <label for="default-switch"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>Wyrażam zgodę</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="primary-switch" checked>
                                    <label for="primary-switch"></label>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="single-element-widget">
                            <h3 class="mb-30 title_color">Prześlij pliki</h3>

                            <h5 class="typo-list">Okładka<sup>*</sup></h5>
                            <div class="input-group">
                                <label class="input-group-prepend">
                                    <span class="btn btn-primary">
                                        JPG<input type="file" style="display: none;" name="uploadJPG" id="uploadJPG" multiple>
                                    </span>
                                </label>
                                <input type="text" class="form-control" placeholder="Wybierz plik" readonly>
                            </div>

                            <br>

                            <h5 class="typo-list">Oprcowanie<sup>*</sup></h5>
                            <div class="input-group">
                                <label class="input-group-prepend">
                                    <span class="btn btn-primary">
                                        PDF<input type="file" style="display: none;" name="uploadPDF" id="uploadPDF" multiple/>
                                    </span>
                                </label>
                                <input type="text" class="form-control" placeholder="Wybierz plik" readonly/>
                            </div>





                        </div>
                        <h6 class="typo-list"><sup>*</sup> Pola wymagane</h6>
                    </div>
                    <br>

                    <div class="col-lg-7 col-md-7">
                        <br>
                        <br>
                    <input type="submit" class="genric-btn primary col-lg-7 col-md-7" style="width:500px; text-align: center;"/>
                        
                </div>
           
        </div>
            </form>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>
    $(function() {
        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on("change", ":file", function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input
                .val()
                .replace(/\\/g, "/")
                .replace(/.*\//, "");
            input.trigger("fileselect", [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready(function() {
            $(":file").on("fileselect", function(event, numFiles, label) {
                var input = $(this)
                    .parents(".input-group")
                    .find(":text"),
                    log = numFiles > 1 ? numFiles + " files selected" : label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }
            });
        });
    });

</script>

<?php
require_once('fotter.php');
?>
