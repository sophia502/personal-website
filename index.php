<?php
include 'conn.php';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $content=$_POST['advice'];
//    echo $name.$email.$content;
    $sql="insert into advice(Bid,Title, Email, Content) values(null,'$name','$email','$content')";
    $query = mysqli_query($link,$sql);
    if($query){
        echo "<script>alert('successful')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>my page</title>
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<!-----------头开始--------------->
    <div id="head">
        <!-- 导航-->
            <div id="big-nav">
                <img src="img/1.png" id="p-name" alt=""/>
                <span></span>
                <div class="nav-button" id="n-btn">
                    <span class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                </div>
            </div>
            <div id="s-nav">
                <div class="nav-decor-l nav-decor"></div>
                <div class="nav-decor-r nav-decor"></div>
                <div id="a-line"></div>
                <ul id="ul-nav">
                    <li class="b-a">
                        <span class="l-span">关于我</span>
                        <ul class="s-list">
                            <li><a href="#w-about">性别：女</a></li>
                            <li><a href="#w-about">爱好：敲代码</a></li>
                            <li><a href="#w-about">自我评价</a></li>
                        </ul>
                    </li>
                    <li class="b-a">
                        <span class="l-span">我的作品</span>
                        <ul class="s-list">
                            <li><a href="#do">销售网站仿写</a></li>
                            <li><a href="#do">响应式/照片墙</a></li>
                            <li><a href="#do">各种小栗子</a></li>
                        </ul>
                    </li>
                    <li class="b-a">
                        <span class="l-span">我的技能</span>
                        <ul class="s-list">
                            <li><a href="#skill">HTML \ CSS</a></li>
                            <li><a href="#skill">JS \ JQ</a></li>
                            <li><a href="#skill">PHP \ NODE</a></li>
                        </ul>
                    </li>
                    <li class="b-a">
                        <span class="l-span">联系我</span>
                        <ul class="s-list">
                            <li><a href="#cont">Phone \ E-mail \ QQ</a></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <!-- 轮播图-->
        <div class="main">
            <div class="sidebar-hover">
                <p class="pagination">
                    <span class="page">01</span> / <span class="total-pages">05</span>
                </p>
            </div>
            <div class="sidebar-real">
                <div data-page="1" class="nav-elem nav-1 active"></div>
                <div data-page="2" class="nav-elem nav-2"></div>
                <div data-page="3" class="nav-elem nav-3"></div>
                <div data-page="4" class="nav-elem nav-4"></div>
                <div data-page="5" class="nav-elem nav-5"></div>
            </div>
            <div class="sections">
                <div class="section section-1">
                    <div class="left-part"></div>
                    <div class="content">
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="section-heading" style="margin-top: 0vh; display: block;">Hathaway Home-Page #1
                            <p class="additional-text" style="margin-top: 0vh; display: block;">Some cool info or hashtags #1</p></div>
                    </div>
                </div>
                <div class="section section-2">
                    <div class="left-part"></div>
                    <div class="content">
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="section-heading" style="margin-top: 0vh; display: block;">Hathaway Home-Page #2
                        <p class="additional-text" style="margin-top: 0vh; display: block;">Some cool info or hashtags #2</p></div>
                    </div>
                </div>
                <div class="section section-3">
                    <div class="left-part"></div>
                    <div class="content">
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="section-heading" style="margin-top: 0vh; display: block;">Hathaway Home-Page #3
                        <p class="additional-text" style="margin-top: 0vh; display: block;">Some cool info or hashtags #3</p></div>
                    </div>
                </div>
                <div class="section section-4">
                    <div class="left-part"></div>
                    <div class="content">
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="section-heading" style="margin-top: 0vh; display: block;">Hathaway Home-Page #4
                        <p class="additional-text" style="margin-top: 0vh; display: block;">Some cool info or hashtags #4</p></div>
                    </div>
                </div>
                <div class="section section-5">
                    <div class="left-part"></div>
                    <div class="content">
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="bg-part"></div>
                        <div class="section-heading" style="margin-top: 0vh; display: block;">Hathaway Home-Page #5
                            <p class="additional-text" style="margin-top: 0vh; display: block;">Some cool info or hashtags #5</p></div>

                    </div>
                </div>
            </div>
            <h2 class="scroll-down"><a href="#nav">Scroll down</a></h2>
        </div>
</div>
<!----------头结束--------------->
<!--内容开始-->
    <div>
    <div id="nav">
        <ul>
            <li class="select"><a href="#w-about">关于我</a></li>
            <li><a href="#do">作品</a></li>
            <li><a href="#skill">技能</a></li>
            <li><a href="#cont">联系我</a></li>
        </ul>
    </div>
    <div id="part1">
        <!--左侧部分-->
        <div id="l-part">
            <div width="80vh" id="l-part2">
                <div>

                    <h3 id="l-title">关于我</h3>
                    <div class="c-line"></div>
                    <div class="d-line"></div>
                </div>
                <div id="vertical">
                    <img src="img/about1.png" alt="">
                    <img src="img/about2.png" alt="">
                    <img src="img/about3.jpg" alt="">
                    <img src="img/about5.jpg" alt="">
                </div>
            </div>
        </div>
        <!--右侧部分-->
        <div id="r-part">
            <!--*       part1 我            *-->
            <div class="wrapper" id="w-about">
                <div class="t-part">
                    <h4 class="who">WHO I AM</h4>
                    <div class="sect-subtitle" data-top-bottom="transform: translateY(-300px);" data-bottom-top="transform: translateY(300px);"><span>about</span></div>
                    <h3 class="about">ABOUT</h3>
                    <div class="e-line"></div>
                </div>
                <!--内容-->
                <div id="content">
                    <div id="img-small"><img src="img/smallme.jpg" alt=""/></div>
                    <div id="business-card">
                        <h2 class="letter">Hi,my name is Hathaway</h2>
                        <h3 class="letter">来自哈理工的一枚妹子</h3>
                        <h4 class="letter">我喜欢阅读，热爱艺术，享受自然的乐趣，开阔眼界，用心感受生活。 </h4>
                        <h4 class="letter">但是我最喜欢的还是我那熟悉的键盘声...</h4>
                        <h3 class="letter">My motto is:</h3>
                        <h3 class="letter">Do what you say,say what you do</h3>
                    </div>
                </div>
                <!--数据-->
                <div id="data">
                    <div class="s-l-part">
                        <h3>Some Numbers</h3>
                    </div>
                    <div class="s-r-part">
                        <div class="data-1">
                            <h3>5h</h3>
                            <div>Learning</div>
                        </div>
                        <div class="data-1">
                            <h3>3h</h3>
                            <div>Write code</div>
                        </div>
                        <div class="data-1">
                            <h3>2h</h3>
                            <div>Watching</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--*       part1  end       *-->
        <div class="dividing-line"></div>
            <!--```````   part2 项目    ``````-->
            <div class="wrapper" id="do">
                <div class="t-part">
                    <h4 class="who"> WHAT I DO</h4>
                    <div class="sect-subtitle" data-top-bottom="transform: translateY(-300px);" data-bottom-top="transform: translateY(300px);"><span>Works</span></div>
                    <h3 class="about">WORKS</h3>
                    <div class="e-line"></div>
                </div>
                <div id="b-part">
                    <div id="arrow">
                        <span id="lt"><i class="iconfont icon-xiangzuo"></i></span>
                        <span id="gt"><i class="iconfont icon-xiangyou"></i></span>
                    </div>
                    <div id="work">
                        <div class="works">
                            <h4>怪异照片墙</h4>
                            <img src="img/work1.jpg" alt=""/>
                            <p>All the pictures have beautiful stories and wonderful memories. It's a magical wall to store your important memories. Do you want to see how I designed this picture wall?</p>
                            <div class="go"><a href="photoshop/index.html"target="view_window">go</a></div>
                        </div>
                        <div class="works">
                            <h4>小米商城</h4>
                            <img src="img/work2.jpg" alt=""/>
                            <p>This is a copy of Mi-shop do web pages, the contents are certainly not true, can not buy. It's a website that mimics what we've just started to learn. It's not perfect yet. Now let's see.</p>
                            <div class="go"><a href="mishop/index.html" target="view_window">go</a></div>
                        </div>
                        <div class="works">
                            <h4>响应式</h4>
                            <img src="img/work4.jpg" alt=""/>
                            <p>Talking about the response will make you think of computers, iPad and mobile phones. A good programmer writes programs that make them easy to display without errors.</p>
                            <div class="go"><a href="phone-web/demo-img.html" target="view_window">go</a></div>
                        </div>
                        <div class="works">
                            <h4>心情标题</h4>
                            <img src="img/work3.jpg" alt=""/>
                            <p>This is a "mood" title that can be changed depending on the height.Give it a try！ </p>
                            <div class="go"><a href="title/fix_title.html" target="view_window">go</a></div>
                        </div>
                    </div>
                    <div id="s-part">
                        <ul>
                            <li><a href="part/选转的立方体.html" target="view_window">会旋转的立方体</a></li>
                            <li><a href="part/时钟.html" target="view_window">时钟</a></li>
                            <li><a href="part/五环.html" target="view_window">五环</a></li>
                            <li><a href="part/拖拽.html" target="view_window">拖拽</a></li>
                            <li><a href="part/无缝滚动.html" target="view_window">无缝隙滚动</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- *       part2 end       *-->
        <div class="dividing-line"></div>
            <!--```````   part3 能力    ``````-->
            <div class="wrapper" id="skill">
                <div class="t-part">
                    <h4 class="who">ATTAINMENTS</h4>
                    <div class="sect-subtitle" data-top-bottom="transform: translateY(-300px);" data-bottom-top="transform: translateY(300px);"><span>Skills</span></div>
                    <h3 class="about">SKILLS</h3>
                    <div class="e-line"></div>
                </div>
                <div class="vc_col-sm-12 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">
                        <div class="piechart-holder animaper " data-skcolor="#8F8F8F">
                            <div class="row">
                                <div class="piechart col-md-3">
                                            <span class="chart" data-percent="85">
                                                <span class="percent">85</span>
                                                <canvas height="300" width="300" id="myCanvas"></canvas>
                                            </span>
                                    <div class="clearfix"></div>
                                    <div class="skills-description">
                                        <h4>设计</h4>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="skillbar-box animaper">
                                        <div class="custom-skillbar-title">
                                            <span>Html </span>
                                        </div>
                                        <div class="skill-bar-percent">90%</div>
                                        <div class="skillbar-bg" data-percent="90%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>Css </span>
                                        </div>
                                        <div class="skill-bar-percent">85%</div>
                                        <div class="skillbar-bg" data-percent="85%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>js </span>
                                        </div>
                                        <div class="skill-bar-percent">80%</div>
                                        <div class="skillbar-bg" data-percent="80%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="piechart-holder animaper " data-skcolor="#8F8F8F">
                            <div class="row">
                                <div class="piechart col-md-3">
                                            <span class="chart" data-percent="72">
                                                <span class="percent">72</span>
                                                <canvas height="300" width="300" id="myCanvas2"></canvas>
                                            </span>
                                    <div class="clearfix"></div>
                                    <div class="skills-description">
                                        <h4>开发</h4>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="skillbar-box animaper">
                                        <div class="custom-skillbar-title">
                                            <span>Php </span>
                                        </div>
                                        <div class="skill-bar-percent">55%</div>
                                        <div class="skillbar-bg" data-percent="55%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>Vue </span>
                                        </div>
                                        <div class="skill-bar-percent">85%</div>
                                        <div class="skillbar-bg" data-percent="85%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>Es6</span>
                                        </div>
                                        <div class="skill-bar-percent">75%</div>
                                        <div class="skillbar-bg" data-percent="75%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="piechart-holder animaper " data-skcolor="#8F8F8F">
                            <div class="row">
                                <div class="piechart col-md-3">
                                            <span class="chart" data-percent="76">
                                                <span class="percent">76</span>
                                                <canvas height="300" width="300" id="myCanvas3"></canvas>
                                            </span>
                                    <div class="clearfix"></div>
                                    <div class="skills-description">
                                        <h4>扩展语言</h4>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="skillbar-box animaper">
                                        <div class="custom-skillbar-title">
                                            <span>Webpack </span>
                                        </div>
                                        <div class="skill-bar-percent">55%</div>
                                        <div class="skillbar-bg" data-percent="55%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>Jq </span>
                                        </div>
                                        <div class="skill-bar-percent">95%</div>
                                        <div class="skillbar-bg" data-percent="95%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                        <div class="custom-skillbar-title">
                                            <span>Sass </span>
                                        </div>
                                        <div class="skill-bar-percent">78%</div>
                                        <div class="skillbar-bg" data-percent="78%">
                                            <div class="custom-skillbar" style="overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *       part3 end       *-->
        <div class="dividing-line"></div>
            <!--```````   part4 联系我    ``````-->
            <div class="wrapper" id="cont">
                <div class="t-part">
                    <h4 class="who">INFORMATION</h4>
                    <h3 class="about">CONTACT</h3>
                    <div class="e-line"></div>
                </div>
                <footer class="viselem visfooter">
                     <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="custom_social_dewidget-1" class="widget footer-info spo-footer-widget text-left widget_custom_social_dewidget">
                                    <h4 class="spo-footer-widget-title">Find me</h4>
                                    <div class="footer-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="iconfont icon-face-book"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="iconfont icon-tuitetwitter44"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="iconfont icon-gugegoogle115"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="iconfont icon-in"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="custom_contact_dewidget-1" class="widget footer-info spo-footer-widget text-left widget_custom_contact_dewidget">
                                    <h4 class="spo-footer-widget-title">Contact info</h4>
                                    <ul class="footer-contacts">
                                        <li>
                                            <a href="#"><i class="iconfont icon-icon"></i> +7(111)123456789</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="iconfont icon-gongwenbao"></i> 27th Brooklyn New York.</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="iconfont icon-e-mail"></i> yourmail@domain.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="text-1" class="widget footer-info spo-footer-widget text-left widget_text">
                                    <h4 class="spo-footer-widget-title">Bionick Demos</h4>
                                    <div class="textwidget">
                                        <ul class="footer-contacts">
                                            <li><a href="#" target="_blank"><i class="iconfont icon-fangkuai"></i>Video Demo</a></li>
                                            <li><a href="" target="_blank"><i class="iconfont icon-fangkuai"></i>Image Demo</a></li>
                                            <li><a href="" target="_blank"><i class="iconfont icon-fangkuai"></i>Slider Demo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="y-advice">
                        <h2>留下你的建议：</h2>
                        <br>
                        <form action="index.php" method="post">
                            姓名：<input type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;
                            邮箱：<input type="email" name="email">
                            <br>
                            <br>
                            你的建议：<br>
                            <textarea name="advice" id="" cols="60" rows="5"></textarea>
                            <br><br>
                            <input id="sub" type="submit" name="sub" value="提交">
                        </form>
                    </div>
                </footer>
                <div class="r-block"></div>
            </div>
            <!-- *       part4 end       *-->
        </div>
    </div>
</div>
<!--内容结束-->
<!--尾部开始-->
<div class="to-top-holder copyright">
    <div class="last">
        <p>&copy; Hathaway 2017 Developed by reference | own personal website.</p>
        <div id="to-top"> <i class="iconfont icon-huidaodingbu"></i></div>
    </div>
</div>
<!--尾部结束-->
<script src="js/jslib.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<script src="js/index.js"></script>
<script src="js/stopExecutionOnTimeout.js?t=1"></script>
<script src="js/main.js"></script>
</body>
</html>