<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IntlBreakIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.intlbreakiterator.php">
 <link rel="shorturl" href="https://www.php.net/intlbreakiterator">
 <link rel="alternate" href="https://www.php.net/intlbreakiterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/transliterator.transliterate.php">
 <link rel="next" href="https://www.php.net/manual/en/intlbreakiterator.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.intlbreakiterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.intlbreakiterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.intlbreakiterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.intlbreakiterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.intlbreakiterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.intlbreakiterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.intlbreakiterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.intlbreakiterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.intlbreakiterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.intlbreakiterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.intlbreakiterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The IntlBreakIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IntlBreakIterator - Manual" />
<meta name="twitter:description" content="The IntlBreakIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IntlBreakIterator - Manual" />
<meta itemprop="description" content="The IntlBreakIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The IntlBreakIterator class" />

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
        <a href="intlbreakiterator.construct.php">
          IntlBreakIterator::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="transliterator.transliterate.php">
          &laquo; Transliterator::transliterate        </a>
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
            <option value='en/class.intlbreakiterator.php' selected="selected">English</option>
            <option value='de/class.intlbreakiterator.php'>German</option>
            <option value='es/class.intlbreakiterator.php'>Spanish</option>
            <option value='fr/class.intlbreakiterator.php'>French</option>
            <option value='it/class.intlbreakiterator.php'>Italian</option>
            <option value='ja/class.intlbreakiterator.php'>Japanese</option>
            <option value='pt_BR/class.intlbreakiterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.intlbreakiterator.php'>Russian</option>
            <option value='tr/class.intlbreakiterator.php'>Turkish</option>
            <option value='uk/class.intlbreakiterator.php'>Ukrainian</option>
            <option value='zh/class.intlbreakiterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.intlbreakiterator" class="reference">

 <h1 class="title">The IntlBreakIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>


  <div class="section" id="intlbreakiterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A “break iterator” is an ICU object that exposes methods for locating
    boundaries in text (e.g. word or sentence boundaries).
    The PHP <span class="classname"><strong class="classname">IntlBreakIterator</strong></span> serves as the base class
    for all types of ICU break iterators. Where extra functionality is
    available, the intl extension may expose the ICU break iterator with
    suitable subclasses, such as
    <span class="classname"><a href="class.intlrulebasedbreakiterator.php" class="classname">IntlRuleBasedBreakIterator</a></span> or
    <span class="classname"><a href="class.intlcodepointbreakiterator.php" class="classname">IntlCodePointBreakIterator</a></span>.
   </p>
   <p class="para">
    This class implements <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span>. Traversing an
    <span class="classname"><strong class="classname">IntlBreakIterator</strong></span> yields non-negative integer
    values representing the successive locations of the text boundaries,
    expressed as UTF-8 code units (byte) counts, taken from the beginning of
    the text (which has the location <code class="literal">0</code>). The keys yielded
    by the iterator simply form the sequence of natural numbers
    <code class="literal">{0, 1, 2, …}</code>.
   </p>
  </div>


  <div class="section" id="intlbreakiterator.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">IntlBreakIterator</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.done"><var class="varname">DONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-none"><var class="varname">WORD_NONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-none-limit"><var class="varname">WORD_NONE_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-number"><var class="varname">WORD_NUMBER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-number-limit"><var class="varname">WORD_NUMBER_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-letter"><var class="varname">WORD_LETTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-letter-limit"><var class="varname">WORD_LETTER_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-kana"><var class="varname">WORD_KANA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-kana-limit"><var class="varname">WORD_KANA_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-ideo"><var class="varname">WORD_IDEO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-ideo-limit"><var class="varname">WORD_IDEO_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-soft"><var class="varname">LINE_SOFT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-soft-limit"><var class="varname">LINE_SOFT_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-hard"><var class="varname">LINE_HARD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-hard-limit"><var class="varname">LINE_HARD_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-term"><var class="varname">SENTENCE_TERM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-term-limit"><var class="varname">SENTENCE_TERM_LIMIT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-sep"><var class="varname">SENTENCE_SEP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-sep-limit"><var class="varname">SENTENCE_SEP_LIMIT</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">private</span> <span class="methodname"><a href="intlbreakiterator.construct.php" class="methodname">__construct</a></span>()</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createcharacterinstance.php" class="methodname">createCharacterInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlbreakiterator.php" class="type IntlBreakIterator">IntlBreakIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createcodepointinstance.php" class="methodname">createCodePointInstance</a></span>(): <span class="type"><a href="class.intlcodepointbreakiterator.php" class="type IntlCodePointBreakIterator">IntlCodePointBreakIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createlineinstance.php" class="methodname">createLineInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlbreakiterator.php" class="type IntlBreakIterator">IntlBreakIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createsentenceinstance.php" class="methodname">createSentenceInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlbreakiterator.php" class="type IntlBreakIterator">IntlBreakIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createtitleinstance.php" class="methodname">createTitleInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlbreakiterator.php" class="type IntlBreakIterator">IntlBreakIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="intlbreakiterator.createwordinstance.php" class="methodname">createWordInstance</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$locale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.intlbreakiterator.php" class="type IntlBreakIterator">IntlBreakIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.first.php" class="methodname">first</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.following.php" class="methodname">following</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.geterrorcode.php" class="methodname">getErrorCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.geterrormessage.php" class="methodname">getErrorMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.getlocale.php" class="methodname">getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.getpartsiterator.php" class="methodname">getPartsIterator</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code><span class="initializer"> = IntlPartsIterator::KEY_SEQUENTIAL</span></span>): <span class="type"><a href="class.intlpartsiterator.php" class="type IntlPartsIterator">IntlPartsIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.gettext.php" class="methodname">getText</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.isboundary.php" class="methodname">isBoundary</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.last.php" class="methodname">last</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.next.php" class="methodname">next</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$offset</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.preceding.php" class="methodname">preceding</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.previous.php" class="methodname">previous</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="intlbreakiterator.settext.php" class="methodname">setText</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$text</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>


  <div class="section" id="intlbreakiterator.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="intlbreakiterator.constants.done">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.done">IntlBreakIterator::DONE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-none">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-none">IntlBreakIterator::WORD_NONE</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-none-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-none-limit">IntlBreakIterator::WORD_NONE_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-number">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-number">IntlBreakIterator::WORD_NUMBER</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-number-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-number-limit">IntlBreakIterator::WORD_NUMBER_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-letter">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-letter">IntlBreakIterator::WORD_LETTER</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-letter-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-letter-limit">IntlBreakIterator::WORD_LETTER_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-kana">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-kana">IntlBreakIterator::WORD_KANA</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-kana-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-kana-limit">IntlBreakIterator::WORD_KANA_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-ideo">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-ideo">IntlBreakIterator::WORD_IDEO</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.word-ideo-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.word-ideo-limit">IntlBreakIterator::WORD_IDEO_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.line-soft">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-soft">IntlBreakIterator::LINE_SOFT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.line-soft-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-soft-limit">IntlBreakIterator::LINE_SOFT_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.line-hard">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-hard">IntlBreakIterator::LINE_HARD</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.line-hard-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.line-hard-limit">IntlBreakIterator::LINE_HARD_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.sentence-term">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-term">IntlBreakIterator::SENTENCE_TERM</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.sentence-term-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-term-limit">IntlBreakIterator::SENTENCE_TERM_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.sentence-sep">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-sep">IntlBreakIterator::SENTENCE_SEP</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="intlbreakiterator.constants.sentence-sep-limit">
      <strong><code><a href="class.intlbreakiterator.php#intlbreakiterator.constants.sentence-sep-limit">IntlBreakIterator::SENTENCE_SEP_LIMIT</a></code></strong>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    

   </dl>
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

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">IntlBreakIterator</strong></span> implements
        <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> now.
        Previously, <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> was implemented instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>

 









































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="intlbreakiterator.construct.php">IntlBreakIterator::__construct</a> — Private constructor for disallowing instantiation</li><li><a href="intlbreakiterator.createcharacterinstance.php">IntlBreakIterator::createCharacterInstance</a> — Create break iterator for boundaries of combining character sequences</li><li><a href="intlbreakiterator.createcodepointinstance.php">IntlBreakIterator::createCodePointInstance</a> — Create break iterator for boundaries of code points</li><li><a href="intlbreakiterator.createlineinstance.php">IntlBreakIterator::createLineInstance</a> — Create break iterator for logically possible line breaks</li><li><a href="intlbreakiterator.createsentenceinstance.php">IntlBreakIterator::createSentenceInstance</a> — Create break iterator for sentence breaks</li><li><a href="intlbreakiterator.createtitleinstance.php">IntlBreakIterator::createTitleInstance</a> — Create break iterator for title-casing breaks</li><li><a href="intlbreakiterator.createwordinstance.php">IntlBreakIterator::createWordInstance</a> — Create break iterator for word breaks</li><li><a href="intlbreakiterator.current.php">IntlBreakIterator::current</a> — Get index of current position</li><li><a href="intlbreakiterator.first.php">IntlBreakIterator::first</a> — Set position to the first character in the text</li><li><a href="intlbreakiterator.following.php">IntlBreakIterator::following</a> — Advance the iterator to the first boundary following specified offset</li><li><a href="intlbreakiterator.geterrorcode.php">IntlBreakIterator::getErrorCode</a> — Get last error code on the object</li><li><a href="intlbreakiterator.geterrormessage.php">IntlBreakIterator::getErrorMessage</a> — Get last error message on the object</li><li><a href="intlbreakiterator.getlocale.php">IntlBreakIterator::getLocale</a> — Get the locale associated with the object</li><li><a href="intlbreakiterator.getpartsiterator.php">IntlBreakIterator::getPartsIterator</a> — Create iterator for navigating fragments between boundaries</li><li><a href="intlbreakiterator.gettext.php">IntlBreakIterator::getText</a> — Get the text being scanned</li><li><a href="intlbreakiterator.isboundary.php">IntlBreakIterator::isBoundary</a> — Tell whether an offset is a boundaryʼs offset</li><li><a href="intlbreakiterator.last.php">IntlBreakIterator::last</a> — Set the iterator position to index beyond the last character</li><li><a href="intlbreakiterator.next.php">IntlBreakIterator::next</a> — Advance the iterator the next boundary</li><li><a href="intlbreakiterator.preceding.php">IntlBreakIterator::preceding</a> — Set the iterator position to the first boundary before an offset</li><li><a href="intlbreakiterator.previous.php">IntlBreakIterator::previous</a> — Set the iterator position to the boundary immediately before the current</li><li><a href="intlbreakiterator.settext.php">IntlBreakIterator::setText</a> — Set the text being scanned</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/intlbreakiterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.intlbreakiterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.intlbreakiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlbreakiterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113798">  <div class="votes">
    <div id="Vu113798">
    <a href="/manual/vote-note.php?id=113798&amp;page=class.intlbreakiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113798">
    <a href="/manual/vote-note.php?id=113798&amp;page=class.intlbreakiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113798" title="93% like this...">
    14
    </div>
  </div>
  <a href="#113798" class="name">
  <strong class="user"><em>SenseException</em></strong></a><a class="genanchor" href="#113798"> &para;</a><div class="date" title="2013-12-04 08:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113798">
