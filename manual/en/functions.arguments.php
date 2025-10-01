<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Function parameters and arguments - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/functions.arguments.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/functions.arguments.php">
 <link rel="alternate" href="https://www.php.net/manual/en/functions.arguments.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.functions.php">
 <link rel="prev" href="https://www.php.net/manual/en/functions.user-defined.php">
 <link rel="next" href="https://www.php.net/manual/en/functions.returning-values.php">

 <link rel="alternate" href="https://www.php.net/manual/en/functions.arguments.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/functions.arguments.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/functions.arguments.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/functions.arguments.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/functions.arguments.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/functions.arguments.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/functions.arguments.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/functions.arguments.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/functions.arguments.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/functions.arguments.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/functions.arguments.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Function parameters and arguments" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Function parameters and arguments - Manual" />
<meta name="twitter:description" content="Function parameters and arguments" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Function parameters and arguments - Manual" />
<meta itemprop="description" content="Function parameters and arguments" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Function parameters and arguments" />

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
        <a href="functions.returning-values.php">
          Returning values &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="functions.user-defined.php">
          &laquo; User-defined functions        </a>
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
            <option value='en/functions.arguments.php' selected="selected">English</option>
            <option value='de/functions.arguments.php'>German</option>
            <option value='es/functions.arguments.php'>Spanish</option>
            <option value='fr/functions.arguments.php'>French</option>
            <option value='it/functions.arguments.php'>Italian</option>
            <option value='ja/functions.arguments.php'>Japanese</option>
            <option value='pt_BR/functions.arguments.php'>Brazilian Portuguese</option>
            <option value='ru/functions.arguments.php'>Russian</option>
            <option value='tr/functions.arguments.php'>Turkish</option>
            <option value='uk/functions.arguments.php'>Ukrainian</option>
            <option value='zh/functions.arguments.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="functions.arguments" class="sect1">
   <h2 class="title">Function parameters and arguments</h2>

   <p class="simpara">
    The function parameters are declared in the function signature.
    Information may be passed to functions via the argument list,
    which is a comma-delimited list of expressions. The arguments are
    evaluated from left to right and the result is assigned to the parameters of
    the function, before the function is actually called
    (<em>eager</em> evaluation).
   </p>

   
   <p class="para">
    PHP supports passing arguments by value (the default), <a href="functions.arguments.php#functions.arguments.by-reference" class="link">passing by
    reference</a>, and <a href="functions.arguments.php#functions.arguments.default" class="link">default argument
    values</a>. <a href="functions.arguments.php#functions.variable-arg-list" class="link">Variable-length
    argument lists</a> and <a href="functions.arguments.php#functions.named-arguments" class="link">Named Arguments</a>
    are also supported.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     As of PHP 7.3.0, it is possible to have a trailing comma in the argument
     list for a function calls:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$v </span><span style="color: #007700">= </span><span style="color: #0000BB">foo</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$arg_1</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$arg_2</span><span style="color: #007700">,<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
   </p></blockquote>

   <p class="para">
    As of PHP 8.0.0, the list of function parameters may include a trailing comma, which
    will be ignored. That is particularly useful in cases where the list of parameters is
    long or contains long variable names, making it convenient to list parameters vertically.
   </p>
   <div class="example" id="example-213">
    <p><strong>Example #1 Function parameter list with trailing comma</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">takes_many_args</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$first_arg</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$second_arg</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$a_very_long_argument_name</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$arg_with_default </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$again </span><span style="color: #007700">= </span><span style="color: #DD0000">'a default string'</span><span style="color: #007700">, </span><span style="color: #FF8000">// This trailing comma was not permitted before 8.0.0.<br /></span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">// ...<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="sect2" id="functions.arguments.by-reference">
    <h3 class="title">Passing arguments by reference</h3>

    <p class="simpara">
     By default, function arguments are passed by value (so that if
     the value of the argument within the function is changed, it does
     not get changed outside of the function). To allow a function to modify its
     arguments, they must be passed by reference.
    </p>
    <p class="para">
     To have an argument to a function always passed by reference, prepend an
     ampersand (&amp;) to the parameter name in the function definition:
    </p>
    <p class="para">
     <div class="example" id="example-214">
      <p><strong>Example #2 Passing function arguments by reference</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">add_some_extra</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$string </span><span style="color: #007700">.= </span><span style="color: #DD0000">'and something extra.'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is a string, '</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">add_some_extra</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">;    </span><span style="color: #FF8000">// outputs 'This is a string, and something extra.'<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="para">
     It is an error to pass a constant expression as an argument to a parameter
     that expects to be passed by reference.
    </p>
   </div>
   <div class="sect2" id="functions.arguments.default">
    <h3 class="title">Default parameter values</h3>

    <p class="para">
     A function may define default values for parameters using syntax similar
     to assigning a variable. The default is used only when the parameter&#039;s argument is
     not passed. Note that passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> does <em>not</em>
     assign the default value.
    </p>
    <p class="para">
     <div class="example" id="example-215">
      <p><strong>Example #3 Use of default parameters in functions</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(</span><span style="color: #0000BB">$type </span><span style="color: #007700">= </span><span style="color: #DD0000">"cappuccino"</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"Making a cup of </span><span style="color: #0000BB">$type</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(</span><span style="color: #DD0000">"espresso"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Making a cup of cappuccino.
