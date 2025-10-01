<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_regenerate_id - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-regenerate-id.php">
 <link rel="shorturl" href="https://www.php.net/session-regenerate-id">
 <link rel="alternate" href="https://www.php.net/session-regenerate-id" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-name.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-register-shutdown.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-regenerate-id.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-regenerate-id.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-regenerate-id.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-regenerate-id.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-regenerate-id.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-regenerate-id.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-regenerate-id.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-regenerate-id.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-regenerate-id.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-regenerate-id.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-regenerate-id.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Update the current session id with a newly generated one" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_regenerate_id - Manual" />
<meta name="twitter:description" content="Update the current session id with a newly generated one" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_regenerate_id - Manual" />
<meta itemprop="description" content="Update the current session id with a newly generated one" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Update the current session id with a newly generated one" />

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
        <a href="function.session-register-shutdown.php">
          session_register_shutdown &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-name.php">
          &laquo; session_name        </a>
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
            <option value='en/function.session-regenerate-id.php' selected="selected">English</option>
            <option value='de/function.session-regenerate-id.php'>German</option>
            <option value='es/function.session-regenerate-id.php'>Spanish</option>
            <option value='fr/function.session-regenerate-id.php'>French</option>
            <option value='it/function.session-regenerate-id.php'>Italian</option>
            <option value='ja/function.session-regenerate-id.php'>Japanese</option>
            <option value='pt_BR/function.session-regenerate-id.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-regenerate-id.php'>Russian</option>
            <option value='tr/function.session-regenerate-id.php'>Turkish</option>
            <option value='uk/function.session-regenerate-id.php'>Ukrainian</option>
            <option value='zh/function.session-regenerate-id.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-regenerate-id" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_regenerate_id</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_regenerate_id</span> &mdash; <span class="dc-title">
   Update the current session id with a newly generated one
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.session-regenerate-id-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_regenerate_id</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$delete_old_session</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_regenerate_id()</strong></span> will replace the current
   session id with a new one, and keep the current session information.
  </p>
  <p class="para">
   When <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a>
   is enabled, output must be started after <span class="function"><strong>session_regenerate_id()</strong></span>
   call. Otherwise, old session ID is used.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Currently, session_regenerate_id does not handle an unstable network well,
    e.g. Mobile and WiFi network. Therefore, you may experience a lost
    session by calling session_regenerate_id.
   </p>
   <p class="para">
    You should not destroy old session data immediately, but should use
    destroy time-stamp and control access to old session ID. Otherwise,
    concurrent access to page may result in inconsistent state, or you
    may have lost session, or it may cause client (browser) side race
    condition and may create many session ID needlessly. Immediate
    session data deletion disables session hijack attack detection
    and prevention also.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-regenerate-id-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">delete_old_session</code></dt>
      <dd>
       <p class="para">
        Whether to delete the old associated session file or not.
        You should not delete old session if you need to avoid
        races caused by deletion or detect/avoid session hijack
        attacks.
       </p>
      </dd>
     
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-regenerate-id-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-regenerate-id-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5008">
    <p><strong>Example #1 A <span class="function"><strong>session_regenerate_id()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// NOTE: This code is not fully working code, but an example!<br /><br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Check destroyed time-stamp<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">])<br />    &amp;&amp; </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">300</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Should not happen usually. This could be attack or due to unstable network.<br />    // Remove all authentication status of this users session.<br />    </span><span style="color: #0000BB">remove_all_authentication_flag_from_active_sessions</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'userid'</span><span style="color: #007700">]);<br />    throw(new </span><span style="color: #0000BB">DestroyedSessionAccessException</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$old_sessionid </span><span style="color: #007700">= </span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Set destroyed timestamp<br /></span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">] = </span><span style="color: #0000BB">time</span><span style="color: #007700">(); </span><span style="color: #FF8000">// session_regenerate_id() saves old session data<br /><br />// Simply calling session_regenerate_id() may result in lost session, etc.<br />// See next example.<br /></span><span style="color: #0000BB">session_regenerate_id</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// New session does not need destroyed timestamp<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">$new_sessionid </span><span style="color: #007700">= </span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Old Session: </span><span style="color: #0000BB">$old_sessionid</span><span style="color: #DD0000">&lt;br /&gt;"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"New Session: </span><span style="color: #0000BB">$new_sessionid</span><span style="color: #DD0000">&lt;br /&gt;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   Current session module does not handle unstable network well. You should
   manage session ID to avoid lost session by session_regenerate_id.
  </p>

  <p class="para">
   <div class="example" id="example-5009">
    <p><strong>Example #2 Avoiding lost session by <span class="function"><strong>session_regenerate_id()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// NOTE: This code is not fully working code, but an example!<br />// my_session_start() and my_session_regenerate_id() avoid lost sessions by<br />// unstable network. In addition, this code may prevent exploiting stolen<br />// session by attackers.<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_session_start</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />    if (isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">])) {<br />       if (</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">time</span><span style="color: #007700">()-</span><span style="color: #0000BB">300</span><span style="color: #007700">) {<br />           </span><span style="color: #FF8000">// Should not happen usually. This could be attack or due to unstable network.<br />           // Remove all authentication status of this users session.<br />           </span><span style="color: #0000BB">remove_all_authentication_flag_from_active_sessions</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'userid'</span><span style="color: #007700">]);<br />           throw(new </span><span style="color: #0000BB">DestroyedSessionAccessException</span><span style="color: #007700">);<br />       }<br />       if (isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'new_session_id'</span><span style="color: #007700">])) {<br />           </span><span style="color: #FF8000">// Not fully expired yet. Could be lost cookie by unstable network.<br />           // Try again to set proper session ID cookie.<br />           // NOTE: Do not try to set session ID again if you would like to remove<br />           // authentication flag.<br />           </span><span style="color: #0000BB">session_commit</span><span style="color: #007700">();<br />           </span><span style="color: #0000BB">session_id</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'new_session_id'</span><span style="color: #007700">]);<br />           </span><span style="color: #FF8000">// New session ID should exist<br />           </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />           return;<br />       }<br />   }<br />}<br /><br />function </span><span style="color: #0000BB">my_session_regenerate_id</span><span style="color: #007700">() {<br />    </span><span style="color: #FF8000">// New session ID is required to set proper session ID<br />    // when session ID is not set due to unstable network.<br />    </span><span style="color: #0000BB">$new_session_id </span><span style="color: #007700">= </span><span style="color: #0000BB">session_create_id</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'new_session_id'</span><span style="color: #007700">] = </span><span style="color: #0000BB">$new_session_id</span><span style="color: #007700">;<br />    <br />    </span><span style="color: #FF8000">// Set destroy timestamp<br />    </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">] = </span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />    <br />    </span><span style="color: #FF8000">// Write and close current session;<br />    </span><span style="color: #0000BB">session_commit</span><span style="color: #007700">();<br /><br />    </span><span style="color: #FF8000">// Start session with new session ID<br />    </span><span style="color: #0000BB">session_id</span><span style="color: #007700">(</span><span style="color: #0000BB">$new_session_id</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_strict_mode'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_strict_mode'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />    <br />    </span><span style="color: #FF8000">// New session does not need them<br />    </span><span style="color: #007700">unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'destroyed'</span><span style="color: #007700">]);<br />    unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'new_session_id'</span><span style="color: #007700">]);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-regenerate-id-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.session-id.php" class="function" rel="rdfs-seeAlso">session_id()</a> - Get and/or set the current session id</span></li>
    <li><span class="function"><a href="function.session-create-id.php" class="function" rel="rdfs-seeAlso">session_create_id()</a> - Create new session id</span></li>
    <li><span class="function"><a href="function.session-start.php" class="function" rel="rdfs-seeAlso">session_start()</a> - Start new or resume existing session</span></li>
    <li><span class="function"><a href="function.session-destroy.php" class="function" rel="rdfs-seeAlso">session_destroy()</a> - Destroys all data registered to a session</span></li>
    <li><span class="function"><a href="function.session-reset.php" class="function" rel="rdfs-seeAlso">session_reset()</a> - Re-initialize session array with original values</span></li>
    <li><span class="function"><a href="function.session-name.php" class="function" rel="rdfs-seeAlso">session_name()</a> - Get and/or set the current session name</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-regenerate-id.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-regenerate-id%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-regenerate-id&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-regenerate-id.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118672">  <div class="votes">
    <div id="Vu118672">
    <a href="/manual/vote-note.php?id=118672&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118672">
    <a href="/manual/vote-note.php?id=118672&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118672" title="80% like this...">
    42
    </div>
  </div>
  <a href="#118672" class="name">
  <strong class="user"><em>tedivm at tedivm dot com</em></strong></a><a class="genanchor" href="#118672"> &para;</a><div class="date" title="2016-01-17 08:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118672">
