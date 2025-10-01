<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: unset - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.unset.php">
 <link rel="shorturl" href="https://www.php.net/unset">
 <link rel="alternate" href="https://www.php.net/unset" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.unserialize.php">
 <link rel="next" href="https://www.php.net/manual/en/function.var-dump.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.unset.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.unset.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.unset.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.unset.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.unset.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.unset.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.unset.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.unset.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.unset.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.unset.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.unset.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="unset a given variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: unset - Manual" />
<meta name="twitter:description" content="unset a given variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: unset - Manual" />
<meta itemprop="description" content="unset a given variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="unset a given variable" />

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
        <a href="function.var-dump.php">
          var_dump &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.unserialize.php">
          &laquo; unserialize        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.unset.php' selected="selected">English</option>
            <option value='de/function.unset.php'>German</option>
            <option value='es/function.unset.php'>Spanish</option>
            <option value='fr/function.unset.php'>French</option>
            <option value='it/function.unset.php'>Italian</option>
            <option value='ja/function.unset.php'>Japanese</option>
            <option value='pt_BR/function.unset.php'>Brazilian Portuguese</option>
            <option value='ru/function.unset.php'>Russian</option>
            <option value='tr/function.unset.php'>Turkish</option>
            <option value='uk/function.unset.php'>Ukrainian</option>
            <option value='zh/function.unset.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.unset" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">unset</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">unset</span> &mdash; <span class="dc-title"><span class="function"><strong>unset()</strong></span> a given variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.unset-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>unset</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$vars</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>unset()</strong></span> destroys the specified variables. 
  </p>
  <p class="para">
   The behavior of <span class="function"><strong>unset()</strong></span> inside of a function
   can vary depending on what type of variable you are attempting to
   destroy.
  </p>
  <p class="para">
   If a globalized variable is <span class="function"><strong>unset()</strong></span> inside of
   a function, only the local variable is destroyed.  The variable
   in the calling environment will retain the same value as before
   <span class="function"><strong>unset()</strong></span> was called.
   <div class="example" id="example-5672">
    <p><strong>Example #1 Using <span class="function"><strong>unset()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">destroy_foo</span><span style="color: #007700">() <br />{<br />    global </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />    unset(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">destroy_foo</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   To <span class="function"><strong>unset()</strong></span> a global variable
   inside of a function, then use
   the <var class="varname"><a href="reserved.variables.globals.php" class="classname">$GLOBALS</a></var> array to do so:
   <div class="example" id="example-5673">
    <p><strong>Example #2 <span class="function"><strong>unset()</strong></span> a Global Variable</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">() <br />{<br />    unset(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'bar'</span><span style="color: #007700">]);<br />}<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">"something"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   If a variable that is PASSED BY REFERENCE is
   <span class="function"><strong>unset()</strong></span> inside of a function, only the local
   variable is destroyed.  The variable in the calling environment
   will retain the same value as before <span class="function"><strong>unset()</strong></span>
   was called.
   <div class="example" id="example-5674">
    <p><strong>Example #3 <span class="function"><strong>unset()</strong></span> with Reference</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$bar</span><span style="color: #007700">) <br />{<br />    unset(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">"blah"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'something'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$bar</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$bar</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   If a static variable is <span class="function"><strong>unset()</strong></span> inside of a
   function, <span class="function"><strong>unset()</strong></span> destroys the variable only in the
   context of the rest of a function. Following calls will restore the
   previous value of a variable.
   <div class="example" id="example-5675">
    <p><strong>Example #4 <span class="function"><strong>unset()</strong></span> with Static Variable</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />{<br />    static </span><span style="color: #0000BB">$bar</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$bar</span><span style="color: #007700">++;<br />    echo </span><span style="color: #DD0000">"Before unset: </span><span style="color: #0000BB">$bar</span><span style="color: #DD0000">, "</span><span style="color: #007700">;<br />    unset(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #0000BB">23</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"after unset: </span><span style="color: #0000BB">$bar</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.unset-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The variable to be unset.
      </p>
     </dd>
    
    
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       Further variables.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.unset-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.unset-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5676">
    <p><strong>Example #5 <span class="function"><strong>unset()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// destroy a single variable<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// destroy a single element of an array<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">[</span><span style="color: #DD0000">'quux'</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// destroy more than one variable<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$foo1</span><span style="color: #007700">, </span><span style="color: #0000BB">$foo2</span><span style="color: #007700">, </span><span style="color: #0000BB">$foo3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.unset-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">Because this is a
language construct and not a function, it cannot be called using
<a href="functions.variable-functions.php" class="link">variable functions</a>,
or <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.</span>
</p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is possible to unset object properties visible in the current context.
   </p>
   <p class="para">
     If declared,
     <a href="language.oop5.overloading.php#object.get" class="link">__get()</a>
     is called when accessing an unset property, and
     <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>
     is called when setting an unset property.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is not possible to unset <code class="literal">$this</code> inside an object
    method.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When using <span class="function"><strong>unset()</strong></span> on inaccessible object properties,
    the <a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a>
    overloading method will be called, if declared.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.unset-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.isset.php" class="function" rel="rdfs-seeAlso">isset()</a> - Determine if a variable is declared and is different than null</span></li>
    <li><span class="function"><a href="function.empty.php" class="function" rel="rdfs-seeAlso">empty()</a> - Determine whether a variable is empty</span></li>
    <li><a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a></li>
    <li><span class="function"><a href="function.array-splice.php" class="function" rel="rdfs-seeAlso">array_splice()</a> - Remove a portion of the array and replace it with something else</span></li>
    <li><a href="language.types.null.php#language.types.null.casting" class="link">(unset) casting</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/unset.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.unset%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.unset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unset.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119711">  <div class="votes">
    <div id="Vu119711">
    <a href="/manual/vote-note.php?id=119711&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119711">
    <a href="/manual/vote-note.php?id=119711&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119711" title="89% like this...">
    705
    </div>
  </div>
  <a href="#119711" class="name">
  <strong class="user"><em>Phantasma_9 at yahoo dot com</em></strong></a><a class="genanchor" href="#119711"> &para;</a><div class="date" title="2016-08-08 06:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119711">
<div class="phpcode"><code><span class="html">This is probably trivial but there is no error for unsetting a non-existing variable.</span></code></div>
  </div>
 </div>
  <div class="note" id="111576">  <div class="votes">
    <div id="Vu111576">
    <a href="/manual/vote-note.php?id=111576&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111576">
    <a href="/manual/vote-note.php?id=111576&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111576" title="69% like this...">
    210
    </div>
  </div>
  <a href="#111576" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#111576"> &para;</a><div class="date" title="2013-03-05 09:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111576">
