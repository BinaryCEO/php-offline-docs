<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Passing by Reference - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.pass.php">
 <link rel="shorturl" href="https://www.php.net/references.pass">
 <link rel="alternate" href="https://www.php.net/references.pass" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.arent.php">
 <link rel="next" href="https://www.php.net/manual/en/language.references.return.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.pass.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.pass.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.pass.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.pass.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.pass.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.pass.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.pass.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.pass.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.pass.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.pass.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.pass.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Passing by Reference" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Passing by Reference - Manual" />
<meta name="twitter:description" content="Passing by Reference" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Passing by Reference - Manual" />
<meta itemprop="description" content="Passing by Reference" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Passing by Reference" />

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
        <a href="language.references.return.php">
          Returning References &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.arent.php">
          &laquo; What References Are Not        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.references.php'>References Explained</a></li>      </ul>
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
            <option value='en/language.references.pass.php' selected="selected">English</option>
            <option value='de/language.references.pass.php'>German</option>
            <option value='es/language.references.pass.php'>Spanish</option>
            <option value='fr/language.references.pass.php'>French</option>
            <option value='it/language.references.pass.php'>Italian</option>
            <option value='ja/language.references.pass.php'>Japanese</option>
            <option value='pt_BR/language.references.pass.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.pass.php'>Russian</option>
            <option value='tr/language.references.pass.php'>Turkish</option>
            <option value='uk/language.references.pass.php'>Ukrainian</option>
            <option value='zh/language.references.pass.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.pass" class="sect1">
   <h2 class="title">Passing by Reference</h2>
   <p class="para">
   You can pass a variable by reference to a function so the function
   can modify the variable. The syntax is as follows:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$var</span><span style="color: #007700">++;<br />}<br /><br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">=</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// $a is 6 here<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      There is no reference sign on a function call - only on
      function definitions. Function definitions alone are enough to
      correctly pass the argument by reference.
     </span>
    </p></blockquote>
  </p>
  <p class="para">
  The following things can be passed by reference:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      Variables, i.e. <code class="literal">foo($a)</code>
     </span>
    </li>
    <li class="listitem">
     <p class="para">
      References returned from functions, i.e.:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$var</span><span style="color: #007700">++;<br />}<br /><br />function &amp;</span><span style="color: #0000BB">bar</span><span style="color: #007700">()<br />{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />    return </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">bar</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    See more about <a href="language.references.return.php" class="link">returning by reference</a>. 
     </p>
    </li>
  </ul>
  </p>
  <p class="para">
  No other expressions should be passed by reference, as the
  result is undefined. For example, the following examples of passing
  by reference are invalid:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$var</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$var</span><span style="color: #007700">++;<br />}<br /><br />function </span><span style="color: #0000BB">bar</span><span style="color: #007700">() </span><span style="color: #FF8000">// Note the missing &amp;<br /></span><span style="color: #007700">{<br />    </span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />    return </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">bar</span><span style="color: #007700">()); </span><span style="color: #FF8000">// Produces a notice<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">); </span><span style="color: #FF8000">// Expression, not variable<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">); </span><span style="color: #FF8000">// Produces fatal error<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foobar </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(new </span><span style="color: #0000BB">Foobar</span><span style="color: #007700">()) </span><span style="color: #FF8000">// Produces a notice as of PHP 7.0.7<br />                  // Notice: Only variables should be passed by reference<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/references.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.pass%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.pass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.pass.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115919">  <div class="votes">
    <div id="Vu115919">
    <a href="/manual/vote-note.php?id=115919&amp;page=language.references.pass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115919">
    <a href="/manual/vote-note.php?id=115919&amp;page=language.references.pass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115919" title="81% like this...">
    454
    </div>
  </div>
  <a href="#115919" class="name">
  <strong class="user"><em>tnestved at yahoo dot com</em></strong></a><a class="genanchor" href="#115919"> &para;</a><div class="date" title="2014-10-14 01:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115919">
