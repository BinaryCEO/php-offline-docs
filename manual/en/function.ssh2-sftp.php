<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2_sftp - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ssh2-sftp.php">
 <link rel="shorturl" href="https://www.php.net/ssh2-sftp">
 <link rel="alternate" href="https://www.php.net/ssh2-sftp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssh2-send-eof.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-sftp-chmod.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ssh2-sftp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ssh2-sftp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ssh2-sftp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ssh2-sftp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ssh2-sftp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ssh2-sftp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ssh2-sftp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ssh2-sftp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ssh2-sftp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ssh2-sftp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ssh2-sftp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initialize SFTP subsystem" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2_sftp - Manual" />
<meta name="twitter:description" content="Initialize SFTP subsystem" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2_sftp - Manual" />
<meta itemprop="description" content="Initialize SFTP subsystem" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initialize SFTP subsystem" />

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
        <a href="function.ssh2-sftp-chmod.php">
          ssh2_sftp_chmod &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssh2-send-eof.php">
          &laquo; ssh2_send_eof        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ssh2.php'>SSH2</a></li>      <li><a href='ref.ssh2.php'>SSH2 Functions</a></li>      </ul>
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
            <option value='en/function.ssh2-sftp.php' selected="selected">English</option>
            <option value='de/function.ssh2-sftp.php'>German</option>
            <option value='es/function.ssh2-sftp.php'>Spanish</option>
            <option value='fr/function.ssh2-sftp.php'>French</option>
            <option value='it/function.ssh2-sftp.php'>Italian</option>
            <option value='ja/function.ssh2-sftp.php'>Japanese</option>
            <option value='pt_BR/function.ssh2-sftp.php'>Brazilian Portuguese</option>
            <option value='ru/function.ssh2-sftp.php'>Russian</option>
            <option value='tr/function.ssh2-sftp.php'>Turkish</option>
            <option value='uk/function.ssh2-sftp.php'>Ukrainian</option>
            <option value='zh/function.ssh2-sftp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ssh2-sftp" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2_sftp</h1>
  <p class="verinfo">(PECL ssh2 &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">ssh2_sftp</span> &mdash; <span class="dc-title">Initialize SFTP subsystem</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ssh2-sftp-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ssh2_sftp</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$session</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Request the SFTP subsystem from an already connected SSH2 server.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ssh2-sftp-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">session</code></dt>
     <dd>
      <p class="para">
       An SSH connection link identifier, obtained from a call to
       <span class="function"><a href="function.ssh2-connect.php" class="function">ssh2_connect()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ssh2-sftp-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This method returns an <code class="literal">SSH2 SFTP</code> resource for use with
   all other ssh2_sftp_*() methods and the
   <a href="wrappers.ssh2.php" class="link">ssh2.sftp://</a> fopen wrapper,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ssh2-sftp-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4826">
    <p><strong>Example #1 Opening a file via SFTP</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'shell.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ssh2_auth_password</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'password'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_sftp</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'ssh2.sftp://' </span><span style="color: #007700">. </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$sftp</span><span style="color: #007700">) . </span><span style="color: #DD0000">'/path/to/file'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ssh2-sftp-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ssh2-scp-recv.php" class="function" rel="rdfs-seeAlso">ssh2_scp_recv()</a> - Request a file via SCP</span></li>
    <li><span class="function"><a href="function.ssh2-scp-send.php" class="function" rel="rdfs-seeAlso">ssh2_scp_send()</a> - Send a file via SCP</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/functions/ssh2-sftp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ssh2-sftp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ssh2-sftp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-sftp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="71197">  <div class="votes">
    <div id="Vu71197">
    <a href="/manual/vote-note.php?id=71197&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71197">
    <a href="/manual/vote-note.php?id=71197&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71197" title="63% like this...">
    50
    </div>
  </div>
  <a href="#71197" class="name">
  <strong class="user"><em>David Barnes</em></strong></a><a class="genanchor" href="#71197"> &para;</a><div class="date" title="2006-11-15 03:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71197">
<div class="phpcode"><code><span class="html">Here is an example of how to send a file with SFTP:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">SFTPConnection<br /></span><span class="keyword">{<br />    private </span><span class="default">$connection</span><span class="keyword">;<br />    private </span><span class="default">$sftp</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">=</span><span class="default">22</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= @</span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />        if (! </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not connect to </span><span class="default">$host</span><span class="string"> on port </span><span class="default">$port</span><span class="string">."</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">login</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)<br />    {<br />        if (! @</span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not authenticate with username </span><span class="default">$username</span><span class="string"> " </span><span class="keyword">.<br />                                </span><span class="string">"and password </span><span class="default">$password</span><span class="string">."</span><span class="keyword">);<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp </span><span class="keyword">= @</span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br />        if (! </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not initialize SFTP subsystem."</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">uploadFile</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$remote_file</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />        </span><span class="default">$stream </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /><br />        if (! </span><span class="default">$stream</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not open file: </span><span class="default">$remote_file</span><span class="string">"</span><span class="keyword">);<br /><br />        </span><span class="default">$data_to_send </span><span class="keyword">= @</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">);<br />        if (</span><span class="default">$data_to_send </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not open local file: </span><span class="default">$local_file</span><span class="string">."</span><span class="keyword">);<br /><br />        if (@</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$data_to_send</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not send data from file: </span><span class="default">$local_file</span><span class="string">."</span><span class="keyword">);<br /><br />        @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br />    }<br />}<br /><br />try<br />{<br />    </span><span class="default">$sftp </span><span class="keyword">= new </span><span class="default">SFTPConnection</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">login</span><span class="keyword">(</span><span class="string">"username"</span><span class="keyword">, </span><span class="string">"password"</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">uploadFile</span><span class="keyword">(</span><span class="string">"/tmp/to_be_sent"</span><span class="keyword">, </span><span class="string">"/tmp/to_be_received"</span><span class="keyword">);<br />}<br />catch (</span><span class="default">Exception $e</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117349">  <div class="votes">
    <div id="Vu117349">
    <a href="/manual/vote-note.php?id=117349&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117349">
    <a href="/manual/vote-note.php?id=117349&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117349" title="63% like this...">
    6
    </div>
  </div>
  <a href="#117349" class="name">
  <strong class="user"><em>Josh</em></strong></a><a class="genanchor" href="#117349"> &para;</a><div class="date" title="2015-05-25 08:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117349">
<div class="phpcode"><code><span class="html">Note that you must enter the full wrapper URI order for functions that accept those parameters to work properly. For example, this (which is referenced more than once in other comments) does not work:<br /><br />while (false !== ($file = readdir($handle))) if (is_dir($file)) { /* ... */ }<br /><br />This does work:<br /><br />$sc = ssh2_sftp(...);<br />while (false !== ($file = readdir($handle))) if (is_dir("ssh2.s<a href="ftp://$sc/$file" rel="nofollow" target="_blank">ftp://$sc/$file</a>")) { /* ... */ }<br /><br />You need to pass the "path" into these functions as an fopen() wrapper URI.</span></code></div>
  </div>
 </div>
  <div class="note" id="83174">  <div class="votes">
    <div id="Vu83174">
    <a href="/manual/vote-note.php?id=83174&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83174">
    <a href="/manual/vote-note.php?id=83174&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83174" title="61% like this...">
    9
    </div>
  </div>
  <a href="#83174" class="name">
  <strong class="user"><em>bas weerman</em></strong></a><a class="genanchor" href="#83174"> &para;</a><div class="date" title="2008-05-14 12:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83174">
<div class="phpcode"><code><span class="html">I added some functionality for scanning the filesystem and receiving and deleting files.<br /><br />class SFTPConnection<br />{<br />    private $connection;<br />    private $sftp;<br /><br />    public function __construct($host, $port=22)<br />    {<br />        $this-&gt;connection = @ssh2_connect($host, $port);<br />        if (! $this-&gt;connection)<br />            throw new Exception("Could not connect to $host on port $port.");<br />    }<br /><br />    public function login($username, $password)<br />    {<br />        if (! @ssh2_auth_password($this-&gt;connection, $username, $password))<br />            throw new Exception("Could not authenticate with username $username " . "and password $password.");<br />        $this-&gt;sftp = @ssh2_sftp($this-&gt;connection);<br />        if (! $this-&gt;sftp)<br />            throw new Exception("Could not initialize SFTP subsystem.");<br />    }<br /><br />    public function uploadFile($local_file, $remote_file)<br />    {<br />        $sftp = $this-&gt;sftp;<br />        $stream = @fopen("ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>", 'w');<br />        if (! $stream)<br />            throw new Exception("Could not open file: $remote_file");<br />        $data_to_send = @file_get_contents($local_file);<br />        if ($data_to_send === false)<br />            throw new Exception("Could not open local file: $local_file.");<br />        if (@fwrite($stream, $data_to_send) === false)<br />            throw new Exception("Could not send data from file: $local_file.");<br />        @fclose($stream);<br />    }<br />    <br />        function scanFilesystem($remote_file) {<br />              $sftp = $this-&gt;sftp;<br />            $dir = "ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>";  <br />              $tempArray = array();<br />            $handle = opendir($dir);<br />          // List all the files<br />            while (false !== ($file = readdir($handle))) {<br />            if (substr("$file", 0, 1) != "."){<br />              if(is_dir($file)){<br />//                $tempArray[$file] = $this-&gt;scanFilesystem("$dir/$file");<br />               } else {<br />                 $tempArray[]=$file;<br />               }<br />             }<br />            }<br />           closedir($handle);<br />          return $tempArray;<br />        }    <br /><br />    public function receiveFile($remote_file, $local_file)<br />    {<br />        $sftp = $this-&gt;sftp;<br />        $stream = @fopen("ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>", 'r');<br />        if (! $stream)<br />            throw new Exception("Could not open file: $remote_file");<br />        $contents = fread($stream, filesize("ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>"));            <br />        file_put_contents ($local_file, $contents);<br />        @fclose($stream);<br />    }<br />        <br />    public function deleteFile($remote_file){<br />      $sftp = $this-&gt;sftp;<br />      unlink("ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>");<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="84311">  <div class="votes">
    <div id="Vu84311">
    <a href="/manual/vote-note.php?id=84311&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84311">
    <a href="/manual/vote-note.php?id=84311&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84311" title="56% like this...">
    2
    </div>
  </div>
  <a href="#84311" class="name">
  <strong class="user"><em>bas weerman</em></strong></a><a class="genanchor" href="#84311"> &para;</a><div class="date" title="2008-07-08 03:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84311">
<div class="phpcode"><code><span class="html">I changed the read function to:<br /><br />    public function receiveFile($remote_file, $local_file)<br />    {<br />        $sftp = $this-&gt;sftp;<br />        $stream = @fopen("ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>", 'r');<br />        if (! $stream)<br />            throw new Exception("Could not open file: $remote_file");<br />        $size = $this-&gt;getFileSize($remote_file);            <br />        $contents = '';<br />        $read = 0;<br />        $len = $size;<br />        while ($read &lt; $len &amp;&amp; ($buf = fread($stream, $len - $read))) {<br />          $read += strlen($buf);<br />          $contents .= $buf;<br />        }        <br />        file_put_contents ($local_file, $contents);<br />        @fclose($stream);<br />    }<br /><br />    public function getFileSize($file){<br />      $sftp = $this-&gt;sftp;<br />        return filesize("ssh2.s<a href="ftp://$sftp$file" rel="nofollow" target="_blank">ftp://$sftp$file</a>");<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="80671">  <div class="votes">
    <div id="Vu80671">
    <a href="/manual/vote-note.php?id=80671&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80671">
    <a href="/manual/vote-note.php?id=80671&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80671" title="55% like this...">
    2
    </div>
  </div>
  <a href="#80671" class="name">
  <strong class="user"><em>Curtis Wyatt</em></strong></a><a class="genanchor" href="#80671"> &para;</a><div class="date" title="2008-01-28 07:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80671">
<div class="phpcode"><code><span class="html">The sftp class provided by David Barnes works great.  However, if you get errors about fopen and it failing to open a stream, try the fully qualified path on the remote server.<br /><br />For example, if you are uploading a file to /Users/username/Sites/file.txt this may not work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    </span><span class="default">$sftp </span><span class="keyword">= new </span><span class="default">SFTPConnection</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">login</span><span class="keyword">(</span><span class="string">"username"</span><span class="keyword">, </span><span class="string">"password"</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">uploadFile</span><span class="keyword">(</span><span class="string">"/tmp/to_be_sent"</span><span class="keyword">, </span><span class="string">"Sites/file.txt"</span><span class="keyword">);<br />}<br />catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />but this will:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    </span><span class="default">$sftp </span><span class="keyword">= new </span><span class="default">SFTPConnection</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">login</span><span class="keyword">(</span><span class="string">"username"</span><span class="keyword">, </span><span class="string">"password"</span><span class="keyword">);<br />    </span><span class="default">$sftp</span><span class="keyword">-&gt;</span><span class="default">uploadFile</span><span class="keyword">(</span><span class="string">"/tmp/to_be_sent"</span><span class="keyword">, </span><span class="string">"/Users/username/Sites/file.txt"</span><span class="keyword">);<br />}<br />catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Don't assume that since you are connecting as that user that you are starting in its home space.<br /><br />Another possible option is that you need to use <a href="http://us.php.net/manual/en/function.ssh2-sftp-mkdir.php" rel="nofollow" target="_blank">http://us.php.net/manual/en/function.ssh2-sftp-mkdir.php</a> first to make the directory if it does not exist already, and then upload the file into it.</span></code></div>
  </div>
 </div>
  <div class="note" id="114773">  <div class="votes">
    <div id="Vu114773">
    <a href="/manual/vote-note.php?id=114773&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114773">
    <a href="/manual/vote-note.php?id=114773&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114773" title="52% like this...">
    1
    </div>
  </div>
  <a href="#114773" class="name">
  <strong class="user"><em>Jaybee</em></strong></a><a class="genanchor" href="#114773"> &para;</a><div class="date" title="2014-04-03 10:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114773">
<div class="phpcode"><code><span class="html">When uploading (writing) a file you must use an absolute path, not a relative one. <br /><br />If, like me, you want to use a relative path, you can use the following code: <br /><br />$fh=fopen("ssh2.s<a href="ftp://$sftp" rel="nofollow" target="_blank">ftp://$sftp</a>".ssh2_sftp_realpath($sftp,".")."/fileinmyhomedir.txt");</span></code></div>
  </div>
 </div>
  <div class="note" id="94651">  <div class="votes">
    <div id="Vu94651">
    <a href="/manual/vote-note.php?id=94651&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94651">
    <a href="/manual/vote-note.php?id=94651&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94651" title="52% like this...">
    1
    </div>
  </div>
  <a href="#94651" class="name">
  <strong class="user"><em>sandipshah at vthrive dot com</em></strong></a><a class="genanchor" href="#94651"> &para;</a><div class="date" title="2009-11-16 03:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94651">
<div class="phpcode"><code><span class="html">In<br /><br />$stream = fopen("ssh2.s<a href="ftp://$sftp/path/to/file" rel="nofollow" target="_blank">ftp://$sftp/path/to/file</a>", 'r');<br /><br />please make sure that you are specifying the "absolute" path to a file.<br /><br />If not, you'll get errors like<br /><br />"Unable to open file ..."<br /><br />The reasoning is simple ... ssh2.s<a href="ftp://$sftp" rel="nofollow" target="_blank">ftp://$sftp</a> points to the "root" directory on the remote server, where, most likely, one does not have access.<br /><br />It is necessary to point it to your "home" directory.  For example, "ssh2.s<a href="ftp://$sftp/home/username/filename" rel="nofollow" target="_blank">ftp://$sftp/home/username/filename</a>" ... where "/home/username" is where your home directory is.</span></code></div>
  </div>
 </div>
  <div class="note" id="118815">  <div class="votes">
    <div id="Vu118815">
    <a href="/manual/vote-note.php?id=118815&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118815">
    <a href="/manual/vote-note.php?id=118815&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118815" title="100% like this...">
    2
    </div>
  </div>
  <a href="#118815" class="name">
  <strong class="user"><em>webakiro at gmail dot com</em></strong></a><a class="genanchor" href="#118815"> &para;</a><div class="date" title="2016-02-10 03:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118815">
<div class="phpcode"><code><span class="html">If you wish to store once the protocol + ressource used ("ssh2.s<a href="ftp://$sftp" rel="nofollow" target="_blank">ftp://$sftp</a>";)<br />There's a little trick to know... <br />This won't work :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">connect</span><span class="keyword">(){<br />    </span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'shell.example.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br />    </span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);<br />    </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">); <br />    return </span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp</span><span class="string">"</span><span class="keyword">;<br />}<br /></span><span class="default">$remote </span><span class="keyword">= </span><span class="default">connect</span><span class="keyword">();<br /></span><span class="default">is_file</span><span class="keyword">( </span><span class="default">$remote</span><span class="keyword">.</span><span class="string">"/path/to/file"</span><span class="keyword">); <br /></span><span class="comment">// Warning<br />// Message: is_file(): ## is not a valid SSH2 SFTP resource<br /></span><span class="default">?&gt;<br /></span><br />You need to have $sftp still avaible at moment the function (is_file, filesize, fopen, ...) uses it<br />Otherwise, I guess the GC cleans it up and closes the ssh2_stfp connection<br />That's why this work :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">connect</span><span class="keyword">(){<br />    </span><span class="comment">//...<br />    </span><span class="keyword">global </span><span class="default">$sftp</span><span class="keyword">;<br />    </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">); <br />    return </span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp</span><span class="string">"</span><span class="keyword">;<br />}<br /></span><span class="default">$remote </span><span class="keyword">= </span><span class="default">connect</span><span class="keyword">();<br /></span><span class="default">is_file</span><span class="keyword">( </span><span class="default">$remote</span><span class="keyword">.</span><span class="string">"/path/to/file"</span><span class="keyword">);<br /><br /></span><span class="comment">// Or way better :<br /><br /></span><span class="keyword">class </span><span class="default">myClass </span><span class="keyword">{<br />    public function </span><span class="default">connect</span><span class="keyword">(){<br />        </span><span class="comment">//...<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp     </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">); <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">remote   </span><span class="keyword">= </span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>"</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">test</span><span class="keyword">(){<br />        </span><span class="default">is_file</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">remote</span><span class="keyword">.</span><span class="string">"/path/to/file"</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">myClass</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120942">  <div class="votes">
    <div id="Vu120942">
    <a href="/manual/vote-note.php?id=120942&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120942">
    <a href="/manual/vote-note.php?id=120942&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120942" title="100% like this...">
    1
    </div>
  </div>
  <a href="#120942" class="name">
  <strong class="user"><em>Jarrod Christman</em></strong></a><a class="genanchor" href="#120942"> &para;</a><div class="date" title="2017-04-05 01:06"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120942">
<div class="phpcode"><code><span class="html">David's code works wonderfully except for one thing, it wouldn't upload a file until I placed a forward slash after '$sftp'<br />    <br />public function uploadFile($local_file, $remote_file)<br />    {<br />        $sftp = $this-&gt;sftp;<br />        // Original<br />        // "ssh2.s<a href="ftp://$sftp$remote_file" rel="nofollow" target="_blank">ftp://$sftp$remote_file</a>"<br />        $stream = @fopen("ssh2.s<a href="ftp://$sftp/$remote_file" rel="nofollow" target="_blank">ftp://$sftp/$remote_file</a>", 'w');<br /><br />        if (! $stream)<br />            throw new Exception("Could not open file: $remote_file");<br /><br />        $data_to_send = @file_get_contents($local_file);<br />        if ($data_to_send === false)<br />            throw new Exception("Could not open local file: $local_file.");<br /><br />        if (@fwrite($stream, $data_to_send) === false)<br />            throw new Exception("Could not send data from file: $local_file.");<br /><br />        @fclose($stream);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="123878">  <div class="votes">
    <div id="Vu123878">
    <a href="/manual/vote-note.php?id=123878&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123878">
    <a href="/manual/vote-note.php?id=123878&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123878" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123878" class="name">
  <strong class="user"><em>Youz</em></strong></a><a class="genanchor" href="#123878"> &para;</a><div class="date" title="2019-05-23 07:36"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123878">
<div class="phpcode"><code><span class="html">Adding a function to previous class to connect with key instead of user/password<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">loginWithKey</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$publicKey</span><span class="keyword">, </span><span class="default">$privateKey</span><span class="keyword">, </span><span class="default">$passphrase </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />  {<br />    if (!@</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$publicKey</span><span class="keyword">, </span><span class="default">$privateKey</span><span class="keyword">, </span><span class="default">$passphrase</span><span class="keyword">)) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not authenticate with given keys or passphrase"</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp </span><span class="keyword">= @</span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br />    if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not initialize SFTP subsystem."</span><span class="keyword">);<br />    }<br />  }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122568">  <div class="votes">
    <div id="Vu122568">
    <a href="/manual/vote-note.php?id=122568&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122568">
    <a href="/manual/vote-note.php?id=122568&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122568" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122568" class="name">
  <strong class="user"><em>php at kanariepiet dot com</em></strong></a><a class="genanchor" href="#122568"> &para;</a><div class="date" title="2018-03-30 08:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122568">
<div class="phpcode"><code><span class="html">Remember to use stream_set_chunk_size() on the resource for performance reasons, especially if you're uploading large files on links with high latency.<br /><br />SFTP can only send 32K of data in one packet and libssh2 will wait for a response after each packet sent. So with a default chunk size of 8K the upload will be very slow.<br />If you set the chunk size to for example 1Mb, libssh2 will send that chunk in multiple packets of 32K and then wait for a response, making the upload much faster.<br />(see man libssh2_sftp_write for more details)<br /><br /><span class="default">&lt;?php<br />$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'shell.example.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);<br /></span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">);<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp</span><span class="string">/path/to/file"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /><br /></span><span class="default">stream_set_chunk_size</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120853">  <div class="votes">
    <div id="Vu120853">
    <a href="/manual/vote-note.php?id=120853&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120853">
    <a href="/manual/vote-note.php?id=120853&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120853" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120853" class="name">
  <strong class="user"><em>btafoya at briantafoya dot com</em></strong></a><a class="genanchor" href="#120853"> &para;</a><div class="date" title="2017-03-22 03:00"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120853">
<div class="phpcode"><code><span class="html">Here is a modified SFTPConnection class previously posted that returns a recursive directory scanFilesystem method.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">SFTPConnection<br /></span><span class="keyword">{<br />    private </span><span class="default">$connection</span><span class="keyword">;<br />    private </span><span class="default">$sftp</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">=</span><span class="default">22</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= @</span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />        if (! </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not connect to </span><span class="default">$host</span><span class="string"> on port </span><span class="default">$port</span><span class="string">."</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">login</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)<br />    {<br />        if (! @</span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not authenticate with username </span><span class="default">$username</span><span class="string"> " </span><span class="keyword">. </span><span class="string">"and password </span><span class="default">$password</span><span class="string">."</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp </span><span class="keyword">= @</span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br />        if (! </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not initialize SFTP subsystem."</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">uploadFile</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$remote_file</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />        </span><span class="default">$stream </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br />        if (! </span><span class="default">$stream</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not open file: </span><span class="default">$remote_file</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="default">$data_to_send </span><span class="keyword">= @</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">);<br />        if (</span><span class="default">$data_to_send </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not open local file: </span><span class="default">$local_file</span><span class="string">."</span><span class="keyword">);<br />        if (@</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$data_to_send</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not send data from file: </span><span class="default">$local_file</span><span class="string">."</span><span class="keyword">);<br />        @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">scanFilesystem</span><span class="keyword">(</span><span class="default">$remote_file</span><span class="keyword">) {<br />        </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">;<br />        </span><span class="default">$tempArray </span><span class="keyword">= array();<br /><br />        if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />            if (</span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />                while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />                    </span><span class="default">$filetype </span><span class="keyword">= </span><span class="default">filetype</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);<br />                    if(</span><span class="default">$filetype </span><span class="keyword">== </span><span class="string">"dir"</span><span class="keyword">) {<br />                        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scanFilesystem</span><span class="keyword">(</span><span class="default">$remote_file </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">);<br />                        foreach(</span><span class="default">$tmp </span><span class="keyword">as </span><span class="default">$t</span><span class="keyword">) {<br />                            </span><span class="default">$tempArray</span><span class="keyword">[] = </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$t</span><span class="keyword">;<br />                        }<br />                    } else {<br />                        </span><span class="default">$tempArray</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;<br />                    }<br />                }<br />                </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">);<br />            }<br />        }<br /><br />        return </span><span class="default">$tempArray</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">receiveFile</span><span class="keyword">(</span><span class="default">$remote_file</span><span class="keyword">, </span><span class="default">$local_file</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />        </span><span class="default">$stream </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />        if (! </span><span class="default">$stream</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Could not open file: </span><span class="default">$remote_file</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">));<br />        </span><span class="default">file_put_contents </span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br />        @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">deleteFile</span><span class="keyword">(</span><span class="default">$remote_file</span><span class="keyword">){<br />        </span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sftp</span><span class="keyword">;<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remote_file</span><span class="string">"</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82726">  <div class="votes">
    <div id="Vu82726">
    <a href="/manual/vote-note.php?id=82726&amp;page=function.ssh2-sftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82726">
    <a href="/manual/vote-note.php?id=82726&amp;page=function.ssh2-sftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82726" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82726" class="name">
  <strong class="user"><em>duke1 at drakkon dot net</em></strong></a><a class="genanchor" href="#82726"> &para;</a><div class="date" title="2008-04-23 08:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82726">
<div class="phpcode"><code><span class="html">if anyone is interested on how to get a directory listing:<br />$SSH_CONNECTION= ssh2_connect('shell.example.com', 22);<br />ssh2_auth_password($SSH_CONNECTION, 'username', 'password');<br />//------------------------------------------------------------------- <br />//this function finds all files within  given directory and returns them<br />function scanFilesystem($dir) {<br />    $tempArray = array();<br />    $handle = opendir($dir);<br />  // List all the files<br />    while (false !== ($file = readdir($handle))) {<br />    if (substr("$file", 0, 1) != "."){<br />           if(is_dir($file)){<br />            $tempArray[$file]=scanFilesystem("$dir/$file");<br />        } else {<br />            $tempArray[]=$file;<br />        }<br />    }<br />    }<br />   closedir($handle); <br />  return $tempArray;<br />}<br /><br />//------------------------------------------------------------------- <br />$sftp = ssh2_sftp($SSH_CONNECTION);<br /><br />//code to get listing of all OUTGOING files<br />$dir = "ssh2.s<a href="ftp://$sftp/outgoing" rel="nofollow" target="_blank">ftp://$sftp/outgoing</a>";<br />$outgoing = scanFilesystem($dir);<br />sort($outgoing);<br />print_r($outgoing);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ssh2-sftp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-sftp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ssh2.php">SSH2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ssh2-auth-agent.php" title="ssh2_&#8203;auth_&#8203;agent">ssh2_&#8203;auth_&#8203;agent</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-hostbased-file.php" title="ssh2_&#8203;auth_&#8203;hostbased_&#8203;file">ssh2_&#8203;auth_&#8203;hostbased_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-none.php" title="ssh2_&#8203;auth_&#8203;none">ssh2_&#8203;auth_&#8203;none</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-password.php" title="ssh2_&#8203;auth_&#8203;password">ssh2_&#8203;auth_&#8203;password</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-pubkey-file.php" title="ssh2_&#8203;auth_&#8203;pubkey_&#8203;file">ssh2_&#8203;auth_&#8203;pubkey_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-connect.php" title="ssh2_&#8203;connect">ssh2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-disconnect.php" title="ssh2_&#8203;disconnect">ssh2_&#8203;disconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-exec.php" title="ssh2_&#8203;exec">ssh2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fetch-stream.php" title="ssh2_&#8203;fetch_&#8203;stream">ssh2_&#8203;fetch_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fingerprint.php" title="ssh2_&#8203;fingerprint">ssh2_&#8203;fingerprint</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-accept.php" title="ssh2_&#8203;forward_&#8203;accept">ssh2_&#8203;forward_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-listen.php" title="ssh2_&#8203;forward_&#8203;listen">ssh2_&#8203;forward_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-methods-negotiated.php" title="ssh2_&#8203;methods_&#8203;negotiated">ssh2_&#8203;methods_&#8203;negotiated</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-poll.php" title="ssh2_&#8203;poll">ssh2_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-add.php" title="ssh2_&#8203;publickey_&#8203;add">ssh2_&#8203;publickey_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-init.php" title="ssh2_&#8203;publickey_&#8203;init">ssh2_&#8203;publickey_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-list.php" title="ssh2_&#8203;publickey_&#8203;list">ssh2_&#8203;publickey_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-remove.php" title="ssh2_&#8203;publickey_&#8203;remove">ssh2_&#8203;publickey_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-recv.php" title="ssh2_&#8203;scp_&#8203;recv">ssh2_&#8203;scp_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-send.php" title="ssh2_&#8203;scp_&#8203;send">ssh2_&#8203;scp_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-send-eof.php" title="ssh2_&#8203;send_&#8203;eof">ssh2_&#8203;send_&#8203;eof</a>
                        </li>
                                                <li class="current">
                            <a href="function.ssh2-sftp.php" title="ssh2_&#8203;sftp">ssh2_&#8203;sftp</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-chmod.php" title="ssh2_&#8203;sftp_&#8203;chmod">ssh2_&#8203;sftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-lstat.php" title="ssh2_&#8203;sftp_&#8203;lstat">ssh2_&#8203;sftp_&#8203;lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-mkdir.php" title="ssh2_&#8203;sftp_&#8203;mkdir">ssh2_&#8203;sftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-readlink.php" title="ssh2_&#8203;sftp_&#8203;readlink">ssh2_&#8203;sftp_&#8203;readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-realpath.php" title="ssh2_&#8203;sftp_&#8203;realpath">ssh2_&#8203;sftp_&#8203;realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rename.php" title="ssh2_&#8203;sftp_&#8203;rename">ssh2_&#8203;sftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rmdir.php" title="ssh2_&#8203;sftp_&#8203;rmdir">ssh2_&#8203;sftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-stat.php" title="ssh2_&#8203;sftp_&#8203;stat">ssh2_&#8203;sftp_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-symlink.php" title="ssh2_&#8203;sftp_&#8203;symlink">ssh2_&#8203;sftp_&#8203;symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-unlink.php" title="ssh2_&#8203;sftp_&#8203;unlink">ssh2_&#8203;sftp_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-shell.php" title="ssh2_&#8203;shell">ssh2_&#8203;shell</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-tunnel.php" title="ssh2_&#8203;tunnel">ssh2_&#8203;tunnel</a>
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
