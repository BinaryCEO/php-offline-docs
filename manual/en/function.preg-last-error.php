<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: preg_last_error - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.preg-last-error.php">
 <link rel="shorturl" href="https://www.php.net/preg-last-error">
 <link rel="alternate" href="https://www.php.net/preg-last-error" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.preg-grep.php">
 <link rel="next" href="https://www.php.net/manual/en/function.preg-last-error-msg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.preg-last-error.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.preg-last-error.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.preg-last-error.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.preg-last-error.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.preg-last-error.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.preg-last-error.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.preg-last-error.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.preg-last-error.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.preg-last-error.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.preg-last-error.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.preg-last-error.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the error code of the last PCRE regex execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: preg_last_error - Manual" />
<meta name="twitter:description" content="Returns the error code of the last PCRE regex execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: preg_last_error - Manual" />
<meta itemprop="description" content="Returns the error code of the last PCRE regex execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the error code of the last PCRE regex execution" />

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
        <a href="function.preg-last-error-msg.php">
          preg_last_error_msg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.preg-grep.php">
          &laquo; preg_grep        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='ref.pcre.php'>PCRE Functions</a></li>      </ul>
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
            <option value='en/function.preg-last-error.php' selected="selected">English</option>
            <option value='de/function.preg-last-error.php'>German</option>
            <option value='es/function.preg-last-error.php'>Spanish</option>
            <option value='fr/function.preg-last-error.php'>French</option>
            <option value='it/function.preg-last-error.php'>Italian</option>
            <option value='ja/function.preg-last-error.php'>Japanese</option>
            <option value='pt_BR/function.preg-last-error.php'>Brazilian Portuguese</option>
            <option value='ru/function.preg-last-error.php'>Russian</option>
            <option value='tr/function.preg-last-error.php'>Turkish</option>
            <option value='uk/function.preg-last-error.php'>Ukrainian</option>
            <option value='zh/function.preg-last-error.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.preg-last-error" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">preg_last_error</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">preg_last_error</span> &mdash; <span class="dc-title">Returns the error code of the last PCRE regex execution</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.preg-last-error-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>preg_last_error</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the error code of the last PCRE regex execution.
  </p>
  <p class="para">
   <div class="example" id="example-5026">
    <p><strong>Example #1 <span class="function"><strong>preg_last_error()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(?:\D+|&lt;\d+&gt;)*[!?]/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foobar foobar foobar'</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">preg_last_error</span><span style="color: #007700">() == </span><span style="color: #0000BB">PREG_BACKTRACK_LIMIT_ERROR</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Backtrack limit was exhausted!'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive descriptioncode"><pre class="descriptioncode">Backtrack limit was exhausted!</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.preg-last-error-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

  
 <div class="refsect1 returnvalues" id="refsect1-function.preg-last-error-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns one of the following constants (<a href="pcre.constants.php" class="link">explained on their own page</a>):
   <ul class="simplelist">
    <li><strong><code><a href="pcre.constants.php#constant.preg-no-error">PREG_NO_ERROR</a></code></strong></li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-internal-error">PREG_INTERNAL_ERROR</a></code></strong></li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-backtrack-limit-error">PREG_BACKTRACK_LIMIT_ERROR</a></code></strong> (see also <a href="pcre.configuration.php#ini.pcre.backtrack-limit" class="link">pcre.backtrack_limit</a>)</li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-recursion-limit-error">PREG_RECURSION_LIMIT_ERROR</a></code></strong> (see also <a href="pcre.configuration.php#ini.pcre.recursion-limit" class="link">pcre.recursion_limit</a>)</li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-bad-utf8-error">PREG_BAD_UTF8_ERROR</a></code></strong></li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-bad-utf8-offset-error">PREG_BAD_UTF8_OFFSET_ERROR</a></code></strong></li>
    <li><strong><code><a href="pcre.constants.php#constant.preg-jit-stacklimit-error">PREG_JIT_STACKLIMIT_ERROR</a></code></strong></li>
   </ul>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.preg-last-error-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.preg-last-error-msg.php" class="function" rel="rdfs-seeAlso">preg_last_error_msg()</a> - Returns the error message of the last PCRE regex execution</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/functions/preg-last-error.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.preg-last-error%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.preg-last-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-last-error.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125424">  <div class="votes">
    <div id="Vu125424">
    <a href="/manual/vote-note.php?id=125424&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125424">
    <a href="/manual/vote-note.php?id=125424&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125424" title="100% like this...">
    6
    </div>
  </div>
  <a href="#125424" class="name">
  <strong class="user"><em>nicoSWD</em></strong></a><a class="genanchor" href="#125424"> &para;</a><div class="date" title="2020-10-09 05:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125424">
