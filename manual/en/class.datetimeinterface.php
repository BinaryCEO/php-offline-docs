<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateTimeInterface - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.datetimeinterface.php">
 <link rel="shorturl" href="https://www.php.net/datetimeinterface">
 <link rel="alternate" href="https://www.php.net/datetimeinterface" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/datetimeimmutable.sub.php">
 <link rel="next" href="https://www.php.net/manual/en/datetime.diff.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.datetimeinterface.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.datetimeinterface.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.datetimeinterface.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.datetimeinterface.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.datetimeinterface.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.datetimeinterface.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.datetimeinterface.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.datetimeinterface.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.datetimeinterface.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.datetimeinterface.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.datetimeinterface.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DateTimeInterface interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateTimeInterface - Manual" />
<meta name="twitter:description" content="The DateTimeInterface interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateTimeInterface - Manual" />
<meta itemprop="description" content="The DateTimeInterface interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DateTimeInterface interface" />

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
        <a href="datetime.diff.php">
          DateTimeInterface::diff &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="datetimeimmutable.sub.php">
          &laquo; DateTimeImmutable::sub        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      </ul>
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
            <option value='en/class.datetimeinterface.php' selected="selected">English</option>
            <option value='de/class.datetimeinterface.php'>German</option>
            <option value='es/class.datetimeinterface.php'>Spanish</option>
            <option value='fr/class.datetimeinterface.php'>French</option>
            <option value='it/class.datetimeinterface.php'>Italian</option>
            <option value='ja/class.datetimeinterface.php'>Japanese</option>
            <option value='pt_BR/class.datetimeinterface.php'>Brazilian Portuguese</option>
            <option value='ru/class.datetimeinterface.php'>Russian</option>
            <option value='tr/class.datetimeinterface.php'>Turkish</option>
            <option value='uk/class.datetimeinterface.php'>Ukrainian</option>
            <option value='zh/class.datetimeinterface.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.datetimeinterface" class="reference">

 <h1 class="title">The DateTimeInterface interface</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>


  <div class="section" id="datetimeinterface.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="interfacename"><strong class="interfacename">DateTimeInterface</strong></span> was created
    so that parameter, return, or property type declarations may accept either 
    <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> or <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span>
    as a value. It is not possible to
    implement this interface with userland classes.
   </p>
   <p class="para">
    Common constants that allow for formatting
    <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> or
    <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> objects through
    <span class="methodname"><a href="datetime.format.php" class="methodname">DateTimeImmutable::format()</a></span> and
    <span class="methodname"><a href="datetime.format.php" class="methodname">DateTime::format()</a></span> are also defined on this
    interface.
   </p>
  </div>


  <div class="section" id="datetimeinterface.synopsis">
   <h2 class="title">Interface synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">DateTimeInterface</strong></strong> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.atom"><var class="varname">ATOM</var></a></var><span class="initializer"> = &quot;Y-m-d\\TH:i:sP&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.cookie"><var class="varname">COOKIE</var></a></var><span class="initializer"> = &quot;l, d-M-Y H:i:s T&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601"><var class="varname">ISO8601</var></a></var><span class="initializer"> = &quot;Y-m-d\\TH:i:sO&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601-expanded"><var class="varname">ISO8601_EXPANDED</var></a></var><span class="initializer"> = &quot;X-m-d\\TH:i:sP&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc822"><var class="varname">RFC822</var></a></var><span class="initializer"> = &quot;D, d M y H:i:s O&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc850"><var class="varname">RFC850</var></a></var><span class="initializer"> = &quot;l, d-M-y H:i:s T&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc1036"><var class="varname">RFC1036</var></a></var><span class="initializer"> = &quot;D, d M y H:i:s O&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc1123"><var class="varname">RFC1123</var></a></var><span class="initializer"> = &quot;D, d M Y H:i:s O&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc7231"><var class="varname">RFC7231</var></a></var><span class="initializer"> = &quot;D, d M Y H:i:s \\G\\M\\T&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc2822"><var class="varname">RFC2822</var></a></var><span class="initializer"> = &quot;D, d M Y H:i:s O&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc3339"><var class="varname">RFC3339</var></a></var><span class="initializer"> = &quot;Y-m-d\\TH:i:sP&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc3339-extended"><var class="varname">RFC3339_EXTENDED</var></a></var><span class="initializer"> = &quot;Y-m-d\\TH:i:s.vP&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.rss"><var class="varname">RSS</var></a></var><span class="initializer"> = &quot;D, d M Y H:i:s O&quot;</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.datetimeinterface.php#datetimeinterface.constants.w3c"><var class="varname">W3C</var></a></var><span class="initializer"> = &quot;Y-m-d\\TH:i:sP&quot;</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="datetime.diff.php" class="methodname">diff</a></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$targetObject</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$absolute</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.format.php" class="methodname">format</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.getoffset.php" class="methodname">getOffset</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.gettimestamp.php" class="methodname">getTimestamp</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.gettimezone.php" class="methodname">getTimezone</a></span>(): <span class="type"><span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.serialize.php" class="methodname">__serialize</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.unserialize.php" class="methodname">__unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="datetime.wakeup.php" class="methodname">__wakeup</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>


  <div class="section" id="datetimeinterface.constants.types">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="datetimeinterface.constants.atom">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.atom">DateTimeInterface::ATOM</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-atom">DATE_ATOM</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Atom (example: 2005-08-15T15:52:01+00:00)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.cookie">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.cookie">DateTimeInterface::COOKIE</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-cookie">DATE_COOKIE</a></code></strong></dt>
     <dd>
      <span class="simpara">
       HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.iso8601">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601">DateTimeInterface::ISO8601</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-iso8601">DATE_ISO8601</a></code></strong></dt>
     <dd>
      <span class="simpara">
       ISO-8601 (example: 2005-08-15T15:52:01+0000)
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This format is not compatible with ISO-8601, but is left this way for
        backward compatibility reasons. Use
        <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601-expanded">DateTimeInterface::ISO8601_EXPANDED</a></code></strong>,
        <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.atom">DateTimeInterface::ATOM</a></code></strong> for compatibility with ISO-8601
        instead. (ref ISO8601:2004 section 4.3.3 clause d)
       </span>
      </p></blockquote>
     </dd>
    

    
     <dt id="datetimeinterface.constants.iso8601-expanded">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601-expanded">DateTimeInterface::ISO8601_EXPANDED</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-iso8601-expanded">DATE_ISO8601_EXPANDED</a></code></strong></dt>
     <dd>
      <span class="simpara">
       ISO-8601 Expanded (example: +10191-07-26T08:59:52+01:00)
      </span>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        This format allows for year ranges outside of ISO-8601&#039;s normal range
        of <code class="literal">0000</code>-<code class="literal">9999</code> by always
        including a sign character. It also ensures that the timezone part
        (<code class="literal">+01:00</code>) is compatible with ISO-8601.
       </span>
      </p></blockquote>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc822">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc822">DateTimeInterface::RFC822</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc822">DATE_RFC822</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc850">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc850">DateTimeInterface::RFC850</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc850">DATE_RFC850</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc1036">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc1036">DateTimeInterface::RFC1036</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc1036">DATE_RFC1036</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc1123">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc1123">DateTimeInterface::RFC1123</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc1123">DATE_RFC1123</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
      </span>
     </dd>
    

    
      <dt id="datetimeinterface.constants.rfc7231">
       <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc7231">DateTimeInterface::RFC7231</a></code></strong>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dt><strong><code><a href="datetime.constants.php#constant.date-rfc7231">DATE_RFC7231</a></code></strong></dt>
      <dd>
       <span class="simpara">
        RFC 7231 (since PHP 7.0.19 and 7.1.5) (example: Sat, 30 Apr 2016 17:52:13 GMT)
       </span>
      </dd>
    

    
     <dt id="datetimeinterface.constants.rfc2822">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc2822">DateTimeInterface::RFC2822</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc2822">DATE_RFC2822</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc3339">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc3339">DateTimeInterface::RFC3339</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc3339">DATE_RFC3339</a></code></strong></dt>
     <dd>
      <span class="simpara">
       Same as <strong><code><a href="datetime.constants.php#constant.date-atom">DATE_ATOM</a></code></strong>
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rfc3339-extended">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rfc3339-extended">DateTimeInterface::RFC3339_EXTENDED</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rfc3339-extended">DATE_RFC3339_EXTENDED</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RFC 3339 EXTENDED format (example: 2005-08-15T15:52:01.000+00:00)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.rss">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.rss">DateTimeInterface::RSS</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-rss">DATE_RSS</a></code></strong></dt>
     <dd>
      <span class="simpara">
       RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
      </span>
     </dd>
    

    
     <dt id="datetimeinterface.constants.w3c">
      <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.w3c">DateTimeInterface::W3C</a></code></strong>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dt><strong><code><a href="datetime.constants.php#constant.date-w3c">DATE_W3C</a></code></strong></dt>
     <dd>
      <span class="simpara">
       World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
      </span>
     </dd>
    

   </dl>
  </div>


  <div class="section" id="datetimeinterface.changelog">
   <h2 class="title">Changelog</h2>
   <p class="para">
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
        <td>The class constants are now typed.</td>
       </tr>

       <tr>
        <td>8.2.0</td>
        <td>
         The constant <strong><code><a href="class.datetimeinterface.php#datetimeinterface.constants.iso8601-expanded">DateTimeInterface::ISO8601_EXPANDED</a></code></strong>
         was added.
        </td>
       </tr>

       <tr>
        <td>7.2.0</td>
        <td>
         The class constants of <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> are now defined
         on <span class="interfacename"><strong class="interfacename">DateTimeInterface</strong></span>.
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

 </div>

 








































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="datetime.diff.php">DateTimeInterface::diff</a> — Returns the difference between two DateTime objects</li><li><a href="datetime.format.php">DateTimeInterface::format</a> — Returns date formatted according to given format</li><li><a href="datetime.getoffset.php">DateTimeInterface::getOffset</a> — Returns the timezone offset</li><li><a href="datetime.gettimestamp.php">DateTimeInterface::getTimestamp</a> — Gets the Unix timestamp</li><li><a href="datetime.gettimezone.php">DateTimeInterface::getTimezone</a> — Return time zone relative to given DateTime</li><li><a href="datetime.serialize.php">DateTime::__serialize</a> — Serialize a DateTime</li><li><a href="datetime.unserialize.php">DateTime::__unserialize</a> — Unserialize an Datetime</li><li><a href="datetime.wakeup.php">DateTime::__wakeup</a> — The __wakeup handler</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/datetimeinterface.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.datetimeinterface%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.datetimeinterface&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.datetimeinterface.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127924">  <div class="votes">
    <div id="Vu127924">
    <a href="/manual/vote-note.php?id=127924&amp;page=class.datetimeinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127924">
    <a href="/manual/vote-note.php?id=127924&amp;page=class.datetimeinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127924" title="63% like this...">
    9
    </div>
  </div>
  <a href="#127924" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#127924"> &para;</a><div class="date" title="2022-11-13 11:22"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127924">