Making a cup of .
Making a cup of espresso.
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     Default parameter values may be scalar values, <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s,
     the special type <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, and as of PHP 8.1.0, objects using the
     <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new ClassName()</a> syntax.
    </p>
    <p class="para">
     <div class="example" id="example-216">
      <p><strong>Example #4 Using non-scalar types as default values</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(</span><span style="color: #0000BB">$types </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"cappuccino"</span><span style="color: #007700">), </span><span style="color: #0000BB">$coffeeMaker </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$device </span><span style="color: #007700">= </span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$coffeeMaker</span><span style="color: #007700">) ? </span><span style="color: #DD0000">"hands" </span><span style="color: #007700">: </span><span style="color: #0000BB">$coffeeMaker</span><span style="color: #007700">;<br />    return </span><span style="color: #DD0000">"Making a cup of "</span><span style="color: #007700">.</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #DD0000">", "</span><span style="color: #007700">, </span><span style="color: #0000BB">$types</span><span style="color: #007700">).</span><span style="color: #DD0000">" with </span><span style="color: #0000BB">$device</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"cappuccino"</span><span style="color: #007700">, </span><span style="color: #DD0000">"lavazza"</span><span style="color: #007700">), </span><span style="color: #DD0000">"teapot"</span><span style="color: #007700">);</span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Making a cup of cappuccino with hands.
Making a cup of cappuccino, lavazza with teapot.
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     <div class="example" id="example-217">
      <p><strong>Example #5 Using objects as default values (as of PHP 8.1.0)</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">DefaultCoffeeMaker </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">brew</span><span style="color: #007700">() {<br />        return </span><span style="color: #DD0000">"Making coffee.\n"</span><span style="color: #007700">;<br />    }<br />}<br />class </span><span style="color: #0000BB">FancyCoffeeMaker </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">brew</span><span style="color: #007700">() {<br />        return </span><span style="color: #DD0000">"Crafting a beautiful coffee just for you.\n"</span><span style="color: #007700">;<br />    }<br />}<br />function </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(</span><span style="color: #0000BB">$coffeeMaker </span><span style="color: #007700">= new </span><span style="color: #0000BB">DefaultCoffeeMaker</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$coffeeMaker</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">brew</span><span style="color: #007700">();<br />}<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">makecoffee</span><span style="color: #007700">(new </span><span style="color: #0000BB">FancyCoffeeMaker</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>


      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Making coffee.
