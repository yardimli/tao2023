@extends('default.headAndFooter')


@section('content')
    <body class="archive">
        <div class="top-scroll-bar"></div>
        @include('default.mobileNav')
        <div id="wrapper">
            <header id="header" class="d-lg-block d-none">
                @include('default.header')
            </header>
            <main id="content">
                <div class="content-widget">
                    <div class="container">
                    	<!--Begin Archive Header-->
                    	<div class="row">
                    		<div class="col-12 archive-header text-center pt-3 pb-3">
                    			<h1 class="mb-3">The Startup</h1>
                    			<p class="archive-intro">The Startup provides a scientific approach to creating and managing startups and get a desired product to customers' hands faste</p>
                    		</div>                    		
                    	</div>                    	
						<div class="divider"></div>
						<!--End Archive Header-->

						<!--Begin Featured Post-->
                        <div class="row justify-content-between post-has-bg ml-0 mr-0">
                        	<div class="col-lg-6 col-md-4 bgcover d-none d-md-block pl-md-0 ml-0" style="background-image:url(http://via.placeholder.com/1400x778);"></div>
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
                        </div> 
                        <div class="divider"></div>
	                   	<!--End Featured Post-->

                        <div class="row">
							<article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Can Resolving Emotional Trauma Ease Chronic Pain?</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       A new therapy teaches people to process their trauma as a way to treat chronic pain. Does it work? 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Oliver</a> in <a href="archive">OneZero</a><br>                                  
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
                            
                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Amanda Knox: Your Content, My Life</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                      And up that bee one sexually sheared and by goodness vindictive conscientiously politely less rabbit concise staid along far yellow piteous. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">George</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Congress Must Act on Regulating Deepfakes</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Far innocent jay elephant far that rebound less ouch a much the the where pologetic. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Harry</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x512);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Crab oblique in meadowlark lorikeet far giraffe</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       That less and up awesomely and since far goodness fluidly lame and more youthful hence won witlessly re-laid sold close far hello thus less crud that slew. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Muhammad</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x700);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Then slapped laughed pithy gorilla woodpecker cuffed</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Much quail after thanks as some panthe jeepers across other goodness along goodness criminal some and crab clapped spoke. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">William</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/512x700);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Fondly much baboon much a a towards at a over filled astride</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Far under wiped played crassly deceptive shark healthy far the considering trout much mallard crud rolled brusque depending. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Henry</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/800x495);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Gnu aurally past much after bland therefore locked</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Spluttered much jeez one from liberally therefore more circa arousingly vengefully preparatory rat shrugged rat wrote robin vividly roadrunne. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Edward</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/1400x992);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Interbred where over stank because a impassive fa</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Much concentric and affluent in notwithstanding lanteous interbred quaint this nightingale hey dear square shut wildebeest. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">Isaac</a> in <a href="archive">OneZero</a><br>                                  
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

                            <article class="post-list-style-2 mb-5 col-md-4">
                                <a href="single"><figure class="bgcover" style="background-image:url(http://via.placeholder.com/1240x700);"></figure></a>
                                <h3 class="entry-title mb-3"><a href="single">Played healthy opposite this as inside belligerent far habitual</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                       Played healthy opposite this as inside belligerent far habitual drank past buffalo flamingo esoteric badger and and one lied opened and wow. 
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="author">David Toby</a> in <a href="archive">OneZero</a><br>                                  
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