<div class="phpcode"><code><span class="html">I wrote the current top voted comment on this and wanted to add something. The existing code from my previous comment generates it's nonces in an insecure way-<br /><br /><span class="default">&lt;?php<br />$_SESSION</span><span class="keyword">[</span><span class="string">'nonce'</span><span class="keyword">] = </span><span class="default">md5</span><span class="keyword">(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Since "microtime" is predictable it makes brute forcing the nonce much easier. A better option would be something that utilizes randomness, such as-<br /><br /><span class="default">&lt;?php<br />bin2hex</span><span class="keyword">(</span><span class="default">openssl_random_pseudo_bytes</span><span class="keyword">(</span><span class="default">32</span><span class="keyword">))<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87905">  <div class="votes">
    <div id="Vu87905">
    <a href="/manual/vote-note.php?id=87905&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87905">
    <a href="/manual/vote-note.php?id=87905&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87905" title="71% like this...">
    42
    </div>
  </div>
  <a href="#87905" class="name">
  <strong class="user"><em>tedivm at tedivm dot com</em></strong></a><a class="genanchor" href="#87905"> &para;</a><div class="date" title="2008-12-29 06:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87905">
<div class="phpcode"><code><span class="html">I wrote the following code for a project I'm working on- it attempts to resolve the regenerate issue, as well as deal with a couple of other session related things.<br /><br />I tried to make it a little more generic and usable (for instance, in the full version it throws different types of exceptions for the different types of session issues), so hopefully someone might find it useful.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">regenerateSession</span><span class="keyword">(</span><span class="default">$reload </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    </span><span class="comment">// This token is used by forms to prevent cross site forgery attempts<br />    </span><span class="keyword">if(!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'nonce'</span><span class="keyword">]) || </span><span class="default">$reload</span><span class="keyword">)<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'nonce'</span><span class="keyword">] = </span><span class="default">md5</span><span class="keyword">(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">));<br /><br />    if(!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'IPaddress'</span><span class="keyword">]) || </span><span class="default">$reload</span><span class="keyword">)<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'IPaddress'</span><span class="keyword">] = </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">];<br /><br />    if(!isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'userAgent'</span><span class="keyword">]) || </span><span class="default">$reload</span><span class="keyword">)<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'userAgent'</span><span class="keyword">] = </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">];<br /><br />    </span><span class="comment">//$_SESSION['user_id'] = $this-&gt;user-&gt;getId();<br /><br />    // Set current session to expire in 1 minute<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'OBSOLETE'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'EXPIRES'</span><span class="keyword">] = </span><span class="default">time</span><span class="keyword">() + </span><span class="default">60</span><span class="keyword">;<br /><br />    </span><span class="comment">// Create new session without destroying the old one<br />    </span><span class="default">session_regenerate_id</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br /><br />    </span><span class="comment">// Grab current session ID and close both sessions to allow other scripts to use them<br />    </span><span class="default">$newSession </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br />    </span><span class="default">session_write_close</span><span class="keyword">();<br /><br />    </span><span class="comment">// Set session ID to the new one, and start it back up again<br />    </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$newSession</span><span class="keyword">);<br />    </span><span class="default">session_start</span><span class="keyword">();<br /><br />    </span><span class="comment">// Don't want this one to expire<br />    </span><span class="keyword">unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'OBSOLETE'</span><span class="keyword">]);<br />    unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'EXPIRES'</span><span class="keyword">]);<br />}<br /><br />function </span><span class="default">checkSession</span><span class="keyword">()<br />{<br />    try{<br />        if(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'OBSOLETE'</span><span class="keyword">] &amp;&amp; (</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'EXPIRES'</span><span class="keyword">] &lt; </span><span class="default">time</span><span class="keyword">()))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Attempt to use expired session.'</span><span class="keyword">);<br /><br />        if(!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">]))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'No session started.'</span><span class="keyword">);<br /><br />        if(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'IPaddress'</span><span class="keyword">] != </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">])<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'IP Address mixmatch (possible session hijacking attempt).'</span><span class="keyword">);<br /><br />        if(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'userAgent'</span><span class="keyword">] != </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">])<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Useragent mixmatch (possible session hijacking attempt).'</span><span class="keyword">);<br /><br />        if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">loadUser</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">]))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Attempted to log in user that does not exist with ID: ' </span><span class="keyword">. </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">]);<br /><br />        if(!</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'OBSOLETE'</span><span class="keyword">] &amp;&amp; </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">regenerateSession</span><span class="keyword">();<br />        }<br /><br />        return </span><span class="default">true</span><span class="keyword">;<br /><br />    }catch(</span><span class="default">Exception $e</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129147">  <div class="votes">
    <div id="Vu129147">
    <a href="/manual/vote-note.php?id=129147&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129147">
    <a href="/manual/vote-note.php?id=129147&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129147" title="100% like this...">
    3
    </div>
  </div>
  <a href="#129147" class="name">
  <strong class="user"><em>Rumour</em></strong></a><a class="genanchor" href="#129147"> &para;</a><div class="date" title="2024-01-07 06:47"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129147">
