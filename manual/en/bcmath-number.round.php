<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: BcMath\Number::round - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/bcmath-number.round.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/bcmath-number.round.php">
 <link rel="alternate" href="https://www.php.net/manual/en/bcmath-number.round.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.bcmath-number.php">
 <link rel="prev" href="https://www.php.net/manual/en/bcmath-number.powmod.php">
 <link rel="next" href="https://www.php.net/manual/en/bcmath-number.serialize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/bcmath-number.round.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/bcmath-number.round.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/bcmath-number.round.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/bcmath-number.round.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/bcmath-number.round.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/bcmath-number.round.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/bcmath-number.round.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/bcmath-number.round.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/bcmath-number.round.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/bcmath-number.round.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/bcmath-number.round.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Rounds an arbitrary precision number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: BcMath\Number::round - Manual" />
<meta name="twitter:description" content="Rounds an arbitrary precision number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: BcMath\Number::round - Manual" />
<meta itemprop="description" content="Rounds an arbitrary precision number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Rounds an arbitrary precision number" />

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
        <a href="bcmath-number.serialize.php">
          BcMath\Number::__serialize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="bcmath-number.powmod.php">
          &laquo; BcMath\Number::powmod        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.bc.php'>BC Math</a></li>      <li><a href='class.bcmath-number.php'>BcMath\Number</a></li>      </ul>
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
            <option value='en/bcmath-number.round.php' selected="selected">English</option>
            <option value='de/bcmath-number.round.php'>German</option>
            <option value='es/bcmath-number.round.php'>Spanish</option>
            <option value='fr/bcmath-number.round.php'>French</option>
            <option value='it/bcmath-number.round.php'>Italian</option>
            <option value='ja/bcmath-number.round.php'>Japanese</option>
            <option value='pt_BR/bcmath-number.round.php'>Brazilian Portuguese</option>
            <option value='ru/bcmath-number.round.php'>Russian</option>
            <option value='tr/bcmath-number.round.php'>Turkish</option>
            <option value='uk/bcmath-number.round.php'>Ukrainian</option>
            <option value='zh/bcmath-number.round.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="bcmath-number.round" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">BcMath\Number::round</h1>
  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">BcMath\Number::round</span> &mdash; <span class="dc-title">Rounds an arbitrary precision number</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-bcmath-number.round-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>BcMath\Number::round</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$precision</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="enum.roundingmode.php" class="type RoundingMode">RoundingMode</a></span> <code class="parameter">$mode</code><span class="initializer"> = RoundingMode::HalfAwayFromZero</span></span>): <span class="type"><a href="class.bcmath-number.php" class="type BcMath\Number">BcMath\Number</a></span></div>

  <p class="simpara">
   Returns the rounded value of <var class="varname">$this</var> to
   specified <code class="parameter">precision</code>
   (number of digits after the decimal point).
   <code class="parameter">precision</code> can also be negative or zero (default).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-bcmath-number.round-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
   
     <dt><code class="parameter">precision</code></dt>
     <dd>
      <p class="para">
       The optional number of decimal digits to round to.
      </p>
      <p class="para">
       If the <code class="parameter">precision</code> is positive, <code class="parameter">num</code> is
       rounded to <code class="parameter">precision</code> significant digits after the decimal point.
      </p>
      <p class="para">
       If the <code class="parameter">precision</code> is negative, <code class="parameter">num</code> is
       rounded to <code class="parameter">precision</code> significant digits before the decimal point,
       i.e. to the nearest multiple of <code class="code">pow(10, -$precision)</code>, e.g. for a
       <code class="parameter">precision</code> of -1 <code class="parameter">num</code> is rounded to tens,
       for a <code class="parameter">precision</code> of -2 to hundreds, etc.
      </p>
     </dd>
    
   
    <dt><code class="parameter">mode</code></dt>
    <dd>
     <span class="simpara">
      Specifies the rounding mode. For more information about modes, see <span class="enumname"><a href="enum.roundingmode.php" class="enumname">RoundingMode</a></span>.
     </span>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-bcmath-number.round-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   Returns the result as a new <span class="classname"><a href="class.bcmath-number.php" class="classname">BcMath\Number</a></span> object.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-bcmath-number.round-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   This method throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if an invalid <code class="parameter">mode</code> is specified.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-bcmath-number.round-examples">
  <h3 class="title">Examples</h3>
   <div class="example" id="example-3304">
   <p><strong>Example #1 <span class="methodname"><strong>BcMath\Number::round()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'3.4'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'3.5'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'3.6'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'3.6'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'5.045'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'5.055'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'345'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'345'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">3</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'678'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'678'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">3</span><span style="color: #007700">),<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(BcMath\Number)#2 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;3&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#3 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;4&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;4&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#5 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;4&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#6 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;5.05&quot;
  [&quot;scale&quot;]=&gt;
  int(2)
}
object(BcMath\Number)#7 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;5.06&quot;
  [&quot;scale&quot;]=&gt;
  int(2)
}
object(BcMath\Number)#8 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;300&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#9 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;0&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#10 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;700&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#11 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;1000&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-3305">
   <p><strong>Example #2 
    Example of using <span class="methodname"><strong>BcMath\Number::round()</strong></span> with different <code class="parameter">precision</code> values
   </strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$number </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'123.45'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">1</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">2</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(-</span><span style="color: #0000BB">3</span><span style="color: #007700">),<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(BcMath\Number)#2 (2) {
  [&quot;value&quot;]=&gt;
  string(7) &quot;123.450&quot;
  [&quot;scale&quot;]=&gt;
  int(3)
}
object(BcMath\Number)#3 (2) {
  [&quot;value&quot;]=&gt;
  string(6) &quot;123.45&quot;
  [&quot;scale&quot;]=&gt;
  int(2)
}
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(5) &quot;123.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#5 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;123&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#6 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;120&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#7 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;100&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#8 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;0&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-3306">
   <p><strong>Example #3 
    Example of using <span class="methodname"><strong>BcMath\Number::round()</strong></span> with different <code class="parameter">mode</code> values
   </strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Rounding modes with 9.5' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$number </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'9.5'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfAwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfTowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfEven</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfOdd</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">TowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">AwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">NegativeInfinity</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">PositiveInfinity</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Rounding modes with 8.5' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$number </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'8.5'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfAwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfTowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfEven</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfOdd</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">TowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">AwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">NegativeInfinity</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$number</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">PositiveInfinity</span><span style="color: #007700">),<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Rounding modes with 9.5