<div class="phpcode"><code><span class="html">You don't need to check that a variable is set before you unset it.<br /><span class="default">&lt;?php<br /></span><span class="keyword">unset(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>is harmless.<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(isset(</span><span class="default">$a</span><span class="keyword">)) {<br />    unset(</span><span class="default">$a</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>is pointless complication.<br /><br />This doesn't apply to properties of objects that have __isset() methods that visibly change object state or __unset() methods that don't properly check their arguments or have extra side effects.<br /><br />The latter case means that __unset shouldn't do more than what it says on the tin, and also has the responsibility for checking (possibly using __isset()) that what it's being asked to do makes sense.<br /><br />The former case is just plain bad design.</span></code></div>
  </div>
 </div>
  <div class="note" id="127017">  <div class="votes">
    <div id="Vu127017">
    <a href="/manual/vote-note.php?id=127017&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127017">
    <a href="/manual/vote-note.php?id=127017&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127017" title="72% like this...">
    16
    </div>
  </div>
  <a href="#127017" class="name">
  <strong class="user"><em>tecdoc at ukr dot net</em></strong></a><a class="genanchor" href="#127017"> &para;</a><div class="date" title="2022-04-28 09:25"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127017">
<div class="phpcode"><code><span class="html">Be careful!, unset() element in array advances the internal array pointer one place forward</span></code></div>
  </div>
 </div>
  <div class="note" id="84911">  <div class="votes">
    <div id="Vu84911">
    <a href="/manual/vote-note.php?id=84911&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84911">
    <a href="/manual/vote-note.php?id=84911&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84911" title="56% like this...">
    51
    </div>
  </div>
  <a href="#84911" class="name">
  <strong class="user"><em>nox at oreigon dot de</em></strong></a><a class="genanchor" href="#84911"> &para;</a><div class="date" title="2008-08-05 12:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84911">
<div class="phpcode"><code><span class="html">if you try to unset an object, please be careful about references.<br /><br />Objects will only free their resources and trigger their __destruct method when *all* references are unsetted.<br />Even when they are *in* the object... sigh!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />  function </span><span class="default">__destruct</span><span class="keyword">() {<br />    echo </span><span class="string">"cYa later!!\n"</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /></span><span class="default">$a </span><span class="keyword">-&gt; </span><span class="default">a </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="comment">#unset($a); # Just uncomment, and you'll see<br /><br /></span><span class="keyword">echo </span><span class="string">"No Message ... hm, what now?\n"</span><span class="keyword">;<br />unset(</span><span class="default">$a </span><span class="keyword">-&gt; </span><span class="default">a</span><span class="keyword">);<br />unset(</span><span class="default">$a</span><span class="keyword">);<br /><br />echo </span><span class="string">"Finally that thing is gone\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Of course the object completely dies at the end of the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="81702">  <div class="votes">
    <div id="Vu81702">
    <a href="/manual/vote-note.php?id=81702&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81702">
    <a href="/manual/vote-note.php?id=81702&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81702" title="54% like this...">
    40
    </div>
  </div>
  <a href="#81702" class="name">
  <strong class="user"><em>Kai Kunstmann</em></strong></a><a class="genanchor" href="#81702"> &para;</a><div class="date" title="2008-03-10 05:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81702">
<div class="phpcode"><code><span class="html">Since unset() is a language construct, it cannot be passed anything other than a variable. It's sole purpose is to "unset" this variable, ie. to remove it from the current scope and destroy it's associated data. This is true especially for reference variables, where not the actual value is destroyed but the reference to that value. This is why you can't wrap 'unset()' in a user defined function: You would either unset a copy of the data if the parameter is passed by value, or you would just unset the reference variable within the functions scope if the parameter is passed by reference. There is no workaround for that, as you cannot pass 'scope' to a function in PHP. Such a function can only work for variables that exist in a common or global scope (compare 'unset($_GLOBALS[variable])').<br /><br />I don't know how PHP handles garbage collection internally, but I guess this behavior can result in a huge memory leak: if a value variable goes out of scope with a second variable still holding a reference to the in-memory value, then unsetting that reference would still hold the value in memory but potentially unset the last reference to that in-memory data, hence: occupied memory that is rendered useless as you cannot reference it anymore.</span></code></div>
  </div>
 </div>
  <div class="note" id="99607">  <div class="votes">
    <div id="Vu99607">
    <a href="/manual/vote-note.php?id=99607&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99607">
    <a href="/manual/vote-note.php?id=99607&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99607" title="54% like this...">
    38
    </div>
  </div>
  <a href="#99607" class="name">
  <strong class="user"><em>j dot vd dot merwe at enovision dot net</em></strong></a><a class="genanchor" href="#99607"> &para;</a><div class="date" title="2010-08-26 05:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99607">
<div class="phpcode"><code><span class="html">A sample how to unset array elements from an array result coming from a mysql request. In this sample it is checking if a file exists and removes the row from the array if it not exists.<br /><br /><span class="default">&lt;?php<br />$db</span><span class="keyword">-&gt;</span><span class="default">set_query</span><span class="keyword">(</span><span class="string">"select * from documents where document_in_user = 0"</span><span class="keyword">); </span><span class="comment">//1  <br /></span><span class="default">$documents </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">result_to_array</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">()); </span><span class="comment">//1<br /><br /></span><span class="keyword">foreach (</span><span class="default">$documents </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$row</span><span class="keyword">) { </span><span class="comment">//2<br /><br />    </span><span class="default">$file     </span><span class="keyword">= </span><span class="string">"uploads/"</span><span class="keyword">.</span><span class="default">rawurldecode</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'document_name'</span><span class="keyword">]);<br />  <br />    if ( </span><span class="default">file_exists </span><span class="keyword">( </span><span class="default">$file </span><span class="keyword">) == </span><span class="default">FALSE </span><span class="keyword">) {<br />         unset(</span><span class="default">$documents</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);  </span><span class="comment">//3<br />    </span><span class="keyword">}  <br />}<br /><br /></span><span class="default">$documents </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$documents</span><span class="keyword">); </span><span class="comment">// reindex the array (4)<br /></span><span class="default">?&gt;<br /></span><br />variables:<br />mysql table = documents,<br />array = $documents<br />array key (index) = $key<br />array row (record sort of speak) = $row<br /><br />explanation:<br /><br />1. <br />it gets the array from the table (mysql)<br /><br />2. <br />foreach goes through the array $documents<br /><br />3. <br />unset if record does not exist<br /><br />4.<br />the array_values($documents) reindexes the $documents array, for otherwise you might end up in trouble when your  process will start expecting an array starting with key ($key) 0 (zero).</span></code></div>
  </div>
 </div>
  <div class="note" id="50382">  <div class="votes">
    <div id="Vu50382">
    <a href="/manual/vote-note.php?id=50382&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50382">
    <a href="/manual/vote-note.php?id=50382&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50382" title="54% like this...">
    33
    </div>
  </div>
  <a href="#50382" class="name">
  <strong class="user"><em>franckraynal at free dot fr</em></strong></a><a class="genanchor" href="#50382"> &para;</a><div class="date" title="2005-02-26 05:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50382">
<div class="phpcode"><code><span class="html">Here is another way to make 'unset' work with session variables from within a function : <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unsetSessionVariable </span><span class="keyword">(</span><span class="default">$sessionVariableName</span><span class="keyword">) {<br />   unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">_SESSION</span><span class="keyword">][</span><span class="default">$sessionVariableName</span><span class="keyword">]);<br />}<br /></span><span class="default">?&gt;<br /></span><br />May it work with others than me...<br />F.</span></code></div>
  </div>
 </div>
  <div class="note" id="40539">  <div class="votes">
    <div id="Vu40539">
    <a href="/manual/vote-note.php?id=40539&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40539">
    <a href="/manual/vote-note.php?id=40539&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40539" title="54% like this...">
    32
    </div>
  </div>
  <a href="#40539" class="name">
  <strong class="user"><em>andre at twg dot com dot au</em></strong></a><a class="genanchor" href="#40539"> &para;</a><div class="date" title="2004-03-06 09:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40539">
<div class="phpcode"><code><span class="html">Only This works with register_globals being 'ON'.<br /><br />unset( $_SESSION['variable'] );<br /><br />The above will not work with register_globals turned on (will only work outside of a function).<br /><br />$variable = $_SESSION['variable'];<br />unset( $_SESSION['variable'], $variable );<br /><br />The above will work with register_globals on &amp; inside a function</span></code></div>
  </div>
 </div>
  <div class="note" id="72389">  <div class="votes">
    <div id="Vu72389">
    <a href="/manual/vote-note.php?id=72389&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72389">
    <a href="/manual/vote-note.php?id=72389&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72389" title="53% like this...">
    28
    </div>
  </div>
  <a href="#72389" class="name">
  <strong class="user"><em>hessodreamy at gmail dot com</em></strong></a><a class="genanchor" href="#72389"> &para;</a><div class="date" title="2007-01-17 03:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72389">
<div class="phpcode"><code><span class="html">To clarify what hugo dot dworak at gmail dot com said about unsetting things that aren't already set:<br /><br />unsetting a non-existent key within an array does NOT throw an error.<br />&lt;?<br />$array = array();<br /><br />unset($array[2]);<br />//this does not throw an error<br /><br />unset($array[$undefinedVar]);<br />//Throws an error because of the undefined variable, not because of a non-existent key.<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="44184">  <div class="votes">
    <div id="Vu44184">
    <a href="/manual/vote-note.php?id=44184&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44184">
    <a href="/manual/vote-note.php?id=44184&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44184" title="53% like this...">
    26
    </div>
  </div>
  <a href="#44184" class="name">
  <strong class="user"><em>anon at no spam dot no address dot com</em></strong></a><a class="genanchor" href="#44184"> &para;</a><div class="date" title="2004-07-16 09:19"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44184">
<div class="phpcode"><code><span class="html">Adding on to what bond at noellebond dot com said, if you want to remove an index from the end of the array, if you use unset, the next index value will still be what it would have been.<br /><br />Eg you have <br /><span class="default">&lt;?php<br /> $x </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br /> for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br /> {<br />    unset(</span><span class="default">$x</span><span class="keyword">[(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">)]); </span><span class="comment">//remove last set key in the array<br /><br />    </span><span class="default">$x</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br /> }<br /></span><span class="default">?&gt;<br /></span><br />You would expect:<br />Array([0] =&gt; 1, [1] =&gt; 4)<br />as you want it to remove the last set key....<br /><br />but you actually get<br />Array ( [0] =&gt; 1 [4] =&gt; 2 [5] =&gt; 3 [6] =&gt; 4 ) <br /><br />This is since even though the last key is removed, the auto indexing still keeps its previous value.<br /><br />The only time where this would not seem right is when you remove a value off the end. I guess different people would want it different ways.<br /><br />The way around this is to use array_pop() instead of unset() as array_pop() refreshes the autoindexing thing for the array.<br /><span class="default">&lt;?php<br /> $x </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br /> for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br /> {<br />    </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// removes the last item in the array<br /><br />    </span><span class="default">$x</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br /> }<br /></span><span class="default">?&gt;<br /></span><br /> This returns the expected value of x = Array([0] =&gt; 1, [1] =&gt; 4);<br /><br />Hope this helps someone who may need this for some odd reason, I did.</span></code></div>
  </div>
 </div>
  <div class="note" id="105980">  <div class="votes">
    <div id="Vu105980">
    <a href="/manual/vote-note.php?id=105980&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105980">
    <a href="/manual/vote-note.php?id=105980&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105980" title="52% like this...">
    21
    </div>
  </div>
  <a href="#105980" class="name">
  <strong class="user"><em>pfreilly at umd dot umich dot edu</em></strong></a><a class="genanchor" href="#105980"> &para;</a><div class="date" title="2011-09-29 04:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105980">
<div class="phpcode"><code><span class="html">Despite much searching, I have not yet found an explanation as to how one can manually free resources from variables, not so much objects, in PHP.  I have also seen many comments regarding the merits and demerits of unset() versus setting a variable to null.  Thus, here are the results of some benchmarks performed comparing unset() of numerous variables to setting them to null (with regards to memory usage and processing time):<br /><br />10 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 1.0013580322266E-5<br /><br />Null set:<br />Memory Usage: 1736<br />Time Elapsed: 5.9604644775391E-6<br /><br />50 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 3.6001205444336E-5<br /><br />Null set:<br />Memory Usage: 8328<br />Time Elapsed: 3.2901763916016E-5<br /><br />100 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 5.6982040405273E-5<br /><br />Null set:<br />Memory Usage: 15928<br />Time Elapsed: 5.8174133300781E-5<br /><br />1000 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 0.00041294097900391<br /><br />Null set:<br />Memory Usage: 168096<br />Time Elapsed: 0.00067591667175293<br /><br />10000 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 0.0042569637298584<br /><br />Null set:<br />Memory Usage: 1650848<br />Time Elapsed: 0.0076930522918701<br /><br />100000 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 0.042603969573975<br /><br />Null set:<br />Memory Usage: 16249080<br />Time Elapsed: 0.087724924087524<br /><br />300000 variables:<br />Unset:<br />Memory Usage: 296<br />Time Elapsed: 0.13177299499512<br /><br />Null set:<br />Memory Usage: 49796320<br />Time Elapsed: 0.28617882728577<br /><br />Perhaps my test code for the null set was flawed, but despite that possibility it is simple to see that unset() has minimal processing time impact, and no apparent memory usage impact (unless the values returned by memory_get_usage() are flawed).  If you truly care about the ~4 microseconds saved over &lt;50 variables, more power to you.  Otherwise, use unset() to minimize script impact on your system.<br />Note: Tested on PHP 5.3.8 installed via RPM on Fedora 14</span></code></div>
  </div>
 </div>
  <div class="note" id="56661">  <div class="votes">
    <div id="Vu56661">
    <a href="/manual/vote-note.php?id=56661&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56661">
    <a href="/manual/vote-note.php?id=56661&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56661" title="52% like this...">
    17
    </div>
  </div>
  <a href="#56661" class="name">
  <strong class="user"><em>clark at everettsconsulting dot com</em></strong></a><a class="genanchor" href="#56661"> &para;</a><div class="date" title="2005-09-11 12:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56661">
<div class="phpcode"><code><span class="html">In PHP 5.0.4, at least, one CAN unset array elements inside functions from arrays passed by reference to the function.<br />As implied by the manual, however, one can't unset the entire array by passing it by reference.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">remove_variable </span><span class="keyword">(&amp;</span><span class="default">$variable</span><span class="keyword">)  </span><span class="comment">// pass variable by reference<br /></span><span class="keyword">{<br />    unset(</span><span class="default">$variable</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">remove_element </span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) </span><span class="comment">// pass array by reference<br /></span><span class="keyword">{<br />    unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">$scalar </span><span class="keyword">= </span><span class="string">'Hello, there'</span><span class="keyword">;<br />echo </span><span class="string">'Value of $scalar is: '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$scalar</span><span class="keyword">); echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="comment">// Value of $scalar is: Hello, there<br /><br /></span><span class="default">remove_variable</span><span class="keyword">(</span><span class="default">$scalar</span><span class="keyword">); </span><span class="comment">// try to unset the variable<br /></span><span class="keyword">echo </span><span class="string">'Value of $scalar is: '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$scalar</span><span class="keyword">); echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="comment">// Value of $scalar is: Hello, there<br /><br /></span><span class="default">$array </span><span class="keyword">= array(</span><span class="string">'one' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="string">'Value of $array is: '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="comment">// Value of $array is: Array ( [one] =&gt; 1 [two] =&gt; 2 [three] =&gt; 3 )<br /><br /></span><span class="default">remove_variable</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// try to unset the array<br /></span><span class="keyword">echo </span><span class="string">'Value of $array is: '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="comment">// Value of $array is: Array ( [one] =&gt; 1 [two] =&gt; 2 [three] =&gt; 3 )<br /><br /></span><span class="default">remove_element</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">); </span><span class="comment">// successfully remove an element from the array<br /></span><span class="keyword">echo </span><span class="string">'Value of $array is: '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="comment">// Value of $array is: Array ( [one] =&gt; 1 [three] =&gt; 3 )<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129825">  <div class="votes">
    <div id="Vu129825">
    <a href="/manual/vote-note.php?id=129825&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129825">
    <a href="/manual/vote-note.php?id=129825&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129825" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129825" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129825"> &para;</a><div class="date" title="2024-10-28 07:51"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129825">
<div class="phpcode"><code><span class="html">I couldn't find this clarification elsewhere in the notes, but it seems important, so at the risk of duplication.... <br /><br />While a global variable, like a whole array, is not unset from within a function, an element of the array, is unset. So<br /><br />&lt;?<br />function myfunction(){<br />      Global $test;<br />      unset($test[1]);<br />      print_r($test);<br />      unset($test)<br />      }<br /><br />     $test = array(1,2,3);<br />     myfunction();<br />     print_r($test);<br />?&gt;<br /><br />Produces:<br /><br />Array ( [0] =&gt; 1 [2] =&gt; 3 )   # from inside myfunction<br />Array ( [0] =&gt; 1 [2] =&gt; 3 )   # on return from myfunction</span></code></div>
  </div>
 </div>
  <div class="note" id="96430">  <div class="votes">
    <div id="Vu96430">
    <a href="/manual/vote-note.php?id=96430&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96430">
    <a href="/manual/vote-note.php?id=96430&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96430" title="51% like this...">
    11
    </div>
  </div>
  <a href="#96430" class="name">
  <strong class="user"><em>phpmanual at kennel17 dot co dot uk</em></strong></a><a class="genanchor" href="#96430"> &para;</a><div class="date" title="2010-02-26 08:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96430">
<div class="phpcode"><code><span class="html">Note that PHP 4 will generate a warning if you try to unset an array index that doesn't exist and whose parent doesn't exist.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br />  $foo </span><span class="keyword">= array();<br /><br />  unset(</span><span class="default">$foo</span><span class="keyword">[</span><span class="string">'Bar'</span><span class="keyword">][</span><span class="string">'Baz'</span><span class="keyword">]);<br /><br /></span><span class="default">?&gt;<br /></span><br />RESULT: "Notice:  Undefined index:  Bar"<br /><br />On PHP5 no error is raised, which seems to me like the correct behaviour.<br /><br />Note that using unset($foo['Bar']) in the above example does not generate a warning in either version.<br /><br />(Tested on 4.4.9 and 5.2.4)</span></code></div>
  </div>
 </div>
  <div class="note" id="73117">  <div class="votes">
    <div id="Vu73117">
    <a href="/manual/vote-note.php?id=73117&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73117">
    <a href="/manual/vote-note.php?id=73117&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73117" title="51% like this...">
    10
    </div>
  </div>
  <a href="#73117" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#73117"> &para;</a><div class="date" title="2007-02-09 08:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73117">
<div class="phpcode"><code><span class="html">Just to confirm, USING UNSET CAN DESTROY AN ENTIRE ARRAY. I couldn't find reference to this anywhere so I decided to write this. <br /><br />The difference between using unset and using $myarray=array(); to unset is that obviously the array will just be overwritten and will still exist.<br /><br /><span class="default">&lt;?php<br /><br />$myarray</span><span class="keyword">=array(</span><span class="string">"Hello"</span><span class="keyword">,</span><span class="string">"World"</span><span class="keyword">);<br /><br />echo </span><span class="default">$myarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="default">$myarray</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br />unset(</span><span class="default">$myarray</span><span class="keyword">);<br /></span><span class="comment">//$myarray=array();<br /><br /></span><span class="keyword">echo </span><span class="default">$myarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="default">$myarray</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br />echo </span><span class="default">$myarray</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Output with unset is:<br />&lt;?<br />HelloWorld<br /><br />Notice: Undefined offset: 0 in C:\webpages\dainsider\myarray.php on line 10<br /><br />Notice: Undefined offset: 1 in C:\webpages\dainsider\myarray.php on line 10<br /><br />Output with $myarray=array(); is:<br />?&gt;<br /><br />&lt;?<br />HelloWorld<br /><br />Notice: Undefined offset: 0 in C:\webpages\dainsider\myarray.php on line 10<br /><br />Notice: Undefined offset: 1 in C:\webpages\dainsider\myarray.php on line 10<br /><br />Array<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="47157">  <div class="votes">
    <div id="Vu47157">
    <a href="/manual/vote-note.php?id=47157&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47157">
    <a href="/manual/vote-note.php?id=47157&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47157" title="51% like this...">
    11
    </div>
  </div>
  <a href="#47157" class="name">
  <strong class="user"><em>dan AT --nospam-- cubeland DOT co DOT uk</em></strong></a><a class="genanchor" href="#47157"> &para;</a><div class="date" title="2004-11-04 11:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47157">
<div class="phpcode"><code><span class="html">dh at argosign dot de - <br />it is possible to unset globals from within functions thanks to the $GLOBALS array:<br /><br /><span class="default">&lt;?php<br />$x </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /><br />function </span><span class="default">test</span><span class="keyword">() {<br />    </span><span class="comment">// don't need to do ' global $x; '<br />    </span><span class="keyword">unset (</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">]);<br />    echo </span><span class="string">'x: ' </span><span class="keyword">. </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] . </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">test</span><span class="keyword">();<br />echo </span><span class="string">"x: </span><span class="default">$x</span><span class="string">&lt;br /&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">// will result in<br />/*<br />x: <br />x:<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81839">  <div class="votes">
    <div id="Vu81839">
    <a href="/manual/vote-note.php?id=81839&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81839">
    <a href="/manual/vote-note.php?id=81839&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81839" title="51% like this...">
    9
    </div>
  </div>
  <a href="#81839" class="name">
  <strong class="user"><em>pauljamescampbell at gmail dot com</em></strong></a><a class="genanchor" href="#81839"> &para;</a><div class="date" title="2008-03-15 05:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81839">
<div class="phpcode"><code><span class="html">Here's my variation on the slightly dull unset method. It throws in a bit of 80's Stallone action spice into the mix. Enjoy!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * function rambo (first blood)<br /> *<br /> * Completely and utterly destroys everything, returning the kill count of victims<br /> *<br /> * @param    It don't matter, it’s Rambo baby<br /> * @return    Integer    Body count (but any less than 500 and it's not really worth mentioning)<br /> */<br /></span><span class="keyword">function </span><span class="default">rambo</span><span class="keyword">() {<br /><br />    </span><span class="comment">// Get the victims and initiate that body count status<br />    </span><span class="default">$victims </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$body_count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;    <br />    <br />    </span><span class="comment">// Kill those damn punks<br />    </span><span class="keyword">foreach(</span><span class="default">$victims </span><span class="keyword">as </span><span class="default">$victim</span><span class="keyword">) {<br />        if(</span><span class="default">$death_and_suffering </span><span class="keyword">= @unset(</span><span class="default">$victim</span><span class="keyword">)) {<br />            </span><span class="default">$body_count</span><span class="keyword">++;<br />        }<br />    }<br />    <br />    </span><span class="comment">// How many kills did Rambo tally up on this mission?<br />    </span><span class="keyword">return(</span><span class="default">$body_count</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44412">  <div class="votes">
    <div id="Vu44412">
    <a href="/manual/vote-note.php?id=44412&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44412">
    <a href="/manual/vote-note.php?id=44412&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44412" title="51% like this...">
    10
    </div>
  </div>
  <a href="#44412" class="name">
  <strong class="user"><em>thorry at thorry dot net</em></strong></a><a class="genanchor" href="#44412"> &para;</a><div class="date" title="2004-08-05 02:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44412">
<div class="phpcode"><code><span class="html">The documentation is not entirely clear when it comes to static variables. It says:<br /><br />If a static variable is unset() inside of a function, unset() destroys the variable and all its references. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">() <br />{<br />   static </span><span class="default">$a</span><span class="keyword">;<br />   </span><span class="default">$a</span><span class="keyword">++;<br />   echo </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />   unset(</span><span class="default">$a</span><span class="keyword">);<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">?&gt;</span>  <br /><br />The above example would output: <br /><br />1<br />2<br />3<br /><br />And it does! But the variable is NOT deleted, that's why the value keeps on increasing, otherwise the output would be:<br /><br />1<br />1<br />1 <br /><br />The references are destroyed within the function, this handeling is the same as with global variables, the difference is a static variable is a local variable.<br /><br />Be carefull using unset and static values as the output may not be what you expect it to be. It appears to be impossible to destroy a static variable. You can only destroy the references within the current executing function, a successive static statement will restore the references.<br /><br />The documentation would be better if it would say:<br />"If a static variable is unset() inside of a function, unset() destroys all references to the variable. "<br /><br />Example: (tested PHP 4.3.7)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">() <br />{<br />   static </span><span class="default">$a</span><span class="keyword">;<br />   </span><span class="default">$a</span><span class="keyword">++;<br />   echo </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />   unset(</span><span class="default">$a</span><span class="keyword">);<br />   echo </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />   static </span><span class="default">$a</span><span class="keyword">;    <br />   echo </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">?&gt;</span> <br /><br />Would output:<br /><br />1<br /><br />1<br />2<br /><br />2<br />3<br /><br />3</span></code></div>
  </div>
 </div>
  <div class="note" id="86954">  <div class="votes">
    <div id="Vu86954">
    <a href="/manual/vote-note.php?id=86954&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86954">
    <a href="/manual/vote-note.php?id=86954&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86954" title="50% like this...">
    7
    </div>
  </div>
  <a href="#86954" class="name">
  <strong class="user"><em>lion_cat at mail ru</em></strong></a><a class="genanchor" href="#86954"> &para;</a><div class="date" title="2008-11-12 02:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86954">
<div class="phpcode"><code><span class="html">about unset for arrays<br /><br />if you unset the last array member <br />$ar[0]==2<br />$ar[1]==7<br />$ar[2]==9<br /><br />unset ($ar[2])<br /><br />after addition a new member by $ar[]=7,<br /><br />you will get <br />$ar[0]==2<br />$ar[1]==7<br />$ar[3]==7,<br /><br />So, unset has no effect to internal array counter!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="39397">  <div class="votes">
    <div id="Vu39397">
    <a href="/manual/vote-note.php?id=39397&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39397">
    <a href="/manual/vote-note.php?id=39397&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39397" title="51% like this...">
    9
    </div>
  </div>
  <a href="#39397" class="name">
  <strong class="user"><em>warhog at warhog dot net</em></strong></a><a class="genanchor" href="#39397"> &para;</a><div class="date" title="2004-01-27 08:52"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39397">
<div class="phpcode"><code><span class="html">you may wan't to unset all variables which are defined, here's one way:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">unset_all_vars</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)<br />{ foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />  { unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]); }<br />  return </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); }<br /><br /></span><span class="default">unset_all_vars</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">());<br /><br /></span><span class="default">?&gt;<br /></span><br />you can also save than a serialized var of the "memory" and perhaps store this in a temporary file.. very usefull if you work with text files and/or file uploads when you've got very large variables.<br /><br />greetz</span></code></div>
  </div>
 </div>
  <div class="note" id="98719">  <div class="votes">
    <div id="Vu98719">
    <a href="/manual/vote-note.php?id=98719&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98719">
    <a href="/manual/vote-note.php?id=98719&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98719" title="50% like this...">
    4
    </div>
  </div>
  <a href="#98719" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98719"> &para;</a><div class="date" title="2010-07-02 07:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98719">
<div class="phpcode"><code><span class="html">further I realized that an object, when getting detroyed, does care about destroying variable in object space visibility but not those in local visibility, be aware of the found pattern:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">release_test</span><span class="keyword">{
<br />  private </span><span class="default">$buffer</span><span class="keyword">;
<br />  private </span><span class="default">$other_object</span><span class="keyword">;
<br />  public function </span><span class="default">__construct</span><span class="keyword">(){
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">other_object</span><span class="keyword">=new </span><span class="default">other_object_class</span><span class="keyword">();
<br />  }
<br />  public function </span><span class="default">__destruct</span><span class="keyword">(){
<br />    </span><span class="comment">//note that you always have to unset class objects, in order to get the resources released
<br />    </span><span class="keyword">unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">other_object</span><span class="keyword">);
<br />  }
<br />  public </span><span class="default">allocate_mem_A</span><span class="keyword">(){
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">=</span><span class="default">file</span><span class="keyword">(</span><span class="string">"/tmp/bigfile"</span><span class="keyword">);
<br />  }
<br />  public </span><span class="default">allocate_mem_B</span><span class="keyword">(){
<br />    </span><span class="default">$buffer</span><span class="keyword">=</span><span class="default">file</span><span class="keyword">(</span><span class="string">"/tmp/bigfile"</span><span class="keyword">);
<br />  }
<br />  public </span><span class="default">allocate_mem_C</span><span class="keyword">(){
<br />    </span><span class="default">$buffer</span><span class="keyword">=</span><span class="default">file</span><span class="keyword">(</span><span class="string">"/tmp/bigfile"</span><span class="keyword">);
<br />    unset(</span><span class="default">$buffer</span><span class="keyword">);
<br />  }
<br />  public </span><span class="default">allocate_mem_D</span><span class="keyword">(){
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">other_buffer</span><span class="keyword">=</span><span class="default">file</span><span class="keyword">(</span><span class="string">"/tmp/bigfile"</span><span class="keyword">);
<br />  }
<br />}
<br />
<br /></span><span class="comment">//this does not lead to a resource problem
<br /></span><span class="default">$A</span><span class="keyword">=new </span><span class="default">release_test</span><span class="keyword">();
<br /></span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">allocate_mem_A</span><span class="keyword">();
<br /></span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">__destruct</span><span class="keyword">();
<br />unset(</span><span class="default">$A</span><span class="keyword">);
<br />
<br /></span><span class="comment">//this DOES lead to a resource problem
<br /></span><span class="default">$B</span><span class="keyword">=new </span><span class="default">release_test</span><span class="keyword">();
<br /></span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">allocate_mem_B</span><span class="keyword">();
<br /></span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">__destruct</span><span class="keyword">();
<br />unset(</span><span class="default">$B</span><span class="keyword">);
<br />
<br /></span><span class="comment">//this does not lead to a resource problem
<br /></span><span class="default">$C</span><span class="keyword">=new </span><span class="default">release_test</span><span class="keyword">();
<br /></span><span class="default">$C</span><span class="keyword">-&gt;</span><span class="default">allocate_mem_C</span><span class="keyword">();
<br /></span><span class="default">$C</span><span class="keyword">-&gt;</span><span class="default">__destruct</span><span class="keyword">();
<br />unset(</span><span class="default">$C</span><span class="keyword">);
<br />
<br /></span><span class="comment">//this does not lead to a resource problem
<br /></span><span class="default">$D</span><span class="keyword">=new </span><span class="default">release_test</span><span class="keyword">();
<br /></span><span class="default">$D</span><span class="keyword">-&gt;</span><span class="default">allocate_mem_D</span><span class="keyword">();
<br /></span><span class="default">$D</span><span class="keyword">-&gt;</span><span class="default">__destruct</span><span class="keyword">();
<br />unset(</span><span class="default">$D</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100096">  <div class="votes">
    <div id="Vu100096">
    <a href="/manual/vote-note.php?id=100096&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100096">
    <a href="/manual/vote-note.php?id=100096&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100096" title="50% like this...">
    4
    </div>
  </div>
  <a href="#100096" class="name">
  <strong class="user"><em>edouard dot berge at gmail dot com</em></strong></a><a class="genanchor" href="#100096"> &para;</a><div class="date" title="2010-09-24 09:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100096">
<div class="phpcode"><code><span class="html">Warning!<br /><br />When unset from an array, if you unset all elements, the array is always set<br /><br />$tab=array('A'=&gt;1,'B'=&gt;2);<br />unset($tab['A']);<br />unset($tab['B']);<br />echo isset($tab)." ".count($tab);<br /><br />output: 1 0</span></code></div>
  </div>
 </div>
  <div class="note" id="81882">  <div class="votes">
    <div id="Vu81882">
    <a href="/manual/vote-note.php?id=81882&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81882">
    <a href="/manual/vote-note.php?id=81882&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81882" title="50% like this...">
    3
    </div>
  </div>
  <a href="#81882" class="name">
  <strong class="user"><em>stacionari at gmail dot com</em></strong></a><a class="genanchor" href="#81882"> &para;</a><div class="date" title="2008-03-17 01:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81882">
<div class="phpcode"><code><span class="html">Sometimes you need to assigne values to an array index in some loop (if, while, foreach etc.) but you wish to set starting index key to some number greater then zero (lets say 5). One idea how to do this is:<br /><br /><span class="default">&lt;?php<br />    $values </span><span class="keyword">= array(</span><span class="default">5</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);  </span><span class="comment">//array of values that we wish to add to our new array<br />    <br />    </span><span class="default">$myArray </span><span class="keyword">= array(</span><span class="default">4</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">);   </span><span class="comment">//sets starting key to be 4 and assigns some value (lets say 0) <br />    </span><span class="keyword">unset(</span><span class="default">$myArray</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]);   </span><span class="comment">//delete this index key, but preserves further enumeration <br />    <br />    </span><span class="keyword">foreach(</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$myArray</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;   </span><span class="comment">//asign values to our array<br />    </span><span class="keyword">}<br />    <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br /><br /></span><span class="comment">/* Output:<br /><br />Array ( [5] =&gt; 5 [6] =&gt; 10 [7] =&gt; 15 [8] =&gt; 100 ) <br /><br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77310">  <div class="votes">
    <div id="Vu77310">
    <a href="/manual/vote-note.php?id=77310&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77310">
    <a href="/manual/vote-note.php?id=77310&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77310" title="50% like this...">
    3
    </div>
  </div>
  <a href="#77310" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#77310"> &para;</a><div class="date" title="2007-08-23 09:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77310">
<div class="phpcode"><code><span class="html">In regard to some confusion earlier in these notes about what causes unset() to trigger notices when unsetting variables that don't exist....<br /><br />Unsetting variables that don't exist, as in <br /><span class="default">&lt;?php<br /></span><span class="keyword">unset(</span><span class="default">$undefinedVariable</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>does not trigger an "Undefined variable" notice. But<br /><span class="default">&lt;?php<br /></span><span class="keyword">unset(</span><span class="default">$undefinedArray</span><span class="keyword">[</span><span class="default">$undefinedKey</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span>triggers two notices, because this code is for unsetting an element of an array; neither $undefinedArray nor $undefinedKey are themselves being unset, they're merely being used to locate what should be unset. After all, if they did exist, you'd still expect them to both be around afterwards. You would NOT want your entire array to disappear just because you unset() one of its elements!</span></code></div>
  </div>
 </div>
  <div class="note" id="63833">  <div class="votes">
    <div id="Vu63833">
    <a href="/manual/vote-note.php?id=63833&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63833">
    <a href="/manual/vote-note.php?id=63833&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63833" title="50% like this...">
    4
    </div>
  </div>
  <a href="#63833" class="name">
  <strong class="user"><em>dibakar dot datta at gmail dot com</em></strong></a><a class="genanchor" href="#63833"> &para;</a><div class="date" title="2006-03-31 11:31"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63833">
<div class="phpcode"><code><span class="html">Instead of using the unset function  for unregistering your session or other array values you can also do this samll feature and get this task done with just 1 line code.<br /><br />Suppose, if you like to unregister your session store values.<br />You can use:<br /> <br />      $_SESSION = array();<br /><br />Well this syntax saves lot's of time instead of unsetting each values.</span></code></div>
  </div>
 </div>
  <div class="note" id="89881">  <div class="votes">
    <div id="Vu89881">
    <a href="/manual/vote-note.php?id=89881&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89881">
    <a href="/manual/vote-note.php?id=89881&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89881" title="50% like this...">
    1
    </div>
  </div>
  <a href="#89881" class="name">
  <strong class="user"><em>macnimble at gmail dot com</em></strong></a><a class="genanchor" href="#89881"> &para;</a><div class="date" title="2009-03-26 02:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89881">
<div class="phpcode"><code><span class="html">Two ways of unsetting values within an array:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># remove by key:<br /></span><span class="keyword">function </span><span class="default">array_remove_key </span><span class="keyword">()<br />{<br />  </span><span class="default">$args  </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />  return </span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)));<br />}<br /></span><span class="comment"># remove by value:<br /></span><span class="keyword">function </span><span class="default">array_remove_value </span><span class="keyword">()<br />{<br />  </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />  return </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />}<br /><br /></span><span class="default">$fruit_inventory </span><span class="keyword">= array(<br />  </span><span class="string">'apples' </span><span class="keyword">=&gt; </span><span class="default">52</span><span class="keyword">,<br />  </span><span class="string">'bananas' </span><span class="keyword">=&gt; </span><span class="default">78</span><span class="keyword">,<br />  </span><span class="string">'peaches' </span><span class="keyword">=&gt; </span><span class="string">'out of season'</span><span class="keyword">,<br />  </span><span class="string">'pears' </span><span class="keyword">=&gt; </span><span class="string">'out of season'</span><span class="keyword">,<br />  </span><span class="string">'oranges' </span><span class="keyword">=&gt; </span><span class="string">'no longer sold'</span><span class="keyword">,<br />  </span><span class="string">'carrots' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">,<br />  </span><span class="string">'beets' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">,<br />);<br /><br />echo </span><span class="string">"&lt;pre&gt;Original Array:\n"</span><span class="keyword">,<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fruit_inventory</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">),<br />     </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment"># For example, beets and carrots are not fruits...<br /></span><span class="default">$fruit_inventory </span><span class="keyword">= </span><span class="default">array_remove_key</span><span class="keyword">(</span><span class="default">$fruit_inventory</span><span class="keyword">,<br />                                    </span><span class="string">"beets"</span><span class="keyword">,<br />                                    </span><span class="string">"carrots"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;pre&gt;Array after key removal:\n"</span><span class="keyword">,<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fruit_inventory</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">),<br />     </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment"># Let's also remove 'out of season' and 'no longer sold' fruit...<br /></span><span class="default">$fruit_inventory </span><span class="keyword">= </span><span class="default">array_remove_value</span><span class="keyword">(</span><span class="default">$fruit_inventory</span><span class="keyword">,<br />                                      </span><span class="string">"out of season"</span><span class="keyword">,<br />                                      </span><span class="string">"no longer sold"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;pre&gt;Array after value removal:\n"</span><span class="keyword">,<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fruit_inventory</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">),<br />     </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100090">  <div class="votes">
    <div id="Vu100090">
    <a href="/manual/vote-note.php?id=100090&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100090">
    <a href="/manual/vote-note.php?id=100090&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100090" title="49% like this...">
    -3
    </div>
  </div>
  <a href="#100090" class="name">
  <strong class="user"><em>Andreas</em></strong></a><a class="genanchor" href="#100090"> &para;</a><div class="date" title="2010-09-24 05:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100090">
<div class="phpcode"><code><span class="html">You can not unset a numeric key of an array, if key is a string. See this example:<br /><br />// Create a simple array with 3 different key types<br />$test[1] = array(<br />    10 =&gt; array('apples'),<br />    "20" =&gt; array('bananas'),<br />    '30' =&gt; array('peaches')<br />);<br />$test[2] = (array) json_decode(json_encode($test[1]));<br />$test[3] = (array) (object) $test[1];<br />// array form a stdClass object<br />$testClass = new stdClass();<br />$testClass-&gt;{10} =  array('apples');<br />$testClass-&gt;{"20"} =  array('bananas');<br />$test[4] = (array) $testClass[6];<br /><br />echo "&lt;pre&gt;";<br />foreach($test as $testNum =&gt; $arr) {<br /><br />    echo "\nTest: " . $testNum  . " \n";<br />    var_dump($arr);<br /><br />    foreach($arr as $key =&gt; $fruit) {<br />        echo "key: " . $key . "\n";<br />        echo "key exists: ";<br />        var_dump(array_key_exists(strval($key), $arr));<br />        echo "typeof key is: " . gettype($key) . "\n";<br /><br />        unset($arr[$key]);<br />    }<br />    var_dump($arr);<br />    echo "\n" . str_repeat("-", 80);<br />}<br />echo "&lt;/pre&gt;";<br /><br />And here is the output:<br /><br />Test: 1 <br />array(3) {<br />  [10]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  [20]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />  [30]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "peaches"<br />  }<br />}<br />key: 10<br />key exists: bool(true)<br />typeof key is: integer<br />key: 20<br />key exists: bool(true)<br />typeof key is: integer<br />key: 30<br />key exists: bool(true)<br />typeof key is: integer<br />array(0) {<br />}<br /><br />--------------------------------------------------------------<br />Test: 2 <br />array(3) {<br />  ["10"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  ["20"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />  ["30"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "peaches"<br />  }<br />}<br />key: 10<br />key exists: bool(false)<br />typeof key is: string<br />key: 20<br />key exists: bool(false)<br />typeof key is: string<br />key: 30<br />key exists: bool(false)<br />typeof key is: string<br />array(3) {<br />  ["10"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  ["20"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />  ["30"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "peaches"<br />  }<br />}<br /><br />--------------------------------------------------------------<br />Test: 3 <br />array(3) {<br />  [10]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  [20]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />  [30]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "peaches"<br />  }<br />}<br />key: 10<br />key exists: bool(true)<br />typeof key is: integer<br />key: 20<br />key exists: bool(true)<br />typeof key is: integer<br />key: 30<br />key exists: bool(true)<br />typeof key is: integer<br />array(0) {<br />}<br /><br />--------------------------------------------------------------<br />Test: 4 <br />array(2) {<br />  ["10"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  ["20"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />}<br />key: 10<br />key exists: bool(false)<br />typeof key is: string<br />key: 20<br />key exists: bool(false)<br />typeof key is: string<br />array(2) {<br />  ["10"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(6) "apples"<br />  }<br />  ["20"]=&gt;<br />  array(1) {<br />    [0]=&gt;<br />    string(7) "bananas"<br />  }<br />}<br /><br />--------------------------------------------------------------<br /><br />Fix the problem with a rebuild of the array:<br />$oldArray = $array();<br />$array = array();<br />foreach($oldArray as $key =&gt; $item) {<br />    $array[intval($key)] = $item;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="75464">  <div class="votes">
    <div id="Vu75464">
    <a href="/manual/vote-note.php?id=75464&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75464">
    <a href="/manual/vote-note.php?id=75464&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75464" title="49% like this...">
    -3
    </div>
  </div>
  <a href="#75464" class="name">
  <strong class="user"><em>chad 0x40 herballure 0x2e com</em></strong></a><a class="genanchor" href="#75464"> &para;</a><div class="date" title="2007-05-31 07:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75464">
<div class="phpcode"><code><span class="html">It is observed on PHP 5.1.6 that <span class="default">&lt;?php </span><span class="keyword">unset(</span><span class="default">$this</span><span class="keyword">); </span><span class="default">?&gt;</span> inside of a method will remove the reference to $this in that method. $this isn't considered "special" as far as unset() is concerned.</span></code></div>
  </div>
 </div>
  <div class="note" id="114669">  <div class="votes">
    <div id="Vu114669">
    <a href="/manual/vote-note.php?id=114669&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114669">
    <a href="/manual/vote-note.php?id=114669&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114669" title="46% like this...">
    -4
    </div>
  </div>
  <a href="#114669" class="name">
  <strong class="user"><em>magnesium dot oxide dot play+php at gmail dot com</em></strong></a><a class="genanchor" href="#114669"> &para;</a><div class="date" title="2014-03-20 08:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114669">
<div class="phpcode"><code><span class="html">You can unset superglobals like $GLOBALS, $_GET etc., but causing an unususal behavior (as of PHP 5.3.3).<br /><br />1) unsetting of superglobals is done globally, i.e. unsetting inside the function affects GLOBALLY.<br /><br />2) Recreation of unset'ed superglobals can be done (recreated valiables are superglobals), but original functionality (in $GLOBALS, $_SESSION ...) has lost.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(){<br />  unset(</span><span class="default">$GLOBALS</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">bar</span><span class="keyword">(){<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">);<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">bar</span><span class="keyword">(); </span><span class="comment">//issues E_NOTICE ($GLOBALS not defined)<br /></span><span class="default">$GLOBALS</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">bar</span><span class="keyword">(); </span><span class="comment">//displays int(3)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124680">  <div class="votes">
    <div id="Vu124680">
    <a href="/manual/vote-note.php?id=124680&amp;page=function.unset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124680">
    <a href="/manual/vote-note.php?id=124680&amp;page=function.unset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124680" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#124680" class="name">
  <strong class="user"><em>ronan at shopping-feed dot com</em></strong></a><a class="genanchor" href="#124680"> &para;</a><div class="date" title="2020-02-04 08:19"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124680">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />$list </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">];<br /></span><span class="default">next</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">);<br />unset(</span><span class="default">$list</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />echo </span><span class="default">current</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">); </span><span class="comment">// result : "c"</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.unset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unset.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="current">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
