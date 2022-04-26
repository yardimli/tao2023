@extends('default.headAndFooter')


@section('content')
    <body class="home">
    <div class="top-scroll-bar"></div>
    @include('default.mobileNav')
    <div id="wrapper">
        <header id="header" class="d-lg-block d-none">
            @include('default.header')
        </header>

            <main id="content">
                <div class="section-featured featured-style-1">
                    <div class="container">
                        <div class="row">
                            <!--begin featured-->
                            <div class="col-sm-12 col-md-9 col-xl-9">
                                <h2 class="spanborder h4">
                                    <span>Editor's Picks</span>
                                 </h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <article class="first mb-3">
                                            <figure><a href="single"><img src="http://via.placeholder.com/1240x700" alt="post-title"></a></figure>
                                            <h3 class="entry-title mb-3"><a href="single">Home Internet Is Becoming a Luxury for the Wealthy</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   And black on meretriciously regardless well fearless irksomely as about hideous wistful bat less oh much and occasional useful rat darn jeepers far.
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Dave Gershgorn</a> in <a href="archive">OneZero</a><br>
                                                <span>Jun 14</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">3 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </article>
                                        <a class="btn btn-green d-inline-block mb-4 mb-md-0" href="archive">All Featured</a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <article class="post-has-bg">
                                            <div class="mb-3 d-flex row">
                                                <figure class="col-4 col-md-4"><a href="single"><img src="http://via.placeholder.com/512x700" alt="post-title"></a></figure>
                                                <div class="entry-content col-8 col-md-8 pl-md-0">
                                                    <h5 class="entry-title mb-3"><a href="single">The Night My Doorbell Camera Captured a Shooting</a></h5>
                                                    <div class="entry-meta align-items-center">
                                                        <a href="author">Alentica</a> in <a href="archive">Police</a><br>
                                                        <span>Jun 16</span>
                                                        <span class="middotDivider"></span>
                                                        <span class="readingTime" title="3 min read">7 min read</span>
                                                        <span class="svgIcon svgIcon--star">
                                                            <svg class="svgIcon-use" width="15" height="15">
                                                                <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="mb-3 d-flex row">
                                                <figure class="col-4 col-md-4"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                                <div class="entry-content col-8 col-md-8 pl-md-0">
                                                    <h5 class="entry-title mb-3"><a href="single">Privacy Is Just the Beginning of the Debate Over Tech</a></h5>
                                                    <div class="entry-meta align-items-center">
                                                        <a href="author">Otimus</a> in <a href="archive">Startup</a><br>
                                                        <span>May 15</span>
                                                        <span class="middotDivider"></span>
                                                        <span class="readingTime" title="3 min read">6 min read</span>
                                                        <span class="svgIcon svgIcon--star">
                                                            <svg class="svgIcon-use" width="15" height="15">
                                                                <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="mb-3 d-flex row">
                                                <figure class="col-4 col-md-4"><a href="single"><img src="http://via.placeholder.com/512x700" alt="post-title"></a></figure>
                                                <div class="entry-content col-8 col-md-8 pl-md-0">
                                                   <div class="capsSubtle mb-2">based on your reading history</div>
                                                    <h5 class="entry-title mb-3"><a href="single">Want To Make Millions? Then Act Like a Millionaire</a></h5>
                                                    <div class="entry-meta align-items-center">
                                                        <a href="author">Mark Harris</a> in <a href="archive">Heated</a><br>
                                                        <span>May 13</span>
                                                        <span class="middotDivider"></span>
                                                        <span class="readingTime" title="3 min read">12 min read</span>
                                                        <span class="svgIcon svgIcon--star">
                                                            <svg class="svgIcon-use" width="15" height="15">
                                                                <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div><!--end featured-->

                            <!--begin Trending-->
                            <div class="col-sm-12 col-md-3 col-xl-3">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h4 class="spanborder">
                                        <span>Trending</span>
                                    </h4>
                                    <ol>
                                        <li class="d-flex">
                                            <div class="post-count">01</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">President and the emails. Who will guard the guards?</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Adam Philip</a> in <a href="archive">Elemental</a><br>
                                                    <span>Jan 12</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">7 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">02</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">How to Silence the Persistent Ding of Modern Life</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Aaron Gell</a> in <a href="archive">Design</a><br>
                                                    <span>Feb 18</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">9 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">03</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">Why We Love to Watch</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Atlantic</a> in <a href="archive">Zora</a><br>
                                                    <span>March 17</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">6 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">04</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">How Health Apps Let</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Alentica</a> in <a href="archive">Police</a><br>
                                                    <span>Jun 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">3 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <a class="link-green" href="archive">See all trending<svg class="svgIcon-use" width="19" height="19"><path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path></svg></a>

                            </div> <!--end Trending-->
                        </div> <!--end row-->
                        <div class="divider"></div>           
                    </div> <!--end container-->
                </div> <!--section-featured-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row justify-content-between post-has-bg ml-0 mr-0">
                            <div class="col-lg-6 col-md-8">
                                <div class="pt-5 pb-5 pl-md-5 pr-5 align-self-center">
                                    <div class="capsSubtle mb-2">Editors' Pick</div>
                                    <h2 class="entry-title mb-3"><a href="single">What I Wish I'd Known When I Made a Drastic Career Change</a></h2>
                                    <div class="entry-excerpt">
                                        <p>
                                          Eight people who took the plunge share the biggest challenges and surprises of starting over. We spend a considerable portion of our time using a web browser and may sometimes need to get a screenshot of a full page in your browser. 
                                        </p>
                                    </div>
                                    <div class="entry-meta align-items-center">
                                        <a href="author">Steven Job</a> in <a href="archive">OneZero</a><br>                                    
                                        <span>July 15</span>
                                        <span class="middotDivider"></span>
                                        <span class="readingTime" title="3 min read">5 min read</span>
                                        <span class="svgIcon svgIcon--star">
                                            <svg class="svgIcon-use" width="15" height="15">
                                                <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 bgcover d-none d-md-block pl-md-0 ml-0" style="background-image:url(http://via.placeholder.com/800x495);"></div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div> <!--content-widget-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row justify-content-between">
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">I Learned How to Die Before I Knew How to Live</a></h5>
                                                <div class="entry-excerpt">
                                                    <p>
                                                       Tech companies need more than advisory boards if they want. 
                                                    </p>
                                                </div>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Anna Goldfarb</a> in <a href="archive">Fashion</a><br>                                    
                                                    <span>March 12</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">4 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">Is 'Interactive Storytelling' the Future of Media?</a></h5>
                                                <div class="entry-excerpt">
                                                    <p>
                                                       Or does passive and active content serve different purposes?. 
                                                    </p>
                                                </div>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Furukawa</a> in <a href="archive">Programing</a><br>                                    
                                                    <span>March 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">6 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">How NOT to get a $30k bill from Firebase</a></h5>
                                                <div class="entry-excerpt">
                                                    <p>
                                                       Why the dark forests of the internet'''podcasts, newsletters. 
                                                    </p>
                                                </div>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Glorida</a> in <a href="archive">Living</a><br>                                    
                                                    <span>April 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">7 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">Google Can't Figure Out What YouTube Is</a></h5>
                                                <div class="entry-excerpt">
                                                    <p>
                                                       But Apple still has some A.I. tricks up its sleeve. 
                                                    </p>
                                                </div>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Rayan Mark</a> in <a href="archive">GEN</a><br>                                    
                                                    <span>Jun 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">8 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sidebar-widget ads">
                                    <a href="#"><img src="/images/ads/ads-1.png" alt="ads"></a>
                                </div>
                            </div>
                        </div>
                        <div class="divider-2"></div>
                    </div>
                </div> <!--content-widget-->

                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="spanborder h4">
                                    <span>Most Recent</span>
                                </h2>                  
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">Editors' Pick</div>
                                            <h3 class="entry-title mb-3"><a href="single">Home Internet Is Becoming a Luxury for the Wealthy</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   And black on meretriciously regardless well fearless irksomely as about hideous wistful bat less oh much and occasional useful rat darn jeepers far. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Dave Gershgorn</a> in <a href="archive">OneZero</a><br>                                    
                                                <span>May 21</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">5 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/800x495);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">based on your reading history</div>
                                            <h3 class="entry-title mb-3"><a href="single">Why Lack of Sleep is So Bad For You</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                  A lack of sleep is linked to an incredibly wide range of ailments, from heart disease and Type 2 diabetes to obesity, depression, poor cognitive function, and even Alzheimer's disease.. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a class="author-avatar" href="#"><img src="/images/author-avata-1.jpg" alt=""></a>
                                                <a href="author">Darcy Reeder</a> in <a href="archive">OneZero</a><br>                                    
                                                <span>Jun 17</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">3 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">Culture</div>
                                            <h3 class="entry-title mb-3"><a href="single">Regulators Just Put a Target on Apple's Back</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   Excellence is the most important habit you can curate in life because it requires doing things you don't want to do and getting uncomfortable on a daily basis. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Azimi ??kalo</a> in <a href="archive">Freedom</a><br>                                    
                                                <span>May 12</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">8 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">Technology</div>
                                            <h3 class="entry-title mb-3"><a href="single">Apple Is Designing for a Post-Facebook World</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   And black on meretriciously regardless well fearless irksomely as about hideous wistful bat less oh much and occasional useful rat darn jeepers far. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Dave Gershgorn</a> in <a href="archive">OneZero</a><br>                                    
                                                <span>Jun 12</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">7 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">based on your reading history</div>
                                            <h3 class="entry-title mb-3"><a href="single">What Really Happens to AirPods When They Die</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   At WWDC, Apple debuted a slew of new features that let users connect with their families and friends right inside Apple's apps'''no social. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Johan Doan</a> in <a href="archive">Lifestyle</a><br>                                    
                                                <span>May 15</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">5 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>

                                <div class="row justify-content-between">
                                    <div class="divider-2"></div>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">I Learned How to Die Before I Knew How to Live</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Anna Goldfarb</a> in <a href="archive">Fashion</a><br>                                    
                                                    <span>March 12</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">4 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">Is 'Interactive Storytelling' the Future of Media?</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Furukawa</a> in <a href="archive">Programing</a><br>                                    
                                                    <span>March 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">6 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">How NOT to get a $30k bill from Firebase</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Glorida</a> in <a href="archive">Living</a><br>                                    
                                                    <span>April 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">7 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6">
                                        <div class="mb-3 d-flex row">
                                            <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                            <div class="entry-content col-md-7 pl-md-0">                                    
                                                <h5 class="entry-title mb-3"><a href="single">Google Can't Figure Out What YouTube Is</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Rayan Mark</a> in <a href="archive">GEN</a><br>                                    
                                                    <span>Jun 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">8 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">Editors' Pick</div>
                                            <h3 class="entry-title mb-3"><a href="single">Home Internet Is Becoming a Luxury for the Wealthy</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   And black on meretriciously regardless well fearless irksomely as about hideous wistful bat less oh much and occasional useful rat darn jeepers far. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Dave Gershgorn</a> in <a href="archive">OneZero</a><br>                                    
                                                <span>May 21</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">5 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/800x495);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">based on your reading history</div>
                                            <h3 class="entry-title mb-3"><a href="single">Why Lack of Sleep is So Bad For You</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                  A lack of sleep is linked to an incredibly wide range of ailments, from heart disease and Type 2 diabetes to obesity, depression, poor cognitive function, and even Alzheimer's disease.. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Darcy Reeder</a> in <a href="archive">OneZero</a><br>                                    
                                                <span>Jun 17</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">3 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9 ">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-2">Culture</div>
                                            <h3 class="entry-title mb-3"><a href="single">Regulators Just Put a Target on Apple's Back</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                   Excellence is the most important habit you can curate in life because it requires doing things you don't want to do and getting uncomfortable on a daily basis. 
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="author">Azimi ??kalo</a> in <a href="archive">Freedom</a><br>                                    
                                                <span>May 12</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">8 min read</span>
                                                <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></div>
                                </article>
                                <ul class="page-numbers heading">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="page-numbers" href="#">5</a></li>
                                    <li><a class="page-numbers" href="#">...</a></li>
                                    <li><a class="page-numbers" href="#">98</a></li>
                                    <li><a class="next page-numbers" href="#"><i class="icon-right-open-big"></i></a></li>
                                </ul>

                            </div> <!--col-md-8-->
                            <div class="col-md-4 pl-md-5 sticky-sidebar">                    
                                <div class="sidebar-widget latest-tpl-4">
                                    <h4 class="spanborder">
                                        <span>Popular</span>
                                    </h4>
                                    <ol>
                                        <li class="d-flex">
                                            <div class="post-count">01</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">President and the emails. Who will guard the guards?</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Alentica</a> in <a href="archive">Police</a><br>                                    
                                                    <span>May 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">3 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">02</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">How to Silence the Persistent Ding of Modern Life</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Alentica</a> in <a href="archive">Police</a><br>                                    
                                                    <span>Jun 12</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">4 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">03</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">Why We Love to Watch</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Alentica</a> in <a href="archive">Police</a><br>                                    
                                                    <span>May 15</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">5 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="post-count">04</div>
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="single">How Health Apps Let</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="author">Alentica</a> in <a href="archive">Police</a><br>                                    
                                                    <span>April 27</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">6 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>

                <div class="content-widget">
                    <div class="container">
                        <div class="sidebar-widget ads">
                            <a href="#"><img src="/images/ads/ads-2.png" alt="ads"></a>
                        </div>
                        <div class="hr"></div>
                    </div>
                </div> <!--content-widget-->
            </main>
@endsection('content')