<div class="phpcode"><code><span class="html">By removing the ability to include the reference sign on function calls where pass-by-reference is incurred (I.e., function definition uses &amp;), the readability of the code suffers, as one has to look at the function definition to know if the variable being passed is by-ref or not (I.e., potential to be modified).  If both function calls and function definitions require the reference sign (I.e., &amp;), readability is improved, and it also lessens the potential of an inadvertent error in the code itself.  Going full on fatal error in 5.4.0 now forces everyone to have less readable code.  That is, does a function merely use the variable, or potentially modify it...now we have to find the function definition and physically look at it to know, whereas before we would know the intent immediately.</span></code></div>
  </div>
 </div>
  <div class="note" id="123995">  <div class="votes">
    <div id="Vu123995">
    <a href="/manual/vote-note.php?id=123995&amp;page=language.references.pass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123995">
    <a href="/manual/vote-note.php?id=123995&amp;page=language.references.pass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123995" title="70% like this...">
    28
    </div>
  </div>
  <a href="#123995" class="name">
  <strong class="user"><em>ccb_bc at hotmail dot com</em></strong></a><a class="genanchor" href="#123995"> &para;</a><div class="date" title="2019-07-01 05:58"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123995">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="comment">// PHP &gt;= 5.6<br /><br />// Here we use the 'use' operator to create a variable within the scope of the function. Although it may seem that the newly created variable has something to do with '$x' that is outside the function, we are actually creating a '$x' variable within the function that has nothing to do with the '$x' variable outside the function. We are talking about the same names but different content locations in memory.<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />(function() use (</span><span class="default">$x</span><span class="keyword">){<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">*</span><span class="default">$x</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// 100<br /></span><span class="keyword">})();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// 10<br /><br />// Now the magic happens with using the reference (&amp;). Now we are actually accessing the contents of the '$y' variable that is outside the scope of the function. All the actions that we perform with the variable '$y' within the function will be reflected outside the scope of this same function. Remembering this would be an impure function in the functional paradigm, since we are changing the value of a variable by reference.<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />(function() use (&amp;</span><span class="default">$y</span><span class="keyword">){<br />    </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">*</span><span class="default">$y</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$y</span><span class="keyword">); </span><span class="comment">// 100<br /></span><span class="keyword">})();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$y</span><span class="keyword">); </span><span class="comment">// 100<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128292">  <div class="votes">
    <div id="Vu128292">
    <a href="/manual/vote-note.php?id=128292&amp;page=language.references.pass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128292">
    <a href="/manual/vote-note.php?id=128292&amp;page=language.references.pass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128292" title="70% like this...">
    4
    </div>
  </div>
  <a href="#128292" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128292"> &para;</a><div class="date" title="2023-03-06 10:51"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128292">
