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

                    <article class="entry-wraper mb-5">
                        <div class="entry-left-col">
                            <div class="social-sticky">
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-heart"></i></a>
                                <a href="#"><i class="icon-paper-plane"></i></a>
                            </div>
                        </div>
                        
                        <p>The excerpt</p>
                        <div class="excerpt m_b_2rem">
                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.
                        </div>
                        <div class="entry-main-content">
                            <p><strong>Headings</strong></p>
                            <h1>Header one</h1>
                            <h2>Header two</h2>
                            <h3>Header three</h3>
                            <h4>Header four</h4>
                            <h5>Header five</h5>
                            <h6>Header six</h6>
                            <h2>Blockquotes</h2>
                            <p>Single line blockquote:</p>
                            <blockquote><p>Stay hungry. Stay foolish.</p></blockquote>
                            <p>Multi line blockquote with a cite reference:</p>
                            <blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
                                <p>The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block Quotation Element</em>) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see <a href="https://developer.mozilla.org/en-US/docs/HTML/Element/blockquote#Notes">Notes</a> for how to change it). A URL for the source of the quotation may be given using the <strong>cite</strong> attribute, while a text representation of the source can be given using the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite" title="The HTML Citation Element <cite> represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata."><code>&lt;cite&gt;</code></a> element.</p>
                            </blockquote>
                            <p><cite>multiple contributors</cite> – MDN HTML element reference – blockquote</p>
                            <h2>Tables</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Salary</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><a href="http://example.org/">John Doe</a></th>
                                        <td>$1</td>
                                        <td>Because that’s all Steve Jobs needed for a salary.</td>
                                    </tr>
                                    <tr>
                                        <th><a href="http://example.org/">Jane Doe</a></th>
                                        <td>$100K</td>
                                        <td>For all the blogging she does.</td>
                                    </tr>
                                    <tr>
                                        <th><a href="http://example.org/">Fred Bloggs</a></th>
                                        <td>$100M</td>
                                        <td>Pictures are worth a thousand words, right? So Jane x 1,000.</td>
                                    </tr>
                                    <tr>
                                        <th><a href="http://example.org/">Jane Bloggs</a></th>
                                        <td>$100B</td>
                                        <td>With hair like that?! Enough said…</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2>Definition Lists</h2>
                            <dl>
                                <dt>Definition List Title</dt>
                                <dd>Definition list division.</dd>
                                <dt>Startup</dt>
                                <dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
                                <dt>#dowork</dt>
                                <dd>Coined by Rob Dyrdek and his personal body guard Christopher “Big Black” Boykins, “Do Work” works as a self motivator, to motivating your friends.</dd>
                                <dt>Do It Live</dt>
                                <dd>I’ll let Bill O’Reilly will <a title="We'll Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
                            </dl>
                            <h2>Unordered Lists (Nested)</h2>
                            <ul>
                                <li>List item one
                                    <ul>
                                        <li>List item one
                                            <ul>
                                                <li>List item one</li>
                                                <li>List item two</li>
                                                <li>List item three</li>
                                                <li>List item four</li>
                                            </ul>
                                        </li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                        <li>List item four</li>
                                    </ul>
                                </li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ul>
                            <h2>Ordered List (Nested)</h2>
                            <ol start="8">
                                <li>List item one -start at 8
                                    <ol>
                                        <li>List item one
                                            <ol reversed="reversed">
                                                <li>List item one -reversed attribute</li>
                                                <li>List item two</li>
                                                <li>List item three</li>
                                                <li>List item four</li>
                                            </ol>
                                        </li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                        <li>List item four</li>
                                    </ol>
                                </li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ol>
                            <h2>HTML Tags</h2>
                            <p>These supported tags come from the WordPress.com code <a title="Code" href="https://en.support.wordpress.com/code/">FAQ</a>.</p>
                            <p><strong>Address Tag</strong></p>
                            <address>1 Infinite Loop<br>
                                Cupertino, CA 95014<br>
                            United States</address>
                            <p><strong>Anchor Tag (aka. Link)</strong></p>
                            <p>This is an example of a <a title="WordPress Foundation" href="https://wordpressfoundation.org/">link</a>.</p>
                            <p><strong>Abbreviation Tag</strong></p>
                            <p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for “seriously”.</p>
                            <p><strong>Acronym Tag (<em>deprecated in HTML5</em>)</strong></p>
                            <p>The acronym <acronym title="For The Win">ftw</acronym> stands for “for the win”.</p>
                            <p><strong>Big Tag</strong> (<em>deprecated in HTML5</em>)</p>
                            <p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
                            <p><strong>Cite Tag</strong></p>
                            <p>“Code is poetry.” —<cite>Automattic</cite></p>
                            <p><strong>Code Tag</strong></p>
                            <p>This tag styles blocks of code.<br>
                                <code>.post-title {<br>
                                margin: 0 0 5px;<br>
                                font-weight: bold;<br>
                                font-size: 38px;<br>
                                line-height: 1.2;<br>
                                and here's a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;<br>
                                }</code><br>
                            You will learn later on in these tests that word-wrap: break-word;will be your best friend.</p>
                            <p><strong>Delete Tag</strong></p>
                            <p>This tag will let you <del cite="deleted it">strike out text</del>, but this tag is <em>recommended</em> supported in HTML5 (use the <code>&lt;s&gt;</code> instead).</p>
                            <p><strong>Emphasize Tag</strong></p>
                            <p>The emphasize tag should <em>italicize</em> <i>text</i>.</p>
                            <p><strong>Horizontal Rule Tag</strong></p>
                            <hr>
                            <p>This sentence is following a <code>&lt;hr /&gt;</code> tag.</p>
                            <p><strong>Insert Tag</strong></p>
                            <p>This tag should denote <ins cite="inserted it">inserted</ins> text.</p>
                            <p><strong>Keyboard Tag</strong></p>
                            <p>This scarcely known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
                            <p><strong>Preformatted Tag</strong></p>
                            <p>This tag is for preserving whitespace as typed, such as in poetry or ASCII art.</p>
                                                    
                            <p><strong>Quote Tag</strong> for short, inline quotes</p>
                            <p><q>Developers, developers, developers...</q> --Steve Ballmer</p>
                            <p><strong>Strike Tag</strong> (<em>deprecated in HTML5</em>) and <strong>S Tag</strong></p>
                            <p>This tag shows <strike>strike-through</strike> <s>text</s>.</p>
                            <p><strong>Small Tag</strong></p>
                            <p>This tag shows <small>smaller<small> text.</small></small></p>
                            <p><strong>Strong Tag</strong></p>
                            <p>This tag shows <strong>bold<strong> text.</strong></strong></p>
                            <p><strong>Subscript Tag</strong></p>
                            <p>Getting our science styling on with H<sub>2</sub>O, which should push the "2" down.</p>
                            <p><strong>Superscript Tag</strong></p>
                            <p>Still sticking with science and Albert Einstein's E = MC<sup>2</sup>, which should lift the 2 up.</p>
                            <p><strong>Teletype Tag </strong>(<em>obsolete in HTML5</em>)</p>
                            <p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
                            <p><strong>Underline Tag</strong> <em>deprecated in HTML 4, re-introduced in HTML5 with other semantics</em></p>
                            <p>This tag shows <u>underlined text</u>.</p>
                            <p><strong>Variable Tag</strong></p>
                            <p>This allows you to denote <var>variables</var>.</p>

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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et semper. Aenean consectetur, est id gravida venenatis.</p>
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