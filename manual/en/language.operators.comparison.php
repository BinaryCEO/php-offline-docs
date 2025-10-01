<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Comparison - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.comparison.php">
 <link rel="shorturl" href="https://www.php.net/operators.comparison">
 <link rel="alternate" href="https://www.php.net/operators.comparison" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.bitwise.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.errorcontrol.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.comparison.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.comparison.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.comparison.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.comparison.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.comparison.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.comparison.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.comparison.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.comparison.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.comparison.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.comparison.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.comparison.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Comparison Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Comparison - Manual" />
<meta name="twitter:description" content="Comparison Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Comparison - Manual" />
<meta itemprop="description" content="Comparison Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Comparison Operators" />

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
        <a href="language.operators.errorcontrol.php">
          Error Control &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.bitwise.php">
          &laquo; Bitwise        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.comparison.php' selected="selected">English</option>
            <option value='de/language.operators.comparison.php'>German</option>
            <option value='es/language.operators.comparison.php'>Spanish</option>
            <option value='fr/language.operators.comparison.php'>French</option>
            <option value='it/language.operators.comparison.php'>Italian</option>
            <option value='ja/language.operators.comparison.php'>Japanese</option>
            <option value='pt_BR/language.operators.comparison.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.comparison.php'>Russian</option>
            <option value='tr/language.operators.comparison.php'>Turkish</option>
            <option value='uk/language.operators.comparison.php'>Ukrainian</option>
            <option value='zh/language.operators.comparison.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.comparison" class="sect1">
 <h2 class="title">Comparison Operators</h2>
 
 <p class="simpara">
  Comparison operators, as their name implies, allow you to compare
  two values.  You may also be interested in viewing
  <a href="types.comparisons.php" class="link">the type comparison tables</a>,
  as they show examples of various type related comparisons.
 </p>
 <table class="doctable table">
  <caption><strong>Comparison Operators</strong></caption>
  
   <thead>
    <tr>
     <th>Example</th>
     <th>Name</th>
     <th>Result</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td>$a == $b</td>
     <td>Equal</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is equal to <var class="varname">$b</var> after type juggling.</td>
    </tr>

    <tr>
     <td>$a === $b</td>
     <td>Identical</td>
     <td>
      <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is equal to <var class="varname">$b</var>, and they are of the same
      type.
     </td>
    </tr>

    <tr>
     <td>$a != $b</td>
     <td>Not equal</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not equal to <var class="varname">$b</var> after type juggling.</td>
    </tr>

    <tr>
     <td>$a &lt;&gt; $b</td>
     <td>Not equal</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not equal to <var class="varname">$b</var> after type juggling.</td>
    </tr>

    <tr>
     <td>$a !== $b</td>
     <td>Not identical</td>
     <td>
      <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not equal to <var class="varname">$b</var>, or they are not of the same
      type.
     </td>
    </tr>

    <tr>
     <td>$a &lt; $b</td>
     <td>Less than</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is strictly less than <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a &gt; $b</td>
     <td>Greater than</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is strictly greater than <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a &lt;= $b</td>
     <td>Less than or equal to</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is less than or equal to <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a &gt;= $b</td>
     <td>Greater than or equal to</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is greater than or equal to <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a &lt;=&gt; $b</td>
     <td>Spaceship</td>
     <td>
      An <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> less than, equal to, or greater than zero when
      <var class="varname">$a</var> is less than, equal to, or greater than
      <var class="varname">$b</var>, respectively.
     </td>
    </tr>

   </tbody>
  
 </table>

 <p class="para">
  If both operands are
  <a href="language.types.numeric-strings.php" class="link">numeric strings</a>,
  or one operand is a number and the other one is a
  <a href="language.types.numeric-strings.php" class="link">numeric string</a>,
  then the comparison is done numerically.
  These rules also apply to the
  <a href="control-structures.switch.php" class="link">switch</a> statement.
  The type conversion does not take place when the comparison is
  <code class="literal">===</code> or <code class="literal">!==</code> as this involves
  comparing the type as well as the value.
 </p>

 <div class="warning"><strong class="warning">Warning</strong>
  <p class="para">
   Prior to PHP 8.0.0, if a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is compared to a number
   or a numeric string then the <span class="type"><a href="language.types.string.php" class="type string">string</a></span> was converted to a
   number before performing the comparison. This can lead to surprising
   results as can be seen with the following example:
   <div class="informalexample">
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">0 </span><span style="color: #007700">== </span><span style="color: #DD0000">"a"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"1" </span><span style="color: #007700">== </span><span style="color: #DD0000">"01"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"10" </span><span style="color: #007700">== </span><span style="color: #DD0000">"1e1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">100 </span><span style="color: #007700">== </span><span style="color: #DD0000">"1e2"</span><span style="color: #007700">);<br /><br />switch (</span><span style="color: #DD0000">"a"</span><span style="color: #007700">) {<br />case </span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />    echo </span><span style="color: #DD0000">"0"</span><span style="color: #007700">;<br />    break;<br />case </span><span style="color: #DD0000">"a"</span><span style="color: #007700">:<br />    echo </span><span style="color: #DD0000">"a"</span><span style="color: #007700">;<br />    break;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">Output of the above example in PHP 7:</p>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(true)
bool(true)
bool(true)
0
</pre></div>
    </div>
    <p class="para">Output of the above example in PHP 8:</p>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(false)
