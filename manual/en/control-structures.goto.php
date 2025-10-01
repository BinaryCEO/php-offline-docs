<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: goto - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.goto.php">
 <link rel="shorturl" href="https://www.php.net/goto">
 <link rel="alternate" href="https://www.php.net/goto" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.include-once.php">
 <link rel="next" href="https://www.php.net/manual/en/language.functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.goto.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.goto.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.goto.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.goto.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.goto.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.goto.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.goto.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.goto.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.goto.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.goto.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.goto.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="goto" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: goto - Manual" />
<meta name="twitter:description" content="goto" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: goto - Manual" />
<meta itemprop="description" content="goto" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="goto" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="language.functions.php">
          Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.include-once.php">
          &laquo; include_once        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/control-structures.goto.php' selected="selected">English</option>
            <option value='de/control-structures.goto.php'>German</option>
            <option value='es/control-structures.goto.php'>Spanish</option>
            <option value='fr/control-structures.goto.php'>French</option>
            <option value='it/control-structures.goto.php'>Italian</option>
            <option value='ja/control-structures.goto.php'>Japanese</option>
            <option value='pt_BR/control-structures.goto.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.goto.php'>Russian</option>
            <option value='tr/control-structures.goto.php'>Turkish</option>
            <option value='uk/control-structures.goto.php'>Ukrainian</option>
            <option value='zh/control-structures.goto.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.goto" class="sect1">
 <h2 class="title">goto</h2>
 <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 <p class="para">
  <div class="mediaobject">
   
   <div class="imageobject">
    <img src="images/0baa1b9fae6aec55bbb73037f3016001-xkcd-goto.png" alt="What's the worse thing that could happen if you use goto?" width="740" height="201" />
   </div>
   <div class="caption">
    <p class="simpara">
     Image courtesy of <a href="http://xkcd.com/292" class="link external">&raquo;&nbsp;xkcd</a>
    </p>
   </div>
  </div>
 </p>
 <p class="para">
  The <code class="literal">goto</code> operator can be used to jump to another
  section in the program.  The target point is specified by a <em>case-sensitive</em> label
  followed by a colon, and the instruction is given as
  <code class="literal">goto</code> followed by the desired target label.  This
  is not a full unrestricted <code class="literal">goto</code>.  The target
  label must be within the same file and context, meaning that you cannot jump
  out of a function or method, nor can you jump into one.  You also
  cannot jump into any sort of loop or switch structure.  You may jump
  out of these, and a common use is to use a <code class="literal">goto</code>
  in place of a multi-level <code class="literal">break</code>.
 </p>
 <p class="para">
  <div class="example" id="example-206">
   <p><strong>Example #1 <code class="literal">goto</code> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">goto </span><span style="color: #0000BB">a</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Foo'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">a</span><span style="color: #007700">:<br />echo </span><span style="color: #DD0000">'Bar'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Bar
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  <div class="example" id="example-207">
   <p><strong>Example #2 <code class="literal">goto</code> loop example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$j </span><span style="color: #007700">= </span><span style="color: #0000BB">50</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">100</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />    while (</span><span style="color: #0000BB">$j</span><span style="color: #007700">--) {<br />        if (</span><span style="color: #0000BB">$j </span><span style="color: #007700">== </span><span style="color: #0000BB">17</span><span style="color: #007700">) {<br />            goto </span><span style="color: #0000BB">end</span><span style="color: #007700">;<br />        }<br />    }<br />}<br />echo </span><span style="color: #DD0000">"i = </span><span style="color: #0000BB">$i</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">end</span><span style="color: #007700">:<br />echo </span><span style="color: #DD0000">'j hit 17'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
j hit 17
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  <div class="example" id="example-208">
   <p><strong>Example #3 This will not work</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">goto </span><span style="color: #0000BB">loop</span><span style="color: #007700">;<br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$j </span><span style="color: #007700">= </span><span style="color: #0000BB">50</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">100</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />    while (</span><span style="color: #0000BB">$j</span><span style="color: #007700">--) {<br />        </span><span style="color: #0000BB">loop</span><span style="color: #007700">:<br />    }<br />}<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$i</span><span style="color: #DD0000"> = </span><span style="color: #0000BB">$i</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: &#039;goto&#039; into loop or switch statement is disallowed in
script on line 2
</pre></div>
   </div>
  </div>
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/goto.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.goto%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.goto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.goto.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125656">  <div class="votes">
    <div id="Vu125656">
    <a href="/manual/vote-note.php?id=125656&amp;page=control-structures.goto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125656">
    <a href="/manual/vote-note.php?id=125656&amp;page=control-structures.goto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125656" title="69% like this...">
    61
    </div>
  </div>
  <a href="#125656" class="name">
  <strong class="user"><em>Lollo</em></strong></a><a class="genanchor" href="#125656"> &para;</a><div class="date" title="2021-01-05 02:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125656">
