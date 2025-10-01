<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2_auth_pubkey_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php">
 <link rel="shorturl" href="https://www.php.net/ssh2-auth-pubkey-file">
 <link rel="alternate" href="https://www.php.net/ssh2-auth-pubkey-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssh2-auth-password.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-connect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ssh2-auth-pubkey-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ssh2-auth-pubkey-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ssh2-auth-pubkey-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ssh2-auth-pubkey-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ssh2-auth-pubkey-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ssh2-auth-pubkey-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ssh2-auth-pubkey-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ssh2-auth-pubkey-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ssh2-auth-pubkey-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ssh2-auth-pubkey-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Authenticate using a public key" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2_auth_pubkey_file - Manual" />
<meta name="twitter:description" content="Authenticate using a public key" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2_auth_pubkey_file - Manual" />
<meta itemprop="description" content="Authenticate using a public key" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Authenticate using a public key" />

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
        <a href="function.ssh2-connect.php">
          ssh2_connect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssh2-auth-password.php">
          &laquo; ssh2_auth_password        </a>
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
            <option value='en/function.ssh2-auth-pubkey-file.php' selected="selected">English</option>
            <option value='de/function.ssh2-auth-pubkey-file.php'>German</option>
            <option value='es/function.ssh2-auth-pubkey-file.php'>Spanish</option>
            <option value='fr/function.ssh2-auth-pubkey-file.php'>French</option>
            <option value='it/function.ssh2-auth-pubkey-file.php'>Italian</option>
            <option value='ja/function.ssh2-auth-pubkey-file.php'>Japanese</option>
            <option value='pt_BR/function.ssh2-auth-pubkey-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.ssh2-auth-pubkey-file.php'>Russian</option>
            <option value='tr/function.ssh2-auth-pubkey-file.php'>Turkish</option>
            <option value='uk/function.ssh2-auth-pubkey-file.php'>Ukrainian</option>
            <option value='zh/function.ssh2-auth-pubkey-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ssh2-auth-pubkey-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2_auth_pubkey_file</h1>
  <p class="verinfo">(PECL ssh2 &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">ssh2_auth_pubkey_file</span> &mdash; <span class="dc-title">Authenticate using a public key</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ssh2-auth-pubkey-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ssh2_auth_pubkey_file</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$session</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$username</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pubkeyfile</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$privkeyfile</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$passphrase</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Authenticate using a public key read from a file.  
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ssh2-auth-pubkey-file-parameters">
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
    
    
     <dt><code class="parameter">username</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">pubkeyfile</code></dt>
     <dd>
      <p class="para">
       The public key file needs to be in OpenSSH&#039;s format. It should look something like:
      </p>
      <p class="para">
       ssh-rsa AAAAB3NzaC1yc2EAAA....NX6sqSnHA8= rsa-key-20121110
      </p>
     </dd>
    
    
     <dt><code class="parameter">privkeyfile</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">passphrase</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">privkeyfile</code> is encrypted (which it should
       be), the <code class="parameter">passphrase</code> must be provided.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ssh2-auth-pubkey-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ssh2-auth-pubkey-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4816">
    <p><strong>Example #1 Authentication using a public key</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'shell.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'hostkey'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'ssh-rsa'</span><span style="color: #007700">));<br /><br />if (</span><span style="color: #0000BB">ssh2_auth_pubkey_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />                          </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa.pub'</span><span style="color: #007700">,<br />                          </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret'</span><span style="color: #007700">)) {<br />  echo </span><span style="color: #DD0000">"Public Key Authentication Successful\n"</span><span style="color: #007700">;<br />} else {<br />  die(</span><span style="color: #DD0000">'Public Key Authentication Failed'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.ssh2-auth-pubkey-file-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The underlying libssh library doesn&#039;t support partial auths very cleanly
    That is, if you need to supply both a public key and a password it will
    appear as if this function has failed. In this particular case a failure
    from this call may just mean that auth hasn&#039;t been completed yet. You
    would need to ignore this failure and continue on and call
    <span class="function"><a href="function.ssh2-auth-password.php" class="function">ssh2_auth_password()</a></span> in order to complete
    authentication.
   </p>
  </p></blockquote>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/functions/ssh2-auth-pubkey-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ssh2-auth-pubkey-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ssh2-auth-pubkey-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126939">  <div class="votes">
    <div id="Vu126939">
    <a href="/manual/vote-note.php?id=126939&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126939">
    <a href="/manual/vote-note.php?id=126939&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126939" title="100% like this...">
    8
    </div>
  </div>
  <a href="#126939" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#126939"> &para;</a><div class="date" title="2022-03-18 03:46"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126939">
<div class="phpcode"><code><span class="html">The vendor we deal with requires the use of both password authentication AND a public/private key authentication.<br /><br />After much pain and testing, this is what we did to make it work, bypassing the need to install phpseclib:<br /><br /><span class="default">&lt;?php<br /><br />$server </span><span class="keyword">= </span><span class="string">"subdomain.example.com"</span><span class="keyword">;<br /></span><span class="default">$username </span><span class="keyword">= </span><span class="string">"username"</span><span class="keyword">;<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="string">"password"</span><span class="keyword">;<br /></span><span class="default">$path_to_public_key </span><span class="keyword">= </span><span class="string">"file.pub"</span><span class="keyword">;<br /></span><span class="default">$path_to_private_key </span><span class="keyword">= </span><span class="string">"file.priv"</span><span class="keyword">; </span><span class="comment">// critical: permissions must be 0600!!<br /></span><span class="default">$path_to_needed_file </span><span class="keyword">= </span><span class="string">"/path/to/file/needed.txt"</span><span class="keyword">;<br /><br /></span><span class="default">$ssh2 </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);<br />@</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$ssh2</span><span class="keyword">,</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$path_to_public_key</span><span class="keyword">,</span><span class="default">$path_to_private_key</span><span class="keyword">); </span><span class="comment">// this returns a warning but it is normal and can be ignored<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$ssh2</span><span class="keyword">,</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">);<br /></span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$ssh2</span><span class="keyword">);<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>" </span><span class="keyword">. </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$sftp</span><span class="keyword">). </span><span class="default">$path_to_needed_file</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">ssh2_disconnect</span><span class="keyword">(</span><span class="default">$ssh2</span><span class="keyword">);<br /><br />echo </span><span class="default">$content</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124965">  <div class="votes">
    <div id="Vu124965">
    <a href="/manual/vote-note.php?id=124965&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124965">
    <a href="/manual/vote-note.php?id=124965&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124965" title="67% like this...">
    23
    </div>
  </div>
  <a href="#124965" class="name">
  <strong class="user"><em>miloslav dot hula at gmail dot com</em></strong></a><a class="genanchor" href="#124965"> &para;</a><div class="date" title="2020-04-30 07:32"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124965">
<div class="phpcode"><code><span class="html">If you have a problem with an RSA key, check that private key file contents starts with:<br /><br />-----BEGIN RSA PRIVATE KEY-----<br /><br />and not with:<br /><br />-----BEGIN OPENSSH PRIVATE KEY-----<br /><br />The first one can be created by:<br /><br />ssh-keygen -m PEM -t rsa -f mykey</span></code></div>
  </div>
 </div>
  <div class="note" id="119042">  <div class="votes">
    <div id="Vu119042">
    <a href="/manual/vote-note.php?id=119042&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119042">
    <a href="/manual/vote-note.php?id=119042&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119042" title="90% like this...">
    8
    </div>
  </div>
  <a href="#119042" class="name">
  <strong class="user"><em>mrpetovan at gmail dot com</em></strong></a><a class="genanchor" href="#119042"> &para;</a><div class="date" title="2016-03-22 02:24"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119042">
<div class="phpcode"><code><span class="html">Beware of the tilde (~) in the key file paths, as they will trigger the following warning (on a debug build):<br /><br />PHP Warning:  String is not zero-terminated (ZZZZZZZZZZZZZZZZZZ1wjj*=?&lt;) (source: Zend/zend_execute.h:81) in Unknown on line 0<br /><br />although the authentication will suceed.<br /><br /><span class="default">&lt;?php <br />    $ssh_conn </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'test.host.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, array(</span><span class="string">'hostkey' </span><span class="keyword">=&gt; </span><span class="string">'ssh-rsa'</span><span class="keyword">));<br />    </span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$ssh_conn</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'~/.ssh/id_rsa.pub'</span><span class="keyword">, </span><span class="string">'~/.ssh/id_rsa'</span><span class="keyword">)<br /> </span><span class="default">?&gt;<br /></span><br />The above code will throw the Warning.<br /><br /><span class="default">&lt;?php <br />    $ssh_conn </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'test.host.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, array(</span><span class="string">'hostkey' </span><span class="keyword">=&gt; </span><span class="string">'ssh-rsa'</span><span class="keyword">));<br />    </span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$ssh_conn</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'/home/user/.ssh/id_rsa.pub'</span><span class="keyword">, </span><span class="string">'/home/user/.ssh/id_rsa'</span><span class="keyword">)<br /> </span><span class="default">?&gt;<br /></span><br />The above code won't.<br /><br />If you want to perform a dynamic replacement of the tilde, you can use posix_getpwuid (<a href="http://php.net/manual/en/function.posix-getpwuid.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.posix-getpwuid.php</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="125562">  <div class="votes">
    <div id="Vu125562">
    <a href="/manual/vote-note.php?id=125562&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125562">
    <a href="/manual/vote-note.php?id=125562&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125562" title="75% like this...">
    2
    </div>
  </div>
  <a href="#125562" class="name">
  <strong class="user"><em>Christophe</em></strong></a><a class="genanchor" href="#125562"> &para;</a><div class="date" title="2020-12-02 12:31"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125562">
