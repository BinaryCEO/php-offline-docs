<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_create_id - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-create-id.php">
 <link rel="shorturl" href="https://www.php.net/session-create-id">
 <link rel="alternate" href="https://www.php.net/session-create-id" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-commit.php">
 <link rel="next" href="https://www.php.net/manual/en/function.session-decode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-create-id.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-create-id.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-create-id.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-create-id.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-create-id.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-create-id.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-create-id.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-create-id.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-create-id.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-create-id.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-create-id.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create new session id" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_create_id - Manual" />
<meta name="twitter:description" content="Create new session id" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_create_id - Manual" />
<meta itemprop="description" content="Create new session id" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create new session id" />

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
        <a href="function.session-decode.php">
          session_decode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-commit.php">
          &laquo; session_commit        </a>
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
            <option value='en/function.session-create-id.php' selected="selected">English</option>
            <option value='de/function.session-create-id.php'>German</option>
            <option value='es/function.session-create-id.php'>Spanish</option>
            <option value='fr/function.session-create-id.php'>French</option>
            <option value='it/function.session-create-id.php'>Italian</option>
            <option value='ja/function.session-create-id.php'>Japanese</option>
            <option value='pt_BR/function.session-create-id.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-create-id.php'>Russian</option>
            <option value='tr/function.session-create-id.php'>Turkish</option>
            <option value='uk/function.session-create-id.php'>Ukrainian</option>
            <option value='zh/function.session-create-id.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-create-id" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_create_id</h1>
  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">session_create_id</span> &mdash; <span class="dc-title">Create new session id</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.session-create-id-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_create_id</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>session_create_id()</strong></span> is used to create new
   session id for the current session. It returns collision free
   session id.
  </p>
  <p class="para">
   If session is not active, collision check is omitted.
  </p>
  <p class="para">
   Session ID is created according to php.ini settings.
  </p>
  <p class="para">
   It is important to use the same user ID of your web server for GC
   task script. Otherwise, you may have permission problems especially
   with files save handler.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-create-id-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">prefix</code></dt>
      <dd>
       <p class="para">
        If <code class="parameter">prefix</code> is specified, new session id
        is prefixed by <code class="parameter">prefix</code>. Not all
        characters are allowed within the session id.  Characters in
        the range <code class="literal">[a-zA-Z0-9,-]</code> are allowed. Maximum length is 256 characters.
       </p> 
      </dd>
     
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-create-id-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>session_create_id()</strong></span> returns new collision free
   session id for the current session. If it is used without active
   session, it omits collision check.
   On failure, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.session-create-id-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5003">
    <p><strong>Example #1 <span class="function"><strong>session_create_id()</strong></span> example with <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// My session start function support timestamp management<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_session_start</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Do not allow to use too old session ID<br />    </span><span style="color: #007700">if (!empty(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'deleted_time'</span><span style="color: #007700">]) &amp;&amp; </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'deleted_time'</span><span style="color: #007700">] &lt; </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">180</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">session_destroy</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// My session regenerate id function<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_session_regenerate_id</span><span style="color: #007700">() {<br />    </span><span style="color: #FF8000">// Call session_create_id() while session is active to <br />    // make sure collision free.<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">session_status</span><span style="color: #007700">() != </span><span style="color: #0000BB">PHP_SESSION_ACTIVE</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />    }<br />    </span><span style="color: #FF8000">// WARNING: Never use confidential strings for prefix!<br />    </span><span style="color: #0000BB">$newid </span><span style="color: #007700">= </span><span style="color: #0000BB">session_create_id</span><span style="color: #007700">(</span><span style="color: #DD0000">'myprefix-'</span><span style="color: #007700">);<br />    </span><span style="color: #FF8000">// Set deleted timestamp. Session data must not be deleted immediately for reasons.<br />    </span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'deleted_time'</span><span style="color: #007700">] = </span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Finish session<br />    </span><span style="color: #0000BB">session_commit</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Make sure to accept user defined session ID<br />    // NOTE: You must enable use_strict_mode for normal operations.<br />    </span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_strict_mode'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />    </span><span style="color: #FF8000">// Set new custom session ID<br />    </span><span style="color: #0000BB">session_id</span><span style="color: #007700">(</span><span style="color: #0000BB">$newid</span><span style="color: #007700">);<br />    </span><span style="color: #FF8000">// Start with custom session ID<br />    </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #FF8000">// Make sure use_strict_mode is enabled.<br />// use_strict_mode is mandatory for security reasons.<br /></span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_strict_mode'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">my_session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Session ID must be regenerated when<br />//  - User logged in<br />//  - User logged out<br />//  - Certain period has passed<br /></span><span style="color: #0000BB">my_session_regenerate_id</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Write useful codes<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-create-id-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.session-regenerate-id.php" class="function" rel="rdfs-seeAlso">session_regenerate_id()</a> - Update the current session id with a newly generated one</span></li>
    <li><span class="function"><a href="function.session-start.php" class="function" rel="rdfs-seeAlso">session_start()</a> - Start new or resume existing session</span></li>
    <li><a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a></li>
    <li><span class="methodname"><a href="sessionhandler.create-sid.php" class="methodname" rel="rdfs-seeAlso">SessionHandler::create_sid()</a> - Return a new session ID</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-create-id.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-create-id%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-create-id&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-create-id.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121945">  <div class="votes">
    <div id="Vu121945">
    <a href="/manual/vote-note.php?id=121945&amp;page=function.session-create-id&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121945">
    <a href="/manual/vote-note.php?id=121945&amp;page=function.session-create-id&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121945" title="56% like this...">
    3
    </div>
  </div>
  <a href="#121945" class="name">
  <strong class="user"><em>rowan dot collins at gmail dot com</em></strong></a><a class="genanchor" href="#121945"> &para;</a><div class="date" title="2017-11-29 03:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121945">