<div class="phpcode"><code><span class="html">You should mention the label can't be a variable</span></code></div>
  </div>
 </div>
  <div class="note" id="126824">  <div class="votes">
    <div id="Vu126824">
    <a href="/manual/vote-note.php?id=126824&amp;page=control-structures.goto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126824">
    <a href="/manual/vote-note.php?id=126824&amp;page=control-structures.goto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126824" title="70% like this...">
    36
    </div>
  </div>
  <a href="#126824" class="name">
  <strong class="user"><em>devbyjesus at example dot com</em></strong></a><a class="genanchor" href="#126824"> &para;</a><div class="date" title="2022-02-03 06:58"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126824">
<div class="phpcode"><code><span class="html">the problem of goto is that it is a good feature but in a large codebase it reduces the readability of the code . that's all . i try to not use it to think about the person who is going to read after me .</span></code></div>
  </div>
 </div>
  <div class="note" id="129662">  <div class="votes">
    <div id="Vu129662">
    <a href="/manual/vote-note.php?id=129662&amp;page=control-structures.goto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129662">
    <a href="/manual/vote-note.php?id=129662&amp;page=control-structures.goto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129662" title="68% like this...">
    12
    </div>
  </div>
  <a href="#129662" class="name">
  <strong class="user"><em>georgy dot moshkin at techsponsor dot io</em></strong></a><a class="genanchor" href="#129662"> &para;</a><div class="date" title="2024-07-22 12:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129662">
<div class="phpcode"><code><span class="html">You can use goto to hide large HTML blocks without using echo():<br /><br />&lt;html&gt;&lt;body&gt;<br /><br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$hide_form_and_script</span><span class="keyword">) { goto </span><span class="default">label_1</span><span class="keyword">;} </span><span class="default">?&gt;<br /></span><br />&lt;form action="" method="post"&gt;<br />&lt;!-- some HTML here --&gt;<br />&lt;/form&gt;<br />&lt;script&gt;<br />let a='test'; // no need to escape nested quotes as with echo()<br />// some JavaScript here<br />&lt;/script&gt;<br /><br /><span class="default">&lt;?php label_1</span><span class="keyword">: </span><span class="default">?&gt;<br /></span><br />&lt;/body&gt;&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="127678">  <div class="votes">
    <div id="Vu127678">
    <a href="/manual/vote-note.php?id=127678&amp;page=control-structures.goto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127678">
    <a href="/manual/vote-note.php?id=127678&amp;page=control-structures.goto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127678" title="55% like this...">
    7
    </div>
  </div>
  <a href="#127678" class="name">
  <strong class="user"><em>BPI</em></strong></a><a class="genanchor" href="#127678"> &para;</a><div class="date" title="2022-09-28 11:37"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127678">
<div class="phpcode"><code><span class="html">You can jump inside the same switch. This can be usefull to jump to default<br /><span class="default">&lt;?php<br />$x</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br />switch(</span><span class="default">$x</span><span class="keyword">){<br />    case </span><span class="default">0</span><span class="keyword">:<br />    case </span><span class="default">3</span><span class="keyword">:<br />        print(</span><span class="default">$x</span><span class="keyword">);    <br />        if(</span><span class="default">$x</span><span class="keyword">)<br />            goto </span><span class="default">def</span><span class="keyword">;<br />    case </span><span class="default">5</span><span class="keyword">:<br />        </span><span class="default">$x</span><span class="keyword">=</span><span class="default">6</span><span class="keyword">;<br />    default:<br />        </span><span class="default">def</span><span class="keyword">:<br />        print(</span><span class="default">$x</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130449">  <div class="votes">
    <div id="Vu130449">
    <a href="/manual/vote-note.php?id=130449&amp;page=control-structures.goto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130449">
    <a href="/manual/vote-note.php?id=130449&amp;page=control-structures.goto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130449" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130449" class="name">
  <strong class="user"><em>kgyt at kgyt dot eu</em></strong></a><a class="genanchor" href="#130449"> &para;</a><div class="date" title="2025-08-16 01:04"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130449">
<div class="phpcode"><code><span class="html">In example #2 use do-while instead:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">do {<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$j </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        while (</span><span class="default">$j</span><span class="keyword">--) {<br />            if (</span><span class="default">$j </span><span class="keyword">== </span><span class="default">17</span><span class="keyword">) {<br />                break </span><span class="default">3</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    echo </span><span class="string">"i = </span><span class="default">$i</span><span class="string">"</span><span class="keyword">;<br />} while(</span><span class="default">false</span><span class="keyword">);<br />echo </span><span class="string">'j hit 17'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.goto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.goto.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.goto.php" title="goto">goto</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