Crafting a beautiful coffee just for you.
</pre></div>
      </div>
     </div>
    </p>
    <p class="simpara">
     The default value must be a constant expression, not (for
     example) a variable, a class member or a function call.
    </p>
    <p class="para">
     Note that any optional parameters should be specified after any
     required parameters, otherwise they cannot be omitted from calls.
     Consider the following example:
    </p>
    <p class="para">
     <div class="example" id="example-218">
      <p><strong>Example #6 Incorrect usage of default function parameters</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">$container </span><span style="color: #007700">= </span><span style="color: #DD0000">"bowl"</span><span style="color: #007700">, </span><span style="color: #0000BB">$flavour</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"Making a </span><span style="color: #0000BB">$container</span><span style="color: #DD0000"> of </span><span style="color: #0000BB">$flavour</span><span style="color: #DD0000"> yogurt.\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">); </span><span style="color: #FF8000">// "raspberry" is $container, not $flavour<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Uncaught ArgumentCountError: Too few arguments
 to function makeyogurt(), 1 passed in example.php on line 42
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     Now, compare the above with this:
    </p>
    <p class="para">
     <div class="example" id="example-219">
      <p><strong>Example #7 Correct usage of default function parameters</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">$flavour</span><span style="color: #007700">, </span><span style="color: #0000BB">$container </span><span style="color: #007700">= </span><span style="color: #DD0000">"bowl"</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"Making a </span><span style="color: #0000BB">$container</span><span style="color: #DD0000"> of </span><span style="color: #0000BB">$flavour</span><span style="color: #DD0000"> yogurt.\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">); </span><span style="color: #FF8000">// "raspberry" is $flavour<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Making a bowl of raspberry yogurt.
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     As of PHP 8.0.0, <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>
     can be used to skip over multiple optional parameters.
    </p>
    <p class="para">
     <div class="example" id="example-220">
      <p><strong>Example #8 Correct usage of default function parameters</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">$container </span><span style="color: #007700">= </span><span style="color: #DD0000">"bowl"</span><span style="color: #007700">, </span><span style="color: #0000BB">$flavour </span><span style="color: #007700">= </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">, </span><span style="color: #0000BB">$style </span><span style="color: #007700">= </span><span style="color: #DD0000">"Greek"</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"Making a </span><span style="color: #0000BB">$container</span><span style="color: #DD0000"> of </span><span style="color: #0000BB">$flavour</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$style</span><span style="color: #DD0000"> yogurt.\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">makeyogurt</span><span style="color: #007700">(</span><span style="color: #0000BB">style</span><span style="color: #007700">: </span><span style="color: #DD0000">"natural"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Making a bowl of raspberry natural yogurt.
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     As of PHP 8.0.0, declaring mandatory parameters after optional parameters
     is <em>deprecated</em>. This can generally be resolved by
     dropping the default value, since it will never be used.
     One exception to this rule are parameters of the form
     <code class="code">Type $param = null</code>, where the <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> default makes the type implicitly
     nullable. This usage is deprecated as of PHP 8.4.0, and an explicit
     <a href="language.types.declarations.php#language.types.declarations.nullable" class="link">nullable type</a>
     should be used instead.
     <div class="example" id="example-221">
      <p><strong>Example #9 Declaring optional parameters after mandatory parameters</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">= [], </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {}     </span><span style="color: #FF8000">// Default not used; deprecated as of PHP 8.0.0<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {}          </span><span style="color: #FF8000">// Functionally equivalent, no deprecation notice<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">bar</span><span style="color: #007700">(</span><span style="color: #0000BB">A $a </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {} </span><span style="color: #FF8000">// As of PHP 8.1.0, $a is implicitly required<br />                                 // (because it comes before the required one),<br />                                 // but implicitly nullable (deprecated as of PHP 8.4.0),<br />                                 // because the default parameter value is null<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">bar</span><span style="color: #007700">(?</span><span style="color: #0000BB">A $a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {}       </span><span style="color: #FF8000">// Recommended<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      As of PHP 7.1.0, omitting a parameter which does not specify a default
      throws an <span class="classname"><a href="class.argumentcounterror.php" class="classname">ArgumentCountError</a></span>; in previous versions
      it raised a Warning.
     </span>
    </p></blockquote>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Parameters that expect the argument by reference may have a default value.
     </span>
    </p></blockquote>
   </div>

   <div class="sect2" id="functions.variable-arg-list">
    <h3 class="title">Variable-length argument lists</h3>

    <p class="simpara">
     PHP has support for variable-length argument lists in
     user-defined functions by using the
     <code class="literal">...</code> token.
    </p>

    <p class="para">
     Parameter lists may include the
     <code class="literal">...</code> token to denote that the function accepts a
     variable number of arguments. The arguments will be passed into the
     given variable as an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>:

     <div class="example" id="example-222">
      <p><strong>Example #10 Using <code class="literal">...</code> to access variable arguments</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">sum</span><span style="color: #007700">(...</span><span style="color: #0000BB">$numbers</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$acc </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    foreach (</span><span style="color: #0000BB">$numbers </span><span style="color: #007700">as </span><span style="color: #0000BB">$n</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$acc </span><span style="color: #007700">+= </span><span style="color: #0000BB">$n</span><span style="color: #007700">;<br />    }<br />    return </span><span style="color: #0000BB">$acc</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
