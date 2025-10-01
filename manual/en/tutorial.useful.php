<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Something Useful - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/tutorial.useful.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/tutorial.useful.php">
 <link rel="alternate" href="https://www.php.net/manual/en/tutorial.useful.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/tutorial.php">
 <link rel="prev" href="https://www.php.net/manual/en/tutorial.firstpage.php">
 <link rel="next" href="https://www.php.net/manual/en/tutorial.forms.php">

 <link rel="alternate" href="https://www.php.net/manual/en/tutorial.useful.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/tutorial.useful.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/tutorial.useful.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/tutorial.useful.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/tutorial.useful.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/tutorial.useful.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/tutorial.useful.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/tutorial.useful.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/tutorial.useful.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/tutorial.useful.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/tutorial.useful.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Something Useful" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Something Useful - Manual" />
<meta name="twitter:description" content="Something Useful" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Something Useful - Manual" />
<meta itemprop="description" content="Something Useful" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Something Useful" />

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
        <a href="tutorial.forms.php">
          Dealing with Forms &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="tutorial.firstpage.php">
          &laquo; Your first PHP-enabled page        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='getting-started.php'>Getting Started</a></li>      <li><a href='tutorial.php'>A simple tutorial</a></li>      </ul>
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
            <option value='en/tutorial.useful.php' selected="selected">English</option>
            <option value='de/tutorial.useful.php'>German</option>
            <option value='es/tutorial.useful.php'>Spanish</option>
            <option value='fr/tutorial.useful.php'>French</option>
            <option value='it/tutorial.useful.php'>Italian</option>
            <option value='ja/tutorial.useful.php'>Japanese</option>
            <option value='pt_BR/tutorial.useful.php'>Brazilian Portuguese</option>
            <option value='ru/tutorial.useful.php'>Russian</option>
            <option value='tr/tutorial.useful.php'>Turkish</option>
            <option value='uk/tutorial.useful.php'>Ukrainian</option>
            <option value='zh/tutorial.useful.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="tutorial.useful" class="section">
   <div class="info"><h1 class="title">Something Useful</h1></div>
   <p class="para">
    Let us do something more useful now. We are going to check
    what sort of browser the visitor is using.
    For that, we check the user agent string the browser
    sends as part of the HTTP request. This information is stored in a <a href="language.variables.php" class="link">variable</a>. Variables always start
    with a dollar-sign in PHP. The variable we are interested in right now
    is <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['HTTP_USER_AGENT']</a></var>.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> is a
     special reserved PHP variable that contains all web server information.
     It is known as a superglobal.  See the related manual page on
     <a href="language.variables.superglobals.php" class="link">superglobals</a>
     for more information.
    </p>
   </p></blockquote>
   <p class="para">
    To display this variable, you can simply do:
   </p>
   <p class="para">
    <div class="example" id="example-4">
     <div class="info"><p><strong>Example #1 Printing a variable (Array element)</strong></p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     A sample output of this script may be:
    </p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
Mozilla/5.0 (Linux) Firefox/112.0
</pre></div>
    </div>
   </div>
   </p>
   <p class="para">
    There are many <a href="language.types.php" class="link">types</a> of
    variables available in PHP.  In the above example we printed an element
    from an <a href="language.types.array.php" class="link">Array</a> variable.
    Arrays can be very useful.
   </p>
   <p class="para">
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> is just one variable that PHP automatically
    makes available to you. A list can be seen in the
    <a href="reserved.variables.php" class="link">Reserved Variables</a> section
    of the manual or you can get a complete list of them by looking at
    the output of the <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function used in the
    example in the previous section.
   </p>
   <p class="para">
    You can put multiple PHP statements inside a PHP tag and create
    little blocks of code that do more than just a single echo.
    For example, if you want to check for Firefox you
    can do this:
   </p>
   <p class="para">
    <div class="example" id="example-5">
     <div class="info"><p><strong>Example #2 Example using <a href="language.control-structures.php" class="link">control
     structures</a> and <a href="language.functions.php" class="link">functions</a></strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">str_contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">], </span><span style="color: #DD0000">'Firefox'</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'You are using Firefox.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>
      A sample output of this script may be:
     </p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
