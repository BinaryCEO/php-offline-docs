<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Trader - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.trader.php">
 <link rel="shorturl" href="https://www.php.net/trader">
 <link rel="alternate" href="https://www.php.net/trader" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stats-variance.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.trader.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.trader.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.trader.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.trader.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.trader.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.trader.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.trader.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.trader.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.trader.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.trader.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.trader.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.trader.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Technical Analysis for Traders" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Trader - Manual" />
<meta name="twitter:description" content="Technical Analysis for Traders" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Trader - Manual" />
<meta itemprop="description" content="Technical Analysis for Traders" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Technical Analysis for Traders" />

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
        <a href="intro.trader.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stats-variance.php">
          &laquo; stats_variance        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      </ul>
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
            <option value='en/book.trader.php' selected="selected">English</option>
            <option value='de/book.trader.php'>German</option>
            <option value='es/book.trader.php'>Spanish</option>
            <option value='fr/book.trader.php'>French</option>
            <option value='it/book.trader.php'>Italian</option>
            <option value='ja/book.trader.php'>Japanese</option>
            <option value='pt_BR/book.trader.php'>Brazilian Portuguese</option>
            <option value='ru/book.trader.php'>Russian</option>
            <option value='tr/book.trader.php'>Turkish</option>
            <option value='uk/book.trader.php'>Ukrainian</option>
            <option value='zh/book.trader.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.trader" class="book">
 
 <h1 class="title">Technical Analysis for Traders</h1>
 

 

 






 






 
 







