<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2_scp_recv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ssh2-scp-recv.php">
 <link rel="shorturl" href="https://www.php.net/ssh2-scp-recv">
 <link rel="alternate" href="https://www.php.net/ssh2-scp-recv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssh2-publickey-remove.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-scp-send.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ssh2-scp-recv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ssh2-scp-recv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ssh2-scp-recv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ssh2-scp-recv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ssh2-scp-recv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ssh2-scp-recv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ssh2-scp-recv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ssh2-scp-recv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ssh2-scp-recv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ssh2-scp-recv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ssh2-scp-recv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Request a file via SCP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2_scp_recv - Manual" />
<meta name="twitter:description" content="Request a file via SCP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2_scp_recv - Manual" />
<meta itemprop="description" content="Request a file via SCP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Request a file via SCP" />

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
        <a href="function.ssh2-scp-send.php">
          ssh2_scp_send &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssh2-publickey-remove.php">
          &laquo; ssh2_publickey_remove        </a>
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
            <option value='en/function.ssh2-scp-recv.php' selected="selected">English</option>
            <option value='de/function.ssh2-scp-recv.php'>German</option>
            <option value='es/function.ssh2-scp-recv.php'>Spanish</option>
            <option value='fr/function.ssh2-scp-recv.php'>French</option>
            <option value='it/function.ssh2-scp-recv.php'>Italian</option>
            <option value='ja/function.ssh2-scp-recv.php'>Japanese</option>
            <option value='pt_BR/function.ssh2-scp-recv.php'>Brazilian Portuguese</option>
            <option value='ru/function.ssh2-scp-recv.php'>Russian</option>
            <option value='tr/function.ssh2-scp-recv.php'>Turkish</option>
            <option value='uk/function.ssh2-scp-recv.php'>Ukrainian</option>
            <option value='zh/function.ssh2-scp-recv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ssh2-scp-recv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2_scp_recv</h1>
  <p class="verinfo">(PECL ssh2 &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">ssh2_scp_recv</span> &mdash; <span class="dc-title">Request a file via SCP</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ssh2-scp-recv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ssh2_scp_recv</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$session</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$remote_file</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$local_file</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Copy a file from the remote server to the local filesystem using the SCP protocol.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ssh2-scp-recv-parameters">
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
    
    
     <dt><code class="parameter">remote_file</code></dt>
     <dd>
      <p class="para">
       Path to the remote file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">local_file</code></dt>
     <dd>
      <p class="para">
       Path to the local file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ssh2-scp-recv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ssh2-scp-recv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4824">
    <p><strong>Example #1 Downloading a file via SCP</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'shell.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ssh2_auth_password</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'password'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">ssh2_scp_recv</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'/remote/filename'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/local/filename'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ssh2-scp-recv-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ssh2-scp-send.php" class="function" rel="rdfs-seeAlso">ssh2_scp_send()</a> - Send a file via SCP</span></li>
    <li><span class="function"><a href="function.copy.php" class="function" rel="rdfs-seeAlso">copy()</a> - Copies file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/functions/ssh2-scp-recv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ssh2-scp-recv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ssh2-scp-recv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-scp-recv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112508">  <div class="votes">
    <div id="Vu112508">
    <a href="/manual/vote-note.php?id=112508&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112508">
    <a href="/manual/vote-note.php?id=112508&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112508" title="75% like this...">
    2
    </div>
  </div>
  <a href="#112508" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112508"> &para;</a><div class="date" title="2013-06-24 09:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112508">
<div class="phpcode"><code><span class="html">May fail when trying to get a remote file from the user's home directory when you try to use a path like '~/filename.txt' .  It appears to dislike tildes, so use the full file path.</span></code></div>
  </div>
 </div>
  <div class="note" id="119630">  <div class="votes">
    <div id="Vu119630">
    <a href="/manual/vote-note.php?id=119630&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119630">
    <a href="/manual/vote-note.php?id=119630&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119630" title="55% like this...">
    3
    </div>
  </div>
  <a href="#119630" class="name">
  <strong class="user"><em>liubomyr dot pelo at gmail dot com</em></strong></a><a class="genanchor" href="#119630"> &para;</a><div class="date" title="2016-07-20 07:56"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119630">
<div class="phpcode"><code><span class="html">In case if you get:<br /><br />Warning: ssh2_scp_recv(): Unable to receive remote file in /some-php-file.php on line 2<br /><br />Use `stream_get_contents` function.<br /><br />Example:<br /><span class="default">&lt;?php<br />$stream </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp$remoteFile</span><span class="string">"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />if (! </span><span class="default">$stream</span><span class="keyword">) {<br />        throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"Could not open file: </span><span class="default">$remoteFile</span><span class="string">"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$contents </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /></span><span class="default">file_put_contents </span><span class="keyword">(</span><span class="default">$localFile</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br />@</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104124">  <div class="votes">
    <div id="Vu104124">
    <a href="/manual/vote-note.php?id=104124&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104124">
    <a href="/manual/vote-note.php?id=104124&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104124" title="55% like this...">
    2
    </div>
  </div>
  <a href="#104124" class="name">
  <strong class="user"><em>ojovirtual</em></strong></a><a class="genanchor" href="#104124"> &para;</a><div class="date" title="2011-05-25 01:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104124">
<div class="phpcode"><code><span class="html">Trying to get a remote file with spaces in its name?
<br />
<br />Never forget to use quotes in the remote filename, but never in the local one.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$remote_file_name</span><span class="keyword">=</span><span class="string">"my name with spaces.ext"
<br />
<br /></span><span class="default">ssh2_scp_recv</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">,</span><span class="default">$remote_file_name</span><span class="keyword">,</span><span class="default">$local_path</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$remote_file_name</span><span class="keyword">); </span><span class="comment">// ERROR
<br />
<br /></span><span class="default">ssh2_scp_recv</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">,</span><span class="string">"\""</span><span class="keyword">.</span><span class="default">$remote_file_name</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">,</span><span class="default">$local_path</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$remote_file_name</span><span class="keyword">); </span><span class="comment">//OK
<br />
<br /></span><span class="default">ssh2_scp_recv</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">,</span><span class="string">"\""</span><span class="keyword">.</span><span class="default">$remote_file_name</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">,</span><span class="string">"\""</span><span class="keyword">.</span><span class="default">$local_path</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$remote_file_name</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">); </span><span class="comment">//ERROR
<br /></span><span class="default">?&gt;
<br /></span>
<br />So, the quotes in the file name are needed only for remote, not for local.</span></code></div>
  </div>
 </div>
  <div class="note" id="82731">  <div class="votes">
    <div id="Vu82731">
    <a href="/manual/vote-note.php?id=82731&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82731">
    <a href="/manual/vote-note.php?id=82731&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82731" title="100% like this...">
    2
    </div>
  </div>
  <a href="#82731" class="name">
  <strong class="user"><em>miller4980 at msn dot com</em></strong></a><a class="genanchor" href="#82731"> &para;</a><div class="date" title="2008-04-23 11:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82731">
<div class="phpcode"><code><span class="html">Problem:<br />  can't pass an array to sftp_scp_rec()<br />  also: for Windows: sftp was not happy when connecting to   a  Windows dir. <br />  eg: sftp_scp_rec($connection, "remote/directory","local/$directory[$i]");<br />Solution:<br />The array was placing whitespace on the end of the variable.<br />trim(" ","",$directory[$i]);<br /><br />connecting to Windows dir:<br />sftp_scp_rec($connection, "linux/directory","\\windows\share[$i]");<br /><br />This script backs up remote Linux directories to a local Windows directory based on modified dates of files.<br /><br />The Idea is to get a complete back up of a directory via ftp client etc. <br />Then when the script runs it will back up newly modified files only.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//error_reporting(0);<br /><br /></span><span class="default">$file        </span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$arr2        </span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$arr1        </span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$ldir         </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br /></span><span class="default">$remotedirs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]     = </span><span class="string">"Domain name or IP address/"</span><span class="keyword">;<br /></span><span class="default">$remotedirs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]     = </span><span class="string">"Domain name or IP address/"</span><span class="keyword">;<br /></span><span class="default">$remotedirs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]     = </span><span class="string">"Domain name or IP address/"</span><span class="keyword">;<br /></span><span class="default">$remotedirs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]     = </span><span class="string">"Domain name or IP address/"</span><span class="keyword">;<br /><br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"c:\dirlist.txt"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />foreach (</span><span class="default">$remotedirs </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">){<br />echo </span><span class="default">$remotedir </span><span class="keyword">= </span><span class="string">"/data/www/</span><span class="default">$val</span><span class="string">/"</span><span class="keyword">;<br /></span><span class="default">$localdir     </span><span class="keyword">= </span><span class="string">"\\\\192.168.0.234\\C$\\xampp\\htdocs\\</span><span class="default">$val</span><span class="string">\\"</span><span class="keyword">;<br /></span><span class="default">backupwebsites</span><span class="keyword">(</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$localdir</span><span class="keyword">);<br />}<br />function </span><span class="default">backupwebsites</span><span class="keyword">(</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$localdir</span><span class="keyword">){<br />    </span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">Host IP </span><span class="keyword">or </span><span class="default">Domain</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br />    </span><span class="default">$com </span><span class="keyword">=</span><span class="string">"ls -R -lt </span><span class="default">$remotedir</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);<br />    </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$com </span><span class="keyword">);<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /><br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"c:\dirlist.txt"</span><span class="keyword">,</span><span class="string">"a+"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />    </span><span class="default">$handle </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'c:\dirlist.txt'</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />if (</span><span class="default">$handle</span><span class="keyword">) {<br />   while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />       </span><span class="default">$lines</span><span class="keyword">[] = </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br />   }<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />}<br />    foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">$yr </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-m-d'</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        </span><span class="default">$arr1</span><span class="keyword">=</span><span class="default">split</span><span class="keyword">(</span><span class="string">"200"</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);<br />        </span><span class="default">$arr2</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        if(</span><span class="string">"200"</span><span class="keyword">.</span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]==</span><span class="default">$yr</span><span class="keyword">)<br />        {<br />            </span><span class="comment">//if("200".$arr2[0]=='2008-04-21'){    //for testing<br />            </span><span class="default">$remotedir </span><span class="keyword">= </span><span class="default">$remotedir</span><span class="keyword">.</span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />            </span><span class="default">$cpy</span><span class="keyword">=</span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />            </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$localdir</span><span class="keyword">;<br />            </span><span class="default">glue</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$localdir</span><span class="keyword">,</span><span class="default">$cpy</span><span class="keyword">);<br />        }<br />    }<br />}    <br /></span><span class="comment">//echo $i;<br /></span><span class="keyword">function </span><span class="default">glue</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$localdir</span><span class="keyword">,</span><span class="default">$cpy</span><span class="keyword">){<br />    </span><span class="default">$ldir</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"</span><span class="default">$localdir</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">$ldir</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="string">"</span><span class="default">$cpy</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$ldir</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="default">$ldir</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />     </span><span class="default">$file</span><span class="keyword">;<br /> </span><span class="default">gop</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">);<br />}<br />function </span><span class="default">gop</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$remotedir</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">){<br />echo </span><span class="default">$file</span><span class="keyword">;<br /><br /></span><span class="default">ssh2_scp_recv</span><span class="keyword">(<br /></span><span class="default">$connection</span><span class="keyword">, <br /></span><span class="default">$remotedir</span><span class="keyword">,<br /></span><span class="default">$file</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110230">  <div class="votes">
    <div id="Vu110230">
    <a href="/manual/vote-note.php?id=110230&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110230">
    <a href="/manual/vote-note.php?id=110230&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110230" title="100% like this...">
    1
    </div>
  </div>
  <a href="#110230" class="name">
  <strong class="user"><em>mark at mohc dot net</em></strong></a><a class="genanchor" href="#110230"> &para;</a><div class="date" title="2012-10-03 12:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110230">
<div class="phpcode"><code><span class="html">Transferred files can be truncated if you do not call ssh2_exec($connection,'exit').  ssh2_scp_send will return true even if the file did not completely transfer.<br /><br />eg.<br /><br />ssh2_scp_send($connection, $infile, $remotefile, 0644);<br />ssh2_exec($connection, 'exit'); // exit the ssh2 connection</span></code></div>
  </div>
 </div>
  <div class="note" id="97997">  <div class="votes">
    <div id="Vu97997">
    <a href="/manual/vote-note.php?id=97997&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97997">
    <a href="/manual/vote-note.php?id=97997&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97997" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97997" class="name">
  <strong class="user"><em>luis dot sv at gmail dot com</em></strong></a><a class="genanchor" href="#97997"> &para;</a><div class="date" title="2010-05-19 03:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97997">
<div class="phpcode"><code><span class="html">This function can be used to copy all files into a directory on a remote server, using SSH and SCP.
<br />
<br /><span class="default">&lt;?php
<br />$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'host'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);
<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);
<br />
<br /></span><span class="default">$remote_dir</span><span class="keyword">=</span><span class="string">"/remote_dir/"</span><span class="keyword">;
<br /></span><span class="default">$local_dir</span><span class="keyword">=</span><span class="string">"/local_dir/"</span><span class="keyword">;
<br />
<br /></span><span class="default">$com </span><span class="keyword">=</span><span class="string">"ls </span><span class="default">$remote_dir</span><span class="string">"</span><span class="keyword">;
<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$com</span><span class="keyword">);
<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">$cmd</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);
<br />
<br /></span><span class="default">$arr</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$cmd</span><span class="keyword">);
<br />
<br /></span><span class="default">$total_files</span><span class="keyword">=</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);
<br />
<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$total_files</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){
<br />    </span><span class="default">$file_name</span><span class="keyword">=</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />    if(</span><span class="default">$file_name</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">){
<br />        </span><span class="default">$remote_file</span><span class="keyword">=</span><span class="default">$remote_dir</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">;        
<br />        </span><span class="default">$local_file</span><span class="keyword">=</span><span class="default">$local_dir</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">;
<br />        
<br />        if(</span><span class="default">ssh2_scp_recv</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$remote_file</span><span class="keyword">,</span><span class="default">$local_file</span><span class="keyword">)){
<br />            echo </span><span class="string">"File "</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">.</span><span class="string">" was copied to </span><span class="default">$local_dir</span><span class="string">&lt;br /&gt;"</span><span class="keyword">;
<br />        }
<br />    }
<br />}
<br />
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83487">  <div class="votes">
    <div id="Vu83487">
    <a href="/manual/vote-note.php?id=83487&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83487">
    <a href="/manual/vote-note.php?id=83487&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83487" title="no votes...">
    0
    </div>
  </div>
  <a href="#83487" class="name">
  <strong class="user"><em>gordon_e_rouse at yahoo dot com dot au</em></strong></a><a class="genanchor" href="#83487"> &para;</a><div class="date" title="2008-05-28 03:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83487">
