<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_destroy - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-destroy.php">
 <link rel="shorturl" href="https://www.php.net/session-destroy">
 <link rel="alternate" href="https://www.php.net/session-destroy" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-decode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-encode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-destroy.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-destroy.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-destroy.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-destroy.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-destroy.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-destroy.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-destroy.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-destroy.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-destroy.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-destroy.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-destroy.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Destroys all data registered to a session" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_destroy - Manual" />
<meta name="twitter:description" content="Destroys all data registered to a session" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_destroy - Manual" />
<meta itemprop="description" content="Destroys all data registered to a session" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Destroys all data registered to a session" />

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
        <a href="function.session-encode.php">
          session_encode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-decode.php">
          &laquo; session_decode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='ref.session.php'>Session Functions</a></li>      </ul>
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
            <option value='en/function.session-destroy.php' selected="selected">English</option>
            <option value='de/function.session-destroy.php'>German</option>
            <option value='es/function.session-destroy.php'>Spanish</option>
            <option value='fr/function.session-destroy.php'>French</option>
            <option value='it/function.session-destroy.php'>Italian</option>
            <option value='ja/function.session-destroy.php'>Japanese</option>
            <option value='pt_BR/function.session-destroy.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-destroy.php'>Russian</option>
            <option value='tr/function.session-destroy.php'>Turkish</option>
            <option value='uk/function.session-destroy.php'>Ukrainian</option>
            <option value='zh/function.session-destroy.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-destroy" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_destroy</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_destroy</span> &mdash; <span class="dc-title">Destroys all data registered to a session</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-destroy-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_destroy</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="simpara">
   <span class="function"><strong>session_destroy()</strong></span> destroys all of the data associated
   with the current session. It does not unset any of the global variables
   associated with the session, or unset the session cookie.
   To use the session variables again, <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> has
   to be called.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
     You do not have to call <span class="function"><strong>session_destroy()</strong></span> from usual
     code. Cleanup $_SESSION array rather than destroying session data.
   </span>
  </p></blockquote>
  <p class="para">
   In order to kill the session altogether, the
   session ID must also be unset. If a cookie is used to propagate the
   session ID (default behavior), then the session cookie must be deleted.
   <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> may be used for that.
  </p>
  <p class="para">
   When <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
   is enabled. You do not have to remove obsolete session ID cookie because
   session module will not accept session ID cookie when there is no
   data associated to the session ID and set new session ID cookie.
   Enabling <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
   is recommended for all sites.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Immediate session deletion may cause unwanted results. When there is
    concurrent requests, other connections may see sudden session data
    loss. e.g. Requests from JavaScript and/or requests from URL links.
   </p>
   <p class="para">
    Although current session module does not accept empty session ID
    cookie, but immediate session deletion may result in empty session ID
    cookie due to client(browser) side race condition. This will result
    that the client creates many session ID needlessly.
   </p>
   <p class="para">
    To avoid these, you must set deletion time-stamp to $_SESSION and
    reject access while later. Or make sure your application does not
    have concurrent requests. This applies to <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> also.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-destroy-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-destroy-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-destroy-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5004">
    <p><strong>Example #1 Destroying a session with <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Initialize the session.<br />// If you are using session_name("something"), don't forget it now!<br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Unset all of the session variables.<br /></span><span style="color: #0000BB">$_SESSION </span><span style="color: #007700">= array();<br /><br /></span><span style="color: #FF8000">// If it's desired to kill the session, also delete the session cookie.<br />// Note: This will destroy the session, and not just the session data!<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"session.use_cookies"</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$params </span><span style="color: #007700">= </span><span style="color: #0000BB">session_get_cookie_params</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #0000BB">session_name</span><span style="color: #007700">(), </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">42000</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"path"</span><span style="color: #007700">], </span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"domain"</span><span style="color: #007700">],<br />        </span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"secure"</span><span style="color: #007700">], </span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"httponly"</span><span style="color: #007700">]<br />    );<br />}<br /><br /></span><span style="color: #FF8000">// Finally, destroy the session.<br /></span><span style="color: #0000BB">session_destroy</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-destroy-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a></li>
    <li><span class="function"><a href="function.session-reset.php" class="function" rel="rdfs-seeAlso">session_reset()</a> - Re-initialize session array with original values</span></li>
    <li><span class="function"><a href="function.session-regenerate-id.php" class="function" rel="rdfs-seeAlso">session_regenerate_id()</a> - Update the current session id with a newly generated one</span></li>
    <li><span class="function"><a href="function.unset.php" class="function" rel="rdfs-seeAlso">unset()</a> - unset a given variable</span></li>
    <li><span class="function"><a href="function.setcookie.php" class="function" rel="rdfs-seeAlso">setcookie()</a> - Send a cookie</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-destroy.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-destroy%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-destroy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-destroy.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110043">  <div class="votes">
    <div id="Vu110043">
    <a href="/manual/vote-note.php?id=110043&amp;page=function.session-destroy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110043">
    <a href="/manual/vote-note.php?id=110043&amp;page=function.session-destroy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110043" title="60% like this...">
    54
    </div>
  </div>
  <a href="#110043" class="name">
  <strong class="user"><em>Praveen V</em></strong></a><a class="genanchor" href="#110043"> &para;</a><div class="date" title="2012-09-14 04:39"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110043">