<div class="phpcode"><code><span class="html">PHP 8 has a native function to retrieve the actual error message, so these helper functions are no longer necessary.<br /><br /><a href="https://www.php.net/preg_last_error_msg" rel="nofollow" target="_blank">https://www.php.net/preg_last_error_msg</a><br /><br /><span class="default">&lt;?php<br /><br />preg_match</span><span class="keyword">(</span><span class="string">'/(?:\D+|&lt;\d+&gt;)*[!?]/'</span><span class="keyword">, </span><span class="string">'foobar foobar foobar'</span><span class="keyword">);<br /><br />if (</span><span class="default">preg_last_error</span><span class="keyword">() !== </span><span class="default">PREG_NO_ERROR</span><span class="keyword">) {<br />    echo </span><span class="default">preg_last_error_msg</span><span class="keyword">(); </span><span class="comment">// Prints "Backtrack limit exhausted"<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114105">  <div class="votes">
    <div id="Vu114105">
    <a href="/manual/vote-note.php?id=114105&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114105">
    <a href="/manual/vote-note.php?id=114105&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114105" title="64% like this...">
    13
    </div>
  </div>
  <a href="#114105" class="name">
  <strong class="user"><em>gk at anuary dot com</em></strong></a><a class="genanchor" href="#114105"> &para;</a><div class="date" title="2014-01-11 02:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114105">
<div class="phpcode"><code><span class="html">In PHP 5.5 and above, getting the error message is as simple as:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'pcre'</span><span class="keyword">])[</span><span class="default">preg_last_error</span><span class="keyword">()];</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112449">  <div class="votes">
    <div id="Vu112449">
    <a href="/manual/vote-note.php?id=112449&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112449">
    <a href="/manual/vote-note.php?id=112449&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112449" title="62% like this...">
    7
    </div>
  </div>
  <a href="#112449" class="name">
  <strong class="user"><em>andre at koethur dot de</em></strong></a><a class="genanchor" href="#112449"> &para;</a><div class="date" title="2013-06-18 12:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112449">
<div class="phpcode"><code><span class="html">Here is a more advanced function to convert an error code to text:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">preg_errtxt</span><span class="keyword">(</span><span class="default">$errcode</span><span class="keyword">)<br />{<br />    static </span><span class="default">$errtext</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$errtxt</span><span class="keyword">))<br />    {<br />        </span><span class="default">$errtext </span><span class="keyword">= array();<br />        </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        foreach (</span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'pcre'</span><span class="keyword">] as </span><span class="default">$c </span><span class="keyword">=&gt; </span><span class="default">$n</span><span class="keyword">) if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/_ERROR$/'</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">)) </span><span class="default">$errtext</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$c</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$errcode</span><span class="keyword">, </span><span class="default">$errtext</span><span class="keyword">)? </span><span class="default">$errtext</span><span class="keyword">[</span><span class="default">$errcode</span><span class="keyword">] : </span><span class="default">NULL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124124">  <div class="votes">
    <div id="Vu124124">
    <a href="/manual/vote-note.php?id=124124&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124124">
    <a href="/manual/vote-note.php?id=124124&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124124" title="61% like this...">
    3
    </div>
  </div>
  <a href="#124124" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#124124"> &para;</a><div class="date" title="2019-08-18 09:37"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124124">
<div class="phpcode"><code><span class="html">Here is a correction to one of the previous "get error message" snippets. It filters out the non-error codes which stops "Warning:  array_flip(): Can only flip STRING and INTEGER values!" from being emitted due to ["PCRE_JIT_SUPPORT"]=&gt;bool(true):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'pcre'</span><span class="keyword">], function (</span><span class="default">$value</span><span class="keyword">) {<br />  return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, -</span><span class="default">6</span><span class="keyword">) === </span><span class="string">'_ERROR'</span><span class="keyword">;<br />}, </span><span class="default">ARRAY_FILTER_USE_KEY</span><span class="keyword">))[</span><span class="default">preg_last_error</span><span class="keyword">()];</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124095">  <div class="votes">
    <div id="Vu124095">
    <a href="/manual/vote-note.php?id=124095&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124095">
    <a href="/manual/vote-note.php?id=124095&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124095" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124095" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124095"> &para;</a><div class="date" title="2019-08-06 07:59"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124095">
