<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration80.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration80.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration80.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration80.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration80.deprecated.php">
 <link rel="next" href="https://www.php.net/manual/en/migration74.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration80.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration80.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration80.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration80.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration80.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration80.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration80.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration80.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration80.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration80.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration80.other-changes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Changes - Manual" />
<meta name="twitter:description" content="Other Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Changes - Manual" />
<meta itemprop="description" content="Other Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Changes" />

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
        <a href="migration74.php">
          Migrating from PHP 7.3.x to PHP 7.4.x &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration80.deprecated.php">
          &laquo; Deprecated Features        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration80.php'>Migrating from PHP 7.4.x to PHP 8.0.x</a></li>      </ul>
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
            <option value='en/migration80.other-changes.php' selected="selected">English</option>
            <option value='de/migration80.other-changes.php'>German</option>
            <option value='es/migration80.other-changes.php'>Spanish</option>
            <option value='fr/migration80.other-changes.php'>French</option>
            <option value='it/migration80.other-changes.php'>Italian</option>
            <option value='ja/migration80.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration80.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration80.other-changes.php'>Russian</option>
            <option value='tr/migration80.other-changes.php'>Turkish</option>
            <option value='uk/migration80.other-changes.php'>Ukrainian</option>
            <option value='zh/migration80.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration80.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration80.other-changes.sapi">
  <h3 class="title">Changes in SAPI Modules</h3>

  <div class="sect3" id="migration80.other-changes.sapi.apache2handler">
   <h4 class="title">Apache2Handler</h4>

   <p class="para">
    The PHP module has been renamed from <code class="literal">php7_module</code> to
    <code class="literal">php_module</code>.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration80.other-changes.functions">
  <h3 class="title">Changed Functions</h3>

  <div class="sect3" id="migration80.other-changes.functions.reflection">
   <h4 class="title">Reflection</h4>

   <p class="para">
    <span class="methodname"><a href="reflectionclass.getconstants.php" class="methodname">ReflectionClass::getConstants()</a></span> and
    <span class="methodname"><a href="reflectionclass.getreflectionconstants.php" class="methodname">ReflectionClass::getReflectionConstants()</a></span> results can be now filtered via
    a new parameter <code class="parameter">filter</code>. Three new constants were added to be used with it:
   </p>
   <p class="para">
    <ul class="simplelist">
     <li><strong><code><a href="class.reflectionclassconstant.php#reflectionclassconstant.constants.is-public">ReflectionClassConstant::IS_PUBLIC</a></code></strong></li>
     <li><strong><code><a href="class.reflectionclassconstant.php#reflectionclassconstant.constants.is-protected">ReflectionClassConstant::IS_PROTECTED</a></code></strong></li>
     <li><strong><code><a href="class.reflectionclassconstant.php#reflectionclassconstant.constants.is-private">ReflectionClassConstant::IS_PRIVATE</a></code></strong></li>
    </ul>
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.functions.standard">
   <h4 class="title">Standard</h4>

   <p class="para">
    The math functions <span class="function"><a href="function.abs.php" class="function">abs()</a></span>, <span class="function"><a href="function.ceil.php" class="function">ceil()</a></span>,
    <span class="function"><a href="function.floor.php" class="function">floor()</a></span> and <span class="function"><a href="function.round.php" class="function">round()</a></span> now properly heed
    <a href="language.types.declarations.php#language.types.declarations.strict" class="link">the <code class="literal">strict_types</code> directive</a>.
    Previously, they coerced the first argument even in strict type mode.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.functions.zip">
   <h4 class="title">Zip</h4>

   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      The <span class="methodname"><a href="ziparchive.addglob.php" class="methodname">ZipArchive::addGlob()</a></span> and
      <span class="methodname"><a href="ziparchive.addpattern.php" class="methodname">ZipArchive::addPattern()</a></span> methods accept more values in the
      <code class="parameter">options</code> array argument:
     </p>
     <p class="para">
      <ul class="simplelist">
       <li><code class="literal">flags</code></li>
       <li><code class="literal">comp_method</code></li>
       <li><code class="literal">comp_flags</code></li>
       <li><code class="literal">env_method</code></li>
       <li><code class="literal">enc_password</code></li>
      </ul>
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <span class="methodname"><a href="ziparchive.addemptydir.php" class="methodname">ZipArchive::addEmptyDir()</a></span>, <span class="methodname"><a href="ziparchive.addfile.php" class="methodname">ZipArchive::addFile()</a></span>
      and <span class="methodname"><a href="ziparchive.addfromstring.php" class="methodname">ZipArchive::addFromString()</a></span>
      methods have a new <code class="parameter">flags</code> argument. This allows managing name encoding
      (<strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-guess">ZipArchive::FL_ENC_<span class="replaceable">*</span></a></code></strong>) and entry replacement
      (<strong><code><a href="zip.constants.php#ziparchive.constants.fl-overwrite">ZipArchive::FL_OVERWRITE</a></code></strong>).
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <span class="methodname"><a href="ziparchive.extractto.php" class="methodname">ZipArchive::extractTo()</a></span> now restores the file modification time.
     </p>
    </li>
   </ul>
  </div>
 </div>

 <div class="sect2" id="migration80.other-changes.extensions">
  <h3 class="title">Other Changes to Extensions</h3>

  <div class="sect3" id="migration80.other-changes.extensions.curl">
   <h4 class="title">CURL</h4>

   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      The CURL extension now requires at least libcurl 7.29.0.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      The deprecated parameter <code class="parameter">version</code> of <span class="function"><a href="function.curl-version.php" class="function">curl_version()</a></span> has
      been removed.
     </p>
    </li>
   </ul>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.date">
   <h4 class="title">Date and Time</h4>

   <p class="para">
    <span class="classname"><a href="class.dateperiod.php" class="classname">DatePeriod</a></span> now implements <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span>
    (instead of <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>).
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.dom">
   <h4 class="title">DOM</h4>

   <p class="para">
    <span class="classname"><a href="class.domnamednodemap.php" class="classname">DOMNamedNodeMap</a></span> and <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> now implement
    <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> (instead of
    <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>).
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.intl">
   <h4 class="title">Intl</h4>

   <p class="para">
    <span class="classname"><a href="class.intlbreakiterator.php" class="classname">IntlBreakIterator</a></span> and <span class="classname"><a href="class.resourcebundle.php" class="classname">ResourceBundle</a></span> now implement
    <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> (instead of <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>).
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.enchant">
   <h4 class="title">Enchant</h4>

   <p class="para">
    The enchant extension now uses libenchant-2 by default when available. libenchant version 1 is
    still supported but is deprecated and could be removed in the future.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.gd">
   <h4 class="title">GD</h4>

   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      The <code class="parameter">num_points</code> parameter of <span class="function"><a href="function.imagepolygon.php" class="function">imagepolygon()</a></span>,
      <span class="function"><a href="function.imageopenpolygon.php" class="function">imageopenpolygon()</a></span> and <span class="function"><a href="function.imagefilledpolygon.php" class="function">imagefilledpolygon()</a></span> is now
      optional, i.e. these functions may be called with either 3 or 4 arguments. If the argument is
      omitted, it is calculated as <code class="code">count($points)/2</code>.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      The function <span class="function"><a href="function.imagegetinterpolation.php" class="function">imagegetinterpolation()</a></span> to get the current interpolation method
      has been added.
     </p>
    </li>
   </ul>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.json">
   <h4 class="title">JSON</h4>

   <p class="para">
    The JSON extension cannot be disabled anymore and is always an integral part of any PHP build,
    similar to the date extension.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.mbstring">
   <h4 class="title">MBString</h4>

   <p class="para">
    The Unicode data tables have been updated to version 13.0.0.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.pdo">
   <h4 class="title">PDO</h4>

   <p class="para">
    <span class="classname"><a href="class.pdostatement.php" class="classname">PDOStatement</a></span> now implements
    <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> (instead of
    <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>).
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.libxml">
   <h4 class="title">LibXML</h4>

   <p class="para">
    The minimum required libxml version is now 2.9.0. This means that external entity loading is now
    guaranteed to be disabled by default, and no extra steps need to be taken to protect against XXE
    attacks.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.mysqli">
   <h4 class="title">MySQLi / PDO MySQL</h4>

   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      When mysqlnd is not used (which is the default and recommended option), the minimum supported
      libmysqlclient version is now 5.5.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> now implements
      <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> (instead of
      <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>).
     </p>
    </li>
   </ul>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.pgsql">
   <h4 class="title">PGSQL / PDO PGSQL</h4>

   <p class="para">
    The PGSQL and PDO PGSQL extensions now require at least libpq 9.1.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.readline">
   <h4 class="title">Readline</h4>

   <p class="para">
    Calling <span class="function"><a href="function.readline-completion-function.php" class="function">readline_completion_function()</a></span> before the interactive prompt starts
    (e.g. in <a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a>) will now override the
    default interactive prompt completion function. Previously,
    <span class="function"><a href="function.readline-completion-function.php" class="function">readline_completion_function()</a></span> only worked when called after starting the
    interactive prompt.
   </p>
  </div>

  <div class="sect3" id="migration80.other-changes.extensions.simplexml">
   <h4 class="title">SimpleXML</h4>

   <p class="para">
    <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> now implements
    <span class="interfacename"><a href="class.recursiveiterator.php" class="interfacename">RecursiveIterator</a></span> and absorbed the functionality of
    <span class="classname"><a href="class.simplexmliterator.php" class="classname">SimpleXMLIterator</a></span>. <span class="classname"><a href="class.simplexmliterator.php" class="classname">SimpleXMLIterator</a></span> is an empty
    extension of <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span>.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration80.other-changes.ini">
  <h3 class="title">Changes to INI File Handling</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     com.dotnet_version
     is a new INI directive to choose the version of the .NET framework to use for
     <span class="classname"><a href="class.dotnet.php" class="classname">dotnet</a></span> objects.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     zend.exception_string_param_max_len
     is a new INI directive to set the maximum string length in an argument of a stringified
     stack strace.
    </p>
   </li>
   </ul>
 </div>

 <div class="sect2" id="migration80.other-changes.ebcdic">
  <h3 class="title">EBCDIC</h3>

  <p class="para">
   EBCDIC targets are no longer supported, though it&#039;s unlikely that they were still working in the
   first place.
  </p>
 </div>

 <div class="sect2" id="migration80.other-changes.performance">
  <h3 class="title">Performance</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     A Just-In-Time (JIT) compiler has been added to the opcache extension.
     
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.array-slice.php" class="function">array_slice()</a></span> on an array without gaps will no longer scan the whole array
     to find the start offset. This may significantly reduce the runtime of the function with large
     offsets and small lengths.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span> now uses a SIMD implementation when using the
     <code class="literal">&quot;C&quot;</code> <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong> locale (which is the default).
    </p>
   </li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration80/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration80.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration80.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration80.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128118">  <div class="votes">
    <div id="Vu128118">
    <a href="/manual/vote-note.php?id=128118&amp;page=migration80.other-changes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128118">
    <a href="/manual/vote-note.php?id=128118&amp;page=migration80.other-changes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128118" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#128118" class="name">
  <strong class="user"><em>barry dot nelson at amobiledevice dot com</em></strong></a><a class="genanchor" href="#128118"> &para;</a><div class="date" title="2023-01-16 12:18"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128118">
<div class="phpcode"><code><span class="html">If loading the PHP8 apache module on SuSe Linux, the configuration scripts incorrectly try to load it with automatically generated load statement of:<br />LoadModule php8_module                     /usr/lib64/apache2/mod_php8.so<br />This does not work, the patch below fixes the conf file generator...<br /><br />--- /usr/share/apache2/get_module_list    2023-01-14 22:41:49.586825349 -0500<br />+++ /usr/share/apache2/get_module_list    2023-01-14 22:42:02.171600410 -0500<br />@@ -91,4 +91,8 @@<br />     esac<br /> <br />+    if [ "$module_id" = "php8_module" ]; then<br />+        module_id="php_module"<br />+    fi<br />+<br />     if [[ -f $module_path ]]; then<br />         printf "LoadModule %-30s %s\n" $module_id $module_path &gt;&amp;3</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration80.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration80.other-changes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration80.php">Migrating from PHP 7.4.x to PHP 8.0.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration80.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration80.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration80.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration80.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="current">
                            <a href="migration80.other-changes.php" title="Other Changes">Other Changes</a>
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