<div class="phpcode"><code><span class="html">The code example provided of my_session_regenerate_id() DOES NOT work and DESTROYS all session variables. Plus the second ini_set gives an error.<br /><br />The code for regenerating (only that part, the rest seems fine) should simply be this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_session_regenerate_id</span><span class="keyword">() {<br />    </span><span class="default">$new_session_id </span><span class="keyword">= </span><span class="default">session_create_id</span><span class="keyword">();<br /><br />    </span><span class="comment">// backup session variables<br />    </span><span class="default">$keepSession </span><span class="keyword">= </span><span class="default">$_SESSION </span><span class="keyword">;<br /><br />    </span><span class="comment">// add info for users with bad connection not receiving the new session id<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'new_session_id'</span><span class="keyword">] = </span><span class="default">$new_session_id</span><span class="keyword">;        <br />    </span><span class="comment">// Set destroy timestamp<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'destroyed'</span><span class="keyword">] = </span><span class="default">time</span><span class="keyword">();<br />    <br />    </span><span class="comment">// Write and close current session;<br />    </span><span class="default">session_commit</span><span class="keyword">() ;<br /><br />    </span><span class="comment">// Start session with new session ID     <br />    </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'session.use_strict_mode'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$new_session_id</span><span class="keyword">);<br />    </span><span class="default">session_start</span><span class="keyword">();<br />    </span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$keepSession </span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119418">  <div class="votes">
    <div id="Vu119418">
    <a href="/manual/vote-note.php?id=119418&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119418">
    <a href="/manual/vote-note.php?id=119418&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119418" title="80% like this...">
    13
    </div>
  </div>
  <a href="#119418" class="name">
  <strong class="user"><em>ei dot rik dot ops dot tad at gmail dot com</em></strong></a><a class="genanchor" href="#119418"> &para;</a><div class="date" title="2016-06-02 10:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119418">
<div class="phpcode"><code><span class="html">In PHP 5.6 (and probably older versions), session_regenerate_id(true) do not trigger a read() call to the session handler for the new session id. <br /><br />In PHP 7, read() is triggered during session_regenerate_id(true). Nice to know when working with custom session handlers.</span></code></div>
  </div>
 </div>
  <div class="note" id="105596">  <div class="votes">
    <div id="Vu105596">
    <a href="/manual/vote-note.php?id=105596&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105596">
    <a href="/manual/vote-note.php?id=105596&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105596" title="78% like this...">
    8
    </div>
  </div>
  <a href="#105596" class="name">
  <strong class="user"><em>gr at gr5 dot org</em></strong></a><a class="genanchor" href="#105596"> &para;</a><div class="date" title="2011-08-30 06:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105596">
<div class="phpcode"><code><span class="html">If you are trying to maintain 2 active sessions don't use session_regenerate_id().  Especially if the first session is closed and it's time to open the second.  Because the session id is cached you also have to explicitly set it the second time.<br /><br /><span class="default">&lt;?php<br />session_name</span><span class="keyword">(</span><span class="string">'PHPSESSID'</span><span class="keyword">); </span><span class="comment">// redundant - here for clarity<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">// ...do stuff<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">// now switch to session 2...<br /></span><span class="default">session_name</span><span class="keyword">(</span><span class="string">'PHPSESSID_2'</span><span class="keyword">);<br />if (isset(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'phpsessid_2'</span><span class="keyword">]))<br />    </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$_COOKIE</span><span class="keyword">[</span><span class="string">'phpsessid_2'</span><span class="keyword">]); </span><span class="comment">// not doing this will simply reopen the first session again<br /></span><span class="keyword">else<br />    </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">()); </span><span class="comment">// dont use session_regenerate_id() here.  Not creating a new id will create two cookies with same session id and same session variables<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">// ... do stuff with session 2<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47417">  <div class="votes">
    <div id="Vu47417">
    <a href="/manual/vote-note.php?id=47417&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47417">
    <a href="/manual/vote-note.php?id=47417&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47417" title="70% like this...">
    13
    </div>
  </div>
  <a href="#47417" class="name">
  <strong class="user"><em>ross at kndr dot org</em></strong></a><a class="genanchor" href="#47417"> &para;</a><div class="date" title="2004-11-15 03:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47417">
<div class="phpcode"><code><span class="html">In a previous note, php at 5mm de describes how to prevent session hijacking by<br />ensuring that the session id provided matches the HTTP_USER_AGENT and REMOTE_ADDR fields that were present when the session id was first issued.  It should be noted that HTTP_USER_AGENT is supplied by the client, and so can be easily modified by a malicious user.  Also, the client IP addresses can be spoofed, although that's a bit more difficult.  Care should be taken when relying on the session for authentication.</span></code></div>
  </div>
 </div>
  <div class="note" id="107323">  <div class="votes">
    <div id="Vu107323">
    <a href="/manual/vote-note.php?id=107323&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107323">
    <a href="/manual/vote-note.php?id=107323&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107323" title="66% like this...">
    10
    </div>
  </div>
  <a href="#107323" class="name">
  <strong class="user"><em>spmtrap at yahoo dot com</em></strong></a><a class="genanchor" href="#107323"> &para;</a><div class="date" title="2012-01-31 02:48"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107323">
<div class="phpcode"><code><span class="html">`session_regenerate_id` sends a new cookie but doesn't overwrite the value stored in `$_COOKIE`. After calling `session_destroy`, the open session ID is discarded, so simply restarting the session with `session_start` (as done in Ben Johnson's code) will re-open the original, though now empty, session for the current request (subsequent requests will use the new session ID). Instead of `session_destroy`+`session_start`, use the `$delete_old_session` parameter to `session_regenerate_id` to delete the previous session data.<br /><br /><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br /></span><span class="comment">/* Create a new session, deleting the previous session data. */<br /></span><span class="default">session_regenerate_id</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="comment">/* erase data carried over from previous session */<br /></span><span class="default">$_SESSION</span><span class="keyword">=array();<br /></span><span class="default">?&gt;<br /></span><br />To start a new session and leave the old untouched, simply leave out the argument to `session_regenerate_id`.</span></code></div>
  </div>
 </div>
  <div class="note" id="48353">  <div class="votes">
    <div id="Vu48353">
    <a href="/manual/vote-note.php?id=48353&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48353">
    <a href="/manual/vote-note.php?id=48353&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48353" title="68% like this...">
    6
    </div>
  </div>
  <a href="#48353" class="name">
  <strong class="user"><em>php at cny dot de</em></strong></a><a class="genanchor" href="#48353"> &para;</a><div class="date" title="2004-12-20 09:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48353">
