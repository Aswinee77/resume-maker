<!DOCTYPE html>
<html lang="en" moznomarginboxes>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="google" content="notranslate" />
        <!-- Google Fonts, Normalize, and Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cardo|Montserrat:300,400,500&amp;subset=latin-ext" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" integrity="sha256-oSrCnRYXvHG31SBifqP2PM1uje7SJUyX0nTwO2RJV54=" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/htmlresume/paper.css" />
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/htmlresume/styles.css" />
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/htmlresume/typography.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/htmlresume/screen.css" />
        <link rel="stylesheet" type="text/css" media="print" href="{{url('/')}}/htmlresume/print.css" />
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <title>
            {{ucwords(strtolower($details->name))}}
        </title>
    </head>
    <body class="letter">
        <section id="save">
            <section class="sheet">
                <aside>
                    <section class="contact">
                        <h6>Contact</h6>
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker-alt" title="Location"></i>{{ucwords(strtolower($details->address))}}</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone" title="Cell phone"></i> <a href="tel:4153234000">{{$details->phone_number}}</a></p>
                            </li>
                            <li>
                                <p ><i class="fa fa-envelope" title="Email"></i> <a href="mailto:joe@joesmith.site">{{ucwords(strtolower($details->email))}}</a></p>
                            </li>
                            <li>
                                <p><i class="fa fa-globe-americas" title="Website"></i> <a href="https://joesmith.site">{{ucwords(strtolower($details->linkdln_link))}}</a></p>
                            </li>
                            <li>
                                <p><i class="fab fa-github" title="GitHub"></i> <a href="https://github.com/Tombarr">{{ucwords(strtolower($details->github_link))}}</a></p>
                            </li>
                        </ul>
                    </section>
                    <section class="skills">
                        <h6>Technologies</h6>
                        <ul>
                            @foreach($skills as $skill)
                            <li><span>{{ucwords(strtoupper($skill->skill_name))}}</span></li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="Projects">
                        <h6>Projects</h6>
                        <ul>
                            @foreach($projects as $pro)
                            <li><span>{{ucwords(strtoupper($pro->project_name))}}</span></li>
                            <li><span>{{ucwords(strtoupper($pro->project_details))}}</span></li>
                            <li><a href="{{$pro->git_domain_link}}" href="_blank">Github Link</a></li>
                            @endforeach
                        </ul>
                    </section>
                    <section class="references">
                        
                    </section>
                </aside>
                <!-------->
                <section>
                    <header class="name" aria-label="Joe Smith">
                        <a >
                            <svg  height="35px" viewBox="0 0 600 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-family="Montserrat-Regular, Montserrat" font-size="40" font-weight="normal">
                                    <g id="Letter" transform="translate(-54.000000, -140.000000)" fill="#484848">
                                        <text id="JOE-SMITH">
                                            <tspan x="54.728" y="174">{{ucwords(strtolower($details->name))}}</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <h6>{{ucwords(strtolower($details->current_position))}}</h6>
                        <hr />
                    </header>
                    <section>
                        <section class="summary">
                            <h6>Summary</h6>
                            <p>{{ucwords(strtolower($details->summary))}}</p>
                        </section>
                        <section class="experience">
                            <h6>Experience</h6>
                            @foreach($experiences as $exp)
                            <ol>
                                <li>
                                    <header>
                                        <p class="sanserif">{{ucwords(strtolower($exp->role))}}</p>
                                        <time>{{date('M Y' ,strtotime($exp->from_date))}} – {{date('M Y',strtotime($exp->to_date))}} </time>
                                    </header>
                                    <span>{{ucwords(strtolower($exp->organization_name))}} ,{{ucwords(strtolower($exp->organization_address))}} </span>
                                    <ul>
                                        <li>{{ucwords(strtolower($exp->description))}}</li>
                                    </ul>
                                </li>
                            </ol>
                            @endforeach
                        </section>
                        <section class="Course">
                            <h6>Course</h6>
                            @foreach($courses as $c)
                            <ol>
                                <li>
                                    <div style="display: flex;justify-content: space-between; margin-bottom:10px;">
                                        <p class="sanserif">{{$c->course_name}}</p> 
                                        -
                                        <span>{{$c->uni_address}}</span>  
                                    </div>
                                    <span>{{$c->details}}</span>
                                </li>
                            </ol>
                            @endforeach
                        </section>
                         <section class="Certification">
                            <h6>Certification</h6>
                            @foreach($certifications as $ce)
                            <ol>
                                <li>
                                    <div style="display: flex;justify-content: space-between; margin-bottom:10px;">
                                        <p class="sanserif">{{$ce->certification_name}}</p>
                                         -
                                          <span>{{$ce->u_address}}</span>
                                    </div>
                                    <span>{{$ce->c_details}}</span>
                                </li>
                            </ol>
                            @endforeach
                        </section>
                        <section class="education">
                            <h6>Education</h6>
                            @foreach($education as $e)
                            <ol>
                                <li>
                                    <div>
                                        <p class="sanserif">{{$e->degree_name}}  {{$e->stream_name}}</p>
                                        <time>{{date('M Y' ,strtotime($e->from_date))}} - {{date('M Y' ,strtotime($e->to_date))}}</time>
                                    </div>
                                    <div>
                                        <span>{{$e->uni_col_name}}</span>
                                        <span></span>
                                    </div>
                                </li>
                            </ol>
                            @endforeach
                        </section>
                    </section>
                </section>
            </section>
        </section>
        
    </body>
    <!-- Developed by Tom Barrasso. https://barrasso.me -->
</html>