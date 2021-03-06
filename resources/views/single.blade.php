@extends('default.headAndFooter')


@section('content')
    <body class="single">
        <div class="top-scroll-bar"></div>
        @include('default.mobileNav')
        <div id="wrapper">
            <header id="header" class="d-lg-block d-none">
                @include('default.header')
            </header>
            <main id="content">
                <div class="container">
                    <div class="entry-header">                        
                        <div class="mb-5">
                            <h1 class="entry-title m_b_2rem">
                            In 21st-century Korea, shamanism is not only thriving — but evolving
                            </h1>
                            <div class="entry-meta align-items-center">
                                <a class="author-avatar" href="#"><img src="/images/author-avata-2.jpg" alt=""></a>
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
                    </div> <!--end single header-->
                    <figure class="image zoom mb-5">
                        <img src="http://via.placeholder.com/1240x700" alt="post-title" />
                    </figure>  <!--figure-->
                    <article class="entry-wraper mb-5">
                        <div class="entry-left-col">
                            <div class="social-sticky">
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-heart"></i></a>
                                <a href="#"><i class="icon-paper-plane"></i></a>
                            </div>
                        </div>
                        <div class="excerpt mb-4">
                            <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                        </div>
                        <div class="entry-main-content dropcap">
                            <p>Gosh jaguar ostrich quail one excited dear hello and <a href="#">bound</a><sup><a href="#">[1]</a></sup> and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                            <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness <a href="#">nightingale</a> the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                            <hr class="section-divider">
                            <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                            <h2>The Guitar Legends</h2>
                            <p>Furrowed this in the upset <a href="#">some across</a><sup><a href="#">[3]</a></sup> tiger oh loaded house gosh whispered <a href="#">faltering alas</a><sup><a href="#">[4]</a></sup> ouch cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                            <blockquote><p>Integer eu faucibus <a href="#">dolor</a><sup><a href="#">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p></blockquote>
                            <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                            <h3>Getting Crypto Rich</h3>
                            <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                            <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                            <hr class="section-divider">
                            <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                            <!--Begin Subcrible-->
                            <div class="border p-5 bg-lightblue mb-5">
                                <div class="row justify-content-between">
                                    <div class="col-md-5 mb-2 mb-md-0">
                                        <h5 class="font-weight-bold secondfont mb-3 mt-0">Become a member</h5>
                                        <p class="small-text">Get the latest news right in your inbox. We never spam!</p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <button type="submit" class="btn btn-success btn-block">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Subcrible-->
                            <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                        </div>
                        <div class="entry-bottom">
                            <div class="tags-wrap heading">
                                <span class="tags">
                                    <a href="#" rel="tag">fashion</a>
                                    <a href="#" rel="tag">lifestyle</a>
                                    <a href="#" rel="tag">news</a>
                                    <a href="#" rel="tag">style</a>
                                </span>
                            </div>
                        </div>
                        <div class="box box-author m_b_2rem">
                            <div class="post-author row-flex">
                                <div class="author-img">
                                    <img alt="author avatar" src="/images/author-avata-1.jpg" class="avatar">
                                </div>
                                <div class="author-content">
                                <div class="top-author">
                                    <h5 class="heading-font"><a href="author" title="Ryan" rel="author">Ryan Mark</a></h5></div>
                                    <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et semper. Aenean consectetur, est id gravida venenatis.</p>
                                    <div class="content-social-author">
                                        <a target="_blank" class="author-social" href="#">Facebook </a>
                                        <a target="_blank" class="author-social" href="#">Twitter </a>
                                        <a target="_blank" class="author-social" href="#"> Google + </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article> <!--entry-content-->
                    
                    <!--Begin post related-->
                    <div class="related-posts mb-5">
                        <h4 class="spanborder text-center">
                            <span>Related Posts</span>
                        </h4>
                        <div class="row justify-content-between">
                             <div class="divider-2"></div>                                    
                            <article class="col-md-4">
                                <div class="mb-3 d-flex row">
                                    <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                    <div class="entry-content col-md-7 pl-md-0">                                    
                                        <h5 class="entry-title mb-3"><a href="single">Is ‘Interactive Storytelling’ the Future of Media?</a></h5>
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
                            <article class="col-md-4">
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
                            <article class="col-md-4">
                                <div class="mb-3 d-flex row">
                                    <figure class="col-md-5"><a href="single"><img src="http://via.placeholder.com/512x512" alt="post-title"></a></figure>
                                    <div class="entry-content col-md-7 pl-md-0">                                    
                                        <h5 class="entry-title mb-3"><a href="single">Google Can’t Figure Out What YouTube Is</a></h5>
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
                    <!--End post related-->

                    <!--Begin Comment-->
                    <div class="single-comment comments_wrap">
                        <section id="comments">
                           <div class="comments-inner clr">
                              <div id="respond" class="comment-respond">
                                 <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                                 <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label> 
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <div class="row">
                                       <div class="comment-form-author col-sm-12 col-md-6">
                                          <p>
                                             <label for="author">Name*</label>
                                             <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                                          </p>
                                       </div>
                                       <div class="comment-form-email col-sm-12 col-md-6">
                                          <p>
                                             <label for="email">Email*</label>
                                             <input id="email" name="email" type="email" value="" size="30" aria-required="true">
                                          </p>
                                       </div>
                                    </div>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit btn btn-success btn-block" value="Post Comment">
                                    </p>
                                 </form>
                              </div>
                              <!-- #respond -->
                           </div>
                        </section>
                    </div>
                    <!--End Comment-->
                </div> <!--container-->
            </main>
@endsection('content')