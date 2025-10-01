<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Variable functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/functions.variable-functions.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/functions.variable-functions.php">
 <link rel="alternate" href="https://www.php.net/manual/en/functions.variable-functions.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.functions.php">
 <link rel="prev" href="https://www.php.net/manual/en/functions.returning-values.php">
 <link rel="next" href="https://www.php.net/manual/en/functions.internal.php">

 <link rel="alternate" href="https://www.php.net/manual/en/functions.variable-functions.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/functions.variable-functions.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/functions.variable-functions.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/functions.variable-functions.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/functions.variable-functions.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/functions.variable-functions.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/functions.variable-functions.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/functions.variable-functions.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/functions.variable-functions.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/functions.variable-functions.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/functions.variable-functions.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Variable functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Variable functions - Manual" />
<meta name="twitter:description" content="Variable functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Variable functions - Manual" />
<meta itemprop="description" content="Variable functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Variable functions" />

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
        <a href="functions.internal.php">
          Internal (built-in) functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="functions.returning-values.php">
          &laquo; Returning values        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.functions.php'>Functions</a></li>      </ul>
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
            <option value='en/functions.variable-functions.php' selected="selected">English</option>
            <option value='de/functions.variable-functions.php'>German</option>
            <option value='es/functions.variable-functions.php'>Spanish</option>
            <option value='fr/functions.variable-functions.php'>French</option>
            <option value='it/functions.variable-functions.php'>Italian</option>
            <option value='ja/functions.variable-functions.php'>Japanese</option>
            <option value='pt_BR/functions.variable-functions.php'>Brazilian Portuguese</option>
            <option value='ru/functions.variable-functions.php'>Russian</option>
            <option value='tr/functions.variable-functions.php'>Turkish</option>
            <option value='uk/functions.variable-functions.php'>Ukrainian</option>
            <option value='zh/functions.variable-functions.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="functions.variable-functions" class="sect1">
   <h2 class="title">Variable functions</h2>

   <p class="para">
    PHP supports the concept of variable functions. This means that if
    a variable name has parentheses appended to it, PHP will look for
    a function with the same name as whatever the variable evaluates
    to, and will attempt to execute it. Among other things, this can
    be used to implement callbacks, function tables, and so forth.
   </p>
   <p class="para">
    Variable functions won&#039;t work with language constructs such 
    as <span class="function"><a href="function.echo.php" class="function">echo</a></span>, <span class="function"><a href="function.print.php" class="function">print</a></span>,
    <span class="function"><a href="function.unset.php" class="function">unset()</a></span>, <span class="function"><a href="function.isset.php" class="function">isset()</a></span>,
    <span class="function"><a href="function.empty.php" class="function">empty()</a></span>, <span class="function"><a href="function.include.php" class="function">include</a></span>,
    <span class="function"><a href="function.require.php" class="function">require</a></span> and the like. Utilize wrapper functions to make
    use of any of these constructs as variable functions.
   </p>
   <p class="para">
    <div class="example" id="example-234">
     <p><strong>Example #1 Variable function example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">() {<br />    echo </span><span style="color: #DD0000">"In foo()&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">bar</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #DD0000">"In bar(); argument was '</span><span style="color: #0000BB">$arg</span><span style="color: #DD0000">'.&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// This is a wrapper function around echo<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">echoit</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #0000BB">$string</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">();        </span><span style="color: #FF8000">// This calls foo()<br /><br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);  </span><span style="color: #FF8000">// This calls bar()<br /><br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #DD0000">'echoit'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);  </span><span style="color: #FF8000">// This calls echoit()<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Object methods can also be called with the variable functions syntax.
    <div class="example" id="example-235">
     <p><strong>Example #2 Variable method example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">Variable</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'Bar'</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">(); </span><span style="color: #FF8000">// This calls the Bar() method<br />    </span><span style="color: #007700">}<br />    <br />    function </span><span style="color: #0000BB">Bar</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"This is Bar"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$funcname </span><span style="color: #007700">= </span><span style="color: #DD0000">"Variable"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$funcname</span><span style="color: #007700">();  </span><span style="color: #FF8000">// This calls $foo-&gt;Variable()<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    When calling static methods, the function call is stronger than the static property operator:
    <div class="example" id="example-236">
     <p><strong>Example #3 Variable method example with static properties</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    static </span><span style="color: #0000BB">$variable </span><span style="color: #007700">= </span><span style="color: #DD0000">'static property'</span><span style="color: #007700">;<br />    static function </span><span style="color: #0000BB">Variable</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">'Method Variable called'</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">$variable</span><span style="color: #007700">; </span><span style="color: #FF8000">// This prints 'static property'. It does need a $variable in this scope.<br /></span><span style="color: #0000BB">$variable </span><span style="color: #007700">= </span><span style="color: #DD0000">"Variable"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">Foo</span><span style="color: #007700">::</span><span style="color: #0000BB">$variable</span><span style="color: #007700">();  </span><span style="color: #FF8000">// This calls $foo-&gt;Variable() reading $variable in this scope.<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    <div class="example" id="example-237">
     <p><strong>Example #4 Complex callables</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    static function </span><span style="color: #0000BB">bar</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"bar\n"</span><span style="color: #007700">;<br />    }<br />    function </span><span style="color: #0000BB">baz</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"baz\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"Foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints "bar"<br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= array(new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">, </span><span style="color: #DD0000">"baz"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints "baz"<br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #DD0000">"Foo::bar"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">(); </span><span style="color: #FF8000">// prints "bar"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <div class="sect2">
    <h3 class="title">See Also</h3>
    <p class="para">
     <ul class="simplelist">
      <li><span class="function"><a href="function.is-callable.php" class="function">is_callable()</a></span></li>
      <li><span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span></li>
      <li><span class="function"><a href="function.function-exists.php" class="function">function_exists()</a></span></li>
      <li><a href="language.variables.variable.php" class="link">variable variables</a></li>
     </ul>
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/functions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunctions.variable-functions%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=functions.variable-functions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.variable-functions.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123706">  <div class="votes">
    <div id="Vu123706">
    <a href="/manual/vote-note.php?id=123706&amp;page=functions.variable-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123706">
    <a href="/manual/vote-note.php?id=123706&amp;page=functions.variable-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123706" title="66% like this...">
    24
    </div>
  </div>
  <a href="#123706" class="name">
  <strong class="user"><em>niemans at pbsolo dot nl</em></strong></a><a class="genanchor" href="#123706"> &para;</a><div class="date" title="2019-03-19 11:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123706">
