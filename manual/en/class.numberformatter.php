<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: NumberFormatter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.numberformatter.php">
 <link rel="shorturl" href="https://www.php.net/numberformatter">
 <link rel="alternate" href="https://www.php.net/numberformatter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/collator.sortwithsortkeys.php">
 <link rel="next" href="https://www.php.net/manual/en/numberformatter.create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.numberformatter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.numberformatter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.numberformatter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.numberformatter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.numberformatter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.numberformatter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.numberformatter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.numberformatter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.numberformatter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.numberformatter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.numberformatter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The NumberFormatter class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: NumberFormatter - Manual" />
<meta name="twitter:description" content="The NumberFormatter class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: NumberFormatter - Manual" />
<meta itemprop="description" content="The NumberFormatter class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The NumberFormatter class" />

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
        <a href="numberformatter.create.php">
          NumberFormatter::create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="collator.sortwithsortkeys.php">
          &laquo; Collator::sortWithSortKeys        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      </ul>
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
            <option value='en/class.numberformatter.php' selected="selected">English</option>
            <option value='de/class.numberformatter.php'>German</option>
            <option value='es/class.numberformatter.php'>Spanish</option>
            <option value='fr/class.numberformatter.php'>French</option>
            <option value='it/class.numberformatter.php'>Italian</option>
            <option value='ja/class.numberformatter.php'>Japanese</option>
            <option value='pt_BR/class.numberformatter.php'>Brazilian Portuguese</option>
            <option value='ru/class.numberformatter.php'>Russian</option>
            <option value='tr/class.numberformatter.php'>Turkish</option>
            <option value='uk/class.numberformatter.php'>Ukrainian</option>
            <option value='zh/class.numberformatter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.numberformatter" class="reference">
 <h1 class="title">The NumberFormatter class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p>

  
  <div class="section" id="numberformatter.intro">
   <h2 class="title">Introduction</h2>
   <p class="simpara">
    Programs store and operate on numbers using a locale-independent binary
    representation. When displaying or printing a number it is converted to a
    locale-specific string. For example, the number 12345.67 is &quot;12,345.67&quot; in
    the US, &quot;12 345,67&quot; in France and &quot;12.345,67&quot; in Germany.
   </p>
   <p class="simpara">
    By invoking the methods provided by the NumberFormatter class, you can
    format numbers, currencies, and percentages according to the specified or
    default locale. NumberFormatter is locale-sensitive so you need to create
    a new NumberFormatter for each locale. NumberFormatter methods format
    primitive-type numbers, such as double and output the number as a
    locale-specific string.
   </p>
   <p class="para">
    For currencies you can use currency format type to create a formatter that
    returns a string with the formatted number and the appropriate currency
    sign. Of course, the NumberFormatter class is unaware of exchange rates
    so, the number output is the same regardless of the specified currency.
    This means that the same number has different monetary values depending on
    the currency locale. If the number is 9988776.65 the results will be:
    <ul class="simplelist">
     <li>9 988 776,65 € in France</li>
     <li>9.988.776,65 € in Germany</li>
     <li>$9,988,776.65 in the United States</li>
    </ul>
   </p>
   <p class="simpara">
    In order to format percentages, create a locale-specific formatter with
    percentage format type. With this formatter, a decimal fraction such as
    0.75 is displayed as 75%.
   </p>
   <p class="simpara">
    For more complex formatting, like spelled-out numbers, the rule-based
    number formatters are used.
   </p>
  </div>
  

  <div class="section" id="numberformatter.synopsis">
   <h2 class="title">Class synopsis</h2>

   
   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">NumberFormatter</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pattern-decimal"><var class="varname">PATTERN_DECIMAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.decimal"><var class="varname">DECIMAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.currency"><var class="varname">CURRENCY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.percent"><var class="varname">PERCENT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.scientific"><var class="varname">SCIENTIFIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.spellout"><var class="varname">SPELLOUT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.ordinal"><var class="varname">ORDINAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.duration"><var class="varname">DURATION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pattern-rulebased"><var class="varname">PATTERN_RULEBASED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.ignore"><var class="varname">IGNORE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.currency-accounting"><var class="varname">CURRENCY_ACCOUNTING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.default-style"><var class="varname">DEFAULT_STYLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-ceiling"><var class="varname">ROUND_CEILING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-floor"><var class="varname">ROUND_FLOOR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-down"><var class="varname">ROUND_DOWN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-up"><var class="varname">ROUND_UP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-toward-zero"><var class="varname">ROUND_TOWARD_ZERO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-away-from-zero"><var class="varname">ROUND_AWAY_FROM_ZERO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-halfeven"><var class="varname">ROUND_HALFEVEN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-halfodd"><var class="varname">ROUND_HALFODD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-halfdown"><var class="varname">ROUND_HALFDOWN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.round-halfup"><var class="varname">ROUND_HALFUP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pad-before-prefix"><var class="varname">PAD_BEFORE_PREFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pad-after-prefix"><var class="varname">PAD_AFTER_PREFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pad-before-suffix"><var class="varname">PAD_BEFORE_SUFFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pad-after-suffix"><var class="varname">PAD_AFTER_SUFFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.parse-int-only"><var class="varname">PARSE_INT_ONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.grouping-used"><var class="varname">GROUPING_USED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.decimal-always-shown"><var class="varname">DECIMAL_ALWAYS_SHOWN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.max-integer-digits"><var class="varname">MAX_INTEGER_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.min-integer-digits"><var class="varname">MIN_INTEGER_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.integer-digits"><var class="varname">INTEGER_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.max-fraction-digits"><var class="varname">MAX_FRACTION_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.min-fraction-digits"><var class="varname">MIN_FRACTION_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.fraction-digits"><var class="varname">FRACTION_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.multiplier"><var class="varname">MULTIPLIER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.grouping-size"><var class="varname">GROUPING_SIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.rounding-mode"><var class="varname">ROUNDING_MODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.rounding-increment"><var class="varname">ROUNDING_INCREMENT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.format-width"><var class="varname">FORMAT_WIDTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.padding-position"><var class="varname">PADDING_POSITION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.secondary-grouping-size"><var class="varname">SECONDARY_GROUPING_SIZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.significant-digits-used"><var class="varname">SIGNIFICANT_DIGITS_USED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.min-significant-digits"><var class="varname">MIN_SIGNIFICANT_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.max-significant-digits"><var class="varname">MAX_SIGNIFICANT_DIGITS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.lenient-parse"><var class="varname">LENIENT_PARSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.positive-prefix"><var class="varname">POSITIVE_PREFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.positive-suffix"><var class="varname">POSITIVE_SUFFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.negative-prefix"><var class="varname">NEGATIVE_PREFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.negative-suffix"><var class="varname">NEGATIVE_SUFFIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.padding-character"><var class="varname">PADDING_CHARACTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.currency-code"><var class="varname">CURRENCY_CODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.default-ruleset"><var class="varname">DEFAULT_RULESET</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.public-rulesets"><var class="varname">PUBLIC_RULESETS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.decimal-separator-symbol"><var class="varname">DECIMAL_SEPARATOR_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.grouping-separator-symbol"><var class="varname">GROUPING_SEPARATOR_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pattern-separator-symbol"><var class="varname">PATTERN_SEPARATOR_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.percent-symbol"><var class="varname">PERCENT_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.zero-digit-symbol"><var class="varname">ZERO_DIGIT_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.digit-symbol"><var class="varname">DIGIT_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.minus-sign-symbol"><var class="varname">MINUS_SIGN_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.plus-sign-symbol"><var class="varname">PLUS_SIGN_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.currency-symbol"><var class="varname">CURRENCY_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.intl-currency-symbol"><var class="varname">INTL_CURRENCY_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.monetary-separator-symbol"><var class="varname">MONETARY_SEPARATOR_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.exponential-symbol"><var class="varname">EXPONENTIAL_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.permill-symbol"><var class="varname">PERMILL_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.pad-escape-symbol"><var class="varname">PAD_ESCAPE_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.infinity-symbol"><var class="varname">INFINITY_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.nan-symbol"><var class="varname">NAN_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.significant-digit-symbol"><var class="varname">SIGNIFICANT_DIGIT_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.monetary-grouping-separator-symbol"><var class="varname">MONETARY_GROUPING_SEPARATOR_SYMBOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.type-default"><var class="varname">TYPE_DEFAULT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.type-int32"><var class="varname">TYPE_INT32</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.type-int64"><var class="varname">TYPE_INT64</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.type-double"><var class="varname">TYPE_DOUBLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.numberformatter.php#numberformatter.constants.type-currency"><var class="varname">TYPE_CURRENCY</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="numberformatter.create.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$style</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$pattern</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="numberformatter.create.php" class="methodname">create</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$style</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$pattern</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.numberformatter.php" class="type NumberFormatter">NumberFormatter</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.format.php" class="methodname">format</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = NumberFormatter::TYPE_DEFAULT</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.formatcurrency.php" class="methodname">formatCurrency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$amount</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$currency</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.getattribute.php" class="methodname">getAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.geterrorcode.php" class="methodname">getErrorCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.geterrormessage.php" class="methodname">getErrorMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.getlocale.php" class="methodname">getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="intl.constants.php#constant.uloc-actual-locale">ULOC_ACTUAL_LOCALE</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.getpattern.php" class="methodname">getPattern</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.getsymbol.php" class="methodname">getSymbol</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$symbol</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.gettextattribute.php" class="methodname">getTextAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.parse.php" class="methodname">parse</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = NumberFormatter::TYPE_DOUBLE</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$offset</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.parsecurrency.php" class="methodname">parseCurrency</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$currency</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$offset</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.setattribute.php" class="methodname">setAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.setpattern.php" class="methodname">setPattern</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.setsymbol.php" class="methodname">setSymbol</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$symbol</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="numberformatter.settextattribute.php" class="methodname">setTextAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
   

  </div>

  

  

