@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
    <div class="container pt-90 pb-50">
      <div class="section-content pt-100">
        <div class="row"> 
          <div class="col-md-12">
            <h3 class="title text-white">Blog</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row ">
        <div class="col-sm-12 col-md-3">
          <div class="sidebar sidebar-left mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">Archives</h5>
              <ul class="list-divider list-border list check">
                <li><a href="#">Vehicle Accidents</a></li>
                <li><a href="#">Family Law</a></li>
                <li><a href="#">Personal Injury</a></li>
                <li><a href="#">Personal Injury</a></li>
                <li><a href="#">Case Investigation</a></li>
                <li><a href="#">Business Taxation</a></li>
              </ul>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Twitter Feed</h5>
              <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="3"></div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Image gallery with text</h5>
              <div class="widget-image-carousel">
                <div class="item">
                  <img src="https://placehold.it/365x230" alt="">
                  <h4 class="title">This is a Demo Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                </div>
                <div class="item">
                  <img src="https://placehold.it/365x230" alt="">
                  <h4 class="title">This is a Demo Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                </div>
                <div class="item">
                  <img src="https://placehold.it/365x230" alt="">
                  <h4 class="title">This is a Demo Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                </div>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Tags</h5>
              <div class="tags">
                <a href="#">travel</a>
                <a href="#">blog</a>
                <a href="#">lifestyle</a>
                <a href="#">feature</a>
                <a href="#">mountain</a>
                <a href="#">design</a>
                <a href="#">restaurant</a>
                <a href="#">journey</a>
                <a href="#">classic</a>
                <a href="#">sunset</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blog-posts">
            <div class="col-md-12">
              <div class="row list-dashed">

                <article class="post mb-50 pb-30">                    
                  <div class="entry-header">
                    <div class="post-thumb">
                     <img alt="" src="https://placehold.it/900x450" class="img-fullwidth img-responsive"> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">consectetur adipisicing elit. Illum, temporibus </a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                    <div class="post-thumb">
                     <img alt="" src="https://placehold.it/900x450" class="img-fullwidth img-responsive"> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Text Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                    <div class="post-thumb">
                     <iframe src="https://player.vimeo.com/video/24302498?title=0&byline=0&portrait=0" width="500" height="281"></iframe>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Vimeo Video Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <iframe width="600" height="340" src="https://www.youtube.com/embed/oIDqz2BrVec" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Youtube Video Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <div class="gallery-isotope grid-5 masonry gutter-small clearfix" data-lightbox="gallery">
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 1"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item wide">
                          <a href="http://placehold.it/800x600" data-lightbox="gallery-item" title="Title Here 2"><img src="http://placehold.it/800x600" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 3"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x600" data-lightbox="gallery-item" title="Title Here 4"><img src="http://placehold.it/400x600" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x600" data-lightbox="gallery-item" title="Title Here 5"><img src="http://placehold.it/400x600" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 6"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 6"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 6"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 6"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                        <div class="gallery-item">
                          <a href="http://placehold.it/400x300" data-lightbox="gallery-item" title="Title Here 6"><img src="http://placehold.it/400x300" alt=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Gallery Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Gallery Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <blockquote class="bg-deep">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi quibusdam doloremque necessitatibus doloribus blanditiis, praesentium ex error aliquid? Corporis dolores consequuntur cupiditate.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix mb-50 pb-30">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <div class="owl-carousel-1col" data-nav="true">
                        <div class="item">
                          <img src="https://placehold.it/900x500" alt="">
                        </div>
                        <div class="item">
                          <img src="https://placehold.it/900x500" alt="">
                        </div>
                        <div class="item">
                          <img src="https://placehold.it/900x500" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <h5 class="entry-title text-uppercase mt-0"><a href="#">Images Carousel Post</a></h5>
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-calendar mr-5"></i> 9/9/2015 </li>
                      <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, temporibus dignissimos. Explicabo minus ad similique. Corporis delectus, blanditiis hic maxime est fugit modi ad sapiente esse inventore dicta, soluta impedit a reiciendis consectetur <a href="#">[...]</a></p>
                    <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <a class="pull-right flip text-gray font-13" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>

                <article class="post clearfix pb-30">
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <a class="post-link text-center text-white bg-theme-colored display-block font-20 p-30" href="#">
                      kodesolution.com<br><span class="font-13">http://kodesolution.com</span>
                    </a>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-12">
              <nav>
                <ul class="pagination theme-colored">
                  <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
         <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">Search box</h5>
              <div class="search-form">
                <form>
                  <div class="input-group">
                    <input type="text" placeholder="Click to Search" class="form-control search-input">
                    <span class="input-group-btn">
                    <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Categories</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right">
                  <li><a href="#">Creative<span>(19)</span></a></li>
                  <li><a href="#">Portfolio<span>(21)</span></a></li>
                  <li><a href="#">Fitness<span>(15)</span></a></li>
                  <li><a href="#">Gym<span>(35)</span></a></li>
                  <li><a href="#">Personal<span>(16)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Latest News</h5>
              <div class="latest-posts">
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                    <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                    <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                    <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">Photos from Flickr</h5>
              <div id="flickr-feed" class="clearfix">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                </script>
              </div>
            </div>
         </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection