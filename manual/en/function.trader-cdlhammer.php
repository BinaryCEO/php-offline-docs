<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: trader_cdlhammer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.trader-cdlhammer.php">
 <link rel="shorturl" href="https://www.php.net/trader-cdlhammer">
 <link rel="alternate" href="https://www.php.net/trader-cdlhammer" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.trader.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.trader-cdlgravestonedoji.php">
 <link rel="next" href="https://www.php.net/manual/en/function.trader-cdlhangingman.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.trader-cdlhammer.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.trader-cdlhammer.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.trader-cdlhammer.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.trader-cdlhammer.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.trader-cdlhammer.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.trader-cdlhammer.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.trader-cdlhammer.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.trader-cdlhammer.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.trader-cdlhammer.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.trader-cdlhammer.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.trader-cdlhammer.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Hammer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: trader_cdlhammer - Manual" />
<meta name="twitter:description" content="Hammer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: trader_cdlhammer - Manual" />
<meta itemprop="description" content="Hammer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Hammer" />

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
        <a href="function.trader-cdlhangingman.php">
          trader_cdlhangingman &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.trader-cdlgravestonedoji.php">
          &laquo; trader_cdlgravestonedoji        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.trader.php'>Trader</a></li>      <li><a href='ref.trader.php'>Trader Functions</a></li>      </ul>
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
            <option value='en/function.trader-cdlhammer.php' selected="selected">English</option>
            <option value='de/function.trader-cdlhammer.php'>German</option>
            <option value='es/function.trader-cdlhammer.php'>Spanish</option>
            <option value='fr/function.trader-cdlhammer.php'>French</option>
            <option value='it/function.trader-cdlhammer.php'>Italian</option>
            <option value='ja/function.trader-cdlhammer.php'>Japanese</option>
            <option value='pt_BR/function.trader-cdlhammer.php'>Brazilian Portuguese</option>
            <option value='ru/function.trader-cdlhammer.php'>Russian</option>
            <option value='tr/function.trader-cdlhammer.php'>Turkish</option>
            <option value='uk/function.trader-cdlhammer.php'>Ukrainian</option>
            <option value='zh/function.trader-cdlhammer.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.trader-cdlhammer" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">trader_cdlhammer</h1>
  <p class="verinfo">(PECL trader &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">trader_cdlhammer</span> &mdash; <span class="dc-title">Hammer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.trader-cdlhammer-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>trader_cdlhammer</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$open</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$high</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$low</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$close</code></span><br>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.trader-cdlhammer-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">open</code></dt>
    <dd>
     <p class="para">
      Opening price, array of real values.
     </p>
    </dd>
   
   
    <dt><code class="parameter">high</code></dt>
    <dd>
     <p class="para">
      High price, array of real values.
     </p>
    </dd>
   
   
    <dt><code class="parameter">low</code></dt>
    <dd>
     <p class="para">
      Low price, array of real values.
     </p>
    </dd>
   
   
    <dt><code class="parameter">close</code></dt>
    <dd>
     <p class="para">
      Closing price, array of real values.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.trader-cdlhammer-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">Returns an array with calculated data or false on failure.</p>
 </div>



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/trader/functions/trader-cdlhammer.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.trader-cdlhammer%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.trader-cdlhammer&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.trader-cdlhammer.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.trader.php">Trader Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.trader-acos.php" title="trader_&#8203;acos">trader_&#8203;acos</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ad.php" title="trader_&#8203;ad">trader_&#8203;ad</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-add.php" title="trader_&#8203;add">trader_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-adosc.php" title="trader_&#8203;adosc">trader_&#8203;adosc</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-adx.php" title="trader_&#8203;adx">trader_&#8203;adx</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-adxr.php" title="trader_&#8203;adxr">trader_&#8203;adxr</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-apo.php" title="trader_&#8203;apo">trader_&#8203;apo</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-aroon.php" title="trader_&#8203;aroon">trader_&#8203;aroon</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-aroonosc.php" title="trader_&#8203;aroonosc">trader_&#8203;aroonosc</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-asin.php" title="trader_&#8203;asin">trader_&#8203;asin</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-atan.php" title="trader_&#8203;atan">trader_&#8203;atan</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-atr.php" title="trader_&#8203;atr">trader_&#8203;atr</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-avgprice.php" title="trader_&#8203;avgprice">trader_&#8203;avgprice</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-bbands.php" title="trader_&#8203;bbands">trader_&#8203;bbands</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-beta.php" title="trader_&#8203;beta">trader_&#8203;beta</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-bop.php" title="trader_&#8203;bop">trader_&#8203;bop</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cci.php" title="trader_&#8203;cci">trader_&#8203;cci</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl2crows.php" title="trader_&#8203;cdl2crows">trader_&#8203;cdl2crows</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3blackcrows.php" title="trader_&#8203;cdl3blackcrows">trader_&#8203;cdl3blackcrows</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3inside.php" title="trader_&#8203;cdl3inside">trader_&#8203;cdl3inside</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3linestrike.php" title="trader_&#8203;cdl3linestrike">trader_&#8203;cdl3linestrike</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3outside.php" title="trader_&#8203;cdl3outside">trader_&#8203;cdl3outside</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3starsinsouth.php" title="trader_&#8203;cdl3starsinsouth">trader_&#8203;cdl3starsinsouth</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdl3whitesoldiers.php" title="trader_&#8203;cdl3whitesoldiers">trader_&#8203;cdl3whitesoldiers</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlabandonedbaby.php" title="trader_&#8203;cdlabandonedbaby">trader_&#8203;cdlabandonedbaby</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdladvanceblock.php" title="trader_&#8203;cdladvanceblock">trader_&#8203;cdladvanceblock</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlbelthold.php" title="trader_&#8203;cdlbelthold">trader_&#8203;cdlbelthold</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlbreakaway.php" title="trader_&#8203;cdlbreakaway">trader_&#8203;cdlbreakaway</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlclosingmarubozu.php" title="trader_&#8203;cdlclosingmarubozu">trader_&#8203;cdlclosingmarubozu</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlconcealbabyswall.php" title="trader_&#8203;cdlconcealbabyswall">trader_&#8203;cdlconcealbabyswall</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlcounterattack.php" title="trader_&#8203;cdlcounterattack">trader_&#8203;cdlcounterattack</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdldarkcloudcover.php" title="trader_&#8203;cdldarkcloudcover">trader_&#8203;cdldarkcloudcover</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdldoji.php" title="trader_&#8203;cdldoji">trader_&#8203;cdldoji</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdldojistar.php" title="trader_&#8203;cdldojistar">trader_&#8203;cdldojistar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdldragonflydoji.php" title="trader_&#8203;cdldragonflydoji">trader_&#8203;cdldragonflydoji</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlengulfing.php" title="trader_&#8203;cdlengulfing">trader_&#8203;cdlengulfing</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdleveningdojistar.php" title="trader_&#8203;cdleveningdojistar">trader_&#8203;cdleveningdojistar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdleveningstar.php" title="trader_&#8203;cdleveningstar">trader_&#8203;cdleveningstar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlgapsidesidewhite.php" title="trader_&#8203;cdlgapsidesidewhite">trader_&#8203;cdlgapsidesidewhite</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlgravestonedoji.php" title="trader_&#8203;cdlgravestonedoji">trader_&#8203;cdlgravestonedoji</a>
                        </li>
                                                <li class="current">
                            <a href="function.trader-cdlhammer.php" title="trader_&#8203;cdlhammer">trader_&#8203;cdlhammer</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlhangingman.php" title="trader_&#8203;cdlhangingman">trader_&#8203;cdlhangingman</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlharami.php" title="trader_&#8203;cdlharami">trader_&#8203;cdlharami</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlharamicross.php" title="trader_&#8203;cdlharamicross">trader_&#8203;cdlharamicross</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlhighwave.php" title="trader_&#8203;cdlhighwave">trader_&#8203;cdlhighwave</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlhikkake.php" title="trader_&#8203;cdlhikkake">trader_&#8203;cdlhikkake</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlhikkakemod.php" title="trader_&#8203;cdlhikkakemod">trader_&#8203;cdlhikkakemod</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlhomingpigeon.php" title="trader_&#8203;cdlhomingpigeon">trader_&#8203;cdlhomingpigeon</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlidentical3crows.php" title="trader_&#8203;cdlidentical3crows">trader_&#8203;cdlidentical3crows</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlinneck.php" title="trader_&#8203;cdlinneck">trader_&#8203;cdlinneck</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlinvertedhammer.php" title="trader_&#8203;cdlinvertedhammer">trader_&#8203;cdlinvertedhammer</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlkicking.php" title="trader_&#8203;cdlkicking">trader_&#8203;cdlkicking</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlkickingbylength.php" title="trader_&#8203;cdlkickingbylength">trader_&#8203;cdlkickingbylength</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlladderbottom.php" title="trader_&#8203;cdlladderbottom">trader_&#8203;cdlladderbottom</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdllongleggeddoji.php" title="trader_&#8203;cdllongleggeddoji">trader_&#8203;cdllongleggeddoji</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdllongline.php" title="trader_&#8203;cdllongline">trader_&#8203;cdllongline</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlmarubozu.php" title="trader_&#8203;cdlmarubozu">trader_&#8203;cdlmarubozu</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlmatchinglow.php" title="trader_&#8203;cdlmatchinglow">trader_&#8203;cdlmatchinglow</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlmathold.php" title="trader_&#8203;cdlmathold">trader_&#8203;cdlmathold</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlmorningdojistar.php" title="trader_&#8203;cdlmorningdojistar">trader_&#8203;cdlmorningdojistar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlmorningstar.php" title="trader_&#8203;cdlmorningstar">trader_&#8203;cdlmorningstar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlonneck.php" title="trader_&#8203;cdlonneck">trader_&#8203;cdlonneck</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlpiercing.php" title="trader_&#8203;cdlpiercing">trader_&#8203;cdlpiercing</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlrickshawman.php" title="trader_&#8203;cdlrickshawman">trader_&#8203;cdlrickshawman</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlrisefall3methods.php" title="trader_&#8203;cdlrisefall3methods">trader_&#8203;cdlrisefall3methods</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlseparatinglines.php" title="trader_&#8203;cdlseparatinglines">trader_&#8203;cdlseparatinglines</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlshootingstar.php" title="trader_&#8203;cdlshootingstar">trader_&#8203;cdlshootingstar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlshortline.php" title="trader_&#8203;cdlshortline">trader_&#8203;cdlshortline</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlspinningtop.php" title="trader_&#8203;cdlspinningtop">trader_&#8203;cdlspinningtop</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlstalledpattern.php" title="trader_&#8203;cdlstalledpattern">trader_&#8203;cdlstalledpattern</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlsticksandwich.php" title="trader_&#8203;cdlsticksandwich">trader_&#8203;cdlsticksandwich</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdltakuri.php" title="trader_&#8203;cdltakuri">trader_&#8203;cdltakuri</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdltasukigap.php" title="trader_&#8203;cdltasukigap">trader_&#8203;cdltasukigap</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlthrusting.php" title="trader_&#8203;cdlthrusting">trader_&#8203;cdlthrusting</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdltristar.php" title="trader_&#8203;cdltristar">trader_&#8203;cdltristar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlunique3river.php" title="trader_&#8203;cdlunique3river">trader_&#8203;cdlunique3river</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlupsidegap2crows.php" title="trader_&#8203;cdlupsidegap2crows">trader_&#8203;cdlupsidegap2crows</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cdlxsidegap3methods.php" title="trader_&#8203;cdlxsidegap3methods">trader_&#8203;cdlxsidegap3methods</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ceil.php" title="trader_&#8203;ceil">trader_&#8203;ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cmo.php" title="trader_&#8203;cmo">trader_&#8203;cmo</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-correl.php" title="trader_&#8203;correl">trader_&#8203;correl</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cos.php" title="trader_&#8203;cos">trader_&#8203;cos</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-cosh.php" title="trader_&#8203;cosh">trader_&#8203;cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-dema.php" title="trader_&#8203;dema">trader_&#8203;dema</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-div.php" title="trader_&#8203;div">trader_&#8203;div</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-dx.php" title="trader_&#8203;dx">trader_&#8203;dx</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ema.php" title="trader_&#8203;ema">trader_&#8203;ema</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-errno.php" title="trader_&#8203;errno">trader_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-exp.php" title="trader_&#8203;exp">trader_&#8203;exp</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-floor.php" title="trader_&#8203;floor">trader_&#8203;floor</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-get-compat.php" title="trader_&#8203;get_&#8203;compat">trader_&#8203;get_&#8203;compat</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-get-unstable-period.php" title="trader_&#8203;get_&#8203;unstable_&#8203;period">trader_&#8203;get_&#8203;unstable_&#8203;period</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-dcperiod.php" title="trader_&#8203;ht_&#8203;dcperiod">trader_&#8203;ht_&#8203;dcperiod</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-dcphase.php" title="trader_&#8203;ht_&#8203;dcphase">trader_&#8203;ht_&#8203;dcphase</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-phasor.php" title="trader_&#8203;ht_&#8203;phasor">trader_&#8203;ht_&#8203;phasor</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-sine.php" title="trader_&#8203;ht_&#8203;sine">trader_&#8203;ht_&#8203;sine</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-trendline.php" title="trader_&#8203;ht_&#8203;trendline">trader_&#8203;ht_&#8203;trendline</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ht-trendmode.php" title="trader_&#8203;ht_&#8203;trendmode">trader_&#8203;ht_&#8203;trendmode</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-kama.php" title="trader_&#8203;kama">trader_&#8203;kama</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-linearreg.php" title="trader_&#8203;linearreg">trader_&#8203;linearreg</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-linearreg-angle.php" title="trader_&#8203;linearreg_&#8203;angle">trader_&#8203;linearreg_&#8203;angle</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-linearreg-intercept.php" title="trader_&#8203;linearreg_&#8203;intercept">trader_&#8203;linearreg_&#8203;intercept</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-linearreg-slope.php" title="trader_&#8203;linearreg_&#8203;slope">trader_&#8203;linearreg_&#8203;slope</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ln.php" title="trader_&#8203;ln">trader_&#8203;ln</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-log10.php" title="trader_&#8203;log10">trader_&#8203;log10</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ma.php" title="trader_&#8203;ma">trader_&#8203;ma</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-macd.php" title="trader_&#8203;macd">trader_&#8203;macd</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-macdext.php" title="trader_&#8203;macdext">trader_&#8203;macdext</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-macdfix.php" title="trader_&#8203;macdfix">trader_&#8203;macdfix</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-mama.php" title="trader_&#8203;mama">trader_&#8203;mama</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-mavp.php" title="trader_&#8203;mavp">trader_&#8203;mavp</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-max.php" title="trader_&#8203;max">trader_&#8203;max</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-maxindex.php" title="trader_&#8203;maxindex">trader_&#8203;maxindex</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-medprice.php" title="trader_&#8203;medprice">trader_&#8203;medprice</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-mfi.php" title="trader_&#8203;mfi">trader_&#8203;mfi</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-midpoint.php" title="trader_&#8203;midpoint">trader_&#8203;midpoint</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-midprice.php" title="trader_&#8203;midprice">trader_&#8203;midprice</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-min.php" title="trader_&#8203;min">trader_&#8203;min</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-minindex.php" title="trader_&#8203;minindex">trader_&#8203;minindex</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-minmax.php" title="trader_&#8203;minmax">trader_&#8203;minmax</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-minmaxindex.php" title="trader_&#8203;minmaxindex">trader_&#8203;minmaxindex</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-minus-di.php" title="trader_&#8203;minus_&#8203;di">trader_&#8203;minus_&#8203;di</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-minus-dm.php" title="trader_&#8203;minus_&#8203;dm">trader_&#8203;minus_&#8203;dm</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-mom.php" title="trader_&#8203;mom">trader_&#8203;mom</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-mult.php" title="trader_&#8203;mult">trader_&#8203;mult</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-natr.php" title="trader_&#8203;natr">trader_&#8203;natr</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-obv.php" title="trader_&#8203;obv">trader_&#8203;obv</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-plus-di.php" title="trader_&#8203;plus_&#8203;di">trader_&#8203;plus_&#8203;di</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-plus-dm.php" title="trader_&#8203;plus_&#8203;dm">trader_&#8203;plus_&#8203;dm</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ppo.php" title="trader_&#8203;ppo">trader_&#8203;ppo</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-roc.php" title="trader_&#8203;roc">trader_&#8203;roc</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-rocp.php" title="trader_&#8203;rocp">trader_&#8203;rocp</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-rocr.php" title="trader_&#8203;rocr">trader_&#8203;rocr</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-rocr100.php" title="trader_&#8203;rocr100">trader_&#8203;rocr100</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-rsi.php" title="trader_&#8203;rsi">trader_&#8203;rsi</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sar.php" title="trader_&#8203;sar">trader_&#8203;sar</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sarext.php" title="trader_&#8203;sarext">trader_&#8203;sarext</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-set-compat.php" title="trader_&#8203;set_&#8203;compat">trader_&#8203;set_&#8203;compat</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-set-unstable-period.php" title="trader_&#8203;set_&#8203;unstable_&#8203;period">trader_&#8203;set_&#8203;unstable_&#8203;period</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sin.php" title="trader_&#8203;sin">trader_&#8203;sin</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sinh.php" title="trader_&#8203;sinh">trader_&#8203;sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sma.php" title="trader_&#8203;sma">trader_&#8203;sma</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sqrt.php" title="trader_&#8203;sqrt">trader_&#8203;sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-stddev.php" title="trader_&#8203;stddev">trader_&#8203;stddev</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-stoch.php" title="trader_&#8203;stoch">trader_&#8203;stoch</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-stochf.php" title="trader_&#8203;stochf">trader_&#8203;stochf</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-stochrsi.php" title="trader_&#8203;stochrsi">trader_&#8203;stochrsi</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sub.php" title="trader_&#8203;sub">trader_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-sum.php" title="trader_&#8203;sum">trader_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-t3.php" title="trader_&#8203;t3">trader_&#8203;t3</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-tan.php" title="trader_&#8203;tan">trader_&#8203;tan</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-tanh.php" title="trader_&#8203;tanh">trader_&#8203;tanh</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-tema.php" title="trader_&#8203;tema">trader_&#8203;tema</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-trange.php" title="trader_&#8203;trange">trader_&#8203;trange</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-trima.php" title="trader_&#8203;trima">trader_&#8203;trima</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-trix.php" title="trader_&#8203;trix">trader_&#8203;trix</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-tsf.php" title="trader_&#8203;tsf">trader_&#8203;tsf</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-typprice.php" title="trader_&#8203;typprice">trader_&#8203;typprice</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-ultosc.php" title="trader_&#8203;ultosc">trader_&#8203;ultosc</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-var.php" title="trader_&#8203;var">trader_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-wclprice.php" title="trader_&#8203;wclprice">trader_&#8203;wclprice</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-willr.php" title="trader_&#8203;willr">trader_&#8203;willr</a>
                        </li>
                                                <li class="">
                            <a href="function.trader-wma.php" title="trader_&#8203;wma">trader_&#8203;wma</a>
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
