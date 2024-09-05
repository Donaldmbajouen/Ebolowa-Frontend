@extends('layouts.UsersHome')
@section('content')
<div class="bg-light">

<div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}" class="d-block w-100" style="height:600px; background-size:cover;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:400px; margin-right:600px;">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/UserImages/site2.png') }}" class="d-block w-150" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/UserImages/img-tourisme.png') }}" class="d-block w-150" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
        <div class="d-flex  form-content justify-content-center p-2 mt-0">
            <form action="">
                <div class="row py-2 bg-dark rounded-3 ">
                    <div class="col-sm-3  mx-1 form-header">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" class="form-control" id="firstName" placeholder="Ebolowa" value="" required>
                    </div>
                    <div class="col-sm-2 mx-1 form-header">
                        <input type="date" class="form-control bg-light" id="firstName" placeholder="" value="" required>
                    </div>
                    <div class="col-sm-2 mx-1 form-header">
                        <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                    </div>
                    <div class="col-sm-2 mx-1 form-header">
                        <i class="fa fa-users"></i>
                        <input type="number" class="form-control" id="firstName" placeholder="2 adultes, 1 room" value="" required>
                    </div>
                    <div class="col-sm-2 py-1">
                        <input type="submit" class="form-control btn btn-primary px-1 py-2 " id="firstName" value="Search" required>
                    </div>
                </div>
            </form>

        </div>
    </div><br>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-4">
            <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}"
            style="height: 700px; width:850px; border-top-left-radius:20px;border-bottom-left-radius:20px;"  >
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}"
            style="height: 345px;width:400px; margin-bottom:10px; border-top-right-radius:20px;">
            <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}"
            style="height: 345px;width:400px; border-bottom-right-radius:20px;" >
        </div>
    </div>
</div><br>

