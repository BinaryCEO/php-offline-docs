<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: intl - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="shorturl" href="https://www.php.net/intl">
 <link rel="alternate" href="https://www.php.net/intl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.international.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-iconv-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.intl.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.intl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.intl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.intl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.intl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.intl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.intl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.intl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.intl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.intl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.intl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.intl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Internationalization Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: intl - Manual" />
<meta name="twitter:description" content="Internationalization Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: intl - Manual" />
<meta itemprop="description" content="Internationalization Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Internationalization Functions" />

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
        <a href="intro.intl.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-iconv-handler.php">
          &laquo; ob_iconv_handler        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      </ul>
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
            <option value='en/book.intl.php' selected="selected">English</option>
            <option value='de/book.intl.php'>German</option>
            <option value='es/book.intl.php'>Spanish</option>
            <option value='fr/book.intl.php'>French</option>
            <option value='it/book.intl.php'>Italian</option>
            <option value='ja/book.intl.php'>Japanese</option>
            <option value='pt_BR/book.intl.php'>Brazilian Portuguese</option>
            <option value='ru/book.intl.php'>Russian</option>
            <option value='tr/book.intl.php'>Turkish</option>
            <option value='uk/book.intl.php'>Ukrainian</option>
            <option value='zh/book.intl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.intl" class="book">
 
 <h1 class="title">Internationalization Functions</h1>
 

 
 
 

 







 




 








 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 



 




 





 





 





 





 




 





 





