<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bcscale - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bcscale.php">
 <link rel="shorturl" href="https://www.php.net/bcscale">
 <link rel="alternate" href="https://www.php.net/bcscale" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.bc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.bcround.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bcsqrt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bcscale.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bcscale.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bcscale.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bcscale.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bcscale.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bcscale.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bcscale.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bcscale.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bcscale.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bcscale.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bcscale.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set or get default scale parameter for all bc math functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bcscale - Manual" />
<meta name="twitter:description" content="Set or get default scale parameter for all bc math functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bcscale - Manual" />
<meta itemprop="description" content="Set or get default scale parameter for all bc math functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set or get default scale parameter for all bc math functions" />

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
        <a href="function.bcsqrt.php">
          bcsqrt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.bcround.php">
          &laquo; bcround        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.bc.php'>BC Math</a></li>      <li><a href='ref.bc.php'>BC Math Functions</a></li>      </ul>
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
            <option value='en/function.bcscale.php' selected="selected">English</option>
            <option value='de/function.bcscale.php'>German</option>
            <option value='es/function.bcscale.php'>Spanish</option>
            <option value='fr/function.bcscale.php'>French</option>
            <option value='it/function.bcscale.php'>Italian</option>
            <option value='ja/function.bcscale.php'>Japanese</option>
            <option value='pt_BR/function.bcscale.php'>Brazilian Portuguese</option>
            <option value='ru/function.bcscale.php'>Russian</option>
            <option value='tr/function.bcscale.php'>Turkish</option>
            <option value='uk/function.bcscale.php'>Ukrainian</option>
            <option value='zh/function.bcscale.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bcscale" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bcscale</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bcscale</span> &mdash; <span class="dc-title">Set or get default scale parameter for all bc math functions</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.bcscale-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>bcscale</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$scale</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Sets the default scale parameter for all subsequent calls to bc math functions that
   do not explicitly specify a scale parameter.
  </p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>bcscale</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.null.php" class="type null">null</a></span> <code class="parameter">$scale</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Gets the current scale factor.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.bcscale-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">scale</code></dt>
     <dd>
      <p class="para">
       The scale factor.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.bcscale-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the old scale when used as setter. Otherwise the current scale is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.bcscale-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   This function throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">scale</code>
   is outside the valid range.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.bcscale-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">scale</code> is now nullable.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       <span class="function"><strong>bcscale()</strong></span> can now be used to get the current scale
       factor; when used as setter, it now returns the old scale value.
       Formerly, <code class="parameter">scale</code> was mandatory, and
       <span class="function"><strong>bcscale()</strong></span> always returned <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bcscale-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3281">
    <p><strong>Example #1 <span class="function"><strong>bcscale()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// default scale : 3<br /></span><span style="color: #0000BB">bcscale</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bcdiv</span><span style="color: #007700">(</span><span style="color: #DD0000">'105'</span><span style="color: #007700">, </span><span style="color: #DD0000">'6.55957'</span><span style="color: #007700">); </span><span style="color: #FF8000">// 16.007<br /><br />// this is the same without bcscale()<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bcdiv</span><span style="color: #007700">(</span><span style="color: #DD0000">'105'</span><span style="color: #007700">, </span><span style="color: #DD0000">'6.55957'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">); </span><span style="color: #FF8000">// 16.007<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/functions/bcscale.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bcscale%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bcscale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcscale.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79628">  <div class="votes">
    <div id="Vu79628">
    <a href="/manual/vote-note.php?id=79628&amp;page=function.bcscale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79628">
    <a href="/manual/vote-note.php?id=79628&amp;page=function.bcscale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79628" title="71% like this...">
    25
    </div>
  </div>
  <a href="#79628" class="name">
  <strong class="user"><em>mwgamera at gmail dot com</em></strong></a><a class="genanchor" href="#79628"> &para;</a><div class="date" title="2007-12-05 06:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79628">