<div class="phpcode"><code><span class="html">While the documentation suggests that the use of a constant is similar to the use of a variable, there is an exception regarding variable functions. You cannot use a constant as the function name to call a variable function.<br /><br />const DEBUGME ='func';<br />function func($s) { echo $s. "\n"; }<br /><br />DEBUGME('abc');  // results in a syntax error<br /><br />$call = DEBUGME;<br />$call('abc');          // does the job<br /><br />But you can use a constant as an argument to a function. Here's a simple workaround when you need to call a variable constant function: <br /><br />function dynamic($what, $with)<br />   {<br />     $what($with);<br />   }<br />dynamic(DEBUGME, 'abc'); <br /><br />This makes sense to me to hide API's and/or long (complicated) static calls.<br />Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="104641">  <div class="votes">
    <div id="Vu104641">
    <a href="/manual/vote-note.php?id=104641&amp;page=functions.variable-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104641">
    <a href="/manual/vote-note.php?id=104641&amp;page=functions.variable-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104641" title="50% like this...">
    4
    </div>
  </div>
  <a href="#104641" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#104641"> &para;</a><div class="date" title="2011-06-27 11:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104641">
<div class="phpcode"><code><span class="html">$ wget <a href="http://www.php.net/get/php_manual_en.tar.gz/from/a/mirror" rel="nofollow" target="_blank">http://www.php.net/get/php_manual_en.tar.gz/from/a/mirror</a><br />$ grep -l "\$\.\.\." php-chunked-xhtml/function.*.html<br /><br />List of functions that accept variable arguments.<br /><span class="default">&lt;?php<br />array_diff_assoc</span><span class="keyword">()<br /></span><span class="default">array_diff_key</span><span class="keyword">()<br /></span><span class="default">array_diff_uassoc</span><span class="keyword">()<br />array()<br /></span><span class="default">array_intersect_ukey</span><span class="keyword">()<br /></span><span class="default">array_map</span><span class="keyword">()<br /></span><span class="default">array_merge</span><span class="keyword">()<br /></span><span class="default">array_merge_recursive</span><span class="keyword">()<br /></span><span class="default">array_multisort</span><span class="keyword">()<br /></span><span class="default">array_push</span><span class="keyword">()<br /></span><span class="default">array_replace</span><span class="keyword">()<br /></span><span class="default">array_replace_recursive</span><span class="keyword">()<br /></span><span class="default">array_unshift</span><span class="keyword">()<br /></span><span class="default">call_user_func</span><span class="keyword">()<br /></span><span class="default">call_user_method</span><span class="keyword">()<br /></span><span class="default">compact</span><span class="keyword">()<br /></span><span class="default">dba_open</span><span class="keyword">()<br /></span><span class="default">dba_popen</span><span class="keyword">()<br />echo()<br /></span><span class="default">forward_static_call</span><span class="keyword">()<br /></span><span class="default">fprintf</span><span class="keyword">()<br /></span><span class="default">fscanf</span><span class="keyword">()<br /></span><span class="default">httprequestpool_construct</span><span class="keyword">()<br /></span><span class="default">ibase_execute</span><span class="keyword">()<br /></span><span class="default">ibase_set_event_handler</span><span class="keyword">()<br /></span><span class="default">ibase_wait_event</span><span class="keyword">()<br />isset()<br />list()<br /></span><span class="default">maxdb_stmt_bind_param</span><span class="keyword">()<br /></span><span class="default">maxdb_stmt_bind_result</span><span class="keyword">()<br /></span><span class="default">mb_convert_variables</span><span class="keyword">()<br /></span><span class="default">newt_checkbox_tree_add_item</span><span class="keyword">()<br /></span><span class="default">newt_grid_h_close_stacked</span><span class="keyword">()<br /></span><span class="default">newt_grid_h_stacked</span><span class="keyword">()<br /></span><span class="default">newt_grid_v_close_stacked</span><span class="keyword">()<br /></span><span class="default">newt_grid_v_stacked</span><span class="keyword">()<br /></span><span class="default">newt_win_choice</span><span class="keyword">()<br /></span><span class="default">newt_win_entries</span><span class="keyword">()<br /></span><span class="default">newt_win_menu</span><span class="keyword">()<br /></span><span class="default">newt_win_message</span><span class="keyword">()<br /></span><span class="default">newt_win_ternary</span><span class="keyword">()<br /></span><span class="default">pack</span><span class="keyword">()<br /></span><span class="default">printf</span><span class="keyword">()<br /></span><span class="default">register_shutdown_function</span><span class="keyword">()<br /></span><span class="default">register_tick_function</span><span class="keyword">()<br /></span><span class="default">session_register</span><span class="keyword">()<br /></span><span class="default">setlocale</span><span class="keyword">()<br /></span><span class="default">sprintf</span><span class="keyword">()<br /></span><span class="default">sscanf</span><span class="keyword">()<br />unset()<br /></span><span class="default">var_dump</span><span class="keyword">()<br /></span><span class="default">w32api_deftype</span><span class="keyword">()<br /></span><span class="default">w32api_init_dtype</span><span class="keyword">()<br /></span><span class="default">w32api_invoke_function</span><span class="keyword">()<br /></span><span class="default">wddx_add_vars</span><span class="keyword">()<br /></span><span class="default">wddx_serialize_vars</span><span class="keyword">()<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125017">  <div class="votes">
    <div id="Vu125017">
    <a href="/manual/vote-note.php?id=125017&amp;page=functions.variable-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125017">
    <a href="/manual/vote-note.php?id=125017&amp;page=functions.variable-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125017" title="51% like this...">
    1
    </div>
  </div>
  <a href="#125017" class="name">
  <strong class="user"><em>rnealxp at yahoo dot com</em></strong></a><a class="genanchor" href="#125017"> &para;</a><div class="date" title="2020-05-16 01:17"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125017">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/*<br />You might have found yourself at this php variable functions page because, like me, you wanted to pass functions<br />around like objects to client objects as you can in JavaScript. The issue I ran into was although<br />I could call a function using a variable like this " $v(); "...I could not do it like this " $obj-&gt;p() " where<br />'p' is a property containing the name of the method to call. Did not want to save my property off to a variable prior<br />to making my call: " $v = $obj-&gt;p; $v(); "; even if one finds a way, the below applies...<br /><br />I credit this expanded work to this person: tatarynowicz at gmail dot com;<br />without them I would not have gotten here.<br />*/<br /></span><span class="keyword">interface </span><span class="default">iface_dynamic_members</span><span class="keyword">{<br />    </span><span class="comment">//Use of this interface enables type-hinting for objects that implement it.<br />    </span><span class="keyword">public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    public function </span><span class="default">quietly_fail</span><span class="keyword">():</span><span class="default">bool</span><span class="keyword">;<br />}<br />trait </span><span class="default">trait_has_dynamic_members</span><span class="keyword">{<br />    </span><span class="comment">//Implementing these magic methods in the form of a trait, frees the client object up<br />    //so it can still inherit from a parent-class.<br />    </span><span class="keyword">public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) {<br />        if (</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">)) {<br />            return </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        else {<br />            </span><span class="comment">//Your dynamic-membered object can declare itself as willing to ignore non-existent method calls or not.<br />            </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">quietly_fail</span><span class="keyword">()===</span><span class="default">true</span><span class="keyword">){<br />                echo </span><span class="string">'Method does not exist, but I do not mind.'</span><span class="keyword">;<br />            }else{<br />                echo </span><span class="string">'Method does not exist, I consider this a bug.'</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name </span><span class="keyword">= </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">bindTo</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">): </span><span class="default">$value</span><span class="keyword">; </span><span class="comment">//Assignment using ternary operator.<br />    </span><span class="keyword">}<br />}<br />abstract class </span><span class="default">MBR_ATTR</span><span class="keyword">{<br />    </span><span class="comment">//A class full of attributes that objects can take on; abstract since not to be instantiated (If I could make it "final" as well, I would).<br />    </span><span class="keyword">public static function </span><span class="default">is_a_walker</span><span class="keyword">(</span><span class="default">iface_dynamic_members $obj</span><span class="keyword">, ?</span><span class="default">string $walker_type</span><span class="keyword">=</span><span class="string">'normal pace'</span><span class="keyword">){<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">walker_type </span><span class="keyword">= </span><span class="default">$walker_type</span><span class="keyword">;<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">walker_walk </span><span class="keyword">= function() {<br />            return </span><span class="string">"I am walking </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">walker_type</span><span class="keyword">}</span><span class="string">."</span><span class="keyword">;<br />        };<br />    }<br />    public static function </span><span class="default">is_a_runner</span><span class="keyword">(</span><span class="default">iface_dynamic_members $obj</span><span class="keyword">, </span><span class="default">string $runner_type</span><span class="keyword">){<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">runner_type </span><span class="keyword">= </span><span class="default">$runner_type</span><span class="keyword">;<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">runner_run </span><span class="keyword">= function() {<br />            return </span><span class="string">"I am running </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runner_type</span><span class="keyword">}</span><span class="string">."</span><span class="keyword">;<br />        };<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">is_a_walker</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">); </span><span class="comment">//If can run, also can walk.<br />    </span><span class="keyword">}<br />}<br />class </span><span class="default">cls_partly_dynamic </span><span class="keyword">implements </span><span class="default">iface_dynamic_members</span><span class="keyword">{<br />    use </span><span class="default">trait_has_dynamic_members</span><span class="keyword">;<br />    public function </span><span class="default">quietly_fail</span><span class="keyword">():</span><span class="default">bool</span><span class="keyword">{<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />}<br /></span><span class="comment">// Report all errors except E_NOTICE<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">&amp; ~</span><span class="default">E_NOTICE</span><span class="keyword">); </span><span class="comment">//Enable all error-reporting except notices.<br />//----<br />//config runner object...<br /></span><span class="default">$obj_runner </span><span class="keyword">= new </span><span class="default">cls_partly_dynamic</span><span class="keyword">();<br /></span><span class="default">MBR_ATTR</span><span class="keyword">::</span><span class="default">is_a_runner</span><span class="keyword">(</span><span class="default">$obj_runner</span><span class="keyword">, </span><span class="string">'fast'</span><span class="keyword">);<br /></span><span class="default">$obj_runner</span><span class="keyword">-&gt;</span><span class="default">runner_type </span><span class="keyword">= </span><span class="string">'a bit slow'</span><span class="keyword">;<br /></span><span class="comment">//----<br />//config walker object...<br /></span><span class="default">$obj_walker </span><span class="keyword">= new </span><span class="default">cls_partly_dynamic</span><span class="keyword">();<br /></span><span class="default">MBR_ATTR</span><span class="keyword">::</span><span class="default">is_a_walker</span><span class="keyword">(</span><span class="default">$obj_walker</span><span class="keyword">, </span><span class="string">'slow'</span><span class="keyword">);<br /></span><span class="default">$obj_walker</span><span class="keyword">-&gt;</span><span class="default">walker_type </span><span class="keyword">= </span><span class="string">'super fast'</span><span class="keyword">;<br /></span><span class="comment">//----<br />//Do stuff...<br /></span><span class="keyword">echo </span><span class="string">'walker in action...' </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$obj_walker</span><span class="keyword">-&gt;</span><span class="default">walker_walk</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'runner in action...' </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$obj_runner</span><span class="keyword">-&gt;</span><span class="default">walker_walk</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$obj_runner</span><span class="keyword">-&gt;</span><span class="default">runner_run</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$obj_runner</span><span class="keyword">-&gt;</span><span class="default">xxx</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">//Try calling a non-existent method.<br />//I would agree that the above approach/technique is not always ideal, particulary due to the loss of code-completion in your<br />//IDE of choice; I would tend to use this approach for dynamic-programming in response to the user dictating processing steps via a UI.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=functions.variable-functions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.variable-functions.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.functions.php">Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="functions.user-defined.php" title="User-&#8203;defined functions">User-&#8203;defined functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arguments.php" title="Function parameters and arguments">Function parameters and arguments</a>
                        </li>
                                                <li class="">
                            <a href="functions.returning-values.php" title="Returning values">Returning values</a>
                        </li>
                                                <li class="current">
                            <a href="functions.variable-functions.php" title="Variable functions">Variable functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.internal.php" title="Internal (built-&#8203;in) functions">Internal (built-&#8203;in) functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.anonymous.php" title="Anonymous functions">Anonymous functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arrow.php" title="Arrow Functions">Arrow Functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.first_class_callable_syntax.php" title="First class callable syntax">First class callable syntax</a>
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
