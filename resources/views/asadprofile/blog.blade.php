

@extends('asadprofile.blog.videoblog.body')
@section('blog')

<main id="mainContent" class="main-content">

    <!-- Start Hero Area -->
    <section class="section hero-area t-center pt-100 pb-80  bg-ct" data-bg-img="{{ url('images/bg_04.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h1 class="t-uppercase font-45">My Blog</h1>
                        <ol class="breadcrumb">
                            <li><a href="index-3.html"><i class="fa fa-home mr-10"></i>Home</a></li>
                            <li class="active">My Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Page Container -->
    <div class="page-container ptb-40">

        <!-- Start Latest News Area -->
        <section class="section blog-area pt-40">
            <div class="container">
                <div class="row row-tb-15">
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9"
                                        data-bg-img="assets/images/blog/01.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <div class="owl-carousel" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000"
                                     data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1"
                                     data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true"
                                     data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9"
                                            data-bg-img="assets/images/blog/02.jpg"></figure>
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9"
                                            data-bg-img="assets/images/blog/03.jpg"></figure>
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9"
                                            data-bg-img="assets/images/blog/04.jpg"></figure>
                                </div>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9"
                                        data-bg-img="assets/images/blog/05.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="entry-media embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/nrJtHemSPW4" allowfullscreen></iframe>
                                </figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="entry-media embed-responsive embed-responsive-16by9">
                                    <iframe src="https://player.vimeo.com/video/176916362" allowfullscreen></iframe>
                                </figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/06.jpg">
                                    <blockquote class="blog-quote">
                                        <p class="pos-tb-center"><i class="fa fa-quote-left mrl-10"></i> Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo.</p>
                                    </blockquote>
                                </figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/07.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/08.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/09.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/10.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/11.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="entry">
                            <div class="entry-media">
                                <figure class="embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/12.jpg"></figure>
                            </div>
                            <div class="entry-content ptb-15">
                                <h2 class="entry-title"><a href="blog_single.html">Integer vel lorem tincidunt pharetra eros nec posuere odio nullam eget</a></h2>
                                <p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum, sapien eu interdum accumsan, magna mauris condimentum enim, in tincidunt eros enim...</p>
                            </div>
                            <div class="entry-footer">
			                        	<span class="entry-info">
			                           		<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2106</span>
			                           		<span><i class="fa fa-comment-o mr-5"></i> 23</span>
			                           	</span>
                                <span class="read-more">
			                           		<button class="btn btn-sm btn-square btn-o">Read More</button>
			                           	</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest News Area -->

        <div class="page-pagination ptb-40 panel">
            <div class="container">
                <nav>
                    <!-- Page Pagination -->
                    <ul class="page-pagination">
                        <li><a class="page-numbers previous" href="#">Previous</a></li>
                        <li><a href="#" class="page-numbers">1</a></li>
                        <li><span class="page-numbers current">2</span></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li><a href="#" class="page-numbers">4</a></li>
                        <li><span class="page-numbers dots">...</span></li>
                        <li><a href="#" class="page-numbers">20</a></li>
                        <li><a href="#" class="page-numbers next">Next</a>
                        </li>
                    </ul>
                    <!-- End Page Pagination -->
                </nav>
            </div>
        </div>

    </div>
    <!-- End Page Container -->

</main>
@endsection