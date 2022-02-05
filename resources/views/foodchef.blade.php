<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach($chefdata as $data)
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img width="200" height="200" src="chefimage/{{$data->image}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$data->name}}</h4>
                            <span>{{$data->specialty}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->
