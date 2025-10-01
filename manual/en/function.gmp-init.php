<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gmp_init - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gmp-init.php">
 <link rel="shorturl" href="https://www.php.net/gmp-init">
 <link rel="alternate" href="https://www.php.net/gmp-init" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.gmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gmp-import.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gmp-intval.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gmp-init.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gmp-init.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gmp-init.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gmp-init.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gmp-init.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gmp-init.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gmp-init.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gmp-init.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gmp-init.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gmp-init.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gmp-init.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create GMP number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gmp_init - Manual" />
<meta name="twitter:description" content="Create GMP number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gmp_init - Manual" />
<meta itemprop="description" content="Create GMP number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create GMP number" />

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
        <a href="function.gmp-intval.php">
          gmp_intval &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gmp-import.php">
          &laquo; gmp_import        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.gmp.php'>GMP</a></li>      <li><a href='ref.gmp.php'>GMP Functions</a></li>      </ul>
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
            <option value='en/function.gmp-init.php' selected="selected">English</option>
            <option value='de/function.gmp-init.php'>German</option>
            <option value='es/function.gmp-init.php'>Spanish</option>
            <option value='fr/function.gmp-init.php'>French</option>
            <option value='it/function.gmp-init.php'>Italian</option>
            <option value='ja/function.gmp-init.php'>Japanese</option>
            <option value='pt_BR/function.gmp-init.php'>Brazilian Portuguese</option>
            <option value='ru/function.gmp-init.php'>Russian</option>
            <option value='tr/function.gmp-init.php'>Turkish</option>
            <option value='uk/function.gmp-init.php'>Ukrainian</option>
            <option value='zh/function.gmp-init.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gmp-init" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gmp_init</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gmp_init</span> &mdash; <span class="dc-title">Create GMP number</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.gmp-init-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gmp_init</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$base</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="class.gmp.php" class="type GMP">GMP</a></span></div>

  <p class="para rdfs-comment">
   Creates a GMP number from an integer or string. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.gmp-init-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">num</code></dt>
    <dd>
     <span class="simpara">
      An integer or a string. The string representation can be decimal,
      hexadecimal, octal, or binary.
     </span>
    </dd>
   
   
    <dt><code class="parameter">base</code></dt>
    <dd>
     <span class="simpara">
      The base to use for converting a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> representation.
     </span>
     <span class="simpara">
      An explicit base can be between <code class="literal">2</code> and <code class="literal">62</code>.
      For bases up to <code class="literal">36</code>, case is ignored;
      upper-case and lower-case letters have the same value.
      For bases <code class="literal">37</code> to <code class="literal">62</code>,
      upper-case letter represent the values <code class="literal">10</code> to
      <code class="literal">35</code> and lower-case letter represent the values
      <code class="literal">36</code> to <code class="literal">61</code>.
     </span>
     <span class="simpara">
      If <code class="parameter">base</code> is <code class="literal">0</code> then the actual
      base is determined from the leading characters of <code class="parameter">num</code>.
      If the first two characters are <code class="literal">0x</code> or <code class="literal">0X</code>,
      the string is interpreted as a hexadecimal integer.
      If the first two characters are <code class="literal">0b</code> or <code class="literal">0B</code>,
      the string is interpreted as a binary integer.
      If the first two characters are <code class="literal">0o</code> or <code class="literal">0o</code>,
      the string is interpreted as an octal integer.
      Moreover, if the first character is <code class="literal">0</code> the string
      is also interpreted as an octal integer.
      In all other cases, the string is interpreted as a decimal integer.
     </span>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gmp-init-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span> object.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.gmp-init-changelog">
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
      <td>8.1.0</td>
      <td>
       Support for explicit octal prefixes <code class="literal">0o</code> and
       <code class="literal">0o</code> has been added for <code class="parameter">num</code> strings.
       Interpretation of such prefixes when <code class="parameter">base</code> is
       <code class="literal">0</code> has also been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.gmp-init-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3328">
    <p><strong>Example #1 Creating GMP number</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_init</span><span style="color: #007700">(</span><span style="color: #0000BB">123456</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">gmp_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"0xFFFFDEBACDFEDF7200"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.gmp-init-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is not necessary to call this function in order to use integers or
    strings in place of GMP numbers in GMP functions (such as with
    <span class="function"><a href="function.gmp-add.php" class="function">gmp_add()</a></span>). Function arguments are automatically
    converted to GMP numbers, if such conversion is possible and needed, using
    the same rules as <span class="function"><strong>gmp_init()</strong></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.gmp-init-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="gmp.construct.php" class="methodname" rel="rdfs-seeAlso">GMP::__construct()</a> - Create GMP number</span></li>
  </ul>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmp/functions/gmp-init.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gmp-init%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gmp-init&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gmp-init.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69774">  <div class="votes">
    <div id="Vu69774">
    <a href="/manual/vote-note.php?id=69774&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69774">
    <a href="/manual/vote-note.php?id=69774&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69774" title="75% like this...">
    4
    </div>
  </div>
  <a href="#69774" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#69774"> &para;</a><div class="date" title="2006-09-20 03:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69774">
