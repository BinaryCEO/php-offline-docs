<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: lcg_value - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.lcg-value.php">
 <link rel="shorturl" href="https://www.php.net/lcg-value">
 <link rel="alternate" href="https://www.php.net/lcg-value" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.random.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.getrandmax.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mt-getrandmax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.lcg-value.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.lcg-value.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.lcg-value.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.lcg-value.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.lcg-value.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.lcg-value.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.lcg-value.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.lcg-value.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.lcg-value.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.lcg-value.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.lcg-value.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Combined linear congruential generator" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: lcg_value - Manual" />
<meta name="twitter:description" content="Combined linear congruential generator" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: lcg_value - Manual" />
<meta itemprop="description" content="Combined linear congruential generator" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Combined linear congruential generator" />

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
        <a href="function.mt-getrandmax.php">
          mt_getrandmax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.getrandmax.php">
          &laquo; getrandmax        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.random.php'>Random</a></li>      <li><a href='ref.random.php'>Random Functions</a></li>      </ul>
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
            <option value='en/function.lcg-value.php' selected="selected">English</option>
            <option value='de/function.lcg-value.php'>German</option>
            <option value='es/function.lcg-value.php'>Spanish</option>
            <option value='fr/function.lcg-value.php'>French</option>
            <option value='it/function.lcg-value.php'>Italian</option>
            <option value='ja/function.lcg-value.php'>Japanese</option>
            <option value='pt_BR/function.lcg-value.php'>Brazilian Portuguese</option>
            <option value='ru/function.lcg-value.php'>Russian</option>
            <option value='tr/function.lcg-value.php'>Turkish</option>
            <option value='uk/function.lcg-value.php'>Ukrainian</option>
            <option value='zh/function.lcg-value.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.lcg-value" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">lcg_value</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">lcg_value</span> &mdash; <span class="dc-title">Combined linear congruential generator</span></p>

 </div>

 <div id="function.lcg-value-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 8.4.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.lcg-value-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
   <span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="methodname"><strong>lcg_value</strong></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>lcg_value()</strong></span> returns a pseudo random number in
   the range of (0, 1).  The function combines two CGs with periods
   of 2^31 - 85 and 2^31 - 249. The period of this function is equal
   to the product of both primes.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  This function does not generate cryptographically secure values, and <em>must not</em>
  be used for cryptographic purposes, or purposes that require returned values to be unguessable.
 </p>
 <p class="para">
  If cryptographically secure randomness is required, the <span class="classname"><a href="class.random-randomizer.php" class="classname">Random\Randomizer</a></span> may be
  used with the <span class="classname"><a href="class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> engine. For simple use cases, the <span class="function"><a href="function.random-int.php" class="function">random_int()</a></span>
  and <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> functions provide a convenient and secure <abbr title="Application Programming Interface">API</abbr> that is backed by
  the operating system’s <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr>.
 </p>