<div class="phpcode"><code><span class="html">Being still in Beta, I guess it will have it quirks. One I found was that if the remote filename has brackets in it, it just wont work.<br /><br />I should file it as a bug report, but find the process all intimidating really - I am always just a stupid user who does not know what he is on about!<br /><br />But anyway - the work around of renaming the file before downloading it works fine.<br /><br />use:<br />$_new_path = str_replace("(", "", $_path );<br />$_new_path = str_replace(")", "", $_new_path );<br /><br />ssh2_sftp_rename( $sftp,  $_path, $_new_path );<br /><br />To tell you the truth I haven't determined if it is the open or close bracket, or both. Someone else can investigate that.<br /><br />Meanwhile, it would be good to know all the bad filename characters which this function has problems with, no doubt there are more.</span></code></div>
  </div>
 </div>
  <div class="note" id="68734">  <div class="votes">
    <div id="Vu68734">
    <a href="/manual/vote-note.php?id=68734&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68734">
    <a href="/manual/vote-note.php?id=68734&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68734" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#68734" class="name">
  <strong class="user"><em>jcalcote at novell dot com</em></strong></a><a class="genanchor" href="#68734"> &para;</a><div class="date" title="2006-08-08 01:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68734">
<div class="phpcode"><code><span class="html">If you scan a remote directory for a list of files by using opendir and readdir on a path obtained from ssh2_sftp(), you'll end up with a list of full file paths containing the ssh2.s<a href="ftp://$sftp" rel="nofollow" target="_blank">ftp://$sftp</a> prefix, where $sftp is the sftp resource string returned by ssh2_sftp. <br /><br />If you later attempt to use ssh2_scp_recv() (even on the same connection!) to copy files locally from the remote path, the copy operation will fail because ssh2_scp_recv() doesn't like the wrapper path prefix. It expects remote file references to be rooted at the base of the remote file system (eg., '/').<br /><br />Moral: ssh2_scp_recv() likes paths rooted at the file system root on the remote machine, not full network paths. This routine will fail with an obscure message about not being able to copy the files - yet when you go look it works fine. Worse, when you connect and copy them from an scp shell session, it also works fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="112862">  <div class="votes">
    <div id="Vu112862">
    <a href="/manual/vote-note.php?id=112862&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112862">
    <a href="/manual/vote-note.php?id=112862&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112862" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#112862" class="name">
  <strong class="user"><em>Maddie</em></strong></a><a class="genanchor" href="#112862"> &para;</a><div class="date" title="2013-07-30 05:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112862">
