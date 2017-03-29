<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{Title}{block:PostSummary} &mdash; {PostSummary}{/block:PostSummary}</title>
    {block:Description}<meta name="description" content="{MetaDescription}">{/block:Description}

    <link rel="apple-touch-icon" href="{PortraitURL-128}">
    <link rel="shortcut icon" href="{Favicon}">
    <link rel="canonical" href="{block:IndexPage}{BlogURL}{/block:IndexPage}{block:PermalinkPage}{Permalink}{/block:PermalinkPage}">
    <link rel="alternate" type="application/rss+xml" href="{RSS}">

    {block:Hidden}
    <!--
      Tumblr related theme options should live the 'Hidden' block. The meta tags will not be rendered by the browser but still read by Tumblr.
      https://www.tumblr.com/docs/en/custom_themes#theme-options
     -->

    <meta name="image:Background Image" content="" />
    <meta name="image:Logo" content="" />

    <meta name="if:Use Caption" content="" />


    <meta name="if:Hide Caption Only" content="" />
    <meta name="if:Use Oblique Body Highlight Paragraph" content="" />

    <meta name="if:Show first image of Photoset" content="" />
    <meta name="if:Enable Social Share on Lightbox" content="" />
    <meta name="if:Hide Permalink Text Info" content="" />
    <meta name="if:Disable Image Lightbox" content="" />

    <meta name="if:Disable Occupation Border" content="" />
    <meta name="if:Capitalize Title" content="" />
    <meta name="if:Bold Title" content="" />
    <meta name="if:Italic Title" content="" />
    <meta name="if:Bold Occupation Text" content="" />
    <meta name="if:Italic Occupation Text" content="" />
    <meta name="if:Disable Search Button" content="" />
    <meta name="if:Italic Hidden Menu Links" content="" />

    <meta name="color:Post Background Color" content="#ffffff" />
    <meta name="color:Post Text Color" content="#222222" />
    <meta name="color:Post Title Color" content="#222222" />
    <meta name="color:Permalink Post Info" content="#222222" />
    <meta name="color:Link Color" content="#3e3e3e" />

    <meta name="color:Copyright Text" content="#222222" />
    <meta name="color:Copyright Icons" content="#aeaeae" />
    <meta name="color:Copyright Background" content="#ffffff" />

    <meta name="color:Custom Page Background" content="#ffffff" />
    <meta name="color:Custom Page Text" content="#222222" />
    <meta name="color:Custom Page Title" content="#222222" />

    <meta name="color:Header Title Color" content="#222222" />
    <meta name="color:Header Desscription Color" content="#222222" />
    <meta name="color:Header Occupation Texts Color" content="#222222" />
    <meta name="color:Header Occupation Border Color" content="#efefef" />
    <meta name="color:Header Occupation Hover Texts Color" content="#222222" />
    <meta name="color:Header Occupation Hover Border Color" content="#efefef" />
    <meta name="color:Header Search Menu Icon Color" content="#222222" />
    <meta name="color:Header Search Menu Background Color" content="#ffffff" />
    <meta name="color:Header Search Menu Border Color" content="#efefef" />


    <meta name="color:Hidden Menu Bacakground Color" content="#ffffff" />
    <meta name="color:Hidden Menu Links Color" content="#222222" />
    <meta name="color:Pagination Navigator Color" content="#222222" />



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


    <meta name="font:Custom Page Title" content="Bookmania" />
    <meta name="font:Custom Page Content" content="Arial" />
    <meta name="font:Body Font" content="Arial" />
    <meta name="font:Body Highlight Paragraph Font" content="Arial" />
    <meta name="font:Post Title Font" content="Bookmania" />

    <meta name="font:Header Title Font" content="Noto Serif" />
    <meta name="font:Header Description Font" content="Baskervile" />
    <meta name="font:Header Occupation Font" content="Baskervile" />
    <meta name="font:Hidden Menu Link Font" content="Baskervile" />

    <meta name="select:Post Height" content="auto" title="normal">
    <meta name="select:Post Height" content="200px" title="200px">
    <meta name="select:Post Height" content="250px" title="250px">
    <meta name="select:Post Height" content="300px" title="300px">
    <meta name="select:Post Height" content="400px" title="400px">
    <meta name="select:Post Height" content="500px" title="500px">
    <meta name="select:Post Height" content="600px" title="600px">
    <meta name="select:Post Height" content="700px" title="700px">


    <meta name="select:Change Layout" content="onecolumn" title="One Column 800px">
    <meta name="select:Change Layout" content="fourpx" title="400px">
    <meta name="select:Change Layout" content="two-fourpx" title="Two Columns 400px">
    <meta name="select:Change Layout" content="three-fourpx" title="Three Columns 400px">
    <meta name="select:Change Layout" content="four-fourpx" title="Four Columns 400px">
    <meta name="select:Change Layout" content="five-fourpx" title="Five Columns 400px">

    <meta name="select:Change Layout" content="twopx" title="250px">

    <meta name="select:Change Layout" content="two-twopx" title="Two Columns 250px">

    <meta name="select:Change Layout" content="three-twopx" title="Three Columns 250px">
    <meta name="select:Change Layout" content="four-twopx" title="Four Columns 250px">
    <meta name="select:Change Layout" content="five-twopx" title="Five Columns 250px">
    <meta name="select:Change Layout" content="six-twopx" title="Six Columns 250px">
    <meta name="select:Change Layout" content="seven-twopx" title="Seven Columns 250px">


    <meta name="select:Change Layout" content="threepx" title="300px">
    <meta name="select:Change Layout" content="two-threepx" title="Two Columns 300px">

    <meta name="select:Change Layout" content="three-threepx" title="Three Columns 300px">

    <meta name="select:Change Layout" content="four-threepx" title="Four Columns 300px">

    <meta name="select:Change Layout" content="five-threepx" title="Five Columns 300px">

    <meta name="select:Change Layout" content="fivepx" title="500px">

    <meta name="select:Change Layout" content="two-fivepx" title="Two Columns 500px">
    <meta name="select:Change Layout" content="three-fivepx" title="Three Columns 500px">


    <meta name="select:Change Layout" content="sixpx" title="600px">
    <meta name="select:Change Layout" content="two-sixpx" title="Two Columns 600px">
    <meta name="select:Change Layout" content="three-sixpx" title="Three Columns 600px">


    <meta name="select:Change Layout" content="sevenpx" title="700px">

    <meta name="select:Change Layout" content="two-sevenpx" title="Two Columns 700px">

    <meta name="select:Change Layout" content="onecolumn500px" title="One Column 500px">
    <meta name="select:Change Layout" content="onecolumn400px" title="One Column 400px">
    <meta name="select:Change Layout" content="twocolumns" title="Two Columns">    <meta name="select:Change Layout" content="threecolumns" title="Three Columns">
    <meta name="select:Change Layout" content="fourcolumns" title="Four Columns">
    <meta name="select:Change Layout" content="fivecolumns" title="Five Columns">


    <meta name='text:Disqus Shortname' content=''>
    <meta name='text:Custom Javascript 1' content=''>
    <meta name='text:Custom Javascript 2' content=''>

    <meta name="text:Website 1 URL" content="" />
    <meta name="text:Website 2 URL" content="" />

    <meta name="text:Facebook URL" content="" />
    <meta name="text:Twitter URL" content="" />
    <meta name="text:Pinterest URL" content="" />
    <meta name="text:Instagram Username" content="" />
    <meta name="text:Shop URL" content="" />
    <meta name="text:SoundCloud URL" content="" />
    <!-- New Update -->
    <meta name="text:Yelp URL" content="" />
    <meta name="text:Apple App URL" content="" />
    <meta name="text:Android App URL" content="" />
    <meta name="text:Google Plus URL" content="" />
    <meta name="text:Vimeo URL" content="" />
    <meta name="text:Youtube URL" content="" />
    <!-- New Update -->

    <meta name="text:Gibhub URL" content="" />
    <meta name="text:500px URL" content="" />
    <meta name="text:Medium URL" content="" />
    <meta name="text:Dribble URL" content="" />
    <meta name="text:Behence URL" content="" />
    <meta name="text:Flickr URL" content="" />
    <meta name="text:Picasa URL" content="" />
    <meta name="text:Reddit URL" content="" />
    <meta name="text:Blogger URL" content="" />
    <meta name="text:Diigo URL" content="" />
    <meta name="text:Spotify URL" content="" />
    <meta name="text:Hi5 URL" content="" />
    <meta name="text:Snapchat Username" content="" />

    <meta name="text:Custom link 1 URL" content="" />
    <meta name="text:Custom link 1 title" content="" />
    <meta name="text:Custom link 2 URL" content="" />
    <meta name="text:Custom link 2 title" content="" />
    <meta name="text:Custom link 3 URL" content="" />
    <meta name="text:Custom link 3 title" content="" />
    <meta name="text:Custom link 4 URL" content="" />
    <meta name="text:Custom link 4 title" content="" />
    <meta name="text:Custom link 5 URL" content="" />
    <meta name="text:Custom link 5 title" content="" />
    <meta name="text:Custom link 6 URL" content="" />
    <meta name="text:Custom link 6 title" content="" />
    <meta name="text:Custom link 7 URL" content="" />
    <meta name="text:Custom link 7 title" content="" />
    <meta name="text:Custom link 8 URL" content="" />
    <meta name="text:Custom link 8 title" content="" />


    <meta name="text:Occupation 1" content="Blogger" />
    <meta name="text:Occupation 2" content="Photographer" />
    <meta name="text:Occupation 3" content="Artist" />


    <meta name="text:Occupation Link 1" content="" />
    <meta name="text:Occupation Link 2" content="" />
    <meta name="text:Occupation Link 3" content="" />
    {/block:Hidden}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="all">
    <style type="text/css">
        /*Tumblr Global Appearance */
        body {background:{BackgroundColor};}
        h1 > a {color:{TitleColor};}
        a {color:{AccentColor}}
        {CustomCSS}
    </style>
