<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: vsprintf - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.vsprintf.php">
 <link rel="shorturl" href="https://www.php.net/vsprintf">
 <link rel="alternate" href="https://www.php.net/vsprintf" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.vprintf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.wordwrap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.vsprintf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.vsprintf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.vsprintf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.vsprintf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.vsprintf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.vsprintf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.vsprintf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.vsprintf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.vsprintf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.vsprintf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.vsprintf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return a formatted string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: vsprintf - Manual" />
<meta name="twitter:description" content="Return a formatted string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: vsprintf - Manual" />
<meta itemprop="description" content="Return a formatted string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return a formatted string" />

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
        <a href="function.wordwrap.php">
          wordwrap &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.vprintf.php">
          &laquo; vprintf        </a>
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
            <option value='en/function.vsprintf.php' selected="selected">English</option>
            <option value='de/function.vsprintf.php'>German</option>
            <option value='es/function.vsprintf.php'>Spanish</option>
            <option value='fr/function.vsprintf.php'>French</option>
            <option value='it/function.vsprintf.php'>Italian</option>
            <option value='ja/function.vsprintf.php'>Japanese</option>
            <option value='pt_BR/function.vsprintf.php'>Brazilian Portuguese</option>
            <option value='ru/function.vsprintf.php'>Russian</option>
            <option value='tr/function.vsprintf.php'>Turkish</option>
            <option value='uk/function.vsprintf.php'>Ukrainian</option>
            <option value='zh/function.vsprintf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.vsprintf" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">vsprintf</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">vsprintf</span> &mdash; <span class="dc-title">Return a formatted string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.vsprintf-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>vsprintf</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$values</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Operates as <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span> but accepts an array of
   arguments, rather than a variable number of arguments.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.vsprintf-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.vsprintf-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Return array values as a formatted string according to
   <code class="parameter">format</code>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.vsprintf-errors">
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


 <div class="refsect1 changelog" id="refsect1-function.vsprintf-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.vsprintf-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5200">
    <p><strong>Example #1 <span class="function"><strong>vsprintf()</strong></span>: zero-padded integers</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">vsprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%04d-%02d-%02d"</span><span style="color: #007700">, </span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1988-8-1'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">1988-08-01</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.vsprintf-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.printf.php" class="function" rel="rdfs-seeAlso">printf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.fprintf.php" class="function" rel="rdfs-seeAlso">fprintf()</a> - Write a formatted string to a stream</span></li>
    <li><span class="function"><a href="function.vprintf.php" class="function" rel="rdfs-seeAlso">vprintf()</a> - Output a formatted string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/vsprintf.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.vsprintf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.vsprintf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.vsprintf.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119959">  <div class="votes">
    <div id="Vu119959">
    <a href="/manual/vote-note.php?id=119959&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119959">
    <a href="/manual/vote-note.php?id=119959&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119959" title="79% like this...">
    48
    </div>
  </div>
  <a href="#119959" class="name">
  <strong class="user"><em>spectrumcat</em></strong></a><a class="genanchor" href="#119959"> &para;</a><div class="date" title="2016-09-28 10:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119959">
<div class="phpcode"><code><span class="html">Instead of inventing own functions in case you'd like to use array keys as placeholder names and replace corresponding array values in a string, just use the str_replace:<br /><br />$string = 'Hello %name!';<br />$data = array(<br />  '%name' =&gt; 'John'<br />);<br /><br />$greeting = str_replace(array_keys($data), array_values($data), $string);</span></code></div>
  </div>
 </div>
  <div class="note" id="126220">  <div class="votes">
    <div id="Vu126220">
    <a href="/manual/vote-note.php?id=126220&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126220">
    <a href="/manual/vote-note.php?id=126220&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126220" title="72% like this...">
    5
    </div>
  </div>
  <a href="#126220" class="name">
  <strong class="user"><em>crash</em></strong></a><a class="genanchor" href="#126220"> &para;</a><div class="date" title="2021-07-06 09:03"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126220">
<div class="phpcode"><code><span class="html">Note that this function now throws an ValueError* as of PHP 8.0 if there is an error:<br /><br />$ php -r 'var_dump(vsprintf("%d", []));'<br />&gt; Fatal error: Uncaught ValueError: The arguments array must contain 1 items, 0 given in Command line code:1<br /><br />*ValueError is new in PHP 8.0, so if you want to make your code compatible to PHP 7.x you should test that the arguments array has the correct length.</span></code></div>
  </div>
 </div>
  <div class="note" id="110666">  <div class="votes">
    <div id="Vu110666">
    <a href="/manual/vote-note.php?id=110666&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110666">
    <a href="/manual/vote-note.php?id=110666&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110666" title="65% like this...">
    14
    </div>
  </div>
  <a href="#110666" class="name">
  <strong class="user"><em>Josef Kufner</em></strong></a><a class="genanchor" href="#110666"> &para;</a><div class="date" title="2012-11-20 11:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110666">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Like vsprintf, but accepts $args keys instead of order index.