bool(true)
bool(true)
bool(true)
a
</pre></div>
    </div>
   </div>
  </p>
 </div>

 <p class="para">
  <div class="example" id="example-166">
   <p><strong>Example #1 Comparison Operators</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Integers<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">2 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// Floats<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1.5</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">2.5</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">2.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1.5</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// Strings<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"a" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"a" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"b" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"a" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"aa"</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">;  </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"zz" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"aa"</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// Arrays<br /></span><span style="color: #007700">echo [] &lt;=&gt; [], </span><span style="color: #DD0000">' '</span><span style="color: #007700">;               </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">] &lt;=&gt; [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">], </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">] &lt;=&gt; [], </span><span style="color: #DD0000">' '</span><span style="color: #007700">;        </span><span style="color: #FF8000">// 1<br /></span><span style="color: #007700">echo [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">] &lt;=&gt; [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /></span><span style="color: #007700">echo [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">] &lt;=&gt; [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">], </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /><br />// Objects<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"c"</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"c"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// not only values are compared; keys must match<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= (object) [</span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #DD0000">' '</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <p class="para">
  For various types, comparison is done according to the following
  table (in order).
 </p>
 <table id="language.operators.comparison.types" class="doctable table">
  <caption><strong>Comparison with Various Types</strong></caption>
  
   <thead>
    <tr>
     <th>Type of Operand 1</th>
     <th>Type of Operand 2</th>
     <th>Result</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><span class="type"><a href="language.types.null.php" class="type null">null</a></span> or <span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
     <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
     <td>Convert <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to &quot;&quot;, numerical or lexical comparison</td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> or <span class="type"><a href="language.types.null.php" class="type null">null</a></span></td>
     <td>anything</td>
     <td>Convert both sides to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> &lt; <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
     <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
     <td>Built-in classes can define its own comparison, different classes
      are incomparable, same class see <a href="language.oop5.object-comparison.php" class="link">Object Comparison</a>
     </td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span>, <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
     <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span>, <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
     <td>Translate strings and resources to numbers, usual math</td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
     <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
     <td>Array with fewer members is smaller, if key from operand 1 is not
      found in operand 2 then arrays are incomparable, otherwise - compare
      value by value (see following example)</td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
     <td>anything</td>
     <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span> is always greater</td>
    </tr>

    <tr>
     <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
     <td>anything</td>
     <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span> is always greater</td>
    </tr>

   </tbody>
  
 </table>


 <p class="para">
  <div class="example" id="example-167">
   <p><strong>Example #2 Boolean/null comparison</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Bool and null are compared as bool always<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">1 </span><span style="color: #007700">== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);  </span><span style="color: #FF8000">// TRUE - same as (bool) 1 == TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">0 </span><span style="color: #007700">== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">); </span><span style="color: #FF8000">// TRUE - same as (bool) 0 == FALSE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">100 </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">); </span><span style="color: #FF8000">// FALSE - same as (bool) 100 &lt; TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(-</span><span style="color: #0000BB">10 </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">);</span><span style="color: #FF8000">// FALSE - same as (bool) -10 &lt; FALSE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">min</span><span style="color: #007700">(-</span><span style="color: #0000BB">100</span><span style="color: #007700">, -</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">)); </span><span style="color: #FF8000">// NULL - (bool) NULL &lt; (bool) -100 is FALSE &lt; TRUE<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <p class="para">
  <div class="example" id="example-168">
   <p><strong>Example #3 Transcription of standard array comparison</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Arrays are compared like this with standard comparison operators as well as the spaceship operator.<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">standard_array_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">$op1</span><span style="color: #007700">, </span><span style="color: #0000BB">$op2</span><span style="color: #007700">)<br />{<br />    if (</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$op1</span><span style="color: #007700">) &lt; </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$op2</span><span style="color: #007700">)) {<br />        return -</span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// $op1 &lt; $op2<br />    </span><span style="color: #007700">} elseif (</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$op1</span><span style="color: #007700">) &gt; </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$op2</span><span style="color: #007700">)) {<br />        return </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// $op1 &gt; $op2<br />    </span><span style="color: #007700">}<br />    foreach (</span><span style="color: #0000BB">$op1 </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        if (!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$op2</span><span style="color: #007700">)) {<br />            return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        } elseif (</span><span style="color: #0000BB">$val </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$op2</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]) {<br />            return -</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        } elseif (</span><span style="color: #0000BB">$val </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$op2</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]) {<br />            return </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        }<br />    }<br />    return </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #FF8000">// $op1 == $op2<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <div class="warning"><strong class="warning">Warning</strong>
  <h1 class="title">Comparison of floating point numbers</h1>

  <p class="para">
   Because of the way <span class="type"><a href="language.types.float.php" class="type float">float</a></span>s are represented internally, you
   should not test two <span class="type"><a href="language.types.float.php" class="type float">float</a></span>s for equality.
  </p>

  <p class="para">
   See the documentation for <span class="type"><a href="language.types.float.php" class="type float">float</a></span> for more information.
  </p>
 </div>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Be aware that PHP&#039;s type juggling is not always obvious when comparing values of different types,
   particularly comparing <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>s or <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s. It is therefore generally
   advisable to use <code class="literal">===</code> and <code class="literal">!==</code> comparisons rather than
   <code class="literal">==</code> and <code class="literal">!=</code> in most cases.
  </span>
 </p></blockquote>

 <div class="sect2" id="language.operators.comparison.incomparable">
  <h3 class="title">Incomparable Values</h3>
  <p class="simpara">
   While identity comparison (<code class="literal">===</code> and <code class="literal">!==</code>)
   can be applied to arbitrary values, the other comparison operators should only be
   applied to comparable values. The result of comparing incomparable values is
   undefined, and should not be relied upon.
  </p>
 </div>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strcasecmp.php" class="function">strcasecmp()</a></span></li>
    <li><span class="function"><a href="function.strcmp.php" class="function">strcmp()</a></span></li>
    <li><a href="language.operators.array.php" class="link">Array operators</a></li>
    <li><a href="language.types.php" class="link">Types</a></li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="language.operators.comparison.ternary">
  <h3 class="title">Ternary Operator</h3>
  <p class="para">
   Another conditional operator is the &quot;?:&quot; (or ternary) operator.
   <div class="example" id="example-169">
    <p><strong>Example #4 Assigning a default value</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Example usage for: Ternary Operator<br /></span><span style="color: #0000BB">$action </span><span style="color: #007700">= (empty(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">])) ? </span><span style="color: #DD0000">'default' </span><span style="color: #007700">: </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// The above is identical to this if/else statement<br /></span><span style="color: #007700">if (empty(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$action </span><span style="color: #007700">= </span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$action </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">];<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   The expression <code class="literal">(expr1) ? (expr2) : (expr3)</code>
   evaluates to <span class="replaceable">expr2</span> if
   <span class="replaceable">expr1</span> evaluates to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, and
   <span class="replaceable">expr3</span> if
   <span class="replaceable">expr1</span> evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <p class="para">
   It is possible to leave out the middle part of the ternary operator.
   Expression <code class="literal">expr1 ?: expr3</code> evaluates to
   the result of <span class="replaceable">expr1</span> if <span class="replaceable">expr1</span>
   evaluates to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, and <span class="replaceable">expr3</span> otherwise.
   <span class="replaceable">expr1</span> is only evaluated once in this case.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Please note that the ternary operator is an expression, and that it
    doesn&#039;t evaluate to a variable, but to the result of an expression. This
    is important to know if you want to return a variable by reference.
    The statement <code class="literal">return $var == 42 ? $a : $b;</code> in a
    return-by-reference function will therefore not work and a warning is
    issued.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is recommended to avoid &quot;stacking&quot; ternary expressions.
    PHP&#039;s behaviour when using more than one unparenthesized ternary operator within a single
    expression is non-obvious compared to other languages.
    Indeed prior to PHP 8.0.0, ternary expressions were evaluated left-associative,
    instead of right-associative like most other programming languages.
    Relying on left-associativity is deprecated as of PHP 7.4.0.
    As of PHP 8.0.0, the ternary operator is non-associative.
    <div class="example" id="example-170">
     <p><strong>Example #5 Non-obvious Ternary Behaviour</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// on first glance, the following appears to output 'true'<br /></span><span style="color: #007700">echo (</span><span style="color: #0000BB">true </span><span style="color: #007700">? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #0000BB">false </span><span style="color: #007700">? </span><span style="color: #DD0000">'t' </span><span style="color: #007700">: </span><span style="color: #DD0000">'f'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// however, the actual output of the above is 't' prior to PHP 8.0.0<br />// this is because ternary expressions are left-associative<br /><br />// the following is a more obvious version of the same code as above<br /></span><span style="color: #007700">echo ((</span><span style="color: #0000BB">true </span><span style="color: #007700">? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #0000BB">false</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'t' </span><span style="color: #007700">: </span><span style="color: #DD0000">'f'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// here, one can see that the first expression is evaluated to 'true', which<br />// in turn evaluates to (bool) true, thus returning the true branch of the<br />// second ternary expression.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Chaining of short-ternaries (<code class="literal">?:</code>), however, is stable and behaves reasonably.
    It will evaluate to the first argument that evaluates to a non-falsy value.  Note that undefined
    values will still raise a warning.
    <div class="example" id="example-171">
     <p><strong>Example #6 Short-ternary chaining</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">1 </span><span style="color: #007700">?: </span><span style="color: #0000BB">2 </span><span style="color: #007700">?: </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">//1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">2 </span><span style="color: #007700">?: </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">//2<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">0 </span><span style="color: #007700">?: </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">//3<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>

 <div class="sect2" id="language.operators.comparison.coalesce">
  <h3 class="title">Null Coalescing Operator</h3>
  <p class="para">
   Another useful shorthand operator is the &quot;??&quot; (or null coalescing) operator.
   <div class="example" id="example-172">
    <p><strong>Example #7 Assigning a default value</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Example usage for: Null Coalesce Operator<br /></span><span style="color: #0000BB">$action </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">] ?? </span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The above is identical to this if/else statement<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$action </span><span style="color: #007700">= </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">];<br />} else {<br />    </span><span style="color: #0000BB">$action </span><span style="color: #007700">= </span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   The expression <code class="literal">(expr1) ?? (expr2)</code> evaluates to
   <span class="replaceable">expr2</span> if <span class="replaceable">expr1</span> is
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, and <span class="replaceable">expr1</span> otherwise.
  </p>
  <p class="para">
   In particular, this operator does not emit a notice or warning if the left-hand side
   value does not exist, just like <span class="function"><a href="function.isset.php" class="function">isset()</a></span>. This is especially
   useful on array keys.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Please note that the null coalescing operator is an expression, and that it
    doesn&#039;t evaluate to a variable, but to the result of an expression. This
    is important to know if you want to return a variable by reference.
    The statement <code class="literal">return $foo ?? $bar;</code> in a
    return-by-reference function will therefore not work and a warning is
    issued.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The null coalescing operator has low precedence. That means if mixing it
    with other operators (such as string concatenation or arithmetic operators)
    parentheses will likely be required.
   </p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Raises a warning that $name is undefined.<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">'Mr. ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$name </span><span style="color: #007700">?? </span><span style="color: #DD0000">'Anonymous'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Prints "Mr. Anonymous"<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">'Mr. ' </span><span style="color: #007700">. (</span><span style="color: #0000BB">$name </span><span style="color: #007700">?? </span><span style="color: #DD0000">'Anonymous'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Please note that the null coalescing operator allows for simple nesting:
    <div class="example" id="example-173">
     <p><strong>Example #8 Nesting null coalescing operator</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$baz </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$qux </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$foo </span><span style="color: #007700">?? </span><span style="color: #0000BB">$bar </span><span style="color: #007700">?? </span><span style="color: #0000BB">$baz </span><span style="color: #007700">?? </span><span style="color: #0000BB">$qux</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs 1<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/operators/comparison.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.comparison%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.comparison&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.comparison.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95997">  <div class="votes">
    <div id="Vu95997">
    <a href="/manual/vote-note.php?id=95997&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95997">
    <a href="/manual/vote-note.php?id=95997&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95997" title="71% like this...">
    170
    </div>
  </div>
  <a href="#95997" class="name">
  <strong class="user"><em>crazy888s at hotmail dot com</em></strong></a><a class="genanchor" href="#95997"> &para;</a><div class="date" title="2010-02-01 10:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95997">
