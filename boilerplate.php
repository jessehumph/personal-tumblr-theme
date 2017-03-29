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