<br /> * Both numeric and strings matching /[a-zA-Z0-9_-]+/ are allowed.
<br /> *
<br /> * Example: vskprintf('y = %y$d, x = %x$1.1f', array('x' =&gt; 1, 'y' =&gt; 2))
<br /> * Result:  'y = 2, x = 1.0'
<br /> *
<br /> * $args also can be object, then it's properties are retrieved
<br /> * using get_object_vars().
<br /> *
<br /> * '%s' without argument name works fine too. Everything vsprintf() can do
<br /> * is supported.
<br /> *
<br /> * @author Josef Kufner &lt;jkufner(at)gmail.com&gt;
<br /> */
<br /></span><span class="keyword">function </span><span class="default">vksprintf</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">)
<br />{
<br />    if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">)) {
<br />        </span><span class="default">$args </span><span class="keyword">= </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$map </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">));
<br />    </span><span class="default">$new_str </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'/(^|[^%])%([a-zA-Z0-9_-]+)\$/'</span><span class="keyword">,
<br />            function(</span><span class="default">$m</span><span class="keyword">) use (</span><span class="default">$map</span><span class="keyword">) { return </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">'%'</span><span class="keyword">.(</span><span class="default">$map</span><span class="keyword">[</span><span class="default">$m</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]] + </span><span class="default">1</span><span class="keyword">).</span><span class="string">'$'</span><span class="keyword">; },
<br />            </span><span class="default">$str</span><span class="keyword">);
<br />    return </span><span class="default">vsprintf</span><span class="keyword">(</span><span class="default">$new_str</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122688">  <div class="votes">
    <div id="Vu122688">
    <a href="/manual/vote-note.php?id=122688&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122688">
    <a href="/manual/vote-note.php?id=122688&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122688" title="75% like this...">
    2
    </div>
  </div>
  <a href="#122688" class="name">
  <strong class="user"><em>steven at nevvix dot com</em></strong></a><a class="genanchor" href="#122688"> &para;</a><div class="date" title="2018-05-02 04:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122688">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Return a formatted string like vsprintf() with named placeholders.<br /> *<br /> * When a placeholder doesn't have a matching key in `$args`,<br /> *   the placeholder is returned as is to see missing args.<br /> * @param string $format<br /> * @param array $args<br /> * @param string $pattern<br /> * @return string<br /> */<br /></span><span class="keyword">function </span><span class="default">p</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, array </span><span class="default">$args</span><span class="keyword">, </span><span class="default">$pattern</span><span class="keyword">=</span><span class="string">"/\{(\w+)\}/"</span><span class="keyword">) {<br />    return </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, function (</span><span class="default">$matches</span><span class="keyword">) use (</span><span class="default">$args</span><span class="keyword">) {<br />        return @</span><span class="default">$args</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] ?: </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }, </span><span class="default">$format</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$args </span><span class="keyword">= [</span><span class="string">"database"</span><span class="keyword">=&gt;</span><span class="string">"people"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">=&gt;</span><span class="string">"staff"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">=&gt;</span><span class="string">"pass123"</span><span class="keyword">, </span><span class="string">"host"</span><span class="keyword">=&gt;</span><span class="string">"localhost"</span><span class="keyword">];<br /><br /></span><span class="comment">// With PHP-like placeholders: the variable is embedded in a string "{$database}" but without the dollar sign<br /></span><span class="default">$format </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">CREATE DATABASE IF NOT EXISTS {database};<br />GRANT ALL PRIVILEGES ON {database_name}.* TO '{user}'@'{host}';<br />SET PASSWORD = PASSWORD('{pass}');<br /></span><span class="keyword">SQL;<br />echo </span><span class="default">p</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br /></span><span class="comment">/*<br />Result:<br /><br />CREATE DATABASE IF NOT EXISTS people;<br />GRANT ALL PRIVILEGES ON {database_name}.* TO 'staff'@'localhost';<br />SET PASSWORD = PASSWORD('pass123');<br /><br />The `{database_name}` placeholder doesn't exist as a matching key in `$args` so it's returned as is.<br />*/<br /><br />// With Ruby-like placeholders<br /></span><span class="default">$format </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">CREATE DATABASE IF NOT EXISTS :database;<br />GRANT ALL PRIVILEGES ON :database_name.* TO ':user'@':host';<br />SET PASSWORD = PASSWORD(':pass');<br /></span><span class="keyword">SQL;<br />echo </span><span class="default">p</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">, </span><span class="string">"/:(\w+)/"</span><span class="keyword">);<br /></span><span class="comment">/*<br />Result:<br /><br />CREATE DATABASE IF NOT EXISTS people;<br />GRANT ALL PRIVILEGES ON :database_name.* TO 'staff'@'localhost';<br />SET PASSWORD = PASSWORD('pass123');<br /><br />The `:database_name` placeholder doesn't exist as a matching key in `$args` so it's returned as is.<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62016">  <div class="votes">
    <div id="Vu62016">
    <a href="/manual/vote-note.php?id=62016&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62016">
    <a href="/manual/vote-note.php?id=62016&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62016" title="60% like this...">
    5
    </div>
  </div>
  <a href="#62016" class="name">
  <strong class="user"><em>jon at ardentcreative dot co dot uk</em></strong></a><a class="genanchor" href="#62016"> &para;</a><div class="date" title="2006-02-17 03:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62016">
<div class="phpcode"><code><span class="html">This can be used for quick and dirty internationalization:<br /><br /><span class="default">&lt;?php<br />$GLOBALS</span><span class="keyword">[</span><span class="string">'strings'</span><span class="keyword">][</span><span class="string">'example'</span><span class="keyword">] = </span><span class="string">"There are %d people."</span><span class="keyword">;<br /><br /></span><span class="comment">// Loads a phrase from the translations list in lang/$lang/phrases.php<br /></span><span class="keyword">function </span><span class="default">t</span><span class="keyword">() {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$nArgs </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();<br />    <br />    </span><span class="default">$phrase </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);<br />    </span><span class="default">$nArgs</span><span class="keyword">--;<br />    <br />    include_once(</span><span class="string">"../lang/" </span><span class="keyword">. </span><span class="default">lang</span><span class="keyword">() . </span><span class="string">"/phrases.php"</span><span class="keyword">);<br />    if (isset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'strings'</span><span class="keyword">][</span><span class="default">$phrase</span><span class="keyword">])) {<br />        return </span><span class="default">vsprintf</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'strings'</span><span class="keyword">][</span><span class="default">$phrase</span><span class="keyword">], </span><span class="default">$args</span><span class="keyword">);<br />    } else {<br />        return </span><span class="string">'&lt;span style="color: #ff0000"&gt;Untranslated string: ' </span><span class="keyword">. </span><span class="default">$phrase </span><span class="keyword">. </span><span class="string">'&lt;/span&gt;'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83883">  <div class="votes">
    <div id="Vu83883">
    <a href="/manual/vote-note.php?id=83883&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83883">
    <a href="/manual/vote-note.php?id=83883&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83883" title="59% like this...">
    5
    </div>
  </div>
  <a href="#83883" class="name">
  <strong class="user"><em>www dot wesley at gmail dot com</em></strong></a><a class="genanchor" href="#83883"> &para;</a><div class="date" title="2008-06-16 01:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83883">
<div class="phpcode"><code><span class="html">vnsprintf is equal to vsprintf except for associative, signed or floating keys.<br /><br />vnsprintf supports for example "%assocKey$05d", "%-2$'+10s" and "%3.2$05u", vsprintf doesn't<br /><br />vnsprintf( '%2$d', $array) [2nd value] is equal to vsprintf( '%2$d', $array) [2nd value]<br />vnsprintf( '%+2$d', $array) [key = 2] is equal to vnsprintf( '%2.0$d', $array) [key = 2]<br />vnsprintf( '%+2$d', $array) [key = 2] is different of vsprintf( '%+2$d', $array) [unsupported]<br /><br />When you use signed or floating keys, vnsprintf searchs for the signed truncated key of the original array<br /><br />Note¹: vnsprintf does not support for example "%someKeyf" (floating number, key = someKey) or "%+03d" (signed decimal number, key = 3), you should use "%someKey$f" or "%+03$d" respectively.<br />Note²: "%+03d" (or "%1$+03d") will be interpreted as signed zero-padded decimal number<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="default">$format</span><span class="keyword">, array </span><span class="default">$data</span><span class="keyword">)<br />{<br />    </span><span class="default">preg_match_all</span><span class="keyword">( </span><span class="string">'/ (?&lt;!%) % ( (?: [[:alpha:]_-][[:alnum:]_-]* | ([-+])? [0-9]+ (?(2) (?:\.[0-9]+)? | \.[0-9]+ ) ) ) \$ [-+]? \'? .? -? [0-9]* (\.[0-9]+)? \w/x'</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER </span><span class="keyword">| </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">);<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    foreach ( </span><span class="default">$match </span><span class="keyword">as &amp;</span><span class="default">$value </span><span class="keyword">)<br />    {<br />        if ( ( </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">( </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$keys</span><span class="keyword">) ) !== </span><span class="default">FALSE </span><span class="keyword">|| ( </span><span class="default">is_numeric</span><span class="keyword">( </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]) &amp;&amp; ( </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">( (int)</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$keys</span><span class="keyword">) ) !== </span><span class="default">FALSE </span><span class="keyword">) ) {<br />            </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />            </span><span class="default">$format </span><span class="keyword">= </span><span class="default">substr_replace</span><span class="keyword">( </span><span class="default">$format</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">], </span><span class="default">$len</span><span class="keyword">);<br />            </span><span class="default">$offset </span><span class="keyword">-= </span><span class="default">$len </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$key</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="default">$format</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$examples </span><span class="keyword">= array(<br />    </span><span class="default">2.8</span><span class="keyword">=&gt;</span><span class="string">'positiveFloat'</span><span class="keyword">,    </span><span class="comment">// key = 2 , 1st value<br />    </span><span class="keyword">-</span><span class="default">3</span><span class="keyword">=&gt;</span><span class="string">'negativeInteger'</span><span class="keyword">,    </span><span class="comment">// key = -3 , 2nd value<br />    </span><span class="string">'my_name'</span><span class="keyword">=&gt;</span><span class="string">'someString'    </span><span class="comment">// key = my_name , 3rd value<br /></span><span class="keyword">);<br /><br />echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%my_name\$s = '%my_name\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);    </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%my_name\$s = '%my_name\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);    </span><span class="comment">// output : "someString"<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%2.5\$s = '%2.5\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%2.5\$s = '%2.5\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// output : "positiveFloat"<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%+2.5\$s = '%+2.5\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%+2.5\$s = '%+2.5\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// output : "positiveFloat"<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%-3.2\$s = '%-3.2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%-3.2\$s = '%-3.2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// output : "negativeInteger"<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%2\$s = '%2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);            </span><span class="comment">// output : "negativeInteger"<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%2\$s = '%2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);            </span><span class="comment">// output : [= vsprintf]<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%+2\$s = '%+2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%+2\$s = '%+2\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// output : "positiveFloat"<br /><br /></span><span class="keyword">echo </span><span class="default">vsprintf</span><span class="keyword">( </span><span class="string">"%%-3\$s = '%-3\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// [unsupported]<br /></span><span class="keyword">echo </span><span class="default">vnsprintf</span><span class="keyword">( </span><span class="string">"%%-3\$s = '%-3\$s'\n"</span><span class="keyword">, </span><span class="default">$examples</span><span class="keyword">);        </span><span class="comment">// output : "negativeInteger"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70039">  <div class="votes">
    <div id="Vu70039">
    <a href="/manual/vote-note.php?id=70039&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70039">
    <a href="/manual/vote-note.php?id=70039&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70039" title="57% like this...">
    4
    </div>
  </div>
  <a href="#70039" class="name">
  <strong class="user"><em>Roadster</em></strong></a><a class="genanchor" href="#70039"> &para;</a><div class="date" title="2006-09-30 07:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70039">
<div class="phpcode"><code><span class="html">Please note: The same functionality (sortof) can be attained between version 4.0.4 and 4.1.0 using call_user_func_array.<br /><br />Example:<br /><br />call_user_func_array("sprintf", $arg)<br /><br />First element of $arg is the format. This rescued me in a situation where version 4.1.0 wasn't available.</span></code></div>
  </div>
 </div>
  <div class="note" id="111122">  <div class="votes">
    <div id="Vu111122">
    <a href="/manual/vote-note.php?id=111122&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111122">
    <a href="/manual/vote-note.php?id=111122&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111122" title="53% like this...">
    2
    </div>
  </div>
  <a href="#111122" class="name">
  <strong class="user"><em>dee jay simple zero07 at geemail dawt co</em></strong></a><a class="genanchor" href="#111122"> &para;</a><div class="date" title="2013-01-17 05:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111122">
<div class="phpcode"><code><span class="html">Using a heredoc with vprintf:
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= &lt;&lt;&lt;THESTRING
<br /></span><span class="string">I like the state of %1\$s &lt;br /&gt;
<br />I picked: %2\$d as a number, &lt;br /&gt;
<br />I also picked %2\$d as a number again &lt;br /&gt;
<br />%3\$s&lt;br /&gt;
<br /></span><span class="keyword">THESTRING;
<br />
<br /></span><span class="default">$returnText </span><span class="keyword">= </span><span class="default">vprintf</span><span class="keyword">(  </span><span class="default">$string</span><span class="keyword">, array(</span><span class="string">'Oregon'</span><span class="keyword">,</span><span class="string">'7'</span><span class="keyword">,</span><span class="string">'I Love Oregon'</span><span class="keyword">)  );
<br />
<br />echo </span><span class="default">$returnText</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130114">  <div class="votes">
    <div id="Vu130114">
    <a href="/manual/vote-note.php?id=130114&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130114">
    <a href="/manual/vote-note.php?id=130114&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130114" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#130114" class="name">
  <strong class="user"><em>glueck at dozent dot net</em></strong></a><a class="genanchor" href="#130114"> &para;</a><div class="date" title="2025-03-04 10:20"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130114">
<div class="phpcode"><code><span class="html">MessageFormatter::formatMessage(string $locale, string $pattern, array $values)<br /><br />or <br /><br />msgfmt_format_message(string $locale, string $pattern, array $values)<br /><br />can be an alternativ option:<br /><br />$values = ['rank'=&gt;10, 'name'=&gt;'Frank']<br /><br />MessageFormatter::formatMessage('en', 'Hello {name}, your rank is {rank}', $values);<br /><br />Also access by index is possible "{1}", formating and a lot more.<br /><br /><a href="https://unicode-org.github.io/icu/userguide/format_parse/numbers/" rel="nofollow" target="_blank">https://unicode-org.github.io/icu/userguide/format_parse/numbers/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="42598">  <div class="votes">
    <div id="Vu42598">
    <a href="/manual/vote-note.php?id=42598&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42598">
    <a href="/manual/vote-note.php?id=42598&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42598" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42598" class="name">
  <strong class="user"><em>jed at NOSPAM dot jed dot bz</em></strong></a><a class="genanchor" href="#42598"> &para;</a><div class="date" title="2004-05-22 06:48"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42598">
<div class="phpcode"><code><span class="html">vsprintf() accepts arrays with any keys, so the array_shift() technique is unnecessary when writing a printf-type function. Any parameters you require are easily unset from the array you retrieve with func_get_args():<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mysprintf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">) {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    unset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">/* get rid of "$format" */<br />    </span><span class="keyword">return </span><span class="default">vsprintf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* I use this technique in production code as follows: */<br /></span><span class="keyword">function </span><span class="default">logf</span><span class="keyword">(</span><span class="default">$target</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    unset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    </span><span class="default">fprintf</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'config'</span><span class="keyword">][</span><span class="string">'logtargets'</span><span class="keyword">][</span><span class="default">$target</span><span class="keyword">],<br />        </span><span class="string">"[%s] %s\n"</span><span class="keyword">, </span><span class="default">date</span><span class="keyword">(</span><span class="string">'H:i'</span><span class="keyword">), </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">vsprintf</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">), </span><span class="default">75</span><span class="keyword">, </span><span class="string">'\n\r '</span><span class="keyword">));<br />}<br /><br /></span><span class="comment">/* e.g.:<br />    logf(DEBUG, "Oops! %s", mysql_error());<br /> */<br /><br /></span><span class="default">?&gt;<br /></span><br />array_shift() and other costly array operations aren't required, as far as I know. I could be wrong.</span></code></div>
  </div>
 </div>
  <div class="note" id="121893">  <div class="votes">
    <div id="Vu121893">
    <a href="/manual/vote-note.php?id=121893&amp;page=function.vsprintf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121893">
    <a href="/manual/vote-note.php?id=121893&amp;page=function.vsprintf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121893" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#121893" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#121893"> &para;</a><div class="date" title="2017-11-21 06:58"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121893">
<div class="phpcode"><code><span class="html">It's necessary to clearly how to apply argument swapping when using an array of arguments. One might be tempted to use %0$ to reference $args[0].<br /><br />In reality, the position specifier is always the array index+1:<br /><br />$args[0]  is referenced by %1$...<br />$args[1]  is referenced by %2$... <br />etc.<br /><br />Similarly, the first subpattern of a RegEx match would be found in $matches[1], the second in $match[2], etc. However if the $matches array is used as arguments to vsprint(), then the position specifier is subpattern+1:<br /><br />preg_match( $pattern, $subject, $matches );<br />vsprintf( 'Full Match = %1$s, first Subpattern = %2$s, second Subpattern = %3$s', $matches );</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.vsprintf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.vsprintf.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="current">
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
