
<!--Stranica za ne ulogovane korisnike-->


<!DOCTYPE html>
<html>


<!-- head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slatki zalogaj</title>

    <!-- Bootstrap, jQuery, Popper, Bootstrap js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Font Awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="template.css">
    <!-- javascript -->
    <script src="template.js"></script>
    <script src="basket.js"></script>
</head>


<!-- body -->
<body class="d-flex flex-column">

    <!-- navbar -->
    <div id="navbar" class="nav navbar-nav noselect">
        <div id="navbar-content" class="col-12 offset-sm-2 col-sm-8 offset-lg-3 col-lg-6 d-inline-flex">

            <!-- sidebar button -->
            <div>
                <button id="sidebar-collapse" class="btn btn-dark py-0 px-2">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>

            <!-- text and logo -->
            <div class="brand">
                <a href="#">Slatki zalogaj<img id="logo" src="assets/logo.png" alt="logo"></a>
            </div>

            <!-- buttons -->
            <div class="btn button active"><a href="#">Jela</a></div>

            <!-- spacer -->
            <div class="spacer">&nbsp;</div>

            <!-- dropdown -- register -->
            <div id="register" class="btn-group">

                <!-- register button -->
                <button class="btn btn-link p-0" data-toggle="dropdown">
                    Registracija
                </button>

                <!-- register dropdown menu -->
                <form name='registracija' method='POST' class="dropdown-menu dropdown-menu-right p-3" action="<?= site_url("../public/Korisnik/registracija") ?>">
                    <div class="form-group">
                        <label for="register-full-name">ime i prezime</label>
                        <input name='ime' type="text" class="form-control" id="register-full-name" placeholder="Pera Perić">
                    </div>
                    <div class="form-group">
                        <label for="register-email">email</label>
                        <input name='email' type="email" class="form-control" id="register-email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="register-phone-num">broj telefona</label>
                        <input name='telefon' type="tel" class="form-control" id="register-phone-num" placeholder="+381 01 234 5678">
                    </div>
                    <div class="form-group">
                        <label for="register-password-1">lozinka</label>
                        <input name='password' type="password" class="form-control" id="register-password-1" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="register-password-2">ponovite lozinku</label>
                        <input name='pon_password' type="password" class="form-control" id="register-password-1" placeholder="password">
                    </div>
                    <div>
                        <div class="spacer"></div>
                        <button type='submit' id="register-button" class="btn btn-success" style="float: right;">prijava</button>
                    </div>
                </form>

            </div>

            <!-- dropdown -- login -->
            <div id="login" class="btn-group">

                <!-- login button -->
                <button class="btn btn-link p-0" data-toggle="dropdown">
                    Prijava
                </button>

                <!-- login dropdown menu -->
                <form name = "kor_prijava" class="dropdown-menu dropdown-menu-right p-3" method="POST" action="<?= site_url("../public/Korisnik/login") ?>">
                    <div class="form-group">
                        <label for="login-email">email</label>
                        <input name="kor_email" type="email" class="form-control" id="login-email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="login-password">lozinka</label>
                        <input name="kor_password" type="password" class="form-control" id="login-password" placeholder="Password">
                    </div>
                    <div>
                        <div class="spacer"></div>
                        <button type="submit" id="login-button" class="btn btn-success" style="float: right;">prijava</button>
                    </div>
                </form>

            </div>
            
        </div>
    </div>

    <!-- sidebar  -->
    <div id="sidebar">
        <div id="sidebar-dismiss"><i class="fas fa-arrow-left"></i></div>

        <div class="sidebar-header">
            <h3>Slatki zalogaj</h3>
        </div>

        <!--Ovde dodati sortiranje/filtriranje-->

        <form name='vrste_jela'>
            <table class='tabela' cellpadding='7'>
                <th class='naslov'>Vrste jela</th>
                <tr>
                    <td><input type='checkbox' name='predjelo'>Predjelo</td>
                    <td><input type='checkbox' name='pecivo'>Pecivo</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='kuvano_jelo'>Kuvano jelo</td>
                    <td><input type='checkbox' name='pasta'>Pasta</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='rostilj'>Rostilj</td>
                    <td><input type='checkbox' name='pica'>Pica</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='salata'>Salata</td>
                    <td><input type='checkbox' name='pita'>Pita</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='supa'>Supa</td>
                    <td><input type='checkbox' name='kolac'>Kolac</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='corba'>Corba</td>
                    <td><input type='checkbox' name='torta'>Torta</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='riba'>Riba</td>
                    <td><input type='checkbox' name='plodovi_mora'>Plodovi mora</td>
                </tr>
            </table>
        </form>
        <hr>
        <form name='ukus'>
            <table class='tabela' cellpadding='7'>
                <th class='naslov'>Ukus</th>
                <tr>
                    <td><input type='checkbox' name='slatko'>Slatko</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='slano'>Slano</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='ljuto'>Ljuto</td>
                </tr>
            </table>
        </form>
        <hr>
        <form name='dijetalni_zahtevi'>
            <table class='tabela' cellpadding='7'>
                <th class='naslov'>Dijetalni zahtevi</th>
                <tr>
                    <td><input type='checkbox' name='posno'>Posno</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='vegetarijansko'>Vegetarijansko</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='bez_glutena'>Bez glutena</td>
                </tr>
            </table>
        </form>
        <hr>
        <div class='container'>
        <div class='row'>
            <div class='col-sm-2'><img src='assets/sortiraj_rastuce.png' width='25px'></div>
            <div class='col-sm-2'><img src='assets/sortiraj_opadajuce.png' width='25px'></div>
            <div class='col-sm-2'> <img src='assets/sortiraj_alfabetski.png' width='25px'></div>
            <div class='col-sm-2'> <img src='assets/sortiraj_cena.png' width='25px'></div>
            <div class='col-sm-4'><img src='assets/sortiraj_favorite.png' width='25px'></div>
        </div>
        </div> 
        <hr>
        <div class="basket">
            <table id="basket"></table>
        </div>
        <hr>

        <div class='container'>
        <div class='row'>
            <div class='col-sm-12'>
                <form>
                <table class='text-center' cellpadding='5'>
                    <tr >
                        <td class='text-left'>
                            <input type='text' name='naziv_porudzbine' placeholder="Naziv porudzbine(opciono)"/>
                        </td>
                    </tr>
                    <tr>
                        <td class='text-left'>
                            <input type='text' size='6' style="margin-left: 0;" placeholder="Broj osoba"> 
                            <select style="min-height: 30px;">
                                <option>Povod</option>
                                <option>Rodjendan</option>
                                <option>Krstenje</option>
                                <option>Svadba</option>
                                <option>Zurka</option>
                                <option>Diplomski</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td class='text-left'>
                            <input type='date' style="font-size: 11px;">
                            <input type='time'  style="font-size: 11px;">
                        </td>
                    </tr>
                    <tr>
                        <td class='text-left'>
                            <button type='submit' name='potvrdi' class='btn btn-danger' >Potvrdi</button>
                            <button type='submit' name='odustani' class='btn btn-light btn-sm'>Odustani</button>
                        </td>
                    </tr>
                    

                </table>
            </form>
            <br>
            <br>
            <br>
            </div>
        </div>
    </div>
    </div>

    <!-- page content  -->
    <div class="container-fluid">
        <div id="content" class="col-12 offset-sm-2 col-sm-8 offset-lg-3 col-lg-6">
            <h2>Title Title Title Title</h2>
            <form name=forma>
                <button type="button" onclick="addAmount(name,100,200)" name="jelo1">+</button>
                <input type="text" onchange="takeExactAmount(name,100,200,this)" name="jelo1">
                <button type="button" onclick="subAmount(name,100,200)" name="jelo1">-</button>
                <br/>
                <button type="button" onclick="addAmount(name,200,500)" name="jelo2">+</button>
                <input type="text" onchange="takeExactAmount(name,200,500,this)" name="jelo2">
                <button type="button" onclick="subAmount(name,200,500)" name="jelo2">-</button>
            </form>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi cupiditate saepe eum quas voluptatem magni, possimus ab, enim sed quisquam tenetur explicabo architecto iure nihil nobis, ea et ducimus! Suscipit corrupti non fuga beatae reiciendis accusamus magni. Iure tenetur suscipit animi itaque natus exercitationem fugiat magnam quo amet vitae odio ipsam aperiam quia debitis rerum dolor, nam quis, adipisci repellat, molestias sed necessitatibus? Sit eos, consequatur a obcaecati recusandae, ducimus laboriosam aperiam atque ipsam doloremque, veritatis asperiores quis deleniti? Laborum dolorum reiciendis quidem reprehenderit consequuntur amet ipsa ullam illo est similique id beatae, quas rem possimus doloribus blanditiis facilis hic voluptatibus. Id tempore accusantium atque. Mollitia architecto voluptas ullam ducimus reprehenderit maiores placeat est non deleniti omnis sapiente ipsa ea tenetur quibusdam at quo eius voluptatibus eaque sed aliquam laborum, repellat neque! Hic numquam veritatis perspiciatis expedita reprehenderit obcaecati corrupti vitae repellendus suscipit neque sint iure, velit voluptas alias commodi. Enim blanditiis tempore eius minus quis beatae quod iure, laboriosam repellat architecto ipsum deserunt nulla labore libero quaerat dolore quo delectus ipsam adipisci obcaecati asperiores! Maiores ea, officia culpa repellat odio dolorum accusamus voluptate porro nesciunt omnis doloremque laborum sit hic dolorem reprehenderit quidem rerum. Ab dicta perspiciatis aliquid adipisci. Inventore nostrum saepe reprehenderit sapiente laboriosam perspiciatis cumque unde. Illo, soluta quo maxime nisi recusandae velit ipsa, doloribus modi nobis sequi dicta eius at blanditiis voluptatum assumenda magnam a maiores officiis iusto nostrum cumque id nesciunt quaerat! Quasi tempora praesentium et nostrum vitae, dolorem voluptate, qui a, laborum mollitia eaque. Cupiditate sequi quibusdam sunt voluptate delectus labore sed similique consequatur magnam quia obcaecati neque provident illum repudiandae, commodi corrupti magni ratione rem culpa repellat tempora laboriosam ullam natus quidem. Explicabo reprehenderit deserunt nihil quas nostrum mollitia inventore ullam optio tempora eligendi iusto reiciendis magni maxime, animi praesentium pariatur temporibus sit. Modi officia dolores officiis. Quibusdam in repudiandae dicta tenetur quasi quod, blanditiis eos, ex, doloremque reprehenderit id vero error! Mollitia, ad sit facilis non nemo nostrum dignissimos libero ipsa aperiam id consequuntur corporis eum accusantium ducimus porro voluptatem nesciunt sequi eligendi amet deserunt praesentium cupiditate iure rem! A soluta tempora repudiandae ratione ipsa. Consequatur, nisi dignissimos illum vero reiciendis quae unde repellat sit amet neque aut numquam cupiditate, minus perspiciatis! Voluptatem error dolore dolorem odit, repellat deserunt voluptates molestiae quibusdam necessitatibus possimus ad amet fugit laborum ipsa nulla voluptate sed aspernatur ducimus illum nam quod? Cumque fuga fugit cum neque ipsum, consequatur nisi itaque consequuntur pariatur? Tempore ea nesciunt nobis pariatur adipisci corrupti esse in ex dolores nisi corporis laboriosam amet consequuntur ipsum, dicta similique veritatis harum quas beatae, deleniti quo hic veniam aperiam! Eius temporibus natus, quas incidunt qui distinctio, sit soluta deserunt laudantium at quibusdam tenetur ducimus ipsa reprehenderit illo explicabo praesentium, rerum adipisci accusantium esse doloremque nemo vero? Dignissimos incidunt explicabo rerum voluptates reiciendis error fugiat aliquid assumenda, vitae in eveniet nihil repudiandae quibusdam delectus saepe deleniti quam! Minus esse ducimus minima, aspernatur aperiam ex perferendis, perspiciatis doloribus quia nam tempore natus blanditiis voluptatum voluptas. Doloribus ratione eveniet aliquam sed amet incidunt expedita quod ab impedit accusamus pariatur et, placeat magni dolore provident tempore rem architecto aspernatur quidem. Numquam ipsam corporis nemo, nihil at eius exercitationem, ad consequatur quibusdam officiis cupiditate ut cum laudantium, deleniti saepe molestias modi repellendus nostrum quod maiores. Iure, ex rerum velit vero consequatur illum omnis in, doloremque at vel architecto. Neque consectetur expedita, modi quibusdam deserunt eaque totam sequi! Molestiae expedita laudantium unde impedit! Asperiores adipisci eaque eligendi aliquam quasi praesentium voluptatem tempora placeat eius dolore deleniti temporibus minus iusto beatae aut magni consequatur accusamus autem laudantium doloribus, id reiciendis explicabo cupiditate. Quia corporis quaerat voluptates reprehenderit deleniti mollitia quibusdam, eum dolorem aperiam repudiandae quas ipsum eaque ex, a facere id expedita laudantium! Similique officia, nobis deserunt laudantium dignissimos minus quaerat illo et ex totam. Ad praesentium ratione perferendis eius modi, porro cumque molestiae alias rerum quas unde amet vitae quasi delectus numquam blanditiis dolor nulla ab! Perferendis iure earum nesciunt! Consequatur debitis dignissimos blanditiis minima voluptatibus optio dolore magni eligendi qui, possimus, in quas impedit quisquam. Eos dolor a suscipit dolore molestias quia nesciunt quas est optio voluptates veniam consectetur laboriosam fugit, assumenda perferendis vitae et repellat aliquid tempora libero iusto accusantium possimus pariatur doloribus! Vel sapiente fugit perferendis voluptatem deserunt, eaque ex nisi velit quasi odio repudiandae architecto sed deleniti voluptatum saepe earum ea minima ullam voluptates eius enim, aperiam vero inventore culpa. Doloremque delectus error reiciendis praesentium velit officia sed cumque, a eveniet totam dolorem dicta nemo incidunt iste repellendus voluptatibus sit distinctio vitae facere necessitatibus quos repudiandae libero eum! Beatae, iste? Laboriosam quibusdam assumenda, beatae, veniam dolorem perspiciatis, harum facere iste quasi temporibus eum iusto quae ratione deserunt. Enim exercitationem culpa nemo saepe? Et tempora laudantium hic consequuntur mollitia ex quos repellat fugiat quas temporibus. Distinctio quas sequi corporis eius soluta nesciunt, neque vel dolorem minus inventore recusandae ad totam alias molestias. Molestiae, vel velit. Vitae repellat recusandae, facilis quam qui accusantium mollitia atque ad ducimus veritatis incidunt sapiente, eaque eligendi. Perferendis reiciendis quas ullam dolores, aperiam quod magnam cum enim atque, veniam expedita cumque odio a totam voluptates culpa ex? At, veritatis? Dolor facere obcaecati, alias ea, a facilis totam accusantium expedita animi, soluta architecto sapiente doloribus beatae blanditiis cum quas exercitationem. Accusantium ipsam atque sed dolore explicabo assumenda culpa dolorum fugiat, molestias, iusto dolores voluptatem similique cumque? Tenetur deleniti alias beatae earum iure, voluptatum atque quo quis assumenda excepturi temporibus magnam, dolores tempore vitae commodi itaque inventore vel quae. Molestiae nam dolorem iste aperiam reiciendis, amet dolor fugiat, repellat possimus odit tempore beatae quia temporibus voluptates voluptas vero voluptate corrupti reprehenderit illo distinctio. Ipsa, adipisci iure sed accusantium ea harum, ullam nisi quae ex delectus molestias blanditiis, at rerum aliquid veniam voluptatibus nulla corrupti? Enim optio assumenda nulla voluptate veniam temporibus soluta dignissimos iste. Rem, delectus, repudiandae perferendis maiores ipsum molestias voluptates adipisci placeat pariatur culpa at minus voluptate, cupiditate asperiores officia. Ex, nemo, reprehenderit nam libero, hic molestias alias fuga totam deleniti consequatur necessitatibus eligendi itaque quae? Dolorem nisi recusandae laborum? Quae repellendus eaque eos ullam sequi fugit, blanditiis voluptatum! Veritatis rerum voluptas earum, inventore natus sapiente aliquid quam sint blanditiis itaque, veniam nisi? Ea, odio. Esse alias ad dolore reiciendis assumenda quos, nostrum aspernatur! Vel magni repellendus veniam quasi soluta pariatur harum, expedita animi est dolorum atque ipsum. Praesentium harum omnis nemo iusto eius minus, sint quae unde quidem voluptatem incidunt ab labore ea quod earum quasi sunt asperiores pariatur. Exercitationem facere minima nobis cupiditate hic. Illo commodi, odio corporis minus eos itaque eligendi. Eius, nesciunt dolore? Reiciendis sint repellat, placeat ipsa commodi fuga, ex eius nihil a ratione quibusdam quaerat asperiores dolor, impedit aliquid. Vitae sed fugiat ducimus itaque autem ullam dolorem earum? Praesentium architecto, esse aperiam voluptate officia optio sunt? Consequuntur porro id debitis quos eius. Eaque dolorum non sed eveniet. Ipsum sint soluta sapiente nesciunt saepe cumque facilis qui ut aperiam adipisci. Fugiat excepturi corrupti officia inventore molestiae, quos neque fugit. Esse veniam atque consequuntur laborum maxime, beatae, iure dolorum sequi in consectetur consequatur corrupti cumque accusantium? Magni tenetur commodi dolorem dolor quidem fugiat laudantium illum molestias eligendi aut numquam quod, id tempore error minus. Nihil aut fuga tempora, laboriosam adipisci minima unde numquam voluptatem cumque culpa odio blanditiis. Consequuntur, veritatis harum laborum, soluta quidem tempore autem excepturi dolorem iure, doloribus nihil at ratione incidunt neque natus! Minus sequi expedita nisi rem aut magni aliquam ipsa suscipit veniam ipsam quisquam voluptatum quae aperiam sapiente fugit quibusdam, perspiciatis delectus corporis voluptates impedit cumque dicta quis non? Provident alias laboriosam, consequatur tempore aliquid nulla explicabo quasi debitis placeat harum veniam nostrum, facilis eius itaque. Dignissimos, nostrum! Earum aliquam, impedit inventore natus dolorem similique et, voluptas nobis molestias perferendis assumenda? Ducimus unde temporibus ipsam pariatur. Quas, asperiores nemo quisquam ipsa voluptatem ut neque fugit, hic odit, repellendus omnis ipsum alias veniam numquam? Eveniet expedita quibusdam delectus adipisci necessitatibus suscipit, in optio commodi at quis ratione eos dignissimos sapiente! Earum perspiciatis sapiente incidunt eius, minus autem eos quia enim veniam alias ipsam doloribus magnam perferendis aspernatur doloremque cupiditate aut omnis asperiores cumque facere. Cupiditate odit numquam totam delectus. Eos hic, in commodi expedita minus cumque nostrum? Nostrum praesentium labore, neque optio quas cupiditate, quos unde ullam rerum, natus nesciunt. Enim hic amet laudantium, nisi repellendus, magni distinctio modi molestias corrupti ut dolor vero nihil iste corporis maiores dolorem tenetur eius, ab provident quasi eveniet. Tenetur magnam veritatis aut illum facilis non autem at, fugiat quasi nemo et sit, ratione itaque odit officiis ipsum nisi quo. Quaerat repudiandae facere, magni reiciendis quod temporibus pariatur laboriosam esse hic voluptate sint dignissimos assumenda. Fugit ex laboriosam incidunt, consectetur mollitia quidem nesciunt amet repellat ullam quaerat laudantium! Delectus porro minus modi perspiciatis quae laudantium quo rerum excepturi veritatis suscipit, est aperiam ipsum dolorem reprehenderit libero eius cupiditate eveniet facere, iusto amet voluptatibus! Saepe qui pariatur ipsa quod. Facere sit accusamus quisquam ex explicabo reiciendis, fuga est, corrupti aut consequatur dignissimos praesentium aliquam voluptatum dolore obcaecati mollitia odit eos alias quae ullam voluptatem placeat sequi itaque. Nihil ullam aspernatur laboriosam aut optio dolor voluptatibus, iste architecto autem, veniam officiis sapiente? Quasi nemo pariatur eos animi aliquam nihil repellat illum, enim atque iste nesciunt, amet omnis soluta dolorem nulla officia laudantium mollitia numquam harum quod fugiat sequi dicta quidem. Maxime, eaque mollitia. Officia nemo libero dicta amet reiciendis nisi sunt neque, quaerat voluptatum consectetur aliquam incidunt a pariatur expedita quos, ab ullam, sint ad iste delectus laborum laboriosam facere distinctio. Ipsam, ullam accusamus vero error nihil repellat, inventore veritatis dolorem officiis incidunt necessitatibus, minus commodi aperiam molestiae sunt iusto! Perferendis, cumque. Voluptatibus reiciendis sed soluta modi amet aperiam, qui quia. Facere quibusdam sit harum accusamus error labore iure. Quaerat sunt libero at veritatis, soluta excepturi nobis, id hic, modi reiciendis amet autem qui. Blanditiis assumenda suscipit aut numquam nemo laboriosam doloremque laudantium a sapiente, earum sit fugiat officiis autem distinctio enim sed necessitatibus velit maiores ea recusandae neque expedita! Commodi dignissimos labore omnis doloremque aperiam assumenda animi nulla officia? Commodi nostrum fuga atque eius iste cupiditate numquam et tempore aliquid iure ipsa tempora velit corrupti repellat optio exercitationem omnis veritatis quasi repudiandae, eligendi aliquam! Blanditiis quos nulla soluta doloremque illum ipsa animi rem dolorum tempora, cum harum? Nobis in doloribus suscipit dolorum nemo voluptates cupiditate omnis perspiciatis quod accusamus ex sed, eos, quia amet! Numquam doloremque sit, tenetur expedita saepe nobis facere ducimus corporis possimus quod quam atque nisi accusamus consectetur voluptas perferendis natus fugiat dolorem et magnam. Error natus quidem sunt atque! Saepe accusamus nemo nisi eum obcaecati necessitatibus ut nam. Provident animi et aliquam saepe dolore exercitationem, facere rem commodi quibusdam tempora amet hic sit corrupti id quo at perferendis autem nobis, reiciendis soluta. Commodi similique ab vitae debitis officia facere laudantium rem eum voluptate eius. Consectetur, voluptate non corrupti iure ducimus doloremque aperiam maiores, explicabo atque excepturi possimus. Aliquam, dolore expedita. Inventore totam, quibusdam perspiciatis asperiores ducimus at a adipisci, iure fugit magni facere officia perferendis magnam! Error itaque praesentium et vitae saepe quas officiis, eos sint aliquam cupiditate fuga provident eius consectetur ipsum repellendus adipisci? Nisi earum doloremque laudantium voluptatem odio tempora temporibus recusandae mollitia voluptatum praesentium architecto consequatur eveniet beatae cum quisquam doloribus porro exercitationem magni, ipsam a fugiat. Recusandae aliquid, esse cupiditate tenetur sapiente quasi placeat architecto atque nesciunt fuga vitae porro, neque alias. Illo unde quam voluptate recusandae impedit quis optio! Totam facilis illo quod molestias ad, odit sequi ipsam ex dolor similique, in corrupti sunt corporis tempore? Dolor maiores atque odit ipsam, at consectetur delectus possimus laudantium laborum natus? Alias accusamus rerum voluptatem possimus in omnis aliquam cum odio expedita! Accusantium tenetur quibusdam voluptate quod architecto dolor, possimus doloremque dolore repellendus vitae nam animi maiores voluptatem consectetur hic expedita sint doloribus quia unde officiis culpa? Doloribus aliquid dolor laudantium exercitationem quo ipsum veniam, illum minus ea architecto accusamus officiis dolore, veritatis illo laborum aut commodi, est adipisci facilis libero! Minus temporibus provident ipsam cumque dolorem nemo inventore iste sit, eos autem odio?</p>
        </div>
    </div>
    
</body>


</html>