</div>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Scaling the return value to a different interval using multiplication
    or addition (a so-called affine transformation) might result in a bias
    in the resulting value as floats are not equally dense across the number
    line. As not all values can be exactly represented by a float, the
    result of the affine transformation might also result in values outside
    of the requested interval.
   </p>
   <p class="para">
    Use <span class="methodname"><a href="random-randomizer.getfloat.php" class="methodname">Random\Randomizer::getFloat()</a></span> to generate a
    random float within an arbitrary interval. Use <span class="methodname"><a href="random-randomizer.getint.php" class="methodname">Random\Randomizer::getInt()</a></span>
    to generate a random integer within an arbitrary interval.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.lcg-value-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.lcg-value-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A pseudo random float value between 0.0 and 1.0, inclusive.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.lcg-value-changelog">
  <h3 class="title">Changelog</h3>
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
       This function has been deprecated.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.lcg-value-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="random-randomizer.getfloat.php" class="methodname" rel="rdfs-seeAlso">Random\Randomizer::getFloat()</a> - Get a uniformly selected float</span></li>
    <li><span class="methodname"><a href="random-randomizer.getint.php" class="methodname" rel="rdfs-seeAlso">Random\Randomizer::getInt()</a> - Get a uniformly selected integer</span></li>
    <li><span class="function"><a href="function.random-int.php" class="function" rel="rdfs-seeAlso">random_int()</a> - Get a cryptographically secure, uniformly selected integer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/random/functions/lcg-value.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.lcg-value%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.lcg-value&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.lcg-value.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96032">  <div class="votes">
    <div id="Vu96032">
    <a href="/manual/vote-note.php?id=96032&amp;page=function.lcg-value&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96032">
    <a href="/manual/vote-note.php?id=96032&amp;page=function.lcg-value&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96032" title="69% like this...">
    16
    </div>
  </div>
  <a href="#96032" class="name">
  <strong class="user"><em>daniel dot baulig at gmx dot de</em></strong></a><a class="genanchor" href="#96032"> &para;</a><div class="date" title="2010-02-03 07:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96032">
<div class="phpcode"><code><span class="html">Choose your weapon:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mt_randf</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">)<br />{<br />    return </span><span class="default">$min </span><span class="keyword">+ </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$max </span><span class="keyword">- </span><span class="default">$min</span><span class="keyword">) * </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">mt_getrandmax</span><span class="keyword">())/</span><span class="default">mt_getrandmax</span><span class="keyword">(); <br />}<br />function </span><span class="default">lcg_randf</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">)<br />{<br />    return </span><span class="default">$min </span><span class="keyword">+ </span><span class="default">lcg_value</span><span class="keyword">() * </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$max </span><span class="keyword">- </span><span class="default">$min</span><span class="keyword">);<br />}<br />function </span><span class="default">randf</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">)<br />{<br />    return </span><span class="default">$min </span><span class="keyword">+ </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">getrandmax</span><span class="keyword">()) / </span><span class="default">getrandmax</span><span class="keyword">() * </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$max </span><span class="keyword">- </span><span class="default">$min</span><span class="keyword">);<br />}</span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75562">  <div class="votes">
    <div id="Vu75562">
    <a href="/manual/vote-note.php?id=75562&amp;page=function.lcg-value&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75562">
    <a href="/manual/vote-note.php?id=75562&amp;page=function.lcg-value&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75562" title="72% like this...">
    16
    </div>
  </div>
  <a href="#75562" class="name">
  <strong class="user"><em>rok  kralj  gmail  com</em></strong></a><a class="genanchor" href="#75562"> &para;</a><div class="date" title="2007-06-05 08:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75562">
<div class="phpcode"><code><span class="html">An elegant way to return random float between two numbers:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">random_float </span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">,</span><span class="default">$max</span><span class="keyword">) {<br />   return (</span><span class="default">$min</span><span class="keyword">+</span><span class="default">lcg_value</span><span class="keyword">()*(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$max</span><span class="keyword">-</span><span class="default">$min</span><span class="keyword">)));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.lcg-value&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.lcg-value.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.random.php">Random Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.getrandmax.php" title="getrandmax">getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-getrandmax.php" title="mt_&#8203;getrandmax">mt_&#8203;getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-rand.php" title="mt_&#8203;rand">mt_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-srand.php" title="mt_&#8203;srand">mt_&#8203;srand</a>
                        </li>
                                                <li class="">
                            <a href="function.rand.php" title="rand">rand</a>
                        </li>
                                                <li class="">
                            <a href="function.random-bytes.php" title="random_&#8203;bytes">random_&#8203;bytes</a>
                        </li>
                                                <li class="">
                            <a href="function.random-int.php" title="random_&#8203;int">random_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.srand.php" title="srand">srand</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="current">
                        <a href="function.lcg-value.php" title="lcg_&#8203;value">lcg_&#8203;value</a>
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