<div class="phpcode"><code><span class="html">If you use T-Regx library, to get the last constant, you can use<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">preg_last_error_constant</span><span class="keyword">(); </span><span class="comment">// 'PREG_BAD_UTF8_ERROR'</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98067">  <div class="votes">
    <div id="Vu98067">
    <a href="/manual/vote-note.php?id=98067&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98067">
    <a href="/manual/vote-note.php?id=98067&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98067" title="57% like this...">
    2
    </div>
  </div>
  <a href="#98067" class="name">
  <strong class="user"><em>johan at bluemoonit dot net</em></strong></a><a class="genanchor" href="#98067"> &para;</a><div class="date" title="2010-05-24 05:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98067">
<div class="phpcode"><code><span class="html">The above function pcre_error_deocde [sic] is not correct - not all of the used constants are errors constants. For example, when the error is actually PREG_BAD_UTF8_ERROR, the function outputs the text for PREG_SPLIT_OFFSET_CAPTURE.</span></code></div>
  </div>
 </div>
  <div class="note" id="120706">  <div class="votes">
    <div id="Vu120706">
    <a href="/manual/vote-note.php?id=120706&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120706">
    <a href="/manual/vote-note.php?id=120706&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120706" title="57% like this...">
    1
    </div>
  </div>
  <a href="#120706" class="name">
  <strong class="user"><em>eu at ericruiz dot com dot br</em></strong></a><a class="genanchor" href="#120706"> &para;</a><div class="date" title="2017-02-24 11:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120706">
<div class="phpcode"><code><span class="html">Take it into account before use this function.<br /><br />My php --version<br />PHP 5.6.29 (cli) (built: Dec  8 2016 09:19:46) <br />Copyright (c) 1997-2016 The PHP Group<br />Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies<br /><br />On Linux Fedora 23 4.8.13-100.fc23.x86_64 #1 SMP Fri Dec 9 14:51:40 UTC 2016 x86_64 x86_64 x86_64 GNU/Linux<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// @see <a href="http://stackoverflow.com/questions/4440626/how-can-i-validate-regex" rel="nofollow" target="_blank">http://stackoverflow.com/questions/4440626/how-can-i-validate-regex</a><br /><br />// returns true because  there is no opening "(" for the closing ")"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~InvalidRegular)Expression~'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="comment">// this SHOULD be something different from 0, but...<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">preg_last_error</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124754">  <div class="votes">
    <div id="Vu124754">
    <a href="/manual/vote-note.php?id=124754&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124754">
    <a href="/manual/vote-note.php?id=124754&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124754" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124754" class="name">
  <strong class="user"><em>zerodahero at gmail dot com</em></strong></a><a class="genanchor" href="#124754"> &para;</a><div class="date" title="2020-02-25 12:51"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124754">