<ul class="chunklist chunklist_book"><li><a href="intro.trader.php">Introduction</a></li><li><a href="trader.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="trader.requirements.php">Requirements</a></li><li><a href="trader.installation.php">Installation</a></li><li><a href="trader.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="trader.constants.php">Predefined Constants</a></li><li><a href="ref.trader.php">Trader Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.trader-acos.php">trader_acos</a> — Vector Trigonometric ACos</li><li><a href="function.trader-ad.php">trader_ad</a> — Chaikin A/D Line</li><li><a href="function.trader-add.php">trader_add</a> — Vector Arithmetic Add</li><li><a href="function.trader-adosc.php">trader_adosc</a> — Chaikin A/D Oscillator</li><li><a href="function.trader-adx.php">trader_adx</a> — Average Directional Movement Index</li><li><a href="function.trader-adxr.php">trader_adxr</a> — Average Directional Movement Index Rating</li><li><a href="function.trader-apo.php">trader_apo</a> — Absolute Price Oscillator</li><li><a href="function.trader-aroon.php">trader_aroon</a> — Aroon</li><li><a href="function.trader-aroonosc.php">trader_aroonosc</a> — Aroon Oscillator</li><li><a href="function.trader-asin.php">trader_asin</a> — Vector Trigonometric ASin</li><li><a href="function.trader-atan.php">trader_atan</a> — Vector Trigonometric ATan</li><li><a href="function.trader-atr.php">trader_atr</a> — Average True Range</li><li><a href="function.trader-avgprice.php">trader_avgprice</a> — Average Price</li><li><a href="function.trader-bbands.php">trader_bbands</a> — Bollinger Bands</li><li><a href="function.trader-beta.php">trader_beta</a> — Beta</li><li><a href="function.trader-bop.php">trader_bop</a> — Balance Of Power</li><li><a href="function.trader-cci.php">trader_cci</a> — Commodity Channel Index</li><li><a href="function.trader-cdl2crows.php">trader_cdl2crows</a> — Two Crows</li><li><a href="function.trader-cdl3blackcrows.php">trader_cdl3blackcrows</a> — Three Black Crows</li><li><a href="function.trader-cdl3inside.php">trader_cdl3inside</a> — Three Inside Up/Down</li><li><a href="function.trader-cdl3linestrike.php">trader_cdl3linestrike</a> — Three-Line Strike</li><li><a href="function.trader-cdl3outside.php">trader_cdl3outside</a> — Three Outside Up/Down</li><li><a href="function.trader-cdl3starsinsouth.php">trader_cdl3starsinsouth</a> — Three Stars In The South</li><li><a href="function.trader-cdl3whitesoldiers.php">trader_cdl3whitesoldiers</a> — Three Advancing White Soldiers</li><li><a href="function.trader-cdlabandonedbaby.php">trader_cdlabandonedbaby</a> — Abandoned Baby</li><li><a href="function.trader-cdladvanceblock.php">trader_cdladvanceblock</a> — Advance Block</li><li><a href="function.trader-cdlbelthold.php">trader_cdlbelthold</a> — Belt-hold</li><li><a href="function.trader-cdlbreakaway.php">trader_cdlbreakaway</a> — Breakaway</li><li><a href="function.trader-cdlclosingmarubozu.php">trader_cdlclosingmarubozu</a> — Closing Marubozu</li><li><a href="function.trader-cdlconcealbabyswall.php">trader_cdlconcealbabyswall</a> — Concealing Baby Swallow</li><li><a href="function.trader-cdlcounterattack.php">trader_cdlcounterattack</a> — Counterattack</li><li><a href="function.trader-cdldarkcloudcover.php">trader_cdldarkcloudcover</a> — Dark Cloud Cover</li><li><a href="function.trader-cdldoji.php">trader_cdldoji</a> — Doji</li><li><a href="function.trader-cdldojistar.php">trader_cdldojistar</a> — Doji Star</li><li><a href="function.trader-cdldragonflydoji.php">trader_cdldragonflydoji</a> — Dragonfly Doji</li><li><a href="function.trader-cdlengulfing.php">trader_cdlengulfing</a> — Engulfing Pattern</li><li><a href="function.trader-cdleveningdojistar.php">trader_cdleveningdojistar</a> — Evening Doji Star</li><li><a href="function.trader-cdleveningstar.php">trader_cdleveningstar</a> — Evening Star</li><li><a href="function.trader-cdlgapsidesidewhite.php">trader_cdlgapsidesidewhite</a> — Up/Down-gap side-by-side white lines</li><li><a href="function.trader-cdlgravestonedoji.php">trader_cdlgravestonedoji</a> — Gravestone Doji</li><li><a href="function.trader-cdlhammer.php">trader_cdlhammer</a> — Hammer</li><li><a href="function.trader-cdlhangingman.php">trader_cdlhangingman</a> — Hanging Man</li><li><a href="function.trader-cdlharami.php">trader_cdlharami</a> — Harami Pattern</li><li><a href="function.trader-cdlharamicross.php">trader_cdlharamicross</a> — Harami Cross Pattern</li><li><a href="function.trader-cdlhighwave.php">trader_cdlhighwave</a> — High-Wave Candle</li><li><a href="function.trader-cdlhikkake.php">trader_cdlhikkake</a> — Hikkake Pattern</li><li><a href="function.trader-cdlhikkakemod.php">trader_cdlhikkakemod</a> — Modified Hikkake Pattern</li><li><a href="function.trader-cdlhomingpigeon.php">trader_cdlhomingpigeon</a> — Homing Pigeon</li><li><a href="function.trader-cdlidentical3crows.php">trader_cdlidentical3crows</a> — Identical Three Crows</li><li><a href="function.trader-cdlinneck.php">trader_cdlinneck</a> — In-Neck Pattern</li><li><a href="function.trader-cdlinvertedhammer.php">trader_cdlinvertedhammer</a> — Inverted Hammer</li><li><a href="function.trader-cdlkicking.php">trader_cdlkicking</a> — Kicking</li><li><a href="function.trader-cdlkickingbylength.php">trader_cdlkickingbylength</a> — Kicking - bull/bear determined by the longer marubozu</li><li><a href="function.trader-cdlladderbottom.php">trader_cdlladderbottom</a> — Ladder Bottom</li><li><a href="function.trader-cdllongleggeddoji.php">trader_cdllongleggeddoji</a> — Long Legged Doji</li><li><a href="function.trader-cdllongline.php">trader_cdllongline</a> — Long Line Candle</li><li><a href="function.trader-cdlmarubozu.php">trader_cdlmarubozu</a> — Marubozu</li><li><a href="function.trader-cdlmatchinglow.php">trader_cdlmatchinglow</a> — Matching Low</li><li><a href="function.trader-cdlmathold.php">trader_cdlmathold</a> — Mat Hold</li><li><a href="function.trader-cdlmorningdojistar.php">trader_cdlmorningdojistar</a> — Morning Doji Star</li><li><a href="function.trader-cdlmorningstar.php">trader_cdlmorningstar</a> — Morning Star</li><li><a href="function.trader-cdlonneck.php">trader_cdlonneck</a> — On-Neck Pattern</li><li><a href="function.trader-cdlpiercing.php">trader_cdlpiercing</a> — Piercing Pattern</li><li><a href="function.trader-cdlrickshawman.php">trader_cdlrickshawman</a> — Rickshaw Man</li><li><a href="function.trader-cdlrisefall3methods.php">trader_cdlrisefall3methods</a> — Rising/Falling Three Methods</li><li><a href="function.trader-cdlseparatinglines.php">trader_cdlseparatinglines</a> — Separating Lines</li><li><a href="function.trader-cdlshootingstar.php">trader_cdlshootingstar</a> — Shooting Star</li><li><a href="function.trader-cdlshortline.php">trader_cdlshortline</a> — Short Line Candle</li><li><a href="function.trader-cdlspinningtop.php">trader_cdlspinningtop</a> — Spinning Top</li><li><a href="function.trader-cdlstalledpattern.php">trader_cdlstalledpattern</a> — Stalled Pattern</li><li><a href="function.trader-cdlsticksandwich.php">trader_cdlsticksandwich</a> — Stick Sandwich</li><li><a href="function.trader-cdltakuri.php">trader_cdltakuri</a> — Takuri (Dragonfly Doji with very long lower shadow)</li><li><a href="function.trader-cdltasukigap.php">trader_cdltasukigap</a> — Tasuki Gap</li><li><a href="function.trader-cdlthrusting.php">trader_cdlthrusting</a> — Thrusting Pattern</li><li><a href="function.trader-cdltristar.php">trader_cdltristar</a> — Tristar Pattern</li><li><a href="function.trader-cdlunique3river.php">trader_cdlunique3river</a> — Unique 3 River</li><li><a href="function.trader-cdlupsidegap2crows.php">trader_cdlupsidegap2crows</a> — Upside Gap Two Crows</li><li><a href="function.trader-cdlxsidegap3methods.php">trader_cdlxsidegap3methods</a> — Upside/Downside Gap Three Methods</li><li><a href="function.trader-ceil.php">trader_ceil</a> — Vector Ceil</li><li><a href="function.trader-cmo.php">trader_cmo</a> — Chande Momentum Oscillator</li><li><a href="function.trader-correl.php">trader_correl</a> — Pearson's Correlation Coefficient (r)</li><li><a href="function.trader-cos.php">trader_cos</a> — Vector Trigonometric Cos</li><li><a href="function.trader-cosh.php">trader_cosh</a> — Vector Trigonometric Cosh</li><li><a href="function.trader-dema.php">trader_dema</a> — Double Exponential Moving Average</li><li><a href="function.trader-div.php">trader_div</a> — Vector Arithmetic Div</li><li><a href="function.trader-dx.php">trader_dx</a> — Directional Movement Index</li><li><a href="function.trader-ema.php">trader_ema</a> — Exponential Moving Average</li><li><a href="function.trader-errno.php">trader_errno</a> — Get error code</li><li><a href="function.trader-exp.php">trader_exp</a> — Vector Arithmetic Exp</li><li><a href="function.trader-floor.php">trader_floor</a> — Vector Floor</li><li><a href="function.trader-get-compat.php">trader_get_compat</a> — Get compatibility mode</li><li><a href="function.trader-get-unstable-period.php">trader_get_unstable_period</a> — Get unstable period</li><li><a href="function.trader-ht-dcperiod.php">trader_ht_dcperiod</a> — Hilbert Transform - Dominant Cycle Period</li><li><a href="function.trader-ht-dcphase.php">trader_ht_dcphase</a> — Hilbert Transform - Dominant Cycle Phase</li><li><a href="function.trader-ht-phasor.php">trader_ht_phasor</a> — Hilbert Transform - Phasor Components</li><li><a href="function.trader-ht-sine.php">trader_ht_sine</a> — Hilbert Transform - SineWave</li><li><a href="function.trader-ht-trendline.php">trader_ht_trendline</a> — Hilbert Transform - Instantaneous Trendline</li><li><a href="function.trader-ht-trendmode.php">trader_ht_trendmode</a> — Hilbert Transform - Trend vs Cycle Mode</li><li><a href="function.trader-kama.php">trader_kama</a> — Kaufman Adaptive Moving Average</li><li><a href="function.trader-linearreg.php">trader_linearreg</a> — Linear Regression</li><li><a href="function.trader-linearreg-angle.php">trader_linearreg_angle</a> — Linear Regression Angle</li><li><a href="function.trader-linearreg-intercept.php">trader_linearreg_intercept</a> — Linear Regression Intercept</li><li><a href="function.trader-linearreg-slope.php">trader_linearreg_slope</a> — Linear Regression Slope</li><li><a href="function.trader-ln.php">trader_ln</a> — Vector Log Natural</li><li><a href="function.trader-log10.php">trader_log10</a> — Vector Log10</li><li><a href="function.trader-ma.php">trader_ma</a> — Moving average</li><li><a href="function.trader-macd.php">trader_macd</a> — Moving Average Convergence/Divergence</li><li><a href="function.trader-macdext.php">trader_macdext</a> — MACD with controllable MA type</li><li><a href="function.trader-macdfix.php">trader_macdfix</a> — Moving Average Convergence/Divergence Fix 12/26</li><li><a href="function.trader-mama.php">trader_mama</a> — MESA Adaptive Moving Average</li><li><a href="function.trader-mavp.php">trader_mavp</a> — Moving average with variable period</li><li><a href="function.trader-max.php">trader_max</a> — Highest value over a specified period</li><li><a href="function.trader-maxindex.php">trader_maxindex</a> — Index of highest value over a specified period</li><li><a href="function.trader-medprice.php">trader_medprice</a> — Median Price</li><li><a href="function.trader-mfi.php">trader_mfi</a> — Money Flow Index</li><li><a href="function.trader-midpoint.php">trader_midpoint</a> — MidPoint over period</li><li><a href="function.trader-midprice.php">trader_midprice</a> — Midpoint Price over period</li><li><a href="function.trader-min.php">trader_min</a> — Lowest value over a specified period</li><li><a href="function.trader-minindex.php">trader_minindex</a> — Index of lowest value over a specified period</li><li><a href="function.trader-minmax.php">trader_minmax</a> — Lowest and highest values over a specified period</li><li><a href="function.trader-minmaxindex.php">trader_minmaxindex</a> — Indexes of lowest and highest values over a specified period</li><li><a href="function.trader-minus-di.php">trader_minus_di</a> — Minus Directional Indicator</li><li><a href="function.trader-minus-dm.php">trader_minus_dm</a> — Minus Directional Movement</li><li><a href="function.trader-mom.php">trader_mom</a> — Momentum</li><li><a href="function.trader-mult.php">trader_mult</a> — Vector Arithmetic Mult</li><li><a href="function.trader-natr.php">trader_natr</a> — Normalized Average True Range</li><li><a href="function.trader-obv.php">trader_obv</a> — On Balance Volume</li><li><a href="function.trader-plus-di.php">trader_plus_di</a> — Plus Directional Indicator</li><li><a href="function.trader-plus-dm.php">trader_plus_dm</a> — Plus Directional Movement</li><li><a href="function.trader-ppo.php">trader_ppo</a> — Percentage Price Oscillator</li><li><a href="function.trader-roc.php">trader_roc</a> — Rate of change : ((price/prevPrice)-1)*100</li><li><a href="function.trader-rocp.php">trader_rocp</a> — Rate of change Percentage: (price-prevPrice)/prevPrice</li><li><a href="function.trader-rocr.php">trader_rocr</a> — Rate of change ratio: (price/prevPrice)</li><li><a href="function.trader-rocr100.php">trader_rocr100</a> — Rate of change ratio 100 scale: (price/prevPrice)*100</li><li><a href="function.trader-rsi.php">trader_rsi</a> — Relative Strength Index</li><li><a href="function.trader-sar.php">trader_sar</a> — Parabolic SAR</li><li><a href="function.trader-sarext.php">trader_sarext</a> — Parabolic SAR - Extended</li><li><a href="function.trader-set-compat.php">trader_set_compat</a> — Set compatibility mode</li><li><a href="function.trader-set-unstable-period.php">trader_set_unstable_period</a> — Set unstable period</li><li><a href="function.trader-sin.php">trader_sin</a> — Vector Trigonometric Sin</li><li><a href="function.trader-sinh.php">trader_sinh</a> — Vector Trigonometric Sinh</li><li><a href="function.trader-sma.php">trader_sma</a> — Simple Moving Average</li><li><a href="function.trader-sqrt.php">trader_sqrt</a> — Vector Square Root</li><li><a href="function.trader-stddev.php">trader_stddev</a> — Standard Deviation</li><li><a href="function.trader-stoch.php">trader_stoch</a> — Stochastic</li><li><a href="function.trader-stochf.php">trader_stochf</a> — Stochastic Fast</li><li><a href="function.trader-stochrsi.php">trader_stochrsi</a> — Stochastic Relative Strength Index</li><li><a href="function.trader-sub.php">trader_sub</a> — Vector Arithmetic Subtraction</li><li><a href="function.trader-sum.php">trader_sum</a> — Summation</li><li><a href="function.trader-t3.php">trader_t3</a> — Triple Exponential Moving Average (T3)</li><li><a href="function.trader-tan.php">trader_tan</a> — Vector Trigonometric Tan</li><li><a href="function.trader-tanh.php">trader_tanh</a> — Vector Trigonometric Tanh</li><li><a href="function.trader-tema.php">trader_tema</a> — Triple Exponential Moving Average</li><li><a href="function.trader-trange.php">trader_trange</a> — True Range</li><li><a href="function.trader-trima.php">trader_trima</a> — Triangular Moving Average</li><li><a href="function.trader-trix.php">trader_trix</a> — 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA</li><li><a href="function.trader-tsf.php">trader_tsf</a> — Time Series Forecast</li><li><a href="function.trader-typprice.php">trader_typprice</a> — Typical Price</li><li><a href="function.trader-ultosc.php">trader_ultosc</a> — Ultimate Oscillator</li><li><a href="function.trader-var.php">trader_var</a> — Variance</li><li><a href="function.trader-wclprice.php">trader_wclprice</a> — Weighted Close Price</li><li><a href="function.trader-willr.php">trader_willr</a> — Williams' %R</li><li><a href="function.trader-wma.php">trader_wma</a> — Weighted Moving Average</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/trader/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.trader%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.trader&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.trader.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.math.php">Mathematical Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.bc.php" title="BC Math">BC Math</a>
                        </li>
                                                <li class="">
                            <a href="book.gmp.php" title="GMP">GMP</a>
                        </li>
                                                <li class="">
                            <a href="book.math.php" title="Math">Math</a>
                        </li>
                                                <li class="">
                            <a href="book.stats.php" title="Statistics">Statistics</a>
                        </li>
                                                <li class="current">
                            <a href="book.trader.php" title="Trader">Trader</a>
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
