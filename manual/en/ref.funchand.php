<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Function handling Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="shorturl" href="https://www.php.net/funchand">
 <link rel="alternate" href="https://www.php.net/funchand" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/intro.funchand.php">
 <link rel="next" href="https://www.php.net/manual/en/function.call-user-func.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.funchand.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.funchand.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.funchand.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.funchand.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.funchand.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.funchand.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.funchand.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.funchand.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.funchand.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.funchand.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.funchand.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Function handling Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Function handling Functions - Manual" />
<meta name="twitter:description" content="Function handling Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Function handling Functions - Manual" />
<meta itemprop="description" content="Function handling Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Function handling Functions" />

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
        <a href="function.call-user-func.php">
          call_user_func &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intro.funchand.php">
          &laquo; Introduction        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.funchand.php'>Function Handling</a></li>      </ul>
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
            <option value='en/ref.funchand.php' selected="selected">English</option>
            <option value='de/ref.funchand.php'>German</option>
            <option value='es/ref.funchand.php'>Spanish</option>
            <option value='fr/ref.funchand.php'>French</option>
            <option value='it/ref.funchand.php'>Italian</option>
            <option value='ja/ref.funchand.php'>Japanese</option>
            <option value='pt_BR/ref.funchand.php'>Brazilian Portuguese</option>
            <option value='ru/ref.funchand.php'>Russian</option>
            <option value='tr/ref.funchand.php'>Turkish</option>
            <option value='uk/ref.funchand.php'>Ukrainian</option>
            <option value='zh/ref.funchand.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.funchand" class="reference">
 <h1 class="title">Function handling Functions</h1>

 





































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.call-user-func.php">call_user_func</a> — Call the callback given by the first parameter</li><li><a href="function.call-user-func-array.php">call_user_func_array</a> — Call a callback with an array of parameters</li><li><a href="function.create-function.php">create_function</a> — Create a function dynamically by evaluating a string of code</li><li><a href="function.forward-static-call.php">forward_static_call</a> — Call a static method</li><li><a href="function.forward-static-call-array.php">forward_static_call_array</a> — Call a static method and pass the arguments as array</li><li><a href="function.func-get-arg.php">func_get_arg</a> — Return an item from the argument list</li><li><a href="function.func-get-args.php">func_get_args</a> — Returns an array comprising a function's argument list</li><li><a href="function.func-num-args.php">func_num_args</a> — Returns the number of arguments passed to the function</li><li><a href="function.function-exists.php">function_exists</a> — Return true if the given function has been defined</li><li><a href="function.get-defined-functions.php">get_defined_functions</a> — Returns an array of all defined functions</li><li><a href="function.register-shutdown-function.php">register_shutdown_function</a> — Register a function for execution on shutdown</li><li><a href="function.register-tick-function.php">register_tick_function</a> — Register a function for execution on each tick</li><li><a href="function.unregister-tick-function.php">unregister_tick_function</a> — De-register a function for execution on each tick</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.funchand%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.funchand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.funchand.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="49512">  <div class="votes">
    <div id="Vu49512">
    <a href="/manual/vote-note.php?id=49512&amp;page=ref.funchand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49512">
    <a href="/manual/vote-note.php?id=49512&amp;page=ref.funchand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49512" title="69% like this...">
    9
    </div>
  </div>
  <a href="#49512" class="name">
  <strong class="user"><em>michael dot bommarito at gmail dot com</em></strong></a><a class="genanchor" href="#49512"> &para;</a><div class="date" title="2005-01-30 11:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49512">