10
</pre></div>
      </div>
     </div>
    </p>

    <p class="para">
     <code class="literal">...</code> can also be used when calling functions to unpack
     an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> variable or
     literal into the argument list:

     <div class="example" id="example-223">
      <p><strong>Example #11 Using <code class="literal">...</code> to provide arguments</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">add</span><span style="color: #007700">(...[</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">]).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">add</span><span style="color: #007700">(...</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
3
3
</pre></div>
      </div>
     </div>
    </p>

    <p class="para">
     You may specify normal positional parameters before the
     <code class="literal">...</code> token. In this case, only the trailing arguments
     that don&#039;t match a positional argument will be added to the array
     generated by <code class="literal">...</code>.
    </p>

    <p class="para">
     It is also possible to add a
     <a href="language.types.declarations.php" class="link">type declaration</a> before the
     <code class="literal">...</code> token. If this is present, then all arguments
     captured by <code class="literal">...</code> must match that parameter type.

     <div class="example" id="example-224">
      <p><strong>Example #12 Type declared variable arguments</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">total_intervals</span><span style="color: #007700">(</span><span style="color: #0000BB">$unit</span><span style="color: #007700">, </span><span style="color: #0000BB">DateInterval </span><span style="color: #007700">...</span><span style="color: #0000BB">$intervals</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$time </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    foreach (</span><span style="color: #0000BB">$intervals </span><span style="color: #007700">as </span><span style="color: #0000BB">$interval</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$time </span><span style="color: #007700">+= </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$unit</span><span style="color: #007700">;<br />    }<br />    return </span><span style="color: #0000BB">$time</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P1D'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P2D'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">total_intervals</span><span style="color: #007700">(</span><span style="color: #DD0000">'d'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">).</span><span style="color: #DD0000">' days'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// This will fail, since null isn't a DateInterval object.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">total_intervals</span><span style="color: #007700">(</span><span style="color: #DD0000">'d'</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