<div class="phpcode"><code><span class="html">I couldn't find much info on stacking the new ternary operator, so I ran some tests:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">1 </span><span class="keyword">?: </span><span class="default">2 </span><span class="keyword">?: </span><span class="default">3</span><span class="keyword">; </span><span class="comment">//1<br /></span><span class="keyword">echo </span><span class="default">1 </span><span class="keyword">?: </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">3 </span><span class="keyword">?: </span><span class="default">2</span><span class="keyword">; </span><span class="comment">//1<br /></span><span class="keyword">echo </span><span class="default">2 </span><span class="keyword">?: </span><span class="default">1 </span><span class="keyword">?: </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">3</span><span class="keyword">; </span><span class="comment">//2<br /></span><span class="keyword">echo </span><span class="default">3 </span><span class="keyword">?: </span><span class="default">2 </span><span class="keyword">?: </span><span class="default">1 </span><span class="keyword">?: </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//3<br /><br /></span><span class="keyword">echo </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">1 </span><span class="keyword">?: </span><span class="default">2 </span><span class="keyword">?: </span><span class="default">3</span><span class="keyword">; </span><span class="comment">//1<br /></span><span class="keyword">echo </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">2 </span><span class="keyword">?: </span><span class="default">3</span><span class="keyword">; </span><span class="comment">//2<br /></span><span class="keyword">echo </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">0 </span><span class="keyword">?: </span><span class="default">3</span><span class="keyword">; </span><span class="comment">//3<br /></span><span class="default">?&gt;<br /></span><br />It works just as expected, returning the first non-false value within a group of expressions.</span></code></div>
  </div>
 </div>
  <div class="note" id="128337">  <div class="votes">
    <div id="Vu128337">
    <a href="/manual/vote-note.php?id=128337&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128337">
    <a href="/manual/vote-note.php?id=128337&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128337" title="68% like this...">
    6
    </div>
  </div>
  <a href="#128337" class="name">
  <strong class="user"><em>gfilippakis at sleed dot gr</em></strong></a><a class="genanchor" href="#128337"> &para;</a><div class="date" title="2023-03-24 09:50"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128337">