object(BcMath\Number)#3 (2) {
  [&quot;value&quot;]=&gt;
  string(2) &quot;10&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#5 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#7 (2) {
  [&quot;value&quot;]=&gt;
  string(2) &quot;10&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#9 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#11 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#13 (2) {
  [&quot;value&quot;]=&gt;
  string(2) &quot;10&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#15 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#17 (2) {
  [&quot;value&quot;]=&gt;
  string(2) &quot;10&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}

Rounding modes with 8.5
object(BcMath\Number)#1 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#15 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;8&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#13 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;8&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#11 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#9 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;8&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#7 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#5 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;8&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#3 (2) {
  [&quot;value&quot;]=&gt;
  string(1) &quot;9&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-3307">
   <p><strong>Example #4 
    Example of using <span class="methodname"><strong>BcMath\Number::round()</strong></span> with different <code class="parameter">mode</code> values
    when specifying <code class="parameter">precision</code>
   </strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$positive </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.55'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$negative </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'-1.55'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">'Using RoundingMode::HalfAwayFromZero with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfAwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfAwayFromZero</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::HalfTowardsZero with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfTowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfTowardsZero</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::HalfEven with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfEven</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfEven</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::HalfOdd with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfOdd</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">HalfOdd</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::TowardsZero with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">TowardsZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">TowardsZero</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::AwayFromZero with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">AwayFromZero</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">AwayFromZero</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::NegativeInfinity with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">NegativeInfinity</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">NegativeInfinity</span><span style="color: #007700">),<br />);<br /><br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'Using RoundingMode::PositiveInfinity with 1 decimal digit precision' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$positive</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">PositiveInfinity</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">$negative</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">RoundingMode</span><span style="color: #007700">::</span><span style="color: #0000BB">PositiveInfinity</span><span style="color: #007700">),<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Using RoundingMode::HalfAwayFromZero with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#5 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::HalfTowardsZero with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#6 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::HalfEven with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#7 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::HalfOdd with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#8 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::TowardsZero with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#9 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::AwayFromZero with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#10 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::NegativeInfinity with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#11 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}

Using RoundingMode::PositiveInfinity with 1 decimal digit precision
object(BcMath\Number)#4 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;1.6&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}
object(BcMath\Number)#12 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-1.5&quot;
  [&quot;scale&quot;]=&gt;
  int(1)
}</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-bcmath-number.round-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.bcround.php" class="function" rel="rdfs-seeAlso">bcround()</a> - Round arbitrary precision number</span></li>
   <li><span class="methodname"><a href="bcmath-number.ceil.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::ceil()</a> - Rounds up an arbitrary precision number</span></li>
   <li><span class="methodname"><a href="bcmath-number.floor.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::floor()</a> - Rounds down an arbitrary precision number</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/bcmath/number/round.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbcmath-number.round%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=bcmath-number.round&amp;repo=en&amp;redirect=https://www.php.net/manual/en/bcmath-number.round.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.bcmath-number.php">BcMath\Number</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="bcmath-number.add.php" title="add">add</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.compare.php" title="compare">compare</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.div.php" title="div">div</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.divmod.php" title="divmod">divmod</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.mod.php" title="mod">mod</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.mul.php" title="mul">mul</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.powmod.php" title="powmod">powmod</a>
                        </li>
                                                <li class="current">
                            <a href="bcmath-number.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.serialize.php" title="_&#8203;_&#8203;serialize">_&#8203;_&#8203;serialize</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.sub.php" title="sub">sub</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.unserialize.php" title="_&#8203;_&#8203;unserialize">_&#8203;_&#8203;unserialize</a>
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