<div class="phpcode"><code><span class="html">Here's a way to parse a decimal (eg 3.25) into an integer and exponent:<br /><br />&lt;?<br />if (preg_match("/^[0-9]+\.[0-9]+$/",$input)){ <br />     //Input is a base-10 decimal. Multiply as necessary to remove the decimal<br />     //point. Convert that to a gmp_resource, then decrement the exponent <br />     //to compensate.<br /><br />     $pieces=explode(".", $input);     //Split at the d.p.<br />     $input="$pieces[0]$pieces[1]";  //Remove the decimal point.<br /><br />     $input=ltrim($input,'0');    <br />     //Remove any leading zeros, or gmp_init will parse the number as octal.<br /><br />     if ($input==''){    //Deal with "0.0" which would otherwise be ''.<br />          $input=0;<br />      }<br />      $integer=gmp_init($input);   <br />      $ns_exponent=-strlen($pieces[1]);  <br />     //exponent = (-)  the number of characters after the decimal point.<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="103170">  <div class="votes">
    <div id="Vu103170">
    <a href="/manual/vote-note.php?id=103170&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103170">
    <a href="/manual/vote-note.php?id=103170&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103170" title="75% like this...">
    2
    </div>
  </div>
  <a href="#103170" class="name">
  <strong class="user"><em>karl dot debisschop at pearson dot com</em></strong></a><a class="genanchor" href="#103170"> &para;</a><div class="date" title="2011-03-29 12:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103170">
<div class="phpcode"><code><span class="html">Unless the base is 16, gpm_init will fail if the string begins with "0b". <br /><br />&gt; php -r '$v = gmp_init("b83", 17); print("$v\n");'<br /><br />Resource id #4<br /><br />&gt; php -r '$v = gmp_init("0b83", 17); print("$v\n");'<br /><br />[nothing prints]<br /><br />In may case, where I am explicitly specifying the base, the solution is to apply ltrim first:<br /><br />&gt; php -r '$v = gmp_init(ltrim("0b83", "0"), 17); print("$v\n");'<br /><br />Resource id #4</span></code></div>
  </div>
 </div>
  <div class="note" id="105359">  <div class="votes">
    <div id="Vu105359">
    <a href="/manual/vote-note.php?id=105359&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105359">
    <a href="/manual/vote-note.php?id=105359&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105359" title="60% like this...">
    2
    </div>
  </div>
  <a href="#105359" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#105359"> &para;</a><div class="date" title="2011-08-11 04:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105359">
<div class="phpcode"><code><span class="html">I discovered that the gmp functions use [0-9a-f] up to base 16, but [0-9A-Za-z] (i.e. upper case first) from bases 17 to 62. This differs from most of the base-62 implementations I've found that tend to use lower case first.</span></code></div>
  </div>
 </div>
  <div class="note" id="127023">  <div class="votes">
    <div id="Vu127023">
    <a href="/manual/vote-note.php?id=127023&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127023">
    <a href="/manual/vote-note.php?id=127023&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127023" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127023" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#127023"> &para;</a><div class="date" title="2022-05-03 08:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127023">