<div class="section" id="intl.numberformatter-constants">
 <h2 class="title">Predefined Constants</h2>

 <div class="section" id="intl.numberformatter-constants.unumberformatstyle">
  <h2 class="title">Format Types</h2>
  <p class="para">
   These styles are used by the <span class="function"><a href="numberformatter.create.php" class="function">numfmt_create()</a></span>
   to define the type of the formatter.
   <dl>
    
     <dt id="numberformatter.constants.pattern-decimal">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pattern-decimal">NumberFormatter::PATTERN_DECIMAL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Decimal format defined by pattern</span>
     </dd>
    

    
     <dt id="numberformatter.constants.decimal">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.decimal">NumberFormatter::DECIMAL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Decimal format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.currency">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.currency">NumberFormatter::CURRENCY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Currency format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.percent">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.percent">NumberFormatter::PERCENT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Percent format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.scientific">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.scientific">NumberFormatter::SCIENTIFIC</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Scientific format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.spellout">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.spellout">NumberFormatter::SPELLOUT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Spellout rule-based format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.ordinal">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.ordinal">NumberFormatter::ORDINAL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Ordinal rule-based format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.duration">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.duration">NumberFormatter::DURATION</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Duration rule-based format</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pattern-rulebased">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pattern-rulebased">NumberFormatter::PATTERN_RULEBASED</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rule-based format defined by pattern</span>
     </dd>
    

    
     <dt id="numberformatter.constants.currency-accounting">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.currency-accounting">NumberFormatter::CURRENCY_ACCOUNTING</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       Currency format for accounting, e.g., <code class="literal">($3.00)</code> for negative currency amount
       instead of <code class="literal">-$3.00</code>. Available as of PHP 7.4.1 and ICU 53.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.default-style">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.default-style">NumberFormatter::DEFAULT_STYLE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Default format for the locale</span>
     </dd>
    

    
     <dt id="numberformatter.constants.ignore">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.ignore">NumberFormatter::IGNORE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Alias for PATTERN_DECIMAL</span>
     </dd>
    
   </dl>

  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.types">
  <h2 class="title">Number Format Specifiers</h2>
  <p class="para">
   These constants define how the numbers are parsed or formatted. They should
   be used as arguments to <span class="function"><a href="numberformatter.format.php" class="function">numfmt_format()</a></span>
   and <span class="function"><a href="numberformatter.parse.php" class="function">numfmt_parse()</a></span>.
   <dl>
    
     <dt id="numberformatter.constants.type-default">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.type-default">NumberFormatter::TYPE_DEFAULT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Derive the type from variable type</span>
     </dd>
    

    
     <dt id="numberformatter.constants.type-int32">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.type-int32">NumberFormatter::TYPE_INT32</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Format/parse as 32-bit integer</span>
     </dd>
    

    
     <dt id="numberformatter.constants.type-int64">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.type-int64">NumberFormatter::TYPE_INT64</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Format/parse as 64-bit integer</span>
     </dd>
    

    
     <dt id="numberformatter.constants.type-double">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.type-double">NumberFormatter::TYPE_DOUBLE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Format/parse as floating point value</span>
     </dd>
    

    
     <dt id="numberformatter.constants.type-currency">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.type-currency">NumberFormatter::TYPE_CURRENCY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Format/parse as currency value. Deprecated as of PHP 8.3.0</span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.unumberformatattribute">
  <h2 class="title">Number Format Attributes</h2>
  <p class="para">
   Number format attribute used by
   <span class="function"><a href="numberformatter.getattribute.php" class="function">numfmt_get_attribute()</a></span>
   and
   <span class="function"><a href="numberformatter.setattribute.php" class="function">numfmt_set_attribute()</a></span>.
   <dl>
    
     <dt id="numberformatter.constants.parse-int-only">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.parse-int-only">NumberFormatter::PARSE_INT_ONLY</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Parse integers only.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.grouping-used">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.grouping-used">NumberFormatter::GROUPING_USED</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Use grouping separator.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.decimal-always-shown">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.decimal-always-shown">NumberFormatter::DECIMAL_ALWAYS_SHOWN</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Always show decimal point.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.max-integer-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.max-integer-digits">NumberFormatter::MAX_INTEGER_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Maximum integer digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.min-integer-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.min-integer-digits">NumberFormatter::MIN_INTEGER_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Minimum integer digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.integer-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.integer-digits">NumberFormatter::INTEGER_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Integer digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.max-fraction-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.max-fraction-digits">NumberFormatter::MAX_FRACTION_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Maximum fraction digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.min-fraction-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.min-fraction-digits">NumberFormatter::MIN_FRACTION_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Minimum fraction digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.fraction-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.fraction-digits">NumberFormatter::FRACTION_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Fraction digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.multiplier">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.multiplier">NumberFormatter::MULTIPLIER</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Multiplier.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.grouping-size">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.grouping-size">NumberFormatter::GROUPING_SIZE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Grouping size.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.rounding-mode">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.rounding-mode">NumberFormatter::ROUNDING_MODE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding Mode.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.rounding-increment">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.rounding-increment">NumberFormatter::ROUNDING_INCREMENT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding increment.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.format-width">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.format-width">NumberFormatter::FORMAT_WIDTH</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The width to which the output of format() is padded.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.padding-position">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.padding-position">NumberFormatter::PADDING_POSITION</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       The position at which padding will take place. See pad position
       constants for possible argument values.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.secondary-grouping-size">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.secondary-grouping-size">NumberFormatter::SECONDARY_GROUPING_SIZE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Secondary grouping size.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.significant-digits-used">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.significant-digits-used">NumberFormatter::SIGNIFICANT_DIGITS_USED</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Use significant digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.min-significant-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.min-significant-digits">NumberFormatter::MIN_SIGNIFICANT_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Minimum significant digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.max-significant-digits">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.max-significant-digits">NumberFormatter::MAX_SIGNIFICANT_DIGITS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Maximum significant digits.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.lenient-parse">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.lenient-parse">NumberFormatter::LENIENT_PARSE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Lenient parse mode used by rule-based formats.</span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.unumberformattextattribute">
  <h2 class="title">Number Format Text Attributes</h2>
  <p class="para">
   Number format text attribute used by
   <span class="function"><a href="numberformatter.gettextattribute.php" class="function">numfmt_get_text_attribute()</a></span> and
   <span class="function"><a href="numberformatter.settextattribute.php" class="function">numfmt_set_text_attribute()</a></span>.
   <dl>
    
     <dt id="numberformatter.constants.positive-prefix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.positive-prefix">NumberFormatter::POSITIVE_PREFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Positive prefix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.positive-suffix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.positive-suffix">NumberFormatter::POSITIVE_SUFFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Positive suffix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.negative-prefix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.negative-prefix">NumberFormatter::NEGATIVE_PREFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Negative prefix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.negative-suffix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.negative-suffix">NumberFormatter::NEGATIVE_SUFFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Negative suffix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.padding-character">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.padding-character">NumberFormatter::PADDING_CHARACTER</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The character used to pad to the format width.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.currency-code">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.currency-code">NumberFormatter::CURRENCY_CODE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The ISO currency code.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.default-ruleset">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.default-ruleset">NumberFormatter::DEFAULT_RULESET</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       The default rule set. This is only available with rule-based
       formatters.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.public-rulesets">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.public-rulesets">NumberFormatter::PUBLIC_RULESETS</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       The public rule sets. This is only available with rule-based
       formatters. This is a read-only attribute. The public rulesets are
       returned as a single string, with each ruleset name delimited by &#039;;&#039;
       (semicolon).
      </span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.unumberformatsymbol">
  <h2 class="title">Symbol Format Specifiers</h2>
  <p class="para">
   Number format symbols used by <span class="function"><a href="numberformatter.getsymbol.php" class="function">numfmt_get_symbol()</a></span>
   and <span class="function"><a href="numberformatter.setsymbol.php" class="function">numfmt_set_symbol()</a></span>.
   <dl>
    
     <dt id="numberformatter.constants.decimal-separator-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.decimal-separator-symbol">NumberFormatter::DECIMAL_SEPARATOR_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The decimal separator.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.grouping-separator-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.grouping-separator-symbol">NumberFormatter::GROUPING_SEPARATOR_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The grouping separator.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pattern-separator-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pattern-separator-symbol">NumberFormatter::PATTERN_SEPARATOR_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The pattern separator.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.percent-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.percent-symbol">NumberFormatter::PERCENT_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The percent sign.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.zero-digit-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.zero-digit-symbol">NumberFormatter::ZERO_DIGIT_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Zero.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.digit-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.digit-symbol">NumberFormatter::DIGIT_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Character representing a digit in the pattern.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.minus-sign-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.minus-sign-symbol">NumberFormatter::MINUS_SIGN_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The minus sign.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.plus-sign-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.plus-sign-symbol">NumberFormatter::PLUS_SIGN_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The plus sign.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.currency-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.currency-symbol">NumberFormatter::CURRENCY_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The currency symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.intl-currency-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.intl-currency-symbol">NumberFormatter::INTL_CURRENCY_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The international currency symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.monetary-separator-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.monetary-separator-symbol">NumberFormatter::MONETARY_SEPARATOR_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
     <dd>
      <span class="simpara">The monetary separator.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.exponential-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.exponential-symbol">NumberFormatter::EXPONENTIAL_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The exponential symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.permill-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.permill-symbol">NumberFormatter::PERMILL_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Per mill symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pad-escape-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pad-escape-symbol">NumberFormatter::PAD_ESCAPE_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Escape padding character.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.infinity-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.infinity-symbol">NumberFormatter::INFINITY_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Infinity symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.nan-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.nan-symbol">NumberFormatter::NAN_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Not-a-number symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.significant-digit-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.significant-digit-symbol">NumberFormatter::SIGNIFICANT_DIGIT_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Significant digit symbol.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.monetary-grouping-separator-symbol">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.monetary-grouping-separator-symbol">NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">The monetary grouping separator.</span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.unumberformatroundingmode">
  <h2 class="title">Rounding Modes</h2>
  <p class="para">
   Rounding mode values used by <span class="function"><a href="numberformatter.getattribute.php" class="function">numfmt_get_attribute()</a></span>
   and <span class="function"><a href="numberformatter.setattribute.php" class="function">numfmt_set_attribute()</a></span> with
   <strong><code><a href="class.numberformatter.php#numberformatter.constants.rounding-mode">NumberFormatter::ROUNDING_MODE</a></code></strong> attribute.
   <dl>

    
     <dt id="numberformatter.constants.round-away-from-zero">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-away-from-zero">NumberFormatter::ROUND_AWAY_FROM_ZERO</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">Alias of <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-up">NumberFormatter::ROUND_UP</a></code></strong>.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-ceiling">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-ceiling">NumberFormatter::ROUND_CEILING</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding mode to round towards positive infinity.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-down">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-down">NumberFormatter::ROUND_DOWN</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding mode to round towards zero.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-floor">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-floor">NumberFormatter::ROUND_FLOOR</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding mode to round towards negative infinity.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-halfdown">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfdown">NumberFormatter::ROUND_HALFDOWN</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       Rounding mode to round towards &quot;nearest neighbor&quot; unless both neighbors
       are equidistant, in which case round down.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-halfeven">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfeven">NumberFormatter::ROUND_HALFEVEN</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       Rounding mode to round towards the &quot;nearest neighbor&quot; unless both
       neighbors are equidistant, in which case, round towards the even
       neighbor.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-halfodd">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfodd">NumberFormatter::ROUND_HALFODD</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Rounding mode to round towards the &quot;odd neighbor&quot;.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-halfup">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfup">NumberFormatter::ROUND_HALFUP</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">
       Rounding mode to round towards &quot;nearest neighbor&quot; unless both neighbors
       are equidistant, in which case round up.
      </span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-toward-zero">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-toward-zero">NumberFormatter::ROUND_TOWARD_ZERO</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">Alias of <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-down">NumberFormatter::ROUND_DOWN</a></code></strong>.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.round-up">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-up">NumberFormatter::ROUND_UP</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Rounding mode to round away from zero.</span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="section" id="intl.numberformatter-constants.unumberformatpadposition">
  <h2 class="title">Padding Specifiers</h2>
  <p class="para">
   Pad position values used by <span class="function"><a href="numberformatter.getattribute.php" class="function">numfmt_get_attribute()</a></span>
   and <span class="function"><a href="numberformatter.setattribute.php" class="function">numfmt_set_attribute()</a></span> with
   <strong><code><a href="class.numberformatter.php#numberformatter.constants.padding-position">NumberFormatter::PADDING_POSITION</a></code></strong> attribute.
   <dl>
    
     <dt id="numberformatter.constants.pad-after-prefix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pad-after-prefix">NumberFormatter::PAD_AFTER_PREFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Pad characters inserted after the prefix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pad-after-suffix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pad-after-suffix">NumberFormatter::PAD_AFTER_SUFFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Pad characters inserted after the suffix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pad-before-prefix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pad-before-prefix">NumberFormatter::PAD_BEFORE_PREFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Pad characters inserted before the prefix.</span>
     </dd>
    

    
     <dt id="numberformatter.constants.pad-before-suffix">
      <strong><code><a href="class.numberformatter.php#numberformatter.constants.pad-before-suffix">NumberFormatter::PAD_BEFORE_SUFFIX</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <span class="simpara">Pad characters inserted before the suffix.</span>
     </dd>
    
   </dl>
  </p>
 </div>

