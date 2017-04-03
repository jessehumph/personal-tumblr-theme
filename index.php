<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{Title}{block:PostSummary} &mdash;
        {PostSummary}{/block:PostSummary}</title>
    {block:Description}
    <meta name="description" content="{MetaDescription}">
    {/block:Description}

    <link rel="apple-touch-icon" href="{PortraitURL-128}">
    <link rel="shortcut icon" href="{Favicon}">
    <link rel="canonical"
          href="{block:IndexPage}{BlogURL}{/block:IndexPage}{block:PermalinkPage}{Permalink}{/block:PermalinkPage}">
    <link rel="alternate" type="application/rss+xml" href="{RSS}">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <style>
        .tumblr_header{text-align:center;padding-top:5rem;padding-bottom:5rem;}
        .tumblr_logo{max-width:100px;}

        .tumblr_grid{max-width:900px;}
        .tumblr_row{}
        .tumblr_cell{text-align:center;}
        .tumblr_thumb{display:block; height:0; width: 100%; padding-bottom: 100%; background-size: cover; background-position: 50%;}
        .tumblr_photoset .tumblr_thumb{display:none;}
        .tumblr_photoset .tumblr_thumb:first-child{display:block;}
    </style>

    <script type="text/javascript"
            src="http://static.tumblr.com/cvhjz4y/JWSn5a9bq/jquery.min.js"></script>

    <script src="http://static.tumblr.com/eeiisdz/kVmoh6wnz/all-js.js"></script>

    <script
        src="http://static.tumblr.com/eeiisdz/2AUoh737r/velocity.min.js"></script>

    <script src="http://static.tumblr.com/eeiisdz/egnoh747r/masonry.js">
    </script>

    <script
        src="http://static.tumblr.com/21fzdeq/z5Codd2ov/imagesloaded.pkgd.js"></script>
    <script
        src="http://static.tumblr.com/21fzdeq/SaXoingh3/mobile-detect.min.js"></script>
    <script src="http://static.tumblr.com/dlyn8ge/8Hsomilee/device.js">


    </script>

    <script src="http://static.tumblr.com/bnjocu5/78Kom1c32/promote.js">

    </script>
    {block:NoSearchResults}
    <!--script
        src="http://static.tumblr.com/dlyn8ge/p1Komimb1/nosearch.js"></script-->
    {/block:NoSearchResults}

    <script src="http://static.tumblr.com/dlyn8ge/VXbomilkw/lightbox.js">
    </script>
    <script src="http://static.tumblr.com/dlyn8ge/blRomin4m/s-body.js"></script>

    <script src="http://static.tumblr.com/dlyn8ge/tNcomin24/s-header.js">

    </script>

    <link rel="stylesheet" type="text/css"
          href="http://static.tumblr.com/dlyn8ge/m1nomkeuy/s-body.css">
    {text:custom javascript 1}
    {text:custom javascript 2}

    <!--[if IE 7]>
    <script>
        var url = "http://browsehappy.com";
        $(location).attr('href', url);
    </script>
    <[endif]-->
    <!--[if IE 8]>
    <script>
        var url = "http://browsehappy.com";
        $(location).attr('href', url);
    </script>
    <[endif]-->


    <!--/script-->

    <script type="javascript">
        WebFontConfig = {
            google: {families: ['Lato:400,300,700,100:latin', 'Open+Sans:400,300,700,100:latin', 'Nothing+You+Could+Do', 'Roboto:400,100,300,500,700:latin', 'Nunito:300,400,700:latin', 'Montserrat:100,200,300,400,700:latin', 'Arimo:400,700:latin']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    {block:Hidden}
    <!--
      Tumblr related theme options should live the 'Hidden' block. The meta tags will not be rendered by the browser but still read by Tumblr.
      https://www.tumblr.com/docs/en/custom_themes#theme-options
     -->

    <meta name="image:Background Image" content=""/>
    <meta name="image:Logo" content=""/>

    <meta name="if:Use Caption" content=""/>


    <meta name="if:Hide Caption Only" content=""/>
    <meta name="if:Use Oblique Body Highlight Paragraph" content=""/>

    <meta name="if:Show first image of Photoset" content=""/>
    <meta name="if:Enable Social Share on Lightbox" content=""/>
    <meta name="if:Hide Permalink Text Info" content=""/>
    <meta name="if:Disable Image Lightbox" content=""/>

    <meta name="if:Disable Filter Border" content=""/>
    <meta name="if:Capitalize Title" content=""/>
    <meta name="if:Bold Title" content=""/>
    <meta name="if:Italic Title" content=""/>
    <meta name="if:Bold Filter Text" content=""/>
    <meta name="if:Italic Filter Text" content=""/>
    <meta name="if:Disable Search Button" content=""/>
    <meta name="if:Italic Hidden Menu Links" content=""/>

    <meta name="color:Post Background Color" content="#ffffff"/>
    <meta name="color:Post Text Color" content="#222222"/>
    <meta name="color:Post Title Color" content="#222222"/>
    <meta name="color:Permalink Post Info" content="#222222"/>
    <meta name="color:Link Color" content="#3e3e3e"/>

    <meta name="color:Copyright Text" content="#222222"/>
    <meta name="color:Copyright Icons" content="#aeaeae"/>
    <meta name="color:Copyright Background" content="#ffffff"/>

    <meta name="color:Custom Page Background" content="#ffffff"/>
    <meta name="color:Custom Page Text" content="#222222"/>
    <meta name="color:Custom Page Title" content="#222222"/>

    <meta name="color:Header Title Color" content="#222222"/>
    <meta name="color:Header Desscription Color" content="#222222"/>
    <meta name="color:Header Filter Texts Color" content="#222222"/>
    <meta name="color:Header Filter Border Color" content="#efefef"/>
    <meta name="color:Header Filter Hover Texts Color" content="#222222"/>
    <meta name="color:Header Filter Hover Border Color" content="#efefef"/>
    <meta name="color:Header Search Menu Icon Color" content="#222222"/>
    <meta name="color:Header Search Menu Background Color" content="#ffffff"/>
    <meta name="color:Header Search Menu Border Color" content="#efefef"/>


    <meta name="color:Hidden Menu Bacakground Color" content="#ffffff"/>
    <meta name="color:Hidden Menu Links Color" content="#222222"/>
    <meta name="color:Pagination Navigator Color" content="#222222"/>


    <meta name="text:Blog Keywords" content="">
    <meta name="text:Google analytics Web Property ID" content="">

    <meta name="select:Loading Type" content="infinite" title="Infinite Scroll">
    <meta name="select:Loading Type" content="paginate-it" title="Pagination">


    <meta name="select:Post Padding" content="25" title="25px">
    <meta name="select:Post Padding" content="0" title="0px">
    <meta name="select:Post Padding" content="5" title="5px">
    <meta name="select:Post Padding" content="10" title="10px">
    <meta name="select:Post Padding" content="15" title="15px">
    <meta name="select:Post Padding" content="35" title="35px">
    <meta name="select:Post Padding" content="45" title="45px">


    <meta name="select:Title Size" content="45pt" title="45pt">
    <meta name="select:Title Size" content="15pt" title="15pt">
    <meta name="select:Title Size" content="25pt" title="25pt">
    <meta name="select:Title Size" content="35pt" title="35pt">
    <meta name="select:Title Size" content="55pt" title="55pt">
    <meta name="select:Title Size" content="65pt" title="65pt">
    <meta name="select:Title Size" content="75pt" title="75pt">
    <meta name="select:Title Size" content="85pt" title="85pt">
    <meta name="select:Title Size" content="95pt" title="95pt">
    <meta name="select:Title Size" content="105pt" title="105pt">


    <meta name="font:Custom Page Title" content="Bookmania"/>
    <meta name="font:Custom Page Content" content="Arial"/>
    <meta name="font:Body Font" content="Arial"/>
    <meta name="font:Body Highlight Paragraph Font" content="Arial"/>
    <meta name="font:Post Title Font" content="Bookmania"/>

    <meta name="font:Header Title Font" content="Noto Serif"/>
    <meta name="font:Header Description Font" content="Baskervile"/>
    <meta name="font:Header Filter Font" content="Baskervile"/>
    <meta name="font:Hidden Menu Link Font" content="Baskervile"/>

    <meta name="select:Post Height" content="auto" title="normal">
    <meta name="select:Post Height" content="200px" title="200px">
    <meta name="select:Post Height" content="250px" title="250px">
    <meta name="select:Post Height" content="300px" title="300px">
    <meta name="select:Post Height" content="400px" title="400px">
    <meta name="select:Post Height" content="500px" title="500px">
    <meta name="select:Post Height" content="600px" title="600px">
    <meta name="select:Post Height" content="700px" title="700px">


    <meta name="select:Change Layout" content="onecolumn"
          title="One Column 800px">
    <meta name="select:Change Layout" content="fourpx" title="400px">
    <meta name="select:Change Layout" content="two-fourpx"
          title="Two Columns 400px">
    <meta name="select:Change Layout" content="three-fourpx"
          title="Three Columns 400px">
    <meta name="select:Change Layout" content="four-fourpx"
          title="Four Columns 400px">
    <meta name="select:Change Layout" content="five-fourpx"
          title="Five Columns 400px">

    <meta name="select:Change Layout" content="twopx" title="250px">

    <meta name="select:Change Layout" content="two-twopx"
          title="Two Columns 250px">

    <meta name="select:Change Layout" content="three-twopx"
          title="Three Columns 250px">
    <meta name="select:Change Layout" content="four-twopx"
          title="Four Columns 250px">
    <meta name="select:Change Layout" content="five-twopx"
          title="Five Columns 250px">
    <meta name="select:Change Layout" content="six-twopx"
          title="Six Columns 250px">
    <meta name="select:Change Layout" content="seven-twopx"
          title="Seven Columns 250px">


    <meta name="select:Change Layout" content="threepx" title="300px">
    <meta name="select:Change Layout" content="two-threepx"
          title="Two Columns 300px">

    <meta name="select:Change Layout" content="three-threepx"
          title="Three Columns 300px">

    <meta name="select:Change Layout" content="four-threepx"
          title="Four Columns 300px">

    <meta name="select:Change Layout" content="five-threepx"
          title="Five Columns 300px">

    <meta name="select:Change Layout" content="fivepx" title="500px">

    <meta name="select:Change Layout" content="two-fivepx"
          title="Two Columns 500px">
    <meta name="select:Change Layout" content="three-fivepx"
          title="Three Columns 500px">


    <meta name="select:Change Layout" content="sixpx" title="600px">
    <meta name="select:Change Layout" content="two-sixpx"
          title="Two Columns 600px">
    <meta name="select:Change Layout" content="three-sixpx"
          title="Three Columns 600px">


    <meta name="select:Change Layout" content="sevenpx" title="700px">

    <meta name="select:Change Layout" content="two-sevenpx"
          title="Two Columns 700px">

    <meta name="select:Change Layout" content="onecolumn500px"
          title="One Column 500px">
    <meta name="select:Change Layout" content="onecolumn400px"
          title="One Column 400px">
    <meta name="select:Change Layout" content="twocolumns" title="Two Columns">
    <meta name="select:Change Layout" content="threecolumns"
          title="Three Columns">
    <meta name="select:Change Layout" content="fourcolumns"
          title="Four Columns">
    <meta name="select:Change Layout" content="fivecolumns"
          title="Five Columns">


    <meta name='text:Disqus Shortname' content=''>
    <meta name='text:Custom Javascript 1' content=''>
    <meta name='text:Custom Javascript 2' content=''>

    <meta name="text:Website 1 URL" content=""/>
    <meta name="text:Website 2 URL" content=""/>

    <meta name="text:Facebook URL" content=""/>
    <meta name="text:Twitter URL" content=""/>
    <meta name="text:Pinterest URL" content=""/>
    <meta name="text:Instagram Username" content=""/>
    <meta name="text:Shop URL" content=""/>
    <meta name="text:SoundCloud URL" content=""/>
    <!-- New Update -->
    <meta name="text:Yelp URL" content=""/>
    <meta name="text:Apple App URL" content=""/>
    <meta name="text:Android App URL" content=""/>
    <meta name="text:Google Plus URL" content=""/>
    <meta name="text:Vimeo URL" content=""/>
    <meta name="text:Youtube URL" content=""/>
    <!-- New Update -->

    <meta name="text:Gibhub URL" content=""/>
    <meta name="text:500px URL" content=""/>
    <meta name="text:Medium URL" content=""/>
    <meta name="text:Dribble URL" content=""/>
    <meta name="text:Behence URL" content=""/>
    <meta name="text:Flickr URL" content=""/>
    <meta name="text:Picasa URL" content=""/>
    <meta name="text:Reddit URL" content=""/>
    <meta name="text:Blogger URL" content=""/>
    <meta name="text:Diigo URL" content=""/>
    <meta name="text:Spotify URL" content=""/>
    <meta name="text:Hi5 URL" content=""/>
    <meta name="text:Snapchat Username" content=""/>

    <meta name="text:Custom link 1 URL" content=""/>
    <meta name="text:Custom link 1 title" content=""/>
    <meta name="text:Custom link 2 URL" content=""/>
    <meta name="text:Custom link 2 title" content=""/>
    <meta name="text:Custom link 3 URL" content=""/>
    <meta name="text:Custom link 3 title" content=""/>
    <meta name="text:Custom link 4 URL" content=""/>
    <meta name="text:Custom link 4 title" content=""/>
    <meta name="text:Custom link 5 URL" content=""/>
    <meta name="text:Custom link 5 title" content=""/>
    <meta name="text:Custom link 6 URL" content=""/>
    <meta name="text:Custom link 6 title" content=""/>
    <meta name="text:Custom link 7 URL" content=""/>
    <meta name="text:Custom link 7 title" content=""/>
    <meta name="text:Custom link 8 URL" content=""/>
    <meta name="text:Custom link 8 title" content=""/>


    <meta name="text:Header Filter 1" content="Blogger"/>
    <meta name="text:Header Filter 2" content="Photographer"/>
    <meta name="text:Header Filter 3" content="Artist"/>


    <meta name="text:Header Filter Link 1" content=""/>
    <meta name="text:Header Filter Link 2" content=""/>
    <meta name="text:Header Filter Link 3" content=""/>
    {/block:Hidden}


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
          type="text/css" media="all">
    <style type="text/css">
        /*Tumblr Global Appearance */
        body {

        background: {
            BackgroundColor
        }

        ;
        }
        h1 > a {

        color: {
            TitleColor
        }

        ;
        }
        a {

        color: {
            AccentColor
        }

        }
        {
            CustomCSS
        }
    </style>


    <!--style>
        #ind .body-one-column-two-fourpx{width:calc(800px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-fourpx .inner_container{width:400px}
        .this-is-tag#ind.not-mobile .two-fourpx .inner_container{width:400px !important;}
        #ind .body-one-column-three-fourpx{width:calc(1200px + {select:post padding}px * 6);margin:auto;max-width:100%;}
        #ind.not-mobile .three-fourpx .inner_container{width:400px}
        .this-is-tag#ind.not-mobile .three-fourpx .inner_container{width:400px !important;}
        #ind .body-one-column-four-fourpx{width:calc(1600px + {select:post padding}px * 8);margin:auto;max-width:100%;}
        #ind.not-mobile .four-fourpx .inner_container{width:400px}
        .this-is-tag#ind.not-mobile .four-fourpx .inner_container{width:400px !important;}
        #ind .body-one-column-five-fourpx{width:calc(2000px + {select:post padding}px * 10);margin:auto;max-width:100%;}
        #ind.not-mobile .five-fourpx .inner_container{width:400px}
        .this-is-tag#ind.not-mobile .five-fourpx .inner_container{width:400px !important;}

        #ind .body-one-column-two-twopx{width:calc(500px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .two-twopx .inner_container{width:250px !important;}

        #ind .body-one-column-three-twopx{width:calc(750px + {select:post padding}px * 6);margin:auto;max-width:100%;}
        #ind.not-mobile .three-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .three-twopx .inner_container{width:250px !important;}

        #ind .body-one-column-four-twopx{width:calc(1000px + {select:post padding}px * 8);margin:auto;max-width:100%;}
        #ind.not-mobile .four-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .four-twopx .inner_container{width:250px !important;}
        #ind .body-one-column-five-twopx{width:calc(1250px + {select:post padding}px * 10);margin:auto;max-width:100%;}
        #ind.not-mobile .five-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .five-twopx .inner_container{width:250px !important;}

        #ind .body-one-column-six-twopx{width:calc(1500px + {select:post padding}px * 12);margin:auto;max-width:100%;}
        #ind.not-mobile .six-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .six-twopx .inner_container{width:250px !important;}

        #ind .body-one-column-seven-twopx{width:calc(1750px + {select:post padding}px * 14);margin:auto;max-width:100%;}
        #ind.not-mobile .seven-twopx .inner_container{width:250px}
        .this-is-tag#ind.not-mobile .seven-twopx .inner_container{width:250px !important;}


        #ind .body-one-column-two-threepx{width:calc(600px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-threepx .inner_container{width:300px}
        .this-is-tag#ind.not-mobile .two-threepx .inner_container{width:300px !important;}
        #ind .body-one-column-three-threepx{width:calc(900px + {select:post padding}px * 6);margin:auto;max-width:100%;}
        #ind.not-mobile .three-threepx .inner_container{width:300px}
        .this-is-tag#ind.not-mobile .three-threepx .inner_container{width:300px !important;}
        #ind .body-one-column-four-threepx{width:calc(1200px + {select:post padding}px * 8);margin:auto;max-width:100%;}
        #ind.not-mobile .four-threepx .inner_container{width:300px}
        .this-is-tag#ind.not-mobile .four-threepx .inner_container{width:300px !important;}

        #ind .body-one-column-five-threepx{width:calc(1500px + {select:post padding}px * 10);margin:auto;max-width:100%;}
        #ind.not-mobile .five-threepx .inner_container{width:300px}
        .this-is-tag#ind.not-mobile .five-threepx .inner_container{width:300px !important;}


        #ind .body-one-column-two-fivepx{width:calc(1000px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-fivepx .inner_container{width:500px}
        .this-is-tag#ind.not-mobile .two-fivepx .inner_container{width:500px !important;}
        #ind .body-one-column-three-fivepx{width:calc(1500px + {select:post padding}px * 6);margin:auto;max-width:100%;}
        #ind.not-mobile .three-fivepx .inner_container{width:500px}
        .this-is-tag#ind.not-mobile .three-fivepx .inner_container{width:500px !important;}


        #ind .body-one-column-two-sixpx{width:calc(1200px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-sixpx .inner_container{width:600px}
        .this-is-tag#ind.not-mobile .two-sixpx .inner_container{width:600px !important;}

        #ind .body-one-column-three-sixpx{width:calc(1800px + {select:post padding}px * 6);margin:auto;max-width:100%;}
        #ind.not-mobile .three-sixpx .inner_container{width:600px}
        .this-is-tag#ind.not-mobile .three-sixpx .inner_container{width:600px !important;}


        #ind .body-one-column-two-sevenpx{width:calc(1400px + {select:post padding}px * 4);margin:auto;max-width:100%;}
        #ind.not-mobile .two-sevenpx .inner_container{width:700px}
        .this-is-tag#ind.not-mobile .two-sevenpx .inner_container{width:700px !important;}

        .albumart{color:{color:post background color}}
        blockquote{ border-left:1px solid {AccentColor} !Important;}
        a{color:{color:Link Color};border-bottom:1px dotted #aeaeae;text-decoration:none;padding-bottom:1px;}
        .play_button{background-color:{AccentColor};}
        ::selection {
        background: {AccentColor}; /* WebKit/Blink Browsers */
        }
        ::-moz-selection {
        background: {AccentColor}; /* Gecko Browsers */
        }
        .load-more-container{font-family:{font:Load more font}}
        .inner_container{margin:{select:Post Padding}px}
        body{font-family:{font:Body Font},'helvetica neue';}

        html{background-color:{BackgroundColor};background-image:url('{image:background image}');background-size:cover;background-position:center;}

        .caption,
        #posts .post-background,#posts .inner_container.capt-quote .post-background,.capt-link .caption{background-color:{color:Post Background Color}}
        .post.link h3 a,.post.link h3 {color:{color:Post Background Color};font-family:{font:Post Title Font};}
        .top-source{font-family:{font:Post Title Font}}

        .question_question_content{font-family:{font:Post Content Font};}
        .answer_question{font-family:{font:Post Title Font};}

        /** Text Title **/
        .post.text h3, .post.chat h3, .post.link h3{font-family:{font:Post Title Font};font-weight:300px;font-size:19pt;letter-spacing:-0.5pt;line-height:140%;}
        .text-perma-info #blog-title, .text-perma-date,.text-perma-info{color:{color:Permalink Post Info}}
        .post.text h3 a, .post.quote a, .top-source, .top-source .via-element{color:{color:post title color}}
        /** Text Title **/
        /** Highlighted Texts **/
        .post.text h2{margin-bottom:5pt;font-size:15pt;}
        /** Highlighted Fonts **/
        .post{color:{color:post text color};line-height:200%;}
        .post.text h2{font-family:{font:Body Highlight Paragraph Font};{block:ifUseObliqueBodyHighlightParagraph}font-style:oblique;{/block:ifUseObliqueBodyHighlightParagraph}}
        .tumblr_blog:before{content:'';width:6px;height:6px;background-color:{accentcolor};border-radius:50%;display:inline-block;margin-right:5px;border-bottom:0px;position:relative;top:-2px;}
        .post.quote .tumblr_blog:before{content:'';width:0px;height:0px;background-color:{accentcolor};border-radius:50%;display:inline-block;margin-right:0px;border-bottom:0px;position:relative;top:-2px;}
        .tumblr_blog:after{content:''}
        .tumblr_blog{border-bottom:0px;font-weight:600;}
        .blockquotes{display:inline-block;}
        .blockquotes{color:{color:post background color}}
        .via-element{font-weight:600;color:#aeaeae;font-size:10pt; -webkit-text-size-adjust:100%;line-height:120%;}
        .via-element a{color:#aeaeae;}




        /** Copyright **/
        .copyrighting{padding-top:20px;padding-bottom:20px;width:100%;text-align:center;font-weight:600;font-size:10pt;letter-spacing:-0.2pt;word-spacing:-0.2pt;color:{color:Copyright Text};background-color:{color:Copyright Background};overflow:hidden;}
        .copyright-description{max-width:700px;margin:auto;font-weight:normal;transform:scale(0.9);line-height:19pt;color:{color:Copyright Text};opacity:0.8;margin-top:0px;}
        .copyright-description a{color:{color:Copyright Text};border-bottom:0px;}
        .copyright-footer-icons{font-size:11pt;margin-top:10px;margin-bottom:10px;}
        .copyright-footer-icons a{color:{color:Copyright Icons};border-bottom:0px;}
        .copyright-footer-icons span{display:inline-block;margin-left:4px;margin-right:4px;}
        /** Copyright **/

        /**permalink page**/

        #per .inner_container{width:100%;margin:0px;background-color:{backgroundColor} !important;}
        #per .post-background, #per .post-notes,#per .disqus-comment{background-color:{color:post background color};

        }
        #per .capt-link .post{color:{color:post text color}}
        #per .capt-link h3{color:{color:post title color}}
        /**permalink page**/

        {customCSS}
        .post.link h3{color:{color:post title color}}
        .link-description{color:{color:post text color}}
        .video-play-button:hover{color:{AccentColor};border:3px solid {AccentColor};}
        #ind .has-caption.in-caption{border:0px;}
        #ind.not-mobile:not(.this-is-tag) #border-bottom{height:{select:Post Height}}



        {block:ifenablesocialshareonlightbox}
        .not-mobile .lightbox-share{display:block}
        {/block:ifenablesocialshareonlightbox}

        #per.this-is-page .post-background{background-color:{color:Custom Page Background} !Important}
        #per.this-is-page .post.text p{color:{color:Custom Page Text};font-family:{font:custom page text};}
        #per.this-is-page .post.text h3{color:{color:Custom Page Title};font-family:{font:custom page title};}
        .salvia-title{font-family:{font:Header Title Font}}
        .salvia-description{font-family:{font:Header Description Font}}
        .salvia-occupations a{font-family:{font:Header Occupation Font}}
        .hidden-menu-link a{font-family:{font:Hidden Menu Link Font}}
        header {height:auto !important;}
        .header-title a{color:{color:Header Title Color}}
        .header-description,.header-description a{color:{color:Header Desscription Color}}
        .salvia-occupations a{color:{color:Header Occupation Texts Color}}
        .salvia-occupations a{border-bottom:1px solid {color:Header Occupation Border Color}}
        .salvia-occupations a:hover{color:{color:Header Occupation Hover Texts Color}}
        .salvia-occupations a:hover{border-bottom:1px solid {color:Header Occupation Hover Border Color}}
        .trigger-buttons{color:{color:Header Search Menu Icon Color};}
        .trigger-buttons a{border:1px solid {color:Header Search Menu Border Color};}
        .hidden-menu{background-color:{color:Hidden Menu Bacakground Color};border-right:1px solid {color:Header Occupation Border Color};}
        .hidden-menu-link a{color:{color:Hidden Menu Links Color}}
        .salvia-title{font-size:{select:Title Size}}
        .trigger-buttons a{background-color:{color:Header Search Menu Background Color}}


        .promotion-bar{position:fixed;bottom:-55px;z-index:99999999099;left:50%;transform:translateX(-50%);-webkit-transform:translateX(-50%);background-color:#222222;text-align:center;border-radius:35px;color:#ffffff;font-family:baskervile;letter-spacing:0.1pt;cursor:pointer;overflow:hidden;display:none;font-size:10pt;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar-close{font-weight:600;transform:scale(1,0.9);display:inline-block;font-family:nunito;font-weight:900;position:absolute;right:-3px;top:-3px;width:38px;height:65px;padding-top:10px;color:#ffffff;padding-right:5px;}
        .promotion-bar:hover{background-color:#ffffff;color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar:hover a{color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar:hover .promotion-bar-close{color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .customize .promotion-bar{display:block}
        .promotion-bar-text{padding:8px;padding-left:30px;padding-right:50px;display:block;color:#ffffff;border:0px;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .landing-page:not(.this-is-page) #content-per, .landing-page:not(.this-is-page) .copyrighting,.landing-page:not(.this-is-page) .load-more-container, .landing-page:not(.this-is-page) .paginate-container{display:none !important}
        .like_button iframe{height:15px;}
        .this-is-page .salvia-header{margin-bottom:80px;}
        .infinite.not-mobile .paginate-it-container{display:none !Important}
        .paginate-it-container{background-color:transparent}
        html{border-left:0px;}
        .paginate-it-container a{color:{color:Pagination Navigator Color}}


        .caption{display:none;}


        .hidden_posts{display:none;}
    </style-->
<!--style>
    .hidden_posts{display:none;}
</style-->

    <style>
        .caption,
        #posts .post-background,#posts .inner_container.capt-quote .post-background,.capt-link .caption{background-color:{color:Post Background Color}}
        .post.link h3 a,.post.link h3 {color:{color:Post Background Color};font-family:{font:Post Title Font};}
        .top-source{font-family:{font:Post Title Font}}

        .question_question_content{font-family:{font:Post Content Font};}
        .answer_question{font-family:{font:Post Title Font};}

        /** Text Title **/
        .post.text h3, .post.chat h3, .post.link h3{font-family:{font:Post Title Font};font-weight:300px;font-size:19pt;letter-spacing:-0.5pt;line-height:140%;}
        .text-perma-info #blog-title, .text-perma-date,.text-perma-info{color:{color:Permalink Post Info}}
        .post.text h3 a, .post.quote a, .top-source, .top-source .via-element{color:{color:post title color}}
        /** Text Title **/
        /** Highlighted Texts **/
        .post.text h2{margin-bottom:5pt;font-size:15pt;}
        /** Highlighted Fonts **/
        .post{color:{color:post text color};line-height:200%;}
        .post.text h2{font-family:{font:Body Highlight Paragraph Font};{block:ifUseObliqueBodyHighlightParagraph}font-style:oblique;{/block:ifUseObliqueBodyHighlightParagraph}}
        .tumblr_blog:before{content:'';width:6px;height:6px;background-color:{accentcolor};border-radius:50%;display:inline-block;margin-right:5px;border-bottom:0px;position:relative;top:-2px;}
        .post.quote .tumblr_blog:before{content:'';width:0px;height:0px;background-color:{accentcolor};border-radius:50%;display:inline-block;margin-right:0px;border-bottom:0px;position:relative;top:-2px;}
        .tumblr_blog:after{content:''}
        .tumblr_blog{border-bottom:0px;font-weight:600;}
        .blockquotes{display:inline-block;}
        .blockquotes{color:{color:post background color}}
        .via-element{font-weight:600;color:#aeaeae;font-size:10pt; -webkit-text-size-adjust:100%;line-height:120%;}
        .via-element a{color:#aeaeae;}




        /** Copyright **/
        .copyrighting{padding-top:20px;padding-bottom:20px;width:100%;text-align:center;font-weight:600;font-size:10pt;letter-spacing:-0.2pt;word-spacing:-0.2pt;color:{color:Copyright Text};background-color:{color:Copyright Background};overflow:hidden;}
        .copyright-description{max-width:700px;margin:auto;font-weight:normal;transform:scale(0.9);line-height:19pt;color:{color:Copyright Text};opacity:0.8;margin-top:0px;}
        .copyright-description a{color:{color:Copyright Text};border-bottom:0px;}
        .copyright-footer-icons{font-size:11pt;margin-top:10px;margin-bottom:10px;}
        .copyright-footer-icons a{color:{color:Copyright Icons};border-bottom:0px;}
        .copyright-footer-icons span{display:inline-block;margin-left:4px;margin-right:4px;}
        /** Copyright **/

        /**permalink page**/

        #per .inner_container{width:100%;margin:0px;background-color:{backgroundColor} !important;}
        #per .post-background, #per .post-notes,#per .disqus-comment{background-color:{color:post background color};

        }
        #per .capt-link .post{color:{color:post text color}}
        #per .capt-link h3{color:{color:post title color}}
        /**permalink page**/

        {customCSS}
        .post.link h3{color:{color:post title color}}
        .link-description{color:{color:post text color}}
        .video-play-button:hover{color:{AccentColor};border:3px solid {AccentColor};}
        #ind .has-caption.in-caption{border:0px;}
        #ind.not-mobile:not(.this-is-tag) #border-bottom{height:{select:Post Height}}



        {block:ifenablesocialshareonlightbox}
        .not-mobile .lightbox-share{display:block}
        {/block:ifenablesocialshareonlightbox}

        #per.this-is-page .post-background{background-color:{color:Custom Page Background} !Important}
        #per.this-is-page .post.text p{color:{color:Custom Page Text};font-family:{font:custom page text};}
        #per.this-is-page .post.text h3{color:{color:Custom Page Title};font-family:{font:custom page title};}
        .salvia-title{font-family:{font:Header Title Font}}
        .salvia-description{font-family:{font:Header Description Font}}
        .hidden-menu-link a{font-family:{font:Hidden Menu Link Font}}
        header {height:auto !important;}
        .header-title a{color:{color:Header Title Color}}
        .header-description,.header-description a{color:{color:Header Desscription Color}}
        .trigger-buttons{color:{color:Header Search Menu Icon Color};}
        .trigger-buttons a{border:1px solid {color:Header Search Menu Border Color};}
        .hidden-menu{background-color:{color:Hidden Menu Bacakground Color};border-right:1px solid {color:Header Occupation Border Color};}
        .hidden-menu-link a{color:{color:Hidden Menu Links Color}}
        .salvia-title{font-size:{select:Title Size}}
        .trigger-buttons a{background-color:{color:Header Search Menu Background Color}}


        .promotion-bar{position:fixed;bottom:-55px;z-index:99999999099;left:50%;transform:translateX(-50%);-webkit-transform:translateX(-50%);background-color:#222222;text-align:center;border-radius:35px;color:#ffffff;font-family:baskervile;letter-spacing:0.1pt;cursor:pointer;overflow:hidden;display:none;font-size:10pt;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar-close{font-weight:600;transform:scale(1,0.9);display:inline-block;font-family:nunito;font-weight:900;position:absolute;right:-3px;top:-3px;width:38px;height:65px;padding-top:10px;color:#ffffff;padding-right:5px;}
        .promotion-bar:hover{background-color:#ffffff;color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar:hover a{color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .promotion-bar:hover .promotion-bar-close{color:#222222;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .customize .promotion-bar{display:block}
        .promotion-bar-text{padding:8px;padding-left:30px;padding-right:50px;display:block;color:#ffffff;border:0px;
            -webkit-transition: all 0.35s ease-in-out; /* Safari */
            transition: all 0.35s ease-in-out;}
        .landing-page:not(.this-is-page) #content-per, .landing-page:not(.this-is-page) .copyrighting,.landing-page:not(.this-is-page) .load-more-container, .landing-page:not(.this-is-page) .paginate-container{display:none !important}
        .like_button iframe{height:15px;}
        .this-is-page .salvia-header{margin-bottom:80px;}
        .infinite.not-mobile .paginate-it-container{display:none !Important}
        .paginate-it-container{background-color:transparent}
        html{border-left:0px;}
        .paginate-it-container a{color:{color:Pagination Navigator Color}}
    </style>

    <style>
        .header_filter a{font-family:{font:Header Filter Font}}
        .header_filter a{color:{color:Header Filter Texts Color}}
        .header_filter a{border-bottom:1px solid {color:Header Filter Border Color}}
        .header_filter a:hover{color:{color:Header Filter Hover Texts Color}}
        .header_filter a:hover{border-bottom:1px solid {color:Header Filter Hover Border Color}}
    </style>

</head>
<body class="not-mobile">

<div class="hidden-menu">
    <div class="hidden-menu-close">X</div>
    <div class="hidden-menu-right-image"></div>
    <div class="hidden-menu-content">
        <div class="hidden-menu-link">

            <div style="margin-bottom:15px;">
                {block:HasPages}
                {block:Pages}
                    <span>
                        <a href="{URL}" {target}>
                            {Label}
                        </a>
                    </span>
                {/block:Pages}
                {/block:HasPages}

                {block:SubmissionsEnabled}
                    <span>
                        <a href="/submit" {target}>{SubmitLabel}</a>
                    </span>
                {/block:SubmissionsEnabled}
            </div>


            {block:AskEnabled}
                <span>
                    <a class='ask-trigger'>
                        {AskLabel}
                    </a>
                </span>
            {/block:AskEnabled}

            {block:SubmissionsEnabled}
                <span>
                    <a class='submit-trigger'>
                        {SubmitLabel}
                    </a>
                </span>
            {block:SubmissionsEnabled}

        </div>
    </div>
</div>
</div>

<div class="trigger-buttons">
    <a data-icon="&#xe022" original-icon="&#xe022" close-icon="&#xe023"
       class="menu-trigger"></a>
    <!--a data-icon="&#xe021" class="search-trigger"></a-->
</div>

<header role="banner" class="tumblr_header">
    <a href="/">

        {block:ifnotlogoimage}
            {block:ShowTitle}
                <h1 id="logo">
                    <a href="{BlogURL}">
                        {Title}
                    </a>
                </h1>
            {/block:ShowTitle}
        {/block:ifnotlogoimage}

        {block:iflogoimage}
        <img class="tumblr_logo" src="{image:logo}">
        {/block:iflogoimage}

    </a>
    <nav class="container-fluid tumblr_grid">
        <div class="row no-gutters tumblr_row">

            {block:ifHeaderFilter1}
                <a  class="col-md-4 col-sm-4 col-12 tumblr_cell header_filter"
                    {block:ifHeaderFilterLink1}
                    onclick="window.location.href='{text:Header Filter Link 1}'"
                    {/block:ifHeaderFilterLink1}
                >
                    {text:Header Filter 1}
                </a>
            {/block:ifHeaderFilter1}

            {block:ifHeaderFilter2}
                <a  class="col-md-4 col-sm-4 col-12 tumblr_cell header_filter"
                    {block:ifHeaderFilterLink2}
                    onclick="window.location.href='{text:Header Filter Link 2}'"
                    {/block:ifHeaderFilterLink2}
                >
                    {text:Header Filter 2}
                </a>
            {/block:ifHeaderFilter2}

            {block:ifHeaderFilter3}
                <a  class="col-md-4 col-sm-4 col-12 tumblr_cell header_filter"
                    {block:ifHeaderFilterLink3}
                    onclick="window.location.href='{text:Header Filter Link 3}'"
                    {/block:ifHeaderFilterLink3}
                >
                    {text:Header Filter 3}
                </a>
            {/block:ifHeaderFilter3}
        </div>
    </nav>
</header>


<!--header role="banner" class="header salvia-header">

        <div class="salvia-title">
            <a href="/">

                {block:ifnotlogoimage}
                    {block:ShowTitle}
                        <h1 id="logo">
                            <a href="{BlogURL}">
                                {Title}
                            </a>
                        </h1>
                    {/block:ShowTitle}
                {/block:ifnotlogoimage}

                {block:iflogoimage}
                <img src="{image:logo}">
                {/block:iflogoimage}

            </a>
        </div>

        {block:ShowDescription}
            {block:Description}
                <div class="description salvia-description">
                    {Description}
                </div>
            {/block:Description}
        {/block:ShowDescription}

        <div class="salvia-occupations">

            {block:ifOccupation1}
                <a  {block:ifOccupationlink1}
                    onclick="window.location.href='{text:Occupation Link 1}'"
                    style="cursor:pointer"
                    {/block:ifOccupationlink1}
                >
                    {text:Occupation 1}
                </a>
            {/block:ifOccupation1}

            {block:ifOccupation2}
                <a  {block:ifOccupationlink2}
                    onclick="window.location.href='{text:Occupation Link 2}'"
                    style="cursor:pointer"
                    {/block:ifOccupationlink2}
                >
                    {text:Occupation 2}
                </a>
            {/block:ifOccupation2}

            {block:ifOccupation3}
                <a  {block:ifOccupationlink3}
                    onclick="window.location.href='{text:Occupation Link 3}'"
                    style="cursor:pointer"
                    {/block:ifOccupationlink3}
                >
                    {text:Occupation 3}
                </a>
            {/block:ifOccupation3}
        </div>

    {block:ShowAvatar}
        <img src="{PortraitURL-128}">
    {/block:ShowAvatar}

    <!--nav role="navigation">
        <ul>
            {block:HasPages}
                {block:Pages}
                    <li>
                        <a href="{URL}">
                            {Label}
                        </a>
                    </li>
                {/block:Pages}
            {/block:HasPages}

            <li>
                <a href="/archive">
                    {lang:Archive}
                </a>
            </li>

            {block:AskEnabled}
            <li>
                <a href="/ask">
                    {AskLabel}
                </a>
            </li>
            {/block:AskEnabled}

        </ul>
    </nav>

    <form id="search" action="/search" method="get">
        <input role="textbox" type="search" placeholder="{lang:Search}" name="q"
               value="{SearchQuery}">
        <input role="button" type="submit" value="{lang:Search}">
    </form-->

<!--/header-->





<div class="scrolling"></div>
<div id="content-per">




    <!-- Search Page -->
    {block:SearchPage}
        <!--style scoped>
            .hidden_posts{display:block;}
        </style-->
        <div class="result">
            <p>
                {lang:Found SearchResultCount results for SearchQuery 2}
            </p>
            {block:NoSearchResults}
                <p>
                    {lang:No results for SearchQuery 2}
                </p>
            {/block:NoSearchResults}
        </div>
    {/block:SearchPage}




    <!-- Tag Pages -->
    {block:TagPage}
        <!--style scoped>
            .hidden_posts{display:block;}
        </style-->
        <div class="result">
            <p>
                {lang:TagResultCount posts tagged Tag 3}
            </p>
        </div>
    {/block:TagPage}

<main role="main" class="container-fluid tumblr_grid">
    <div class="row no-gutters tumblr_row">



    <!-- HomePage -->
    {block:HomePage}
    {block:Posts}
    <!-- Post -->
        {block:Photo}
            <section class="col-md-4 col-sm-6 col-12 tumblr_cell">
                <a class="tumblr_thumb" href="{Permalink}"
                     style="background-image:url('{PhotoURL-500}');">
                    {PhotoAlt}
                </a>
            </section>
        {/block:Photo}
    {/block:Posts}
    {/block:HomePage}

    <!-- TagPage -->
    {block:TagPage}
    {block:Posts}
    <!-- Post -->
        {block:Photo}
            <section class="col-md-4 col-sm-6 col-12 tumblr_cell">
                <a class="tumblr_thumb" href="{Permalink}"
                     style="background-image:url('{PhotoURL-500}');">
                    {PhotoAlt}
                </a>
            </section>
        {/block:Photo}


        {block:Photoset}
            <section class="col-md-4 col-sm-6 col-12 tumblr_cell tumblr_photoset">
                {block:ifshowfirstimageofphotoset}
                {block:photos}
                    <a class="tumblr_thumb" href="{Permalink}"
                         style="background-image:url('{PhotoURL-500}');">
                        {PhotoAlt}
                    </a>

                {/block:photos}
                {/block:ifshowfirstimageofphotoset}

                {block:ifnotshowfirstimageofphotoset}
                {Photoset}
                {/block:ifnotshowfirstimageofphotoset}
            </section>
        {/block:Photoset}
    {/block:Posts}
    {/block:TagPage}



    </div>

    <!-- PermalinkPage -->
    {block:PermalinkPage}
    {block:Posts}
    <!-- Post -->
            {block:Photo}
                <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                        <figure
                            class="{block:HighRes}high-res{/block:HighRes}{block:Caption} with-caption{/block:Caption}"
                            data-photo-width="{PhotoWidth-HighRes}">

                            {LinkOpenTag}
                                <img src="{PhotoURL-HighRes}" alt="{PhotoAlt}"
                                      width="{PhotoWidth-HighRes}"
                                      height="{PhotoHeight-HighRes}" />
                            {LinkCloseTag}

                            {block:Caption}
                                <figcaption class="caption">
                                    {Caption}
                                </figcaption>
                            {/block:Caption}

                        </figure>


                        {LikeButton color="grey"}


                        {ReblogButton color="grey"}


                        {block:IndexPage}

                            <p>
                                <a href="{Permalink}" class="permalink">
                                    {lang:Permalink}
                                </a>
                            </p>

                        {/block:IndexPage}

                </article>
            {/block:Photo}


            {block:Photoset}
                <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">
                        {Photoset}
                </article>
            {/block:Photoset}
    {/block:Posts}
    {/block:PermalinkPage}
</main>


            {block:Photo}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <figure
                    class="{block:HighRes}high-res{/block:HighRes}{block:Caption} with-caption{/block:Caption}"
                    data-photo-width="{PhotoWidth-HighRes}">

                    {LinkOpenTag}
                        <img src="{PhotoURL-HighRes}" alt="{PhotoAlt}"
                              width="{PhotoWidth-HighRes}"
                              height="{PhotoHeight-HighRes}" />
                    {LinkCloseTag}

                    {block:Caption}
                        <figcaption class="caption">
                            {Caption}
                        </figcaption>
                    {/block:Caption}

                </figure>


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Photo}


            {block:Date}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                {block:NewDayDate}
                    <p>
                        {DayOfWeek}, {Month} {DayOfMonth}, {Year}
                    </p>
                {/block:NewDayDate}

                {block:SameDayDate}
                    <p>
                        {DayOfWeek}, {Month} {DayOfMonth}, {Year}
                    </p>
                {/block:SameDayDate}


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Date}


            {block:Text}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                {block:Title}
                    <h2>
                        <a href="{Permalink}">
                            {Title}
                        </a>
                    </h2>
                {/block:Title}

                {block:Body}
                    <div class="body-text">
                        {Body}
                    </div>
                {/block:Body}


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Text}


            {block:Quote}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <blockquote class="words {Length}">
                    &#8220;{Quote}&#8221;
                </blockquote>

                {block:Source}
                    <p class="source">
                        &mdash; {Source}
                    </p>
                {/block:Source}


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Quote}


            {block:Link}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <h2>
                    <a href="{URL}" {Target}>
                        {Name}
                    </a>
                </h2>

                {block:Description}
                    <div class="caption">
                        {Description}
                    </div>
                {/block:Description}


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Link}


            {block:Audio}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                {block:AlbumArt}
                    <img src="{AlbumArtURL}" alt="">
                {/block:AlbumArt}

                <div class="audio-player">
                    {block:AudioEmbed}
                        {AudioEmbed color="white"}
                    {/block:AudioEmbed}
                    {block:AudioPlayer}
                        {AudioPlayerBlack}
                    {/block:AudioPlayer}
                </div>

                {block:Caption}
                    <div class="caption">
                        {Caption}
                    </div>
                {/block:Caption}


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Audio}


            {block:Photoset}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">
                {Photoset}
        </article>
            {/block:Photoset}


            {block:Panorama}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <figure {block:Caption} class="with-caption"{/block:Caption} >

                {LinkOpenTag}
                    <img src="{PhotoURL-Panorama}"
                         width="{PhotoWidth-Panorama}"
                         height="{PhotoHeight-Panorama}" alt="{PhotoAlt}"/>
                {LinkCloseTag}

                {block:Caption}
                    <figcaption class="caption">
                        {Caption}
                    </figcaption>
                {/block:Caption}

                </figure>


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Panorama}


            {block:Video}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <figure {block:Caption} class="with-caption" {/block:Caption} >

                <div class="video-player">
                    {Video-700}
                </div>

                {block:Caption}
                    <figcaption class="caption">
                        {Caption}
                    </figcaption>
                {/block:Caption}

                </figure>


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Video}


            {block:Chat}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                {block:Title}
                    <h2>
                        {Title}
                    </h2>
                {/block:Title}


                <ul class="conversation">

                    {block:Lines}

                        <li class="line {Alt}">

                            {block:Label}
                                <span class="person">
                                    {Label}
                                </span>
                            {/block:Label}

                            <span class="person-said">
                                {Line}
                            </span>

                        </li>

                    {/block:Lines}

                </ul>


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Chat}


            {block:Answer}
        <article class="post posts {select:Change Layout} {PostType} {TagsAsClasses}">

                <section class="question">
                    <img src="{AskerPortraitURL-48}">
                    <div class="asker">
                        {lang:Asker asked}:
                    </div>
                    <div class="asker-question">
                        {Question}
                    </div>
                </section>

                {block:Answerer}
                    <section class="answerer">
                        <img src="{AnswererPortraitURL-48}">
                        <p>
                            {lang:Answer} {Answerer}:
                        </p>
                        <div class="answerer-answer">
                            {Answer}
                        </div>
                    </section>
                {/block:Answerer}

                <div class="replies">
                    {Replies}
                </div>


                {LikeButton color="grey"}


                {ReblogButton color="grey"}


                {block:IndexPage}

                    <p>
                        <a href="{Permalink}" class="permalink">
                            {lang:Permalink}
                        </a>
                    </p>

                {/block:IndexPage}

        </article>
            {/block:Answer}

        </article>
    {/block:Posts}




    <!-- Main Pagination -->
    {block:Pagination}

        <div class="pagination">

            {block:PreviousPage}
                <a class="prev" href="{PreviousPage}">
                    {lang:Previous}
                </a>
            {/block:PreviousPage}


            {block:JumpPagination length="5"}

                {block:CurrentPage}
                    <span class="current-page">
                        {PageNumber}
                    </span>
                {/block:CurrentPage}

                {block:JumpPage}
                    <a class="jump-page" href="{URL}">
                        {PageNumber}
                    </a>
                {/block:JumpPage}

            {/block:JumpPagination}


            {block:NextPage}
                <a class="next" href="{NextPage}">
                    {lang:Next}
                </a>
            {/block:NextPage}

        </div>

    {/block:Pagination}




    <!-- Pagination -->
    {block:PermalinkPagination}

        <div class="pagination">

            {block:PreviousPost}
                <a class="prev" href="{PreviousPost}">
                    {lang:Previous post}
                </a>
            {/block:PreviousPost}


            {block:NextPost}
                <a class="next" href="{NextPost}">
                    {lang:Next post}
                </a>
            {/block:NextPost}

        </div>

    {/block:PermalinkPagination}

</div>

<footer class="footer copyrighting">
    <p>
        <small>
            {block:ShowTitle}{Title} {/block:ShowTitle}&copy; {CopyrightYears}
        </small>
    </p>
</footer>

</body>
</html>