<div class="phpcode"><code><span class="html">Missing from the documentation: gmp_init() return false in case it failed to parse $num<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">gmp_init</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">));<br /></span><span class="comment">// returns "bool(false)" and not a GMP object as hinted by the documentation, it also triggers a Warning "PHP Warning:  gmp_init(): Unable to convert variable to GMP - string is not an integer in php shell code on line 1"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73328">  <div class="votes">
    <div id="Vu73328">
    <a href="/manual/vote-note.php?id=73328&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73328">
    <a href="/manual/vote-note.php?id=73328&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73328" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73328" class="name">
  <strong class="user"><em>charlie at oblivion dot cz</em></strong></a><a class="genanchor" href="#73328"> &para;</a><div class="date" title="2007-02-18 04:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73328">
<div class="phpcode"><code><span class="html">gmp_* functions don't accept strings with a leading '+':<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">gmp_strval</span><span class="keyword">(</span><span class="default">gmp_init</span><span class="keyword">(</span><span class="string">'+42'</span><span class="keyword">));      </span><span class="comment">#0<br /></span><span class="keyword">echo </span><span class="default">gmp_strval</span><span class="keyword">(</span><span class="default">gmp_add</span><span class="keyword">(</span><span class="string">'42'</span><span class="keyword">, </span><span class="string">'+42'</span><span class="keyword">)); </span><span class="comment">#42<br /></span><span class="keyword">echo </span><span class="default">bcadd</span><span class="keyword">(</span><span class="string">'+42'</span><span class="keyword">, </span><span class="string">'+42'</span><span class="keyword">);              </span><span class="comment">#84<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69772">  <div class="votes">
    <div id="Vu69772">
    <a href="/manual/vote-note.php?id=69772&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69772">
    <a href="/manual/vote-note.php?id=69772&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69772" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69772" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#69772"> &para;</a><div class="date" title="2006-09-20 03:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69772">
<div class="phpcode"><code><span class="html">Note: Leading zeros will make gmp_init parse this as octal.<br />Thus gmp_init(010) becomes 8.  <br /><br />$a=010;              //8<br />$b="010" + 0;     //10<br />$c=gmp_strval(gmp_init(010));    //8<br />$d=gmp_strval(gmp_init("010")); //8<br /><br />This behaviour is inconsistent: either $d should equal $b, or<br />$b should equal $a.</span></code></div>
  </div>
 </div>
  <div class="note" id="55948">  <div class="votes">
    <div id="Vu55948">
    <a href="/manual/vote-note.php?id=55948&amp;page=function.gmp-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55948">
    <a href="/manual/vote-note.php?id=55948&amp;page=function.gmp-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55948" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#55948" class="name">
  <strong class="user"><em>thomas dot hebinck at digionline dot de</em></strong></a><a class="genanchor" href="#55948"> &para;</a><div class="date" title="2005-08-18 10:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55948">