<div class="phpcode"><code><span class="html">Users should be aware of bug 78661 <a href="https://bugs.php.net/bug.php?id=78661" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=78661</a> <br /><br />As of december 2020, on some Linux distro, (debian 10 and ubuntu 20.04 at least), although the ssh daemon will accept the connection, the function ssh2_auth_pubkey_file stubbornly reports an error.<br /><br />It took me hours to realise that my code was correct, but the function buggy. If you are hit by this bug, you may try <a href="https://www.php.net/ssh2_auth_password" rel="nofollow" target="_blank">https://www.php.net/ssh2_auth_password</a> instead... If applicable.</span></code></div>
  </div>
 </div>
  <div class="note" id="111061">  <div class="votes">
    <div id="Vu111061">
    <a href="/manual/vote-note.php?id=111061&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111061">
    <a href="/manual/vote-note.php?id=111061&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111061" title="66% like this...">
    7
    </div>
  </div>
  <a href="#111061" class="name">
  <strong class="user"><em>nerak-spelled-backwards at modo dot coop</em></strong></a><a class="genanchor" href="#111061"> &para;</a><div class="date" title="2013-01-10 05:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111061">
<div class="phpcode"><code><span class="html">This function has a known bug (<a href="https://bugs.php.net/bug.php?id=58573" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=58573</a>) under some Linux installations: you can't encrypt your private key if you've compiled libssh2 using libgcrypt.  According to the bug page, the solution is to rebuild libssh2 with OpenSSL.  (Or don't encrypt your private key, but that seems irresponsible somehow.)<br /><br />This isn't a bug report -- the bug is apparently already being fixed -- but a note for others, because it took me at least an hour of Googling to realize the problem wasn't with my own code.</span></code></div>
  </div>
 </div>
  <div class="note" id="107052">  <div class="votes">
    <div id="Vu107052">
    <a href="/manual/vote-note.php?id=107052&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107052">
    <a href="/manual/vote-note.php?id=107052&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107052" title="66% like this...">
    1
    </div>
  </div>
  <a href="#107052" class="name">
  <strong class="user"><em>christian at cvj dot se</em></strong></a><a class="genanchor" href="#107052"> &para;</a><div class="date" title="2012-01-03 04:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107052">
<div class="phpcode"><code><span class="html">On my linux debian server running php communicating with another linux debian server I had problems getting rsa to work. dsa worked out of the box. I got it to work by doing the following in terminal<br /><br />* ssh-keygen -t rsa<br />.... PUBFILE <br />* ssh-keygen -f PUBFILE -e<br />OUTPUT<br /><br />id_rsa.pub =<br />ssh-rsa OUTPUT [COMMENT]</span></code></div>
  </div>
 </div>
  <div class="note" id="105806">  <div class="votes">
    <div id="Vu105806">
    <a href="/manual/vote-note.php?id=105806&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105806">
    <a href="/manual/vote-note.php?id=105806&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105806" title="53% like this...">
    1
    </div>
  </div>
  <a href="#105806" class="name">
  <strong class="user"><em>max</em></strong></a><a class="genanchor" href="#105806"> &para;</a><div class="date" title="2011-09-16 04:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105806">
<div class="phpcode"><code><span class="html">Well, you have to format the publickey with the following command:<br /><br /># ssh-keygen -f id_rsa.pub -i<br />Output: "ssh-rsa &lt;YOURKEYDATA&gt;"<br /><br />That worked fine for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="97999">  <div class="votes">
    <div id="Vu97999">
    <a href="/manual/vote-note.php?id=97999&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97999">
    <a href="/manual/vote-note.php?id=97999&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97999" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97999" class="name">
  <strong class="user"><em>deepakssn@gmailcom</em></strong></a><a class="genanchor" href="#97999"> &para;</a><div class="date" title="2010-05-19 04:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97999">
<div class="phpcode"><code><span class="html">Setting up public key authentication:
<br />
<br />1.  Login to the unix server you want to connect using putty.
<br />2.  mkdir .ssh (there is a dot before ssh)
<br />3.  cd .ssh
<br />4.  ssh-keygen -t rsa mykey
<br />5.  Enter passphrase as test
<br />6.  ls -al -&gt; you will find two files mykey , mykey.pub
<br />7.  cat mykey.pub &gt;&gt;authorized_keys
<br />8.  cat mykey
<br />9.  Copy what you get on screen to notepad and save it as "c:\mykey" (within quotes)
<br />10.  cat mykey.pub
<br />11.  Copy what you get on screen to notepad and save it as "c:\mykey.pub" (within quotes)
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">my_ssh_disconnect</span><span class="keyword">(</span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$language</span><span class="keyword">) 
<br />{
<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Server disconnected with reason code [%d] and message: %s\n"</span><span class="keyword">, </span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">//Open a connection forcing 3des-cbc when sending packets, any strength aes cipher when receiving packets, no compression in either direction, and Group1 key exchange. 
<br /></span><span class="default">$methods </span><span class="keyword">= array(
<br />  </span><span class="string">'kex' </span><span class="keyword">=&gt; </span><span class="string">'diffie-hellman-group1-sha1'</span><span class="keyword">,
<br />  </span><span class="string">'client_to_server' </span><span class="keyword">=&gt; array(
<br />   </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'aes256-cbc'</span><span class="keyword">,
<br />   </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">,
<br />   </span><span class="string">'mac' </span><span class="keyword">=&gt; </span><span class="string">'hmac-sha1'</span><span class="keyword">),
<br />  </span><span class="string">'server_to_client' </span><span class="keyword">=&gt; array(
<br />   </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'aes256-cbc'</span><span class="keyword">,
<br />   </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">,
<br />   </span><span class="string">'mac' </span><span class="keyword">=&gt; </span><span class="string">'hmac-sha1'</span><span class="keyword">));
<br />
<br /></span><span class="default">$callbacks </span><span class="keyword">= array(</span><span class="string">'disconnect' </span><span class="keyword">=&gt; </span><span class="string">'my_ssh_disconnect'</span><span class="keyword">);
<br />
<br />      </span><span class="comment">// Function to run a command on the unix server
<br />
<br />      </span><span class="keyword">function </span><span class="default">run_cmd</span><span class="keyword">(</span><span class="default">$ssh_host</span><span class="keyword">, </span><span class="default">$user_name</span><span class="keyword">, </span><span class="default">$keyfilename</span><span class="keyword">, </span><span class="default">$ssh_command</span><span class="keyword">)
<br />      {
<br />          </span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$ssh_host</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, </span><span class="default">$methods</span><span class="keyword">, </span><span class="default">$callbacks</span><span class="keyword">);
<br />          if (!</span><span class="default">$connection</span><span class="keyword">) die(</span><span class="string">'Connection failed'</span><span class="keyword">);
<br />          if (</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$user_name</span><span class="keyword">, </span><span class="default">$keyfilename</span><span class="keyword">.</span><span class="string">".pub"</span><span class="keyword">, </span><span class="default">$keyfilename</span><span class="keyword">, </span><span class="string">'test'</span><span class="keyword">))
<br />          {
<br />            echo </span><span class="string">"Public Key Authentication Successful as user: </span><span class="default">$user_name</span><span class="string">"</span><span class="keyword">;
<br />          }
<br />          else
<br />          {
<br />            die(</span><span class="string">'Public Key Authentication Failed'</span><span class="keyword">);
<br />          }
<br />
<br />          </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="default">$ssh_command</span><span class="keyword">);
<br />          </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />          </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />          </span><span class="default">$line </span><span class="keyword">= </span><span class="default">stream_get_line</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);
<br />          while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">))                                                                               
<br />          {
<br />                  echo </span><span class="default">$line</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">;
<br />                  </span><span class="default">$line </span><span class="keyword">= </span><span class="default">stream_get_line</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);
<br />                  </span><span class="default">$i</span><span class="keyword">++;
<br />          }  
<br />          echo </span><span class="string">"Count : "</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">;
<br />          </span><span class="default">flush</span><span class="keyword">();
<br />          unset(</span><span class="default">$stream</span><span class="keyword">);  
<br />      }
<br />
<br />      function </span><span class="default">my_ssh_disconnect</span><span class="keyword">(</span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$language</span><span class="keyword">)
<br />      {
<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Server disconnected with reason code [%d] and message: %s\n"</span><span class="keyword">,
<br />            </span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">);
<br />      }
<br />
<br />      </span><span class="comment">// Main Code
<br />
<br />      </span><span class="default">$user_name </span><span class="keyword">= </span><span class="string">"USERID"</span><span class="keyword">;
<br />      </span><span class="default">$keydir </span><span class="keyword">= </span><span class="string">"c:\\"</span><span class="keyword">;
<br />      </span><span class="default">$search_string </span><span class="keyword">= </span><span class="string">'needle'</span><span class="keyword">;
<br />      </span><span class="default">$keyfilename</span><span class="keyword">= </span><span class="default">$keydir</span><span class="keyword">.</span><span class="string">'mykey'</span><span class="keyword">;
<br />      </span><span class="default">$ssh_host </span><span class="keyword">= </span><span class="string">"foo.bar.com"</span><span class="keyword">;
<br />      </span><span class="default">$ssh_command </span><span class="keyword">= </span><span class="string">'grep "'</span><span class="keyword">.</span><span class="default">$search_string</span><span class="keyword">.</span><span class="string">'" /haystack/*.log'</span><span class="keyword">;
<br />      </span><span class="default">run_cmd</span><span class="keyword">(</span><span class="default">$ssh_host</span><span class="keyword">, </span><span class="default">$user_name</span><span class="keyword">, </span><span class="default">$keyfilename</span><span class="keyword">, </span><span class="default">$ssh_command</span><span class="keyword">);
<br />
<br />      </span><span class="default">$ssh_command </span><span class="keyword">= </span><span class="string">'ls -al'</span><span class="keyword">;
<br />      </span><span class="default">run_cmd</span><span class="keyword">(</span><span class="default">$ssh_host</span><span class="keyword">, </span><span class="default">$user_name</span><span class="keyword">, </span><span class="default">$keyfilename</span><span class="keyword">, </span><span class="default">$ssh_command</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103931">  <div class="votes">
    <div id="Vu103931">
    <a href="/manual/vote-note.php?id=103931&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103931">
    <a href="/manual/vote-note.php?id=103931&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103931" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#103931" class="name">
  <strong class="user"><em>anjo2</em></strong></a><a class="genanchor" href="#103931"> &para;</a><div class="date" title="2011-05-11 08:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103931">
<div class="phpcode"><code><span class="html">rsa keys may don't work, using dsa keys are more compatible<br /><br />Linux:<br />ssh-keygen -t dsa<br />cat ~/.ssh/id_dsa.pub &gt;&gt; ~/.ssh/authorized_keys<br />chmod 700 ~/.ssh/<br />chmod -R 600 ~/.ssh/*<br /><br />PHP:<br /><span class="default">&lt;?php<br />    $methods </span><span class="keyword">= array(<br />    </span><span class="string">'kex' </span><span class="keyword">=&gt; </span><span class="string">'diffie-hellman-group1-sha1'</span><span class="keyword">,<br />    </span><span class="string">'hostkey' </span><span class="keyword">=&gt; </span><span class="string">'ssh-dss'</span><span class="keyword">,<br />    </span><span class="string">'client_to_server' </span><span class="keyword">=&gt; array(<br />    </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'3des-cbc'</span><span class="keyword">,<br />    </span><span class="string">'mac' </span><span class="keyword">=&gt; </span><span class="string">'hmac-md5'</span><span class="keyword">,<br />    </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">),<br />    </span><span class="string">'server_to_client' </span><span class="keyword">=&gt; array(<br />    </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'3des-cbc'</span><span class="keyword">,<br />    </span><span class="string">'mac' </span><span class="keyword">=&gt; </span><span class="string">'hmac-md5'</span><span class="keyword">,<br />    </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">));<br />    </span><span class="default">$connect </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, </span><span class="default">$methods</span><span class="keyword">);<br />    if(</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'~/.ssh/id_dsa.pub'</span><span class="keyword">, </span><span class="string">'~/.ssh/id_dsa'</span><span class="keyword">))<br />    {<br />        echo </span><span class="string">"Public Key Authentication Successful\n"</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        echo </span><span class="string">"Public Key Authentication Failed\n"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94355">  <div class="votes">
    <div id="Vu94355">
    <a href="/manual/vote-note.php?id=94355&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94355">
    <a href="/manual/vote-note.php?id=94355&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94355" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#94355" class="name">
  <strong class="user"><em>gramo dot gnu at gmail dot com</em></strong></a><a class="genanchor" href="#94355"> &para;</a><div class="date" title="2009-10-29 03:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94355">
<div class="phpcode"><code><span class="html">I had an anoyiing problem with this function, everytime I tried to make it run it responds with an 
<br />
<br />Authentication failed for &lt;user&gt; using public key
<br />
<br />but when I try directly to connect to the server using
<br />ssh &lt;user&gt;@&lt;domain&gt;
<br />Things works fine...
<br />
<br />After lots of intents I realize that local files were read protected from user apache (they were stored at /home/&lt;user&gt;/.ssh directory)
<br />
<br />So, if you also have this problem, just make a new directory into a place where apache can read and place there the keys.
<br />
<br />The whole thing I do is as follows (Linux &amp; Apache both server and client):
<br />
<br />First I create a directory where apache can read
<br />
<br />mkdir ~/.newssh_keys
<br />chmod 777 ~/.newssh_keys
<br />
<br />(This is a security issue, so maybe you need to realize how to make it safer.)
<br />
<br />Then I create keys into local server choosing ~/.newssh_keys/id_dsa as the file to save the key:
<br />
<br />ssh-keygen -t dsa
<br />...
<br />Enter file in which to save the key (/home/&lt;user&gt;/.ssh/id_dsa): ~/.newssh_keys/id_dsa
<br />...
<br />
<br />Then I have to change permissions to private key
<br />(This is a security issue, so maybe you need to realize how to make it safer.)
<br />
<br />chmod 644 ~/.newssh_keys/id_dsa
<br />
<br />I copy the public key into the server's .ssh directory
<br />client$ scp id_dsa.pub &lt;remoteuser&gt;@&lt;server_domain&gt;:~/.ssh/
<br />
<br />and then I connect myself to the server using traditional ssh in order to append the public key at the end of authorized_keys2 file
<br />
<br />server$ cat ~/.ssh/id_dsa.pub &gt;&gt; ~/.ssh/authorized_keys2
<br />
<br />and remove the public key in order to be clean
<br />server$ rm ~/.ssh/id_dsa.pub
<br />
<br />Finally I use this code into my php script
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// This in order to be sure apache can read public key
<br />// (remove this after debug)
<br /></span><span class="default">$pub_key </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'~/.newssh_keys/id_dsa.pub'</span><span class="keyword">);
<br />print </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$pub_key</span><span class="keyword">);
<br />print </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// This in order to check private one
<br />// (remove this after debug)
<br /></span><span class="default">$prv_key </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'~/.newssh_keys/id_dsa'</span><span class="keyword">);
<br />print </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$prv_key</span><span class="keyword">);
<br />print </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Finally the connection code
<br /></span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'&lt;server_domain&gt;'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, array(</span><span class="string">'hostkey'</span><span class="keyword">, </span><span class="string">'ssh-dss'</span><span class="keyword">));
<br />if (</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'&lt;server_user&gt;'</span><span class="keyword">,
<br />                          </span><span class="string">'~/.newssh_keys/id_dsa.pub'</span><span class="keyword">,
<br />                          </span><span class="string">'~/.newssh_keys/id_dsa'</span><span class="keyword">)) {
<br />  echo </span><span class="string">"Public Key Authentication Successful\n"</span><span class="keyword">;
<br />} else {
<br />  echo </span><span class="string">"Public Key Authentication Failed"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76812">  <div class="votes">
    <div id="Vu76812">
    <a href="/manual/vote-note.php?id=76812&amp;page=function.ssh2-auth-pubkey-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76812">
    <a href="/manual/vote-note.php?id=76812&amp;page=function.ssh2-auth-pubkey-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76812" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#76812" class="name">
  <strong class="user"><em>tekiedude at gmail dot com</em></strong></a><a class="genanchor" href="#76812"> &para;</a><div class="date" title="2007-07-31 01:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76812">
<div class="phpcode"><code><span class="html">This is probably incredibly insecure but if you are in a closed environment, you can run it at your own risk. <br /><br />I was trying to get ssh access from server A to server B but server A was running apache as 'apache' and <br />I needed files on server B that were owned by root. So I needed some way for the apache user to connect <br />to server B as root.  Here's what I did (both servers running linux - specifically CentOS4):<br /><br />1. ssh-keygen -t rsa -f id_rsa  generate with no passphrase<br />2. append the id_rsa.pub file to server B /root/.ssh/authorized_keys2<br />3. copy the id_rsa and id_rsa.pub files to a directory like /var/www/.ssh/ <br />(happens to be apache's home dir on CentOS)<br />4. chown -R apache.apache /var/www/.ssh<br /><br />Then you can connect like this:<br />$connection = ssh2_connect($server,22,array('hostkey'=&gt;'ssh-rsa'));<br />if (ssh2_auth_pubkey_file($connection,'root',<br />'/var/www/.ssh/id_rsa.pub',<br />'/var/www/.ssh/id_rsa')) {<br />echo "success!";<br />}<br />else<br />{<br />echo "no success :-(";<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ssh2-auth-pubkey-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