<div class="phpcode"><code><span class="html">If you are getting the error - ssh2_scp_recv(): Unable to receive remote file<br /><br />Try using file_get_contents("ssh2.s<a href="ftp://$sftp$fileLocation" rel="nofollow" target="_blank">ftp://$sftp$fileLocation</a>") and file_put_contents() as a workaround-- this is after I tried all sorts of different remote file path formats to no avail.</span></code></div>
  </div>
 </div>
  <div class="note" id="82072">  <div class="votes">
    <div id="Vu82072">
    <a href="/manual/vote-note.php?id=82072&amp;page=function.ssh2-scp-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82072">
    <a href="/manual/vote-note.php?id=82072&amp;page=function.ssh2-scp-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82072" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#82072" class="name">
  <strong class="user"><em>chad dot [the letter d] johnson AT gmail</em></strong></a><a class="genanchor" href="#82072"> &para;</a><div class="date" title="2008-03-26 12:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82072">
<div class="phpcode"><code><span class="html">If when trying to use this function you get "Warning: ssh2_scp_send(): Failure creating remote file," then try using<br /><br />$data = file_get_contents("ssh2.s<a href="ftp://$sftp/path/to/file" rel="nofollow" target="_blank">ftp://$sftp/path/to/file</a>");</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ssh2-scp-recv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-scp-recv.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.ssh2-scp-recv.php" title="ssh2_&#8203;scp_&#8203;recv">ssh2_&#8203;scp_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-send.php" title="ssh2_&#8203;scp_&#8203;send">ssh2_&#8203;scp_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-send-eof.php" title="ssh2_&#8203;send_&#8203;eof">ssh2_&#8203;send_&#8203;eof</a>
                        </li>
                                                <li class="">
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
