<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: vprintf - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.vprintf.php">
 <link rel="shorturl" href="https://www.php.net/vprintf">
 <link rel="alternate" href="https://www.php.net/vprintf" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.vfprintf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.vsprintf.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.vprintf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.vprintf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.vprintf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.vprintf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.vprintf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.vprintf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.vprintf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.vprintf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.vprintf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.vprintf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.vprintf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output a formatted string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: vprintf - Manual" />
<meta name="twitter:description" content="Output a formatted string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: vprintf - Manual" />
<meta itemprop="description" content="Output a formatted string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output a formatted string" />

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
        <a href="function.vsprintf.php">
          vsprintf &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.vfprintf.php">
          &laquo; vfprintf        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.vprintf.php' selected="selected">English</option>
            <option value='de/function.vprintf.php'>German</option>
            <option value='es/function.vprintf.php'>Spanish</option>
            <option value='fr/function.vprintf.php'>French</option>
            <option value='it/function.vprintf.php'>Italian</option>
            <option value='ja/function.vprintf.php'>Japanese</option>
            <option value='pt_BR/function.vprintf.php'>Brazilian Portuguese</option>
            <option value='ru/function.vprintf.php'>Russian</option>
            <option value='tr/function.vprintf.php'>Turkish</option>
            <option value='uk/function.vprintf.php'>Ukrainian</option>
            <option value='zh/function.vprintf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.vprintf" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">vprintf</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">vprintf</span> &mdash; <span class="dc-title">Output a formatted string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.vprintf-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>vprintf</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$values</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Display array values as a formatted string according to
   <code class="parameter">format</code> (which is described in the documentation
   for <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span>).
  </p>
  <p class="para">
   Operates as <span class="function"><a href="function.printf.php" class="function">printf()</a></span> but accepts an array of
   arguments, rather than a variable number of arguments.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.vprintf-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    

 <dt><code class="parameter">format</code></dt>
 <dd>
  <p class="para">
   The format string is composed of zero or more directives:
   ordinary characters (excluding <code class="literal">%</code>) that are
   copied directly to the result and <em>conversion
   specifications</em>, each of which results in fetching its
   own parameter.
  </p>

  <p class="para">
   A conversion specification follows this prototype:
   <code class="literal">%[argnum$][flags][width][.precision]specifier</code>.
  </p>

  <p class="formalpara">
   <h5 class="title">Argnum</h5>
   <p class="para">
    An integer followed by a dollar sign <code class="literal">$</code>,
    to specify which number argument to treat in the conversion.
   </p>
  </p>

  <p class="formalpara">
   <h5 class="title">Flags</h5>
   <p class="para">
    <table class="doctable informaltable">
     
      <thead>
       <tr>
        <th>Flag</th>
        <th>Description</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><code class="literal">-</code></td>
        <td>
         Left-justify within the given field width;
         Right justification is the default
        </td>
       </tr>

       <tr>
        <td><code class="literal">+</code></td>
        <td>
         Prefix positive numbers with a plus sign
         <code class="literal">+</code>; Default only negative
         are prefixed with a negative sign.
        </td>
       </tr>

       <tr>
        <td><code class="literal"> </code>(space)</td>
        <td>
         Pads the result with spaces.
         This is the default.
        </td>
       </tr>

       <tr>
        <td><code class="literal">0</code></td>
        <td>
         Only left-pads numbers with zeros.
         With <code class="literal">s</code> specifiers this can
         also right-pad with zeros.
        </td>
       </tr>

       <tr>
        <td><code class="literal">&#039;</code>(char)</td>
        <td>
         Pads the result with the character (char).
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </p>

  <p class="formalpara">
   <h5 class="title">Width</h5>
   <p class="para">
    Either an integer that says how many characters (minimum)
    this conversion should result in, or <code class="literal">*</code>.
    If <code class="literal">*</code> is used, then the width is supplied
    as an additional integer value preceding the one formatted
    by the specifier.
   </p>
  </p>

  <p class="formalpara">
   <h5 class="title">Precision</h5>
   <p class="para">
    A period <code class="literal">.</code> optionally followed by
    either an integer or <code class="literal">*</code>,
    whose meaning depends on the specifier:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       For <code class="literal">e</code>, <code class="literal">E</code>,
       <code class="literal">f</code> and <code class="literal">F</code>
       specifiers: this is the number of digits to be printed
       after the decimal point (by default, this is 6).
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       For <code class="literal">g</code>, <code class="literal">G</code>,
       <code class="literal">h</code> and <code class="literal">H</code>
       specifiers: this is the maximum number of significant
       digits to be printed.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       For <code class="literal">s</code> specifier: it acts as a cutoff point,
       setting a maximum character limit to the string.
      </span>
     </li>
    </ul>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      If the period is specified without an explicit value for precision,
      0 is assumed. If <code class="literal">*</code> is used, the precision is
      supplied as an additional integer value preceding the one formatted
      by the specifier.
     </span>
    </p></blockquote>
   </p>
  </p>

  <p class="para">
   <table class="doctable table">
    <caption><strong>Specifiers</strong></caption>
    
     <thead>
      <tr>
       <th>Specifier</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">%</code></td>
       <td>
        A literal percent character. No argument is required.
       </td>
      </tr>

      <tr>
       <td><code class="literal">b</code></td>
       <td>
        The argument is treated as an integer and presented
        as a binary number.
       </td>
      </tr>

      <tr>
       <td><code class="literal">c</code></td>
       <td>
        The argument is treated as an integer and presented
        as the character with that ASCII.
       </td>
      </tr>

      <tr>
       <td><code class="literal">d</code></td>
       <td>
        The argument is treated as an integer and presented
        as a (signed) decimal number.
       </td>
      </tr>

      <tr>
       <td><code class="literal">e</code></td>
       <td>
        The argument is treated as scientific notation (e.g. 1.2e+2).
       </td>
      </tr>

      <tr>
       <td><code class="literal">E</code></td>
       <td>
        Like the <code class="literal">e</code> specifier but uses
        uppercase letter (e.g. 1.2E+2).
       </td>
      </tr>

      <tr>
       <td><code class="literal">f</code></td>
       <td>
        The argument is treated as a float and presented
        as a floating-point number (locale aware).
       </td>
      </tr>

      <tr>
       <td><code class="literal">F</code></td>
       <td>
        The argument is treated as a float and presented
        as a floating-point number (non-locale aware).
       </td>
      </tr>

      <tr>
       <td><code class="literal">g</code></td>
       <td>
        <p class="para">
         General format.
        </p>
        <p class="para">
         Let P equal the precision if nonzero, 6 if the precision is omitted,
         or 1 if the precision is zero.
         Then, if a conversion with style E would have an exponent of X:
        </p>
        <p class="para">
         If P &gt; X ≥ −4, the conversion is with style f and precision P − (X + 1).
         Otherwise, the conversion is with style e and precision P − 1.
        </p>
       </td>
      </tr>

      <tr>
       <td><code class="literal">G</code></td>
       <td>
        Like the <code class="literal">g</code> specifier but uses
        <code class="literal">E</code> and <code class="literal">f</code>.
       </td>
      </tr>

      <tr>
       <td><code class="literal">h</code></td>
       <td>
        Like the <code class="literal">g</code> specifier but uses <code class="literal">F</code>.
        Available as of PHP 8.0.0.
       </td>
      </tr>

      <tr>
       <td><code class="literal">H</code></td>
       <td>
        Like the <code class="literal">g</code> specifier but uses
        <code class="literal">E</code> and <code class="literal">F</code>. Available as of PHP 8.0.0.
       </td>
      </tr>

      <tr>
       <td><code class="literal">o</code></td>
       <td>
        The argument is treated as an integer and presented
        as an octal number.
       </td>
      </tr>

      <tr>
       <td><code class="literal">s</code></td>
       <td>
        The argument is treated and presented as a string.
       </td>
      </tr>

      <tr>
       <td><code class="literal">u</code></td>
       <td>
        The argument is treated as an integer and presented
        as an unsigned decimal number.
       </td>
      </tr>

      <tr>
       <td><code class="literal">x</code></td>
       <td>
        The argument is treated as an integer and presented
        as a hexadecimal number (with lowercase letters).
       </td>
      </tr>

      <tr>
       <td><code class="literal">X</code></td>
       <td>
        The argument is treated as an integer and presented
        as a hexadecimal number (with uppercase letters).
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The <code class="literal">c</code> type specifier ignores padding and width.
   </p>
  </div>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results.
   </p>
  </div>

  <p class="para">
   Variables will be co-erced to a suitable type for the specifier:
   <table class="doctable table">
    <caption><strong>Type Handling</strong></caption>
    
     <thead>
      <tr>
       <th>Type</th>
       <th>Specifiers</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
       <td><code class="literal">s</code></td>
      </tr>

      <tr>
       <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
       <td>
        <code class="literal">d</code>,
        <code class="literal">u</code>,
        <code class="literal">c</code>,
        <code class="literal">o</code>,
        <code class="literal">x</code>,
        <code class="literal">X</code>,
        <code class="literal">b</code>
       </td>
      </tr>

      <tr>
       <td><span class="type"><a href="language.types.float.php" class="type float">float</a></span></td>
       <td>
        <code class="literal">e</code>,
        <code class="literal">E</code>,
        <code class="literal">f</code>,
        <code class="literal">F</code>,
        <code class="literal">g</code>,
        <code class="literal">G</code>,
        <code class="literal">h</code>,
        <code class="literal">H</code>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </dd>


    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.vprintf-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the length of the outputted string.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.vprintf-errors">
  <h3 class="title">Errors/Exceptions</h3>
  
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the number of arguments is zero.
   Prior to PHP 8.0.0, a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead.
  </p>
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if <code class="literal">[width]</code> is less than zero or bigger than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
   Prior to PHP 8.0.0, a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead.
  </p>
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if <code class="literal">[precision]</code> is less than zero or bigger than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
   Prior to PHP 8.0.0, a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead.
  </p>
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown when less arguments are given than required.
   Prior to PHP 8.0.0, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned and a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> emitted instead.
  </p>

 </div>


 <div class="refsect1 changelog" id="refsect1-function.vprintf-changelog">
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
       This function no longer returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if the number of arguments is zero;
       previously this function emitted a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> instead.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="literal">[width]</code> is less than zero or bigger than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>;
       previously this function emitted a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> instead.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="literal">[precision]</code> is less than zero or bigger than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>;
       previously this function emitted a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> instead.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> when less arguments are given than required;
       previously this function emitted a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> instead.
      </td>
     </tr>

    </tbody>
   
  </table>


 </div>

 
 <div class="refsect1 examples" id="refsect1-function.vprintf-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5199">
    <p><strong>Example #1 <span class="function"><strong>vprintf()</strong></span>: zero-padded integers</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />vprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%04d-%02d-%02d"</span><span style="color: #007700">, </span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1988-8-1'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">1988-08-01</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.vprintf-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.printf.php" class="function" rel="rdfs-seeAlso">printf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.fprintf.php" class="function" rel="rdfs-seeAlso">fprintf()</a> - Write a formatted string to a stream</span></li>
    <li><span class="function"><a href="function.vsprintf.php" class="function" rel="rdfs-seeAlso">vsprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.vfprintf.php" class="function" rel="rdfs-seeAlso">vfprintf()</a> - Write a formatted string to a stream</span></li>
    <li><span class="function"><a href="function.sscanf.php" class="function" rel="rdfs-seeAlso">sscanf()</a> - Parses input from a string according to a format</span></li>
    <li><span class="function"><a href="function.fscanf.php" class="function" rel="rdfs-seeAlso">fscanf()</a> - Parses input from a file according to a format</span></li>
    <li><span class="function"><a href="function.number-format.php" class="function" rel="rdfs-seeAlso">number_format()</a> - Format a number with grouped thousands</span></li>
    <li><span class="function"><a href="function.date.php" class="function" rel="rdfs-seeAlso">date()</a> - Format a Unix timestamp</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/vprintf.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.vprintf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.vprintf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.vprintf.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116359">  <div class="votes">
    <div id="Vu116359">
    <a href="/manual/vote-note.php?id=116359&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116359">
    <a href="/manual/vote-note.php?id=116359&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116359" title="72% like this...">
    10
    </div>
  </div>
  <a href="#116359" class="name">
  <strong class="user"><em>steve at stevelockwood dot net</em></strong></a><a class="genanchor" href="#116359"> &para;</a><div class="date" title="2014-12-18 08:42"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116359">
