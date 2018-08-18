@extends('landing.index')
@section('content')
    

<section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
    <div class="container">
        <!-- Carousel Start-->
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <p><img src="img/logo.png" alt="" class="ml-auto"></p>
                                <h1>Multipurpose responsive theme</h1>
                                <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                            </div>
                            <div class="col-md-7"><img src="img/template-homepage.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7 text-center"><img src="img/template-mac.png" alt="" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h2>46 HTML pages full of features</h2>
                                <ul class="list-unstyled">
                                    <li>Sliders and carousels</li>
                                    <li>4 Header variations</li>
                                    <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                    <li>+ 11 extra pages showing template features</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <h1>Design</h1>
                                <ul class="list-unstyled">
                                    <li>Clean and elegant design</li>
                                    <li>Full width and boxed mode</li>
                                    <li>Easily readable Roboto font and awesome icons</li>
                                    <li>7 preprepared colour variations</li>
                                </ul>
                            </div>
                            <div class="col-md-7"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h1>Easy to customize</h1>
                                <ul class="list-unstyled">
                                    <li>7 preprepared colour variations.</li>
                                    <li>Easily to change fonts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End-->
    </div>
</section>
<section class="bar     background-white">
    <div class="container text-center">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="box-simple">
                        <img src="{{$product->primaryImage()}}"/>
                        <h3 class="h4">{{$product->name}}</h3>
                        <p>{{$product->description}}</p>
                    </div>
                </div>
            @endforeach
            
        
    </div>
</section>
<section class="bar background-pentagon no-mb text-md-center">
    <div class="container">
        <div class="heading text-center">
            <h2>Testimonials</h2>
        </div>
        <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>
        <!-- Carousel Start-->
        <ul class="owl-carousel testimonials list-unstyled equal-height">
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>John McIntyre</h5>
                                <p>CEO, TransTech</p>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Carousel End-->
    </div>
</section>
@endsection