<div class="phpcode"><code><span class="html">Also note that REMOTE_ADDR may change on every request if the user comes through a proxy farm. Most AOL-users do.</span></code></div>
  </div>
 </div>
  <div class="note" id="40130">  <div class="votes">
    <div id="Vu40130">
    <a href="/manual/vote-note.php?id=40130&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40130">
    <a href="/manual/vote-note.php?id=40130&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40130" title="71% like this...">
    3
    </div>
  </div>
  <a href="#40130" class="name">
  <strong class="user"><em>babel at  nosqamplease sympatico ca</em></strong></a><a class="genanchor" href="#40130"> &para;</a><div class="date" title="2004-02-22 08:48"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40130">
<div class="phpcode"><code><span class="html">To add to php at 5mm de's comments:<br /><br />If the session is held over https, it's even better to save the client's cert or ssl session id instead of the hostname or ip, as it's proxy-transparent and more secure.</span></code></div>
  </div>
 </div>
  <div class="note" id="120430">  <div class="votes">
    <div id="Vu120430">
    <a href="/manual/vote-note.php?id=120430&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120430">
    <a href="/manual/vote-note.php?id=120430&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120430" title="66% like this...">
    2
    </div>
  </div>
  <a href="#120430" class="name">
  <strong class="user"><em>k-gun !! mail</em></strong></a><a class="genanchor" href="#120430"> &para;</a><div class="date" title="2017-01-08 11:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120430">