<div class="phpcode"><code><span class="html">Please note that if you are using DATE_RFC7231 format (used in HTTP/1.1), you'll need to change the DateTime object timezone to GMT *before*, or you'll encounter weird results, as this format DOES NOT convert the date to GMT.<br /><br />So if you have a DateTime object using UTC+01:00 as its timezone, you will get a difference of 1 hour between your resulting date string and what should be the "correct" date.<br /><br />Recommended use:<br /><br /><span class="default">&lt;?php<br />$date_gmt </span><span class="keyword">= clone </span><span class="default">$date</span><span class="keyword">;<br /></span><span class="default">$date_gmt</span><span class="keyword">-&gt;</span><span class="default">setTimezone</span><span class="keyword">(new </span><span class="default">\DateTimeZone</span><span class="keyword">(</span><span class="string">'GMT'</span><span class="keyword">));<br />echo </span><span class="default">$date_gmt</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">DATE_RFC7231</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.datetimeinterface&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.datetimeinterface.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.datetime.php">Date/Time</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.datetime.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="datetime.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="datetime.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="datetime.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.datetime.php" title="DateTime">DateTime</a>
                        </li>
                                                <li class="">
                            <a href="class.datetimeimmutable.php" title="DateTimeImmutable">DateTimeImmutable</a>
                        </li>
                                                <li class="current">
                            <a href="class.datetimeinterface.php" title="DateTimeInterface">DateTimeInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.datetimezone.php" title="DateTimeZone">DateTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="class.dateinterval.php" title="DateInterval">DateInterval</a>
                        </li>
                                                <li class="">
                            <a href="class.dateperiod.php" title="DatePeriod">DatePeriod</a>
                        </li>
                                                <li class="">
                            <a href="ref.datetime.php" title="Date/Time Functions">Date/Time Functions</a>
                        </li>
                                                <li class="">
                            <a href="datetime.error.tree.php" title="Date/Time Errors and Exceptions">Date/Time Errors and Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="datetime.formats.php" title="Supported Date and Time Formats">Supported Date and Time Formats</a>
                        </li>
                                                <li class="">
                            <a href="timezones.php" title="List of Supported Timezones">List of Supported Timezones</a>
                        </li>
                                                <li class="">
                            <a href="class.dateerror.php" title="DateError">DateError</a>
                        </li>
                                                <li class="">
                            <a href="class.dateobjecterror.php" title="DateObjectError">DateObjectError</a>
                        </li>
                                                <li class="">
                            <a href="class.daterangeerror.php" title="DateRangeError">DateRangeError</a>
                        </li>
                                                <li class="">
                            <a href="class.dateexception.php" title="DateException">DateException</a>
                        </li>
                                                <li class="">
                            <a href="class.dateinvalidoperationexception.php" title="DateInvalidOperationException">DateInvalidOperationException</a>
                        </li>
                                                <li class="">
                            <a href="class.dateinvalidtimezoneexception.php" title="DateInvalidTimeZoneException">DateInvalidTimeZoneException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedintervalstringexception.php" title="DateMalformedIntervalStringException">DateMalformedIntervalStringException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedperiodstringexception.php" title="DateMalformedPeriodStringException">DateMalformedPeriodStringException</a>
                        </li>
                                                <li class="">
                            <a href="class.datemalformedstringexception.php" title="DateMalformedStringException">DateMalformedStringException</a>
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