<div class="phpcode"><code><span class="html">Since there is no excample for the usage of the IntlBreakIterator yet, I made a small one:<br /><br /><span class="default">&lt;?php<br /><br />$text </span><span class="keyword">= </span><span class="string">"Si contano i danni. Un morto a Roma, un treno "</span><span class="keyword">.<br /></span><span class="string">"deragliato e quattro feriti a Foggia, strade chiuse in tutto "</span><span class="keyword">.<br /></span><span class="string">"il sud, allagamenti e danni sulla costa ionica. A Pescara, "</span><span class="keyword">.<br /></span><span class="string">"1.500 sfollati per l'esondazione del Fosso Vallelunga. "</span><span class="keyword">.<br /></span><span class="string">"Dall'inizio dell'anno l'agricoltura ha subito un miliardo "</span><span class="keyword">.<br /></span><span class="string">"di euro di danni."</span><span class="keyword">;<br /><br /></span><span class="default">$locale </span><span class="keyword">= </span><span class="string">'it_IT'</span><span class="keyword">;<br /><br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">IntlBreakIterator</span><span class="keyword">::</span><span class="default">createSentenceInstance</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">);<br /></span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">setText</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">getPartsIterator</span><span class="keyword">() as </span><span class="default">$sentence</span><span class="keyword">) {<br />    echo </span><span class="default">$sentence </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">'----- next -----' </span><span class="keyword">.  </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Result:<br /><br />Si contano i danni. <br />----- next -----<br />Un morto a Roma, un treno deragliato e quattro feriti a Foggia, strade chiuse in tutto il sud, allagamenti e danni sulla costa ionica. <br />----- next -----<br />A Pescara, 1.500 sfollati per l'esondazione del Fosso Vallelunga. <br />----- next -----<br />Dall'inizio dell'anno l'agricoltura ha subito un miliardo di euro di danni.<br />----- next -----</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.intlbreakiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.intlbreakiterator.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
