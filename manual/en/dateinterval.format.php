<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateInterval::format - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/dateinterval.format.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/dateinterval.format.php">
 <link rel="alternate" href="https://www.php.net/manual/en/dateinterval.format.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.dateinterval.php">
 <link rel="prev" href="https://www.php.net/manual/en/dateinterval.createfromdatestring.php">
 <link rel="next" href="https://www.php.net/manual/en/class.dateperiod.php">

 <link rel="alternate" href="https://www.php.net/manual/en/dateinterval.format.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/dateinterval.format.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/dateinterval.format.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/dateinterval.format.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/dateinterval.format.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/dateinterval.format.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/dateinterval.format.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/dateinterval.format.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/dateinterval.format.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/dateinterval.format.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/dateinterval.format.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Formats the interval" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateInterval::format - Manual" />
<meta name="twitter:description" content="Formats the interval" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateInterval::format - Manual" />
<meta itemprop="description" content="Formats the interval" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Formats the interval" />

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
        <a href="class.dateperiod.php">
          DatePeriod &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="dateinterval.createfromdatestring.php">
          &laquo; DateInterval::createFromDateString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='class.dateinterval.php'>DateInterval</a></li>      </ul>
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
            <option value='en/dateinterval.format.php' selected="selected">English</option>
            <option value='de/dateinterval.format.php'>German</option>
            <option value='es/dateinterval.format.php'>Spanish</option>
            <option value='fr/dateinterval.format.php'>French</option>
            <option value='it/dateinterval.format.php'>Italian</option>
            <option value='ja/dateinterval.format.php'>Japanese</option>
            <option value='pt_BR/dateinterval.format.php'>Brazilian Portuguese</option>
            <option value='ru/dateinterval.format.php'>Russian</option>
            <option value='tr/dateinterval.format.php'>Turkish</option>
            <option value='uk/dateinterval.format.php'>Ukrainian</option>
            <option value='zh/dateinterval.format.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="dateinterval.format" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DateInterval::format</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DateInterval::format</span> &mdash; <span class="dc-title">Formats the interval</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-dateinterval.format-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DateInterval::format</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Formats the interval.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-dateinterval.format-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       <table class="doctable table">
        <caption><strong>
         The following characters are recognized in the
         <code class="parameter">format</code> parameter string.
         Each format character must be prefixed by a percent sign
         (<code class="literal">%</code>).
        </strong></caption>
        
         <thead>
          <tr>
           <th><code class="parameter">format</code> character</th>
           <th>Description</th>
           <th>Example values</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><code class="literal">%</code></td>
           <td>Literal <code class="literal">%</code></td>
           <td><code class="literal">%</code></td>
          </tr>

          <tr>
           <td><code class="literal">Y</code></td>
           <td>Years, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code></td>
          </tr>

          <tr>
           <td><code class="literal">y</code></td>
           <td>Years, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code></td>
          </tr>

          <tr>
           <td><code class="literal">M</code></td>
           <td>Months, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code>, <code class="literal">12</code></td>
          </tr>

          <tr>
           <td><code class="literal">m</code></td>
           <td>Months, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code>, <code class="literal">12</code></td>
          </tr>

          <tr>
           <td><code class="literal">D</code></td>
           <td>Days, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code>, <code class="literal">31</code></td>
          </tr>

          <tr>
           <td><code class="literal">d</code></td>
           <td>Days, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code>, <code class="literal">31</code></td>
          </tr>

          <tr>
           <td><code class="literal">a</code></td>
           <td>Total number of days as a result of a <span class="methodname"><a href="datetime.diff.php" class="methodname">DateTime::diff()</a></span> or <code class="literal">(unknown)</code> otherwise</td>
           <td><code class="literal">4</code>, <code class="literal">18</code>, <code class="literal">8123</code></td>
          </tr>

          <tr>
           <td><code class="literal">H</code></td>
           <td>Hours, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code>, <code class="literal">23</code></td>
          </tr>

          <tr>
           <td><code class="literal">h</code></td>
           <td>Hours, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code>, <code class="literal">23</code></td>
          </tr>

          <tr>
           <td><code class="literal">I</code></td>
           <td>Minutes, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code>, <code class="literal">59</code></td>
          </tr>

          <tr>
           <td><code class="literal">i</code></td>
           <td>Minutes, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code>, <code class="literal">59</code></td>
          </tr>

          <tr>
           <td><code class="literal">S</code></td>
           <td>Seconds, numeric, at least 2 digits with leading 0</td>
           <td><code class="literal">01</code>, <code class="literal">03</code>, <code class="literal">57</code></td>
          </tr>

          <tr>
           <td><code class="literal">s</code></td>
           <td>Seconds, numeric</td>
           <td><code class="literal">1</code>, <code class="literal">3</code>, <code class="literal">57</code></td>
          </tr>

          <tr>
           <td><code class="literal">F</code></td>
           <td>Microseconds, numeric, at least 6 digits with leading
           0</td>
           <td><code class="literal">007701</code>, <code class="literal">052738</code>, <code class="literal">428291</code></td>
          </tr>

          <tr>
           <td><code class="literal">f</code></td>
           <td>Microseconds, numeric</td>
           <td><code class="literal">7701</code>, <code class="literal">52738</code>, <code class="literal">428291</code></td>
          </tr>

          <tr>
           <td><code class="literal">R</code></td>
           <td>Sign &quot;<code class="literal">-</code>&quot; when negative, &quot;<code class="literal">+</code>&quot; when positive</td>
           <td><code class="literal">-</code>, <code class="literal">+</code></td>
          </tr>

          <tr>
           <td><code class="literal">r</code></td>
           <td>Sign &quot;<code class="literal">-</code>&quot; when negative, empty when positive</td>
           <td><code class="literal">-</code>, <code class="literal"></td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-dateinterval.format-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the formatted interval.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-dateinterval.format-changelog">
  <h3 class="title">Changelog</h3>
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
       <td>7.2.12</td>
       <td>The <code class="literal">F</code> and <code class="literal">f</code> format
        will now always be positive.</td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>The <code class="literal">F</code> and <code class="literal">f</code> format
        characters were added.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-dateinterval.format-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2254">
    <p><strong>Example #1 <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> example</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$interval </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P2Y4DT6H8M'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%d days'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
     <div class="examplescode"><pre class="examplescode">4 days</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2255">
    <p><strong>Example #2 <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> and carry over points</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$interval </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateInterval</span><span style="color: #007700">(</span><span style="color: #DD0000">'P32D'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%d days'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
     <div class="examplescode"><pre class="examplescode">32 days</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2256">
    <p><strong>Example #3 
     <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> and
     <span class="methodname"><a href="datetime.diff.php" class="methodname">DateTime::diff()</a></span> with the %a and %d modifiers
    </strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$january </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2010-01-01'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$february </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2010-02-01'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= </span><span style="color: #0000BB">$february</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$january</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// %a will output the total number of days.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%a total days'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// While %d will only output the number of days not already covered by the<br />// month.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%m month, %d days'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
     <div class="examplescode"><pre class="examplescode">31 total days