<div class="phpcode"><code><span class="html">Document example is wrong with usage of "session.use_strict_mode" according to RFC (says: "warning error for session_id() when use_strice_mode=1" on <a href="https://wiki.php.net/rfc/strict_sessions" rel="nofollow" target="_blank">https://wiki.php.net/rfc/strict_sessions</a>). <br /><br />So, this directive affects "session_id()" not "session_start()". So usage must be like this;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// first set ini<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'session.use_strict_mode'</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br /></span><span class="comment">// and <br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$sid</span><span class="keyword">);<br /><br /></span><span class="comment">// then <br />// maybe run this: ini_restore('session.use_strict_mode');<br /><br />// then go on...<br /></span><span class="default">?&gt;<br /></span><br />Refs (ctrl+f &amp; use_strict_mode);<br /><a href="https://wiki.php.net/rfc/strict_sessions" rel="nofollow" target="_blank">https://wiki.php.net/rfc/strict_sessions</a><br /><a href="https://wiki.php.net/rfc/session-create-id" rel="nofollow" target="_blank">https://wiki.php.net/rfc/session-create-id</a><br /><a href="http://php.net/manual/en/function.session-id.php#119997" rel="nofollow" target="_blank">http://php.net/manual/en/function.session-id.php#119997</a></span></code></div>
  </div>
 </div>
  <div class="note" id="35332">  <div class="votes">
    <div id="Vu35332">
    <a href="/manual/vote-note.php?id=35332&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35332">
    <a href="/manual/vote-note.php?id=35332&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35332" title="66% like this...">
    3
    </div>
  </div>
  <a href="#35332" class="name">
  <strong class="user"><em>madsen at sjovedyr.dk</em></strong></a><a class="genanchor" href="#35332"> &para;</a><div class="date" title="2003-08-27 07:26"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35332">
<div class="phpcode"><code><span class="html">I had problems with a proxy changing a visitors session_id-cookie, so he'd get a LOT of errors when visiting my site.<br />I handled the bogus session-id's like this. (Note: It only works in versions &gt; 4.3.2.)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Start a session and suppress error-messages.<br /></span><span class="keyword">@</span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">// Catch bogus session-id's.<br /></span><span class="keyword">if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[0-9a-z]*$/i"</span><span class="keyword">, </span><span class="default">session_id</span><span class="keyword">())) {<br /><br />    </span><span class="comment">// Output a warning about the messed up session-id.<br />    </span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">handleError</span><span class="keyword">(</span><span class="string">"WARN"</span><span class="keyword">, </span><span class="string">"Your session id is messed up, you might not be able to use some features on this site."</span><span class="keyword">);<br /><br />    </span><span class="comment">// Generate a fresh session-id.<br />    </span><span class="default">session_regenerate_id</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// Site contents.<br /></span><span class="default">?&gt;<br /></span><br />Hope someone can use it.</span></code></div>
  </div>
 </div>
  <div class="note" id="53480">  <div class="votes">
    <div id="Vu53480">
    <a href="/manual/vote-note.php?id=53480&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53480">
    <a href="/manual/vote-note.php?id=53480&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53480" title="54% like this...">
    1
    </div>
  </div>
  <a href="#53480" class="name">
  <strong class="user"><em>Nicolas dot Chachereau at Infomaniak dot ch</em></strong></a><a class="genanchor" href="#53480"> &para;</a><div class="date" title="2005-06-02 11:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53480">
<div class="phpcode"><code><span class="html">Session_destroy() does not only destroy the data associated with the current session_id (i.e. the file if you use the default session save handler), but also the session itself: if you call session_destroy() and then session_regenerate_id(), it will return false, and session_id() won't return anything. In order to manipulate a session after destroying it, you need to restart it.<br /><br />So in fact, the code mentionned by chris won't work. If you want to destroy the file associated with the old session_id, try the following:<br /><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br /></span><span class="default">$old_sessid </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br /></span><span class="default">session_regenerate_id</span><span class="keyword">();<br /></span><span class="default">$new_sessid </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$old_sessid</span><span class="keyword">);<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /><br /></span><span class="comment">//If you don't copy the $_SESSION array, you won't be able to use the data associated with the old session id.<br /></span><span class="default">$old_session </span><span class="keyword">= </span><span class="default">$_SESSION</span><span class="keyword">;<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$new_sessid</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$old_session</span><span class="keyword">;<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;<br /></span><br />Note: this technique will send 3 Set-Cookie headers (one on each session_start() and one on session_regenerate_id()). I don't think this is a problem, but if it appears to be one, you could either leave it alone and wait for the garbage collector to catch the file associated with the old session, or try to delete the file with unlink().</span></code></div>
  </div>
 </div>
  <div class="note" id="85433">  <div class="votes">
    <div id="Vu85433">
    <a href="/manual/vote-note.php?id=85433&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85433">
    <a href="/manual/vote-note.php?id=85433&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85433" title="52% like this...">
    1
    </div>
  </div>
  <a href="#85433" class="name">
  <strong class="user"><em>soapergem at gmail dot com</em></strong></a><a class="genanchor" href="#85433"> &para;</a><div class="date" title="2008-08-29 03:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85433">
