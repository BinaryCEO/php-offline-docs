<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Syntax - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.constants.syntax.php">
 <link rel="shorturl" href="https://www.php.net/constants.syntax">
 <link rel="alternate" href="https://www.php.net/constants.syntax" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.constants.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/language.constants.predefined.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.constants.syntax.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.constants.syntax.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.constants.syntax.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.constants.syntax.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.constants.syntax.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.constants.syntax.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.constants.syntax.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.constants.syntax.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.constants.syntax.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.constants.syntax.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.constants.syntax.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Syntax" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Syntax - Manual" />
<meta name="twitter:description" content="Syntax" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Syntax - Manual" />
<meta itemprop="description" content="Syntax" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Syntax" />

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
        <a href="language.constants.predefined.php">
          Predefined constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.constants.php">
          &laquo; Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.constants.php'>Constants</a></li>      </ul>
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
            <option value='en/language.constants.syntax.php' selected="selected">English</option>
            <option value='de/language.constants.syntax.php'>German</option>
            <option value='es/language.constants.syntax.php'>Spanish</option>
            <option value='fr/language.constants.syntax.php'>French</option>
            <option value='it/language.constants.syntax.php'>Italian</option>
            <option value='ja/language.constants.syntax.php'>Japanese</option>
            <option value='pt_BR/language.constants.syntax.php'>Brazilian Portuguese</option>
            <option value='ru/language.constants.syntax.php'>Russian</option>
            <option value='tr/language.constants.syntax.php'>Turkish</option>
            <option value='uk/language.constants.syntax.php'>Ukrainian</option>
            <option value='zh/language.constants.syntax.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.constants.syntax" class="sect1">
   <h2 class="title">Syntax</h2>
   <p class="simpara">
    Constants can be defined using the <code class="literal">const</code> keyword,
    or by using the <span class="function"><a href="function.define.php" class="function">define()</a></span>-function.
    While <span class="function"><a href="function.define.php" class="function">define()</a></span> allows a constant to be
    defined to an arbitrary expression, the <code class="literal">const</code> keyword has
    restrictions as outlined in the next paragraph.
    Once a constant is defined, it can never be
    changed or undefined.
   </p>
   <p class="simpara">
    When using the <code class="literal">const</code> keyword,
    only scalar (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> and <span class="type"><a href="language.types.string.php" class="type string">string</a></span>) expressions and constant
    <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s containing only scalar expressions are accepted.
    It is possible to define constants as a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>,
    but it should be avoided, as it can cause unexpected results.
   </p>
   <p class="simpara">
    The value of a constant is accessed simply by specifying its name.
    Unlike variables, a constant is <em>not</em> prepended
    with a <code class="literal">$</code>.
    It is also possible to use the <span class="function"><a href="function.constant.php" class="function">constant()</a></span> function to
    read a constant&#039;s value if the constant&#039;s name is obtained dynamically. 
    Use <span class="function"><a href="function.get-defined-constants.php" class="function">get_defined_constants()</a></span> to get a list of 
    all defined constants.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Constants and (global) variables are in a different namespace. 
     This implies that for example <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> and 
     <var class="varname">$TRUE</var> are generally different.
    </span>
   </p></blockquote>

   <p class="simpara">
    If an undefined constant is used an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown.
    Prior to PHP 8.0.0, undefined constants would be interpreted as a bare
    word <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, i.e. (CONSTANT vs &quot;CONSTANT&quot;). 
    This fallback is deprecated as of PHP 7.2.0, and an error of level
    <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is issued when it happens.
    Prior to PHP 7.2.0, an error of level
    <a href="ref.errorfunc.php" class="link">E_NOTICE</a> has been issued instead.
    See also the manual entry on why 
    <a href="language.types.array.php#language.types.array.foo-bar" class="link">$foo[bar]</a> is
    wrong (unless <code class="literal">bar</code> is a constant).
    This does not apply to <a href="language.namespaces.rules.php" class="link">(fully) qualified constants</a>,
    which will always raise a <span class="classname"><a href="class.error.php" class="classname">Error</a></span> if undefined.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     To check if a constant is set, use the <span class="function"><a href="function.defined.php" class="function">defined()</a></span> function.
    </span>
   </p></blockquote>

   <p class="para">
    These are the differences between constants and variables:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Constants do not have a dollar sign (<code class="literal">$</code>)
       before them;
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Constants may be defined and accessed anywhere without regard
       to variable scoping rules;
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Constants may not be redefined or undefined once they have been
       set; and
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Constants may only evaluate to scalar values or arrays.
      </span>
     </li>
    </ul>
   </p>

   <p class="para">
    <div class="example" id="example-148">
     <p><strong>Example #1 Defining Constants</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">"CONSTANT"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello world."</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">; </span><span style="color: #FF8000">// outputs "Hello world."<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">Constant</span><span style="color: #007700">; </span><span style="color: #FF8000">// Emits an Error: Undefined constant "Constant"<br />               // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <p class="para">
    <div class="example" id="example-149">
     <p><strong>Example #2 Defining Constants using the <code class="literal">const</code> keyword</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Simple scalar value<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">CONSTANT </span><span style="color: #007700">= </span><span style="color: #DD0000">'Hello World'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Scalar expression<br /></span><span style="color: #007700">const </span><span style="color: #0000BB">ANOTHER_CONST </span><span style="color: #007700">= </span><span style="color: #0000BB">CONSTANT</span><span style="color: #007700">.</span><span style="color: #DD0000">'; Goodbye World'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">ANOTHER_CONST</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">ANIMALS </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'dog'</span><span style="color: #007700">, </span><span style="color: #DD0000">'cat'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bird'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">ANIMALS</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]; </span><span style="color: #FF8000">// outputs "cat"<br /><br />// Constant arrays<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'ANIMALS'</span><span style="color: #007700">, array(<br />    </span><span style="color: #DD0000">'dog'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'cat'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'bird'<br /></span><span style="color: #007700">));<br />echo </span><span style="color: #0000BB">ANIMALS</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]; </span><span style="color: #FF8000">// outputs "cat"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     As opposed to defining constants using <span class="function"><a href="function.define.php" class="function">define()</a></span>,
     constants defined using the <code class="literal">const</code> keyword must be
     declared at the top-level scope because they are defined at compile-time.
     This means that they cannot be declared inside functions, loops,
     <code class="literal">if</code> statements or
     <code class="literal">try</code>/<code class="literal">catch</code> blocks.
    </p>
   </p></blockquote>

   <div class="sect2">
    <h3 class="title">See Also</h3>
    <p class="para">
     <ul class="simplelist">
      <li><a href="language.oop5.constants.php" class="link">Class Constants</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.constants.syntax%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.constants.syntax&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.syntax.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126727">  <div class="votes">
    <div id="Vu126727">
    <a href="/manual/vote-note.php?id=126727&amp;page=language.constants.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126727">
    <a href="/manual/vote-note.php?id=126727&amp;page=language.constants.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126727" title="79% like this...">
    49
    </div>
  </div>
  <a href="#126727" class="name">
  <strong class="user"><em>souzanicolas87 at gmail dot com</em></strong></a><a class="genanchor" href="#126727"> &para;</a><div class="date" title="2021-12-29 12:17"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126727">