1 month, 0 days</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-dateinterval.format-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <span class="methodname"><strong>DateInterval::format()</strong></span> method does not 
    recalculate carry over points in time strings nor in date segments. This 
    is expected because it is not possible to overflow values like <code class="literal">&quot;32 days&quot;</code>
    which could be interpreted as anything from <code class="literal">&quot;1 month and 4 days&quot;</code> 
    to <code class="literal">&quot;1 month and 1 day&quot;</code>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-dateinterval.format-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="datetime.diff.php" class="methodname" rel="rdfs-seeAlso">DateTime::diff()</a> - Returns the difference between two DateTime objects</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/dateinterval/format.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdateinterval.format%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=dateinterval.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/dateinterval.format.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129621">  <div class="votes">
    <div id="Vu129621">
    <a href="/manual/vote-note.php?id=129621&amp;page=dateinterval.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129621">
    <a href="/manual/vote-note.php?id=129621&amp;page=dateinterval.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129621" title="55% like this...">
    2
    </div>
  </div>
  <a href="#129621" class="name">
  <strong class="user"><em>online dot cloudmeetings dot marco at gmail dot com</em></strong></a><a class="genanchor" href="#129621"> &para;</a><div class="date" title="2024-06-30 05:40"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129621">
<div class="phpcode"><code><span class="html">Pls note these important abbreviations; <br /><br />P: period<br />Y: years<br />M: months<br />D: days<br />T: time<br />H: hours<br />M: minutes<br />S: seconds<br /><br />The above is from the ISO 8601 - an international standard that defines how to use, store, and transfer date, time, and duration information.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=dateinterval.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/dateinterval.format.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.dateinterval.php">DateInterval</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="dateinterval.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="dateinterval.createfromdatestring.php" title="createFromDateString">createFromDateString</a>
                        </li>
                                                <li class="current">
                            <a href="dateinterval.format.php" title="format">format</a>
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