<div class="container p-5" style="background-color: rgba(255, 252, 252, 0.885); box-shadow: 0px 0px 3px 3px rgba(0, 0, 0, 0.159);">
    <ul class="nav nav-pills mb-3 rounded-3" id="pills-tab" role="tablist" style=" width:580px; height:65px;" >
        <li class="nav-item" role="presentation">
          <button class="nav-link active col-md-12" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-info"></i> Information</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link col-md-12" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-building"></i> Tour Plan</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link col-md-12" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fas fa-map-marker-alt"></i> Loalisation</button>
        </li>
    </ul><br>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="row">
                <div class="col-md-7 information">
                    <h2>Ebolowa Touristique <br><span> XAF 2000
                        </span><i style="font-size: 18px;font-family: 'Courier';">/par couple</i></h2>
                    <p class="view"><i class="fa fa-star" style="color: rgba(255, 255, 0, 0.903)"></i><i class="fa fa-star"style="color: rgba(255, 255, 0, 0.903)"></i>
                        <i class="fa fa-star" style="color: rgba(255, 255, 0, 0.903)"></i><i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (2.3k vues)
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae est, perferendis quis cupiditate velit
                        accusantium alias eos suscipit vel natus! Eaque, ipsa mollitia! Porro ad, consequuntur illum molestiae
                        necessitatibus expedita quo.
                        Possimus culpa natus aspernatur vel ea ipsum iusto laudantium reiciendis
                        assumenda dolorem libero aut recusandae itaque corrupti, rerum temporibus soluta
                        veniam. Non placeat ea, accusantium velit architecto harum commodi mollitia necessitatibus exercitationem
                        dolores ipsa illo facere temporibus in. Aliquam nobis dolores aut impedit, soluta deleniti, iusto enim, nam
                        suscipit repellendus animi fugit omnis id amet dolorum ut sunt? Vitae optio quia at, eum perspiciatis accusamus
                        aperiam voluptatem impedit, amet qui quisquam nam facilis quae pariatur! Quasi quaerat sint voluptatem? Suscipit
                         et repudiandae blanditiis quas doloremque veritatis ut sed nulla voluptas accusantium explicabo, autem ipsam eius
                         iure eum consectetur sint vero repellendus harum in. Illo quae neque corrupti optio reprehenderit molestias amet!
                    </p>
                    <div class="details">
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                        <p><span class="title_details">Destination  </span> :Zurich, Switzerland</p>
                    </div>
                </div>
                <div class="col-md-5 p-5">
                    <div class="p-5 bg-light" style="font-family: 'Times New Roman; ">
                        <h1 >Book This Tour</h1>
                        <p>Ex optio sequi et quos praesentium in nostrum
                            labore nam rerum iusto .
                            </p>
                        <form class="">
                            <div class="row mb-3">
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Name">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Email">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Number of Ticket">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn p-3 btn-lg col-md-11 hover" style="background-color: rgba(212, 100, 24, 0.91); color:white; font-weight:bold;">Check Aviability</button>
                              </div><br>
                              <div class="" style="width: 100%">
                                <button type="submit" class="btn p-3 btn-lg col-md-11" style="background-color: rgba(212, 100, 24, 0.91); color:white;font-weight:bold;">Book Now</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="1">
           <div class="row">
            <div class="col-md-7">
                <div class="container">
                    <h1>Tour Plan</h1><br>
                    <h5> <button class="btn  btn-lg rounded-2 mx-3" style="background-color: rgba(212, 100, 24, 0.91); color:white;">01</button>DAY 1: Departure</h5>
                    <div class="description" style="margin-left: 70px">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Ea ex magnam qui soluta voluptatum blanditiis?</p>
                    <ul>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                    </ul>
                    </div>
                </div>
                <div class="container">
                    <h5> <button class="btn btn-lg rounded-2 mx-3" style="background-color: rgba(212, 100, 24, 0.91); color:white;">02</button>DAY 2: Departure</h5>
                    <div class="description" style="margin-left: 70px">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, omnis? <br> Ea ex magnam qui soluta voluptatum blanditiis?</p>
                    <ul>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                    </ul>
                    </div>
                </div>
                <div class="container">
                    <h5> <button class="btn btn-lg rounded-2 mx-3" style="background-color: rgba(212, 100, 24, 0.91); color:white;">03</button>DAY 3: Departure</h5>
                    <div class="description" style="margin-left: 70px">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Ea ex magnam qui soluta voluptatum blanditiis?</p>
                    <ul>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                        <li>5 Star Accommodation</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 p-5">
                <div class="p-5 bg-light" style="font-family: 'Times New Roman; ">
                    <h1 >Book This Tour</h1>
                    <p>Ex optio sequi et quos praesentium in nostrum
                        labore nam rerum iusto .
                        </p>
                    <form class="">
                        <div class="row mb-3">
                            <div class="col-sm-10 mb-2 book_div mx-3">
                                <i class="fas fa-user"></i>
                              <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Name">
                            </div>
                            <div class="col-sm-10 mb-2 book_div mx-3">
                                <i class="fas fa-user"></i>
                              <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Email">
                            </div>
                            <div class="col-sm-10 mb-2 book_div mx-3">
                                <i class="fas fa-user"></i>
                              <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Phone Number">
                            </div>
                            <div class="col-sm-10 mb-2 book_div mx-3">
                                <i class="fas fa-user"></i>
                              <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Number of Ticket">
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn p-3 btn-lg col-md-11 hover" style="background-color: rgba(212, 100, 24, 0.91); color:white; font-weight:bold;">Check Aviability</button>
                          </div><br>
                          <div class="" style="width: 100%">
                            <button type="submit" class="btn p-3 btn-lg col-md-11" style="background-color: rgba(212, 100, 24, 0.91); color:white;font-weight:bold;">Book Now</button>
                        </div>

                    </form>
                </div>
            </div>

           </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="row">
                <div class="col-md-7">
                    <h1> <i class="fa fa-map-marker-alt">  </i>Location</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, enim.</p>
                    <img src="{{ asset('img/UserImages/localisation.png') }}" style="width:100%; height:300px;">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Consequatur, dignissimos. Laboriosam maxime dolorem nulla laborum similique tenetur magnam aut quos ipsa autem, nam labore at ipsum ipsam mollitia <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, repellendus. Vero est, quis qui illo ratione officia vel ullam sunt?sunt doloribus modi doloremque. Sit quasi veniam quaerat vitae doloribus obcaecati itaque quas saepe perferendis facere ut molestias, incidunt sequi animi similique. Praesentium optio laborum deleniti quisquam officiis deserunt dolor aliquam aperiam amet sed!
                </div>
                <div class="col-md-5 p-5">
                    <div class="p-5 bg-light" style="font-family: 'Times New Roman; ">
                        <h1 >Book This Tour</h1>
                        <p>Ex optio sequi et quos praesentium in nostrum
                            labore nam rerum iusto .
                            </p>
                        <form class="">
                            <div class="row mb-3">
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Name">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Email">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-10 mb-2 book_div mx-3">
                                    <i class="fas fa-user"></i>
                                  <input type="text" class="fw-bold py-4 px-2" id="inputPassword3" placeholder="Number of Ticket">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn p-3 btn-lg col-md-11 hover" style="background-color: rgba(212, 100, 24, 0.91); color:white; font-weight:bold;">Check Aviability</button>
                              </div><br>
                              <div class="" style="width: 100%">
                                <button type="submit" class="btn p-3 btn-lg col-md-11" style="background-color: rgba(212, 100, 24, 0.91); color:white;font-weight:bold;">Book Now</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div><br><br>
</div>

<!-- Button trigger modal -->


@endsection