<div class="phpcode"><code><span class="html">This function is very hard to replicate precisely in userland code, because if a session is already started, it will attempt to detect collisions using the new "validate_sid" session handler callback, which did not exist in earlier PHP versions.<br /><br />If the handler you are using implements the "create_sid" callback, collisions may be detected there. This is called when you use session_regenerate_id(), so you could use that to create a new session, note its ID, then switch back to the old session ID. If no session is started, or the current handler doesn't implement "create_sid" and "validate_sid", neither this function nor session_regenerate_id() will guarantee collision resistance anyway.<br /><br />If you have a suitable definition of random_bytes (a library is available to provide this for versions right back to PHP 5.3), you can use the following to generate a session ID in the same format PHP 7.1 would use. $bits_per_character should be 4, 5, or 6, corresponding to the values of the session.hash_bits_per_character / session.sid_bits_per_character ini setting. You will then need to detect collisions manually, e.g. by opening the session and confirming that $_SESSION is empty.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">session_create_random_id</span><span class="keyword">(</span><span class="default">$desired_output_length</span><span class="keyword">, </span><span class="default">$bits_per_character</span><span class="keyword">)<br />{<br />    </span><span class="default">$bytes_needed </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$desired_output_length </span><span class="keyword">* </span><span class="default">$bits_per_character </span><span class="keyword">/ </span><span class="default">8</span><span class="keyword">);<br />    </span><span class="default">$random_input_bytes </span><span class="keyword">= </span><span class="default">random_bytes</span><span class="keyword">(</span><span class="default">$bytes_needed</span><span class="keyword">);<br />    <br />    </span><span class="comment">// The below is translated from function bin_to_readable in the PHP source (ext/session/session.c)<br />    </span><span class="keyword">static </span><span class="default">$hexconvtab </span><span class="keyword">= </span><span class="string">'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,-'</span><span class="keyword">;<br />    <br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    <br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$q </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$random_input_bytes</span><span class="keyword">);<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$have </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    <br />    </span><span class="default">$mask </span><span class="keyword">= (</span><span class="default">1 </span><span class="keyword">&lt;&lt; </span><span class="default">$bits_per_character</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br /><br />    </span><span class="default">$chars_remaining </span><span class="keyword">= </span><span class="default">$desired_output_length</span><span class="keyword">;<br />    while (</span><span class="default">$chars_remaining</span><span class="keyword">--) {<br />        if (</span><span class="default">$have </span><span class="keyword">&lt; </span><span class="default">$bits_per_character</span><span class="keyword">) {<br />            if (</span><span class="default">$p </span><span class="keyword">&lt; </span><span class="default">$q</span><span class="keyword">) {<br />                </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">( </span><span class="default">$random_input_bytes</span><span class="keyword">[</span><span class="default">$p</span><span class="keyword">++] );<br />                </span><span class="default">$w </span><span class="keyword">|= (</span><span class="default">$byte </span><span class="keyword">&lt;&lt; </span><span class="default">$have</span><span class="keyword">);<br />                </span><span class="default">$have </span><span class="keyword">+= </span><span class="default">8</span><span class="keyword">;<br />            } else {<br />                </span><span class="comment">// Should never happen. Input must be large enough.<br />                </span><span class="keyword">break;<br />            }<br />        }<br /><br />        </span><span class="comment">// consume $bits_per_character bits<br />        </span><span class="default">$out </span><span class="keyword">.= </span><span class="default">$hexconvtab</span><span class="keyword">[</span><span class="default">$w </span><span class="keyword">&amp; </span><span class="default">$mask</span><span class="keyword">];<br />        </span><span class="default">$w </span><span class="keyword">&gt;&gt;= </span><span class="default">$bits_per_character</span><span class="keyword">;<br />        </span><span class="default">$have </span><span class="keyword">-= </span><span class="default">$bits_per_character</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-create-id&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-create-id.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