</div>





  <div class="section" id="numberformatter.seealso">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li>
      <a href="https://unicode-org.github.io/icu/userguide/format_parse/" class="link external">&raquo;&nbsp;
       ICU formatting documentation
      </a>
     </li>
     <li>
      <a href="https://unicode-org.github.io/icu/userguide/format_parse/numbers/" class="link external">&raquo;&nbsp;ICU number formatters</a>
     </li>
     <li>
      <a href="https://unicode-org.github.io/icu-docs/apidoc/released/icu4c/classDecimalFormat.html" class="link external">&raquo;&nbsp;ICU decimal formatters</a>
     </li>
     <li>
      <a href="https://unicode-org.github.io/icu/userguide/format_parse/numbers/rbnf.html" class="link external">&raquo;&nbsp;
       ICU rule-based number formatters
      </a>
     </li>
    </ul>
   </p>
  </div>

  <div class="section">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        The class constants are now typed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 
















































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="numberformatter.create.php">NumberFormatter::create</a> — Create a number formatter</li><li><a href="numberformatter.format.php">NumberFormatter::format</a> — Format a number</li><li><a href="numberformatter.formatcurrency.php">NumberFormatter::formatCurrency</a> — Format a currency value</li><li><a href="numberformatter.getattribute.php">NumberFormatter::getAttribute</a> — Get an attribute</li><li><a href="numberformatter.geterrorcode.php">NumberFormatter::getErrorCode</a> — Get formatter's last error code</li><li><a href="numberformatter.geterrormessage.php">NumberFormatter::getErrorMessage</a> — Get formatter's last error message</li><li><a href="numberformatter.getlocale.php">NumberFormatter::getLocale</a> — Get formatter locale</li><li><a href="numberformatter.getpattern.php">NumberFormatter::getPattern</a> — Get formatter pattern</li><li><a href="numberformatter.getsymbol.php">NumberFormatter::getSymbol</a> — Get a symbol value</li><li><a href="numberformatter.gettextattribute.php">NumberFormatter::getTextAttribute</a> — Get a text attribute</li><li><a href="numberformatter.parse.php">NumberFormatter::parse</a> — Parse a number</li><li><a href="numberformatter.parsecurrency.php">NumberFormatter::parseCurrency</a> — Parse a currency number</li><li><a href="numberformatter.setattribute.php">NumberFormatter::setAttribute</a> — Set an attribute</li><li><a href="numberformatter.setpattern.php">NumberFormatter::setPattern</a> — Set formatter pattern</li><li><a href="numberformatter.setsymbol.php">NumberFormatter::setSymbol</a> — Set a symbol value</li><li><a href="numberformatter.settextattribute.php">NumberFormatter::setTextAttribute</a> — Set a text attribute</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/numberformatter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.numberformatter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.numberformatter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.numberformatter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103030">  <div class="votes">
    <div id="Vu103030">
    <a href="/manual/vote-note.php?id=103030&amp;page=class.numberformatter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103030">
    <a href="/manual/vote-note.php?id=103030&amp;page=class.numberformatter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103030" title="83% like this...">
    50
    </div>
  </div>
  <a href="#103030" class="name">
  <strong class="user"><em>giorgio dot liscio at email dot it</em></strong></a><a class="genanchor" href="#103030"> &para;</a><div class="date" title="2011-03-21 10:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103030">