<div class="phpcode"><code><span class="html">If you want to change the session id on each log in, make sure to use session_regenerate_id(true) during the log in process.
<br />
<br /><span class="default">&lt;?php
<br />session_start</span><span class="keyword">();
<br /></span><span class="default">session_regenerate_id</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />[Edited by moderator (googleguy at php dot net)]</span></code></div>
  </div>
 </div>
  <div class="note" id="114709">  <div class="votes">
    <div id="Vu114709">
    <a href="/manual/vote-note.php?id=114709&amp;page=function.session-destroy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114709">
    <a href="/manual/vote-note.php?id=114709&amp;page=function.session-destroy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114709" title="55% like this...">
    20
    </div>
  </div>
  <a href="#114709" class="name">
  <strong class="user"><em>Jack Luo</em></strong></a><a class="genanchor" href="#114709"> &para;</a><div class="date" title="2014-03-27 10:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114709">
<div class="phpcode"><code><span class="html">It took me a while to figure out how to destroy a particular session in php. Note I'm not sure if solution provided below is perfect but it seems work for me. Please feel free to post any easier way to destroy a particular session. Because it's quite useful for functionality of force an user offline.<br /><br />1. If you're using db or memcached to manage session, you can always delete that session entry directly from db or memcached.<br /><br />2. Using generic php session methods to delete a particular session(by session id).<br /><br /><span class="default">&lt;?php<br />$session_id_to_destroy </span><span class="keyword">= </span><span class="string">'nill2if998vhplq9f3pj08vjb1'</span><span class="keyword">;<br /></span><span class="comment">// 1. commit session if it's started.<br /></span><span class="keyword">if (</span><span class="default">session_id</span><span class="keyword">()) {<br />    </span><span class="default">session_commit</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// 2. store current session id<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$current_session_id </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br /></span><span class="default">session_commit</span><span class="keyword">();<br /><br /></span><span class="comment">// 3. hijack then destroy session specified.<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$session_id_to_destroy</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /></span><span class="default">session_commit</span><span class="keyword">();<br /><br /></span><span class="comment">// 4. restore current session id. If don't restore it, your current session will refer to the session you just destroyed!<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$current_session_id</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_commit</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130441">  <div class="votes">
    <div id="Vu130441">
    <a href="/manual/vote-note.php?id=130441&amp;page=function.session-destroy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130441">
    <a href="/manual/vote-note.php?id=130441&amp;page=function.session-destroy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130441" title="no votes...">
    0
    </div>
  </div>
  <a href="#130441" class="name">
  <strong class="user"><em>mavudurumuralik at hotmail dot com</em></strong></a><a class="genanchor" href="#130441"> &para;</a><div class="date" title="2025-08-04 02:54"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130441">
<div class="phpcode"><code><span class="html">I have provided a solution to avoid opening of pages directly through url without entering login page.. hope this serves the purpose.<br /><br />session_start();<br />if (!isset($_POST['loginid']) &amp;&amp; !isset($_SESSION['loginid']))<br />    echo "&lt;script language=javascript&gt;{alert('Please Log in..'); window.open('index.php','_parent')}&lt;/script&gt;";</span></code></div>
  </div>
 </div>
  <div class="note" id="129863">  <div class="votes">
    <div id="Vu129863">
    <a href="/manual/vote-note.php?id=129863&amp;page=function.session-destroy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129863">
    <a href="/manual/vote-note.php?id=129863&amp;page=function.session-destroy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129863" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#129863" class="name">
  <strong class="user"><em>vitas dot lowang at gmail dot com</em></strong></a><a class="genanchor" href="#129863"> &para;</a><div class="date" title="2024-11-20 10:45"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129863">
<div class="phpcode"><code><span class="html">I found out that in order to really have the session data cleared after calling session_destroy(), you need to refresh the page. For example by calling<br />header('Location: '.$_SERVER['PHP_SELF']."?page=profile");<br /><br />if you don't then there are still data in $_SESSION which was there before. I don't know if this is intended behavior but it's kind of confusing IMO...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-destroy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-destroy.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.session.php">Session Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.session-abort.php" title="session_&#8203;abort">session_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-expire.php" title="session_&#8203;cache_&#8203;expire">session_&#8203;cache_&#8203;expire</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-limiter.php" title="session_&#8203;cache_&#8203;limiter">session_&#8203;cache_&#8203;limiter</a>
                        </li>
                                                <li class="">
                            <a href="function.session-commit.php" title="session_&#8203;commit">session_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.session-create-id.php" title="session_&#8203;create_&#8203;id">session_&#8203;create_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-decode.php" title="session_&#8203;decode">session_&#8203;decode</a>
                        </li>
                                                <li class="current">
                            <a href="function.session-destroy.php" title="session_&#8203;destroy">session_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.session-encode.php" title="session_&#8203;encode">session_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-gc.php" title="session_&#8203;gc">session_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.session-get-cookie-params.php" title="session_&#8203;get_&#8203;cookie_&#8203;params">session_&#8203;get_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-id.php" title="session_&#8203;id">session_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-module-name.php" title="session_&#8203;module_&#8203;name">session_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-name.php" title="session_&#8203;name">session_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-regenerate-id.php" title="session_&#8203;regenerate_&#8203;id">session_&#8203;regenerate_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-register-shutdown.php" title="session_&#8203;register_&#8203;shutdown">session_&#8203;register_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.session-reset.php" title="session_&#8203;reset">session_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-save-path.php" title="session_&#8203;save_&#8203;path">session_&#8203;save_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-cookie-params.php" title="session_&#8203;set_&#8203;cookie_&#8203;params">session_&#8203;set_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.session-start.php" title="session_&#8203;start">session_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.session-status.php" title="session_&#8203;status">session_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.session-unset.php" title="session_&#8203;unset">session_&#8203;unset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-write-close.php" title="session_&#8203;write_&#8203;close">session_&#8203;write_&#8203;close</a>
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
