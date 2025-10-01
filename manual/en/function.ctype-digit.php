<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ctype_digit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ctype-digit.php">
 <link rel="shorturl" href="https://www.php.net/ctype-digit">
 <link rel="alternate" href="https://www.php.net/ctype-digit" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ctype.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ctype-cntrl.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ctype-graph.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ctype-digit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ctype-digit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ctype-digit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ctype-digit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ctype-digit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ctype-digit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ctype-digit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ctype-digit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ctype-digit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ctype-digit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ctype-digit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Check for numeric character(s)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ctype_digit - Manual" />
<meta name="twitter:description" content="Check for numeric character(s)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ctype_digit - Manual" />
<meta itemprop="description" content="Check for numeric character(s)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Check for numeric character(s)" />

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
        <a href="function.ctype-graph.php">
          ctype_graph &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ctype-cntrl.php">
          &laquo; ctype_cntrl        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.ctype.php'>Ctype</a></li>      <li><a href='ref.ctype.php'>Ctype Functions</a></li>      </ul>
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
            <option value='en/function.ctype-digit.php' selected="selected">English</option>
            <option value='de/function.ctype-digit.php'>German</option>
            <option value='es/function.ctype-digit.php'>Spanish</option>
            <option value='fr/function.ctype-digit.php'>French</option>
            <option value='it/function.ctype-digit.php'>Italian</option>
            <option value='ja/function.ctype-digit.php'>Japanese</option>
            <option value='pt_BR/function.ctype-digit.php'>Brazilian Portuguese</option>
            <option value='ru/function.ctype-digit.php'>Russian</option>
            <option value='tr/function.ctype-digit.php'>Turkish</option>
            <option value='uk/function.ctype-digit.php'>Ukrainian</option>
            <option value='zh/function.ctype-digit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ctype-digit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ctype_digit</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ctype_digit</span> &mdash; <span class="dc-title">Check for numeric character(s)</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ctype-digit-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ctype_digit</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$text</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks if all of the characters in the provided <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
   <code class="parameter">text</code>, are numerical.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ctype-digit-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       The tested string.
       <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">
If an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> between -128 and 255 inclusive is provided, it is interpreted as
the ASCII value of a single character (negative values have 256 added in order to allow
characters in the Extended ASCII range). Any other integer is interpreted as a string
containing the decimal digits of the integer.</p></p></blockquote>
       <div class="warning"><strong class="warning">Warning</strong><p class="para">
As of PHP 8.1.0, passing a non-string argument is deprecated.
In the future, the argument will be interpreted as a string instead of an ASCII codepoint.
Depending on the intended behavior, the argument should either be cast to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
or an explicit call to <span class="function"><a href="function.chr.php" class="function">chr()</a></span> should be made.</p></div>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ctype-digit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if every character in the string
   <code class="parameter">text</code> is a decimal digit, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
   When called with an empty string the result will always be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ctype-digit-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5365">
    <p><strong>Example #1 A <span class="function"><strong>ctype_digit()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$strings </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'1820.20'</span><span style="color: #007700">, </span><span style="color: #DD0000">'10002'</span><span style="color: #007700">, </span><span style="color: #DD0000">'wsl!12'</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$strings </span><span style="color: #007700">as </span><span style="color: #0000BB">$testcase</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">$testcase</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"The string </span><span style="color: #0000BB">$testcase</span><span style="color: #DD0000"> consists of all digits.\n"</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">"The string </span><span style="color: #0000BB">$testcase</span><span style="color: #DD0000"> does not consist of all digits.\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">The string 1820.20 does not consist of all digits.
The string 10002 consists of all digits.
The string wsl!12 does not consist of all digits.</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5366">
    <p><strong>Example #2 A <span class="function"><strong>ctype_digit()</strong></span> example comparing strings with integers</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$numeric_string </span><span style="color: #007700">= </span><span style="color: #DD0000">'42'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$integer        </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">$numeric_string</span><span style="color: #007700">);  </span><span style="color: #FF8000">// true<br /></span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">);         </span><span style="color: #FF8000">// false (ASCII 42 is the * character)<br /><br /></span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$numeric_string</span><span style="color: #007700">);   </span><span style="color: #FF8000">// true<br /></span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">);          </span><span style="color: #FF8000">// true<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ctype-digit-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ctype-alnum.php" class="function" rel="rdfs-seeAlso">ctype_alnum()</a> - Check for alphanumeric character(s)</span></li>
    <li><span class="function"><a href="function.ctype-xdigit.php" class="function" rel="rdfs-seeAlso">ctype_xdigit()</a> - Check for character(s) representing a hexadecimal digit</span></li>
    <li><span class="function"><a href="function.is-numeric.php" class="function" rel="rdfs-seeAlso">is_numeric()</a> - Finds whether a variable is a number or a numeric string</span></li>
    <li><span class="function"><a href="function.is-int.php" class="function" rel="rdfs-seeAlso">is_int()</a> - Find whether the type of a variable is integer</span></li>
    <li><span class="function"><a href="function.is-string.php" class="function" rel="rdfs-seeAlso">is_string()</a> - Find whether the type of a variable is string</span></li>
    <li><span class="function"><a href="intlchar.isdigit.php" class="function" rel="rdfs-seeAlso">IntlChar::isdigit()</a> - Check if code point is a digit character</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ctype/functions/ctype-digit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ctype-digit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ctype-digit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ctype-digit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108712">  <div class="votes">
    <div id="Vu108712">
    <a href="/manual/vote-note.php?id=108712&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108712">
    <a href="/manual/vote-note.php?id=108712&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108712" title="79% like this...">
    58
    </div>
  </div>
  <a href="#108712" class="name">
  <strong class="user"><em>info at directwebsolutions dot nl</em></strong></a><a class="genanchor" href="#108712"> &para;</a><div class="date" title="2012-05-19 09:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108712">