3 days
Catchable fatal error: Argument 2 passed to total_intervals() must be an instance of DateInterval, null given, called in - on line 14 and defined in - on line 2
</pre></div>
      </div>
     </div>
    </p>

    <p class="para">
     Finally, variable arguments can also be passed
     <a href="functions.arguments.php#functions.arguments.by-reference" class="link">by reference</a> by
     prefixing the <code class="literal">...</code> with an ampersand
     (<code class="literal">&amp;</code>).
    </p>

   </div>

   <div class="sect2" id="functions.named-arguments">
    <h3 class="title">Named Arguments</h3>

    <p class="para">
     PHP 8.0.0 introduced named arguments as an extension of the existing
     positional parameters. Named arguments allow passing arguments to a
     function based on the parameter name, rather than the parameter position.
     This makes the meaning of the argument self-documenting, makes the
     arguments order-independent and allows skipping default values arbitrarily.
    </p>

    <p class="para">
     Named arguments are passed by prefixing the value with the parameter name
     followed by a colon. Using reserved keywords as parameter names is allowed.
     The parameter name must be an identifier, specifying dynamically
     is not allowed.
    </p>

    <div class="example" id="example-225">
     <p><strong>Example #13 Named argument syntax</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />myFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">paramName</span><span style="color: #007700">: </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_foobar</span><span style="color: #007700">(array: </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// NOT supported.<br /></span><span style="color: #0000BB">function_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$variableStoringParamName</span><span style="color: #007700">: </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <div class="example" id="example-226">
     <p><strong>Example #14 Positional arguments versus named arguments</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Using positional arguments:<br /></span><span style="color: #0000BB">array_fill</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Using named arguments:<br /></span><span style="color: #0000BB">array_fill</span><span style="color: #007700">(</span><span style="color: #0000BB">start_index</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">: </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">value</span><span style="color: #007700">: </span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     The order in which the named arguments are passed does not matter.
    </p>

    <div class="example" id="example-227">
     <p><strong>Example #15 Same example as above with a different order of parameters</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />array_fill</span><span style="color: #007700">(</span><span style="color: #0000BB">value</span><span style="color: #007700">: </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">: </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">start_index</span><span style="color: #007700">: </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     Named arguments can be combined with positional arguments. In this case,
     the named arguments must come after the positional arguments.
     It is also possible to specify only some of the optional arguments of a
     function, regardless of their order.
    </p>

    <div class="example" id="example-228">
     <p><strong>Example #16 Combining named arguments with positional arguments</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #0000BB">double_encode</span><span style="color: #007700">: </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Same as<br /></span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES </span><span style="color: #007700">| </span><span style="color: #0000BB">ENT_SUBSTITUTE </span><span style="color: #007700">| </span><span style="color: #0000BB">ENT_HTML401</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     Passing an argument to the same named parameter multiple times results in an
     <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception.
    </p>

    <div class="example" id="example-229">
     <p><strong>Example #17 Error thrown when passing an argument to the same named parameter multiple times</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">) { ... }<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">param</span><span style="color: #007700">: </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">param</span><span style="color: #007700">: </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Error: Named parameter $param overwrites previous argument<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">param</span><span style="color: #007700">: </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Error: Named parameter $param overwrites previous argument<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     As of PHP 8.1.0, it is possible to use named arguments after unpacking the arguments.
     A named argument <em>must not</em> override an already unpacked argument.
    </p>

    <div class="example" id="example-230">
     <p><strong>Example #18 Use named arguments after unpacking</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">$d </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">) {<br />  return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b </span><span style="color: #007700">+ </span><span style="color: #0000BB">$c </span><span style="color: #007700">+ </span><span style="color: #0000BB">$d</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(...[</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">], </span><span style="color: #0000BB">d</span><span style="color: #007700">: </span><span style="color: #0000BB">40</span><span style="color: #007700">)); </span><span style="color: #FF8000">// 46<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(...[</span><span style="color: #DD0000">'b' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">d</span><span style="color: #007700">: </span><span style="color: #0000BB">40</span><span style="color: #007700">)); </span><span style="color: #FF8000">// 46<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">foo</span><span style="color: #007700">(...[</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">], </span><span style="color: #0000BB">b</span><span style="color: #007700">: </span><span style="color: #0000BB">20</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Fatal error. Named parameter $b overwrites previous argument<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunctions.arguments%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=functions.arguments&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.arguments.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116968">  <div class="votes">
    <div id="Vu116968">
    <a href="/manual/vote-note.php?id=116968&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116968">
    <a href="/manual/vote-note.php?id=116968&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116968" title="74% like this...">
    137
    </div>
  </div>
  <a href="#116968" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#116968"> &para;</a><div class="date" title="2015-03-28 07:24"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116968">