<div class="phpcode"><code><span class="html">Please note that using the null coalescing operator to check properties on a class that has the __get magic method (without an __isset magic method) invokes the magic method. <br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">)<br />    {<br />        echo </span><span class="string">'Called __get for ' </span><span class="keyword">. </span><span class="default">$property </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br />echo </span><span class="string">'Trying null coalescing operator' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">?? </span><span class="default">5</span><span class="keyword">;<br /><br />echo </span><span class="string">'Trying isset()' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />if (isset(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">)) {<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126040">  <div class="votes">
    <div id="Vu126040">
    <a href="/manual/vote-note.php?id=126040&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126040">
    <a href="/manual/vote-note.php?id=126040&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126040" title="63% like this...">
    10
    </div>
  </div>
  <a href="#126040" class="name">
  <strong class="user"><em>Tahazzot</em></strong></a><a class="genanchor" href="#126040"> &para;</a><div class="date" title="2021-04-25 10:56"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126040">
<div class="phpcode"><code><span class="html">Very careful when reading PHP documentation, Here's a lot of miss information. <br /><br />According to documentation, They say's (int) 0 == (string) "a" is true. But it is not in PHP 8.<br /><br />var_dump(0 == "a"); // 0 == 0 -&gt; true<br /><br />Now In PHP 8 it's False.</span></code></div>
  </div>
 </div>
  <div class="note" id="65863">  <div class="votes">
    <div id="Vu65863">
    <a href="/manual/vote-note.php?id=65863&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65863">
    <a href="/manual/vote-note.php?id=65863&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65863" title="62% like this...">
    21
    </div>
  </div>
  <a href="#65863" class="name">
  <strong class="user"><em>adam at caucho dot com</em></strong></a><a class="genanchor" href="#65863"> &para;</a><div class="date" title="2006-05-08 10:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65863">
<div class="phpcode"><code><span class="html">Note: according to the spec, PHP's comparison operators are not transitive.  For example, the following are all true in PHP5:
<br />
<br />"11" &lt; "a" &lt; 2 &lt; "11"
<br />
<br />As a result, the outcome of sorting an array depends on the order the elements appear in the pre-sort array.  The following code will dump out two arrays with *different* orderings:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= array(</span><span class="default">2</span><span class="keyword">,    </span><span class="string">"a"</span><span class="keyword">,  </span><span class="string">"11"</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="default">2</span><span class="keyword">,    </span><span class="string">"11"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">,  </span><span class="default">2</span><span class="keyword">);
<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is not a bug report -- given the spec on this documentation page, what PHP does is "correct".  But that may not be what was intended...</span></code></div>
  </div>
 </div>
  <div class="note" id="60866">  <div class="votes">
    <div id="Vu60866">
    <a href="/manual/vote-note.php?id=60866&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60866">
    <a href="/manual/vote-note.php?id=60866&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60866" title="60% like this...">
    16
    </div>
  </div>
  <a href="#60866" class="name">
  <strong class="user"><em>rshawiii at yahoo dot com</em></strong></a><a class="genanchor" href="#60866"> &para;</a><div class="date" title="2006-01-18 11:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60866">
<div class="phpcode"><code><span class="html">You can't just compare two arrays with the === operator
<br />like you would think to find out if they are equal or not.  This is more complicated when you have multi-dimensional arrays.  Here is a recursive comparison function.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Compares two arrays to see if they contain the same values.  Returns TRUE or FALSE.
<br /> * usefull for determining if a record or block of data was modified (perhaps by user input)
<br /> * prior to setting a "date_last_updated" or skipping updating the db in the case of no change.
<br /> *
<br /> * @param array $a1
<br /> * @param array $a2
<br /> * @return boolean
<br /> */
<br /></span><span class="keyword">function </span><span class="default">array_compare_recursive</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$a2</span><span class="keyword">)
<br />{
<br />   if (!(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">) and (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a2</span><span class="keyword">)))) { return </span><span class="default">FALSE</span><span class="keyword">;}    
<br />    
<br />   if (!</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">) == </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a2</span><span class="keyword">)) 
<br />      {
<br />       return </span><span class="default">FALSE</span><span class="keyword">; </span><span class="comment">// arrays don't have same number of entries
<br />      </span><span class="keyword">}
<br />      
<br />   foreach (</span><span class="default">$a1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) 
<br />   {
<br />       if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$a2</span><span class="keyword">)) 
<br />           {return </span><span class="default">FALSE</span><span class="keyword">; </span><span class="comment">// uncomparable array keys don't match
<br />              </span><span class="keyword">} 
<br />       elseif (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) and </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))  </span><span class="comment">// if both entries are arrays then compare recursive 
<br />           </span><span class="keyword">{if (!</span><span class="default">array_compare_recursive</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) return </span><span class="default">FALSE</span><span class="keyword">;
<br />           } 
<br />       elseif (!(</span><span class="default">$val </span><span class="keyword">=== </span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) </span><span class="comment">// compare entries must be of same type.
<br />           </span><span class="keyword">{return </span><span class="default">FALSE</span><span class="keyword">;
<br />           }
<br />   }
<br />   return </span><span class="default">TRUE</span><span class="keyword">; </span><span class="comment">// $a1 === $a2
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124639">  <div class="votes">
    <div id="Vu124639">
    <a href="/manual/vote-note.php?id=124639&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124639">
    <a href="/manual/vote-note.php?id=124639&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124639" title="60% like this...">
    4
    </div>
  </div>
  <a href="#124639" class="name">
  <strong class="user"><em>Sumon Mahmud</em></strong></a><a class="genanchor" href="#124639"> &para;</a><div class="date" title="2020-01-23 06:59"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124639">
<div class="phpcode"><code><span class="html">Extending from here: <a href="https://www.php.net/manual/en/language.operators.comparison.php#121907" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.operators.comparison.php#121907</a><br /><br />$a = ['a' =&gt; 1, 'b' =&gt; 2, 'c' =&gt; 3, 'e' =&gt; 4]; <br />$b = ['a' =&gt; 1, 'b' =&gt; 2, 'd' =&gt; 3, 'e' =&gt; 4];<br /><br />echo $a &gt; $b; // 0<br />echo $b &gt; $a; // 0<br />echo $a &lt;$b; // 0<br />echo $b &lt; $a; // 0<br /><br />If using spaceship operator then it is returning true like : <br /><br />echo $a &lt;=&gt; $b; //1<br />echo $b &lt;=&gt; $a; //1<br />echo $a &lt;=&gt; $b; //1<br />echo $b &lt;=&gt; $a; //1</span></code></div>
  </div>
 </div>
  <div class="note" id="70762">  <div class="votes">
    <div id="Vu70762">
    <a href="/manual/vote-note.php?id=70762&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70762">
    <a href="/manual/vote-note.php?id=70762&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70762" title="59% like this...">
    12
    </div>
  </div>
  <a href="#70762" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#70762"> &para;</a><div class="date" title="2006-10-26 03:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70762">
<div class="phpcode"><code><span class="html">When you want to know if two arrays contain the same values, regardless of the values' order, you cannot use "==" or "===".  In other words:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">(array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">) == array(</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />To answer that question, use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_equal</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    return (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &amp;&amp; </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">) &amp;&amp; </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) === </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />A related, but more strict problem, is if you need to ensure that two arrays contain the same key=&gt;value pairs, regardless of the order of the pairs.  In that case, use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_identical</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    return (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &amp;&amp; </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">) &amp;&amp; </span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) === </span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array (</span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= array (</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="comment">// true === array_equal($a, $b);<br />// false === array_identical($a, $b);<br /><br /></span><span class="default">$a </span><span class="keyword">= array (</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= array (</span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">);<br /></span><span class="comment">// true === array_identical($a, $b)<br />// true === array_equal($a, $b)<br /></span><span class="default">?&gt;<br /></span><br />(See also the solution "rshawiii at yahoo dot com" posted)</span></code></div>
  </div>
 </div>
  <div class="note" id="127428">  <div class="votes">
    <div id="Vu127428">
    <a href="/manual/vote-note.php?id=127428&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127428">
    <a href="/manual/vote-note.php?id=127428&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127428" title="58% like this...">
    6
    </div>
  </div>
  <a href="#127428" class="name">
  <strong class="user"><em>admin at zeros dot co dot id</em></strong></a><a class="genanchor" href="#127428"> &para;</a><div class="date" title="2022-08-06 01:05"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127428">
<div class="phpcode"><code><span class="html">Please be careful when you try to compare strings that have a plus sign `+` at the beginning (such as phone number, etc). When you use the Equal operator `==` PHP will ignore the plus sign. Use Identical operator `===` instead<br /><br />Example:<br /><br />$str1 = "62";<br />$str2 = "+62";<br /><br />var_dump($str1 == $str2); // bool(true)<br />var_dump($str1 === $str2); // bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="128803">  <div class="votes">
    <div id="Vu128803">
    <a href="/manual/vote-note.php?id=128803&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128803">
    <a href="/manual/vote-note.php?id=128803&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128803" title="58% like this...">
    3
    </div>
  </div>
  <a href="#128803" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#128803"> &para;</a><div class="date" title="2023-08-15 06:15"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128803">
<div class="phpcode"><code><span class="html">Between the "shortcut ternary" (aka "elvis") and "spaceship" operators, you can write some quite compact comparison functions for usort and its ilk.<br /><br />If you want to sort an array of associative arrays by several different keys you can chain them in the same way that you can list column names in an SQL ORDER BY clause.<br /><br /><span class="default">&lt;?php<br />usort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, fn(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) =&gt; </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">] &lt;=&gt; </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]<br />                         ?: </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] &lt;=&gt; </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">]<br />                         ?: </span><span class="default">$a</span><span class="keyword">[</span><span class="string">'c'</span><span class="keyword">] &lt;=&gt; </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'c'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span>Will sort the array by column 'a', then by column 'b' descending, then by column 'c'; or in SQL-speak 'ORDER BY a, b DESC, c".</span></code></div>
  </div>
 </div>
  <div class="note" id="124201">  <div class="votes">
    <div id="Vu124201">
    <a href="/manual/vote-note.php?id=124201&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124201">
    <a href="/manual/vote-note.php?id=124201&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124201" title="56% like this...">
    5
    </div>
  </div>
  <a href="#124201" class="name">
  <strong class="user"><em>Ryan Mott</em></strong></a><a class="genanchor" href="#124201"> &para;</a><div class="date" title="2019-09-16 05:00"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124201">
<div class="phpcode"><code><span class="html">Searching for "double question mark" operator should find this page (and hopefully after this comment the crawlers will agree)</span></code></div>
  </div>
 </div>
  <div class="note" id="121907">  <div class="votes">
    <div id="Vu121907">
    <a href="/manual/vote-note.php?id=121907&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121907">
    <a href="/manual/vote-note.php?id=121907&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121907" title="55% like this...">
    4
    </div>
  </div>
  <a href="#121907" class="name">
  <strong class="user"><em>niall at maranelda dot org</em></strong></a><a class="genanchor" href="#121907"> &para;</a><div class="date" title="2017-11-23 12:16"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121907">
<div class="phpcode"><code><span class="html">Care must be taken when using the spaceship operator with arrays that do not have the same keys:<br /><br />- Contrary to the notes above ("Example #2 Transcription of standard array comparison"), it does *not* return null if the left-hand array contains a key that the right-hand array does not.<br />- Because of this, the result depends on the order you do the comparison in.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= [</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'e' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">];<br /></span><span class="default">$b </span><span class="keyword">= [</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'e' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">&lt;=&gt; </span><span class="default">$b</span><span class="keyword">);        </span><span class="comment">// int(1) : $a &gt; $b because $a has the 'c' key and $b doesn't.<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b </span><span class="keyword">&lt;=&gt; </span><span class="default">$a</span><span class="keyword">);        </span><span class="comment">// int(1) : $b &gt; $a because $b has the 'd' key and $a doesn't.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104840">  <div class="votes">
    <div id="Vu104840">
    <a href="/manual/vote-note.php?id=104840&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104840">
    <a href="/manual/vote-note.php?id=104840&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104840" title="53% like this...">
    5
    </div>
  </div>
  <a href="#104840" class="name">
  <strong class="user"><em>Cuong Huy To</em></strong></a><a class="genanchor" href="#104840"> &para;</a><div class="date" title="2011-07-10 07:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104840">
<div class="phpcode"><code><span class="html">In the table "Comparison with Various Types", please move the last line about "Object" to be above the line about "Array", since Object is considered to be greater than Array (tested on 5.3.3)<br /><br />(Please remove my "Anonymous" post of the same content before. You could check IP to see that I forgot to type my name)</span></code></div>
  </div>
 </div>
  <div class="note" id="117511">  <div class="votes">
    <div id="Vu117511">
    <a href="/manual/vote-note.php?id=117511&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117511">
    <a href="/manual/vote-note.php?id=117511&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117511" title="51% like this...">
    1
    </div>
  </div>
  <a href="#117511" class="name">
  <strong class="user"><em>Marcin Kuzawiski</em></strong></a><a class="genanchor" href="#117511"> &para;</a><div class="date" title="2015-06-21 08:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117511">
<div class="phpcode"><code><span class="html">A &lt; B and still B &lt; A...<br /><br />$A = [1 =&gt; 1, 2 =&gt; 0, 3 =&gt; 1];<br />$B = [1 =&gt; 1, 3 =&gt; 0, 2 =&gt; 1];<br /><br />var_dump($A &lt; $B);  // TRUE<br />var_dump($B &lt; $A);  // TRUE<br /><br />var_dump($A &gt; $B);  // TRUE<br />var_dump($B &gt; $A);  // TRUE<br /><br />Next - C and D are comparable, but neither C &lt; D nor D &lt; C (and still C != D)...<br /><br />$C = [1 =&gt; 1, 2 =&gt; 1, 3 =&gt; 0];<br />$D = [1 =&gt; 1, 3 =&gt; 1, 2 =&gt; 0];<br /><br />var_dump($C &lt; $D); // FALSE<br />var_dump($D &lt; $C); // FALSE<br /><br />var_dump($C &gt; $D); // FALSE<br />var_dump($D &gt; $C); // FALSE<br /><br />var_dump($D == $C); // FALSE</span></code></div>
  </div>
 </div>
  <div class="note" id="129994">  <div class="votes">
    <div id="Vu129994">
    <a href="/manual/vote-note.php?id=129994&amp;page=language.operators.comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129994">
    <a href="/manual/vote-note.php?id=129994&amp;page=language.operators.comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129994" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#129994" class="name">
  <strong class="user"><em>billynoah at gmail dot com</em></strong></a><a class="genanchor" href="#129994"> &para;</a><div class="date" title="2025-01-22 06:14"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129994">
<div class="phpcode"><code><span class="html">It's worth noting that there can be a difference in the logical operation of shorthand ternary (expr1 ?: expr2) vs the full version (expr1 ? expr1 : expr2). The shorthand style may also offer a slight performance enhancement because the initial expression will only be evaluated once.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="comment">// my_func() will be called twice here<br />// additionally, my_func() may not return the same value both times!<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">my_func</span><span class="keyword">() ? </span><span class="default">my_func</span><span class="keyword">() : </span><span class="default">false</span><span class="keyword">;<br /><br /></span><span class="comment">// my_func() will only be called once here<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">my_func</span><span class="keyword">() ?: </span><span class="default">false</span><span class="keyword">;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.comparison&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.comparison.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