<div class="phpcode"><code><span class="html">This can be a very dangerous function if you're not careful about how you handle things, because even though it generates a whole new set of session data, it keeps the old data "open" until the script terminates, locking out any other scripts trying to run concurrently with the old session id.<br /><br />Recently I came across a situation where I wanted to explicitly pass in a session ID, copy the data from that session into a *new* session, and then continue operating under that new session, thereby allowing other scripts to use the old one concurrently. But I quickly found that these "other scripts" would not execute until the first script finished--even though it had already started a new session--because it kept the old session open.<br /><br />So if you're trying to copy over session data to a new session to free up the old session for continued, concurrent use, here's some code to ensure nobody's feet get stepped on:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//  get session id of an existing session<br /></span><span class="default">$sid </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'sid'</span><span class="keyword">];<br /><br /></span><span class="comment">//  start the old session to retrieve $_SESSION data<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$sid</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">//  start a new session; this copies the $_SESSION data over<br /></span><span class="default">session_regenerate_id</span><span class="keyword">();<br /><br /></span><span class="comment">//  hang on to the new session id<br /></span><span class="default">$sid </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">();<br /><br /></span><span class="comment">//  close the old and new sessions<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">//  re-open the new session<br /></span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$sid</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">/* main code here */<br /><br /></span><span class="default">?&gt;<br /></span><br />This could probably be encapsulated into a function with one parameter as well to save space if it was a repeated thing.</span></code></div>
  </div>
 </div>
  <div class="note" id="83842">  <div class="votes">
    <div id="Vu83842">
    <a href="/manual/vote-note.php?id=83842&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83842">
    <a href="/manual/vote-note.php?id=83842&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83842" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83842" class="name">
  <strong class="user"><em>primenetworkzx at gmail dot com</em></strong></a><a class="genanchor" href="#83842"> &para;</a><div class="date" title="2008-06-14 11:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83842">