<div class="phpcode"><code><span class="html">To experiment on performance of pass-by-reference and pass-by-value, I used this  script. Conclusions are below. <br /><br />#!/usr/bin/php<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">sum</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$max</span><span class="keyword">){   </span><span class="comment">//For Reference, use:  "&amp;$array"<br />    </span><span class="default">$sum</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">2</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="comment">#$array[$i]++;        //Uncomment this line to modify the array within the function.<br />        </span><span class="default">$sum </span><span class="keyword">+= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];  <br />    }<br />    return (</span><span class="default">$sum</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">1E7                  </span><span class="comment">//10 M data points.<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$max</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />    </span><span class="default">$sum </span><span class="keyword">= </span><span class="default">sum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">);<br />}<br /></span><span class="default">$end </span><span class="keyword">=  </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="string">"Time: "</span><span class="keyword">.(</span><span class="default">$end </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">).</span><span class="string">" s\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/* Run times:<br />#    PASS BY    MODIFIED?   Time<br />-    -------    ---------   ----<br />1    value      no          56 us<br />2    reference  no          58 us<br /><br />3    valuue     yes         129 s<br />4    reference  yes         66 us<br /><br />Conclusions:<br /><br />1. PHP is already smart about zero-copy / copy-on-write. A function call does NOT copy the data unless it needs to; the data is<br />   only copied on write. That's why  #1 and #2 take similar times, whereas #3 takes 2 million times longer than #4.<br />   [You never need to use &amp;$array to ask the compiler to do a zero-copy optimisation; it can work that out for itself.]<br /><br />2. You do use &amp;$array  to tell the compiler "it is OK for the function to over-write my argument in place, I don't need the original<br />   any more." This can make a huge difference to performance when we have large amounts of memory to copy.<br />   (This is the only way it is done in C, arrays are always passed as pointers)<br /><br />3. The other use of &amp; is as a way to specify where data should be *returned*. (e.g. as used by exec() ).<br />   (This is a C-like way of passing pointers for outputs, whereas PHP functions normally return complex types, or multiple answers<br />   in an array)<br /><br />4. It's  unhelpful that only the function definition has &amp;. The caller should have it, at least as syntactic sugar. Otherwise<br />   it leads to unreadable code: because the person reading the function call doesn't expect it to pass by reference. At the moment,<br />   it's necessary to write a by-reference function call with a comment, thus:<br />    $sum = sum($data,$max);  //warning, $data passed by reference, and may be modified.<br /><br />5. Sometimes, pass by reference could be at the choice of the caller, NOT the function definitition. PHP doesn't allow it, but it<br />   would be meaningful for the caller to decide to pass data in as a reference. i.e. "I'm done with the variable, it's OK to stomp<br />   on it in memory".<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126910">  <div class="votes">
    <div id="Vu126910">
    <a href="/manual/vote-note.php?id=126910&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126910">
    <a href="/manual/vote-note.php?id=126910&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126910" title="88% like this...">
    13
    </div>
  </div>
  <a href="#126910" class="name">
  <strong class="user"><em>Simmo at 9000 dot 000</em></strong></a><a class="genanchor" href="#126910"> &para;</a><div class="date" title="2022-03-09 05:13"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126910">
<div class="phpcode"><code><span class="html">For anyone just getting started with php or searching, for an understanding, on what this page describes as a "... token" in Variable-length arguments:<br /><a href="https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list" rel="nofollow" target="_blank">https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list</a><br /><span class="default">&lt;?php<br /><br />  func</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, ...</span><span class="default">$b</span><span class="keyword">) <br /><br /></span><span class="default">?&gt;<br /></span>The 3 dots, or elipsis, or "...", or dot dot dot is sometimes called the "spread operator" in other languages.<br /><br />As this is only used in function arguments, it is probably not technically an true operator in PHP.  (As of 8.1 at least?).<br /><br />(With having an difficult to search for name like "... token", I hope this note helps someone).</span></code></div>
  </div>
 </div>
  <div class="note" id="126472">  <div class="votes">
    <div id="Vu126472">
    <a href="/manual/vote-note.php?id=126472&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126472">
    <a href="/manual/vote-note.php?id=126472&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126472" title="73% like this...">
    18
    </div>
  </div>
  <a href="#126472" class="name">
  <strong class="user"><em>LilyWhite</em></strong></a><a class="genanchor" href="#126472"> &para;</a><div class="date" title="2021-10-03 12:20"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126472">