<ul class="chunklist chunklist_book"><li><a href="intro.intl.php">Introduction</a></li><li><a href="intl.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="intl.requirements.php">Requirements</a></li><li><a href="intl.installation.php">Installation</a></li><li><a href="intl.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="intl.constants.php">Predefined Constants</a></li><li><a href="intl.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="intl.examples.basic.php">Basic usage of this extension</a></li></ul></li><li><a href="class.collator.php">Collator</a> — The Collator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="collator.asort.php">Collator::asort</a> — Sort array maintaining index association</li><li><a href="collator.compare.php">Collator::compare</a> — Compare two Unicode strings</li><li><a href="collator.construct.php">Collator::__construct</a> — Create a collator</li><li><a href="collator.create.php">Collator::create</a> — Create a collator</li><li><a href="collator.getattribute.php">Collator::getAttribute</a> — Get collation attribute value</li><li><a href="collator.geterrorcode.php">Collator::getErrorCode</a> — Get collator's last error code</li><li><a href="collator.geterrormessage.php">Collator::getErrorMessage</a> — Get text for collator's last error code</li><li><a href="collator.getlocale.php">Collator::getLocale</a> — Get the locale name of the collator</li><li><a href="collator.getsortkey.php">Collator::getSortKey</a> — Get sorting key for a string</li><li><a href="collator.getstrength.php">Collator::getStrength</a> — Get current collation strength</li><li><a href="collator.setattribute.php">Collator::setAttribute</a> — Set collation attribute</li><li><a href="collator.setstrength.php">Collator::setStrength</a> — Set collation strength</li><li><a href="collator.sort.php">Collator::sort</a> — Sort array using specified collator</li><li><a href="collator.sortwithsortkeys.php">Collator::sortWithSortKeys</a> — Sort array using specified collator and sort keys</li></ul></li><li><a href="class.numberformatter.php">NumberFormatter</a> — The NumberFormatter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="numberformatter.create.php">NumberFormatter::create</a> — Create a number formatter</li><li><a href="numberformatter.format.php">NumberFormatter::format</a> — Format a number</li><li><a href="numberformatter.formatcurrency.php">NumberFormatter::formatCurrency</a> — Format a currency value</li><li><a href="numberformatter.getattribute.php">NumberFormatter::getAttribute</a> — Get an attribute</li><li><a href="numberformatter.geterrorcode.php">NumberFormatter::getErrorCode</a> — Get formatter's last error code</li><li><a href="numberformatter.geterrormessage.php">NumberFormatter::getErrorMessage</a> — Get formatter's last error message</li><li><a href="numberformatter.getlocale.php">NumberFormatter::getLocale</a> — Get formatter locale</li><li><a href="numberformatter.getpattern.php">NumberFormatter::getPattern</a> — Get formatter pattern</li><li><a href="numberformatter.getsymbol.php">NumberFormatter::getSymbol</a> — Get a symbol value</li><li><a href="numberformatter.gettextattribute.php">NumberFormatter::getTextAttribute</a> — Get a text attribute</li><li><a href="numberformatter.parse.php">NumberFormatter::parse</a> — Parse a number</li><li><a href="numberformatter.parsecurrency.php">NumberFormatter::parseCurrency</a> — Parse a currency number</li><li><a href="numberformatter.setattribute.php">NumberFormatter::setAttribute</a> — Set an attribute</li><li><a href="numberformatter.setpattern.php">NumberFormatter::setPattern</a> — Set formatter pattern</li><li><a href="numberformatter.setsymbol.php">NumberFormatter::setSymbol</a> — Set a symbol value</li><li><a href="numberformatter.settextattribute.php">NumberFormatter::setTextAttribute</a> — Set a text attribute</li></ul></li><li><a href="class.locale.php">Locale</a> — The Locale class<ul class="chunklist chunklist_book chunklist_children"><li><a href="locale.acceptfromhttp.php">Locale::acceptFromHttp</a> — Tries to find out best available locale based on HTTP &quot;Accept-Language&quot; header</li><li><a href="locale.canonicalize.php">Locale::canonicalize</a> — Canonicalize the locale string</li><li><a href="locale.composelocale.php">Locale::composeLocale</a> — Returns a correctly ordered and delimited locale ID</li><li><a href="locale.filtermatches.php">Locale::filterMatches</a> — Checks if a language tag filter matches with locale</li><li><a href="locale.getallvariants.php">Locale::getAllVariants</a> — Gets the variants for the input locale</li><li><a href="locale.getdefault.php">Locale::getDefault</a> — Gets the default locale value from the INTL global 'default_locale'</li><li><a href="locale.getdisplaylanguage.php">Locale::getDisplayLanguage</a> — Returns an appropriately localized display name for language of the inputlocale</li><li><a href="locale.getdisplayname.php">Locale::getDisplayName</a> — Returns an appropriately localized display name for the input locale</li><li><a href="locale.getdisplayregion.php">Locale::getDisplayRegion</a> — Returns an appropriately localized display name for region of the input locale</li><li><a href="locale.getdisplayscript.php">Locale::getDisplayScript</a> — Returns an appropriately localized display name for script of the input locale</li><li><a href="locale.getdisplayvariant.php">Locale::getDisplayVariant</a> — Returns an appropriately localized display name for variants of the input locale</li><li><a href="locale.getkeywords.php">Locale::getKeywords</a> — Gets the keywords for the input locale</li><li><a href="locale.getprimarylanguage.php">Locale::getPrimaryLanguage</a> — Gets the primary language for the input locale</li><li><a href="locale.getregion.php">Locale::getRegion</a> — Gets the region for the input locale</li><li><a href="locale.getscript.php">Locale::getScript</a> — Gets the script for the input locale</li><li><a href="locale.lookup.php">Locale::lookup</a> — Searches the language tag list for the best match to the language</li><li><a href="locale.parselocale.php">Locale::parseLocale</a> — Returns a key-value array of locale ID subtag elements</li><li><a href="locale.setdefault.php">Locale::setDefault</a> — Sets the default runtime locale</li></ul></li><li><a href="class.normalizer.php">Normalizer</a> — The Normalizer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="normalizer.getrawdecomposition.php">Normalizer::getRawDecomposition</a> — Gets the Decomposition_Mapping property for the given UTF-8 encoded code point</li><li><a href="normalizer.isnormalized.php">Normalizer::isNormalized</a> — Checks if the provided string is already in the specified normalization
   form</li><li><a href="normalizer.normalize.php">Normalizer::normalize</a> — Normalizes the input provided and returns the normalized string</li></ul></li><li><a href="class.messageformatter.php">MessageFormatter</a> — The MessageFormatter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="messageformatter.create.php">MessageFormatter::create</a> — Constructs a new Message Formatter</li><li><a href="messageformatter.format.php">MessageFormatter::format</a> — Format the message</li><li><a href="messageformatter.formatmessage.php">MessageFormatter::formatMessage</a> — Quick format message</li><li><a href="messageformatter.geterrorcode.php">MessageFormatter::getErrorCode</a> — Get the error code from last operation</li><li><a href="messageformatter.geterrormessage.php">MessageFormatter::getErrorMessage</a> — Get the error text from the last operation</li><li><a href="messageformatter.getlocale.php">MessageFormatter::getLocale</a> — Get the locale for which the formatter was created</li><li><a href="messageformatter.getpattern.php">MessageFormatter::getPattern</a> — Get the pattern used by the formatter</li><li><a href="messageformatter.parse.php">MessageFormatter::parse</a> — Parse input string according to pattern</li><li><a href="messageformatter.parsemessage.php">MessageFormatter::parseMessage</a> — Quick parse input string</li><li><a href="messageformatter.setpattern.php">MessageFormatter::setPattern</a> — Set the pattern used by the formatter</li></ul></li><li><a href="class.intlcalendar.php">IntlCalendar</a> — The IntlCalendar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlcalendar.add.php">IntlCalendar::add</a> — Add a (signed) amount of time to a field</li><li><a href="intlcalendar.after.php">IntlCalendar::after</a> — Whether this objectʼs time is after that of the passed object</li><li><a href="intlcalendar.before.php">IntlCalendar::before</a> — Whether this objectʼs time is before that of the passed object</li><li><a href="intlcalendar.clear.php">IntlCalendar::clear</a> — Clear a field or all fields</li><li><a href="intlcalendar.construct.php">IntlCalendar::__construct</a> — Private constructor for disallowing instantiation</li><li><a href="intlcalendar.createinstance.php">IntlCalendar::createInstance</a> — Create a new IntlCalendar</li><li><a href="intlcalendar.equals.php">IntlCalendar::equals</a> — Compare time of two IntlCalendar objects for equality</li><li><a href="intlcalendar.fielddifference.php">IntlCalendar::fieldDifference</a> — Calculate difference between given time and this objectʼs time</li><li><a href="intlcalendar.fromdatetime.php">IntlCalendar::fromDateTime</a> — Create an IntlCalendar from a DateTime object or string</li><li><a href="intlcalendar.get.php">IntlCalendar::get</a> — Get the value for a field</li><li><a href="intlcalendar.getactualmaximum.php">IntlCalendar::getActualMaximum</a> — The maximum value for a field, considering the objectʼs current time</li><li><a href="intlcalendar.getactualminimum.php">IntlCalendar::getActualMinimum</a> — The minimum value for a field, considering the objectʼs current time</li><li><a href="intlcalendar.getavailablelocales.php">IntlCalendar::getAvailableLocales</a> — Get array of locales for which there is data</li><li><a href="intlcalendar.getdayofweektype.php">IntlCalendar::getDayOfWeekType</a> — Tell whether a day is a weekday, weekend or a day that has a transition between the two</li><li><a href="intlcalendar.geterrorcode.php">IntlCalendar::getErrorCode</a> — Get last error code on the object</li><li><a href="intlcalendar.geterrormessage.php">IntlCalendar::getErrorMessage</a> — Get last error message on the object</li><li><a href="intlcalendar.getfirstdayofweek.php">IntlCalendar::getFirstDayOfWeek</a> — Get the first day of the week for the calendarʼs locale</li><li><a href="intlcalendar.getgreatestminimum.php">IntlCalendar::getGreatestMinimum</a> — Get the largest local minimum value for a field</li><li><a href="intlcalendar.getkeywordvaluesforlocale.php">IntlCalendar::getKeywordValuesForLocale</a> — Get set of locale keyword values</li><li><a href="intlcalendar.getleastmaximum.php">IntlCalendar::getLeastMaximum</a> — Get the smallest local maximum for a field</li><li><a href="intlcalendar.getlocale.php">IntlCalendar::getLocale</a> — Get the locale associated with the object</li><li><a href="intlcalendar.getmaximum.php">IntlCalendar::getMaximum</a> — Get the global maximum value for a field</li><li><a href="intlcalendar.getminimaldaysinfirstweek.php">IntlCalendar::getMinimalDaysInFirstWeek</a> — Get minimal number of days the first week in a year or month can have</li><li><a href="intlcalendar.getminimum.php">IntlCalendar::getMinimum</a> — Get the global minimum value for a field</li><li><a href="intlcalendar.getnow.php">IntlCalendar::getNow</a> — Get number representing the current time</li><li><a href="intlcalendar.getrepeatedwalltimeoption.php">IntlCalendar::getRepeatedWallTimeOption</a> — Get behavior for handling repeating wall time</li><li><a href="intlcalendar.getskippedwalltimeoption.php">IntlCalendar::getSkippedWallTimeOption</a> — Get behavior for handling skipped wall time</li><li><a href="intlcalendar.gettime.php">IntlCalendar::getTime</a> — Get time currently represented by the object</li><li><a href="intlcalendar.gettimezone.php">IntlCalendar::getTimeZone</a> — Get the objectʼs timezone</li><li><a href="intlcalendar.gettype.php">IntlCalendar::getType</a> — Get the calendar type</li><li><a href="intlcalendar.getweekendtransition.php">IntlCalendar::getWeekendTransition</a> — Get time of the day at which weekend begins or ends</li><li><a href="intlcalendar.indaylighttime.php">IntlCalendar::inDaylightTime</a> — Whether the objectʼs time is in Daylight Savings Time</li><li><a href="intlcalendar.isequivalentto.php">IntlCalendar::isEquivalentTo</a> — Whether another calendar is equal but for a different time</li><li><a href="intlcalendar.islenient.php">IntlCalendar::isLenient</a> — Whether date/time interpretation is in lenient mode</li><li><a href="intlcalendar.isset.php">IntlCalendar::isSet</a> — Whether a field is set</li><li><a href="intlcalendar.isweekend.php">IntlCalendar::isWeekend</a> — Whether a certain date/time is in the weekend</li><li><a href="intlcalendar.roll.php">IntlCalendar::roll</a> — Add value to field without carrying into more significant fields</li><li><a href="intlcalendar.set.php">IntlCalendar::set</a> — Set a time field or several common fields at once</li><li><a href="intlcalendar.setdate.php">IntlCalendar::setDate</a> — Set a date fields</li><li><a href="intlcalendar.setdatetime.php">IntlCalendar::setDateTime</a> — Set a date and time fields</li><li><a href="intlcalendar.setfirstdayofweek.php">IntlCalendar::setFirstDayOfWeek</a> — Set the day on which the week is deemed to start</li><li><a href="intlcalendar.setlenient.php">IntlCalendar::setLenient</a> — Set whether date/time interpretation is to be lenient</li><li><a href="intlcalendar.setminimaldaysinfirstweek.php">IntlCalendar::setMinimalDaysInFirstWeek</a> — Set minimal number of days the first week in a year or month can have</li><li><a href="intlcalendar.setrepeatedwalltimeoption.php">IntlCalendar::setRepeatedWallTimeOption</a> — Set behavior for handling repeating wall times at negative timezone offset transitions</li><li><a href="intlcalendar.setskippedwalltimeoption.php">IntlCalendar::setSkippedWallTimeOption</a> — Set behavior for handling skipped wall times at positive timezone offset transitions</li><li><a href="intlcalendar.settime.php">IntlCalendar::setTime</a> — Set the calendar time in milliseconds since the epoch</li><li><a href="intlcalendar.settimezone.php">IntlCalendar::setTimeZone</a> — Set the timezone used by this calendar</li><li><a href="intlcalendar.todatetime.php">IntlCalendar::toDateTime</a> — Convert an IntlCalendar into a DateTime object</li></ul></li><li><a href="class.intlgregoriancalendar.php">IntlGregorianCalendar</a> — The IntlGregorianCalendar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlgregoriancalendar.construct.php">IntlGregorianCalendar::__construct</a> — Create the Gregorian Calendar class</li><li><a href="intlgregoriancalendar.createfromdate.php">IntlGregorianCalendar::createFromDate</a> — Create a new IntlGregorianCalendar instance from date</li><li><a href="intlgregoriancalendar.createfromdatetime.php">IntlGregorianCalendar::createFromDateTime</a> — Create a new IntlGregorianCalendar instance from date and time</li><li><a href="intlgregoriancalendar.getgregorianchange.php">IntlGregorianCalendar::getGregorianChange</a> — Get the Gregorian Calendar change date</li><li><a href="intlgregoriancalendar.isleapyear.php">IntlGregorianCalendar::isLeapYear</a> — Determine if the given year is a leap year</li><li><a href="intlgregoriancalendar.setgregorianchange.php">IntlGregorianCalendar::setGregorianChange</a> — Set the Gregorian Calendar the change date</li></ul></li><li><a href="class.intltimezone.php">IntlTimeZone</a> — The IntlTimeZone class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intltimezone.construct.php">IntlTimeZone::__construct</a> — Private constructor to disallow direct instantiation</li><li><a href="intltimezone.countequivalentids.php">IntlTimeZone::countEquivalentIDs</a> — Get the number of IDs in the equivalency group that includes the given ID</li><li><a href="intltimezone.createdefault.php">IntlTimeZone::createDefault</a> — Create a new copy of the default timezone for this host</li><li><a href="intltimezone.createenumeration.php">IntlTimeZone::createEnumeration</a> — Get an enumeration over time zone IDs associated with the
  given country or offset</li><li><a href="intltimezone.createtimezone.php">IntlTimeZone::createTimeZone</a> — Create a timezone object for the given ID</li><li><a href="intltimezone.createtimezoneidenumeration.php">IntlTimeZone::createTimeZoneIDEnumeration</a> — Get an enumeration over system time zone IDs with the given filter conditions</li><li><a href="intltimezone.fromdatetimezone.php">IntlTimeZone::fromDateTimeZone</a> — Create a timezone object from DateTimeZone</li><li><a href="intltimezone.getcanonicalid.php">IntlTimeZone::getCanonicalID</a> — Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID</li><li><a href="intltimezone.getdisplayname.php">IntlTimeZone::getDisplayName</a> — Get a name of this time zone suitable for presentation to the user</li><li><a href="intltimezone.getdstsavings.php">IntlTimeZone::getDSTSavings</a> — Get the amount of time to be added to local standard time to get local wall clock time</li><li><a href="intltimezone.getequivalentid.php">IntlTimeZone::getEquivalentID</a> — Get an ID in the equivalency group that includes the given ID</li><li><a href="intltimezone.geterrorcode.php">IntlTimeZone::getErrorCode</a> — Get last error code on the object</li><li><a href="intltimezone.geterrormessage.php">IntlTimeZone::getErrorMessage</a> — Get last error message on the object</li><li><a href="intltimezone.getgmt.php">IntlTimeZone::getGMT</a> — Create GMT (UTC) timezone</li><li><a href="intltimezone.getid.php">IntlTimeZone::getID</a> — Get timezone ID</li><li><a href="intltimezone.getidforwindowsid.php">IntlTimeZone::getIDForWindowsID</a> — Translate a Windows timezone into a system timezone</li><li><a href="intltimezone.getoffset.php">IntlTimeZone::getOffset</a> — Get the time zone raw and GMT offset for the given moment in time</li><li><a href="intltimezone.getrawoffset.php">IntlTimeZone::getRawOffset</a> — Get the raw GMT offset (before taking daylight savings time into account</li><li><a href="intltimezone.getregion.php">IntlTimeZone::getRegion</a> — Get the region code associated with the given system time zone ID</li><li><a href="intltimezone.gettzdataversion.php">IntlTimeZone::getTZDataVersion</a> — Get the timezone data version currently used by ICU</li><li><a href="intltimezone.getunknown.php">IntlTimeZone::getUnknown</a> — Get the &quot;unknown&quot; time zone</li><li><a href="intltimezone.getwindowsid.php">IntlTimeZone::getWindowsID</a> — Translate a system timezone into a Windows timezone</li><li><a href="intltimezone.hassamerules.php">IntlTimeZone::hasSameRules</a> — Check if this zone has the same rules and offset as another zone</li><li><a href="intltimezone.todatetimezone.php">IntlTimeZone::toDateTimeZone</a> — Convert to DateTimeZone object</li><li><a href="intltimezone.usedaylighttime.php">IntlTimeZone::useDaylightTime</a> — Check if this time zone uses daylight savings time</li></ul></li><li><a href="class.intldateformatter.php">IntlDateFormatter</a> — The IntlDateFormatter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intldateformatter.create.php">IntlDateFormatter::create</a> — Create a date formatter</li><li><a href="intldateformatter.format.php">IntlDateFormatter::format</a> — Format the date/time value as a string</li><li><a href="intldateformatter.formatobject.php">IntlDateFormatter::formatObject</a> — Formats an object</li><li><a href="intldateformatter.getcalendar.php">IntlDateFormatter::getCalendar</a> — Get the calendar type used for the IntlDateFormatter</li><li><a href="intldateformatter.getdatetype.php">IntlDateFormatter::getDateType</a> — Get the datetype used for the IntlDateFormatter</li><li><a href="intldateformatter.geterrorcode.php">IntlDateFormatter::getErrorCode</a> — Get the error code from last operation</li><li><a href="intldateformatter.geterrormessage.php">IntlDateFormatter::getErrorMessage</a> — Get the error text from the last operation</li><li><a href="intldateformatter.getlocale.php">IntlDateFormatter::getLocale</a> — Get the locale used by formatter</li><li><a href="intldateformatter.getpattern.php">IntlDateFormatter::getPattern</a> — Get the pattern used for the IntlDateFormatter</li><li><a href="intldateformatter.gettimetype.php">IntlDateFormatter::getTimeType</a> — Get the timetype used for the IntlDateFormatter</li><li><a href="intldateformatter.gettimezoneid.php">IntlDateFormatter::getTimeZoneId</a> — Get the timezone-id used for the IntlDateFormatter</li><li><a href="intldateformatter.getcalendarobject.php">IntlDateFormatter::getCalendarObject</a> — Get copy of formatterʼs calendar object</li><li><a href="intldateformatter.gettimezone.php">IntlDateFormatter::getTimeZone</a> — Get formatterʼs timezone</li><li><a href="intldateformatter.islenient.php">IntlDateFormatter::isLenient</a> — Get the lenient used for the IntlDateFormatter</li><li><a href="intldateformatter.localtime.php">IntlDateFormatter::localtime</a> — Parse string to a field-based time value</li><li><a href="intldateformatter.parse.php">IntlDateFormatter::parse</a> — Parse string to a timestamp value</li><li><a href="intldateformatter.setcalendar.php">IntlDateFormatter::setCalendar</a> — Sets the calendar type used by the formatter</li><li><a href="intldateformatter.setlenient.php">IntlDateFormatter::setLenient</a> — Set the leniency of the parser</li><li><a href="intldateformatter.setpattern.php">IntlDateFormatter::setPattern</a> — Set the pattern used for the IntlDateFormatter</li><li><a href="intldateformatter.settimezone.php">IntlDateFormatter::setTimeZone</a> — Sets formatterʼs timezone</li></ul></li><li><a href="class.resourcebundle.php">ResourceBundle</a> — The ResourceBundle class<ul class="chunklist chunklist_book chunklist_children"><li><a href="resourcebundle.count.php">ResourceBundle::count</a> — Get number of elements in the bundle</li><li><a href="resourcebundle.create.php">ResourceBundle::create</a> — Create a resource bundle</li><li><a href="resourcebundle.get.php">ResourceBundle::get</a> — Get data from the bundle</li><li><a href="resourcebundle.geterrorcode.php">ResourceBundle::getErrorCode</a> — Get bundle's last error code</li><li><a href="resourcebundle.geterrormessage.php">ResourceBundle::getErrorMessage</a> — Get bundle's last error message</li><li><a href="resourcebundle.locales.php">ResourceBundle::getLocales</a> — Get supported locales</li></ul></li><li><a href="class.spoofchecker.php">Spoofchecker</a> — The Spoofchecker class<ul class="chunklist chunklist_book chunklist_children"><li><a href="spoofchecker.areconfusable.php">Spoofchecker::areConfusable</a> — Checks if given strings can be confused</li><li><a href="spoofchecker.construct.php">Spoofchecker::__construct</a> — Constructor</li><li><a href="spoofchecker.issuspicious.php">Spoofchecker::isSuspicious</a> — Checks if a given text contains any suspicious characters</li><li><a href="spoofchecker.setallowedlocales.php">Spoofchecker::setAllowedLocales</a> — Locales to use when running checks</li><li><a href="spoofchecker.setchecks.php">Spoofchecker::setChecks</a> — Set the checks to run</li><li><a href="spoofchecker.setrestrictionlevel.php">Spoofchecker::setRestrictionLevel</a> — Set the restriction level</li></ul></li><li><a href="class.transliterator.php">Transliterator</a> — The Transliterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="transliterator.construct.php">Transliterator::__construct</a> — Private constructor to deny instantiation</li><li><a href="transliterator.create.php">Transliterator::create</a> — Create a transliterator</li><li><a href="transliterator.createfromrules.php">Transliterator::createFromRules</a> — Create transliterator from rules</li><li><a href="transliterator.createinverse.php">Transliterator::createInverse</a> — Create an inverse transliterator</li><li><a href="transliterator.geterrorcode.php">Transliterator::getErrorCode</a> — Get last error code</li><li><a href="transliterator.geterrormessage.php">Transliterator::getErrorMessage</a> — Get last error message</li><li><a href="transliterator.listids.php">Transliterator::listIDs</a> — Get transliterator IDs</li><li><a href="transliterator.transliterate.php">Transliterator::transliterate</a> — Transliterate a string</li></ul></li><li><a href="class.intlbreakiterator.php">IntlBreakIterator</a> — The IntlBreakIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlbreakiterator.construct.php">IntlBreakIterator::__construct</a> — Private constructor for disallowing instantiation</li><li><a href="intlbreakiterator.createcharacterinstance.php">IntlBreakIterator::createCharacterInstance</a> — Create break iterator for boundaries of combining character sequences</li><li><a href="intlbreakiterator.createcodepointinstance.php">IntlBreakIterator::createCodePointInstance</a> — Create break iterator for boundaries of code points</li><li><a href="intlbreakiterator.createlineinstance.php">IntlBreakIterator::createLineInstance</a> — Create break iterator for logically possible line breaks</li><li><a href="intlbreakiterator.createsentenceinstance.php">IntlBreakIterator::createSentenceInstance</a> — Create break iterator for sentence breaks</li><li><a href="intlbreakiterator.createtitleinstance.php">IntlBreakIterator::createTitleInstance</a> — Create break iterator for title-casing breaks</li><li><a href="intlbreakiterator.createwordinstance.php">IntlBreakIterator::createWordInstance</a> — Create break iterator for word breaks</li><li><a href="intlbreakiterator.current.php">IntlBreakIterator::current</a> — Get index of current position</li><li><a href="intlbreakiterator.first.php">IntlBreakIterator::first</a> — Set position to the first character in the text</li><li><a href="intlbreakiterator.following.php">IntlBreakIterator::following</a> — Advance the iterator to the first boundary following specified offset</li><li><a href="intlbreakiterator.geterrorcode.php">IntlBreakIterator::getErrorCode</a> — Get last error code on the object</li><li><a href="intlbreakiterator.geterrormessage.php">IntlBreakIterator::getErrorMessage</a> — Get last error message on the object</li><li><a href="intlbreakiterator.getlocale.php">IntlBreakIterator::getLocale</a> — Get the locale associated with the object</li><li><a href="intlbreakiterator.getpartsiterator.php">IntlBreakIterator::getPartsIterator</a> — Create iterator for navigating fragments between boundaries</li><li><a href="intlbreakiterator.gettext.php">IntlBreakIterator::getText</a> — Get the text being scanned</li><li><a href="intlbreakiterator.isboundary.php">IntlBreakIterator::isBoundary</a> — Tell whether an offset is a boundaryʼs offset</li><li><a href="intlbreakiterator.last.php">IntlBreakIterator::last</a> — Set the iterator position to index beyond the last character</li><li><a href="intlbreakiterator.next.php">IntlBreakIterator::next</a> — Advance the iterator the next boundary</li><li><a href="intlbreakiterator.preceding.php">IntlBreakIterator::preceding</a> — Set the iterator position to the first boundary before an offset</li><li><a href="intlbreakiterator.previous.php">IntlBreakIterator::previous</a> — Set the iterator position to the boundary immediately before the current</li><li><a href="intlbreakiterator.settext.php">IntlBreakIterator::setText</a> — Set the text being scanned</li></ul></li><li><a href="class.intlrulebasedbreakiterator.php">IntlRuleBasedBreakIterator</a> — The IntlRuleBasedBreakIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlrulebasedbreakiterator.construct.php">IntlRuleBasedBreakIterator::__construct</a> — Create iterator from ruleset</li><li><a href="intlrulebasedbreakiterator.getbinaryrules.php">IntlRuleBasedBreakIterator::getBinaryRules</a> — Get the binary form of compiled rules</li><li><a href="intlrulebasedbreakiterator.getrules.php">IntlRuleBasedBreakIterator::getRules</a> — Get the rule set used to create this object</li><li><a href="intlrulebasedbreakiterator.getrulestatus.php">IntlRuleBasedBreakIterator::getRuleStatus</a> — Get the largest status value from the break rules that determined the current break position</li><li><a href="intlrulebasedbreakiterator.getrulestatusvec.php">IntlRuleBasedBreakIterator::getRuleStatusVec</a> — Get the status values from the break rules that determined the current break position</li></ul></li><li><a href="class.intlcodepointbreakiterator.php">IntlCodePointBreakIterator</a> — The IntlCodePointBreakIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlcodepointbreakiterator.getlastcodepoint.php">IntlCodePointBreakIterator::getLastCodePoint</a> — Get last code point passed over after advancing or receding the iterator</li></ul></li><li><a href="class.intldatepatterngenerator.php">IntlDatePatternGenerator</a> — The IntlDatePatternGenerator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intldatepatterngenerator.create.php">IntlDatePatternGenerator::create</a> — Creates a new IntlDatePatternGenerator instance</li><li><a href="intldatepatterngenerator.getbestpattern.php">IntlDatePatternGenerator::getBestPattern</a> — Determines the most suitable date/time format</li></ul></li><li><a href="class.intlpartsiterator.php">IntlPartsIterator</a> — The IntlPartsIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intlpartsiterator.getbreakiterator.php">IntlPartsIterator::getBreakIterator</a> — Get IntlBreakIterator backing this parts iterator</li></ul></li><li><a href="class.uconverter.php">UConverter</a> — The UConverter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="uconverter.construct.php">UConverter::__construct</a> — Create UConverter object</li><li><a href="uconverter.convert.php">UConverter::convert</a> — Convert string from one charset to another</li><li><a href="uconverter.fromucallback.php">UConverter::fromUCallback</a> — Default &quot;from&quot; callback function</li><li><a href="uconverter.getaliases.php">UConverter::getAliases</a> — Get the aliases of the given name</li><li><a href="uconverter.getavailable.php">UConverter::getAvailable</a> — Get the available canonical converter names</li><li><a href="uconverter.getdestinationencoding.php">UConverter::getDestinationEncoding</a> — Get the destination encoding</li><li><a href="uconverter.getdestinationtype.php">UConverter::getDestinationType</a> — Get the destination converter type</li><li><a href="uconverter.geterrorcode.php">UConverter::getErrorCode</a> — Get last error code on the object</li><li><a href="uconverter.geterrormessage.php">UConverter::getErrorMessage</a> — Get last error message on the object</li><li><a href="uconverter.getsourceencoding.php">UConverter::getSourceEncoding</a> — Get the source encoding</li><li><a href="uconverter.getsourcetype.php">UConverter::getSourceType</a> — Get the source converter type</li><li><a href="uconverter.getstandards.php">UConverter::getStandards</a> — Get standards associated to converter names</li><li><a href="uconverter.getsubstchars.php">UConverter::getSubstChars</a> — Get substitution chars</li><li><a href="uconverter.reasontext.php">UConverter::reasonText</a> — Get string representation of the callback reason</li><li><a href="uconverter.setdestinationencoding.php">UConverter::setDestinationEncoding</a> — Set the destination encoding</li><li><a href="uconverter.setsourceencoding.php">UConverter::setSourceEncoding</a> — Set the source encoding</li><li><a href="uconverter.setsubstchars.php">UConverter::setSubstChars</a> — Set the substitution chars</li><li><a href="uconverter.toucallback.php">UConverter::toUCallback</a> — Default &quot;to&quot; callback function</li><li><a href="uconverter.transcode.php">UConverter::transcode</a> — Convert a string from one character encoding to another</li></ul></li><li><a href="ref.intl.grapheme.php">Grapheme Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.grapheme-extract.php">grapheme_extract</a> — Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8</li><li><a href="function.grapheme-str-split.php">grapheme_str_split</a> — Split a string into an array</li><li><a href="function.grapheme-stripos.php">grapheme_stripos</a> — Find position (in grapheme units) of first occurrence of a case-insensitive string</li><li><a href="function.grapheme-stristr.php">grapheme_stristr</a> — Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack</li><li><a href="function.grapheme-strlen.php">grapheme_strlen</a> — Get string length in grapheme units</li><li><a href="function.grapheme-strpos.php">grapheme_strpos</a> — Find position (in grapheme units) of first occurrence of a string</li><li><a href="function.grapheme-strripos.php">grapheme_strripos</a> — Find position (in grapheme units) of last occurrence of a case-insensitive string</li><li><a href="function.grapheme-strrpos.php">grapheme_strrpos</a> — Find position (in grapheme units) of last occurrence of a string</li><li><a href="function.grapheme-strstr.php">grapheme_strstr</a> — Returns part of haystack string from the first occurrence of needle to the end of haystack</li><li><a href="function.grapheme-substr.php">grapheme_substr</a> — Return part of a string</li></ul></li><li><a href="ref.intl.idn.php">IDN Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.idn-to-ascii.php">idn_to_ascii</a> — Convert domain name to IDNA ASCII form</li><li><a href="function.idn-to-utf8.php">idn_to_utf8</a> — Convert domain name from IDNA ASCII to Unicode</li></ul></li><li><a href="class.intlchar.php">IntlChar</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="intlchar.charage.php">IntlChar::charAge</a> — Get the &quot;age&quot; of the code point</li><li><a href="intlchar.chardigitvalue.php">IntlChar::charDigitValue</a> — Get the decimal digit value of a decimal digit character</li><li><a href="intlchar.chardirection.php">IntlChar::charDirection</a> — Get bidirectional category value for a code point</li><li><a href="intlchar.charfromname.php">IntlChar::charFromName</a> — Find Unicode character by name and return its code point value</li><li><a href="intlchar.charmirror.php">IntlChar::charMirror</a> — Get the &quot;mirror-image&quot; character for a code point</li><li><a href="intlchar.charname.php">IntlChar::charName</a> — Retrieve the name of a Unicode character</li><li><a href="intlchar.chartype.php">IntlChar::charType</a> — Get the general category value for a code point</li><li><a href="intlchar.chr.php">IntlChar::chr</a> — Return Unicode character by code point value</li><li><a href="intlchar.digit.php">IntlChar::digit</a> — Get the decimal digit value of a code point for a given radix</li><li><a href="intlchar.enumcharnames.php">IntlChar::enumCharNames</a> — Enumerate all assigned Unicode characters within a range</li><li><a href="intlchar.enumchartypes.php">IntlChar::enumCharTypes</a> — Enumerate all code points with their Unicode general categories</li><li><a href="intlchar.foldcase.php">IntlChar::foldCase</a> — Perform case folding on a code point</li><li><a href="intlchar.fordigit.php">IntlChar::forDigit</a> — Get character representation for a given digit and radix</li><li><a href="intlchar.getbidipairedbracket.php">IntlChar::getBidiPairedBracket</a> — Get the paired bracket character for a code point</li><li><a href="intlchar.getblockcode.php">IntlChar::getBlockCode</a> — Get the Unicode allocation block containing a code point</li><li><a href="intlchar.getcombiningclass.php">IntlChar::getCombiningClass</a> — Get the combining class of a code point</li><li><a href="intlchar.getfc-nfkc-closure.php">IntlChar::getFC_NFKC_Closure</a> — Get the FC_NFKC_Closure property for a code point</li><li><a href="intlchar.getintpropertymaxvalue.php">IntlChar::getIntPropertyMaxValue</a> — Get the max value for a Unicode property</li><li><a href="intlchar.getintpropertyminvalue.php">IntlChar::getIntPropertyMinValue</a> — Get the min value for a Unicode property</li><li><a href="intlchar.getintpropertyvalue.php">IntlChar::getIntPropertyValue</a> — Get the value for a Unicode property for a code point</li><li><a href="intlchar.getnumericvalue.php">IntlChar::getNumericValue</a> — Get the numeric value for a Unicode code point</li><li><a href="intlchar.getpropertyenum.php">IntlChar::getPropertyEnum</a> — Get the property constant value for a given property name</li><li><a href="intlchar.getpropertyname.php">IntlChar::getPropertyName</a> — Get the Unicode name for a property</li><li><a href="intlchar.getpropertyvalueenum.php">IntlChar::getPropertyValueEnum</a> — Get the property value for a given value name</li><li><a href="intlchar.getpropertyvaluename.php">IntlChar::getPropertyValueName</a> — Get the Unicode name for a property value</li><li><a href="intlchar.getunicodeversion.php">IntlChar::getUnicodeVersion</a> — Get the Unicode version</li><li><a href="intlchar.hasbinaryproperty.php">IntlChar::hasBinaryProperty</a> — Check a binary Unicode property for a code point</li><li><a href="intlchar.isalnum.php">IntlChar::isalnum</a> — Check if code point is an alphanumeric character</li><li><a href="intlchar.isalpha.php">IntlChar::isalpha</a> — Check if code point is a letter character</li><li><a href="intlchar.isbase.php">IntlChar::isbase</a> — Check if code point is a base character</li><li><a href="intlchar.isblank.php">IntlChar::isblank</a> — Check if code point is a &quot;blank&quot; or &quot;horizontal space&quot; character</li><li><a href="intlchar.iscntrl.php">IntlChar::iscntrl</a> — Check if code point is a control character</li><li><a href="intlchar.isdefined.php">IntlChar::isdefined</a> — Check whether the code point is defined</li><li><a href="intlchar.isdigit.php">IntlChar::isdigit</a> — Check if code point is a digit character</li><li><a href="intlchar.isgraph.php">IntlChar::isgraph</a> — Check if code point is a graphic character</li><li><a href="intlchar.isidignorable.php">IntlChar::isIDIgnorable</a> — Check if code point is an ignorable character</li><li><a href="intlchar.isidpart.php">IntlChar::isIDPart</a> — Check if code point is permissible in an identifier</li><li><a href="intlchar.isidstart.php">IntlChar::isIDStart</a> — Check if code point is permissible as the first character in an identifier</li><li><a href="intlchar.isisocontrol.php">IntlChar::isISOControl</a> — Check if code point is an ISO control code</li><li><a href="intlchar.isjavaidpart.php">IntlChar::isJavaIDPart</a> — Check if code point is permissible in a Java identifier</li><li><a href="intlchar.isjavaidstart.php">IntlChar::isJavaIDStart</a> — Check if code point is permissible as the first character in a Java identifier</li><li><a href="intlchar.isjavaspacechar.php">IntlChar::isJavaSpaceChar</a> — Check if code point is a space character according to Java</li><li><a href="intlchar.islower.php">IntlChar::islower</a> — Check if code point is a lowercase letter</li><li><a href="intlchar.ismirrored.php">IntlChar::isMirrored</a> — Check if code point has the Bidi_Mirrored property</li><li><a href="intlchar.isprint.php">IntlChar::isprint</a> — Check if code point is a printable character</li><li><a href="intlchar.ispunct.php">IntlChar::ispunct</a> — Check if code point is punctuation character</li><li><a href="intlchar.isspace.php">IntlChar::isspace</a> — Check if code point is a space character</li><li><a href="intlchar.istitle.php">IntlChar::istitle</a> — Check if code point is a titlecase letter</li><li><a href="intlchar.isualphabetic.php">IntlChar::isUAlphabetic</a> — Check if code point has the Alphabetic Unicode property</li><li><a href="intlchar.isulowercase.php">IntlChar::isULowercase</a> — Check if code point has the Lowercase Unicode property</li><li><a href="intlchar.isupper.php">IntlChar::isupper</a> — Check if code point has the general category &quot;Lu&quot; (uppercase letter)</li><li><a href="intlchar.isuuppercase.php">IntlChar::isUUppercase</a> — Check if code point has the Uppercase Unicode property</li><li><a href="intlchar.isuwhitespace.php">IntlChar::isUWhiteSpace</a> — Check if code point has the White_Space Unicode property</li><li><a href="intlchar.iswhitespace.php">IntlChar::isWhitespace</a> — Check if code point is a whitespace character according to ICU</li><li><a href="intlchar.isxdigit.php">IntlChar::isxdigit</a> — Check if code point is a hexadecimal digit</li><li><a href="intlchar.ord.php">IntlChar::ord</a> — Return Unicode code point value of character</li><li><a href="intlchar.tolower.php">IntlChar::tolower</a> — Make Unicode character lowercase</li><li><a href="intlchar.totitle.php">IntlChar::totitle</a> — Make Unicode character titlecase</li><li><a href="intlchar.toupper.php">IntlChar::toupper</a> — Make Unicode character uppercase</li></ul></li><li><a href="class.intlexception.php">IntlException</a> — Exception class for intl errors</li><li><a href="class.intliterator.php">IntlIterator</a> — The IntlIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="intliterator.current.php">IntlIterator::current</a> — Get the current element</li><li><a href="intliterator.key.php">IntlIterator::key</a> — Get the current key</li><li><a href="intliterator.next.php">IntlIterator::next</a> — Move forward to the next element</li><li><a href="intliterator.rewind.php">IntlIterator::rewind</a> — Rewind the iterator to the first element</li><li><a href="intliterator.valid.php">IntlIterator::valid</a> — Check if current position is valid</li></ul></li><li><a href="ref.intl.php">intl Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.intl-error-name.php">intl_error_name</a> — Get symbolic name for a given error code</li><li><a href="function.intl-get-error-code.php">intl_get_error_code</a> — Get the last error code</li><li><a href="function.intl-get-error-message.php">intl_get_error_message</a> — Get description of the last error</li><li><a href="function.intl-is-failure.php">intl_is_failure</a> — Check whether the given error code indicates failure</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.intl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.intl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.intl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.international.php">Human Language and Character Encoding Support</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.enchant.php" title="Enchant">Enchant</a>
                        </li>
                                                <li class="">
                            <a href="book.gender.php" title="Gender">Gender</a>
                        </li>
                                                <li class="">
                            <a href="book.gettext.php" title="Gettext">Gettext</a>
                        </li>
                                                <li class="">
                            <a href="book.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="current">
                            <a href="book.intl.php" title="intl">intl</a>
                        </li>
                                                <li class="">
                            <a href="book.mbstring.php" title="Multibyte String">Multibyte String</a>
                        </li>
                                                <li class="">
                            <a href="book.pspell.php" title="Pspell">Pspell</a>
                        </li>
                                                <li class="">
                            <a href="book.recode.php" title="Recode">Recode</a>
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