<div class="phpcode"><code><span class="html">Parameters passed by references can have default values.<br />You can find out if a variable was actually passed by using func_num_args():<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">refault</span><span class="keyword">( &amp; </span><span class="default">$ref </span><span class="keyword">= </span><span class="string">'Do I have to be calculated?'</span><span class="keyword">){<br />  echo </span><span class="string">'NUM ARGS:  '</span><span class="keyword">. </span><span class="default">func_num_args</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />  echo </span><span class="string">"ORI VALUE: </span><span class="keyword">{</span><span class="default">$ref</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />  if( </span><span class="default">func_num_args</span><span class="keyword">() &gt; </span><span class="default">0 </span><span class="keyword">)  </span><span class="default">$ref </span><span class="keyword">= </span><span class="string">'Yes, expensive to calculate result: ' </span><span class="keyword">. </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  else </span><span class="default">$ref </span><span class="keyword">= </span><span class="string">'No.'</span><span class="keyword">;<br />  echo </span><span class="string">"NEW VALUE: </span><span class="keyword">{</span><span class="default">$ref</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="string">'Do I have to be calculated?'</span><span class="keyword">;<br /></span><span class="default">refault</span><span class="keyword">( </span><span class="default">$result </span><span class="keyword">);<br />echo </span><span class="string">"RESULT:    </span><span class="keyword">{</span><span class="default">$result</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="comment">// NUM ARGS:  1<br />// ORI VALUE: Do I have to be calculated?<br />// NEW VALUE: Yes, expensive to calculate result: 0<br />// RESULT:    Yes, expensive to calculate result: 0<br /><br /></span><span class="default">refault</span><span class="keyword">();<br /></span><span class="comment">// NUM ARGS:  0<br />// ORI VALUE: Do I have to be calculated?<br />// NEW VALUE: No.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117305">  <div class="votes">
    <div id="Vu117305">
    <a href="/manual/vote-note.php?id=117305&amp;page=language.references.pass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117305">
    <a href="/manual/vote-note.php?id=117305&amp;page=language.references.pass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117305" title="62% like this...">
    40
    </div>
  </div>
  <a href="#117305" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#117305"> &para;</a><div class="date" title="2015-05-19 07:06"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117305">
<div class="phpcode"><code><span class="html">beware unset()  destroys references<br /><br />$x = 'x';<br />change( $x );<br />echo $x; // outputs "x" not "q23"  ---- remove the unset() and output is "q23" not "x"<br /><br />function change( &amp; $x )<br />{<br />    unset( $x );<br />    $x = 'q23';<br />    return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124383">  <div class="votes">
    <div id="Vu124383">
    <a href="/manual/vote-note.php?id=124383&amp;page=language.references.pass&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124383">
    <a href="/manual/vote-note.php?id=124383&amp;page=language.references.pass&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124383" title="52% like this...">
    1
    </div>
  </div>
  <a href="#124383" class="name">
  <strong class="user"><em>Jason Steelman</em></strong></a><a class="genanchor" href="#124383"> &para;</a><div class="date" title="2019-11-12 06:13"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124383">
<div class="phpcode"><code><span class="html">Within a class, passing array elements by reference which don't exist are added to the array as null. Compared to a normal function, this changes the behavior of the function from throwing an error to creating a new (null) entry in the referenced array with a new key.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{ <br />    public </span><span class="default">$arr </span><span class="keyword">= [</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="string">'banana'</span><span class="keyword">];<br />    public function </span><span class="default">normalFunction</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    }<br />    public function &amp;</span><span class="default">referenceReturningFunction</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    }<br />}<br /><br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">normalFunction</span><span class="keyword">(</span><span class="string">'beer'</span><span class="keyword">); </span><span class="comment">//Notice Error. Undefined index beer<br /></span><span class="default">$var </span><span class="keyword">= &amp;</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">referenceReturningFunction</span><span class="keyword">(</span><span class="string">'beer'</span><span class="keyword">); </span><span class="comment">// No error. The value of $bar is now null<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">);<br /></span><span class="comment">/**<br />[<br />  "a" =&gt; "apple",<br />  "b" =&gt; "banana",<br />  "beer" =&gt; null,<br />],<br />*/<br /><br /></span><span class="default">?&gt;<br /></span>This is in no way a "bug" - the framework is performing as designed, but it took careful thought to figure out what was going on. PHP7.3</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.pass&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.pass.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.references.php">References Explained</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.references.whatare.php" title="What References Are">What References Are</a>
                        </li>
                                                <li class="">
                            <a href="language.references.whatdo.php" title="What References Do">What References Do</a>
                        </li>
                                                <li class="">
                            <a href="language.references.arent.php" title="What References Are Not">What References Are Not</a>
                        </li>
                                                <li class="current">
                            <a href="language.references.pass.php" title="Passing by Reference">Passing by Reference</a>
                        </li>
                                                <li class="">
                            <a href="language.references.return.php" title="Returning References">Returning References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.unset.php" title="Unsetting References">Unsetting References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.spot.php" title="Spotting References">Spotting References</a>
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