You are using Firefox.
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    Here we introduce a couple of new concepts. We have an
    <a href="control-structures.if.php" class="link">if</a> statement.
    If you are familiar with the basic syntax used by the C
    language, this should look logical to you. Otherwise, you
    should probably pick up an introductory PHP book and read the first
    couple of chapters, or read the <a href="langref.php" class="link">Language
    Reference</a> part of the manual.
   </p>
   <p class="para">
    The second concept we introduced was the <span class="function"><a href="function.str-contains.php" class="function">str_contains()</a></span>
    function call. <span class="function"><a href="function.str-contains.php" class="function">str_contains()</a></span> is a function built into
    PHP which determines if a given string contains another string. In this case we are
    looking for <code class="literal">&#039;Firefox&#039;</code> (so-called needle) inside
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['HTTP_USER_AGENT']</a></var> (so-called haystack).  If
    the needle is found inside the haystack, the function returns true. Otherwise, it
    returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. If it returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the <a href="control-structures.if.php" class="link">if</a> expression evaluates to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
    and the code within its {braces} is executed. Otherwise, the code is not
    run. Feel free to create similar examples,
    with <a href="control-structures.if.php" class="link">if</a>,
    <a href="control-structures.else.php" class="link">else</a>, and other
    functions such as <span class="function"><a href="function.strtoupper.php" class="function">strtoupper()</a></span> and
    <span class="function"><a href="function.strlen.php" class="function">strlen()</a></span>.  Each related manual page contains examples
    too.  If you are unsure how to use functions, you will want to read both
    the manual page on <a href="about.prototypes.php" class="link">how to read a
    function definition</a> and the section about
    <a href="language.functions.php" class="link">PHP functions</a>.
   </p>
   <p class="para">
    We can take this a step further and show how you can jump in and out
    of PHP mode even in the middle of a PHP block:
   </p>
   <p class="para">
    <div class="example" id="example-6">
     <div class="info"><p><strong>Example #3 Mixing both HTML and PHP modes</strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">str_contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">], </span><span style="color: #DD0000">'Firefox'</span><span style="color: #007700">)) {<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;h3&gt;str_contains() returned true&lt;/h3&gt;<br />&lt;p&gt;You are using Firefox&lt;/p&gt;<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">} else {<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;h3&gt;str_contains() returned false&lt;/h3&gt;<br />&lt;p&gt;You are not using Firefox&lt;/p&gt;<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>
      A sample output of this script may be:
     </p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
&lt;h3&gt;str_contains() returned true&lt;/h3&gt;
&lt;p&gt;You are using Firefox&lt;/p&gt;
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    Instead of using a PHP echo statement to output something, we jumped out
    of PHP mode and just sent straight HTML. The important and powerful point
    to note here is that the logical flow of the script remains intact. Only
    one of the HTML blocks will end up getting sent to the viewer depending on
    the result of <span class="function"><a href="function.str-contains.php" class="function">str_contains()</a></span>.  In other words, it depends on
    whether the string <code class="literal">Firefox</code> was found or not.
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/chapters/tutorial.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftutorial.useful%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=tutorial.useful&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tutorial.useful.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115072">  <div class="votes">
    <div id="Vu115072">
    <a href="/manual/vote-note.php?id=115072&amp;page=tutorial.useful&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115072">
    <a href="/manual/vote-note.php?id=115072&amp;page=tutorial.useful&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115072" title="53% like this...">
    136
    </div>
  </div>
  <a href="#115072" class="name">
  <strong class="user"><em>Declan Kelly</em></strong></a><a class="genanchor" href="#115072"> &para;</a><div class="date" title="2014-05-22 12:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115072">
<div class="phpcode"><code><span class="html">Please note that Internet Explorer 11 no longer contains MSIE in its user agent string, for example on Windows 8 with IE11 I get the following:<br /><br />Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko<br /><br />So if you want to include a test for IE11, the code above changes to: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">], </span><span class="string">'MSIE'</span><span class="keyword">) !== </span><span class="default">FALSE </span><span class="keyword">||<br />    </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">], </span><span class="string">'Trident'</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />    echo </span><span class="string">'You are using Internet Explorer.&lt;br /&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=tutorial.useful&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tutorial.useful.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="tutorial.php">A simple tutorial</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="tutorial.requirements.php" title="What do I need?">What do I need?</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.firstpage.php" title="Your first PHP-&#8203;enabled page">Your first PHP-&#8203;enabled page</a>
                        </li>
                                                <li class="current">
                            <a href="tutorial.useful.php" title="Something Useful">Something Useful</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.forms.php" title="Dealing with Forms">Dealing with Forms</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.whatsnext.php" title="What's next?">What's next?</a>
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
