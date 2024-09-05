@extends('layouts/UsersHome')

@section('content')
<div class="card">
    <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}" style="height: 700px; " class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title"><span style="border-bottom: 10px solid rgb(207, 107, 31); border-bottom-left-radius: 200px;">
            Ebolow</span>a: Un Voyage <br>a Travers le Temps
      </h5>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class=" header-histoire col pt-5">
            <h1 class="pt-3 pb-2 fw-bold">EBOLOWA : Un riche patrimoine historique</h1>
            <p class="content-histoire">Ebolowa est une ville empreinte d'histoire, où se mêlent les traces des civilisations passées et les
                événements marquants qui ont façonné le Cameroun moderne. Avant l'arrivée des colons européens, la
                région d'Ebolowa était peuplée par les peuples Bulu, Ewondo et Fang, dont les traditions et coutumes ont
                laissé une empreinte profonde sur la culture locale. <br>
                Avec la colonisation allemande à la fin du XIXe siècle, Ebolowa devient un poste militaire stratégique. La
                période coloniale, suivie de celle sous mandat français, a profondément marqué la ville. C'est dans ce
                contexte que se sont forgés les contours du Cameroun moderne. Aujourd'hui, Ebolowa conserve les
                vestiges de cette histoire riche et complexe, invitant les visiteurs à découvrir un patrimoine culturel
                authentique.</p>
        </div>
    </div>
</div><br><br><br>
 <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    {{-- timeline de gauche --}}
                    <div class="timeline">
                        <div class="timeline-icon">
                            <i class="  fas fa-history "></i>
                        </div>
                        <div class="timeline-content">
                            <h2 class="titre">1919 Lorem ipsum dolor sit <br>amet consectetur.</h2>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Id, repudiandae fugit. Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.
                            </p>
                            <a href="#" class="lire_la_suite">Lire la suite</a>
                        </div>
                    </div>

                    <div class="timeline-content droite">
                        {{-- <p class="description"> --}}
                            <img src="{{ asset('img/UserImages/eglise.png')}}" alt="">
                        {{-- </p> --}}
                    </div>

                    {{-- timeline de droite --}}
                    <div class="timeline">
                        <div class="timeline-icon">
                            <i class=" fas fa-hand-point-left"></i>
                        </div>
                        <div class="timeline-content  ">
                            <h2 class="titre">1919 Lorem ipsum dolor sit <br>amet consectetur.</h2>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Id, repudiandae fugit. Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.
                            </p>
                            <a href="#" class="lire_la_suite">Lire la suite</a>
                        </div>
                    </div>

                    <div class="timeline">
                        <div class="timeline-icon">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="timeline-content droite ">
                            <h2 class="titre">1919 Lorem ipsum dolor sit <br>amet consectetur.</h2>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Id, repudiandae fugit. Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.
                            </p>
                            <a href="#" class="lire_la_suite">Lire la suite</a>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon">
                            <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="timeline-content droite">
                            <h2 class="titre">1919 Lorem ipsum dolor sit <br>amet consectetur.</h2>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Id, repudiandae fugit. Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.Dolorum, tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.tempore nihil. Quae amet, magni quas reiciendis
                                asperiores veritatis quod nostrum quasi odio consectetur molestias commodi,
                                exercitationem inventore.
                            </p>
                            <a href="#" class="lire_la_suite">Lire la suite</a>
                        </div>

                        <div class="timeline-content ">
                            {{-- <p class="description"> --}}
                                <img src="{{ asset('img/UserImages/maire.png')}}" alt="">
                            {{-- </p> --}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
 </div><br><br>





@endsection