<div class="phpcode"><code><span class="html">If, instead of an array, you pass an object PHP will automatically cast the object as an array so you can use it directly in vprintf.<br /><span class="default">&lt;?php<br /> $object </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /> </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">Property1 </span><span class="keyword">= </span><span class="string">'Value 1'</span><span class="keyword">;<br /> </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">Property2 </span><span class="keyword">= </span><span class="string">'Value 2'</span><span class="keyword">;<br /></span><span class="default">vprintf</span><span class="keyword">(</span><span class="string">'%-20s %-20s'</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">);<br /><br /></span><span class="comment">/* will output<br /> Value 1              Value 2             <br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124043">  <div class="votes">
    <div id="Vu124043">
    <a href="/manual/vote-note.php?id=124043&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124043">
    <a href="/manual/vote-note.php?id=124043&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124043" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124043" class="name">
  <strong class="user"><em>phpcoder at gmail dot com</em></strong></a><a class="genanchor" href="#124043"> &para;</a><div class="date" title="2019-07-17 12:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124043">
<div class="phpcode"><code><span class="html">Using the ... operator, vprintf($format, $array) is basically just printf($format, ...$array).</span></code></div>
  </div>
 </div>
  <div class="note" id="83863">  <div class="votes">
    <div id="Vu83863">
    <a href="/manual/vote-note.php?id=83863&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83863">
    <a href="/manual/vote-note.php?id=83863&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83863" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83863" class="name">
  <strong class="user"><em>taken from &amp;#34;Php Phrasebook&amp;#34;</em></strong></a><a class="genanchor" href="#83863"> &para;</a><div class="date" title="2008-06-15 10:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83863">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">'The site runs on PHP '</span><span class="keyword">.</span><span class="default">phpversion</span><span class="keyword">();<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/php ((\d)\.\d\.\d+)/i'</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">vprintf</span><span class="keyword">(</span><span class="string">'Match: %s&lt;br /&gt; Version %s; Major:%d.'</span><span class="keyword">,</span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />output:<br />Array ( [0] =&gt; PHP 5.2.5 [1] =&gt; 5.2.5 [2] =&gt; 5 ) <br />Match: PHP 5.2.5 Version 5.2.5; Major:5.<br /><br />For preg_match:<br /><br />If matches  is provided, then it is filled with the results of search. $matches[0] will contain the text that matched the full pattern, $matches[1]  will have the text that matched the first captured parenthesized subpattern, and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="76763">  <div class="votes">
    <div id="Vu76763">
    <a href="/manual/vote-note.php?id=76763&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76763">
    <a href="/manual/vote-note.php?id=76763&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76763" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76763" class="name">
  <strong class="user"><em>tehjosh at gamingg dot net</em></strong></a><a class="genanchor" href="#76763"> &para;</a><div class="date" title="2007-07-29 07:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76763">
<div class="phpcode"><code><span class="html">To toolofthesystem at gmail dot com:<br /><br />You don't need to use output buffering with vprintf() because you can use vsprintf(), which has the same functionality as vprintf(), except that it returns the resulting string instead of outputting it.</span></code></div>
  </div>
 </div>
  <div class="note" id="71456">  <div class="votes">
    <div id="Vu71456">
    <a href="/manual/vote-note.php?id=71456&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71456">
    <a href="/manual/vote-note.php?id=71456&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71456" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71456" class="name">
  <strong class="user"><em>caleb at tekhawk dot com</em></strong></a><a class="genanchor" href="#71456"> &para;</a><div class="date" title="2006-11-29 02:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71456">
<div class="phpcode"><code><span class="html">i know that you can use %1$s or %3$s to select the first or third string but how can you or can you use array names to select it<br /><br />something like %'user'$s $'email'$s<br /><br />i tend to add things to my databases over time and this could save loads of recoding</span></code></div>
  </div>
 </div>
  <div class="note" id="74149">  <div class="votes">
    <div id="Vu74149">
    <a href="/manual/vote-note.php?id=74149&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74149">
    <a href="/manual/vote-note.php?id=74149&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74149" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#74149" class="name">
  <strong class="user"><em>toolofthesystem at gmail dot com</em></strong></a><a class="genanchor" href="#74149"> &para;</a><div class="date" title="2007-03-27 08:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74149">
<div class="phpcode"><code><span class="html">This function comes useful sometimes when trying to list information returned from MySQL:<br /><br />function print_sql($query,$printf){<br />    $sql_sql = mysql_query($query);<br />    while($sql = mysql_fetch_row($sql_sql)){<br />        vprintf($printf,$sql);<br />    }<br />}<br /><br />Unfortunately, this seems to sneak its way past output buffering when I tried creating an argument to allow it to be contained in a returned string... either that or I didn't do it right.</span></code></div>
  </div>
 </div>
  <div class="note" id="110404">  <div class="votes">
    <div id="Vu110404">
    <a href="/manual/vote-note.php?id=110404&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110404">
    <a href="/manual/vote-note.php?id=110404&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110404" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#110404" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#110404"> &para;</a><div class="date" title="2012-10-18 05:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110404">
<div class="phpcode"><code><span class="html">Another way to display arrays is use an array_walk(). This can be useful inline echo/print where a foreach wouldn't work, e.g.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"These errors: "</span><span class="keyword">, (unset)</span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$msgs</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">) { echo </span><span class="string">"&lt;p&gt;</span><span class="default">$a</span><span class="string">&lt;/p&gt;"</span><span class="keyword">; } ), </span><span class="string">"must be corrected."</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79469">  <div class="votes">
    <div id="Vu79469">
    <a href="/manual/vote-note.php?id=79469&amp;page=function.vprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79469">
    <a href="/manual/vote-note.php?id=79469&amp;page=function.vprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79469" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#79469" class="name">
  <strong class="user"><em>badcop666 at hotmail dot com</em></strong></a><a class="genanchor" href="#79469"> &para;</a><div class="date" title="2007-11-28 05:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79469">
<div class="phpcode"><code><span class="html">For blocks of text, sprintf() is slow according to my tests. <br /><br />Also, having the mapping between place-holders and the list of actual variables or datastructures often makes this code difficult to read. But the printf() family are widely supported and have a huge range of nice features. Performance is a cold mistress though!<br /><br />From an ease-of-reading and maintenance, debugging point of view, I much prefer HEREDOC and "...{$variable}..." methods.<br /><br />For a block of HTML markup with place holders, the fastest by far was:-<br /><br />?&gt;<br />&lt;div&gt; markup etc<span class="default">&lt;?= $variable ?&gt;</span>more markup<br />&lt;?<br /><br />My tests comprised 20 runs of a loop of 1 million iterations with output buffering, ditching the buffer on each loop.<br /><br />The timings ranged from average 2.1msec/million repetitions for the <span class="default">&lt;?= $var ?&gt;</span> method up to 7.6msec/million using printf().<br /><br />I'll try some benchmarking tools too, since I just wrote this myself and it could be introducing bias, but they've run on dev servers with low load.<br /><br />Hopefully interesting.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.vprintf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.vprintf.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="current">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