<div class="phpcode"><code><span class="html">I've developed an easy-to-use hack using these functions to emulate overloaded functions.  It's especially handy for constructors and/or C++ style templating.<br /><br />Here's a little example to get you going.  This does the trick for most circumstances, and if you need more intelligent parsing, it's not too hard to implement with regex or a more suitable classification scheme.<br /><br />N.B. Note the lack of whitespace between variable types in case strings.<br /><br />class Matrix {<br /><br />...<br /><br />function Matrix() {<br />  $args = func_get_args();<br />  $argmatch = implode(",", array_map('gettype', $args));<br /><br />  switch( $argmatch ) {<br />    case 'integer,integer': <br />      //initialize m x n matrix<br />      break;<br /><br />    case 'integer,integer,integer': <br />      //initialize m x n matrix with constant c<br />      break;<br /><br />    case 'integer,integer,float': <br />      //initialize m x n matrix with constant c<br />      break;    <br /><br />    case 'array':<br />      //initialize from array (2D....)<br />      break;<br /><br />    case 'array,integer':<br />      //intialize from array (1D packed with m rows)<br />      break;<br />    <br />    default:<br />      //(void) overload?<br />      //error handling?<br />      break;<br />  }<br />}<br /><br />...<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="52794">  <div class="votes">
    <div id="Vu52794">
    <a href="/manual/vote-note.php?id=52794&amp;page=ref.funchand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52794">
    <a href="/manual/vote-note.php?id=52794&amp;page=ref.funchand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52794" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#52794" class="name">
  <strong class="user"><em>Michael T. McGrew</em></strong></a><a class="genanchor" href="#52794"> &para;</a><div class="date" title="2005-05-12 09:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52794">
<div class="phpcode"><code><span class="html">An interesting way to use functions is by putting other things than PHP in them, i.e. HTML CSS. This can be useful if you will be using a format for many pages. Yes, the include function can be used also, but by defining them in functions can make them more portable in a way and keep you from having to make many include files. You could use include() when one will be putting big portions of PHP, HTML, and/or CSS and will be using them in many pages. Then you could use PHP, HTML, and/or CSS in a function when it is smaller portions of code and only want it to be on a few pages.<br /><br />I have been using include() for HTML and CSS in my early days of PHP coding, but I will be using functions for that a lot more now.<br /><br /><span class="default">&lt;?php </span><span class="keyword">function </span><span class="default">a</span><span class="keyword">() {  </span><span class="default">?&gt;<br /></span>&lt;style type="text/css"&gt;<br />table { <br />border: 1px dashed black; <br />background: #95EAFE;<br />text-align:left;<br />width:610px;<br />}<br />.linkbar {<br />font-family:sans-serif;<br />line-height:40px;<br />top:1px;<br />text-align:center;<br />width:200px;<br />height:10px;<br />}<br />&lt;/style&gt;<br /><span class="default">&lt;?php </span><span class="keyword">}  </span><span class="default">?&gt;<br /></span><br />Now doing:<br /><span class="default">&lt;?php a</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span>will return all of the CSS just as if you had wrote it on the actual page, or used include() . The same thing goes for HTML code inside a function. The possibilities are endless...</span></code></div>
  </div>
 </div>
  <div class="note" id="88528">  <div class="votes">
    <div id="Vu88528">
    <a href="/manual/vote-note.php?id=88528&amp;page=ref.funchand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88528">
    <a href="/manual/vote-note.php?id=88528&amp;page=ref.funchand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88528" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#88528" class="name">
  <strong class="user"><em>php dot spamguard at pulseforce dot com</em></strong></a><a class="genanchor" href="#88528"> &para;</a><div class="date" title="2009-01-27 06:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88528">
<div class="phpcode"><code><span class="html">PHP is great in how it allows you to send a variable-length argument list to a function by using the func_* functions. However, unfortunately (and this has been brought up numerous time in PHP bug reports/feature requests), it doesn't support passing arguments by reference which would have greatly simplified processing multiple variables at once by simply doing: somefunction($a, $b, $c) and having them processed, without having to do any additional assignment.<br /><br />However, I've discovered a way to leverage several features of PHP and created a very good example that shows how you can process multiple variables in one fell swoop!<br /><br />The usage is (with my example function/class):<br />"list($a, $b, $c, $d, $e) = TextEscape::escape_multi($a, $b, $c, $d, $e);"<br /><br />If PHP had ACTUALLY been capable of passing variables by reference when using variable-length argument lists, that could have been reduced to:<br />"TextEscape::escape_multi($a, $b, $c, $d, $e);"<br /><br />It's extremely close though, both in simplicity and speed. Just be VERY sure to ALWAYS have the SAME NUMBER AND ORDER of arguments on both sides of that statement.<br /><br />The use of a static class was just to make the code cleaner and easier to look at. This can be applied to any functions!<br /><br />Now, onto the code, enjoy the sheer brilliance and enjoy modifying multiple variables at once in just ONE statement! ;-)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TextEscape<br /></span><span class="keyword">{<br />    public static function </span><span class="default">escape_string</span><span class="keyword">(</span><span class="default">$sString</span><span class="keyword">)<br />    {<br />        </span><span class="comment">/* can be anything, using htmlspecialchars() in this example */<br />        </span><span class="keyword">return </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$sString</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">escape_multi</span><span class="keyword">()<br />    {<br />        </span><span class="comment">/* get all variables passed to the function */<br />        </span><span class="default">$aVariables </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        <br />        </span><span class="comment">/* loop through the array, escaping each variable */<br />        </span><span class="keyword">foreach (</span><span class="default">$aVariables </span><span class="keyword">as </span><span class="default">$iKey </span><span class="keyword">=&gt; </span><span class="default">$sValue</span><span class="keyword">)<br />        {<br />            </span><span class="default">$aVariables</span><span class="keyword">[</span><span class="default">$iKey</span><span class="keyword">] = </span><span class="default">TextEscape</span><span class="keyword">::</span><span class="default">escape_string</span><span class="keyword">(</span><span class="default">$sValue</span><span class="keyword">);<br />        }<br />        <br />        </span><span class="comment">/* return the escaped values */<br />        </span><span class="keyword">return </span><span class="default">$aVariables</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Create test variables<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"A&lt;bar"</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"B&gt;bar"</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="string">"C&lt;bar"</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="string">"D&gt;bar"</span><span class="keyword">;<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="string">"E&lt;bar"</span><span class="keyword">;<br /><br /></span><span class="comment">// Variables Before:<br />// Array<br />// (<br />//    [0] =&gt; A&lt;bar<br />//    [1] =&gt; B&gt;bar<br />//    [2] =&gt; C&lt;bar<br />//    [3] =&gt; D&gt;bar<br />//    [4] =&gt; E&lt;bar<br />// )<br /></span><span class="default">print_r</span><span class="keyword">(array(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">));<br /><br /></span><span class="comment">// Process every variable at once,<br />// we're exploiting both how list() and<br />// variable-length argument lists work<br />// to make the usage this smooth! ;-)<br /></span><span class="keyword">list(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">) = </span><span class="default">TextEscape</span><span class="keyword">::</span><span class="default">escape_multi</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">);<br /><br /></span><span class="comment">// Variables After:<br />// Array<br />// (<br />//    [0] =&gt; A&amp;lt;bar<br />//    [1] =&gt; B&amp;gt;bar<br />//    [2] =&gt; C&amp;lt;bar<br />//    [3] =&gt; D&amp;gt;bar<br />//    [4] =&gt; E&amp;lt;bar<br />// )<br /></span><span class="default">print_r</span><span class="keyword">(array(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />That's the CLEAN LOOKING version of the code, which illustrates exactly what is HAPPENING.<br /><br />I also made a speedfreak edition of the function, but didn't want to post it as the main example since it's harder to read.<br /><br />But it's faster, much faster! It passes by reference where it can and loops in a more efficient way.<br /><br />Just replace the above function with this one, the outcome is the same but the speed is better:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TextEscape<br /></span><span class="keyword">{<br />    public static function </span><span class="default">escape_string</span><span class="keyword">(&amp;</span><span class="default">$sString</span><span class="keyword">) </span><span class="comment">// CHANGED: we now pass by reference to the actual text processing function<br />    </span><span class="keyword">{<br />        </span><span class="comment">/* can be anything, using htmlspecialchars() in this example */<br />        </span><span class="default">$sString </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$sString</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">escape_multi</span><span class="keyword">()<br />    {<br />        </span><span class="comment">/* get all variables passed to the function */<br />        </span><span class="default">$aVariables </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        <br />        </span><span class="comment">/* loop through the array, escaping each variable */<br />        </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aVariables</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) </span><span class="comment">// CHANGED: a more efficient for-loop is used instead of a foreach; and for anyone wondering about the counter declaration, this is a common optimization trick which makes it so that the size of the array only has to be checked ONCE, by initializing the counter to the index of the last element (which is size of array minus 1) and then iterating downwards until we reach 0 (the first element)<br />        </span><span class="keyword">{<br />            </span><span class="default">TextEscape</span><span class="keyword">::</span><span class="default">escape_string</span><span class="keyword">(</span><span class="default">$aVariables</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); </span><span class="comment">// CHANGED: this has been changed to modify the variable by reference instead<br />        </span><span class="keyword">}<br />        <br />        </span><span class="comment">/* return the escaped values */<br />        </span><span class="keyword">return </span><span class="default">$aVariables</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="33187">  <div class="votes">
    <div id="Vu33187">
    <a href="/manual/vote-note.php?id=33187&amp;page=ref.funchand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33187">
    <a href="/manual/vote-note.php?id=33187&amp;page=ref.funchand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33187" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#33187" class="name">
  <strong class="user"><em>php-note-2003-june-18 at ryandesign dot com</em></strong></a><a class="genanchor" href="#33187"> &para;</a><div class="date" title="2003-06-18 08:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33187">
<div class="phpcode"><code><span class="html">Xavier's example is rather complicated, and his task would be much more simply accomplished by using classes. Define a base class to do the basic functions open, dump, and close, and create extension classes to override whatever behavior.<br /><br />class foo {<br />  function open() {<br />    // Default functionality for open()<br />  }<br />  function dump() {<br />    // Default functionality for dump()<br />  }<br />  function close() {<br />    // Default functionality for close()<br />  }<br />}<br /><br />class bar extends foo {<br />  function open() {<br />    // Override functionality of open()<br />  }<br />  // dump() and close() remain as in class foo<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="24639">  <div class="votes">
    <div id="Vu24639">
    <a href="/manual/vote-note.php?id=24639&amp;page=ref.funchand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24639">
    <a href="/manual/vote-note.php?id=24639&amp;page=ref.funchand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24639" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#24639" class="name">
  <strong class="user"><em>xmontero at dsitelecom dot com</em></strong></a><a class="genanchor" href="#24639"> &para;</a><div class="date" title="2002-08-23 02:49"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24639">
<div class="phpcode"><code><span class="html">You can do some kind of overloading functions in PHP using "function_exists". <br /><br />Let's suppose you want a script to call plugins that are php files and you want the plugins to "override" behaviours that if not overriden are used by default.<br /><br />You might for example write a "mySQL table viewer" which displays a table and it "opens a table", "dumps the header", "dumps row-by-row" and then "closes the table".<br /><br />Let's suppose you want a plugin for "Stocks" which prints negative stocks in red, so you want to override the "dumping row-by-row" to do that behaviour. Instead you do not want to have all the "default behaviour" repeated in the plugin.<br /><br />You may then do the following:<br /><br />1) Define a default plugin (ex: "default.php"<br /><br />2) Write all your functions in default.php to open, dump and close, but add them a suffix:<br /><br />open_table_default()<br />dump_header_default()<br />dump_row_default()<br />close_table_default()<br /><br />3) Call your functions with a wrapper: Insetad of this:<br />open_table() or open_table_default() write this:<br /><br />plugincall("open_table");<br /><br />4) Then write a function called plugincall which uses function_exists() to see if you call one or the other function:<br /><br />function plugincall($desired_function_name)<br />{<br /><br />if( function_exists( $desired_function_name))<br />{<br />    //Call the plugin<br />    //Note the $ before the name<br />    $desired_function_name()<br />}<br />else<br />{<br />  $desired_function_name = $desired_function_name . "_default";<br />  if( function_exists($desired_function_name))<br />  {<br />      //Call the default<br />      //Note the $ before the name<br />      $desired_function_name()<br />  }<br />  else<br />  {<br />      // Nor the plugin nor the default were defined<br />  }<br />}<br /><br />So, now, if the require_once(plugin.php) contains a function called "open_table()", it will be used. Instaed, "open_table_default()" will be used.<br /><br />It's not like overloading functions, but it is very useful to write scripts ampliable by other programmers: If they write a function, it is used, if not, the default is used.<br /><br />See ya!<br />Xavier Montero.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.funchand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.funchand.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.funchand.php">Function Handling</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.funchand.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
                            <a href="ref.funchand.php" title="Function handling Functions">Function handling Functions</a>
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