<div class="phpcode"><code><span class="html">In PHP 7.3+, and depending on the environment, there may be other constants that aren't ints which will cause errors with array_flip. I opted to go with a RegexException and a filter on gk's note.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">RegexException </span><span class="keyword">extends </span><span class="default">\Exception </span><span class="keyword">{<br /><br />    public </span><span class="default">$errorCode</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(<br />        </span><span class="default">int $errorCode</span><span class="keyword">,<br />        </span><span class="default">string $additionalMessage </span><span class="keyword">= </span><span class="default">null<br />    </span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errorCode </span><span class="keyword">= </span><span class="default">$errorCode</span><span class="keyword">;<br /><br />        </span><span class="default">$errorMessage </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getErrorString</span><span class="keyword">(</span><span class="default">$errorCode</span><span class="keyword">) ?? </span><span class="string">'Unknown regex error'</span><span class="keyword">;<br />        </span><span class="default">$additionalMessage </span><span class="keyword">= </span><span class="default">$additionalMessage </span><span class="keyword">? </span><span class="string">" </span><span class="default">$additionalMessage</span><span class="string">" </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">;<br /><br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="string">"Regex error thrown: </span><span class="default">$errorMessage</span><span class="string">." </span><span class="keyword">. </span><span class="default">$additionalMessage</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Gets an error string (const name) for the PCRE error code<br />     *<br />     * @param int $errorCode<br />     *<br />     * @return string|null<br />     */<br />    </span><span class="keyword">private function </span><span class="default">getErrorString</span><span class="keyword">(</span><span class="default">int $errorCode</span><span class="keyword">): ?</span><span class="default">string<br />    </span><span class="keyword">{<br />        </span><span class="default">$pcreConstants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'pcre'</span><span class="keyword">] ?? [];<br /><br />        </span><span class="comment">/*<br />         * NOTE: preg_last_error() returns an int, but there are constants<br />         * in PHP 7.3+ that are strings, bools, or otherwise. We can pretty<br />         * safely filter out the non-integers to fetch the appropriate<br />         * error constant name.<br />         */<br />        </span><span class="default">$pcreConstants </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$pcreConstants</span><span class="keyword">, function (</span><span class="default">$code</span><span class="keyword">) {<br />            return </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">);<br />        });<br /><br />        </span><span class="default">$errorStrings </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$pcreConstants</span><span class="keyword">);<br /><br />        return </span><span class="default">$errorStrings</span><span class="keyword">[</span><span class="default">$errorCode</span><span class="keyword">] ?? </span><span class="default">null</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">Usage</span><span class="keyword">:<br /><br />throw new </span><span class="default">RegexException</span><span class="keyword">(</span><span class="default">preg_last_error</span><span class="keyword">());</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112500">  <div class="votes">
    <div id="Vu112500">
    <a href="/manual/vote-note.php?id=112500&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112500">
    <a href="/manual/vote-note.php?id=112500&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112500" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112500" class="name">
  <strong class="user"><em>andre at koethur dot de</em></strong></a><a class="genanchor" href="#112500"> &para;</a><div class="date" title="2013-06-23 09:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112500">
<div class="phpcode"><code><span class="html">Just an addition to my previous note: In unicode mode (with "u" modifier), PREG_BAD_UTF8_ERROR only reflects errors in the subject string. If the pattern itself contains invalid characters, preg_match() (or preg_match_all()) returns false but preg_last_error() returns 0 indicating PREG_NO_ERROR. Instead, php issues a warning: "preg_match(): Compilation failed: invalid UTF-8 string at offset 0"</span></code></div>
  </div>
 </div>
  <div class="note" id="124108">  <div class="votes">
    <div id="Vu124108">
    <a href="/manual/vote-note.php?id=124108&amp;page=function.preg-last-error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124108">
    <a href="/manual/vote-note.php?id=124108&amp;page=function.preg-last-error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124108" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#124108" class="name">
  <strong class="user"><em>Vladimir Valikaev</em></strong></a><a class="genanchor" href="#124108"> &para;</a><div class="date" title="2019-08-12 04:01"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124108">
<div class="phpcode"><code><span class="html">Getting error as text (small update):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'pcre'</span><span class="keyword">], function(</span><span class="default">$v</span><span class="keyword">) { return </span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">); }))[</span><span class="default">preg_last_error</span><span class="keyword">()];</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.preg-last-error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-last-error.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcre.php">PCRE Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.preg-filter.php" title="preg_&#8203;filter">preg_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-grep.php" title="preg_&#8203;grep">preg_&#8203;grep</a>
                        </li>
                                                <li class="current">
                            <a href="function.preg-last-error.php" title="preg_&#8203;last_&#8203;error">preg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error-msg.php" title="preg_&#8203;last_&#8203;error_&#8203;msg">preg_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match.php" title="preg_&#8203;match">preg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match-all.php" title="preg_&#8203;match_&#8203;all">preg_&#8203;match_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-quote.php" title="preg_&#8203;quote">preg_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace.php" title="preg_&#8203;replace">preg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback.php" title="preg_&#8203;replace_&#8203;callback">preg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback-array.php" title="preg_&#8203;replace_&#8203;callback_&#8203;array">preg_&#8203;replace_&#8203;callback_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-split.php" title="preg_&#8203;split">preg_&#8203;split</a>
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