<div class="phpcode"><code><span class="html">If you are storing your session data in a database you have to manually update the session_id in the database. The session_set_save_handler() will not do it for you.<br /><br />function UpdateSessID() {<br />    $old_sess_id = session_id();<br />    session_regenerate_id(false);<br />    $new_sess_id = session_id();<br />        <br />    $query = "UPDATE `session_table` SET `session_id` = '$new_sess_id' WHERE session_id = '$old_sess_id'";<br />        mysql_query($query);<br />}<br /><br />Be sure to set session_regenerate_id() to FALSE since it's not really necessary to delete the whole record from MySQL and add it again. That's unnecessary overhead. Only changing the id matters.</span></code></div>
  </div>
 </div>
  <div class="note" id="56151">  <div class="votes">
    <div id="Vu56151">
    <a href="/manual/vote-note.php?id=56151&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56151">
    <a href="/manual/vote-note.php?id=56151&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56151" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56151" class="name">
  <strong class="user"><em>dyer85 at gmail dot com</em></strong></a><a class="genanchor" href="#56151"> &para;</a><div class="date" title="2005-08-24 10:59"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56151">
<div class="phpcode"><code><span class="html">There could be a potential problem with elger at NOSPAM dot yellowbee dot nl's a few posts below. In the code, was used the REQUEST_URI server variable, which, in some cases might already contain the query string. Therefore, always apending '?whatever=foo' would occasionally cause the script to malfunction. I suggest using PHP_SELF, which will not contain the query string after the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="121095">  <div class="votes">
    <div id="Vu121095">
    <a href="/manual/vote-note.php?id=121095&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121095">
    <a href="/manual/vote-note.php?id=121095&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121095" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#121095" class="name">
  <strong class="user"><em>mikebranttx at gmail dot com</em></strong></a><a class="genanchor" href="#121095"> &para;</a><div class="date" title="2017-05-17 03:10"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121095">
<div class="phpcode"><code><span class="html">Note that in current PHP 7.2 nightly builds example #2 above will not work as shown.  You will get following error upon trying to turn strict mode back on after session_start():<br /><br />"ini_set(): A session is active. You cannot change the session module's ini settings at this time"<br /><br />I suppose this means that for any session where you perform session ID regeneration or session ID forwarding (from a session for which a recent session ID regeneration was performed to the new session ID). That you will just have to live with strict mode being disabled for the remainder of that active session.<br /><br />I don't know that this is really a security concern so long as you are following a single-session per request design (i.e. you are not working with multiple concurrent sessions).</span></code></div>
  </div>
 </div>
  <div class="note" id="49105">  <div class="votes">
    <div id="Vu49105">
    <a href="/manual/vote-note.php?id=49105&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49105">
    <a href="/manual/vote-note.php?id=49105&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49105" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#49105" class="name">
  <strong class="user"><em>chris at knowledge dot tee-vee</em></strong></a><a class="genanchor" href="#49105"> &para;</a><div class="date" title="2005-01-16 05:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49105">