</head>
<body>

<header role="banner" class="header">

    {block:ShowTitle}<h1 id="logo"><a href="{BlogURL}">{Title}</a></h1>{/block:ShowTitle}
    {block:ShowDescription}{block:Description}<div class="description">{Description}</div>{/block:Description}{/block:ShowDescription}
    {block:ShowHeaderImage}<img src="{HeaderImage}">{/block:ShowHeaderImage}
    {block:ShowAvatar}<img src="{PortraitURL-128}">{/block:ShowAvatar}

    <nav role="navigation">
        <ul>
            {block:HasPages}{block:Pages}<li><a href="{URL}">{Label}</a></li>{/block:Pages}{/block:HasPages}
            <li><a href="/archive">{lang:Archive}</a></li>
            {block:AskEnabled}<li><a href="/ask">{AskLabel}</a></li>{/block:AskEnabled}
        </ul>
    </nav>

    <form id="search" action="/search" method="get">
        <input role="textbox" type="search" placeholder="{lang:Search}" name="q" value="{SearchQuery}">
        <input role="button" type="submit" value="{lang:Search}">
    </form>

</header>

<main role="main" class="content">

    {block:SearchPage}
    <div class="result">
        <p>{lang:Found SearchResultCount results for SearchQuery 2}</p>
        {block:NoSearchResults}<p>{lang:No results for SearchQuery 2}</p>{/block:NoSearchResults}
    </div>
    {/block:SearchPage}

    {block:TagPage}<div class="result"><p>{lang:TagResultCount posts tagged Tag 3}</p></div>{/block:TagPage}

    {block:Posts}
    <article class="post {PostType} {TagsAsClasses}">
        {block:Date}
        {block:NewDayDate}<p>{DayOfWeek}, {Month} {DayOfMonth}, {Year}</p>{/block:NewDayDate}
        {block:SameDayDate}<p>{DayOfWeek}, {Month} {DayOfMonth}, {Year}</p>{/block:SameDayDate}
        {/block:Date}

        {block:Text}
        {block:Title}<h2><a href="{Permalink}">{Title}</a></h2>{/block:Title}
        {block:Body}
        <div class="body-text">
            {Body}
        </div>
        {/block:Body}
        {/block:Text}

        {block:Quote}
        <blockquote class="words {Length}">&#8220;{Quote}&#8221;</blockquote>
        {block:Source}<p class="source">&mdash; {Source}</p>{/block:Source}
        {/block:Quote}

        {block:Link}
        <h2><a href="{URL}" {Target}>{Name}</a></h2>
        {block:Description}<div class="caption">{Description}</div>{/block:Description}
        {/block:Link}

        {block:Audio}
        {block:AlbumArt}<img src="{AlbumArtURL}" alt="">{/block:AlbumArt}
        <div class="audio-player">
            {block:AudioEmbed}
            {AudioEmbed color="white"}
            {/block:AudioEmbed}
            {block:AudioPlayer}{AudioPlayerBlack}{/block:AudioPlayer}
        </div>
        {block:Caption}<div class="caption">{Caption}</div>{/block:Caption}
        {/block:Audio}

        {block:Photo}
        <figure class="{block:HighRes}high-res{/block:HighRes}{block:Caption} with-caption{/block:Caption}" data-photo-width="{PhotoWidth-HighRes}">
            {LinkOpenTag}<img src="{PhotoURL-HighRes}" alt="{PhotoAlt}" width="{PhotoWidth-HighRes}" height="{PhotoHeight-HighRes}">{LinkCloseTag}
            {block:Caption}<figcaption class="caption">{Caption}</figcaption>{/block:Caption}
        </figure>
        {/block:Photo}

        {block:Photoset}
        <figure{block:Caption} class="with-caption"{/block:Caption}>
        {block:Photos}
        <img src="{PhotoURL-HighRes}" alt="{PhotoAlt}" width="{PhotoWidth-HighRes}" height="{PhotoHeight-HighRes}">
        {block:Caption}<div class="caption">{Caption}</div>{/block:Caption}
        {/block:Photos}
        {block:Caption}<figcaption class="caption">{Caption}</figcaption>{/block:Caption}
        </figure>
        {/block:Photoset}

        {block:Panorama}
        <figure{block:Caption} class="with-caption"{/block:Caption}>
        {LinkOpenTag}<img src="{PhotoURL-Panorama}" width="{PhotoWidth-Panorama}" height="{PhotoHeight-Panorama}" alt="{PhotoAlt}" />{LinkCloseTag}
        {block:Caption}<figcaption class="caption">{Caption}</figcaption>{/block:Caption}
        </figure>
        {/block:Panorama}

        {block:Video}
        <figure{block:Caption} class="with-caption"{/block:Caption}>
        <div class="video-player">
            {Video-700}
        </div>
        {block:Caption}<figcaption class="caption">{Caption}</figcaption>{/block:Caption}
        </figure>
        {/block:Video}

        {block:Chat}
        {block:Title}<h2>{Title}</h2>{/block:Title}
        <ul class="conversation">
            {block:Lines}
            <li class="line {Alt}">
                {block:Label}<span class="person">{Label}</span>{/block:Label}
                <span class="person-said">{Line}</span>
            </li>
            {/block:Lines}
        </ul>
        {/block:Chat}

        {block:Answer}
        <section class="question">
            <img src="{AskerPortraitURL-48}">
            <div class="asker">{lang:Asker asked}:</div>
            <div class="asker-question">
                {Question}
            </div>
        </section>
        {block:Answerer}
        <section class="answerer">
            <img src="{AnswererPortraitURL-48}">
            <p>{lang:Answer} {Answerer}:</p>
            <div class="answerer-answer">
                {Answer}
            </div>
        </section>
        {/block:Answerer}
        <div class="replies">{Replies}</div>
        {/block:Answer}

        {LikeButton color="grey"}
        {ReblogButton color="grey"}

        {block:IndexPage}
        <p><a href="{Permalink}" class="permalink">{lang:Permalink}</a></p>
        {/block:IndexPage}

    </article>
    {/block:Posts}

    {block:PermalinkPagination}
    <div class="pagination">
        {block:PreviousPost}<a class="prev" href="{PreviousPost}">{lang:Previous post}</a>{/block:PreviousPost}
        {block:NextPost}<a class="next" href="{NextPost}">{lang:Next post}</a>{/block:NextPost}
    </div>
    {/block:PermalinkPagination}

    {block:Pagination}
    <div class="pagination">
        {block:PreviousPage}<a class="prev" href="{PreviousPage}">{lang:Previous}</a>{/block:PreviousPage}

        {block:JumpPagination length="5"}
        {block:CurrentPage}<span class="current-page">{PageNumber}</span>{/block:CurrentPage}
        {block:JumpPage}<a class="jump-page" href="{URL}">{PageNumber}</a>{/block:JumpPage}
        {/block:JumpPagination}

        {block:NextPage}<a class="next" href="{NextPage}">{lang:Next}</a>{/block:NextPage}
    </div>
    {/block:Pagination}
</main>
<footer class="footer">
    <p><small>{block:ShowTitle}{Title} {/block:ShowTitle}&copy; {CopyrightYears}</small></p>
</footer>
</body>
</html>