<div class="phpcode"><code><span class="html">the documentation doesn't go too far in explaining the crucial difference between the two ways of declaring constants in PHP.<br /><br />Const is handled at compile time, define() at run time. For this reason, a constant cannot be conditionally defined using Const, for example.<br /><br />Another difference we can notice occurs in the constant declarations in classes. Const infiltrates the class scope, while define() leaks into the global scope.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">Class </span><span class="default">Myclass </span><span class="keyword">(){<br />    const </span><span class="default">NAME </span><span class="keyword">= </span><span class="string">"Nicolas"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The NAME constant is within the scope of the MyClass class.</span></code></div>
  </div>
 </div>
  <div class="note" id="130014">  <div class="votes">
    <div id="Vu130014">
    <a href="/manual/vote-note.php?id=130014&amp;page=language.constants.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130014">
    <a href="/manual/vote-note.php?id=130014&amp;page=language.constants.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130014" title="66% like this...">
    1
    </div>
  </div>
  <a href="#130014" class="name">
  <strong class="user"><em>povares at skippergroupe dot com</em></strong></a><a class="genanchor" href="#130014"> &para;</a><div class="date" title="2025-02-08 11:45"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130014">
<div class="phpcode"><code><span class="html">"const is defined at compile time" may not be true, depending on what you call "defining".<br /><br />Although you can't define a const inside an if, like <br /><br />    if ($c === 'a') {<br />        const c = a;<br />    }<br />    else {<br />        const c = b;<br />    }<br />    # Results in a parse error <br /><br />you can assign it a value depending on a conditionnal 'define' constant<br /><br />    $a = 1;<br /><br />    if ($a === 1) {<br />        define('a', 'one');<br />    }<br />    else {<br />        define('a', 'two');<br />    }<br /><br />    const c = a;<br />    # Valid, c equals "one"<br /><br /><a href="https://onlinephp.io/c/b8227" rel="nofollow" target="_blank">https://onlinephp.io/c/b8227</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121601">  <div class="votes">
    <div id="Vu121601">
    <a href="/manual/vote-note.php?id=121601&amp;page=language.constants.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121601">
    <a href="/manual/vote-note.php?id=121601&amp;page=language.constants.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121601" title="51% like this...">
    6
    </div>
  </div>
  <a href="#121601" class="name">
  <strong class="user"><em>login at (two)view dot de</em></strong></a><a class="genanchor" href="#121601"> &para;</a><div class="date" title="2017-09-04 11:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121601">
<div class="phpcode"><code><span class="html">Just a quick note:<br />From PHP7 on you can even define a multidimensional Array as Constant:<br /><br />define('QUARTLIST',array('1. Quarter'=&gt;array('jan','feb','mar'),'2.Quarter'=&gt;array('may','jun','jul'));<br /><br />does work as expected.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.constants.syntax&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.syntax.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.constants.php">Constants</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.constants.syntax.php" title="Syntax">Syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.predefined.php" title="Predefined constants">Predefined constants</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.magic.php" title="Magic constants">Magic constants</a>
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