<div class="phpcode"><code><span class="html">If you call a gmp_* function directly with an interger as parameter, this integer MUST NOT be 0:<br /><br />for($i=-1;$i&lt;=1;$i++) {  echo gmp_strval(gmp_add(2,gmp_mul(1,$i))) . ' ';  }<br /><br />The result is 1 0 3 (wrong)<br /><br />In this case you have to use gmp_init():<br /><br />for($i=-1;$i&lt;=1;$i++) {  echo gmp_strval(gmp_add(2,gmp_mul(1,gmp_init($i)))) . ' ';  }<br /><br />The result is 1 2 3 (right)<br /><br />Happy number crunching! :-)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gmp-init&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gmp-init.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.gmp.php">GMP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gmp-abs.php" title="gmp_&#8203;abs">gmp_&#8203;abs</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-add.php" title="gmp_&#8203;add">gmp_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-and.php" title="gmp_&#8203;and">gmp_&#8203;and</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-binomial.php" title="gmp_&#8203;binomial">gmp_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-clrbit.php" title="gmp_&#8203;clrbit">gmp_&#8203;clrbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-cmp.php" title="gmp_&#8203;cmp">gmp_&#8203;cmp</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-com.php" title="gmp_&#8203;com">gmp_&#8203;com</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div.php" title="gmp_&#8203;div">gmp_&#8203;div</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-q.php" title="gmp_&#8203;div_&#8203;q">gmp_&#8203;div_&#8203;q</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-qr.php" title="gmp_&#8203;div_&#8203;qr">gmp_&#8203;div_&#8203;qr</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-div-r.php" title="gmp_&#8203;div_&#8203;r">gmp_&#8203;div_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-divexact.php" title="gmp_&#8203;divexact">gmp_&#8203;divexact</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-export.php" title="gmp_&#8203;export">gmp_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-fact.php" title="gmp_&#8203;fact">gmp_&#8203;fact</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-gcd.php" title="gmp_&#8203;gcd">gmp_&#8203;gcd</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-gcdext.php" title="gmp_&#8203;gcdext">gmp_&#8203;gcdext</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-hamdist.php" title="gmp_&#8203;hamdist">gmp_&#8203;hamdist</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-import.php" title="gmp_&#8203;import">gmp_&#8203;import</a>
                        </li>
                                                <li class="current">
                            <a href="function.gmp-init.php" title="gmp_&#8203;init">gmp_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-intval.php" title="gmp_&#8203;intval">gmp_&#8203;intval</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-invert.php" title="gmp_&#8203;invert">gmp_&#8203;invert</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-jacobi.php" title="gmp_&#8203;jacobi">gmp_&#8203;jacobi</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-kronecker.php" title="gmp_&#8203;kronecker">gmp_&#8203;kronecker</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-lcm.php" title="gmp_&#8203;lcm">gmp_&#8203;lcm</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-legendre.php" title="gmp_&#8203;legendre">gmp_&#8203;legendre</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-mod.php" title="gmp_&#8203;mod">gmp_&#8203;mod</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-mul.php" title="gmp_&#8203;mul">gmp_&#8203;mul</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-neg.php" title="gmp_&#8203;neg">gmp_&#8203;neg</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-nextprime.php" title="gmp_&#8203;nextprime">gmp_&#8203;nextprime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-or.php" title="gmp_&#8203;or">gmp_&#8203;or</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-perfect-power.php" title="gmp_&#8203;perfect_&#8203;power">gmp_&#8203;perfect_&#8203;power</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-perfect-square.php" title="gmp_&#8203;perfect_&#8203;square">gmp_&#8203;perfect_&#8203;square</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-popcount.php" title="gmp_&#8203;popcount">gmp_&#8203;popcount</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-pow.php" title="gmp_&#8203;pow">gmp_&#8203;pow</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-powm.php" title="gmp_&#8203;powm">gmp_&#8203;powm</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-prob-prime.php" title="gmp_&#8203;prob_&#8203;prime">gmp_&#8203;prob_&#8203;prime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-random-bits.php" title="gmp_&#8203;random_&#8203;bits">gmp_&#8203;random_&#8203;bits</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-random-range.php" title="gmp_&#8203;random_&#8203;range">gmp_&#8203;random_&#8203;range</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-random-seed.php" title="gmp_&#8203;random_&#8203;seed">gmp_&#8203;random_&#8203;seed</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-root.php" title="gmp_&#8203;root">gmp_&#8203;root</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-rootrem.php" title="gmp_&#8203;rootrem">gmp_&#8203;rootrem</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-scan0.php" title="gmp_&#8203;scan0">gmp_&#8203;scan0</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-scan1.php" title="gmp_&#8203;scan1">gmp_&#8203;scan1</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-setbit.php" title="gmp_&#8203;setbit">gmp_&#8203;setbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sign.php" title="gmp_&#8203;sign">gmp_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sqrt.php" title="gmp_&#8203;sqrt">gmp_&#8203;sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sqrtrem.php" title="gmp_&#8203;sqrtrem">gmp_&#8203;sqrtrem</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-strval.php" title="gmp_&#8203;strval">gmp_&#8203;strval</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-sub.php" title="gmp_&#8203;sub">gmp_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-testbit.php" title="gmp_&#8203;testbit">gmp_&#8203;testbit</a>
                        </li>
                                                <li class="">
                            <a href="function.gmp-xor.php" title="gmp_&#8203;xor">gmp_&#8203;xor</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.gmp-random.php" title="gmp_&#8203;random">gmp_&#8203;random</a>
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