<div class="phpcode"><code><span class="html">licp - no, session_regenerate_id() does not destroy any saved session data.<br /><br />elger, I prefer the following order<br /><br />[code]<br />// populate $_SESSION with any previously saved session data for the current session_id<br />session_start();  <br />...<br />// delete any saved data associated with current session_id, $_SESSION is not changed<br />session_destroy(); <br /><br />// change session_id, $_SESSION not altered<br />session_regenerate_id(); <br />...<br />// save any $_SESSION data under the current session_id<br />session_close(); <br />[/code]</span></code></div>
  </div>
 </div>
  <div class="note" id="126437">  <div class="votes">
    <div id="Vu126437">
    <a href="/manual/vote-note.php?id=126437&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126437">
    <a href="/manual/vote-note.php?id=126437&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126437" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#126437" class="name">
  <strong class="user"><em>antomsa at hotmail dot it</em></strong></a><a class="genanchor" href="#126437"> &para;</a><div class="date" title="2021-09-18 02:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126437">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /><br /></span><span class="keyword">function </span><span class="default">my_session_regenerate_id</span><span class="keyword">() {<br />    ...<br />    </span><span class="default">session_start</span><span class="keyword">();<br />    ...<br />    <br />    unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'destroyed'</span><span class="keyword">]);<br />    unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'new_session_id'</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Within my_session_regenerate_id(), unset($_SESSION['destroyed']) and <br /> unset($_SESSION['new_session_id']) are useless because session_start() will open an empty session. They would be needed if built-in session_regenerate_id() was called.</span></code></div>
  </div>
 </div>
  <div class="note" id="113745">  <div class="votes">
    <div id="Vu113745">
    <a href="/manual/vote-note.php?id=113745&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113745">
    <a href="/manual/vote-note.php?id=113745&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113745" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#113745" class="name">
  <strong class="user"><em>kgm_india at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#113745"> &para;</a><div class="date" title="2013-11-25 11:40"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113745">
<div class="phpcode"><code><span class="html">as far as I have understood reading this online notes,<br /><br />session_name() is the name which is identified as session a through the cookies or http links.<br /><br />session_id is  like a transaction within a session_name() and one session_name may have many session_id<br /><br />each session_id has the corresponding data stored.<br /><br />session_id are used in read and write callback under a session_name<br /><br />whatever it is, first call the<br /> session_name(),  <br />then call session_id ()<br />and then call start_session()<br /><br />start_session will open the session_name, then check the session_id called before and use it in the read or write call back for storing or retrieving data<br /><br />calling start_session() without session_name or session_id will use the default session_name and the default session_id in that order<br /><br />I hope if the order is followed there should not be any problems.<br /><br />do not call session_name or session_id after start_session(), if you are specific on using them.<br /><br />thank you for others note.</span></code></div>
  </div>
 </div>
  <div class="note" id="100124">  <div class="votes">
    <div id="Vu100124">
    <a href="/manual/vote-note.php?id=100124&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100124">
    <a href="/manual/vote-note.php?id=100124&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100124" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#100124" class="name">
  <strong class="user"><em>raido dot aasoja at gmail dot com</em></strong></a><a class="genanchor" href="#100124"> &para;</a><div class="date" title="2010-09-26 11:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100124">
<div class="phpcode"><code><span class="html">A note on lost sessions and trying to fix it with session_regenerate_id:<br />Make sure that you're not trying to push SimpleXML object to the session. It just won't go without first converting it to array. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="56912">  <div class="votes">
    <div id="Vu56912">
    <a href="/manual/vote-note.php?id=56912&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56912">
    <a href="/manual/vote-note.php?id=56912&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56912" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#56912" class="name">
  <strong class="user"><em>sopel</em></strong></a><a class="genanchor" href="#56912"> &para;</a><div class="date" title="2005-09-19 05:32"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56912">
<div class="phpcode"><code><span class="html">for php 5.1&gt; user probably worth visiting is <a href="http://ilia.ws/archives/47-session_regenerate_id-Improvement.html" rel="nofollow" target="_blank">http://ilia.ws/archives/47-session_regenerate_id-Improvement.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="122891">  <div class="votes">
    <div id="Vu122891">
    <a href="/manual/vote-note.php?id=122891&amp;page=function.session-regenerate-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122891">
    <a href="/manual/vote-note.php?id=122891&amp;page=function.session-regenerate-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122891" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#122891" class="name">
  <strong class="user"><em>Alamin</em></strong></a><a class="genanchor" href="#122891"> &para;</a><div class="date" title="2018-06-28 02:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122891">
<div class="phpcode"><code><span class="html">In the second example provided by php.net, should it call my_session_start inside the session regenerate method instead of directly calling session_start? I think it is an error.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-regenerate-id&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-regenerate-id.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