<div class="phpcode"><code><span class="html">All basic PHP functions which i tried returned unexpected results. I would just like to check whether some variable only contains numbers. For example: when i spread my script to the public i cannot require users to only use numbers as string or as integer. For those situation i wrote my own function which handles all inconveniences of other functions and which is not depending on regular expressions. Some people strongly believe that regular functions slow down your script.<br /><br />The reason to write this function:<br />1. is_numeric() accepts values like: +0123.45e6 (but you would expect it would not)<br />2. is_int() does not accept HTML form fields (like: 123) because they are treated as strings (like: "123").<br />3. ctype_digit() excepts all numbers to be strings (like: "123") and does not validate real integers (like: 123).<br />4. Probably some functions would parse a boolean (like: true or false) as 0 or 1 and validate it in that manner.<br /><br />My function only accepts numbers regardless whether they are in string or in integer format.<br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Check input for existing only of digits (numbers)<br />     * @author Tim Boormans &lt;info@directwebsolutions.nl&gt;<br />     * @param $digit<br />     * @return bool<br />     */<br />    </span><span class="keyword">function </span><span class="default">is_digit</span><span class="keyword">(</span><span class="default">$digit</span><span class="keyword">) {<br />        if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$digit</span><span class="keyword">)) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        } elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$digit</span><span class="keyword">)) {<br />            return </span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$digit</span><span class="keyword">);<br />        } else {<br />            </span><span class="comment">// booleans, floats and others<br />            </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118098">  <div class="votes">
    <div id="Vu118098">
    <a href="/manual/vote-note.php?id=118098&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118098">
    <a href="/manual/vote-note.php?id=118098&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118098" title="78% like this...">
    19
    </div>
  </div>
  <a href="#118098" class="name">
  <strong class="user"><em>error17191 at gmail dot com</em></strong></a><a class="genanchor" href="#118098"> &para;</a><div class="date" title="2015-10-03 01:41"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118098">
<div class="phpcode"><code><span class="html">I just wanted to clarify a flaw in the function is_digit() suggested by "info at directwebsolutions dot nl " .. <br />It returns true in case of negative integers and false in case of strings that contain negative integers .<br /> example:<br />is_digit(-10); // returns ture<br />is_digit('-10'); // returns false</span></code></div>
  </div>
 </div>
  <div class="note" id="92307">  <div class="votes">
    <div id="Vu92307">
    <a href="/manual/vote-note.php?id=92307&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92307">
    <a href="/manual/vote-note.php?id=92307&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92307" title="82% like this...">
    15
    </div>
  </div>
  <a href="#92307" class="name">
  <strong class="user"><em>Peter de Pijd</em></strong></a><a class="genanchor" href="#92307"> &para;</a><div class="date" title="2009-07-18 03:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92307">
<div class="phpcode"><code><span class="html">Note that an empty string is also false:<br />ctype_digit("") // false</span></code></div>
  </div>
 </div>
  <div class="note" id="118121">  <div class="votes">
    <div id="Vu118121">
    <a href="/manual/vote-note.php?id=118121&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118121">
    <a href="/manual/vote-note.php?id=118121&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118121" title="82% like this...">
    11
    </div>
  </div>
  <a href="#118121" class="name">
  <strong class="user"><em>smicheal2 at gmail dot com</em></strong></a><a class="genanchor" href="#118121"> &para;</a><div class="date" title="2015-10-07 01:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118121">
<div class="phpcode"><code><span class="html">Please note that ctype_digit() will say true for strings such as '00001', which are not technically valid representations of integers, while saying false to strings such as '-1', which are. It's basically a faster version of the regex /^\d+$/. As the name says, it answers the question "does this string contain only digits" literally. It does not answer "is this a valid representation of an integer". If that's what you want, use is_int(filter_var($val, FILTER_VALIDATE_INT)) instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="112040">  <div class="votes">
    <div id="Vu112040">
    <a href="/manual/vote-note.php?id=112040&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112040">
    <a href="/manual/vote-note.php?id=112040&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112040" title="76% like this...">
    13
    </div>
  </div>
  <a href="#112040" class="name">
  <strong class="user"><em>rlerne at gmail dot com</em></strong></a><a class="genanchor" href="#112040"> &para;</a><div class="date" title="2013-04-25 06:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112040">
<div class="phpcode"><code><span class="html">Interesting to note that you must pass a STRING to this function, other values won't be typecasted (I figured it would even though above explicitly says string $text).<br /><br />I.E.<br /><br /><span class="default">&lt;?PHP<br />$val </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">; </span><span class="comment">//Answer to life<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will return false, even though, when typecasted to string, it would be true.<br /><br /><span class="default">&lt;?PHP<br />$val </span><span class="keyword">= </span><span class="string">'42'</span><span class="keyword">;<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Returns True.<br /><br />Could do this too:<br /><br /><span class="default">&lt;?PHP<br />$val </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">;<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">ctype_digit</span><span class="keyword">((string) </span><span class="default">$val</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Which will also return true, as it should.</span></code></div>
  </div>
 </div>
  <div class="note" id="95117">  <div class="votes">
    <div id="Vu95117">
    <a href="/manual/vote-note.php?id=95117&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95117">
    <a href="/manual/vote-note.php?id=95117&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95117" title="76% like this...">
    11
    </div>
  </div>
  <a href="#95117" class="name">
  <strong class="user"><em>strrev xc tod noxeh ta ellij</em></strong></a><a class="genanchor" href="#95117"> &para;</a><div class="date" title="2009-12-14 08:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95117">
<div class="phpcode"><code><span class="html">ctype_digit() will treat all passed integers below 256 as character-codes. It returns true for 48 through 57 (ASCII '0'-'9') and false for the rest.<br /><br />ctype_digit(5) -&gt; false<br />ctype_digit(48) -&gt; true<br />ctype_digit(255) -&gt; false<br />ctype_digit(256) -&gt; true<br /><br />(Note: the PHP type must be an int; if you pass strings it works as expected)</span></code></div>
  </div>
 </div>
  <div class="note" id="91086">  <div class="votes">
    <div id="Vu91086">
    <a href="/manual/vote-note.php?id=91086&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91086">
    <a href="/manual/vote-note.php?id=91086&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91086" title="68% like this...">
    14
    </div>
  </div>
  <a href="#91086" class="name">
  <strong class="user"><em>a_p_leeming at hotmail dot com</em></strong></a><a class="genanchor" href="#91086"> &para;</a><div class="date" title="2009-05-24 06:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91086">
<div class="phpcode"><code><span class="html">Also note that
<br />
<br /><span class="default">&lt;?php ctype_digit</span><span class="keyword">(</span><span class="string">"-1"</span><span class="keyword">);   </span><span class="comment">//false </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98037">  <div class="votes">
    <div id="Vu98037">
    <a href="/manual/vote-note.php?id=98037&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98037">
    <a href="/manual/vote-note.php?id=98037&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98037" title="71% like this...">
    3
    </div>
  </div>
  <a href="#98037" class="name">
  <strong class="user"><em>mdsky at web dot de</em></strong></a><a class="genanchor" href="#98037"> &para;</a><div class="date" title="2010-05-21 12:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98037">
<div class="phpcode"><code><span class="html">is_numeric gives true by f. ex. 1e3 or 0xf5 too. So it's not the same as ctype_digit, which just gives true when only values from 0 to 9 are entered.</span></code></div>
  </div>
 </div>
  <div class="note" id="96052">  <div class="votes">
    <div id="Vu96052">
    <a href="/manual/vote-note.php?id=96052&amp;page=function.ctype-digit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96052">
    <a href="/manual/vote-note.php?id=96052&amp;page=function.ctype-digit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96052" title="54% like this...">
    2
    </div>
  </div>
  <a href="#96052" class="name">
  <strong class="user"><em>John Saman</em></strong></a><a class="genanchor" href="#96052"> &para;</a><div class="date" title="2010-02-05 05:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96052">
<div class="phpcode"><code><span class="html">Using is_numeric function is quite faster than ctype_digit.<br /><br />is_numeric took 0.237 Seconds for one million runs. while ctype_digit took 0.470 Seconds.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ctype-digit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ctype-digit.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ctype.php">Ctype Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ctype-alnum.php" title="ctype_&#8203;alnum">ctype_&#8203;alnum</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-alpha.php" title="ctype_&#8203;alpha">ctype_&#8203;alpha</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-cntrl.php" title="ctype_&#8203;cntrl">ctype_&#8203;cntrl</a>
                        </li>
                                                <li class="current">
                            <a href="function.ctype-digit.php" title="ctype_&#8203;digit">ctype_&#8203;digit</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-graph.php" title="ctype_&#8203;graph">ctype_&#8203;graph</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-lower.php" title="ctype_&#8203;lower">ctype_&#8203;lower</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-print.php" title="ctype_&#8203;print">ctype_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-punct.php" title="ctype_&#8203;punct">ctype_&#8203;punct</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-space.php" title="ctype_&#8203;space">ctype_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-upper.php" title="ctype_&#8203;upper">ctype_&#8203;upper</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-xdigit.php" title="ctype_&#8203;xdigit">ctype_&#8203;xdigit</a>
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