<div class="phpcode"><code><span class="html">It is worth noting that you can use functions as function arguments<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">run</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />  return </span><span class="default">$op</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$add </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />  return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$mul </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />  return </span><span class="default">$a </span><span class="keyword">* </span><span class="default">$b</span><span class="keyword">;<br />};<br /><br />echo </span><span class="default">run</span><span class="keyword">(</span><span class="default">$add</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">run</span><span class="keyword">(</span><span class="default">$mul</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />3<br />2</span></code></div>
  </div>
 </div>
  <div class="note" id="119724">  <div class="votes">
    <div id="Vu119724">
    <a href="/manual/vote-note.php?id=119724&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119724">
    <a href="/manual/vote-note.php?id=119724&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119724" title="62% like this...">
    30
    </div>
  </div>
  <a href="#119724" class="name">
  <strong class="user"><em>gabriel at figdice dot org</em></strong></a><a class="genanchor" href="#119724"> &para;</a><div class="date" title="2016-08-11 07:05"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119724">
<div class="phpcode"><code><span class="html">A function's argument that is an object, will have its properties modified by the function although you don't need to pass it by reference.<br /><br /><span class="default">&lt;?php<br />$x </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />function </span><span class="default">f </span><span class="keyword">( </span><span class="default">$o </span><span class="keyword">) </span><span class="comment">// Notice the absence of &amp;<br /></span><span class="keyword">{<br />  </span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">prop </span><span class="keyword">++;<br />}<br /><br /></span><span class="default">f</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br /><br />echo </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">prop</span><span class="keyword">; </span><span class="comment">// shows: 2<br /></span><span class="default">?&gt;<br /></span><br />This is different for arrays:<br /><br /><span class="default">&lt;?php<br />$y </span><span class="keyword">= [ </span><span class="string">'prop' </span><span class="keyword">=&gt; </span><span class="default">1 </span><span class="keyword">];<br /><br />function </span><span class="default">g</span><span class="keyword">( </span><span class="default">$a </span><span class="keyword">)<br />{<br />  </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'prop'</span><span class="keyword">] ++;<br />  echo </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'prop'</span><span class="keyword">];  </span><span class="comment">// shows: 2<br /></span><span class="keyword">}<br /><br /></span><span class="default">g</span><span class="keyword">(</span><span class="default">$y</span><span class="keyword">);<br /><br />echo </span><span class="default">$y</span><span class="keyword">[</span><span class="string">'prop'</span><span class="keyword">];  </span><span class="comment">// shows: 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121579">  <div class="votes">
    <div id="Vu121579">
    <a href="/manual/vote-note.php?id=121579&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121579">
    <a href="/manual/vote-note.php?id=121579&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121579" title="64% like this...">
    14
    </div>
  </div>
  <a href="#121579" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121579"> &para;</a><div class="date" title="2017-08-30 11:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121579">
<div class="phpcode"><code><span class="html">There are fewer restrictions on using ... to supply multiple arguments to a function call than there are on using it to declare a variadic parameter in the function declaration. In particular, it can be used more than once to unpack arguments, provided that all such uses come after any positional arguments.<br /><br /><span class="default">&lt;?php<br /><br />$array1 </span><span class="keyword">= [[</span><span class="default">1</span><span class="keyword">],[</span><span class="default">2</span><span class="keyword">],[</span><span class="default">3</span><span class="keyword">]];<br /></span><span class="default">$array2 </span><span class="keyword">= [</span><span class="default">4</span><span class="keyword">];<br /></span><span class="default">$array3 </span><span class="keyword">= [[</span><span class="default">5</span><span class="keyword">],[</span><span class="default">6</span><span class="keyword">],[</span><span class="default">7</span><span class="keyword">]];<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(...</span><span class="default">$array1</span><span class="keyword">); </span><span class="comment">// Legal, of course: $result == [1,2,3];<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">, ...</span><span class="default">$array1</span><span class="keyword">); </span><span class="comment">// $result == [4,1,2,3]<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(...</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">); </span><span class="comment">// Fatal error: Cannot use positional argument after argument unpacking.<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(...</span><span class="default">$array1</span><span class="keyword">, ...</span><span class="default">$array3</span><span class="keyword">); </span><span class="comment">// Legal! $result == [1,2,3,5,6,7]<br /></span><span class="default">?&gt;<br /></span><br />The Right Thing for the error case above would be for $result==[1,2,3,4], but this isn't yet (v7.1.8) supported.</span></code></div>
  </div>
 </div>
  <div class="note" id="122371">  <div class="votes">
    <div id="Vu122371">
    <a href="/manual/vote-note.php?id=122371&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122371">
    <a href="/manual/vote-note.php?id=122371&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122371" title="62% like this...">
    16
    </div>
  </div>
  <a href="#122371" class="name">
  <strong class="user"><em>boan dot web at outlook dot com</em></strong></a><a class="genanchor" href="#122371"> &para;</a><div class="date" title="2018-02-08 11:27"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122371">
<div class="phpcode"><code><span class="html">Quote:<br /><br />"The declaration can be made to accept NULL values if the default value of the parameter is set to NULL."<br /><br />But you can do this (PHP 7.1+):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(?</span><span class="default">string $bar</span><span class="keyword">) {<br />    </span><span class="comment">//...<br /></span><span class="keyword">}<br /><br /></span><span class="default">foo</span><span class="keyword">(); </span><span class="comment">// Fatal error<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">); </span><span class="comment">// Okay<br /></span><span class="default">foo</span><span class="keyword">(</span><span class="string">'Hello world'</span><span class="keyword">); </span><span class="comment">// Okay<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128022">  <div class="votes">
    <div id="Vu128022">
    <a href="/manual/vote-note.php?id=128022&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128022">
    <a href="/manual/vote-note.php?id=128022&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128022" title="57% like this...">
    4
    </div>
  </div>
  <a href="#128022" class="name">
  <strong class="user"><em>Luna</em></strong></a><a class="genanchor" href="#128022"> &para;</a><div class="date" title="2022-12-15 06:23"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128022">
<div class="phpcode"><code><span class="html">When using named arguments and adding default values only to some of the arguments, the arguments with default values must be specified at the end or otherwise PHP throws an error:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">test1</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{<br />    return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b </span><span class="keyword">+ </span><span class="default">$c</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">test2</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">)<br />{<br />    return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b </span><span class="keyword">+ </span><span class="default">$c</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">test1</span><span class="keyword">(</span><span class="default">a</span><span class="keyword">: </span><span class="default">1</span><span class="keyword">, </span><span class="default">c</span><span class="keyword">: </span><span class="default">3</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// Works<br /></span><span class="keyword">echo </span><span class="default">test2</span><span class="keyword">(</span><span class="default">a</span><span class="keyword">: </span><span class="default">1</span><span class="keyword">, </span><span class="default">c</span><span class="keyword">: </span><span class="default">3</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// ArgumentCountError: Argument #2 ($b) not passed<br /><br /></span><span class="default">?&gt;<br /></span><br />I assume that this happens because internally PHP rewrites the calls to something like test1(1, 3) and test2(1, , 3). The first call is valid, but the second obviously isn't.</span></code></div>
  </div>
 </div>
  <div class="note" id="121526">  <div class="votes">
    <div id="Vu121526">
    <a href="/manual/vote-note.php?id=121526&amp;page=functions.arguments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121526">
    <a href="/manual/vote-note.php?id=121526&amp;page=functions.arguments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121526" title="58% like this...">
    7
    </div>
  </div>
  <a href="#121526" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121526"> &para;</a><div class="date" title="2017-08-16 12:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121526">
<div class="phpcode"><code><span class="html">If you use ... in a function's parameter list, you can use it only once for obvious reasons. Less obvious is that it has to be on the LAST parameter; as the manual puts it: "You may specify normal positional arguments BEFORE the ... token. (emphasis mine).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">variadic</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">, ...</span><span class="default">$most</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">)<br />{</span><span class="comment">/*etc.*/</span><span class="keyword">}<br /><br /></span><span class="default">variadic</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>results in a fatal error, even though it looks like the Thing To Do™ would be to set $first to 1, $most to [2, 3, 4], and $last to 5.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=functions.arguments&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.arguments.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.functions.php">Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="functions.user-defined.php" title="User-&#8203;defined functions">User-&#8203;defined functions</a>
                        </li>
                                                <li class="current">
                            <a href="functions.arguments.php" title="Function parameters and arguments">Function parameters and arguments</a>
                        </li>
                                                <li class="">
                            <a href="functions.returning-values.php" title="Returning values">Returning values</a>
                        </li>
                                                <li class="">
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