<div class="phpcode"><code><span class="html">this class seems to be painful: it is not, formatting and parsing are highly customizable, but what you probably need is really simple:
<br />
<br />if you want to localize a number use:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= new </span><span class="default">\NumberFormatter</span><span class="keyword">(</span><span class="string">"it-IT"</span><span class="keyword">, </span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">DECIMAL</span><span class="keyword">);
<br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">12345.12345</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs 12.345,12
<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">MIN_FRACTION_DIGITS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">MAX_FRACTION_DIGITS</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">); </span><span class="comment">// by default some locales got max 2 fraction digits, that is probably not what you want
<br /></span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">12345.12345</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs 12.345,12345
<br /></span><span class="default">?&gt;
<br /></span>
<br />if you want to print money use:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= new </span><span class="default">\NumberFormatter</span><span class="keyword">(</span><span class="string">"it-IT"</span><span class="keyword">, </span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);
<br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">12345.12345</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs €12.345,12
<br /></span><span class="default">?&gt;
<br /></span>
<br />if you have money data stored as (for example) US dollars and you want to print them using the it-IT notation, you need to use
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= new </span><span class="default">\NumberFormatter</span><span class="keyword">(</span><span class="string">"it-IT"</span><span class="keyword">, </span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);
<br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(</span><span class="default">12345</span><span class="keyword">, </span><span class="string">"USD"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs $ 12.345,00 and it is formatted using the italian notation (comma as decimal separator)
<br /></span><span class="default">?&gt;
<br /></span>
<br />another useful example about currency (how to obtain the currency name by a locale string):
<br />
<br /><span class="default">&lt;?php
<br />$frontEndFormatter </span><span class="keyword">= new </span><span class="default">\NumberFormatter</span><span class="keyword">(</span><span class="string">"it-IT"</span><span class="keyword">, </span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);
<br /></span><span class="default">$adminFormatter </span><span class="keyword">= new </span><span class="default">\NumberFormatter</span><span class="keyword">(</span><span class="string">"en-US"</span><span class="keyword">, </span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">CURRENCY</span><span class="keyword">);
<br /></span><span class="default">$symbol </span><span class="keyword">= </span><span class="default">$adminFormatter</span><span class="keyword">-&gt;</span><span class="default">getSymbol</span><span class="keyword">(</span><span class="default">\NumberFormatter</span><span class="keyword">::</span><span class="default">INTL_CURRENCY_SYMBOL</span><span class="keyword">); </span><span class="comment">// got USD
<br /></span><span class="keyword">echo </span><span class="default">$frontEndFormatter</span><span class="keyword">-&gt;</span><span class="default">formatCurrency</span><span class="keyword">(</span><span class="default">12345.12345</span><span class="keyword">,  </span><span class="default">$symbol</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128214">  <div class="votes">
    <div id="Vu128214">
    <a href="/manual/vote-note.php?id=128214&amp;page=class.numberformatter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128214">
    <a href="/manual/vote-note.php?id=128214&amp;page=class.numberformatter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128214" title="80% like this...">
    6
    </div>
  </div>
  <a href="#128214" class="name">
  <strong class="user"><em>jimbo2150 at gmail dot com</em></strong></a><a class="genanchor" href="#128214"> &para;</a><div class="date" title="2023-02-12 06:24"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128214">
<div class="phpcode"><code><span class="html">The NumberFormatter class can be used to convert integer numbers to Roman numerals without a custom function using an array of symbols and associated values:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">int $num</span><span class="keyword">) {<br />    static </span><span class="default">$nf </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">'@numbers=roman'</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">DECIMAL</span><span class="keyword">);<br />    return </span><span class="default">$nf</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">);<br />}<br /><br />echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// II<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// V<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">); </span><span class="comment">// X<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">); </span><span class="comment">// L<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">57</span><span class="keyword">); </span><span class="comment">// LVII<br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">58</span><span class="keyword">); </span><span class="comment">// LVIII<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">); </span><span class="comment">// C<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">150</span><span class="keyword">); </span><span class="comment">// CL<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">); </span><span class="comment">// M<br /><br /></span><span class="keyword">echo </span><span class="default">intToRomanNumeral</span><span class="keyword">(</span><span class="default">10000</span><span class="keyword">); </span><span class="comment">// ↂ<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125492">  <div class="votes">
    <div id="Vu125492">
    <a href="/manual/vote-note.php?id=125492&amp;page=class.numberformatter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125492">
    <a href="/manual/vote-note.php?id=125492&amp;page=class.numberformatter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125492" title="66% like this...">
    3
    </div>
  </div>
  <a href="#125492" class="name">
  <strong class="user"><em>stan at dragnev dot ca</em></strong></a><a class="genanchor" href="#125492"> &para;</a><div class="date" title="2020-11-06 04:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125492">
<div class="phpcode"><code><span class="html">Here's an example of how to use PATTERN_DECIMAL to print a number with two fraction digits, use () for negative numbers and pad to five characters to the left of the decimal point, using spaces as the padding character:<br /><br /><span class="default">&lt;?php<br /><br />$fmt </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">"en-CA"</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">PATTERN_DECIMAL</span><span class="keyword">, </span><span class="string">"* #####.00 ;(* #####.00)"</span><span class="keyword">);<br />echo </span><span class="default">$fmt</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(-</span><span class="default">45.1</span><span class="keyword">);<br /><br /></span><span class="comment">// Outputs: "  (45.10)"<br /><br /></span><span class="default">?&gt;<br /></span><br />Note that the ; in the pattern denotes the beginning of a subpattern, which is used for negative numbers. Hence the brackets around the pattern after the semicolon.</span></code></div>
  </div>
 </div>
  <div class="note" id="101819">  <div class="votes">
    <div id="Vu101819">
    <a href="/manual/vote-note.php?id=101819&amp;page=class.numberformatter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101819">
    <a href="/manual/vote-note.php?id=101819&amp;page=class.numberformatter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101819" title="51% like this...">
    3
    </div>
  </div>
  <a href="#101819" class="name">
  <strong class="user"><em>sudheer at binaryvibes dot co dot in</em></strong></a><a class="genanchor" href="#101819"> &para;</a><div class="date" title="2011-01-12 12:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101819">
<div class="phpcode"><code><span class="html">Sample script to print number in English.<br /><br /><span class="default">&lt;?php<br />$f </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(</span><span class="string">"en"</span><span class="keyword">, </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">SPELLOUT</span><span class="keyword">);<br />echo </span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">123456</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Produces the result:<br />one hundred twenty-three thousand four hundred fifty-six</span></code></div>
  </div>
 </div>
  <div class="note" id="129192">  <div class="votes">
    <div id="Vu129192">
    <a href="/manual/vote-note.php?id=129192&amp;page=class.numberformatter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129192">
    <a href="/manual/vote-note.php?id=129192&amp;page=class.numberformatter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129192" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129192" class="name">
  <strong class="user"><em>Einenlum</em></strong></a><a class="genanchor" href="#129192"> &para;</a><div class="date" title="2024-01-23 06:49"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129192">
<div class="phpcode"><code><span class="html">Be aware that (at least with the locale 'fr-FR') NumberFormatter doesn't use spaces. It doesn't even use non breakable spaces (NBSP). It uses narrow non breakable spaces (NNBSP). This broke my tests.<br /><br /><span class="default">&lt;?php<br /><br />$formatter </span><span class="keyword">= new </span><span class="default">NumberFormatter</span><span class="keyword">(<br />    </span><span class="string">'fr-FR'</span><span class="keyword">,<br />    </span><span class="default">NumberFormatter</span><span class="keyword">::</span><span class="default">DEFAULT_STYLE<br /></span><span class="keyword">);<br /><br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">$formatter</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">100_000</span><span class="keyword">); </span><span class="comment">// '100 000'<br /><br />// If you want to replace narrow non breakable spaces with non breakable spaces:<br /><br /></span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\u{202F}"</span><span class="keyword">, </span><span class="string">"\u{00A0}"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br /><br /></span><span class="comment">// If you want to replace it with a normal space<br /><br /></span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\u{202F}"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.numberformatter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.numberformatter.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.intl.php">intl</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.intl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="intl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="intl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="intl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.collator.php" title="Collator">Collator</a>
                        </li>
                                                <li class="current">
                            <a href="class.numberformatter.php" title="NumberFormatter">NumberFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.locale.php" title="Locale">Locale</a>
                        </li>
                                                <li class="">
                            <a href="class.normalizer.php" title="Normalizer">Normalizer</a>
                        </li>
                                                <li class="">
                            <a href="class.messageformatter.php" title="MessageFormatter">MessageFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcalendar.php" title="IntlCalendar">IntlCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlgregoriancalendar.php" title="IntlGregorianCalendar">IntlGregorianCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intltimezone.php" title="IntlTimeZone">IntlTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="class.intldateformatter.php" title="IntlDateFormatter">IntlDateFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.resourcebundle.php" title="ResourceBundle">ResourceBundle</a>
                        </li>
                                                <li class="">
                            <a href="class.spoofchecker.php" title="Spoofchecker">Spoofchecker</a>
                        </li>
                                                <li class="">
                            <a href="class.transliterator.php" title="Transliterator">Transliterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlbreakiterator.php" title="IntlBreakIterator">IntlBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlrulebasedbreakiterator.php" title="IntlRuleBasedBreakIterator">IntlRuleBasedBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcodepointbreakiterator.php" title="IntlCodePointBreakIterator">IntlCodePointBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intldatepatterngenerator.php" title="IntlDatePatternGenerator">IntlDatePatternGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlpartsiterator.php" title="IntlPartsIterator">IntlPartsIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.uconverter.php" title="UConverter">UConverter</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.grapheme.php" title="Grapheme Functions">Grapheme Functions</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.idn.php" title="IDN Functions">IDN Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.intlchar.php" title="IntlChar">IntlChar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlexception.php" title="IntlException">IntlException</a>
                        </li>
                                                <li class="">
                            <a href="class.intliterator.php" title="IntlIterator">IntlIterator</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.php" title="intl Functions">intl Functions</a>
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