<div class="phpcode"><code><span class="html">These functions DO NOT round off your values. No arbitrary precision libraries do it this way. It stops calculating after reaching scale of decimal places, which mean that your value is cut off after scale number of digits, not rounded. To do the rounding use something like this:<br /><span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">bcround</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="default">$fix </span><span class="keyword">= </span><span class="string">"5"</span><span class="keyword">;<br />                for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$scale</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$fix</span><span class="keyword">=</span><span class="string">"0</span><span class="default">$fix</span><span class="string">"</span><span class="keyword">;<br />                </span><span class="default">$number </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="string">"0.</span><span class="default">$fix</span><span class="string">"</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />                return    </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="string">"1.0"</span><span class="keyword">,    </span><span class="default">$scale</span><span class="keyword">);<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120471">  <div class="votes">
    <div id="Vu120471">
    <a href="/manual/vote-note.php?id=120471&amp;page=function.bcscale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120471">
    <a href="/manual/vote-note.php?id=120471&amp;page=function.bcscale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120471" title="72% like this...">
    17
    </div>
  </div>
  <a href="#120471" class="name">
  <strong class="user"><em>sicerwork at aliyun dot com</em></strong></a><a class="genanchor" href="#120471"> &para;</a><div class="date" title="2017-01-16 06:56"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120471">
<div class="phpcode"><code><span class="html">Executing bcsacle() will change the scale value of fpm.conf, not only the current process.</span></code></div>
  </div>
 </div>
  <div class="note" id="108486">  <div class="votes">
    <div id="Vu108486">
    <a href="/manual/vote-note.php?id=108486&amp;page=function.bcscale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108486">
    <a href="/manual/vote-note.php?id=108486&amp;page=function.bcscale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108486" title="58% like this...">
    5
    </div>
  </div>
  <a href="#108486" class="name">
  <strong class="user"><em>ravenswd at gmail dot com</em></strong></a><a class="genanchor" href="#108486"> &para;</a><div class="date" title="2012-04-30 06:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108486">
<div class="phpcode"><code><span class="html">Simple, easy way to remove excess trailing zeros using rtrim:<br />&lt;php&gt;<br />  // $total is the result of a bcmath calculation<br />  if ( strpos($total, '.') !== false ):<br />    $total = rtrim($total, '0');<br />    $total = rtrim($total, '.');<br />  endif;<br />&lt;/php&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="114796">  <div class="votes">
    <div id="Vu114796">
    <a href="/manual/vote-note.php?id=114796&amp;page=function.bcscale&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114796">
    <a href="/manual/vote-note.php?id=114796&amp;page=function.bcscale&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114796" title="56% like this...">
    5
    </div>
  </div>
  <a href="#114796" class="name">
  <strong class="user"><em>herslyadam at gmail dot com</em></strong></a><a class="genanchor" href="#114796"> &para;</a><div class="date" title="2014-04-07 10:04"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114796">
<div class="phpcode"><code><span class="html">edited bcround function with negative number support:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">bcround</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />    if(</span><span class="default">$scale </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$scale </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$sign </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    if(</span><span class="default">bccomp</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">, </span><span class="default">$number</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) </span><span class="default">$sign </span><span class="keyword">= </span><span class="string">'-'</span><span class="keyword">;<br />    </span><span class="default">$increment </span><span class="keyword">= </span><span class="default">$sign </span><span class="keyword">. </span><span class="string">'0.' </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">) . </span><span class="string">'5'</span><span class="keyword">;<br />    </span><span class="default">$number </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$increment</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />    return </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">$scale</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bcscale&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bcscale.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.bc.php">BC Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.bcadd.php" title="bcadd">bcadd</a>
                        </li>
                                                <li class="">
                            <a href="function.bcceil.php" title="bcceil">bcceil</a>
                        </li>
                                                <li class="">
                            <a href="function.bccomp.php" title="bccomp">bccomp</a>
                        </li>
                                                <li class="">
                            <a href="function.bcdiv.php" title="bcdiv">bcdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.bcdivmod.php" title="bcdivmod">bcdivmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcfloor.php" title="bcfloor">bcfloor</a>
                        </li>
                                                <li class="">
                            <a href="function.bcmod.php" title="bcmod">bcmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcmul.php" title="bcmul">bcmul</a>
                        </li>
                                                <li class="">
                            <a href="function.bcpow.php" title="bcpow">bcpow</a>
                        </li>
                                                <li class="">
                            <a href="function.bcpowmod.php" title="bcpowmod">bcpowmod</a>
                        </li>
                                                <li class="">
                            <a href="function.bcround.php" title="bcround">bcround</a>
                        </li>
                                                <li class="current">
                            <a href="function.bcscale.php" title="bcscale">bcscale</a>
                        </li>
                                                <li class="">
                            <a href="function.bcsqrt.php" title="bcsqrt">bcsqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.bcsub.php" title="bcsub">bcsub</a>
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
